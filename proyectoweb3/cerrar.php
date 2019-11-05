<?php
//clase para el uso de sesiones

//iniciamos la sesion
    session_start();
 
    //liberamos las variables de sesion
   session_unset()   ;
    
  //destruimos la sesion
    session_destroy();
    
    //Dirigirse a la pagina principal
    header('Location: page-login.html');  

?>