 <?php
 session_start();
 include_once('func/verifica.php');
 include_once('include/header.php');
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
  <title>H.O.M.E.R - RFP</title>
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

<body class="body has-fixed-sidenav">
  <main>
    <div class="container">
      <div class="row">

        <div class="col s12 m12 l12">

          <div class="card horizontal">
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title"><blockquote><h4>Cláusula RFP</h4></blockquote></span>

                <form class="col s12 m12 l12">

                  <div class="input-field col s12 m6 l6">
                    <textarea id="clausula" class="materialize-textarea" data-length="250"></textarea>
                    <label for="clausula">Cláusula</label>
                  </div>

                  <div class="input-field col s12 m6 l6">
                    <select>
                      <option value="" disabled selected>Tópico</option>
                      <option value="1">SIGILO E CONFIDENCIABILIDADE</option>
                      <option value="2">COMBATE E PREVENÇÃO À CORRUPÇÃO E LAVAGEM DE DINHEIRO</option>
                      <option value="3">RESPONSABILIDADE SOCIAL</option>
                      <option value="4">LGPD - LEI GERAL DE PROTEÇÃO A DADOS</option>
                      <option value="5">VIOLAÇÃO DE DADOS</option>
                      <option value="6">TRANSFERÊNCIAS INTERNACIONAIS</option>
                      <option value="7">REPRESENTANTES E SUBCONTRATADOS</option>
                      <option value="8">MEDIDAS DE SEGURANÇA PARA PROTEÇÃO DE DADOS PESSOAIS</option>
                      <option value="9">CLASSIFICAÇÃO, CONTROLE  E DISPONIBILIDADE DE ATIVOS</option>
                      <option value="10">GERENCIAMENTO DE MUDANÇAS</option>
                      <option value="11">INCIDENTES DE SEGURANÇA E PLANO DE RESPOSTA</option>
                      <option value="12">TESTE DE AMEAÇA E VULNERABILIDADES</option>
                      <option value="13">ACESSO FÍSICO</option>
                      <option value="14">ACESSO LÓGICO</option>
                      <option value="15">ACESSO A DADOS</option>
                      <option value="16">CRIPTOGRAFIA DE TRANSMISSÃO DE DADOS</option>
                      <option value="17">DESCARTE SEGURO</option>
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
                  <a href="#" class="right"><button class="btn waves-effect waves-light light-blue darken-4">GRAVAR<i class="material-icons left">save</i></button></a>
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


