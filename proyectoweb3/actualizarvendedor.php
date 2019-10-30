<?php
//condicion para comprobar si los campos están declarados anteriormente y si no estan vacíos
if(isset($_POST['enviar']) && !empty($_POST['nombre']) &&!empty($_POST['apellido']) && !empty($_POST['estadocivil']) && !empty($_POST['credito']) )){
    
    require_once 'MySQL.php';
    
 
    
   
   
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $estadoc = $_POST['estadocivil'];
    $credito = $_POST['credito'];
    $programa = $_POST['programa'];
    $id = $_GET['id'];
   

    $mysql = new MySQL;
   
    $mysql->conectar();
    
   
    $insertar= $mysql->efectuarConsulta("update  tiendacotecnova.estudiantes set
     est_nombres ='" .$nombre. "', est_apellidos ='" .$apellido. "', estado_civil_id ='" .$estadoc. "' , est_total_credito ='" .$credito. "', programa_id ='" .$programa. "' 
     where est_id ='" .$id. "'
    ");
    
    echo "update  tiendacotecnova.estudiantes set
     est_nombres='" .$nombre. "', est_apellidos='" .$apellido. "', estado_civil_id='" .$estadoc. "' , est_total_credito='" .$credito. "', programa_id='" .$programa. "' 
     where est_id='" .$id. "'
   ";
   


if($insertar==true){
    header("Location: index.html");
 } 
 else
  {
   header("Location: formulario_actualizar.php");
 }
}
else{
    echo "<script type=\"text/javascript\">alert(\"Datos Incorrectos\");
    location.href = 'formulario_actualizar.php';
    </script>"; 
    
    
}
 ?>