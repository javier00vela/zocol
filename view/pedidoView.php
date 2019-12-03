<html>
<head>
<link rel="stylesheet" type="text/css" href="src/css/opcStyleCSS.css">
<script type="text/javascript" src="src/js/validarMisProductos.js"></script>
<script type="text/javascript" src="src/js/validarPedido.js"></script>
</head>
<div class="misProductos container-fluid text-center">
	<div class="row">
		<div class=" divOpc  col-12 bg-faded">
			<div class="contenido">
			<h3 class="titulo text-center">productos</h3>
<div class="container-fluid">
	<div class="row">
		<div class="col-2 ">
			nombre
		</div>
		<div class="col-1 ">
			cantidad
		</div>
		<div class="col-2 ">
			subtotal
		</div>

		<div class="col-1 ">
			iva+sistema
		</div>
		<div class="col-1 ">
			flete
		</div>
		<div class="col-1 ">
			 total precio
		</div>
		<div class="col-2 ">
			transportador
		</div>
		<div class="col-1 ">
			peso Total
		</div>
		<div class="col-1 ">
			tipo peso
		</div>
	</div>
</div>

<div class="container-fluid text-center">
<?php $cont=0;?>
<?php foreach ($flete as $flt){
$fle[] = $flt[$cont];
$dest[] = $flt["DepartamentoDestino"];
$precioFlte[] = $flt["id_flete"];
$precio[] = $flt["precioFlete"];
 } ?>

<?php  foreach ($_SESSION["canasta"] as $pedido) {

	?>
	<div class="row">
		<div class="col-2 ">
			<input type="hidden" id="depDestino<?php echo $cont ?>" value="<?php echo $dest[$cont] ?>">
			<input type="hidden" id="depOrigen" value="<?php echo $departamento ?>">
			<input class="idProducto<?php echo $cont ?> " type="hidden" value="<?php echo $pedido["fk_producto"] ?>" >
			<input class="nombre form-control"  type="text" value="<?php echo $pedido["nombre"] ?>">
		</div>
		<div class="col-1 ">
			<input class="cantidad form-control" id="cantidad<?php echo $cont ?>" type="text" value="<?php echo $pedido["pedidoCantidad"] ?>">
		</div>
		<div class="col-2 ">
			<input class="precio<?php echo $cont ?> form-control"  type="text" value="<?php echo $pedido["precio"]*$pedido["pedidoCantidad"] ?>">
		</div>

		<div class="col-1 ">
			<input class="iva<?php echo $cont ?> form-control"  type="text" value="<?php echo $pedido["iva"]+10 ?>%">
		</div>
		<div class="col-1 ">
			<input class="flete<?php echo $cont ?> form-control" type="text" value="<?php echo $fle[$cont] ?>">
		</div>
		<div class="col-1 ">
			<input class="total<?php echo $cont ?> form-control" type="text" value="<?php echo (($pedido["precio"]*$pedido["pedidoCantidad"])*($pedido["iva"]+10/100))+($pedido["precio"]*$pedido["pedidoCantidad"])+$precio[$cont]  ?>">
		</div>
		<div class="col-2 ">
			<select  class="trans<?php echo $cont ?> form-control" id="trans<?php echo $cont ?>" data-id="<?php echo $cont ?>" >
				<?php echo $tran[$cont] ?>
			</select>

		</div>
		<div class="col-1 ">
			 
			<input type="hidden" id="<?php echo 'id'.$pedido['id_producto'] ?>"  value="<?php echo $pedido['fk_unidadMedida'] ?>">
			<input type="hidden" class="<?php echo 'flete'.$pedido['id_producto'] ?>"  value="<?php echo $precioFlte[$cont] ?>">
			<input class="peso<?php echo $cont ?> form-control" type="text" value="<?php echo $pedido['peso']*$pedido["pedidoCantidad"] ?>">
		</div>
		<div class="col-1 ">
			<select class="Tpeso form-control" type="text" disabled  >
				<option value="1">libra</option>
				<option  selected value="2">kilogramos</option>
				<option  value="3">tonelada</option>
			</select>
		</div>

	</div>
<?php $cont++ ; }  ?>
<input type="hidden" id="cont" value="<?php echo $cont ?>">
</div>
</div>
</div>
<br>&nbsp </br>
</div>
  <div class="barra container-fluid">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
<br>&nbsp </br>
		<div class=" col-12 ">
<div class="row">
	<div class="container">
		<p><button class="btn btn-success" id="confirmar">Confirmar</button></p>
	</div>
				</div>

			</div>
		</div>
	</div>
</div>
</div>
</html>
