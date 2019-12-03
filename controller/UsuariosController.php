<?php
class UsuariosController extends ControladorBase{
    public $conectar;
    public $adapter;

public function __construct() {
    parent::__construct();
    $this->conectar=new Conectar();
    $this->adapter=$this->conectar->conexion();
}

public function validarUsuario(){
    if(isset($_POST["documentoLogin"],$_POST["contrasenaLogin"])){ 
         $usuario=new Usuario($this->adapter);
         $rol = new rolUsuario($this->adapter);
         $usuario->setDocumento($_POST["documentoLogin"]);
         $usuario->setContrasena(md5($_POST["contrasenaLogin"]));
         $valor=$usuario->validarLogin() ;
        if($valor==false){
            $this->view("login",array("valor"=>$valor ));
            $this->alertError("usuario incorrecto ,  por favor verifique");      
        }else{
            $rol->validarRol();
             echo "<script>location.reload();</script>";
        }
    }  
} 

public function registrar(){
    $usuario=new Usuario($this->adapter);
    if(isset($_POST['nombre'],$_POST['documento'],$_POST['contrasena'],$_POST['contrasena2'],$_POST['ciudad'],$_POST['correo'],$_POST['fechaNacimiento'],$_POST['localidad'],$_POST['barrio'],$_POST['nomenclatura'],$_POST['telefono'])){
            if($_POST['contrasena']==$_POST['contrasena2']){
                $usuario->setNombre(strtolower($_POST['nombre']));
                $usuario->setDocumento(strtolower($_POST['documento']));
                $usuario->setContrasena(strtolower(md5($_POST['contrasena'])));
                $usuario->setCiudad(strtolower($_POST['ciudad']));
                $usuario->setCorreo(strtolower($_POST['correo']));
                $usuario->setFechaNacimiento(strtolower($_POST['fechaNacimiento']));
                $usuario->setLocalidad(strtolower($_POST['localidad']));
                $usuario->setBarrio(strtolower($_POST['barrio']));
                $usuario->setNomenclatura(strtolower($_POST['nomenclatura']));
                $usuario->setTelefono(strtolower($_POST['telefono']));
                $val=$usuario->registrarse();
                    if($val==true){
                        $this->alertError("el documento o el correo ya se encuentra registrada en la base de datos");
                    }else{
            $this-> alertBien("registro realizado satisfactoriamente");
          }
        }else{
           $this-> alertError("la contraseña debe coincidir con la de confirmación");
        }
    
}else{
    $this->alertError("no se pudo realizar el registro de usuario");
}
$this->view("login",array());
}

public function recuperarPass(){
    $mailer= new phpMailer();
    $usuario = new usuario($this->adapter);
    $usuario->setCorreo($_POST["email"]);
    $exitUser = $usuario->validarCorreo();
    if($exitUser == true){
    $_SESSION["emailTemp"]=$_POST["email"];
$_SESSION["passTemp"] = $this->generarCodigo(10);
$mailer->addDestinatario($_SESSION["emailTemp"]);
$contenido = ".
================================================================================<br>

    zocol - sistema de gestion de compra & venta de productos agropecuarios<br>

=================================================================================<br>

mensaje enviado al correo ".$_POST["email"]." , con el fin  de restablecer la contraseña
de manera rapida y eficiente , por favor agregar esl siguiente codigo a la casilla codigo:".
$_SESSION["passTemp"];
$rta = $mailer->enviarMensaje($contenido);
$this->alertInputCode("escriba el codigo que se encuentra en su correo:",$_SESSION["passTemp"],"codigo","usuarios","validarPass");
    
}else{
    $this->alertInfo("no se encuentra tu correo en la base de datos");
}
$this->view("login",array());
}


public function validarPass(){
    $this->alertInput("escriba su nueva contraseña","newPass","usuarios","actualizarPass");
    $this->view("login",array());
}


public function actualizarPass(){
    $user = new usuario($this->adapter);
     $user->setContrasena(md5($_POST["newPass"]));
    $user->setCorreo($_SESSION["emailTemp"]);
    $user->actualizarPass();
    $this->view("login",array());
    $this->alertInfo("has restablecido tu contraseña");
}


public function actualizarUsuario(){
    $usuario=new usuario($this->adapter);
    $result=$usuario->getAll();
    if(isset($_POST['nombre'],$_POST['documento'],$_POST['correo'],$_POST['fechaNacimiento'],$_POST['localidad'],$_POST['barrio'],$_POST['nomenclatura'],$_POST['telefono'],$_POST['activo'])){
        $usuario->setNombre(strtolower($_POST['nombre']));
        $usuario->setDocumento(strtolower($_POST['documento']));
        
        $usuario->setCorreo(strtolower($_POST['correo']));
        $usuario->setFechaNacimiento(strtolower($_POST['fechaNacimiento']));
        $usuario->setLocalidad(strtolower($_POST['localidad']));
        $usuario->setBarrio(strtolower($_POST['barrio']));
        $usuario->setNomenclatura(strtolower($_POST['nomenclatura']));
        $usuario->setTelefono(strtolower($_POST['telefono']));
        $usuario->setIdUser($_SESSION['idUser']);
        $val = $usuario->actualizarDatos();
                if ($val != ""){
                    $this->alertError("el documento o el correo ya se encuentra registrada en la base de datos");
                }
    }
    if(isset($_POST['ciudad'])){
        $usuario->setCiudad(strtolower($_POST['ciudad']));
        $usuario->UpdateCity();
    }

         if(!empty($_POST['contrasena'] && $_POST['contrasena2'])){
            if($_POST['contrasena'] == $_POST['contrasena2']){
        $usuario->setContrasena(strtolower(md5($_POST['contrasena2'])));
        $usuario->UpdatePassword();
         $this->alertBien("actualizacion realizada");
                }else{
                    $this->alertError("las contraseñas deben coincidir");
                }
             }   

            if (isset($_FILES["img"]["name"])) {
                $nombreFoto= $_FILES["img"]["name"];
            $ruta= $_FILES["img"]["tmp_name"];
            $destino="src/images/profile/".$nombreFoto;
            copy($ruta,$destino);
            $usuario->setAtribute("foto_perfil");
            $usuario->updateByAtribute("src/images/profile/".$_FILES["img"]["name"],$_SESSION["idUser"]);
            $_SESSION["fotoUser"]="src/images/profile/".$_FILES["img"]["name"];
            }
    $this->view("perfil",array());
}

}
 
?>
