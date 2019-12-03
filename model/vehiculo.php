<?php
class vehiculo extends EntidadBase{

    private $id_vehiculo;
    private $vehiculoTpeso;
    private $vehiculoCiudad;
    private $vehiculoUser;
    private $vehiculoCapacidad;
    private $vehiculoPlaca;
    private $vehiculoRefrigeracion;
    private $vehiculoMatricula;
    private $vehiculoSoat;
    private $vehiculoLicencia;
    private $vehiculoPrueba;
    private $vehiculoActivo;

    public function __construct($adapter) {
        $table="vehiculo";
        parent::__construct($table,$adapter);
        $this->conectar=$this->getConectar();
        $this->db=$this->db();
    }
    
 function getId_vehiculo() {
        return $this->id_vehiculo;
    }


    function getTpeso() {
        return $this->vehiculoTpeso;
    }

    function getVehiculoCiudad() {
        return $this->vehiculoCiudad;
    }

    function getVehiculoUser() {
        return $this->vehiculoUser;
    }

    function getVehiculoCapacidad() {
        return $this->vehiculoCapacidad;
    }

    function getVehiculoPlaca() {
        return $this->vehiculoPlaca;
    }

    function getVehiculoRefrigeracion() {
        return $this->vehiculoRefrigeracion;
    }

    function getVehiculoMatricula() {
        return $this->vehiculoMatricula;
    }

    function getVehiculoSoat() {
        return $this->vehiculoSoat;
    }

    function getVehiculoLicencia() {
        return $this->vehiculoLicencia;
    }

    function getVehiculoPrueba() {
        return $this->vehiculoPrueba;
    }

    function getVehiculoActivo() {
        return $this->vehiculoActivo;
    }

    function getVehiculoFoto() {
        return $this->vehiculoFoto;
    }

    function setId_vehiculo($id_vehiculo) {
        $this->id_vehiculo = $id_vehiculo;
    }
    function setVehiculoTpeso($vehiculoTpeso) {
        $this->vehiculoTpeso = $vehiculoTpeso;
    }


    function setVehiculoCiudad($vehiculoCiudad) {
        $this->vehiculoCiudad = $vehiculoCiudad;
    }

    function setVehiculoUser($vehiculoUser) {
        $this->vehiculoUser = $vehiculoUser;
    }

    function setVehiculoCapacidad($vehiculoCapacidad) {
        $this->vehiculoCapacidad = $vehiculoCapacidad;
    }

    function setVehiculoPlaca($vehiculoPlaca) {
        $this->vehiculoPlaca = $vehiculoPlaca;
    }

    function setVehiculoRefrigeracion($vehiculoRefrigeracion) {
        $this->vehiculoRefrigeracion = $vehiculoRefrigeracion;
    }

    function setVehiculoMatricula($vehiculoMatricula) {
        $this->vehiculoMatricula = $vehiculoMatricula;
    }

    function setVehiculoSoat($vehiculoSoat) {
        $this->vehiculoSoat = $vehiculoSoat;
    }

    function setVehiculoLicencia($vehiculoLicencia) {
        $this->vehiculoLicencia = $vehiculoLicencia;
    }

    function setVehiculoPrueba($vehiculoPrueba) {
        $this->vehiculoPrueba = $vehiculoPrueba;
    }

    function setVehiculoActivo($vehiculoActivo) {
        $this->vehiculoActivo = $vehiculoActivo;
    }


 public function registrarVehiculo(){
          $sql=$this->db->prepare("
            INSERT INTO vehiculo (
            fk_unidadMedida,
            fk_ciudad,
            fk_usuario,
            capacidad,
            placa,
            refrigeracion
              )
            VALUES (
            :Tpeso,
            :ciudad,
            :id ,
            :capacidad,
            :placa,
            :refrigeracion
         )  
            ");
          $sql->execute(array(
            ":Tpeso"=>$this->vehiculoTpeso,
            ":ciudad"=>$this->vehiculoCiudad,
            "id"=>$this->vehiculoUser,
            ":capacidad"=> $this->vehiculoCapacidad,
            ":placa"=> $this->vehiculoPlaca,
            ":refrigeracion"=> $this->vehiculoRefrigeracion,
            ));
        }

public function addDocumentacion(){
   $sql=$this->db->prepare("
        UPDATE vehiculo SET
            matricula_vehiculo=:matricula,
          soat=:soat,
          licencia=:licencia,
          prueba_tecnomecanica=:tecnoM
           WHERE fk_usuario=:idUser 
            ");
 $sql->execute(array(
    ":matricula"=>"src/documents/vehiculo/$this->vehiculoMatricula",
    ":soat"=>"src/documents/vehiculo/$this->vehiculoSoat",
    ":licencia"=> "src/documents/vehiculo/$this->vehiculoLicencia",
    ":tecnoM"=> "src/documents/vehiculo/$this->vehiculoPrueba",
    "idUser"=> $this->vehiculoUser
        )); 
}

public function actualizarVehiculo(){
    $sql=$this->db->prepare("
        UPDATE vehiculo SET
          fk_unidadMedida=:Tpeso ,
          fk_ciudad=:ciudad,
          fk_usuario=:id ,
          capacidad=:capacidad ,
          placa=:placa ,
          refrigeracion=:refrigeracion
          WHERE fk_usuario=:id 
             ");
     $sql->execute(array(
        ":Tpeso"=>$this->vehiculoTpeso,
        ":ciudad"=>$this->vehiculoCiudad,
        "id"=>$this->vehiculoUser,
        ":capacidad"=> $this->vehiculoCapacidad,
        ":placa"=> $this->vehiculoPlaca,
        ":refrigeracion"=> $this->vehiculoRefrigeracion
      
        )); 
       //echo $this->vehiculoTpeso."-".$this->vehiculoCiudad.$this->vehiculoUser."-".$this->vehiculoPlaca."-".$this->vehiculoRefrigeracion."-".$this->vehiculoCapacidad."-".$this->vehiculoUser;
}


    public function getIdVehiculo($user){
        $sql = $this->db->prepare("SELECT DISTINCT  id_vehiculo from usuario inner join vehiculo on id_usuario=vehiculo.fk_usuario where id_usuario=$user");
        $sql->execute();
        while ($valor=$sql->fetch(PDO::FETCH_ASSOC)){
            $list[] = $valor;
        }
        print_r($list);
        return $list;
    }




}
?>