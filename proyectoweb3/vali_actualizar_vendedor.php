<?php
//condicion para comprobar si los campos están declarados anteriormente y si no estan vacíos
/*if(isset($_POST['enviar']) && !empty($_POST['1']) && !empty($_POST['2']) && 
        !empty($_POST['3']) &&!empty($_POST['4']) && !empty($_POST['5']) && !empty($_POST['6']) 
        && !empty($_POST['7']) && !empty($_POST['8'])){
    */
    //llamamos la clase
    require_once 'MySQL.php';
    
 
    
   
   //traemos los valores del formulario a una nueva variable
    $nombre = $_POST['3'];
    $apellido = $_POST['4'];
    $estadoc = $_POST['estadocivil'];
    $tipodoc = $_POST['tipodoc'];
   
//pasamos las funciones de la clase a una nueva variable
    $mysql = new MySQL;
   //nos conectamos a la bd
    $mysql->conectar();
    
   //realizamos una consulta en este caso un update en el vendedor
    $insertar= $mysql->efectuarConsulta("update  tiendacotecnova.vendedores set
     est_nombres='" .$nombre. "', est_apellidos='" .$apellido. "',  estado_civil_id='" .$estadoc. "' , tipo_documento_id '" .$tipodoc. "' 
     where ven_doc_iden=1
    ");

   

// si se ejecuta la consulta correctamente
if($insertar==true){
    //redirigimos al index
    header("Location: index.html");
 } 
 else
  {
      // sino redirigimos al formulario nuevamente
    header("Location: formulario_actualizar_vendedor.php");
 }
 
 ?>