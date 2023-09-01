<?php
session_start();
include_once('func/conexao.php');

$requestData = $_REQUEST;

$columns = array(
	array( '0' => 'p_nome' ),
	array( '1' => 'u_nome' ),
	array( '2' => 'email' ),
	array( '3' => 'perfil_desc' ),
	array( '4' => 'usuario' )
);

$result_user = "SELECT p_nome, u_nome, email, perfil_desc, usuario FROM ALAS_HMR_USERS";
$resultado_user = mysqli_query ($conn, $result_user);
$row = mysqli_num_rows($resultado_user);


// PESQUISA
$result_usuarios = "SELECT p_nome, u_nome, email, perfil_desc, usuario FROM ALAS_HMR_USERS WHERE 1=1";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);

$result_usuario .= " ORDER BY ". $columns[$requestData['order'][0]['colum']]."  ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."  ";

$resultado_usuarios = mysqli_query($conn, $result_usuarios);

$dados = array();
while ($row_usuarios = mysqli_fetch_array($resultado_usuarios)):
	$dado = array();
	$dado[] = $row_usuarios['p_nome'];
	$dado[] = $row_usuarios['u_nome'];
	$dado[] = $row_usuarios['email'];
	$dado[] = $row_usuarios['perfil_desc'];
	$dado[] = $row_usuarios['usuario'];

	$dados[] = $dado;

	$json_data = array(
		"draw" => intval($requestData['draw']),
		"recordsTotal" => intval($qnt_linhas),
		"recordsFiltered" => intval($totalFiltered),
		"data" => $dados
	);

	echo json_encode($json_data);
	?>