<?php
class CanastaController extends ControladorBase{
public $conectar;
public $adapter;

public function __construct() {
    parent::__construct();
    $this->conectar=new Conectar();
    $this->adapter=$this->conectar->conexion();
}

public function agregar(){
      $canasta= new canasta($this->adapter);
 if (isset($_SESSION["Usuario"])){
    if(isset($_POST["idProducto"],$_POST["cantidad"],$_POST["precio"])){
        $canasta->setCanastaIdprod($_POST["idProducto"]);
        $canasta->setCanastaPedCant($_POST["cantidad"]);
        $canasta->setCanastaPedPrec($_POST["precio"]);
        $canasta->setCanastaUser($_SESSION["idUser"]);


         $product=$canasta->buscarProducto();
    foreach ($product as $producto) {
        if ($_SESSION["idUser"] == $producto["fk_usuario"]) {
            $_SESSION["valUserCanasta"] = "error";
            break;
        }
    }
     $valor = $canasta->agregarProducto();
        if($valor == true){
            $this->alertError("elija una cantidad menor");
        $this->view("canasta",array());
        }else if ($_SESSION["valUserCanasta"] == "error"){
              $this->alertError("no puedes agregar tus propios productos");
        $this->view("canasta",array());
        $_SESSION["valUserCanasta"]="";
        }else{
            $this->redirect("header","canasta");
        }
    }else{
        $this->alertError("no se agrego el producto");
        $this->view("canasta",array());
    }
}else{
    $this->alertInfo("por favor inicie usuario para agregar productos a la canasta");
    $producto = new producto($this->adapter);
    $producto->setId_producto($_POST["id"]);
        $departamentos = $producto->DepartamentoProducto();
    $result=$producto->getById($_POST["id"]);
    $this->view("producto",array("result"=>$result,"departamento"=>$departamentos));
}

}


public function borrar(){
if (isset($_SESSION["Usuario"])){
    if(isset($_POST["id"])){
        $canasta=new canasta($this->adapter);
        $canasta->setCanastaIdprod($_POST["id"]);
        $canasta->eliminar();
        $this->redirect("header","canasta");
    }else{
        $this->redirect("header","index");
    }
}else{
   $this->redirect("header","index");
}
$this->view("canasta",array(
    ));
}



public function continuar(){
if (isset($_SESSION["Usuario"])){
    $canasta = new canasta($this->adapter);
    $ped=new pedido($this->adapter);
    $flete = new flete($this->adapter);
    $ciudad = new ciudad($this->adapter);
         $canasta->setCanastaUser($_SESSION["idUser"]);
        $result=$canasta->mostrarProductos();
        $dep = $ciudad->obtenerDep($_SESSION["ciudadUser"]);
            foreach ($result as $pedido) {
                $flete->setDepOrigen($pedido["id_departamento"]);
                $flete->setDepDestino($dep);
             $val[] = $flete->selFlete();
            $ped->setSubtotal($pedido["precio"]*$pedido["pedidoCantidad"]);
            $subtotal=$canasta->subtotal();
            $html[]=$ped->obtenerTransportador($pedido["id_departamento"],$pedido["peso"]*$pedido["pedidoCantidad"],$_SESSION["idUser"]);
            if(empty($val[0])){
           echo "<h1 class='titulo text-center bg-danger' >no se encontro flete para el producto ".$pedido["nombre"]."</h1>";
           }
          
             }
           // print_r($val);
           // print_r($html);


     $this->view("pedido",array("subtotal"=>$subtotal,"tran"=>$html , "flete"=>$val , "departamento"=>$dep));
}else{
   $this->redirect("header","index");
    }
}


public function modificar(){
    if (isset($_SESSION["Usuario"])){
        if(isset($_POST["id"])){
        $canasta=new canasta($this->adapter);
        $canasta->setCanastaIdprod($_POST["id"]);
        $canasta->setCanastaPedCant($_POST["cant"]);
        $canasta->modificar();
        $this->redirect("header","canasta");

    }else{
        $this->redirect("header","index");
    }
    }else{
   $this->redirect("header","index");

    }
}

}
?>
