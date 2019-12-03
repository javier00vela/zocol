<?php
class rolUsuario extends EntidadBase{

private $fk_rol;
private $fk_usuario;
private $activo;

	public function __construct($adapter){
		$table="rolUsuario";
        parent::__construct($table,$adapter);
        $this->conectar=$this->getConectar();
        $this->db=$this->db();
	}

function getRol() {
        return $this->fk_rol;
    }
    function getUsuario() {
        return $this->fk_usuario;
    }
    function getActivo() {
        return $this->activo;
    }

function setRol($fk_rol) {
        $this->fk_rol = $fk_rol;
    }
    function setUsuario($fk_usuario) {
        $this->fk_usuario = $fk_usuario;
    }

 function setActivo($activo) {
        $this->activo = $activo;
    }




public function insertarRol(){
$sql=$this->db->prepare("INSERT INTO rolusuario (fk_rol,fk_usuario,activo) VALUES (:rol,:user,:activo)");
        $sql->execute(array(":rol"=>$this->fk_rol,":user"=>$this->fk_usuario,":activo"=>$this->activo));
}

public function mostrarRol(){
$sql=$this->db->prepare("SELECT * FROM rolusuario WHERE fk_usuario=:user");
        $sql->execute(array(":user"=>$this->fk_usuario));
        $valor=$sql->fetch(PDO::FETCH_ASSOC);
        return $valor;
}

public function actualizarRol(){
$sql=$this->db->prepare("UPDATE rolusuario SET activo=:activo WHERE fk_usuario=:user and fk_rol=:rol ");
        $sql->execute(array(":activo"=>$this->activo,":user"=>$this->fk_usuario,":rol"=>$this->fk_rol));
}


public function validarRol(){
         $this->setUsuario($_SESSION["idUser"]);
         $this->setActivo(1);
	$value = $this->mostrarRol();
	if(empty($value)){
		 $this->setUsuario($_SESSION["idUser"]);
         $this->setActivo(1);
		$this->setRol(1);
		$this->insertarRol();
		$this->setRol(2);
		$this->insertarRol();
	}else{
		 $this->setUsuario($_SESSION["idUser"]);
         $this->setActivo(1);
		$this->setRol(1);
		$this->actualizarRol();
		$this->setRol(2);
		$this->actualizarRol();

	}

}




public function insertarTransportador(){
     $this->setUsuario($_SESSION["idUser"]);
     $this->setActivo(1);
     $this->setRol(3);
     $this->insertarRol();
}


public function obtenerTransportador(){
    $this->setUsuario($_SESSION["idUser"]);
    $sql=$this->db->prepare("SELECT * FROM rolusuario WHERE fk_usuario=:user and fk_rol=3 ");
        $sql->execute(array(":user"=>$this->fk_usuario));
        $valor=$sql->fetch(PDO::FETCH_ASSOC);
        return $valor;

}



}


?>