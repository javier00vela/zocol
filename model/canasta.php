<?php 

class canasta extends EntidadBase{

private $canastaIdprod;
private $canastaPedCant;
private $canastaPedPrec;
private $canastaUser;

    public function __construct($adapter){
        $table="canasta";
        parent::__construct($table,$adapter);
        $this->conectar=$this->getConectar();
        $this->db=$this->db();
    }


function getCanastaIdprod() {
        return $this->canastaIdprod;
    }
function getCanastaPedCant() {
        return $this->canastaPedCant;
    }

function getCanastaPedPrec() {
        return $this->canastaPedPrec;
    }
function getCanastaUser() {
        return $this->canastaUser;
    }

function setCanastaIdprod($param) {
        $this->canastaIdprod=$param;
    }
function setCanastaPedCant($param) {
        $this->canastaPedCant=$param;
    }

function setCanastaPedPrec($param){
        $this->canastaPedPrec=$param;
    }
function setCanastaUser($param) {
        $this->canastaUser=$param;
    }

public function subtotal(){
    $sql=$this->db->prepare("SELECT SUM(pedidoPrecio*pedidoCantidad)as total FROM canasta");
    $sql->execute();
    $subtotal= $sql->fetchAll(PDO::FETCH_ASSOC);
    return $subtotal;
}

public function agregarProducto(){
    

    if($this->canastaPedCant==0 || $this->canastaPedCant==""){
        $this->setCanastaPedCant("1");
    } 



       $product=$this->buscarProducto();
    foreach ($product as $producto) {
        if($this->canastaPedCant > $producto["cantidad"]){
            $valor = true;
            return $valor;
            break;
        }
    }

    if(empty($_SESSION["valUserCanasta"])){
        $_SESSION["valUserCanasta"]="bien";
    }

    if($_SESSION["valUserCanasta"] != "error"){
    $sql=$this->db->prepare("INSERT INTO canasta (fk_producto,fk_usuario,pedidoCantidad,pedidoPrecio) VALUES(:producto,:usuario,:pedidoCantidad,:pedidoPrecio)");
    $sql->execute(array(":producto"=>$this->canastaIdprod,":usuario"=>$this->canastaUser,":pedidoCantidad"=>$this->canastaPedCant,":pedidoPrecio"=>$this->canastaPedPrec));

}
}

public function buscarProducto(){
    $query=$this->db->prepare("SELECT * FROM producto WHERE id_producto=? ");
        $query->bindparam(1,$this->canastaIdprod);
        $query->execute();
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        return $row;
}



public function mostrarProductos(){
    $sql=$this->db->prepare("SELECT * FROM canasta INNER JOIN producto on id_producto=fk_producto inner join usuario on producto.fk_usuario=id_usuario inner join ciudad on fk_ciudad = id_ciudad inner join departamento on departamento_idDepartamento=id_departamento WHERE canasta.fk_usuario=$this->canastaUser");
    $sql->execute();
        $row= $sql->fetchAll(PDO::FETCH_ASSOC);
           return $row;
}


public function modificar(){
    if($this->canastaPedCant==0 || $this->canastaPedCant==""){
        $this->setCanastaPedCant(1);
    }
$query=$this->db->prepare("UPDATE canasta SET pedidoCantidad=:cantidad  WHERE fk_producto=:id");
        $query->execute(array(":cantidad"=>$this->canastaPedCant,":id"=>$this->canastaIdprod)); 
        return $query;
}

public function eliminar(){
    $query=$this->db->prepare("DELETE FROM canasta  WHERE fk_producto=:id ");
    $query->execute(array(":id"=>$this->canastaIdprod)); 
}

public function eliminarTodo(){
    $query=$this->db->prepare("DELETE FROM canasta  WHERE fk_usuario=:user ");
    $query->execute(array(":user"=>$this->canastaUser)); 
}


}
?>