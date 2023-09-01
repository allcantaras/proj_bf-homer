<?php
session_start();
include_once('func/verifica.php');
include_once('include/header.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>H.O.M.E.R - Novo Usuário</title>
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
                  <span class="card-title"><blockquote><h4>Cadastro</h4></blockquote></span>

                  <form class="col s12 m12 l12" action="func/cadUsuarios.php" method="POST">           

                    <div class="input-field col s12 m6 l6">
                      <input type="text" id="first_name" name="txtPNome" class="validate" required>
                      <label for="first_name">Primeiro nome</label>
                    </div>

                    <div class="input-field col s12 m6 l6">
                      <input type="text" id="last_name" name="txtUNome" class="validate" required>
                      <label for="last_name">Último sobrenome</label>
                    </div>

                    <div class="input-field col s12 m6 l6">
                      <input type="email" id="email" name="txtEmail" class="validate" required>
                      <label for="email">E-mail</label>
                    </div>

                    <div class="input-field col s12 m6 l6">
                      <select name="perfil">
                        <option value="" disabled>Perfil de acesso</option>
                        <option value="1">Analista de Compras</option>
                        <option value="2">Segurança da Informação</option>
                        <option value="3">Analista de Privacidade</option>
                        <option value="4">Gestor</option>
                        <option value="5">Riscos de Compliance</option>
                        <option value="6">Riscos de Segurança</option>
                      </select>
                      <label>Perfil de acesso</label>
                    </div>

                    <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit">CADASTRAR<i class="material-icons left">person_add</i></button>

                  </form>

                </div>

                <?php
                if (isset($_SESSION['status_cadastro']) === TRUE):
                  ?>
                  <script>
                    M.toast({html: 'Usuário cadastrado com sucesso!'});
                  </script>
                  <?php
                elseif (isset($_SESSION['usuario_existe']) === TRUE):
                  ?>
                  <script>
                    M.toast({html: 'Usuário ou e-mail já existentes.!'});
                  </script>
                  <?php
                endif;
                unset($_SESSION['status_cadastro']);
                unset($_SESSION['usuario_existe']);
                ?>

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


