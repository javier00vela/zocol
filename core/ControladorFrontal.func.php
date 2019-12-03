<?php
//FUNCIONES PARA EL CONTROLADOR FRONTAL

function cargarControlador($controller){
    $controlador=ucwords($controller).'Controller';
    $strController='controller/'.$controlador.'.php';
    if(!is_file($strController)){

        $strController='controller/'.ucwords(CONTROLADOR_DEFECTO).'Controller.php';   
    }
        

    require_once $strController;

    $controllerObject=new $controlador();

    return $controllerObject;

}

function cargarAccion($controllerObject,$action){
    $accion=$action;

    $controllerObject->$accion();
}

function lanzarAccion($controllerObject){

    if(isset($_GET["action"]) && method_exists($controllerObject, $_GET["action"])){
        cargarAccion($controllerObject, $_GET["action"]);
    }else{
        cargarAccion($controllerObject, ACCION_DEFECTO);
    }
}

?>
