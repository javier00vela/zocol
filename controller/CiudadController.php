<?php
class ciudadController extends ControladorBase{
    public $conectar;
    public $adapter;

	
 public function __construct() {
    parent::__construct();
    $this->conectar=new Conectar();
    $this->adapter=$this->conectar->conexion();
 }

public function ciudad(){
	$ciudad = new ciudad($this->adapter);
	$ciudad->setId_departamento($_POST['id_departamento']);
	$html = $ciudad->ciudad();
    echo "|-|".$html."|-|";
}

}
  
?>