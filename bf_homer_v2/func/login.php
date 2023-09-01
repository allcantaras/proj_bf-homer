<?php
session_start();
include_once('conexao.php');

if(empty($_POST['txtLogin']) || empty($_POST['txtSenha'])) {
	header('Location: ../index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['txtLogin']);
$senha = mysqli_real_escape_string($conn, $_POST['txtSenha']);

$sql = "SELECT COUNT(*) AS TOTAL FROM ALAS_HMR_USERS WHERE USUARIO = '$usuario'";
$result = mysqli_query($conn,$sql);
$r = mysqli_fetch_assoc($result);

if ($r['TOTAL'] == 0){
	$_SESSION['msg'] = true;
	header('Location: ../index.php');
	exit();
}

$query = "SELECT id_usuario, usuario, p_nome, email, acesso, perfil FROM ALAS_HMR_USERS WHERE USUARIO = '$usuario' AND SENHA = md5('$senha')";

$result = mysqli_query($conn, $query);

$d = mysqli_fetch_assoc($result);

$row = mysqli_num_rows($result);

if ($row == 1 and $d['acesso'] == 1) {
	$_SESSION['nome'] = $d['p_nome'];
	$_SESSION['usuario'] = $d['usuario'];
	$_SESSION['email'] = $d['email'];
	$_SESSION['acesso'] = $d['acesso'];
	$_SESSION['id'] = $d['id_usuario'];
	$_SESSION['perfil'] = $d['perfil'];
	header('Location: ../prim_acesso.php');
	exit();

} elseif ($row == 1 and $d['acesso'] == 2) {
	$_SESSION['nome'] = $d['p_nome'];
	$_SESSION['usuario'] = $d['usuario'];
	$_SESSION['email'] = $d['email'];
	$_SESSION['acesso'] = $d['acesso'];
	$_SESSION['perfil'] = $d['perfil'];
	header('Location: ../home.php');
	exit();
	
} else {
	$_SESSION['nao_aut'] = true;
	header('Location: ../index.php');
	exit();
}