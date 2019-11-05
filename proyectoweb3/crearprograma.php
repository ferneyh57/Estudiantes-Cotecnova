<?php
//condicion para comprobar si los campos están declarados anteriormente y si no estan vacíos
/*if(isset($_POST['enviar']) && !empty($_POST['1']) && !empty($_POST['2']) && 
        !empty($_POST['3']) &&!empty($_POST['4']) && !empty($_POST['5']) && !empty($_POST['6']) 
        && !empty($_POST['7']) && !empty($_POST['8'])){
    */
    //traemos la clase
    require_once 'MySQL.php';
    
 
    //traemos los valores del formulario
    $programa= $_POST['programa'];
    
//pasamos las funciones de la clase a una nueva variable
    $mysql = new MySQL;
   //nos conectamos a la bd
    $mysql->conectar();
    
   //realizamos una consulta en la cual se insertan los datos
    $insertar= $mysql->efectuarConsulta("insert into tiendacotecnova.programa
    (programa_nombre) 
    VALUES(   
    '".$programa."')"); 

 
   

//si se realiza la consulta
if($insertar==true){
    //redirigimos al index
    header("Location: index.html");
 } 
 else
  {
      //si no se realiza la consulta correctamente redirigimos al formulario
    header("Location: crear_programa.php");
 }
 
 ?>