 <?php
 session_start();
 include_once('func/conexao.php');
 include_once('func/verifica.php');
 include_once('include/header.php');
 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
  <title>H.O.M.E.R - Matriz de Questões</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"></script>


</head>

<body class="body has-fixed-sidenav">
  <main>
    <div class="container mycont">
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="card horizontal">
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title"><blockquote><h4>Matriz de questões</h4></blockquote></span>

                <table id="lista" class="responsive display" style="width: 100%;">
                  <thead>
                    <tr>
                      <th>Questão</th>
                      <th>Dimensão</th>
                      <th>Mand/Class</th>
                      <th>On-Premises</th>
                      <th>Colocation</th>
                      <th>Hosting</th>
                      <th>IaaS</th>
                      <th>SaaS</th>
                      <th>PaaS</th>
                      <th>Inserido por</th>
                      <th>Inserido em</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $sql = "SELECT * FROM ALAS_HMR_QUEST";
                    $result = mysqli_query($conn, $sql);
                    while ($dados = mysqli_fetch_array($result)):
                      ?>
                      <tr>
                        <td><?php echo utf8_encode($dados['questao']); ?></td>
                        <td><?php echo utf8_encode($dados['dimensao']); ?></td>
                        <td><?php echo utf8_encode($dados['mand_class']); ?></td>
                        <td><?php echo utf8_encode($dados['on_prem']); ?></td>
                        <td><?php echo utf8_encode($dados['colocation']); ?></td>
                        <td><?php echo utf8_encode($dados['hosting']); ?></td>
                        <td><?php echo utf8_encode($dados['iaas']); ?></td>
                        <td><?php echo utf8_encode($dados['saas']); ?></td>
                        <td><?php echo utf8_encode($dados['paas']); ?></td>
                        <td><?php echo $dados['inserido_por'];?></td>
                        <td><?php echo date("d/m/Y H:i:s", strtotime($dados['inserido_em']));?></td>
                      </tr>

                    <?php endwhile; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Questão</th>
                      <th>Dimensão</th>
                      <th>Mand/Class</th>
                      <th>On-Premises</th>
                      <th>Colocation</th>
                      <th>Hosting</th>
                      <th>IaaS</th>
                      <th>SaaS</th>
                      <th>PaaS</th>
                      <th>Inserido por</th>
                      <th>Inserido em</th>
                    </tr>
                  </tfoot>
                </table>  
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


