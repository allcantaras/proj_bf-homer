 <header>

  <!-- NAVBAR MOBILE E FIXA -->
  <nav class="navbar white">
    <div class="nav-wrapper">
      <a href="#" class="center brand-logo black-text">H.O.M.E.R</a>
      <a href="#" class="sidenav-trigger left" data-target="sidenav-left">
        <i class="material-icons black-text">menu</i>
      </a>
    </div>
  </nav>

  <!-- COMEÇO DO MENU -->
  <ul id="sidenav-left" class="sidenav sidenav-fixed">
    <!-- IMAGEM E INFO DO USUÁRIO -->
    <li>
      <div class="user-view">
        <div class="background">
          <img src="img/bg.jpg">
        </div>
        <a href="#user"><img class="circle" src="img/user.jpg"></a>
        <a href="#name"><span class="white-text name"><?php echo utf8_encode(strtoupper($_SESSION['nome'])); ?></span></a>
        <a href="mailto:<?php $_SESSION['email'] ?>"><span class="white-text email"><?php echo $_SESSION['usuario']; ?></span></a>
      </div>
    </li>

    <!-- MENU -->
    <li class="no-padding">
     <ul class="collapsible collapsible-accordion">

      <!-- LINK HOME -->
      <li class="bold waves-effect">
        <a href="home.php" class="collapsible-header" tabindex="0">
          Home
          <i class="material-icons left">home</i>
        </a>
      </li>

      <!-- GESTÃO DE USUÁRIOS -->
      <li id="mUsuarios" class="bold waves-effect hide">
        <a class="collapsible-header" tabindex="0">
          Usuários
          <i class="material-icons left">people</i>
        </a>
        <div class="collapsible-body">
          <ul>
            <li>
              <a href="cadastro.php" class="waves-effect">
                Novo Usuário
                <i class="material-icons">person_add</i>
              </a>
            </li>
            <li>
              <a href="usuarios.php" class="waves-effect">
                Consultar Usuário
                <i class="material-icons">search</i>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- GESTÃO -->
      <li id="mGestao" class="bold waves-effect hide">
        <a class="collapsible-header" tabindex="0">
          <i class="material-icons left">assignment</i>
          Gestão
        </a>
        <div class="collapsible-body">
          <ul>
            <li>
              <a href="servico.php" class="waves-effect">
                Abrir Serviço
                <i class="material-icons">edit</i>
              </a>
            </li>
            <li>
              <a href="consulta.php" class="waves-effect">
                Consultar demandas
                <i class="material-icons">search</i>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- COMPRAS -->
      <li id="mCompras" class="bold waves-effect hide">
        <a class="collapsible-header" tabindex="0">
          <i class="material-icons left">work</i>
          Compras
        </a>
        <div class="collapsible-body">
          <ul>
            <li>
              <a href="fornecedores.php" class="waves-effect">
                Fornecedores
                <i class="material-icons">perm_identity</i>
              </a>
            </li>
            <li>
              <a href="questionarios.php" class="waves-effect">
                Formulários
                <i class="material-icons">list</i>
              </a>
            </li>
            <li>
              <a href="consulta.php" class="waves-effect">
                Consultar demandas
                <i class="material-icons">search</i>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- SEGURANÇA -->
      <li id="mSeguranca" class="bold waves-effect hide">
        <a class="collapsible-header" tabindex="0">
          <i class="material-icons left">security</i>
          Segurança
        </a>
        <div class="collapsible-body">
          <ul>
            <li>
              <a href="#" class="waves-effect">
                Ordens de demandas
                <i class="material-icons">assignment</i>
              </a>
            </li>
            <li>
              <a href="consulta.php" class="waves-effect">
                Consultar demandas
                <i class="material-icons">search</i>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- PRIVACIDADE -->
      <li id="mPrivacidade" class="bold waves-effect hide">
        <a class="collapsible-header" tabindex="0">
          <i class="material-icons left">fingerprint</i>
          Privacidade
        </a>
        <div class="collapsible-body">
          <ul>
            <li>
              <a href="analise_maturidade.php" class="waves-effect">
                Análise de Maturidade
                <i class="material-icons">insert_chart</i>
              </a>
            </li>
            <li>
              <a href="consulta.php" class="waves-effect">
                Consultar demandas
                <i class="material-icons">search</i>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!--  COMPLIANCE RFP -->
      <li id="mRisco" class="bold waves-effect hide">
        <a class="collapsible-header" tabindex="0">
          <i class="material-icons left">book</i>
          Riscos de Compliance
        </a>
        <div class="collapsible-body">
          <ul>
            <li>
              <a href="rfp_clausula.php" class="waves-effect">
                Cadastro de Cláusulas
                <i class="material-icons">playlist_add</i>
              </a>
            </li>
            <li>
              <a href="#" class="waves-effect">
                Matriz de Cláusulas
                <i class="material-icons">reorder</i>
              </a>
            </li>
            <li>
              <a href="#" class="waves-effect">
                Controle de Cláusulas
                <i class="material-icons">dashboard</i>
              </a>
            </li>
            <li>
              <a href="consulta.php" class="waves-effect">
                Consultar demandas
                <i class="material-icons">search</i>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- COMPLIANCE RISCO -->
      <li id="mRiscoSeg" class="bold waves-effect hide">
        <a class="collapsible-header" tabindex="0">
          <i class="material-icons left">lock</i>
          Riscos de Segurança
        </a>
        <div class="collapsible-body">
          <ul>
            <li>
              <a href="risco_questoes.php" class="waves-effect">
                Cadastro de Questão
                <i class="material-icons">playlist_add</i>
              </a>
            </li>
            <li>
              <a href="matriz_questoes.php" class="waves-effect">
                Matriz de Questões
                <i class="material-icons">reorder</i>
              </a>
            </li>
            <li>
              <a href="#" class="waves-effect">
                Controle de Questões
                <i class="material-icons">dashboard</i>
              </a>
            </li>
            <li>
              <a href="consulta.php" class="waves-effect">
                Consultar demandas
                <i class="material-icons">search</i>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- LOGOUT -->
      <li class="bold waves-effect">
        <a class="collapsible-header red-text" tabindex="0" href="func/logout.php">
          <i class="material-icons left">keyboard_return</i>
          Sair
        </a>
      </li>

      <!-- FIM MENU -->
    </ul>
    <!-- FIM NO-PADDING -->
  </li>
</ul>

</header>