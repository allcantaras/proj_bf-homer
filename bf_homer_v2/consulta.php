 <?php
 session_start();
 include_once('func/conexao.php');
 include_once('func/verifica.php');
 include_once('include/header.php');
 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
  <title>H.O.M.E.R - Consulta de serviços</title>
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
                <span class="card-title"><blockquote><h4>Serviços em andamento</h4></blockquote></span>

                <table id="lista" class="responsive display" style="width: 100%;">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Serviço</th>
                      <th>Impacto</th>
                      <th>Probabilidade</th>
                      <th>Risco</th>
                      <th>Status</th>
                      <th>Responsável</th>
                      <th>Criado por</th>
                      <th>Criado em</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $sql = "SELECT * FROM ALAS_HMR_REQ";
                    $result = mysqli_query($conn, $sql);
                    while ($dados = mysqli_fetch_array($result)):
                      ?>
                      <tr>
                        <td><a href="#consulta<?php echo $dados['id_servico'];?>" class="modal-trigger"><?php echo '<b>'.$dados["id_servico"].'</b>'; ?></a></td>
                        <td><?php echo utf8_encode($dados['n_proj']); ?></td>
                        <td><?php echo $dados['servico']; ?></td>
                        <td><?php echo $dados['impacto']; ?></td>
                        <td><?php echo $dados['probab']; ?></td>

                        <td><?php
                        if (utf8_encode($dados['risco']) == 'POUCO CRÍTICO'):
                          echo '<span id="spantable" class="green white-text"><b>'. utf8_encode($dados['risco']) .'</b></span>';
                        elseif (utf8_encode($dados['risco']) == 'MODERADO'):
                          echo '<span id="spantable" class="yellow white-text"><b>'. $dados["risco"] .'</b></span>';
                        elseif (utf8_encode($dados['risco']) == 'SEVERO'):
                          echo '<span id="spantable" class="orange white-text"><b>'. $dados["risco"] .'</b></span>'; 
                        else:
                          echo '<span id="spantable" class="red white-text"><b>'. utf8_encode($dados['risco']) .'</b></span>';
                        endif;
                        ?></td>

                        <td>
                          <?php 
                          if ($dados['status'] == 'ATIVO'):
                            echo '<span id="spantable" class="green white-text"><b>'. $dados["status"].'</b></span>';
                          endif;
                          ?>
                        </td>
                        <td><?php echo $dados['responsavel']; ?></td>
                        <td><?php echo $dados['criado_por']; ?></td>
                        <td><?php echo date("d/m/Y H:i:s", strtotime($dados['criado']));?></td>

                        <div id="consulta<?php echo $dados['id_servico'];?>" class="modal">
                          <div class="modal-content">
                            <div class="col s12">
                              <h4>Ordem de serviço <b>Nº <?php echo $dados['id_servico'];?></b></h4>

                              <h6><b>Nome:</b> <?php echo utf8_encode($dados['n_proj']); ?></h6>
                              <h6><b>Serviço:</b> <?php echo utf8_encode($dados['servico']); ?></h6>

                              <?php
                              $i = $dados['natureza_d'];
                              $query = "SELECT natureza_d, subtopico FROM ALAS_HMR_REQ as A LEFT JOIN ALAS_HMR_NATD AS B ON A.natureza_d = B.id";
                              $r = mysqli_query($conn, $query);
                              $d = mysqli_fetch_assoc($r);
                              ?>
                              <h6><b>Natureza dos dados:</b> <?php echo utf8_encode($d['subtopico']); ?></h6>

                              <?php
                              $i = $dados['volume_v'];
                              $query = "SELECT volume_v, subtopico FROM ALAS_HMR_REQ as A LEFT JOIN ALAS_HMR_VOLV AS B ON A.volume_v = B.id";
                              $r = mysqli_query($conn, $query);
                              $d = mysqli_fetch_assoc($r);
                              ?>
                              <h6><b>Volume de titulares:</b> <?php echo utf8_encode($d['subtopico']); ?></h6>

                              <?php
                              $i = $dados['requisitos_l'];
                              $query = "SELECT requisitos_l, subtopico FROM ALAS_HMR_REQ as A LEFT JOIN ALAS_HMR_REQL AS B ON A.requisitos_l = B.id";
                              $r = mysqli_query($conn, $query);
                              $d = mysqli_fetch_assoc($r);
                              ?>
                              <h6><b>Requisitos legais e regulatórios:</b> <?php echo utf8_encode($d['subtopico']); ?></h6>

                              <?php
                              $i = $dados['relevancia_n'];
                              $query = "SELECT relevancia_n, subtopico FROM ALAS_HMR_REQ as A LEFT JOIN ALAS_HMR_RELN AS B ON A.relevancia_n = B.id";
                              $r = mysqli_query($conn, $query);
                              $d = mysqli_fetch_assoc($r);
                              ?>
                              <h6><b>Relevancia para o negócio:</b> <?php echo utf8_encode($d['subtopico']); ?></h6>

                              <?php
                              $i = $dados['acesso_e'];
                              $query = "SELECT acesso_e, subtopico FROM ALAS_HMR_REQ as A LEFT JOIN ALAS_HMR_AEXE AS B ON A.acesso_e = B.id";
                              $r = mysqli_query($conn, $query);
                              $d = mysqli_fetch_assoc($r);
                              ?>
                              <h6><b>Acesso externo pelo fornecedor:</b> <?php echo utf8_encode($d['subtopico']); ?></h6>

                              <?php
                              $i = $dados['transferencia_t'];
                              $query = "SELECT transferencia_t, subtopico FROM ALAS_HMR_REQ as A LEFT JOIN ALAS_HMR_TDAT AS B ON A.transferencia_t = B.id";
                              $r = mysqli_query($conn, $query);
                              $d = mysqli_fetch_assoc($r);
                              ?>
                              <h6><b>Transferência dos dados:</b> <?php echo utf8_encode($d['subtopico']); ?></h6>

                              <?php
                              $i = $dados['acesso_r'];
                              $query = "SELECT acesso_r, subtopico FROM ALAS_HMR_REQ as A LEFT JOIN ALAS_HMR_ADAR AS B ON A.acesso_r = B.id";
                              $r = mysqli_query($conn, $query);
                              $d = mysqli_fetch_assoc($r);
                              ?>
                              <h6><b>Acesso interno a dados em repouso:</b> <?php echo utf8_encode($d['subtopico']); ?></h6>

                              <h6><b>Impacto:</b> <?php echo utf8_encode($dados['impacto']); ?></h6>
                              <h6><b>Probabilidade:</b> <?php echo utf8_encode($dados['probab']); ?></h6>
                              <h6><b>Risco:</b> <?php
                              if (utf8_encode($dados['risco']) == 'POUCO CRÍTICO'):
                                echo '<span id="spantable" class="green white-text"><b>'. utf8_encode($dados['risco']) .'</b></span>';
                              elseif (utf8_encode($dados['risco']) == 'MODERADO'):
                                echo '<span id="spantable" class="yellow white-text"><b>'. $dados["risco"] .'</b></span>';
                              elseif (utf8_encode($dados['risco']) == 'SEVERO'):
                                echo '<span id="spantable" class="orange white-text"><b>'. $dados["risco"] .'</b></span>'; 
                              else:
                                echo '<span id="spantable" class="red white-text"><b>'. utf8_encode($dados['risco']) .'</b></span>';
                              endif;
                              ?></h6>
                              <h6><b>Status:</b> <?php 
                              if ($dados['status'] == 'ATIVO'):
                                echo '<span id="spantable" class="green white-text"><b>'. $dados["status"].'</b></span>';
                              endif;
                              ?></h6>
                              <h6><b>Responsável:</b> <?php echo $dados['responsavel']; ?></h6>
                              <h6><b>Criado por:</b> <?php echo utf8_encode($dados['criado_por']); ?> - <b>Em:</b> <?php echo date("d/m/Y H:i:s", strtotime($dados['criado'])); ?></h6><br>

                            </div>
                          </div>
                        </div>

                      </tr>

                    <?php endwhile; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Serviço</th>
                      <th>Impacto</th>
                      <th>Probabilidade</th>
                      <th>Risco</th>
                      <th>Status</th>
                      <th>Responsável</th>
                      <th>Criado por</th>
                      <th>Criado em</th>
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


