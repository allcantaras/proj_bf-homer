<?php
include_once('func/conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#lista_usuarios').DataTable();
		});
	</script>
</head>
<body>
	<div class="container">
		
		<table id="lista_usuarios" class="striped highlight responsive-table display">
			<thead>
				<tr>
					<th>Primeiro nome</th>
					<th>Sobrenome</th>
					<th>E-mail</th>
					<th>Perfil</th>
					<th>Usuário</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$sql = "SELECT * FROM ALAS_HMR_USERS";
				$result = mysqli_query($conn, $sql);
				while ($dados = mysqli_fetch_array($result)):
					?>
					<tr>
						<td><?php echo $dados['p_nome']; ?></td>
						<td><?php echo $dados['u_nome']; ?></td>
						<td><?php echo $dados['email']; ?></td>
						<td><?php echo $dados['perfil_desc']; ?></td>
						<td><?php echo $dados['usuario']; ?></td>
						<td><a href="#" class="btn-floating blue"><i class="material-icons">edit</i></a></td>
						<td><a href="#" class="btn-floating red"><i class="material-icons">delete</i></a></td>
					</tr>
				<?php endwhile; ?>
			</tbody>
			<tfoot>
				<tr>
					<th>Primeiro nome</th>
					<th>Sobrenome</th>
					<th>E-mail</th>
					<th>Perfil</th>
					<th>Usuário</th>
					<th></th>
				</tr>
			</tfoot>
		</table>
	</div>
</body>
</html>