<?php
//creamos la clase
class MySQL{
    //Declaracion de variables de conexion
    private $hostname  = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "tiendacotecnova";
    
    private $conexion;
    
    // Metodo para conectar a la base de datos
    public function conectar(){
        $this->conexion = mysqli_connect($this->hostname, $this->user, $this->password, $this->database);
    }
    
    //Metodo que cierra la conexion
    public function desconectar(){
        mysqli_close($this->conexion);
    }
    
    //Metodo que efectua una consulta devuelve su resultado
    public function efectuarConsulta($consulta){
        mysqli_query($this->conexion, "SET lc_time_names = 'es_ES'" ); 
        //AÃ±ade el uso de caracteres especiales como tildes con el formato utf8
        mysqli_query($this->conexion, "SET NAMES 'utf8'");
        mysqli_query($this->conexion, "SET CHARACTER 'utf8'");

       $this->resultadoConsulta = mysqli_query($this->conexion, $consulta);
             
        return $this->resultadoConsulta; 
    }
    
    
}