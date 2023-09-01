  <?php
  session_start();
  include_once('func/verifica.php');
  include_once('include/header.php');
  ?>
  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
    <title>H.O.M.E.R - Questões</title>
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
    
  </head>
  <script>
    function block() {
      // $('#questao').attr('disabled','');
      $('#form').addClass('hide');
      $('span#remove').removeClass('hide');
    }

    function remove() {
      $('input#campo').val('');
      $('#file').val('');
      $('span#remove').addClass('hide');
      $('#form').removeClass('hide');
    }
  </script>

  <body class="body has-fixed-sidenav">

    <main>
      <div class="container">
        <div class="row">

          <div class="col s12 m12 l12">

            <div class="card horizontal">
              <div class="card-stacked">
                <div class="card-content">
                  <span class="card-title"><blockquote><h4>Questões</h4></blockquote></span>

                  <form class="col s12 m12 l12" method="POST" id="form">
                    <div class="row">

                      <div class="input-field col s12 m4 l4">
                        <textarea id="questao" class="materialize-textarea" data-length="250"></textarea>
                        <label for="questao">Questão</label>
                      </div>

                      <div class="input-field col s12 m4 l4">
                        <select>
                          <option value="" selected>Dimensão de Análise</option>
                          <option value="1">ACESSO</option>
                          <option value="2">FERRAMENTAS</option>
                          <option value="3">PROCEDIMENTOS DE SEGURANÇA</option>
                          <option value="4">COMPLIANCE</option>
                          <option value="5">AUDITORIA</option>
                          <option value="6">POLÍTICAS</option>
                        </select>
                      </div>

                      <div class="input-field col s12 m4 l4">
                        <select>
                          <option value="" disabled selected>Mandatória/Classificatória</option>
                          <option value="1">Mandatória</option>
                          <option value="2">Classificatóra</option>
                        </select>
                      </div>

                      <div class="row"></div>

                      <span class="card-title"><blockquote><h4>Ambientes e Criticidade</h4></blockquote></span>
                      <div class="col s12 m2 l2">
                        <label>
                          <input type="checkbox">
                          <span>On-Premises</span>
                        </label>
                        <select multiple>
                          <option value="" disabled>Criticidade</option>
                          <option value="1">Pouco Crítico</option>
                          <option value="2">Moderado</option>
                          <option value="3">Severo</option>
                          <option value="4">Crítico</option>
                        </select>
                      </div>

                      <div class="col s12 m2 l2">
                        <label>
                          <input type="checkbox">
                          <span>Colocation</span>
                        </label>
                        <select multiple>
                          <option value="" disabled>Criticidade</option>
                          <option value="1">Pouco Crítico</option>
                          <option value="2">Moderado</option>
                          <option value="3">Severo</option>
                          <option value="4">Crítico</option>
                        </select>
                      </div>

                      <div class="col s12 m2 l2">
                        <label>
                          <input type="checkbox">
                          <span>Hosting</span>
                        </label>
                        <select multiple>
                          <option value="" disabled>Criticidade</option>
                          <option value="1">Pouco Crítico</option>
                          <option value="2">Moderado</option>
                          <option value="3">Severo</option>
                          <option value="4">Crítico</option>
                        </select>
                      </div>

                      <div class="col s12 m2 l2">
                        <label>
                          <input type="checkbox">
                          <span>IaaS</span>
                        </label>
                        <select multiple>
                          <option value="" disabled>Criticidade</option>
                          <option value="1">Pouco Crítico</option>
                          <option value="2">Moderado</option>
                          <option value="3">Severo</option>
                          <option value="4">Crítico</option>
                        </select>
                      </div>

                      <div class="col s12 m2 l2">
                        <label>
                          <input type="checkbox">
                          <span>SaaS</span>
                        </label>
                        <select multiple>
                          <option value="" disabled>Criticidade</option>
                          <option value="1">Pouco Crítico</option>
                          <option value="2">Moderado</option>
                          <option value="3">Severo</option>
                          <option value="4">Crítico</option>
                        </select>
                      </div>

                      <div class="col s12 m2 l2">
                        <label>
                          <input type="checkbox">
                          <span>PaaS</span>
                        </label>
                        <select multiple>
                          <option value="" disabled>Criticidade</option>
                          <option value="1">Pouco Crítico</option>
                          <option value="2">Moderado</option>
                          <option value="3">Severo</option>
                          <option value="4">Crítico</option>
                        </select>
                      </div>

                    </div>
                    <div class="row">
                      <a href="#" class="right"><button class="btn waves-effect waves-light light-blue darken-4">GRAVAR<i class="material-icons left">save</i></button></a>
                    </div>
                    <div class="divider"></div>

                  </form>
                  <div class="row"></div>
                  <blockquote><h4>Importar (.txt)</h4></blockquote>
                  <form class="col s12 m12 l12" method="post" action="func/processa.php" enctype="multipart/form-data">
                    <div class="input-field s12 m3 l3">
                      <div class="file-field input-field">
                        <div class="btn waves-effect waves-light light-blue darken-4">
                          <span><i class="material-icons left">attach_file</i>IMPORTAR</span>
                          <input onclick="block()" type="file" name="arq" id="file">
                        </div>
                        <div class="col s12 m3 l3 file-path-wrapper">
                          <input class="file-path validate" type="text" id="campo">
                          <span class="red-text hide" onclick="remove()" id="remove"><i class="material-icons left">clear</i>Remover arquivo</span>
                          <?php
                          if (isset($_SESSION['msg_sucesso'])):
                          //   echo $_SESSION['msg'];
                          //   unset($_SESSION['msg']);
                          // endif;
                            ?>
                            <script>
                              M.toast({html: 'Questões inseridas com sucesso!'});
                            </script>
                            <?php
                          elseif (isset($_SESSION['msg_vazio'])):
                          ?>
                          <script>
                            M.toast({html: 'Nenhum arquivo selecionado.'});
                          </script>
                          <?php
                        endif;
                        unset($_SESSION['msg_sucesso']);
                        unset($_SESSION['msg_vazio']);
                          ?>
                        </div>
                        <input type="submit" class="btn green" value="CARREGAR"><div class="row"></div>

                      </div>
                    </div>
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


