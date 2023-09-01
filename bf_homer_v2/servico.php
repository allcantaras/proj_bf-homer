<?php
session_start();
include_once('func/verifica.php');
include_once('include/header.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>H.O.M.E.R - Nova OS</title>
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
                <span class="card-title"><blockquote><h4>Serviço</h4></blockquote></span>

                <!-- INICIO FORMULÁRIO -->
                <form class="col s12 m12 l12" action="func/cadServico.php" method="POST">
                  <div class="row">

                    <div class="input-field col s12 m4 l4">
                      <input type="text" id="projeto" name="txtProjeto" class="validate" required>
                      <label for="projeto">Nome do projeto</label>
                    </div>

                    <div class="input-field col s12 m4 l4">
                      <select id="SERVICO" name="txtServico">
                        <option value="" disabled selected>Serviço</option>
                        <option >On-Premises</option>
                        <option >Colocation</option>
                        <option >Hosting</option>
                        <option >IaaS</option>
                        <option >SaaS</option>
                        <option >PaaS</option>
                      </select>
                    </div>

                    <div class="input-field col s12 m4 l4">
                      <select id="NATD" name="txtNatd">
                        <option value="" disabled selected>Natureza dos dados</option>
                        <option value="1">Dados Simples</option>
                        <option value="2">Dados Financeiros</option>
                        <option value="3">Dados Comportamentais</option>
                        <option value="4">Dados Sensíveis</option>
                      </select>
                    </div>

                    <div class="input-field col s12 m6 l6">
                      <select id="VOLV" name="txtVolv">
                        <option value="" disabled selected>Volume de titulares</option>
                        <option value="1">Entre 1 e 100 titulares</option>
                        <option value="2">Entre 100 e 1.000 titulares</option>
                        <option value="3">Entre 1.000 e 10.000 titulares</option>
                        <option value="4">Entre 10.000 e 500.000 titulares</option>
                        <option value="5">Acima de 500.000 titulares</option>
                      </select>
                    </div>

                    <div class="input-field col s12 m6 l6">
                      <select id="REQL" name="txtReql">
                        <option value="" disabled selected>Requisitos Legais e Regulatórios</option>
                        <option value="1">Somente LGPD</option>
                        <option value="2">LGPD e Regulamentação restria a nível local (municipal e/ou estadual)</option>
                        <option value="3">LGPD e Regulamentação restrita a nível nacional (municipal, estadual e federal)</option>
                        <option value="4">LGPD e Regulamentação a nível internacional</option>
                      </select>
                    </div>

                    <div class="input-field col s12 m6 l6">
                      <select id="RELN" name="txtReln">
                        <option value="" disabled selected>Relevância para o negócio</option>
                        <option value="1">Sem necessidade de exigência de SLA (Service Level Agreement) mínima</option>
                        <option value="2">Serviços podem ficar indisponíveis por mais de 1 (um) mês sem prejuízo significativo</option>
                        <option value="3">Indisponibilidade por menos de 1 (um) mês gera prejuízo significativo</option>
                        <option value="4">Indisponibilidade por menos de 1 (uma) semana gera prejuízo significativo</option>
                        <option value="5">Indisponibilidade por menos de 1 (um) dia gera prejuízo significativo</option>
                      </select>
                    </div>

                    <div class="input-field col s12 m6 l6">
                      <select id="AEXE" name="txtAexe">
                        <option value="" disabled selected>Acesso externo pelo fornecedor</option>
                        <option value="1">Sessões de acesso remoto monitoradas por equipe interna</option>
                        <option value="2">Fornecedor recebe acesso via arquivo, aplicativo ou portal web (VPN client-to-site)</option>
                        <option value="3">Restrição de acesso entre site do fornecedor e do cliente via VPN site-to-site</option>
                        <option value="4">Redes ou sistemas internos hospedados na infraestrutura de fornecedores</option>
                      </select>
                    </div>

                    <div class="input-field col s12 m6 l6">
                      <select id="TDAT" name="txtTdat">
                        <option value="" disabled selected>Transferência de dados</option>
                        <option value="1">Sem transferência de dados para fornecedor</option>
                        <option value="2">Uso de protocolo de transferência seguro para fornecedor</option>
                        <option value="3">Uso de protocolo de transferência seguro advindo do fornecedor</option>
                        <option value="4">Uso de protocolo de transferência inseguro para e/ou advindo do fornecedor</option>
                        <option value="5">Fornecedor com acesso direto ao ambiente interno</option>
                      </select>
                    </div>

                    <div class="input-field col s12 m6 l6">
                      <select id="ADAR" name="txtAdar">
                        <option value="" disabled selected>Acesso interno a dados em repouso</option>
                        <option value="1">Sem acesso a dados em repouso</option>
                        <option value="2">Acesso de fornecedor aos dados é monitorado por equipe interna</option>
                        <option value="3">Acesso de fornecedor aos dados é concedido somente quando necessário</option>
                        <option value="4">Acesso de fornecedor aos dados ocorre de forma autenticada e não-gerenciada</option>
                        <option value="5">Dados em sistemas/redes que são gerenciados por fornecedores internos ou externos</option>
                      </select>
                    </div>
                  </div>
                  <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit">GERAR<i class="material-icons left">add</i></button>
                </form>
                <!-- FIM FORMULÁRIO -->

              </div>
              <?php
              if (isset($_SESSION['sucesso']) === TRUE):
                ?>
                <div class="card-action green center">
                  <span class="white-text">Serviço registrado com sucesso!</span>
                </div>
                <?php
              endif;
              unset($_SESSION['sucesso']);
              ?>

              <?php
              if (isset($_SESSION['msg']) === TRUE):
                ?>
                <div class="card-action red center">
                  <span class="white-text">Existem campos a serem preenchidos.</span>
                </div>
                <?php
              endif;
              unset($_SESSION['msg']);
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


