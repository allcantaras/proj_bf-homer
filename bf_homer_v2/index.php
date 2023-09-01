<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>H.O.M.E.R - Acesso</title>
  <meta charset="UTF-8">
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
      width: 100vw;
      height: 100vh;
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
          <div class="col s12 m6 l4 offset-m3 offset-l4">
            <div class="card horizontal">
              <div class="card-stacked">          
                <div class="card-content">

                  <div class="col s10 m6 l6 offset-s1 offset-m3 offset-l3">
                    <img class="responsive-img circle" src="img/user.png">
                  </div>
                  
                  <form method="POST" action="func/login.php">

                    <!-- CAMPOS -->
                    <div class="col s12">
                      <!-- CAMPO LOGIN -->
                      <div class="input-field">
                        <input type="text" id="login" name="txtLogin" class="validate" required autofocus>
                        <label for="login">Login</label>
                      </div>

                      <!-- CAMPO SENHA -->
                      <div class="input-field">
                        <input type="password" id="password" name="txtSenha" class="validate" required>
                        <label for="senha">Senha</label>
                      </div>

                      <!-- BOTÃO LOGIN -->
                      <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit">LOGIN<i class="material-icons left">vpn_key</i></button>

                    </div>          
                  </form>
                </div>

                <?php
                if(isset($_SESSION['nao_aut'])):
                  ?>

                  <div class="card-action red center">
                    <span class="white-text">Usuário ou senha inválidos.</span>
                  </div>

                  <?php
                elseif (isset($_SESSION['msg'])):
                  ?>
                  <div class="card-action red center">
                    <span class="white-text">Usuário não existe.</span>
                  </div>
                  <?php
                endif;
                unset($_SESSION['nao_aut']);
                ?>
              </div>
            </div>
<!--             <div class="center">
              <img class="responsive-img" src="img/beijaflore.png" width="20%">
            </div> -->
          </div>
        </div>
      </div>
    </div>

  </main>
  <?php
  include_once('include/footer.php');
  ?>
  <script src="js/script.js"></script>
  
</body>
</html>


