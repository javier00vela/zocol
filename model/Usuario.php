<?php
class Usuario extends EntidadBase{
    private $id_user;
    private $nombre;
     private $documento;
     private $contrasena;
     private $ciudad;
     private $departamento;
     private $correo;
     private $fechaNacimiento;
     private $localidad;
     private $barrio;
     private $foto;
     private $nomenclatura;
     private $telefono;
     private $activo;
    
    public function __construct($adapter) {
        $table="usuario";
        parent::__construct($table, $adapter);
        $this->conectar=$this->getConectar();
        $this->db=$this->db();
    }
    
     function getId_User() {
         return $this->id_user;
     }
    function getNombre() {
         return $this->nombre;
     }

     function getDocumento() {
         return $this->documento;
     }

     function getContrasena() {
         return $this->contrasena;
     }

     function getCiudad() {
         return $this->ciudad;
     }

     function getDepartamento() {
         return $this->departamento;
     }

     function getCorreo() {
         return $this->correo;
     }

     function getFechaNacimiento() {
         return $this->fechaNacimiento;
     }

     function getLocalidad() {
         return $this->localidad;
     }

     function getBarrio() {
         return $this->barrio;
     }

     function getFoto() {
         return $this->foto;
     }

     function getNomenclatura() {
         return $this->nomenclatura;
     }

     function getTelefono() {
         return $this->telefono;
     }

     function getActivo() {
         return $this->activo;
     }

     function setIdUser($id_user) {
         $this->id_user = $id_user;
     } 
     function setNombre($nombre) {
         $this->nombre = $nombre;
     }

     function setDocumento($documento) {
         $this->documento = $documento;
     }

     function setContrasena($contrasena) {
         $this->contrasena = $contrasena;
     }

     function setCiudad($ciudad) {
         $this->ciudad = $ciudad;
     }

     function setDepartamento($departamento) {
         $this->departamento = $departamento;
     }

     function setCorreo($correo) {
         $this->correo = $correo;
     }

     function setFechaNacimiento($fechaNacimiento) {
         $this->fechaNacimiento = $fechaNacimiento;
     }

     function setLocalidad($localidad) {
         $this->localidad = $localidad;
     }

     function setBarrio($barrio) {
         $this->barrio = $barrio;
     }

     function setFoto($foto) {
         $this->foto = $foto;
     }

     function setNomenclatura($nomenclatura) {
         $this->nomenclatura = $nomenclatura;
     }

     function setTelefono($telefono) {
         $this->telefono = $telefono;
     }

     function setActivo($activo) {
         $this->activo = $activo;
     }

