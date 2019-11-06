<?php
header('Content-Type: application/json');

//llamamos la clase
require_once 'MySQL.php';
//pasamos las funciones de la clase a una nueva variable
$mysql = new MySQL;
 //realizamos la conexion a la bd
$mysql->conectar();

$consulta = $mysql ->efectuarConsulta("SELECT count(tiendacotecnova.estudiantes.programa_id) as cantidad, tiendacotecnova.programa.programa_nombre FROM tiendacotecnova.estudiantes inner join tiendacotecnova.programa on tiendacotecnova.programa.programa_id =tiendacotecnova.estudiantes.programa_id group by tiendacotecnova.programa.programa_nombre");



$data = array();
foreach ($consulta as $row) {
        $data[] = $row;
}

$mysql->desconectar();

echo json_encode($data);
?>