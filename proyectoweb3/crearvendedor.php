<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<?php
//condicion para comprobar si los campos están declarados anteriormente y si no estan vacíos
if(isset($_POST['enviar']) && !empty($_POST['tipodocumento']) && !empty($_POST['identificacionvendedor']) && !empty($_POST['nombrevendedor']) && !empty($_POST['apellidovendedor']) && !empty($_POST['estadocivil']) && !empty($_POST['clavevendedor'])){
    
    require_once 'MySQL.php';
    
 
    
    $tdoc= $_POST['tipodocumento'];
    $ndoc = $_POST['identificacionvendedor'];
    $nombre = $_POST['nombrevendedor'];
    $apellido = $_POST['apellidovendedor'];
    $estadoc = $_POST['estadocivil'];
    $contrasena = md5($_POST['clavevendedor']);
    $activo = 1;

    $mysql = new MySQL;
   
    $mysql->conectar();
    
   
    $insertar= $mysql->efectuarConsulta("insert into tiendacotecnova.vendedores ( ven_doc_iden, ven_nombres, ven_apellidos, ven_password, estado_civil_id, tipo_documento_id, activo) VALUES(  '".$ndoc. "', '" .$nombre. "','" .$apellido. "','" .$contrasena. "','" .$estadoc. "', '".$tdoc. "', '".$activo."')"); 


   



    
    echo "<div class=\"alert alert-success alert-dismissible\"><a href=\"index.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>¡Bienvenido!</strong> Registrado Correctamente.";
    header( "refresh:5;url=index.html" );

 }else{
     echo "<div class=\"alert alert-danger alert-dismissible\"><a href=\"crear_vendedores.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong ¡Error!</strong> No se completo bien el formulario.";
    header( "refresh:5;url=crear_vendedores.php" );
 }
 
?>
 <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>
  <!-- Page specific javascripts-->
  <!-- Google analytics script-->
  <script type="text/javascript">
    if (document.location.hostname == 'pratikborsadiya.in') {
      (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-72504830-1', 'auto');
      ga('send', 'pageview');
    }
  </script>
  <?php

 ?>