<?php 

class departamento extends EntidadBase{

private $id_departamento;
private $nombre_departamento;

	public function __construct($adapter){
		$table="departamento";
        parent::__construct($table,$adapter);
        $this->conectar=$this->getConectar();
        $this->db=$this->db();
	}


function getid_departamento() {
        return $this->id_departamento;
    }

function getnombre_departamento() {
        return $this->nombre_departamento;
    }

function setId_departamento($id_departamento) {
        $this->id_departamento = $id_departamento;
    }
function setNombre_departamento($nombre_departamento) {
        $this->nombre_departamento = $nombre_departamento;
    }

public function getCiudadById(){
    
}


}
?>