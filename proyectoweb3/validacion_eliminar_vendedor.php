<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<?php
//comprobamos que los campoes no esten vacios
if(isset($_GET['id']) && !empty($_GET['id'])){
    
    //lamado al archivo MySQL
    require_once 'MySQL.php';
    
    //pasamos los valores del formulario a una nueva variable
    $idUsuario = $_GET['id'];    
    //pasamos las funciones a una nueva variable
    $mysql = new MySQL;
  //nos conectamos a la bd
    $mysql->conectar();
    
    //hacemos una consulta en este caso update cambiando su estado buscandolo mediante el id
    $ActualizarEstado = $mysql->efectuarConsulta("update vendedores set activo = 0 where ven_id =".$idUsuario.""); 
    
       
        
         // si se cumple mostramos este
           echo "<div class=\"alert alert-success alert-dismissible\"><a href=\"index.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Bien!</strong>El Estudiante ha sido inhabilitado correctamente.</div>";
      //redirigimos a la pagina principal
           header( "refresh:3;url=index.php" ); 
        } else {
          //sino se cumple mostraamos este
            echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"eliminar_estudiantes.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>No se ha podido inhabilitar el Estudiante.</div>";
 //redirigimos denuevo a formulario
            header( "refresh:3;url=eliminar_estudiantes.php" ); 
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
}
