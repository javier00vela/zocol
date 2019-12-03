<?php 

class pedido extends EntidadBase{

private $id_pedido;
private $fk_producto;
private $fk_estadoPedido;
private $fk_medioPago;
private $fk_vehiculo;
private $fk_usuario;
private $fk_flete;
private $fechaPedido;
private $subtotal;
private $total;
private $totalToneladas;
private $origen;
private $destino;
private $cantidad;


	public function __construct($adapter){
		$table="pedido";
        parent::__construct($table,$adapter);
        $this->conectar=$this->getConectar();
        $this->db=$this->db();
	}

function getId_pedido() {
                return $this->id_pedido;
            }

            function getFk_estadoPedido() {
                return $this->fk_estadoPedido;
            }
              function getFk_producto() {
                return $this->fk_producto;
            }

              function getFk_usuario() {
                return $this->fk_usuario;
            }

            function getFk_medioPago() {
                return $this->fk_medioPago;
            }

            function getFk_vehiculo() {
                return $this->fk_vehiculo;
            }

            function getFk_flete() {
                return $this->fk_flete;
            }

            function getFechaPedido() {
                return $this->fechaPedido;
            }

            function getSubtotal() {
                return $this->subtotal;
            }

            function getTotal() {
                return $this->total;
            }

            function getTotalToneladas() {
                return $this->totalToneladas;
            }

            function getOrigen() {
                return $this->origen;
            }

            function getDestino() {
                return $this->destino;
            }

            function getCantidad(){
                return $this->cantidad;
            }

            function setId_pedido($id_pedido) {
                $this->id_pedido = $id_pedido;
            }

            function setFk_producto($fk_producto) {
                $this->fk_producto = $fk_producto;
            }

            function setFk_usuario($fk_usuario) {
                $this->fk_usuario = $fk_usuario;
            }

            function setFk_estadoPedido($fk_estadoPedido) {
                $this->fk_estadoPedido = $fk_estadoPedido;
            }

            function setFk_medioPago($fk_medioPago) {
                $this->fk_medioPago = $fk_medioPago;
            }

            function setFk_vehiculo($fk_vehiculo) {
                $this->fk_vehiculo = $fk_vehiculo;
            }
            function setFk_flete($fk_flete) {
                $this->fk_flete = $fk_flete;
            }
            function setFechaPedido($fechaPedido) {
                $this->fechaPedido = $fechaPedido;
            }

            function setSubtotal($subtotal) {
                $this->subtotal = $subtotal;
            }

            function setTotal($total) {
                $this->total = $total;
            }

            function setTotalToneladas($totalToneladas) {
                $this->totalToneladas = $totalToneladas;
            }

            function setOrigen($origen) {
                $this->origen = $origen;
            }

            function setDestino($destino) {
                $this->destino = $destino;
            }
            function setCantidad($cantidad) {
                $this->cantidad = $cantidad;
            }

                

  public function mostrarMaxPedido(){
    	$sql= $this->db->prepare("SELECT MAX(id_pedido) as maximo FROM pedido");
    	$sql->execute();
    $result= $sql->fetchAll(PDO::FETCH_ASSOC);
if ($result != ""){
    return $result;
    	}else{
            return 0;
        }
    }


    public function actualizarPedido(){
            $sql= $this->db->prepare("UPDATE pedido SET fechapedido=:fecha , subtotal=:subtotal , total=:total ,fk_estadoPedido=:estado WHERE id_pedido=:idPedido ");
            $sql->execute(array(
                ":fecha"  => $this->fechaPedido , 
                ":subtotal"=>$this->subtotal ,
                 ":total"=>$this->total ,  
                ":estado"=>$this->fk_estadoPedido , 
                ":idPedido"=>$this->id_pedido 
                       ));
    }


    public function descProductos($cant,$product){
        $sql= $this->db->prepare("UPDATE producto SET cantidad=$cant WHERE id_producto=$product ");
            $sql->execute();
    }

    public function ventasAumentar($cant,$product){
        $sql= $this->db->prepare("UPDATE producto SET ventas=$cant WHERE id_producto=$product ");
            $sql->execute();
    }

