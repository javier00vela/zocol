<?php
class PedidoController extends ControladorBase{
public $conectar;
public $adapter;

public function __construct() {
    parent::__construct();
    $this->conectar=new Conectar();
    $this->adapter=$this->conectar->conexion();
}

public function getPedidoToReports(){
        for ($i=1; $i < 13 ; $i++) { 
            if ($i < 10) {
               $compDate = "0";
            }else{
            	 $compDate = "";
            }
            echo $compDate.$i;
        
        }
    }

 

public function crearPedido(){
	$pedido = new pedido($this->adapter);
	$producto = new producto($this->adapter); 
	$canasta = new canasta($this->adapter);
	$list = $producto->getById($_POST["idProducto"]);
	foreach ($list as $product) {
		$pedido->descProductos($product["cantidad"]-$_POST["cantidad"],$_POST["idProducto"]);
		$pedido->ventasAumentar($product["ventas"]+1,$_POST["idProducto"]);
	}
	$pedido->setFk_flete($_POST["flete"]);
	$pedido->setFk_producto($_POST["idProducto"]);
	$pedido->setFk_estadoPedido(1);
	$pedido->setFk_medioPago(1);
	$pedido->setFk_vehiculo($_POST["trans"]);
	$pedido->setFk_Usuario($_SESSION["idUser"]);
	$pedido->setFechaPedido(strftime( "%Y-%m-%d", time()));
	$pedido->setSubtotal($_POST["subtotal"]);
	$pedido->setTotal($_POST["total"]);
	$pedido->setTotalToneladas($_POST["peso"]);
	$pedido->setOrigen($_POST["origen"]);
	$pedido->setDestino($_POST["destino"]);
	$pedido->setCantidad($_POST["cantidad"]);
	$pedido->crearPedido();
	$canasta->setCanastaUser($_SESSION["idUser"]);
	$canasta->eliminarTodo();
	$this->alertBien("se ha realizado el pedido");
	$this->view("canasta",array());
}


public function cancelarPedido(){
	$pedido= new pedido($this->adapter);
	$pedido->setId_pedido($_POST["idPedido"]);
	$pedido->cancelarPedido();
	$this->alertBien("se ha cancelado el pedido efectivamente");
	$this->view("perfil",array());
}



public function detallesPedido(){
	$pedido = new pedido($this->adapter);
	$pedido->setId_pedido($_POST["id"]);
	$pedido->setFk_producto($_POST["producto"]);
	$data = $pedido->getPedido();
	$this->view("detallesPedido",array("tipoPedido"=>$_POST["tipo"] , "datos"=>$data));
}

    }
?>
