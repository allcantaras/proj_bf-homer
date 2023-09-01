<?php
session_start();
include_once('conexao.php');

// $arquivo = $_FILES['arq'];
// var_dump($arquivo);

if($_FILES['arq']['name'] == ""){
	$_SESSION['msg_vazio'] = true;
	header('Location: ../risco_questoes.php');
	exit();
}

$arquivo_tmp = $_FILES['arq']['tmp_name'];

$dados = file($arquivo_tmp);
$remove = array_shift($dados);
 // var_dump($dados);
 // exit();

foreach ($dados as $linha) {
	$linha = trim($linha);
	$valor = explode(';', $linha);
	 // var_dump($valor);
	 // exit();

	$questao = utf8_decode(trim($valor[0]));
	$dimensao = utf8_decode(trim($valor[1]));
	$mand_class = utf8_decode(trim($valor[2]));
	$on_prem = utf8_decode(trim($valor[3]));
	$colocation = utf8_decode(trim($valor[4]));
	$hosting = utf8_decode(trim($valor[5]));
	$iaas = utf8_decode(trim($valor[6]));
	$saas = utf8_decode(trim($valor[7]));
	$paas = utf8_decode(trim($valor[8]));
	$inserido_por = $_SESSION['usuario'];
	$ip = $_SERVER['REMOTE_ADDR'];

	$sql = "INSERT INTO ALAS_HMR_QUEST (questao, dimensao, mand_class, on_prem, colocation, hosting, iaas, saas, paas, inserido_por, inserido_em, ip) VALUES ('$questao','$dimensao','$mand_class','$on_prem','$colocation','$hosting','$iaas','$saas','$paas','$inserido_por',NOW(),'$ip')";
	$result = mysqli_query($conn, $sql);
	$i += 1;
}	
$_SESSION['msg_sucesso'] = true;
header('Location: ../risco_questoes.php');

?>

