<?php
session_start();
include('func/conexao.php');
include_once('func/verifica.php');
include_once('func/verAcesso.php');
?>

<!DOCTYPE html>
<html>
<head> 
  <title>H.O.M.E.R - Novo Usuário</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

  <style>

    * {
      font-family: 'Roboto', sans-serif;
    }

    .body {
      background-image: linear-gradient(#001a33, #003366);
      width: 100vw;
      height: 100vh;
    }

    .progress {
      background-color: #cfd8dc !important;
    }

    blockquote {
      border-left: 5px solid #01579b !important;
    }

    footer {
      padding-bottom: 10px;
      padding-top: 10px;
      background-color: #001a33;
    }

    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
      background-image: linear-gradient(#001a33, #003366);
    }
  </style>
</head>
<body class="body">
  <main>
    <div class="valign-wrapper" style="width:100%;height:100%;position: absolute;">
      <div class="container">
        <div class="row">
          <div class="col s12 m4 l4 offset-m4 offset-l4">
            <div class="card horizontal">
              <div class="card-stacked">          
                <div class="card-content">
                  <span class="card-title"><blockquote><h4>Primeiro acesso</h4><h5>Altere sua senha.</h5></blockquote></span>

                  <form action="func/senhaDef.php" method="POST">
                    <div class="col s12 m8 l8">
                      <div class="input-field ce">
                        <input type="password" id="pass" name="txtPass" onkeyup="validSenha()" required autofocus>
                        <label for="pass">Nova senha</label>
                        <div class="helper-text" id="SenhaForca"></div>
                      </div>
                      <div class="input-field">
                        <input type="password" id="passConf" name="txtPassC" required>
                        <label for="passConf">Confirme a senha</label>

                      </div>
                    </div>
                    <div class="col s12 m12 l12 right">
                      <button type="submit" class="btn btn waves-effect waves-light light-blue darken-4 right"><i class="material-icons left">save</i>SALVAR</button>
                    </div>
                  </form>
                </div>

                <?php
                if (isset($_SESSION['nao_confere'])):
                  ?>

                  <div class="card-action red center">
                    <span class="white-text">As senhas digitadas não são iguais.</span>
                  </div>

                  <?php
                endif;
                unset($_SESSION['nao_confere']);
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <script src="js/script.js"></script>
  <script src="js/validSenha.js"></script>
  <?php
  include_once('func/mAcesso.php');
  include_once('include/footer.php');
  ?>



</body>
</html>


