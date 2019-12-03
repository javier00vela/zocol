<?php
class flete extends EntidadBase{

private $id_flete;
private $fk_tipoMedida;
private $depOrigen;
private $depDestino;
private $precio;


    public function __construct($adapter){
        $table="flete";
        parent::__construct($table,$adapter);
        $this->conectar=$this->getConectar();
        $this->db=$this->db();
    }

function getId_flete() {
    return $this->id_flete;
}

function getFk_tipoMedida() {
    return $this->fk_tipoMedida;
}

function getDepOrigen() {
    return $this->depOrigen;
}

function getDepDestino() {
    return $this->depDestino;
}

function getPrecio() {
    return $this->precio;
}

function setId_flete($id_flete) {
    $this->id_flete = $id_flete;
}

function setFk_tipoMedida($fk_tipoMedida) {
    $this->fk_tipoMedida = $fk_tipoMedida;
}

function setDepOrigen($depOrigen) {
    $this->depOrigen = $depOrigen;
}

function setDepDestino($depDestino) {
    $this->depDestino = $depDestino;
}

function setPrecio($precio) {
    $this->precio = $precio;
}


public function selFlete(){
	$sql=$this->db->prepare("SELECT id_flete , precioFlete , DepartamentoOrigen ,DepartamentoDestino FROM flete WHERE departamentoOrigen=:depOrg and departamentoDestino=:depDest  or departamentoOrigen=:depDest and departamentoDestino=:depOrg");
	$sql->execute(array(":depOrg"=>$this->depOrigen , ":depDest"=>$this->depDestino));
	while($flete=$sql->fetch()){
			$result = $flete;
		}
            if(isset($result)){
               return $result;
            }

            }



}
?>
