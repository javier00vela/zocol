<?php
class Producto extends EntidadBase{
    private $id_producto;
    private $nombre;
    private $usuario;
    private $cantidad;
    private $tipoVencimiento;
    private $disponible;
    private $iva;
    private $precio;
    private $peso;
    private $fotoProducto;
    private $ventas;
    private $tipoProducto;
    private $unidadMedida;
    private $descripcion;
    
    public function __construct($adapter) {
        $table="producto";
        parent::__construct($table,$adapter);
        $this->conectar=$this->getConectar();
        $this->db=$this->db();
    }
    

function getId_producto() {
        return $this->id_producto;
    }

    function getUsuario() {
        return $this->usuario;
    }


    function getNombre() {
        return $this->nombre;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getTipoVencimiento() {
        return $this->tipoVencimiento;
    }

    function getDisponible() {
        return $this->disponible;
    }

    function getIva() {
        return $this->iva;
    }

    function getPeso() {
        return $this->peso;
    }


    function getPrecio() {
        return $this->precio;
    }

    function getFotoProducto() {
        return $this->fotoProducto;
    }

    function getVentas() {
        return $this->ventas;
    }

    function getTipoProducto() {
        return $this->tipoProducto;
    }

    function getUnidadMedida() {
        return $this->unidadMedida;
    }

    function getDescripcion() {
        return $this->ventas;
    }

    function setId_producto($id_producto) {
        $this->id_producto = $id_producto;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function setTipoVencimiento($tipoVencimiento) {
        $this->tipoVencimiento = $tipoVencimiento;
    }

    function setDisponible($disponible) {
        $this->disponible = $disponible;
    }

    function setIva($iva) {
        $this->iva = $iva;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setFotoProducto($fotoProducto) {
        $this->fotoProducto = $fotoProducto;
    }

    function setVentas($ventas) {
        $this->ventas = $ventas;
    }

    function setTipoProducto($tipoProducto) {
        $this->tipoProducto = $tipoProducto;
    }

    function setUnidadMedida($unidadMedida) {
        $this->unidadMedida = $unidadMedida;
    }
    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }




public function  section1($tam,$page1){
    if (isset($page1)) {
            if($page1!=1){
                $pag=$page1;
            }else{
                $pag=1;
            }
        }else{
                $pag=1;
            }
    $this->setOrder("desc");
       $empezar=($pag-1)*$tam;
   $this->setLimit("$empezar,$tam");
      $this->setWhereAnd("disponible=1");
    $this->setAtribute("tipo_vencimiento");
    $result=$this->getAtributeId('1');
    return $result;
}

public function  section2($tam,$page2){
    if (!empty($page2)) {
            if($page2!=1){
                $pag=$page2;
            }else{
                $pag=1;
            }
        }else{
                $pag=1;
            }
    $this->setOrder("desc");
       $empezar=($pag-1)*$tam;
   $this->setLimit("$empezar,$tam");
   $this->setWhereAnd("disponible=1");
    $this->setAtribute("fk_tipoProducto");
    $result=$this->getAtributeId('0');
    return $result;
}


public function  section3($tam,$page3){
    if (isset($page3)) {
            if($page3!=1){
                $pag=$page3;
            }else{
                $pag=1;
            }
        }else{
                $pag=1;
            }
    $this->setOrder("desc");
    $this->setAtribute("fk_tipoProducto");
       $empezar=($pag-1)*$tam;
   $this->setLimit("$empezar,$tam");
    $result=$this->getAtributeId('1');
    return $result;
}

public function  section4($tam,$page4){
    if (isset($page4)) {
            if($page4!=1){
                $pag=$page4;
            }else{
                $pag=1;
            }
        }else{
                $pag=1;
            }
    $this->setOrder("desc");
       $empezar=($pag-1)*$tam;
   $this->setLimit("$empezar,$tam");
      $this->setWhereAnd("disponible=1");
    $this->setAtribute("fk_tipoProducto");
    $result=$this->getAtributeId('2');
    return $result;
}

public function  section5($tam,$page5){
        if (isset($page5)) {
            if($page5!=1){
                $pag=$page5;
            }else{
                $pag=1;
            }
        }else{
                $pag=1;
            }
    $this->setOrder("desc");
       $empezar=($pag-1)*$tam;
   $this->setLimit("$empezar,$tam");
    $this->setAtribute("disponible=1 ");
    $result=$this->getAtributeId('1');
    return $result;
}


public function catalogo($valor,$page){
    if (!empty($page)) {
            if($page!=1){
                $pag=$page;
            }else{
                $pag=1;
            }
        }else{
                $pag=1;
            }
    $this->setOrder("desc");
     $this->setAtribute("fk_tipoProducto");

    switch ($valor) {
        case 0:
            $nombre="Productos Ganaderos";
            $empezar=($pag-1)*9;
            $this->setLimit("$empezar,12");
            $this->setWhereAnd("disponible=1");
            $result=$this->getAtributeId(1);
            
            
            $array=["nombre"=>$nombre,"result"=>$result];
            break;
        case 1:
            $nombre="Productos  Agricolas";
                   $empezar=($pag-1)*9;
              $this->setLimit("$empezar,12");
            $result=$this->getAtributeId(0);
             
          
            $array=["nombre"=>$nombre,"result"=>$result];
            break;
        case 2:
            $nombre="Otros Productos";
             $empezar=($pag-1)*9;
            $this->setLimit("$empezar,12");
            $result=$this->getAtributeId(2);
           
            
            $array=["nombre"=>$nombre,"result"=>$result];
            break;
         case 4:
            $nombre="semillas";
             $empezar=($pag-1)*9;
            $this->setLimit("$empezar,12");
            $result=$this->getAtributeId(3);
           
            
            $array=["nombre"=>$nombre,"result"=>$result];
            break;
         case 3:
            $nombre="lacteos";
             $empezar=($pag-1)*9;
            $this->setLimit("$empezar,12");
            $result=$this->getAtributeId(4);
           
            
            $array=["nombre"=>$nombre,"result"=>$result];
            break;
         case 5:
            $nombre="fertilizante";
             $empezar=($pag-1)*9;
            $this->setLimit("$empezar,12");
            $result=$this->getAtributeId(5);
           
            
            $array=["nombre"=>$nombre,"result"=>$result];
            break;
        default:
            $nombre="Todos los Productos";
             $empezar=($pag-1)*9;
            $this->setLimit("$empezar,12");
            $this->setAtribute("disponible");
            $result=$this->getAtributeId(1);
            
            $array=["nombre"=>$nombre,"result"=>$result];
            break;
            
    }
    return $array;
}

public function pagCatalogo($valor){
     switch ($valor) {
        case 0:
            $method="getAtributeId";
            $opc="1";
            $array=["method"=>$method,"opc"=>$opc];
            break;
        case 1:
            $method="getAtributeId";
            $opc="0";
            $array=["method"=>$method,"opc"=>$opc];
            break;
        case 2:
            $method="getAtributeId";
            $opc="2";
            $array=["method"=>$method,"opc"=>$opc];
            break;
         case 3:
            $method="getAtributeId";
            $opc="4";
            $array=["method"=>$method,"opc"=>$opc];
            break;
         case 4:
            $method="getAtributeId";
            $opc="3";
            $array=["method"=>$method,"opc"=>$opc];
            break;
         case 5:
            $method="getAtributeId";
            $opc="5";
            $array=["method"=>$method,"opc"=>$opc];
            break;
        default:
            $method="getAll";
            $opc="10";
            $array=["method"=>$method,"opc"=>$opc];
            
    }
    return $array;
}



public function buscarProducto($producto){
    $query=$this->db->prepare("SELECT * FROM producto WHERE nombre like  CONCAT(:producto, '%') AND disponible=1");
        $query->execute(array(":producto"=>$producto));
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $row;
}


public function DepartamentoProducto(){
    $query=$this->db->prepare("SELECT  id_departamento,nombre_departamento,ubicacion  FROM producto join usuario on fk_usuario=id_usuario join ciudad on usuario.fk_ciudad=ciudad.id_ciudad join departamento on Departamento_idDepartamento=id_departamento where id_producto=:producto");
        $query->execute(array(":producto"=>$this->id_producto));
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $row;
}



public function registrarProducto(){


          $sql=$this->db->prepare("
            INSERT INTO producto (
            fk_TipoProducto,
            fk_unidadMedida, 
            fk_usuario, 
            nombre, 
            cantidad,
            peso,
            tipo_vencimiento, 
            disponible,
            iva,
            precio, 
            foto_producto, 
            ventas,
            descripcion
            )
             VALUES (
             :Tproducto, 
             :estado, 
             :usuario,
             :nombre,
             :cantidad,
             :peso,
              :vencimiento,
              :disponible,
              :iva,:precio,
              :foto,
              :ventas,
              :descripcion

              )"
             );

          $sql->execute(array(
            ":Tproducto"=>$this->tipoProducto, 
            ":estado"=>$this->unidadMedida,
             ":usuario"=>$this->usuario,
             ":nombre"=>$this->nombre,
             ":cantidad"=>$this->cantidad,
             ":peso"=>$this->peso,
             ":vencimiento"=>$this->tipoVencimiento,
             ":disponible"=>$this->disponible,
             ":iva"=>$this->iva,
             ":precio"=>$this->precio,
             ":foto"=>"src/images/product/".$this->fotoProducto,
             ":ventas"=>$this->ventas,
             ":descripcion"=>$this->descripcion
             ));
        }



public function misProductos($page,$value){
         if (isset($page)) {
            if($page!=1){
                $pag=$page;
            }else{
                $pag=1;
            }
        }else{
                $pag=1;
            }
        $empezar=($pag-1)*8;
        $query=$this->db->prepare("SELECT * FROM producto  WHERE fk_usuario=? AND disponible=1  ORDER BY id_producto  ASC  LIMIT $empezar,8 ");
        $query->bindparam(1,$value);
        $query->execute();
        $row = $query->fetchAll(PDO::FETCH_ASSOC) ;
        return $row;
    }

public function suspendidos($value){
        $query=$this->db->prepare("SELECT * FROM producto  WHERE fk_usuario=? AND disponible=0  ORDER BY id_producto  ASC ");
        $query->bindparam(1,$value);
        $query->execute();
        $row = $query->fetchAll(PDO::FETCH_ASSOC) ;
        return $row;
    }

public function actualizarFoto(){
    $sql=$this->db->prepare("UPDATE  producto SET  foto_producto=:foto WHERE id_producto=:id");
    $sql->execute(array(":foto"=>"src/images/product/".$this->fotoProducto["name"],":id"=>$this->id_producto));
}


public function actualizar(){
     if(isset($this->fotoProducto)){
             $nombreFoto= $this->fotoProducto["name"];
            $ruta= $this->fotoProducto["tmp_name"];
            $destino="src/images/product/".$nombreFoto;
            copy($ruta,$destino);
            $this-> actualizarFoto();
        }
     $sql=$this->db->prepare("
        UPDATE  producto SET 
         fk_TipoProducto=:Tproducto , 
         fk_unidadMedida=:estado,
         nombre=:nombre ,
         cantidad=:cantidad,
         descripcion=:descripcion,
         peso=:peso,
         tipo_vencimiento=:vencimiento, 
         disponible=:disponible,
         iva=:iva,
         precio=:precio, 
         ventas=:ventas 
        WHERE id_producto=:id
        ");
     $sql->execute(array(
        ":Tproducto"=>$this->tipoProducto,
         ":estado"=>$this->unidadMedida,
         ":nombre"=>$this->nombre,
         ":cantidad"=>$this->cantidad,
         ":descripcion"=>$this->descripcion,
         ":peso"=>$this->peso,
         ":vencimiento"=>$this->tipoVencimiento,
         ":disponible"=>$this->disponible,
         ":iva"=>$this->iva,
         ":precio"=>$this->precio,
         ":ventas"=>$this->ventas,
         ":id"=>$this->id_producto
         ));
}


}



?>