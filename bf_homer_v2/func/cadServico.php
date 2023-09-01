<?php
session_start();
include('conexao.php');

if ($_POST['txtProjeto'] == '' || $_POST['txtServico'] == '' || $_POST['txtNatd'] == '' || $_POST['txtVolv'] == '' || $_POST['txtReql'] == '' || $_POST['txtReln'] == '' || $_POST['txtAexe'] == '' || $_POST['txtTdat'] == '' || $_POST['txtAdar'] == ''):
	$_SESSION['msg'] = true;
	header('Location: ../servico.php');
	exit();
else:
	unset($_SESSION['msg']);

	$id_servico = date('Y') . rand(1001,9999);
	$proj = utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtProjeto'])));
	$servico = utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtServico'])));
	$natd = $_POST['txtNatd'];
	$volv = $_POST['txtVolv'];
	$reql = $_POST['txtReql'];
	$reln = $_POST['txtReln'];
	$aexe = $_POST['txtAexe'];
	$tdat = $_POST['txtTdat'];
	$adar = $_POST['txtAdar'];
	$status = 'ATIVO';
	$responsavel = utf8_encode($_SESSION['nome']) . " - " . $_SESSION['usuario'];	
	$criado_por = $_SESSION['usuario'];
	$ip = $_SERVER['REMOTE_ADDR'];
endif;


// IMPACTO
if ($natd == 3):	
	$impacto = ($natd - 1) * $volv * $reql * $reln;
else:
	$impacto = $natd * $volv * $reql * $reln;
endif;

// PROBABILIDADE
$probab = $aexe * $tdat * $adar;

// IMPACTO
if ($impacto <= 60):
	$n_impacto = 'MB';
elseif (60 < $impacto && $impacto <= 120):
	$n_impacto = 'B';
elseif (120 < $impacto && $impacto <= 180):
	$n_impacto = 'M';
elseif (180 < $impacto && $impacto <= 240):
	$n_impacto = 'A';
else:
	$n_impacto = 'MA';
endif;

// PROBABILIDADE
if ($probab <= 25):
	$n_probab = 'MB';
elseif (25 < $probab && $probab <= 50):
	$n_probab = 'B';
elseif (50 < $probab && $probab <= 75):
	$n_probab = 'M';
elseif (75 < $probab && $probab <= 100):
	$n_probab = 'A';
else:
	$n_probab = 'MA';
endif;

// RISCO
if (($n_probab == 'MB' && $n_impacto == 'MA') || ($n_probab == 'MB' && $n_impacto == 'A') || ($n_probab == 'MB' && $n_impacto == 'M') || ($n_probab == 'MB' && $n_impacto == 'B') || ($n_probab == 'MB' && $n_impacto == 'MB')):
	$risco = utf8_decode('POUCO CRÍTICO');
elseif (($n_probab == 'B' && $n_impacto == 'B') || ($n_probab == 'B' && $n_impacto == 'MB')):
	$risco = utf8_decode('POUCO CRÍTICO');
elseif (($n_probab == 'B' && $n_impacto == 'MA') || ($n_probab == 'B' && $n_impacto == 'A') || ($n_probab == 'B' && $n_impacto == 'M')):
	$risco = 'MODERADO';
elseif (($n_probab == 'M' && $n_impacto == 'MB') || ($n_probab == 'M' && $n_impacto == 'B')):
	$risco = 'MODERADO';
elseif (($n_probab == 'A' && $n_impacto == 'MB')):
	$risco = 'MODERADO';
elseif (($n_probab == 'M' && $n_impacto == 'A') || ($n_probab == 'M' && $n_impacto == 'MA')):
	$risco = 'SEVERO';
elseif (($n_probab == 'A' && $n_impacto == 'B') || ($n_probab == 'A' && $n_impacto == 'M') || ($n_probab == 'A' && $n_impacto == 'A')):
	$risco = 'SEVERO';
elseif (($n_probab == 'MA' && $n_impacto == 'MB')):
	$risco = 'SEVERO';
elseif (($n_probab == 'A' && $n_impacto == 'MA')):
	$risco = utf8_decode('CRÍTICO');
elseif (($n_probab == 'MA' && $n_impacto == 'B') || ($n_probab == 'MA' && $n_impacto == 'M') || ($n_probab == 'MA' && $n_impacto == 'A') || ($n_probab == 'MA' && $n_impacto == 'MA')):
	$risco = utf8_decode('CRÍTICO');
else:
	$risco = 'ERRO';
endif;

// echo var_dump($id_servico,$proj,$servico,$natd,$volv,$reql,$reln,$aexe,$tdat,$adar,$status,$responsavel);

$sql = "INSERT INTO ALAS_HMR_REQ (id_servico,n_proj,servico,natureza_d,volume_v,requisitos_l,relevancia_n,acesso_e,transferencia_t,acesso_r,impacto,probab,risco,status,responsavel,criado,criado_por,ip) VALUES 
('$id_servico','$proj','$servico','$natd','$volv','$reql','$reln','$aexe','$tdat','$adar','$impacto','$probab','$risco','$status','$responsavel', NOW(),'$criado_por','$ip')";

$result = mysqli_query($conn, $sql);

if ($result === TRUE) {
	$_SESSION['sucesso'] = true;
	header('Location: ../servico.php');
	exit();
} else {
	$_SESSION['sucesso'] = false;
	exit();
}


?>

<!-- $id_servico = date('Y') . rand(1001,9999);
$proj = utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtProjeto'])));
$servico = utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtServico'])));
$natd = utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtNatd'])));
$volv = utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtVolv'])));
$reql = utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtReql'])));
$reln = utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtReln'])));
$aexe = utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtAexe'])));
$tdat = utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtTdat'])));
$adar = utf8_decode(mysqli_real_escape_string($conn, trim($_POST['txtAdar'])));
$status = 'ATIVO';
$responsavel = utf8_encode($_SESSION['nome']) . " - " . $_SESSION['usuario']; -->