<?php
session_start();
include_once('conexao.php');

$pNome = strtoupper(utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtPNome']))));
$uNome = strtoupper(utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtUNome']))));
$email = mysqli_real_escape_string($conn, trim($_POST['txtEmail']));
$perfil = $_POST['perfil'];
$id = mysqli_escape_string($conn, $_POST['id']);

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

$usuario = strtr(mysqli_escape_string($conn,(trim($_POST['txtUsuario']))), $conv);

// $sql = "SELECT COUNT(*) AS TOTAL FROM ALAS_HMR_USERS WHERE USUARIO = '$usuario'";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);

// if ($row['TOTAL'] == 1) {
//     $_SESSION['status_update'] = true;
//     header('Location: ../usuarios.php');
//     exit();
// }

$sql = "UPDATE ALAS_HMR_USERS SET p_nome = '$pNome', u_nome = '$uNome', email = '$email', perfil = '$perfil', perfil_desc = '$perfil_desc', usuario = '$usuario' WHERE id_usuario = '$id'";
$result = mysqli_query($conn, $sql);

if ($result === TRUE) {
    $_SESSION['status_update'] = true;
    header('Location: ../usuarios.php');
    exit();
} else {
    $_SESSION['status_update'] = false;
    exit();
}

?>