<style type="text/css">
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
.submenu{
      background-color: rgba(230, 69, 69, 0.85);
}
</style>

  <?php $user = $this->UserAuth->getUser(); ?>
<!--MENU OPEN-->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Works<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $this->webroot.'works/add'; ?>">Nuevo</a></li>
                <li><a href="<?php echo $this->webroot.'works'; ?>">Todos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Team<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $this->webroot.'teams/add'; ?>">Nuevo</a></li>
                <li><a href="<?php echo $this->webroot.'teams'; ?>">Todos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quotes<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $this->webroot.'quotes/add'; ?>">Nuevo</a></li>
                <li><a href="<?php echo $this->webroot.'quotes'; ?>">Todos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $this->webroot.'personals/add'; ?>">Nuevo</a></li>
                <li><a href="<?php echo $this->webroot.'personals'; ?>">Todos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $this->webroot.'clients/add'; ?>">Nuevo</a></li>
                <li><a href="<?php echo $this->webroot.'clients'; ?>">Todos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyectos<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $this->webroot.'projects/add'; ?>">Nuevo</a></li>
                <li><a href="<?php echo $this->webroot.'projects'; ?>">Todos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ingresos<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $this->webroot.'ingresos/add'; ?>">Nuevo</a></li>
                <li><a href="<?php echo $this->webroot.'ingresos'; ?>">Todos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Egresos<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $this->webroot.'egresos/add'; ?>">Nuevo</a></li>
                <li><a href="<?php echo $this->webroot.'egresos'; ?>">Todos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Balance<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $this->webroot.'/balance'; ?>">Ver Balance</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
              <?php if($this->UserAuth->getUserId()): ?>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo $this->webroot; ?>">Ir a la página</a></li>
                  <li><a href="<?php echo $this->webroot; ?>editUser/<?php echo $user['User']['id'];?>">Ir al Perfil</a></li>
                  <li><a href="<?php echo $this->webroot; ?>changePassword">Cambiar Contraseña</a></li>
                  <li><a href="<?php echo $this->webroot.'logout'; ?>">Cerrar Sesión</a></li>
                </ul>
              <?php else: ?>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo $this->webroot.'login'; ?>">Identificarse</a></li>
                </ul>
              <?php endIf ;?>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!--MENU CLOSE-->