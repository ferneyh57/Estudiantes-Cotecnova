
<?php
class usuarios{
	//declaro las variables
	
	private $numerodoc;
	private $nombre;
	private $apellidos;
	private $credito;
	private $contrasena;
	private $tipodoc;
	private $estadoci;
	private $programa;

		   
	//gets
	
	function getNumerodoc() {
		return $this->numerodoc;
	}

	function getNombre() {
		return $this->nombre;
	}

	function getApellidos() {
		return $this->apellidos;
	}

	function getCredito() {
		return $this->credito;
	}

	function getContrasena() {
		return $this->contrasena;
	}


	function getTipoDoc() {
		return $this->tipodoc;
	}
	
	function getEstadoci() {
		return $this->estadoci;
	}


	
	function getPrograma() {
		return $this->programa;
	}




	//sets
	function setNumerodoc($numerodoc) {
		return $this->numerodoc = $numerodoc;
	}

	function setNombre($nombre) {
		return $this->nombre = $nombre;
	}

	function setApellidos($apellidos) {
		return $this->apellidos =$apellidos;
	}

	function setContrasena($contrasena) {
		return $this->contrasena =$contrasena;
	}

	function setTipodoc($tipodoc) {
		return $this->tipodoc =$tipodoc;
	}

	function setEstadoci($estadoci) {
		return $this->estadoci = $estadoci;
	}


	
	function setPrograma($programa) {
		return $this->programa =$programa;
	}

	function setCredito($credito) {
		return $this->credito = $credito ;
	}
	

}

			
							
						

?>

