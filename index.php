<?php 
//Configuración global
require_once 'config/global.php';
//Base para los controladores
require_once 'core/ControladorBase.php';
//Funciones para el controlador frontal
require_once 'core/ControladorFrontal.func.php';
ob_start();
error_reporting(0);
//iniciar sesion en el proyecto
session_start();
//Carga al encabezado 
require_once "view/headerView.php";
//carga el controlador y la accion

if(isset($_GET["controller"])){
    $controllerObject=cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObject);
}else{
    $controllerObject=cargarControlador(CONTROLADOR_DEFECTO);
    lanzarAccion($controllerObject);
}
//carga al pie de pagina
require_once "view/footerView.php";
?>
