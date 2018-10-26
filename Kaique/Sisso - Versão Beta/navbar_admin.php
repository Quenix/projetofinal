<?php  echo '
    <header>
      <nav id="principal" class=" navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand">SSO - BETA</a>
            <button class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="up"></button>
          </div>
          <ul class="up nav navbar-nav navbar-left collapse navbar-collapse text-uppercase">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-pencil"></span>Iniciação Cristã <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="initiation_christian.php"><span class="glyphicon glyphicon-edit"></span>Relizar Iniciação</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="tbl_users_christian.php"><span class="glyphicon glyphicon-list-alt"></span>Consultar Iniciações</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><span class="glyphicon glyphicon-list"></span>Certidão com Reconhecimento</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown"><img src="img/casamento.png">Casamento <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="register_husband.php"><span class="glyphicon glyphicon-heart-empty"></span>Realizar Casamento</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="tbl_users_marriage.php"><span class="glyphicon glyphicon-list-alt"></span>Consultar Casamentos</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><span class="glyphicon glyphicon-ok"></span>Autorização Casamento</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><span class="glyphicon glyphicon-file"></span>Ata de Casamento Pároco</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><span class="glyphicon glyphicon-list"></span>Certidão Pároco</a></li>
                <li role="separator" class="divider"></li>
                <li><a href=#><span class="glyphicon glyphicon-font"></span>Ficha de Casamento</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><span class="glyphicon glyphicon-duplicate"></span>Processo de Casamento</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><span class="glyphicon glyphicon-calendar"></span>Validade Civil</a></li>
              </ul>
            </li>
            <li><a href="register_parish.php"><span class="glyphicon glyphicon-plus"></span>Cadastrar Paróquia</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-fire"></span>Administrador<span class="caret"></span></a>
              <ul id="logout" class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-refresh"></span>Alterar usuário</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-refresh"></span>Alterar paróquia</a></li>
              </ul>
            </li>
          </ul>
          <ul id="logout" class="up nav navbar-nav navbar-right collapse navbar-collapse text-uppercase">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Sair</a></li>
          </ul>
        </div>
      </nav>
    </header>
';  ?>
