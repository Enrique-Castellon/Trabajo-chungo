<?php
class cliente{
    public $id;
    public $dni;
    public $nombre;
    public $apellidos;
    public $fechaN;
    public function __construct($dni,$nombre, $apellidos, $fechaN ){
		$this->setId(null);
		$this->setDni($dni);
    	$this->setNombre($nombre);
		$this->setApellidos($apellidos);
        $this->setFecha($fechaN);
	}

	public function getId(){
		return $this->id;
	}

	public function setId($value){
		$this->id = $value;
	}
    public function setDni($value){
        $this->dni = $value;
    }
	public function getDni(){
		return $this->dni;
	}

	public function setNombre($value){
		$this->nombre = $value;
	}
    public function getNombre(){
        return $this->nombre;
    }

	public function setApellidos($value){
		$this->apellidos =$value;
	}

	public function getApellidos(){
		return $this->apellidos;
	}

	public function setFecha($value){
		$this->fechaN= $value;
	}

	public function getFecha(){
		return $this->fechaN;
		
	}
	

}
?>