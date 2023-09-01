 <?php

 session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
  <link rel="stylesheet" type="text/css" href="css/style.css">  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
  
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta charset="UTF-8">
  <title>H.O.M.E.R - Acesso</title>

</head>

<body class="body valign-wrapper">

  <div class="row">

    <div class="valign">
      <!-- BOX LOGIN -->
      <div class="col s8 m6 l2 offset-s2 offset-m3 offset-l5 white z-depth-3 boxlogin">
        <div class="row">
          <div class="row"></div>
          <!-- IMAGEM USUÁRIO -->
          <div class="col s8 m6 l8 offset-s2 offset-m3 offset-l2">
            <img class="responsive-img circle" src="img/user.png">
          </div>
        </div>

        <form method="POST" action="login.php">
          <!-- CAMPOS -->
          <div class="col s12">

            <!-- CAMPO LOGIN -->
            <div class="input-field">
              <input type="text" id="login" name="txtLogin" class="validate" required autofocus>
              <label for="login">Login</label>
            </div>

            <!-- CAMPO SENHA -->
            <div class="input-field">
              <input type="password" id="password" name="txtPassword" class="validate" required>
              <label for="senha">Senha</label>
            </div>

            <!-- BOTÃO LOGIN -->
            <div class="row right"><button class="btn waves-effect waves-light light-blue darken-4" type="submit">LOGIN<i class="material-icons left">vpn_key</i></button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- BEIJAFLORE -->
    <div class="row">
      <div class="col s8 m8 l2 offset-s2 offset-m2 offset-l5 center">
        <div class="row"></div>
        <img class="responsive-img" src="img/beijaflore.png" width="25%">
      </div>
    </div>
  </div>

</div>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>


