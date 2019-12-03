<html>
<head>
	<link rel="stylesheet" type="text/css" href="src/css/tablasCSS.css">
	<script  src="src/js/validarTablas.js"></script>
</head>
<div class="card contenedor">
<h1 class="titulo text-center">VENTAS</h1>
<?php if(!isset($_SESSION)){ session_start(); } 
if (count($_SESSION["secVentas"]) != 0) { ?>
  <table>
  	<thead>
	<div class="container-fluid">
		<div class="row text-center">
			<div class="col-3">
				<tr><th><span class="icon-leaf"> Nombre </span></th>
			</div>
			<div class="col-3">
					<th><span class="icon-clock"> Fecha</span></th>
			</div>
			<div class="col-3">
					<th><span class="icon-star-full"> Estado Pedido</span></th>
			</div>
			<div class="col-3">
					<th><span class="icon-wrench"> opción </span></th>
			</div>
				</tr>
		</div>
	</div>
	</thead>	
</table>		
		<?php foreach ($_SESSION["secVentas"] as $product) { ?> 
		
  <table>
  	<tbody>
	<div class="container-fluid">
		<div class="row text-center">
		
				<div class="col-3 ">
					<label><?php echo $product["nombre"] ?><label>
				</div>
				<div class="col-3">
					<label><?php echo $product["fechapedido"] ?><label>
				</div>
				<div class="col-3">
					<label><?php echo $product["Nombre_estado"] ?><label>
				</div>
				<div class="col-3">
					<label><button class=" btnDetalles btn btn-success" data-id="<?php echo $product["id_pedido"]."-"."3"."-".$product["fk_producto"] ?>">detalles</button>
				</div>	
				
				
		</div>
	</div>	
	</tbody>
	</table>
	<br>	
	<br>	
	<br>	


	<?  }  ?>

<?php } } else{ ?>
<div class="contenedor container-fluid  ">
	<div class="cuadro row">
		<div class="vacio col-12 text-center ">
			<h1 class="textoCanasta">NO SE HA REALIZADO NINGUNA VENTA</h1>
			<img class="emptyImage" src="src/images/sys/canastaVacia.png">
		</div>			
	</div>
</div>
<?php } ?>
</html>