    public function validarLogin(){
        $sql=$this->db->prepare("SELECT * FROM usuario WHERE documento=? and contrasena=?");
        $sql->bindParam(1, $this->documento);
        $sql->bindParam(2, $this->contrasena);
        $sql->execute();
        $valor=$sql->fetch(PDO::FETCH_ASSOC);
        if($valor==true){   
            $_SESSION["idUser"]=$valor['id_usuario'];
            $_SESSION["nombreUser"]=$valor['nombres'];
            $_SESSION["documentoUser"]=$valor['documento'];
            $_SESSION["contrasenaUser"]=$valor['contrasena'];
            $_SESSION["ciudadUser"]=$valor['fk_ciudad'];
            $_SESSION["correoUser"]=$valor['correo'];
            $_SESSION["nacimientoUser"]=$valor['Fecha_de_nacimiento'];
            $_SESSION["localidadUser"]=$valor['localidad'];
            $_SESSION["barrioUser"]=$valor['nombre_barrio'];
            $_SESSION["fotoUser"]=$valor['foto_perfil'];
            $_SESSION["nomenclaturaUser"]=$valor['nomenclatura'];
            $_SESSION["telefonoUser"]=$valor['telefono'];
            $nombre=$_SESSION["nombreUser"];
            $user= explode(" ",$nombre);
             $_SESSION['Usuario']= $user[0];
        }
     return $valor;
}


public function registrarse(){
    $result=$this->getAll();
        foreach ($result as $valor ) {
            if ($this->correo==$valor["correo"]){
                $correo = $valor["correo"];
            }
            if ($this->documento==$valor["documento"]){
                $documento=$valor["documento"];
            }
        }
        if(empty($documento)){
            $documento="";
        }
        if(empty($correo)){
            $correo="";
        }
    if($documento!=$this->documento){
        if($correo!=$this->correo){
            $sql=$this->db->prepare("
                INSERT INTO usuario (
                 fk_ciudad,nombres,correo, telefono,Fecha_de_nacimiento,documento,
               nombre_barrio,localidad,nomenclatura,contrasena, foto_perfil
               ) 
               VALUES (:ciudad, :nombre, :correo, :telefono, :fechaNacimiento, :documento, :barrio, :localidad,:nomenclatura,:contrasena,:foto)");
             $sql->execute(array(
                ":ciudad"=>$this->ciudad,
                ":nombre"=> $this->nombre,
                ":correo"=> $this->correo,
                ":telefono"=> $this->telefono,
                ":fechaNacimiento"=> $this->fechaNacimiento,
                ":documento"=> $this->documento,
                ":barrio"=> $this->barrio,
                ":localidad"=> $this->localidad,
                ":nomenclatura"=> $this->nomenclatura,
                ":contrasena"=> $this->contrasena,
                ":foto"=> 'src/images/profile/sys/perfil.png'
                ));
          }else{
            return $correo;
          }
     }else{
        return $documento;
     }
}

public function actualizarDatos(){
 
    $result=$this->getAll();
        foreach ($result as $valor ) {
            if ($this->correo==$valor["correo"] && $this->correo !=  $_SESSION["correoUser"]  ){
                $correo = $valor["correo"];
            }
            if ($this->documento==$valor["documento"] && $this->documento !=  $_SESSION["documentoUser"] ){
                $documento=$valor["documento"];
                
            }
        }
        if(empty($documento)){
            $documento="";
        }
        if(empty($correo)){
            $correo="";
        }
    if($documento!=$this->documento){
        if($correo!=$this->correo){
     $sql=$this->db->prepare("
        UPDATE usuario 
        SET 
        nombres=:nombre, 
        correo=:correo, 
        telefono=:telefono, 
        Fecha_de_nacimiento=:fechaNacimiento,
        documento=:documento,
        nombre_barrio=:barrio,
        localidad=:localidad,
        nomenclatura=:nomenclatura
        WHERE id_usuario=$this->id_user
        ");
 $sql->execute(array(
    ":nombre"=>$this->nombre,
    ":correo"=> $this->correo,
    ":telefono"=>$this->telefono,
    ":fechaNacimiento"=>$this->fechaNacimiento,
    ":documento"=>$this->documento,
    ":barrio"=>$this->barrio,
    ":localidad"=>$this->localidad,
    ":nomenclatura"=>$this->nomenclatura
    ))or die ("error");
    $_SESSION["nombreUser"]=$this->nombre;
    $_SESSION["documentoUser"]=$this->documento;
    $_SESSION["correoUser"]=$valor['correo'];
    $_SESSION["nacimientoUser"]=$this->fechaNacimiento;
    $_SESSION["localidadUser"]=$this->localidad;
    $_SESSION["barrioUser"]=$this->barrio;
    $_SESSION["nomenclaturaUser"]=$this->nomenclatura;
    $_SESSION["telefonoUser"]=$this->telefono;


}else{
            return $correo;
          }
     }else{
        return $documento;
     }


}

public function UpdatePassword(){
    $sql = $this->db->prepare("UPDATE usuario SET contrasena=:pass where id_usuario=:idUser");
    $sql->execute(array(":pass"=>$this->contrasena,":idUser"=>$_SESSION["idUser"]));
}

public function UpdateCity(){
    $sql = $this->db->prepare("UPDATE usuario SET ciudad=:ciudad where id_usuario=:idUser");
    $sql->execute(array(":ciudad"=>$this->ciudad,":idUser"=>$_SESSION["idUser"]));
    $_SESSION["ciudadUser"]=$this->ciudad;
}

public function actualizarPass(){
    $sql = $this->db->prepare("UPDATE usuario SET contrasena=:pass where correo=:correo");
    $sql->execute(array(":pass"=>$this->contrasena,":correo"=>$this->correo));
}

public function validarCorreo(){
    $sql= $this->db->prepare("SELECT * FROM usuario WHERE correo=:correo");
    $sql->execute(array(":correo"=>$this->correo));
     $valor=$sql->fetch(PDO::FETCH_ASSOC);
        if($valor==true){ 
        return true ;
        }else{
            return false;
        } 
}
}
?>