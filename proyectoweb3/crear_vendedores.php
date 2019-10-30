<!DOCTYPE html>
<html lang="en">
<?php
  require_once 'MySQL.php';
  $mysql = new MySQL;
   
  $mysql->conectar();

  $tipodocumento= $mysql->efectuarConsulta("SELECT tiendacotecnova.tipo_documento.tipo_documento_id, tiendacotecnova.tipo_documento.tipo_documento_nombre from tiendacotecnova.tipo_documento");
  $estadocivil= $mysql->efectuarConsulta("SELECT tiendacotecnova.estado_civil.estado_civil_id, tiendacotecnova.estado_civil.estado_civil_nombre  from tiendacotecnova.estado_civil");
  ?>
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Crear Vendedor</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html"><img src="img/cafe11.png" border="radio" width="45" height="45">Tienda Cotecnova</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
     <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Sergio Arias</p>
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="index.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">inicio</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Estudiantes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="estudiantes.html"><i class="icon fa fa-circle-o"></i> Administrar Estudiante</a></li>
            <li><a class="treeview-item" href="tabla_estu_creados.php"><i class="icon fa fa-circle-o"></i> Tabla Estu. creados</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Vendedores</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="vendedoress.html"><i class="icon fa fa-circle-o"></i> Administrar Vendedores</a></li>
            <li><a class="treeview-item" href="tabla_vend_creados.php"><i class="icon fa fa-circle-o"></i> Tabla vend. creados</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="crear_credito.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Crear Estudiantes</span></a></li>
        <li><a class="app-menu__item" href="tabla_creditos.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Creditos Estu</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Programas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="programa.html"><i class="icon fa fa-circle-o"></i> Crear Programas</a></li>
            <li><a class="treeview-item" href="tabla_programas_creados.php"><i class="icon fa fa-circle-o"></i> Ver Programas</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Crear Vendedores</h1>
          <p>Bienvenidos, Por favor diligencie la Informacion</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Vendedores</li>
          <li class="breadcrumb-item"><a href="#">Crear Vendedores</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form method="POST" action="crearvendedor.php">
                  
                  <div class="form-group">
                    <label for="exampleSelect1">Tipo Documento</label>
                    <select name="tipodocumento" class="form-control" >
                    <?php while ($resultado=mysqli_fetch_assoc($tipodocumento)){?> 
                    <option value="<?php echo $resultado['tipo_documento_id'] ?>"><?php echo $resultado['tipo_documento_nombre'] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                  </div>
                    
                    
                  <div class="form-group">
                    <label class="col-form-label" >Numero de identificacion</label>
                    <input class="form-control" id="inputdocumento" name="identificacionvendedor" type="text">
                  </div>
                    
                  <div class="form-group">
                    <label class="col-form-label" >Nombres</label>
                    <input class="form-control" name="nombrevendedor" id="inputnombre" type="text">
                  </div>
                    
                  <div class="form-group">
                    <label class="col-form-label"  >Apellidos</label>
                    <input class="form-control" id="inputapellidos" name="apellidovendedor" type="text">
                  </div>
                
              
                   
                  <div class="form-group">
                    <label for="exampleSelect1">Estado Civil</label>
                   <select name="estadocivil" class="form-control" >
                    <?php while ($resultado=mysqli_fetch_assoc($estadocivil)){?> 
                    <option value="<?php echo $resultado['estado_civil_id'] ?>"><?php echo $resultado['estado_civil_nombre'] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                  </div>
               
                <div class="form-group">
                    <label class="col-form-label"  >Clave</label>
                    <input class="form-control" placeholder="Ingrese su contrasenha" id="inputclave" name="clavevendedor" type="password">
                </div>
                <div class="tile-footer">
              <button class="btn btn-primary" name="enviar" type="submit">Crear Vend.</button>
            </div>
                </form>
              </div>
            </div>
            
            </form>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>