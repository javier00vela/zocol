<?php 

class ciudad extends EntidadBase{

private $id_ciudad;
private $id_departamento;
private $nombre_ciudad;

	public function __construct($adapter){
		$table="ciudad";
        parent::__construct($table,$adapter);
        $this->conectar=$this->getConectar();
        $this->db=$this->db();
	}


function getid_ciudad() {
        return $this->id_ciudad;
    }

function getnombre_ciudad() {
        return $this->nombre_departamento;
    }

function setId_departamento($id_departamento) {
        $this->id_departamento = $id_departamento;
    }
function setNombre_departamento($nombre_ciudad) {
        $this->nombre_ciudad = $nombre_ciudad;
    }

public function ciudad(){

$sql=$this->db->prepare("SELECT * FROM ciudad WHERE Departamento_idDepartamento = ?")  ;
        $sql->bindparam(1,$this->id_departamento);
        $sql->execute();

         while($departamento=$sql->fetch()){
                  $html.="<option value='".utf8_encode($departamento["id_ciudad"])."'>".$departamento["nombre_ciudad"]."</option>";
            }
            return "$html";
    }


public function obtenerDep($ciudad){
    $sql=$this->db->prepare("SELECT Departamento_idDepartamento FROM ciudad WHERE id_ciudad = $ciudad")  ;
        $sql->execute();
         while($departamento=$sql->fetch()){
                  $dep[] = $departamento;
            }
            foreach ($dep as $dept) {
            $res = $dept[0];
        }
            return $res;
}

}
?>