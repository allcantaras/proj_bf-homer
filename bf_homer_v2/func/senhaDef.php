<?php
session_start();
include_once('conexao.php');

$id = $_SESSION['id'];
$senhaDig = mysqli_real_escape_string($conn, $_POST['txtPass']);
$senhaConf = mysqli_real_escape_string($conn, $_POST['txtPassC']);
$senha = md5($senhaConf);

$query = "UPDATE ALAS_HMR_USERS SET senha = '$senha', acesso = 2 WHERE id_usuario = '$id'";
$result = mysqli_query($conn, $query);

if (($result === TRUE) && ($senhaDig == $senhaConf)) {
	header('Location: ../home.php');
	exit();
} else {
	$_SESSION['nao_confere'] = true;
	header('Location: ../prim_acesso.php');
	exit();
}


?>