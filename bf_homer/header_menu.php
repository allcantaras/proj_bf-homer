  <header>
    <div class="hide-on-large-only">
      <div class="navbar-fixed">
        <nav class="navbar white">
          <div class="nav-wrapper">
            <div class="container center-align">
              <a href="home.html" class="brand-logo"><i class="material-icons black-text">home</i></a>
              <a href="#" class="sidenav-trigger left" data-target="sidenav-left">
                <i class="material-icons black-text">menu</i>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <ul id="sidenav-left" class="sidenav sidenav-fixed">

      <div class="user-view">
        <div class="background">
          <img src="img/bg.jpg">
        </div>
        <a href="#user"><img class="circle" src="img/user.jpg"></a>
        <a href="#name"><span class="white-text name">Admin</span></a>
        <a href="#email"><span class="white-text email">admin@beijaflore.com</span></a>
      </div>

      <ul class="collapsible collapsible-accordion">

        <li class="bold waves-effect active">
          <a href="home.html" class="collapsible-header" tabindex="0">
            Home
            <i class="material-icons left">home</i>
          </a>
        </li>

        <!-- GESTÃO DE USUÁRIOS -->
        <li class="bold waves-effect">
          <a class="collapsible-header" tabindex="0">
            Gestão de Usuários
            <i class="material-icons left">people</i>
          </a>
          <div class="collapsible-body">
            <ul>
              <li>
                <a href="cadastro.html" class="waves-effect active">
                  Novo Usuário
                  <i class="material-icons">person_add</i>
                </a>
              </li>
              <li>
                <a href="#" class="waves-effect">
                  Consultar Usuário
                  <i class="material-icons">search</i>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <!-- GESTÃO -->
        <li class="bold waves-effect">
          <a class="collapsible-header" tabindex="0">
            <i class="material-icons left">assignment</i>
            Gestão
          </a>
          <div class="collapsible-body">
            <ul>
              <li>
                <a href="demanda.html" class="waves-effect">
                  Abrir Serviço
                  <i class="material-icons">edit</i>
                </a>
              </li>
              <li>
                <a href="#" class="waves-effect">
                  Consultar demandas
                  <i class="material-icons">search</i>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <!-- COMPRAS -->
        <li class="bold waves-effect">
          <a class="collapsible-header" tabindex="0">
            <i class="material-icons left">work</i>
            Compras
          </a>
          <div class="collapsible-body">
            <ul>
              <li>
                <a href="fornecedores.html" class="waves-effect">
                  Fornecedores
                  <i class="material-icons">perm_identity</i>
                </a>
              </li>
              <li>
                <a href="#" class="waves-effect">
                  Formulários
                  <i class="material-icons">list</i>
                </a>
              </li>
              <li>
                <a href="#" class="waves-effect">
                  Consultar demandas
                  <i class="material-icons">search</i>
                </a>
              </li>
            </ul>
          </div>
        </li>


        <!-- SEGURANÇA -->
        <li class="bold waves-effect">
          <a class="collapsible-header" tabindex="0">
            <i class="material-icons left">security</i>
            Segurança
          </a>
          <div class="collapsible-body">
            <ul>
              <li>
                <a href="#" class="waves-effect">
                  Ordens de Serviços
                  <i class="material-icons">assignment</i>
                </a>
              </li>
              <li>
                <a href="#" class="waves-effect">
                  Consultar Serviços
                  <i class="material-icons">search</i>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <!-- PRIVACIDADE -->
        <li class="bold waves-effect">
          <a class="collapsible-header" tabindex="0">
            <i class="material-icons left">fingerprint</i>
            Privacidade
          </a>
          <div class="collapsible-body">
            <ul>
              <li>
                <a href="#" class="waves-effect">
                  Análise de Maturidade
                  <i class="material-icons">insert_chart</i>
                </a>
              </li>
              <li>
                <a href="#" class="waves-effect">
                  Consultar demandas
                  <i class="material-icons">search</i>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <!--  COMPLIANCE RFP -->
        <li class="bold waves-effect">
          <a class="collapsible-header" tabindex="0">
            <i class="material-icons left">book</i>
            Compliance RFP
          </a>
          <div class="collapsible-body">
            <ul>
              <li>
                <a href="rfp_clausula.html" charset="waves-effect">
                  Cadastro de Cláusulas
                  <i class="material-icons">playlist_add</i>
                </a>
              </li>
              <li>
                <a href="rfp_matriz.html" charset="waves-effect">
                  Matriz de Cláusulas
                  <i class="material-icons">reorder</i>
                </a>
              </li>
              <li>
                <a href="rfp_controle.html" charset="waves-effect">
                  Controle de Cláusulas
                  <i class="material-icons">dashboard</i>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <!-- COMPLIANCE RISCO -->
        <li class="bold waves-effect">
          <a class="collapsible-header" tabindex="0">
            <i class="material-icons left">lock</i>
            Compliance Risco
          </a>
          <div class="collapsible-body">
            <ul>
              <li>
                <a href="risco_questoes.html" charset="waves-effect">
                  Cadastro de Questão
                  <i class="material-icons">playlist_add</i>
                </a>
              </li>
              <li>
                <a href="matriz_questoes.html" charset="waves-effect">
                  Matriz de Questões
                  <i class="material-icons">reorder</i>
                </a>
              </li>
              <li>
                <a href="controle_questoes.html" charset="waves-effect">
                  Controle de Questões
                  <i class="material-icons">dashboard</i>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold waves-effect">
          <a class="collapsible-header red-text" tabindex="0" href="home.html">
            <i class="material-icons left">keyboard_return</i>
            Sair
          </a>
        </li>

      </ul>
    </ul>

  </header>