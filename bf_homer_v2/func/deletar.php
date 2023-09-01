<?php
session_start();

include_once('conexao.php');

if (isset($_POST['btn-deletar'])):

	$id = mysqli_escape_string($conn, $_POST['id']);

	$sql = "DELETE FROM ALAS_HMR_USERS WHERE id_usuario = '$id'";

	if(mysqli_query($conn,$sql)):
		$_SESSION['status_delet'] = true;
		header('Location: ../usuarios.php');
		exit();
	else:
		$_SESSION['status_delet'] = false;
		echo "Erro!";
		exit();
	endif;
endif;

?>