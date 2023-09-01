<?php
session_start();
include_once('conexao.php');

$pNome = strtoupper(utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtPNome']))));
$uNome = strtoupper(utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtUNome']))));
$email = mysqli_real_escape_string($conn, trim($_POST['txtEmail']));
$perfil = $_POST['perfil'];

if ($perfil == 1):
	$perfil_desc = 'ANALISTA DE COMPRAS';
elseif ($perfil == 2):
	$perfil_desc = utf8_decode('SEGURANÇA DA INFORMAÇÃO');
elseif ($perfil == 3):
	$perfil_desc = 'ANALISTA DE PRIVACIDADE';
elseif ($perfil == 4):
	$perfil_desc = 'GESTOR';
elseif ($perfil == 5):
	$perfil_desc = 'RISCOS DE COMPLIANCE';
elseif ($perfil == 6):
	$perfil_desc = utf8_decode('RISCOS DE SEGURANÇA');
endif;

$conv = array(
    'ä' => 'a',
    'á' => 'a',
    'à' => 'a',
    'ã' => 'a',
    'â' => 'a',
    'è' => 'e',
    'ë' => 'e',
    'é' => 'e',
    'ê' => 'e',
    'ï' => 'i',
    'í' => 'i',
    'ì' => 'i',
    'ò' => 'o',
    'ó' => 'o',
    'ô' => 'o',
    'õ' => 'o',
    'ö' => 'o',
    'ù' => 'u',
    'ú' => 'u',
    'ü' => 'u',
    'ù' => 'u',
    'ç' => 'c',
    'Á' => 'A',
    'À' => 'A',
    'Ã' => 'A',
    'Â' => 'A',
    'Ä' => 'A',
    'Ë' => 'E',
    'È' => 'E',
    'É' => 'E',
    'Ê' => 'E',
    'Ì' => 'I',
    'Ï' => 'I',
    'Í' => 'I',
    'Ò' => 'O',
    'Ö' => 'O',
    'Ó' => 'O',
    'Ô' => 'O',
    'Õ' => 'O',
    'Ù' => 'U',
    'Ú' => 'U',
    'Ü' => 'U',
    'Ç' => 'C',
    "'" => ''
);

 $usuario = strtolower(substr($pNome, 0, 1) . strtr(utf8_encode($uNome), $conv)) . rand(10,99);
// $usuario = 'asantana43';

$senha = md5('123456');
$acesso = 1;
$criado_por = $_SESSION['usuario'];
$ip = $_SERVER['REMOTE_ADDR'];

$sql = "SELECT COUNT(*) AS TOTAL FROM ALAS_HMR_USERS WHERE USUARIO = '$usuario' OR EMAIL = '$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['TOTAL'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: ../cadastro.php');
	exit();
}

// echo var_dump($pNome,$uNome,$email,$perfil,$perfil_desc,$usuario,$senha,$acesso,$criado_por,$ip);

$sql = "INSERT INTO ALAS_HMR_USERS (p_nome,u_nome,email,perfil,perfil_desc,usuario,senha,acesso,criado,criado_por,ip) VALUES ('$pNome','$uNome','$email','$perfil','$perfil_desc','$usuario','$senha','$acesso',NOW(),'$criado_por','$ip')";
$result = mysqli_query($conn, $sql);

if ($result === TRUE) {
    $_SESSION['status_cadastro'] = true;
    header('Location: ../cadastro.php');
    exit();
} else {
    $_SESSION['status_cadastro'] = false;
    exit();
}

?>