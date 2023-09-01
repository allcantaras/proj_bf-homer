 <?php
 session_start();
 include_once('func/conexao.php');
 include_once('func/verifica.php');
 include_once('include/header.php');
 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
  <title>H.O.M.E.R - Usuários</title>
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

</head>

<body class="body has-fixed-sidenav">
  <main>
    <div class="container mycont">
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="card horizontal">
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title"><blockquote><h4>Usuários</h4></blockquote></span>

                <table id="lista" class="responsive-table display nowrap">
                  <thead>
                    <tr>
                      <th>Primeiro nome</th>
                      <th>Sobrenome</th>
                      <th>E-mail</th>
                      <th>Perfil</th>
                      <th>Usuário</th>
                      <th>Criado em</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $sql = "SELECT * FROM ALAS_HMR_USERS LIMIT 1,100";
                    $result = mysqli_query($conn, $sql);
                    while ($dados = mysqli_fetch_array($result)):
                      ?>
                      <tr>
                        <td><?php echo utf8_encode($dados['p_nome']); ?></td>
                        <td><?php echo utf8_encode($dados['u_nome']); ?></td>
                        <td><?php echo $dados['email']; ?></td>
                        <td><?php echo utf8_encode($dados['perfil_desc']); ?></td>
                        <td><?php echo $dados['usuario']; ?></td>
                        <td><?php echo $dados['criado']; ?></td>
                        <td><a href="editar.php?id=<?php echo $dados['id_usuario']; ?>" class="btn-floating blue"><i class="material-icons">edit</i></a></td> 
                        <td><a href="#remove<?php echo $dados['id_usuario'];?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                        <div id="remove<?php echo $dados['id_usuario'];?>" class="modal">
                          <div class="modal-content">
                            <h4 class="red-text">Atenção!</h4>
                            <p>Tem certeza que deseja remover o usuário <b><?php echo $dados['usuario']; ?></b>?</p>
                          </div>
                          <div class="modal-footer">
                            <form action="func/deletar.php" method="POST">
                              <input type="hidden" name="id" value="<?php echo $dados['id_usuario'];?>">
                              <button type="submit" name="btn-deletar" class="btn red"><i class="material-icons left">delete_forever
                              </i>Sim</button>
                              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            </form>
                          </div>
                        </div>

                      </tr>

                    <?php endwhile; ?>

                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Primeiro nome</th>
                      <th>Sobrenome</th>
                      <th>E-mail</th>
                      <th>Perfil</th>
                      <th>Usuário</th>
                      <th>Criado em</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </tfoot>
                </table>
                <br>
                <a href="cadastro.php" class="btn waves-effect waves-light light-blue darken-4 right"><i class="material-icons left">person_add</i>Cadastrar</a>           
              </div>

              <?php
              if (isset($_SESSION['status_update'])):
                ?>

                <script>
                  M.toast({html: 'Usuário atualizado com sucesso!'});
                </script>

                <?php
              endif;
              unset($_SESSION['status_update']);
              ?>

              <?php 
              if (isset($_SESSION['status_delet'])):
                ?>
                <script>
                  M.toast({html: "Usuário deletado com sucesso!"});
                </script>

                <?php
              endif;
              unset($_SESSION['status_delet']);
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


