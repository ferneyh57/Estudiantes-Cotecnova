<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<?php

    if(isset($_POST['Identificacion']) && isset($_POST['pass'])  && isset($_POST['tipousuario']) && 
            !empty($_POST['Identificacion']) && !empty($_POST['pass'])  && !empty($_POST['tipousuario']) ){
        
        require ("MySQL.php");
        $mysql = new MySQL;
        $usuario = $_POST['Identificacion'];
        $contra = md5($_POST['pass']);
        $tipousuario =  $_POST['tipousuario'];
        $mysql->conectar();
        
        if($tipousuario == 1){

            //Consulto si existe un usuario con ese estado
            $ConsultarEstado = $mysql->efectuarConsulta("select tiendacotecnova.estudiantes.activo from tiendacotecnova.estudiantes where  tiendacotecnova.estudiantes.est_doc_iden = ".$usuario." and tiendacotecnova.estudiantes.est_password = '".$contra."'");
            
            //Pregunto si la consulta esta vacia
            if(!empty($ConsultarEstado)){
                //Consulto si el numero de filas es mayor a 0 
                if(mysqli_num_rows($ConsultarEstado) > 0){
                    //recorro el objeto de la consulta
                    while ($resultado = mysqli_fetch_assoc($ConsultarEstado)){
                        //almaceno los resultados en variables
                        $activo = $resultado["activo"];
                    }
                    //si estado es = 1 el usuario esta activo
                    if($activo = 1){
                        //realizo la consulta para ver si existe un usuario en la bd y esta activo
                        $usuarios= $mysql->efectuarConsulta("select tiendacotecnova.estudiantes.est_doc_iden, tiendacotecnova.estudiantes.est_nombres, tiendacotecnova.estudiantes.est_apellidos  from tiendacotecnova.estudiantes where  tiendacotecnova.estudiantes.est_doc_iden = ".$usuario." and tiendacotecnova.estudiantes.est_password = '".$contra."' and tiendacotecnova.estudiantes.activo = 1"); 

                        //Cuento si la consulta esta vacia
                        if (!empty($usuarios)){
                            //consulto si existen filas en el objeto
                            if(mysqli_num_rows($usuarios) > 0){
                                //inicio la session
                                session_start();
                                //recorro el resultado de la consulta y la almaceno en una variable
                                while ($resultado= mysqli_fetch_assoc($usuarios)){
                                    //almaceno los resultados en variables
                                    $est_doc_iden = $resultado["est_doc_iden"];
                                    $est_nombres = $resultado["est_nombres"];
                                    $est_apellidos = $resultado["est_apellidos"];
                                   
                                }
                                // Almaceno las variables en sesiones
                                $_SESSION['est_doc_iden'] = $est_doc_iden;
                                $_SESSION['est_nombres'] = $est_nombres;
                                $_SESSION['est_apellidos'] = $est_apellidos;
                                 //redirecciono al index
                                header("Location: index_estudiante.php");
                            }else{
                                //Mesanje de error por si no hay filas en la consulta
                                echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"page-login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>Usuario o contraseña incorrecta o esta inactivo.</div>";
                                header( "refresh:3;url= page-login.html" );
                            }                                    
                        }else{
                            //Mensaje de error si la consulta esta vacia
                            echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"page-login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>Usuario o contraseña incorrecta o esta inactivo.</div>";
                            header( "refresh:3;url=page-login.html" ); 
                        } 
                    }else{
                        //Mensaje de error si el usuario esta desactivado
                        echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"page-login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>El usuario esta inactivo.</div>";
                        //header( "refresh:3;url=page-login.html" ); 
                    }      
                }else{
                    //Mensaje de error si la consulta del estado no tiene filas
                    echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"page-login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>Usuario o contraseña incorrecta.</div>";
                    header( "refresh:3;url=page-login.html" ); 
                }                    
            }else{
                //Mensaje de error si la consulta del estado esta vacio
                echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"../login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>No existe el usuario.</div>";
                header( "refresh:3;url=page-login.html" ); 
            }      
        } 
        if($tipousuario == 2){

            //Consulto si existe un usuario con ese estado
            $ConsultarEstado = $mysql->efectuarConsulta("select tiendacotecnova.vendedores.activo from tiendacotecnova.vendedores where  tiendacotecnova.vendedores.ven_doc_iden = ".$usuario." and tiendacotecnova.vendedores.ven_password = '".$contra."'");
            
            //Pregunto si la consulta esta vacia
            if(!empty($ConsultarEstado)){
                //Consulto si el numero de filas es mayor a 0 
                if(mysqli_num_rows($ConsultarEstado) > 0){
                    //recorro el objeto de la consulta
                    while ($resultado = mysqli_fetch_assoc($ConsultarEstado)){
                        //almaceno los resultados en variables
                        $activo = $resultado["activo"];
                    }
                    //si estado es = 1 el usuario esta activo
                    if($activo = 1){
                        //realizo la consulta para ver si existe un usuario en la bd y esta activo
                        $usuarios= $mysql->efectuarConsulta("select tiendacotecnova.vendedores.ven_doc_iden, tiendacotecnova.vendedores.ven_nombres, tiendacotecnova.vendedores.ven_apellidos  from tiendacotecnova.vendedores where  tiendacotecnova.vendedores.ven_doc_iden = ".$usuario." and tiendacotecnova.vendedores.ven_password = '".$contra."' and tiendacotecnova.vendedores.activo = 1"); 

                        //Cuento si la consulta esta vacia
                        if (!empty($usuarios)){
                            //consulto si existen filas en el objeto
                            if(mysqli_num_rows($usuarios) > 0){
                                //inicio la session
                                session_start();
                                //recorro el resultado de la consulta y la almaceno en una variable
                                while ($resultado= mysqli_fetch_assoc($usuarios)){
                                    //almaceno los resultados en variables
                                    $ven_doc_iden = $resultado["ven_doc_iden"];
                                    $ven_nombres = $resultado["ven_nombres"];
                                    $ven_apellidos = $resultado["ven_apellidos"];
                                   
                                }
                                // Almaceno las variables en sesiones
                                $_SESSION['ven_doc_iden'] = $ven_doc_iden;
                                $_SESSION['ven_nombres'] = $ven_nombres;
                                $_SESSION['ven_apellidos'] = $ven_apellidos;
                                 //redirecciono al index
                                header("Location: index_vendedores.php");
                            }else{
                                //Mesanje de error por si no hay filas en la consulta
                                echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"page-login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>vendedor o contraseña incorrecta o esta inactivo.</div>";
                                header( "refresh:3;url= page-login.html" );
                            }                                    
                        }else{
                            //Mensaje de error si la consulta esta vacia
                            echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"page-login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>vendedor o contraseña incorrecta o esta inactivo.</div>";
                            header( "refresh:3;url=page-login.html" ); 
                        } 
                    }else{
                        //Mensaje de error si el usuario esta desactivado
                        echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"page-login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>El vendedor esta inactivo.</div>";
                        //header( "refresh:3;url=page-login.html" ); 
                    }      
                }else{
                    //Mensaje de error si la consulta del estado no tiene filas
                    echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"page-login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>vendedor o contraseña incorrecta.</div>";
                    header( "refresh:3;url=page-login.html" ); 
                }                    
            }else{
                //Mensaje de error si la consulta del estado esta vacio
                echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"../login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>No existe el vendedor.</div>";
                header( "refresh:3;url=page-login.html" ); 
            }      
        } 
        if($tipousuario == 3){

            //Consulto si existe un usuario con ese estado
            $ConsultarEstado = $mysql->efectuarConsulta("select tiendacotecnova.admin.activo from tiendacotecnova.admin where  tiendacotecnova.admin.admin_usser = ".$usuario." and tiendacotecnova.admin.admin_pass = '".$contra."'");

            
            //Pregunto si la consulta esta vacia
            if(!empty($ConsultarEstado)){
                //Consulto si el numero de filas es mayor a 0 
                if(mysqli_num_rows($ConsultarEstado) > 0){

                    //recorro el objeto de la consulta
                    while ($resultado = mysqli_fetch_assoc($ConsultarEstado)){
                        //almaceno los resultados en variables
                        $activo = $resultado["activo"];
                    }
                    //si estado es = 1 el usuario esta activo
                    if($activo = 1){
                        //realizo la consulta para ver si existe un usuario en la bd y esta activo
                        $usuarios= $mysql->efectuarConsulta("select tiendacotecnova.admin.admin_nombres, tiendacotecnova.admin.admin_usser from tiendacotecnova.admin where  tiendacotecnova.admin.admin_usser = ".$usuario." and tiendacotecnova.admin.admin_pass = '".$contra."' and tiendacotecnova.admin.activo = 1"); 

                        //Cuento si la consulta esta vacia
                        if (!empty($usuarios)){
                            //consulto si existen filas en el objeto
                            if(mysqli_num_rows($usuarios) > 0){
                                //inicio la session
                                session_start();
                                //recorro el resultado de la consulta y la almaceno en una variable
                                while ($resultado= mysqli_fetch_assoc($usuarios)){
                                    //almaceno los resultados en variables
                                    $admin_nombres = $resultado["admin_nombres"];
                                    $admin_usser = $resultado["admin_usser"];
                                   
                                }
                                // Almaceno las variables en sesiones
                                $_SESSION['admin_nombres'] = $admin_nombres;
                                $_SESSION['admin_usser'] = $admin_usser;
                                 //redirecciono al index
                                header("Location: index.php");
                            }else{
                                //Mesanje de error por si no hay filas en la consulta
                                echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"page-login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>vendedor o contraseña incorrecta o esta inactivo.</div>";
                                header( "refresh:3;url= page-login.html" );
                            }                                    
                        }else{
                            //Mensaje de error si la consulta esta vacia
                            echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"page-login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>vendedor o contraseña incorrecta o esta inactivo.</div>";
                            header( "refresh:3;url=page-login.html" ); 
                        } 
                    }else{
                        //Mensaje de error si el usuario esta desactivado
                        echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"page-login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>El vendedor esta inactivo.</div>";
                        //header( "refresh:3;url=page-login.html" ); 
                    }      
                }else{
                    //Mensaje de error si la consulta del estado no tiene filas
                    echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"page-login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>vendedor o contraseña incorrecta.</div>";
                    header( "refresh:3;url=page-login.html" ); 
                }                    
            }else{
                //Mensaje de error si la consulta del estado esta vacio
                echo "<div class=\"alert alert-warning alert-dismissible\"><a href=\"../login.html\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Alerta!</strong>No existe el vendedor.</div>";
                header( "refresh:3;url=page-login.html" ); 
            }      
        } 
  }
    $mysql->desconectar();

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

  
   

 
