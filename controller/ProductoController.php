<?php
class ProductoController extends ControladorBase{
    public $conectar;
    public $adapter;

	
    public function __construct() {
        parent::__construct();
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }

    public function verProducto(){
        $producto=new Producto($this->adapter);
            if (isset($_POST["id"])) {
            $result=$producto->getById($_POST["id"]);
            $producto->setId_producto($_POST["id"]);
            $departamentos = $producto->DepartamentoProducto();
            }else{
                $this->redirect("header","index");
            }
        $this->view("producto",array(
            "departamento"=>$departamentos,
            "result"=>$result,
        ));
    }

public function publicar(){
if(isset($_POST["producto"])){
         if(isset($_FILES["img"]["name"])){
             $producto=new producto($this->adapter);
             $producto->setNombre($_POST["producto"]);
             $producto->setCantidad($_POST["cantidades"]);
             $producto->setTipoVencimiento($_POST["estado"]);
             $producto->setDisponible("1");
             $producto->setIva($_POST["iva"]);
             $producto->setPrecio($_POST["precio"]);
              if($_POST["Tpeso"]==1){
    $_POST["peso"] = $_POST["peso"] / 2.2;
  }elseif($_POST["Tpeso"]==2){
    $_POST["peso"] = $_POST["peso"] / 1000;
  }
             $producto->setPeso($_POST["peso"]);
             $producto->setVentas("0");
             $producto->setTipoProducto($_POST["Tproducto"]);
             $producto->setUnidadMedida(3);
             $producto->setUsuario($_SESSION["idUser"]);
             $producto->setDescripcion($_POST["descripcion"]);
             $nombreFoto= $_FILES["img"]["name"];
            $ruta= $_FILES["img"]["tmp_name"];
            $destino="src/images/product/".$nombreFoto;
            copy($ruta,$destino);
            $producto-> setFotoProducto($_FILES["img"]["name"]);
             $producto->registrarProducto();
             $this->redirect("header","misProductos");
            }
}
$this->view("misProductos",array(     
    ));
}




public function suspenderProducto(){
    $producto=new producto($this->adapter);
    if (isset($_POST["id"])) {    
        $producto->setAtribute("disponible");
        $producto->updateByAtribute("0",$_POST["id"]);
   $this->redirect("header","misProductos");
    }
}


public function modificarProducto(){
   if (isset($_POST["id"])) {   
        $producto=new producto($this->adapter); 
        $productos=$producto->getById($_POST["id"]);
}
 $this->view("misProductos/producto",array(
    "productos"=>$productos,
    ));
}



public function modificarP(){
if (isset($_POST["producto"] , $_POST["cantidades"] , $_POST["iva"] , $_POST["precio"]  )) {
     $producto=new producto($this->adapter);
     $producto->setId_producto($_POST["id"]);
     $producto->setNombre($_POST["producto"]);
     $producto->setCantidad($_POST["cantidades"]);
     $producto->setTipoVencimiento($_POST["estado"]);
     $producto->setDisponible("1");
     $producto->setIva($_POST["iva"]);
     $producto->setDescripcion($_POST["descripcion"]);
     $producto->setPeso($_POST["peso"]);
     $producto->setPrecio($_POST["precio"]);
     $producto->setVentas("0");
     $producto->setTipoProducto($_POST["Tproducto"]);
     $producto->setUnidadMedida($_POST["Tpeso"]);
        if(isset($_FILES["img"])){
            $producto-> setFotoProducto($_FILES["img"]);
        }
             $producto->actualizar();
             $this->redirect("header","misProductos");
}
 //$this->view("misProductos",array( ));
}  

public function activar(){
    $producto=new producto($this->adapter);
    if (isset($_POST["id"])) {    
        $producto->setAtribute("disponible");
        $producto->updateByAtribute("1",$_POST["id"]);
   $this->redirect("header","misProductos");
    }
}

public function eliminar(){
    $producto=new producto($this->adapter);
    if (isset($_POST["id"])) {    
        $producto->deleteById($_POST["id"]);
        $this->redirect("header","misProductos");
    }
}





}




  
?>