    public function cancelarPedido(){
        $sql= $this->db->prepare("UPDATE pedido SET fk_estadoPedido=0 WHERE id_pedido=:pedido ");
            $sql->execute(array(":pedido"=>$this->id_pedido));
    }


    public function obtenerTransportador($departamento,$capacidad,$user){
        $sql=$this->db->prepare("SELECT id_vehiculo,nombres FROM vehiculo inner join usuario on fk_usuario=id_usuario inner join ciudad on usuario.fk_ciudad=id_ciudad inner join departamento on Departamento_idDepartamento=id_departamento where capacidad>=$capacidad and id_departamento=$departamento and fk_usuario<>$user")  ;
        $sql->execute();
        $html= "<option value='0'>Escoja un transportador</option>";

         while($transportador=$sql->fetch()){
                  $html.="<option value='".utf8_encode($transportador["id_vehiculo"])."'>".$transportador["nombres"]."</option>";
            }
            return "$html";
    }


    public function crearPedido(){
        $sql = $this->db->prepare("
            INSERT INTO pedido (
            fk_producto,
            fk_estadopedido,
            fk_medioPago,
            fk_idVehiculo,
            fk_idUsuario,
            fk_flete,
            fechapedido,
            subtotal,
            total,
            totalToneladas,
            departamentoOrigen,
            departamentoDestino,
            cantidadPedido
            )
             VALUES (
             :producto,
             :Epedido,
             :Mpago,
             :vehiculo,
             :user,
             :flete,
             :fecha,
             :subtotal,
             :total,
             :toneladas,
             :origen,
             :destino,
             :cantidad
         )");
        $sql->execute(array( 
            ":producto"=>$this->fk_producto , 
            ":Epedido"=>$this->fk_estadoPedido,
            ":Mpago"=>$this->fk_medioPago,
            ":vehiculo"=>$this->fk_vehiculo,
            ":user"=>$this->fk_usuario,
            ":flete"=>$this->fk_flete,
            ":fecha"=>$this->fechaPedido,
            ":subtotal"=>$this->subtotal,
            ":total"=>$this->total,
            ":toneladas"=>$this->totalToneladas,
            ":origen"=>$this->origen,
            ":destino"=>$this->destino,
            ":cantidad"=>$this->cantidad
             ));
    }




/*
    public function infProducto(){
        $sql= $this->db->prepare(" SELECT  * from pedido inner join canasta on pedido.fk_producto=canasta.fk_producto inner join producto on id_producto=fk_producto ");
            $sql->execute();
            $result= $sql->fetchAll(PDO::FETCH_ASSOC);
       return $result;
    } 
*/


    public function mostrarPedidos(){
        $sql= $this->db->prepare("SELECT * FROM estadopedido inner join pedido on fk_estadoPedido=id_estadoPedido INNER JOIN producto ON pedido.fk_producto=producto.id_producto  WHERE fk_idUsuario=:user  AND  fk_estadoPedido=1");
        $sql->execute( array(":user"=>$this->fk_usuario));
        $result= $sql->fetchAll(PDO::FETCH_ASSOC);
       return $result;
    }

    public function mostrarTrans(){
        $sql= $this->db->prepare("SELECT * FROM estadopedido inner join pedido on pedido.fk_estadoPedido=id_estadoPedido  INNER JOIN producto  on pedido.fk_producto=id_producto inner join vehiculo on fk_idVehiculo=id_vehiculo WHERE vehiculo.fk_usuario=:user  AND  fk_estadoPedido=1");
        $sql->execute( array(":user"=>$this->fk_usuario));
        $result= $sql->fetchAll(PDO::FETCH_ASSOC);
       return $result;
    }

    public function pedidoByStatus($user){
         $sql= $this->db->prepare("SELECT * FROM  pedido  INNER JOIN producto  on pedido.fk_producto=id_producto  WHERE  fk_estadoPedido=0");
        $sql->execute( );
        $result= $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function mostrarCancelados($usuario,$transportador,$vendedor){
        $sql= $this->db->prepare("SELECT * FROM estadopedido inner join pedido on pedido.fk_estadoPedido=id_estadoPedido INNER JOIN producto on pedido.fk_producto=id_producto inner join vehiculo on fk_idVehiculo=id_vehiculo WHERE pedido.fk_idUsuario=$usuario and pedido.fk_idVehiculo=$transportador and producto.fk_usuario=$vendedor and pedido.fk_estadoPedido=0");
        $sql->execute();
        $result= $sql->fetchAll(PDO::FETCH_ASSOC);
       return $result;
    }


    public function mostrarVentas(){
        $sql= $this->db->prepare("SELECT * FROM estadopedido inner join pedido on pedido.fk_estadoPedido=id_estadoPedido  INNER JOIN producto  on pedido.fk_producto=id_producto WHERE producto.fk_usuario=:user  AND  fk_estadoPedido=1");
        $sql->execute( array(":user"=>$this->fk_usuario));
        $result= $sql->fetchAll(PDO::FETCH_ASSOC);
       return $result;
    }

    public function getPedido(){
        $sql= $this->db->prepare("SELECT pedido.id_pedido,comp.nombres as  nombreComprador,departamento.nombre_departamento as departamentoComprador ,comp.telefono as  telefonoComprador , comp.nomenclatura as  nomenclaturaComprador ,comp.documento as  documentoComprador, nombre_tipoProducto , iva ,Nombre_estado ,pedido.id_pedido ,  pedido.fechapedido , pedido.subtotal, pedido.total , flete.precioFlete as flete, pedido.totalToneladas , pedido.cantidadPedido , producto.nombre , producto.foto_producto,producto.foto_producto,producto.descripcion, us.nombres as nombreVendedor , us.telefono as telefonoVendedor , us.nomenclatura as nomenclaturaVendedor , us.documento as documentoVendedor , us.localidad as localidadVendedor, depart.nombre_departamento as departamentoVendedor ,vehiculo.capacidad , vehiculo.placa , vehiculo.matricula_vehiculo , vehiculo.soat , vehiculo.licencia , vehiculo.prueba_tecnomecanica ,  usuario.nombres , usuario.telefono , usuario.nomenclatura , usuario.documento , dep.nombre_departamento,usuario.localidad  FROM estadopedido inner join pedido on pedido.fk_estadoPedido=id_estadoPedido inner join flete on pedido.fk_flete=id_flete  inner join usuario as comp on comp.id_usuario=pedido.fk_idUsuario inner join ciudad on comp.fk_ciudad=id_ciudad inner join departamento on  Departamento_idDepartamento=id_departamento INNER JOIN  producto on pedido.fk_producto=id_producto inner join usuario as us on us.id_usuario=fk_usuario INNER join ciudad as ciu on us.fk_ciudad=ciu.id_ciudad inner join departamento as depart on depart.id_departamento=ciu.Departamento_idDepartamento inner join vehiculo on fk_idVehiculo=id_vehiculo inner join tipoproducto on fk_tipoProducto=id_tipoProducto inner join usuario on usuario.id_usuario=vehiculo.fk_usuario inner join ciudad as ciud on usuario.fk_ciudad=ciud.id_ciudad inner join departamento as dep on dep.id_departamento=ciud.Departamento_idDepartamento   WHERE id_pedido=:pedido ");
        $sql->execute( array(":pedido"=>$this->id_pedido));
        $result= $sql->fetchAll(PDO::FETCH_ASSOC);
       return $result;
    }

  public function getPedidoByDate($date1,$date2,$user){
        $sql= $this->db->prepare("SELECT pedido.fechapedido  FROM estadopedido inner join pedido on pedido.fk_estadoPedido=id_estadoPedido inner join flete on pedido.fk_flete=id_flete  inner join usuario as comp on comp.id_usuario=pedido.fk_idUsuario inner join ciudad on comp.fk_ciudad=id_ciudad inner join departamento on  Departamento_idDepartamento=id_departamento INNER JOIN  producto on pedido.fk_producto=id_producto inner join usuario as us on us.id_usuario=fk_usuario INNER join ciudad as ciu on us.fk_ciudad=ciu.id_ciudad inner join departamento as depart on depart.id_departamento=ciu.Departamento_idDepartamento inner join vehiculo on fk_idVehiculo=id_vehiculo inner join tipoproducto on fk_tipoProducto=id_tipoProducto inner join usuario on usuario.id_usuario=vehiculo.fk_usuario inner join ciudad as ciud on usuario.fk_ciudad=ciud.id_ciudad inner join departamento as dep on dep.id_departamento=ciud.Departamento_idDepartamento   WHERE   fechapedido BETWEEN :date1 and       :dates and fk_idUsuario=:user ");
        $sql->execute( array(":date1"=>$date1,":dates"=>$date2,":user"=>$user));
        $result= $sql->fetchAll(PDO::FETCH_ASSOC);
       return $result;
    }

public function getPedidoVehiculoByDate($date1,$date2,$user){
        $sql= $this->db->prepare("SELECT pedido.fechapedido  FROM estadopedido inner join pedido on pedido.fk_estadoPedido=id_estadoPedido inner join flete on pedido.fk_flete=id_flete  inner join usuario as comp on comp.id_usuario=pedido.fk_idUsuario inner join ciudad on comp.fk_ciudad=id_ciudad inner join departamento on  Departamento_idDepartamento=id_departamento INNER JOIN  producto on pedido.fk_producto=id_producto inner join usuario as us on us.id_usuario=fk_usuario INNER join ciudad as ciu on us.fk_ciudad=ciu.id_ciudad inner join departamento as depart on depart.id_departamento=ciu.Departamento_idDepartamento inner join vehiculo on fk_idVehiculo=id_vehiculo inner join tipoproducto on fk_tipoProducto=id_tipoProducto inner join usuario on usuario.id_usuario=vehiculo.fk_usuario inner join ciudad as ciud on usuario.fk_ciudad=ciud.id_ciudad inner join departamento as dep on dep.id_departamento=ciud.Departamento_idDepartamento   WHERE   fechapedido BETWEEN :date1 and       :dates and usuario.id_usuario=:user ");
        $sql->execute( array(":date1"=>$date1,":dates"=>$date2,":user"=>$user));
        $result= $sql->fetchAll(PDO::FETCH_ASSOC);
       return $result;
    }


    public function  getVentasToPedido($user){
        $sql= $this->db->prepare("SELECT * FROM producto where fk_usuario=:user ");
        $sql->execute( array(":user"=>$user));
        $result= $sql->fetchAll(PDO::FETCH_ASSOC);
       return $result;
        
    } 





public function getPedidoToReports(){
    $fecha = strftime("%Y-%m-%d" , time());
            $dividir = explode("-", $fecha);
        for ($i=1; $i < 13 ; $i++) { 
            if ($i < 10) {
               $compDate = "0";
            }else{
                 $compDate = "";
            }
       
            $months =  $compDate.$i;
            $div[] = $months;
            $unir[] = $dividir[0]."-".$div[$i-1]."-".$dividir[2];
             if ($i > 1) {
            $dat[] = $unir[$i-2];
        }else{
             $dat[] = "2018-01-01";
        }

            $result[] = $this->getPedidoByDate($dat[$i-1],$unir[$i-1] ,$_SESSION["idUser"]);
            // echo  $dividir[0]."-".$div[$i-1]."-".$dividir[2]."<br>";
        }
        //print_r($dat);
    return $result;
  
    }

public function getPedidoVehiculoToReports(){
    $fecha = strftime("%Y-%m-%d" , time());
            $dividir = explode("-", $fecha);
        for ($i=1; $i < 13 ; $i++) { 
            if ($i < 10) {
               $compDate = "0";
            }else{
                 $compDate = "";
            }
       
            $months =  $compDate.$i;
            $div[] = $months;
            $unir[] = $dividir[0]."-".$div[$i-1]."-".$dividir[2];
             if ($i > 1) {
            $dat[] = $unir[$i-2];
        }else{
             $dat[] = "2018-01-01";
        }
 
            //print_r($getVeh["id_vehiculo"]);
            $result[] = $this->getPedidoVehiculoByDate($dat[$i-1],$unir[$i-1] ,$_SESSION["idUser"]);
              //echo  $dividir[0]."-".$div[$i-1]."-".$dividir[2]."<br>";
        }
    return $result;
  //print_r($dat);
    }





}
?>