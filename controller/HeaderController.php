<?php
class HeaderController extends ControladorBase{
public $conectar;
public $adapter;

public function __construct() {
    parent::__construct();
	 
    $this->conectar=new Conectar();
    $this->adapter=$this->conectar->conexion();
}

public function index(){
     $header=new header($this->adapter);
        $producto=new producto($this->adapter);
        if(isset($_GET["page1"])){
        $result1=$producto->section1(4,$_GET["page1"]);
        }else{
             $result1=$producto->section1(4,1);
        }
        $pag1=$this->paginacion($producto,4,1,"disponible=1","getAtributeId","1" );
        if(isset($_GET["page2"])){
        $result2=$producto->section2(4,$_GET["page2"]);
        }else{
             $result2=$producto->section2(4,1);
        }
        $pag2=$this->paginacion($producto,4,1,"disponible=1","getAtributeId","0" );

        if(isset($_GET["page3"])){
        $result3=$producto->section3(4,$_GET["page3"]);
        }else{
            $result3=$producto->section3(4,1);
        }
        $pag3=$this->paginacion($producto,4,1,"disponible=1","getAtributeId","1" );
        
        if(isset($_GET["page4"])){
        $result4=$producto->section4(4,$_GET["page4"]);
        }else{
             $result4=$producto->section4(4,1);
        }
        $pag4=$this->paginacion($producto,34,1,"disponible=1","getAtributeId","2" );
        if(isset($_GET["page5"])){
        $result5=$producto->section5(4,$_GET["page5"]);
        
        }else{
             $result5=$producto->section5(4,1);
        }
        $pag5=$this->paginacion($producto,4,1,"disponible=1","getAtributeId","1" );
        
    $this->view("index",array(
        "pag1"=> $pag1,
        "pag2"=> $pag2,
        "pag3"=> $pag3,
        "pag4"=> $pag4,
        "pag5"=> $pag5,
        "result1"=>$result1,
        "result2"=>$result2,
        "result3"=>$result3,
        "result4"=>$result4,
        "result5"=>$result5,
    ));
}

public function perfil(){
    if(isset($_SESSION["Usuario"])){
        $pedido = new pedido($this->adapter);
    $pedido->setFk_usuario($_SESSION["idUser"]);
    $_SESSION["secPedidos"] = $pedido->mostrarPedidos();
     $_SESSION["secVentas"] = $pedido->mostrarVentas();
     $val = $pedido->pedidoByStatus($_SESSION["idUser"]);
     //print_r($val);
     
     foreach ($val as $data) {
          $_SESSION["secCancelados"] = $pedido->mostrarCancelados($data["fk_idUsuario"],$data["fk_idVehiculo"],$data["fk_usuario"]);
         // echo $data["fk_idUsuario"].$data["fk_idVehiculo"].$data["fk_usuario"];
     }
    // print_r($_SESSION["secCancelados"]);
    $this->view("perfil",array());
}else{
    $this->redirect("header", "index");
}
}

public function vehiculo(){
if(isset($_SESSION["Usuario"])){

$vehiculo=new vehiculo($this->adapter);
$rol = new rolUsuario($this->adapter);
$vehiculo->setAtribute("fk_usuario");
$result=$vehiculo->getAtributeId($_SESSION["idUser"]);

if(count($result)==0){
    $header=new header($this->adapter);
    $this->view("formularioVehiculo",array(
    ));
}else{
    $pedido = new pedido($this->adapter);
    $pedido->setFk_usuario($_SESSION["idUser"]);
$_SESSION["secTrans"] = $pedido->mostrarTrans();
    $this->view("vehiculo",array("result"=>$result));
    $report = $pedido->getPedidoVehiculoToReports();
    //print_r($report);
    $content= null;
    for ($i=0; $i < 11 ; $i++) { 
        $content[]  .=  count($report[$i]);
        //print_r(count($report[$i]));
        $_SESSION["repPedidosVehiculo"] =$content;
    }
    //print_r($_SESSION["repPedidosVehiculo"]);
}
    }else{
    $this->redirect("header", "index");
}
}


public function canasta(){
if(isset($_SESSION["Usuario"])){
    $canasta=new canasta($this->adapter);
    $this->view("canasta",array());
    }else{
    $this->redirect("header", "index");
}
}

public function buscar(){
    $producto=new producto($this->adapter);
    if($_GET["product"]!= ""){
    $result=$producto->buscarProducto($_GET["product"]);

    $this->view("busqueda",array(
        "product"=>$_GET["product"],
        "result"=>$result,
    ));
}else{
    $this->redirect("header","index");
}
}

public function catalogo(){
    if (!isset($_GET["page"])) {
        $_GET["page"]=1;
    }
    $producto=new producto($this->adapter);
    $resulta=$producto->catalogo($_GET["product"],$_GET["page"]);
    $paginacion = $producto->pagCatalogo($_GET["product"]);
    $method=$paginacion["method"];
    $opc=$paginacion["opc"];
    $nombre=$resulta["nombre"];
    $result=$resulta["result"];
    $paginar=$this->paginacion($producto,9,1,"disponible=1",$method,$opc);
    $this->view("catalogo",array(
        "opcion"=>$_GET["product"],
        "paginar"=>$paginar,
        "result"=>$result,
        "nombre"=>$nombre,
    ));
    
}

public function misProductos(){
if(isset($_SESSION["Usuario"])){
    if (!isset($_GET["pag"])) {
        $_GET["pag"]=1;
    }
    $producto = new producto($this->adapter);
     $pedido = new pedido($this->adapter);
       $report = $pedido->getPedidoToReports();
     
       $_SESSION["reportVent"] = $pedido->getVentasToPedido($_SESSION["idUser"]);
        $_SESSION["repPedidos"] = "";
        $content= null;
    for ($i=0; $i < 11 ; $i++) { 
        $content[] .= count($report[$i]);
        $_SESSION["repPedidos"] =$content;
    }

   
    $result=$producto->misProductos($_GET["pag"],$_SESSION["idUser"]);
    $_SESSION["misProductos"]=$result;
    $result2=$producto->suspendidos($_SESSION["idUser"]);
    $_SESSION["suspendidos"]=$result2;
    $producto->setAtribute("fk_usuario");
     $pagSuspendidos=$this->paginacion($producto,8,1,"disponible=0","getAtributeId",$_SESSION["idUser"]);
    $pagMisProductos=$this->paginacion($producto,8,1,"disponible=1","getAtributeId",$_SESSION["idUser"]);
    $this->view("misProductos",array(
        "result"=>$result,
        "result2"=>$result2,
        "pagMisProductos"=>$pagMisProductos,
        "pagSuspendidos"=>$pagSuspendidos,
    ));
}else{
    $this->redirect("header", "index");
    }
}

public function login(){
    $this->view("login",array(  ));
} 

public function manual(){
    $this->view("manual",array(  ));
} 

public function salir(){
    session_destroy();
     echo "<script>location.reload();</script>";
    
    
}

}
?>
