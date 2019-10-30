<?php
//condicion para comprobar si los campos están declarados anteriormente y si no estan vacíos
/*if(isset($_POST['enviar']) && !empty($_POST['1']) && !empty($_POST['2']) && 
        !empty($_POST['3']) &&!empty($_POST['4']) && !empty($_POST['5']) && !empty($_POST['6']) 
        && !empty($_POST['7']) && !empty($_POST['8'])){
    */
    require_once 'MySQL.php';
    
 
    
    $programa= $_POST['programa'];
    

    $mysql = new MySQL;
   
    $mysql->conectar();
    
   
    $insertar= $mysql->efectuarConsulta("insert into tiendacotecnova.programa
    (programa_nombre) 
    VALUES(   
    '".$programa."')"); 

    echo  "insert into tiendacotecnova.programa
    (programa_nombre) 
    VALUES(   
    '".$programa."')";
   


if($insertar==true){
    header("Location: index.html");
 } 
 else
  {
    header("Location: crear_programa.php");
 }
 
 ?>