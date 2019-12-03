<?php
class ControladorBase{

    public function __construct() {
		require_once 'Conectar.php';
        require_once 'EntidadBase.php';
        
        //Incluir todos los modelos
        foreach(glob("model/*.php") as $file){
            require_once $file;
        }
        $this->ObtenerDepartamentos();
        $this->ObtenerCanasta();

    }
    
    //Plugins y funcionalidades
    
    public function view($vista,$datos){
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc}=$valor; 
        }
        
        require_once 'core/AyudaVistas.php';
        $helper=new AyudaVistas();
    
        require_once 'view/'.$vista.'View.php';
    }

  
    
    public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        header("Location:index.php?controller=".$controlador."&action=".$accion);
        
    }
    
    //Métodos para los controladores
      public function alertError($mensaje){
        echo "<script type='text/javascript'>swal('ERROR','$mensaje', 'error');</script>";
    } 

       public function alertBien($mensaje){
        echo "<script type='text/javascript'>  swal({ position: 'top-center',
          type: 'success',
          title: '$mensaje',
          showConfirmButton: false,
          timer: 1500
        })</script>";
    } 

        public function alertInfo($mensaje){
        echo "<script type='text/javascript'>  swal({ position: 'top-center',
          type: 'info',
          title: '$mensaje',
          showConfirmButton: false,
          timer: 1500
        })</script>";
    } 

    
        public function alertInputCode($mensaje,$verificar,$var,$controller,$action){
          echo "<script>swal({
  title: '$mensaje',
  input: 'text',
  showCancelButton: true,
  confirmButtonText: 'confirmar',
  preConfirm: (codigo) => {
    return new Promise((resolve) => {
      setTimeout(() => {
        if (codigo == '$verificar') {
          peticionAjax({'$var':codigo},'$controller','$action','post');
        }else{
          swal('ERROR','intente de nuevo por favor', 'error')
        }
        
        resolve()
      }, 20)
    })
  },
}).then((result) => {
  if (result.value) {
    alert('bien');
  }
})</script>";
        }

public function alertInput($mensaje,$var,$controller,$action){
          echo "<script>swal({
  title: '$mensaje',
  input: 'password',
  showCancelButton: true,
  confirmButtonText: 'confirmar',
  preConfirm: (codigo) => {
    return new Promise((resolve) => {
      setTimeout(() => {
          peticionAjax({'$var':codigo},'$controller','$action','post');
        
        resolve()
      }, 20)
    })
  },
}).then((result) => {
  if (result.value) {
    alert('bien');
  }
})</script>";
        }

    public function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}

    public function ObtenerDepartamentos(){
        $departamento=new departamento($this->adapter);
        $resultado=$departamento->getAll();
        $_SESSION["departamentos"]=$resultado;
      }

    public function ObtenerCanasta(){
        $canasta=new canasta($this->adapter);
        if(isset($_SESSION["idUser"])){
        $canasta->setCanastaUser($_SESSION["idUser"]);
      }
        $result=$canasta->mostrarProductos();
        $_SESSION["canasta"]=$result;
      }

      public function Paginacion($class,$tam,$page,$where,$fun,$param){
    $tamañoPag=$tam;
    $empezar=($page-1)*$tamañoPag;
    $class->setLimit("0,1000000");
    $class->setWhereAnd($where);
    $res=$class->$fun($param); 
    $totalpag=ceil(count($res)/$tamañoPag);
    return $totalpag;
}


    }

?>
