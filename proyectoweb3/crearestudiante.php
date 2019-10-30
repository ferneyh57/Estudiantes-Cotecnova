<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<?php
//condicion para comprobar si los campos están declarados anteriormente y si no estan vacíos
if(isset($_POST['enviar']) && !empty($_POST['tipodocumento']) && !empty($_POST['2']) &&  !empty($_POST['3']) && !empty($_POST['4']) && !empty($_POST['estadocivil']) && !empty($_POST['programa']) && !empty($_POST['8'])){
    
    require_once 'MySQL.php';
    
 
    
    $tdoc= $_POST['tipodocumento'];
    $ndoc = $_POST['2'];
    $nombre = $_POST['3'];
    $apellido = $_POST['4'];
    $estadoc = $_POST['estadocivil'];
    $programa = $_POST['programa'];
    $contrasena = md5($_POST['8']);
    $activo = 1;
   

    $mysql = new MySQL;
   
    $mysql->conectar();
    
   
    $insertar= $mysql->efectuarConsulta("insert into tiendacotecnova.estudiantes
    ( est_doc_iden, est_nombres, est_apellidos,  est_password, tipo_documento_id, programa_id, estado_civil_id, activo) 
    VALUES(   
    '".$ndoc. "', '" .$nombre. "','" .$apellido. "', '" .$contrasena. "','" .$tdoc. "', '" .$programa. "','" .$estadoc. "', '" .$activo. "' )"); 

   



    
    echo "<div class=\"alert alert-success alert-dismissible\"><a href=\"index.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>¡Bienvenido!</strong> Registrado Correctamente.";
    header( "refresh:5;url=index.html" );

 
 }


 else{
  echo "<div class=\"alert alert-danger alert-dismissible\"><a href=\"crear_estudiantes.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong ¡Error!</strong> No se completo bien el formulario.";
    header( "refresh:5;url=crear_estudiantes.php" );
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