<html>
<head>
<link rel="stylesheet" type="text/css" href="src/css/canastaCSS.css">

<link rel="stylesheet" type="text/css" href="src/css/categories_responsive.css">
<script type="text/javascript" src= "src/js/validarCanastas.js"></script>
</head>
<div class="container-fluid ">
		<div class="row">
			<div class="col-12">

				
<?php if(count($_SESSION["canasta"])>0){ ?>
<div class="container-fluid">
<p>
<div class="row " >
		<div class="txt1 col-2  ">
		<h6 class="text-center"><p style="color: white">Foto</p></h6>
		</div>
		<div class="txt2 col-3 ">
			<h6 class="text-center"><p style="color: white">nombre</p></h6>
		</div>
		<div class="txt3 col-3 ">
			<h6 class="text-center"><p style="color: white">cantidad</p></h6>
		</div>
		<div class="txt4 col-2 ">
			<h6 class="text-center"><p style="color: white">precio</p></h6>
		</div>
		
		<div class="txt5 col-2 align-text-bottom bg-faded" >
			<h6 class="text-center" style="color: white">opciones</h6>
		</div>
		<hr>	
	</div>
	<?php foreach ($_SESSION["canasta"] as $canasta) {  ?>
</p>
	<div class="row">


<div class="col-2 text-center bg-faded">
<img class="rounded-circle" width="100" height="100" src="<?php echo $canasta["foto_producto"] ?>"  >
</div>
<div class="nombre col-3 bg-faded">
	<h6 class="nombre text-center"><label><?php echo $canasta["nombre"]?></label></h6>
</div>
<div class="col-3 bg-faded">
	<h6 class="text-center"><input  class="cantidad form-control" type="text" id="<?php echo "id".$canasta["id_producto"] ?>"  disabled  data-id-<?php echo $canasta["id_producto"] ?> value="<?php echo $canasta["pedidoCantidad"] ?>"></h6>
</div>
<div class="col-2 bg-faded">
	<h6 class="precio text-center"><label>$<?php echo $canasta["precio"]?></label></h6>
</div>
<div class="opciones col-2 text-center bg-faded" >
		<button class="borrar btn btn-danger " id="<?php echo $canasta["id_producto"] ?>" >borrar</button>
		<button class="modificar btn btn-primary" id="<?php echo $canasta["id_producto"] ?>">modificar </button>
</div>
	</div>
	<hr style="background: #24B527">
	<?php } ?>
		<div class="container">
			<div class="row">
				<div class="col-4">
				
				</div>
				<div class="col-4 text-center ">
					<p><button class="btn btn-success" id="continuar" >Continuar </button></p>
				</div>
				<div class="col-4">
				</div>
			</div>
		</div>
</div>
<?php }else{ ?>
<div class="contenedor container-fluid  ">
	<div class="cuadro row">
		<div class="vacio col-12 text-center bg-faded">
			<h1 class="textoCanasta">NO HAY PRODUCTOS EN LA CANASTA</h1>
			<img class="emptyImage" src="src/images/sys/canastaVacia.png">
		</div>			
	</div>
</div>


<?php } ?>
</div>
</html>


