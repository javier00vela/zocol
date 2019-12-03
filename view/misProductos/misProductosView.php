<html>
<div class="contenedor">
<div class="container">
	<div class="row text-center">
 
	<?php 
	if(!isset($_SESSION)){ 
    session_start(); 
}
	
if(count($_SESSION["misProductos"])!=0){
	foreach ($_SESSION["misProductos"] as $product) {

?>
<div class='espacio col-3 bg-faded'>
	<div class='card  '>
 
	<a href="<?php echo $product['foto_producto'] ?>" data-lightbox="galeria" ><img class='imageProduct img-responsive' src='<?php echo $product['foto_producto'] ?>' style="width: 200px;height: 200px;" rel="<?php echo $product['foto_producto']?>"></a>
	<?php echo $product['nombre']  ?>
    <br></br>

    <button class="modificar btn btn-success" id="<?php echo $product['id_producto'] ?>" type='submit'><span class="icon-cog"> Modificar</span> </button>
    <button class='suspender btn btn-danger' id="<?php echo $product['id_producto'] ?>" type='submit'><span class="icon-cross"> Suspender</span> </button>
	</div>
	</div>
	<?php } ?>
<div class="container text-center ">
		<nav aria-label="Page navigation ">
  <ul class="pagination ">
<?php for ($i=1; $i <= $pagMisProductos ; $i++) { ?>
    <li  class='pag page-link' id="<?php echo $i ?>" role="button"><?php echo $i ?></a></li>
<?php } ?>
</ul>
</nav>
</div>
<?php }else{	?>
	<div class="contenedor container-fluid  ">
	<div class="cuadro row">
		<div class="vacio col-12 text-center bg-faded">
			<h1 class="textoCanasta">NO SE HA PUBLICADO PRODUCTOS</h1>
			<img class="emptyImage" src="src/images/sys/canastaVacia.png">
		</div>			
	</div>
</div>
	<?php } ?>
</div>
</div>
</div>
</html>