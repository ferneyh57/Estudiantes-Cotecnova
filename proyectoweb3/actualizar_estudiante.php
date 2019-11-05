<?php
//condicion para comprobar si los campos están declarados anteriormente y si no estan vacíos
if(isset($_POST['enviar']) && !empty($_POST['nombre']) &&!empty($_POST['apellido']) && !empty($_POST['estadocivil']) && !empty($_POST['credito']) && !empty($_POST['programa'])){
    //llamamos la clase
    require_once 'MySQL.php';
    
 
    
   
   //traemos lo valores del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $estadoc = $_POST['estadocivil'];
    $credito = $_POST['credito'];
    $programa = $_POST['programa'];
    $id = $_GET['id'];
   
// pasamos los valores de la clase
    $mysql = new MySQL;
   //nos conectamos
    $mysql->conectar();
    
   //realizamos un update mostrando el valor en la base de datos seguido del valor nuevo
    $insertar= $mysql->efectuarConsulta("update  tiendacotecnova.estudiantes set
     est_nombres ='" .$nombre. "', est_apellidos ='" .$apellido. "', estado_civil_id ='" .$estadoc. "' , est_total_credito ='" .$credito. "', programa_id ='" .$programa. "' 
     where est_id ='" .$id. "'
    ");
    
  
   

//si la consulta se realizo correctamente
if($insertar==true){
  //redigirimos al index
    header("Location: index.html");
 } 
 else
  {
    //sino redirigimos al mismo formulario
   header("Location: formulario_actualizar.php");
 }
}
else{
  //alert que sale si la consulta fue incorrecta
    echo "<script type=\"text/javascript\">alert(\"Datos Incorrectos\");
    location.href = 'formulario_actualizar.php';
    </script>"; 
    
    
}
 ?>