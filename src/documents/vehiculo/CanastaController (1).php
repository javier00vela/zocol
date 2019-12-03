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
              $this->alertError("no puede agregar sus propios productos");
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
    $this->alertInfo("debes registrarte e iniciar usuario primero");
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
        $canasta->setAtribute("fk_producto");
        $canasta->deleteBy($_POST["id"]);
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
    $subtotal=$canasta->subtotal();
     $this->view("pedido",array("subtotal"=>$subtotal));
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