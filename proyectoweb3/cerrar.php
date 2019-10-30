<?php

    session_start();
 
   session_unset()   ;
    
  
    session_destroy();
    
    //Dirigirse a la pagina principal
    header('Location: page-login.html');  

?>