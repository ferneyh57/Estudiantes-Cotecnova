<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    
    //lamado al archivo MySQL
    require_once 'MySQL.php';
    
    
    $idUsuario = $_GET['id'];    
    
    $mysql = new MySQL;
  
    $mysql->conectar();
    
    
    $ActualizarEstado = $mysql->efectuarConsulta("update estudiantes set activo = 1 where est_id =".$idUsuario.""); 
    
       
        
         
           echo "<div class=\"alert alert-success alert-dismissible\"><a href=\"index.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Felicidades!</strong>El Estudiante a sido activado Nuevamente.</div>";
      
           header( "refresh:3;url=index.html" ); 
        } else {
          
            echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"activar_estudiantes.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>No se ha podido habilitar al Estudiante.</div>";
 
            header( "refresh:3;url=activar_estudiantes.php" ); 
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