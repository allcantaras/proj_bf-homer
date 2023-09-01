<?php
session_start();
include_once('func/verifica.php');
include_once('include/header.php');
include_once('func/conexao.php');

if(isset($_GET['id'])):
	$id = mysqli_escape_string($conn, $_GET['id']);

	$sql = "SELECT * FROM ALAS_HMR_USERS WHERE id_usuario = '$id'";
	$result = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($result);
endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>H.O.M.E.R - Editar Usuário</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

  <body class="body has-fixed-sidenav">
    <main>
      <div class="container">
        <div class="row">

          <div class="col s12">
            <div class="card horizontal">
              <div class="card-stacked">
                <div class="card-content">
                  <span class="card-title"><blockquote><h4>Editar Cadastro</h4></blockquote></span>

                  <form class="col s12 m12 l12" action="func/updtUsuario.php" method="POST">           
                    <input type="hidden" name="id" value="<?php echo $dados['id_usuario']?>">
                    <div class="input-field col s12 m6 l6">
                      <input type="text" id="first_name" name="txtPNome" value="<?php echo utf8_encode($dados['p_nome']);?>" required validate>
                      <label for="first_name">Primeiro nome</label>
                    </div>

                    <div class="input-field col s12 m6 l6">
                      <input type="text" id="last_name" name="txtUNome" value="<?php echo utf8_encode($dados['u_nome']);?>" required validate>
                      <label for="last_name">Último sobrenome</label>
                    </div>

                    <div class="input-field col s12 m6 l6">
                      <input type="email" id="email" name="txtEmail" value="<?php echo $dados['email'];?>" required validate>
                      <label for="email">E-mail</label>
                    </div>

                    <div class="input-field col s12 m6 l6">
                      <select name="perfil">
                        <option value="" disabled><?php echo utf8_encode($dados['perfil_desc']);?></option>
                        <option value="1">Analista de Compras</option>
                        <option value="2">Segurança da Informação</option>
                        <option value="3">Analista de Privacidade</option>
                        <option value="4">Gestor</option>
                        <option value="5">Riscos de Compliance</option>
                        <option value="6">Riscos de Segurança</option>
                      </select>
                      <label>Perfil de acesso</label>
                    </div>

                    <div class="input-field col s12 m6 l6">
                     <input type="text" id="usuario" name="txtUsuario" value="<?php echo $dados['usuario'];?>">
                     <label for="usuario">Usuário</label>
                   </div>

                   <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit">EDITAR<i class="material-icons left">edit</i></button>

                 </form>

               </div>

             </div>
           </div>
         </div>
       </div>
     </div>
   </main>
   <script src="js/script.js"></script>
   <?php
   include_once('func/mAcesso.php');
   include_once('include/footer.php');
   ?>
 </body>
 </html>


