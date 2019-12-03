<?php
class vehiculoController extends ControladorBase{
    public $conectar;
    public $adapter;

	
    public function __construct() {
        parent::__construct();
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }

public function registrarVehiculo(){
$vehiculo = new vehiculo($this->adapter);
if(isset($_POST["ciudad"],$_POST["capacidad"],$_POST["placa"], $_POST["refrigeracion"])){
        if (!empty($_FILES["matricula"]["name"] && $_FILES['soat']["name"] && $_FILES['licencia']["name"] && $_FILES['tecnoM']["name"] )) {
             $rol = new  rolUsuario($this->adapter);
        $vehiculo->setVehiculoCiudad($_POST["ciudad"]);
       
        $vehiculo->setVehiculoUser($_SESSION["idUser"]);
             if($_POST["Tpeso"]==1){
    $_POST["capacidad"] = $_POST["capacidad"] / 2.2;
  }
  if($_POST["Tpeso"]==2){
    $_POST["capacidad"] = $_POST["capacidad"] / 1000;
  }  
        $vehiculo->setVehiculoCapacidad($_POST["capacidad"]);
        $vehiculo->setVehiculoTpeso($_POST["Tpeso"]);
        $vehiculo->setVehiculoPlaca($_POST["placa"]);
        $vehiculo->setVehiculoRefrigeracion($_POST["refrigeracion"]);
            $vehiculo->setVehiculoMatricula($_FILES['matricula']["name"]);
            $vehiculo->setVehiculoSoat($_FILES['soat']["name"]);
            $vehiculo->setVehiculoLicencia($_FILES['licencia']["name"]);
            $vehiculo->setVehiculoPrueba($_FILES['tecnoM']["name"]);
            $nombreMatricula= $_FILES["matricula"]["name"];
            $nombreLicencia= $_FILES["licencia"]["name"];
            $nombreTecnoM= $_FILES["tecnoM"]["name"];
            $nombreSoat= $_FILES["soat"]["name"];
            $rutaMatricula= $_FILES["matricula"]["tmp_name"];
            $rutaLicencia= $_FILES["licencia"]["tmp_name"];
            $rutaSoat= $_FILES["soat"]["tmp_name"];
            $rutaTecnoM= $_FILES["tecnoM"]["tmp_name"];
            $destinoMatricula="src/documents/vehiculo/".$nombreMatricula;
            $destinoLicencia="src/documents/vehiculo/".$nombreLicencia;
            $destinoTecnoM="src/documents/vehiculo/".$nombreTecnoM;
            $destinoSoat="src/documents/vehiculo/".$nombreSoat;
            copy($rutaMatricula,$destinoMatricula);
            copy($rutaLicencia,$destinoLicencia);
            copy($rutaTecnoM,$destinoTecnoM);
            copy($rutaSoat,$destinoSoat);
            $vehiculo->registrarVehiculo();
            $vehiculo->addDocumentacion();
            
            $this->redirect("header","vehiculo");
            }else{
 $this->view("formularioVehiculo",array(
 ));
 $this->alertError("por favor ingrese todos los documentos del vehiculo");
}
}
}

public function actualizarVehiculo(){
if(isset($_POST["ciudad"],$_POST["capacidad"],$_POST["placa"], $_POST["refrigeracion"])){
$vehiculo = new  vehiculo($this->adapter);
        $vehiculo->setVehiculoCiudad($_POST["ciudad"]);
        $vehiculo->setVehiculoUser($_SESSION["idUser"]);  
        if($_POST["Tpeso"]==1){
    $_POST["capacidad"] = $_POST["capacidad"] / 2.2;
  }elseif($_POST["Tpeso"]==2){
    $_POST["capacidad"] = $_POST["capacidad"] / 1000;
  }  
        $vehiculo->setVehiculoCapacidad($_POST["capacidad"]);
        $vehiculo->setVehiculoTpeso($_POST["Tpeso"]);
        $vehiculo->setVehiculoPlaca($_POST["placa"]);
        $vehiculo->setVehiculoRefrigeracion($_POST["refrigeracion"]);
         $vehiculo->actualizarVehiculo();
        
        if (isset($_FILES["matricula"]["name"])) {
            $vehiculo->setVehiculoMatricula($_FILES['matricula']["name"]);
            $nombreMatricula= $_FILES["matricula"]["name"];
            $rutaMatricula= $_FILES["matricula"]["tmp_name"];
            $destinoMatricula="src/documents/vehiculo/".$nombreMatricula;
            copy($rutaMatricula,$destinoMatricula);
        }
         if (isset($_FILES["licencia"]["name"])) {
            $vehiculo->setVehiculoLicencia($_FILES['licencia']["name"]);
            $nombreLicencia= $_FILES["licencia"]["name"];
            $rutaLicencia= $_FILES["licencia"]["tmp_name"];
            $destinoLicencia="src/documents/vehiculo/".$nombreLicencia;
            copy($rutaLicencia,$destinoLicencia);
        }

         if (isset($_FILES["tecnoM"]["name"])) {
            $vehiculo->setVehiculoPrueba($_FILES['tecnoM']["name"]);
            $nombreTecnoM= $_FILES["tecnoM"]["name"];
             $rutaTecnoM= $_FILES["tecnoM"]["tmp_name"];
            $destinoTecnoM="src/documents/vehiculo/".$nombreTecnoM;
            copy($rutaTecnoM,$destinoTecnoM);
        }
            if(isset($_FILES["soat"]["name"])){
            $vehiculo->setVehiculoSoat($_FILES['soat']["name"]);
            $nombreSoat= $_FILES["soat"]["name"];
            $rutaSoat= $_FILES["soat"]["tmp_name"];
            $destinoSoat="src/documents/vehiculo/".$nombreSoat;
            copy($rutaSoat,$destinoSoat);
            }

        $vehiculo->actualizarVehiculo(); 
        $this->redirect("header","vehiculo"); 
}
}


}
?>
