<html>
<script type="text/javascript" src="src/js/validarProductosSuspendidos.js"></script>
<div class="container">
	<div class="row text-center">
	<?php 
	if(!isset($_SESSION)){ 
    session_start(); 
    $result=$_SESSION["suspendidos"];
}	
if(count($_SESSION["suspendidos"])!=0){
	foreach ($_SESSION["suspendidos"] as $product) {

?>
<div class='card col-3 '>
	<div class='card  '>
	<a href="<?php echo $product['foto_producto'] ?>" data-lightbox="galeria" ><img class='imageProduct img-responsive' style="width: 300px;height: 300px;" src='<?php echo $product['foto_producto'] ?>'  rel="<?php echo $product['foto_producto']?>"></a>
	<?php echo $product["nombre"] ?>
    <input type='hidden' name='id' value='<?php  echo $product['id_producto'] ?>'>
    <input type='hidden' name='nombre' value='<?php echo $product['nombre'] ?>'>
    <br></br>
    <button class='activar btn btn-success' id="<?php  echo $product['id_producto'] ?>"><span class="icon-checkmark" > activar</span></button>
	</div>
	</div>
<?php }  ?>

<?php
}else{
	?>
<div class="card container-fluid  ">
	<div class="cuadro row">
		<div class="vacio col-12 text-center ">
			<h1 class="textoCanasta">NO HAY PRODUCTOS SUSPENDIDOS</h1>
			<img class="emptyImage" src="src/images/sys/canastaVacia.png">
		</div>			
	</div>
</div>
	<?php
	
}
?>
</div>
</div>
</html>