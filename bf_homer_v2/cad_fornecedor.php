<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>H.O.M.E.R - Inscrição</title>
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
          <div class="col s12 m6 l6 offset-m3 offset-l3">
            <div class="card horizontal">
              <div class="card-stacked">          
                <div class="card-content">
                  <span class="card-title"><blockquote>
                    <h4>Fornecedores</h4>
                  </blockquote></span>
                  <form class="col s12 m12 l12">
                    <div class="row">

                      <div class="input-field col s12 m6 l6">
                        <input type="text" id="razao_social" class="validate" required autofocus>
                        <label for="razao_social">Razão Social</label>
                      </div>
                      <div class="input-field col s12 m6 l6">
                        <input type="text" id="cnpj" class="validate" onkeyup="FormataCnpj(this,event)" onblur="if(!validarCNPJ(this.value)){alert('CNPJ Informado é inválido');" maxlength="18" required>
                        <label for="cnpj">CNPJ</label>
                      </div>
                      <div class="input-field col s12 m4 l4">
                        <input type="text" id="nome_contato" class="validate" required>
                        <label for="nome_contato">Nome do contato</label>
                      </div>
                      <div class="input-field col s12 m4 l4">
                        <input type="text" id="tel_contato" class="validate" required>
                        <label for="tel_contato">Telefone do contato</label>
                      </div>
                      <div class="input-field col s12 m4 l4">
                        <input type="email" id="email_contato" class="validate" required>
                        <label for="email_contato">E-mail do contato</label>
                      </div>
                      <div class="input-field col s12 m4 l4">
                        <input type="text" id="usuario" class="validate" required>
                        <label for="usuario">Usuário</label>
                      </div>
                      <div class="input-field col s12 m4 l4">
                        <input type="password" id="pass" onkeyup="validSenha()" required>
                        <label for="senha">Senha</label>
                        <div class="helper-text" id="SenhaForca"></div>
                      </div>
                      <div class="input-field col s12 m4 l4">
                        <input type="password" id="passConf" required>
                        <label for="senha2">Confirme a Senha</label>
                      </div>
                    </div>
                    <div class="row right">
                      <a href="#"><button class="btn waves-effect waves-light light-blue darken-4">Cadastrar<i class="material-icons left">save</i></button></a>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <script src="js/validSenha.js"></script>
  <script src="js/validCnpj.js"></script>
  <script src="js/script.js"></script>
  <?php
  include_once('include/footer.php');
  ?>
</body>
</html>


