<html>
<script type="text/javascript" src="src/js/reportesVentas.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script type="text/javascript"  src="src/libs/char/Chart.bundle.js"></script>
<h2 class="titulo text-center">REPORTES VENTAS</h2>
<?php if(!isset($_SESSION)){ session_start(); } $cont=0; ?>
<div class="container">
	<h2 class="text-center">PEDIDOS REALIZADOS EN PERIODOS DE TIEMPO</h2>
	<div class="row">
		<div class="col-6">
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Graficas Barras</h3>

                <div class="card-tools">
                  
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
			<input type="hidden" class="cantidadPedido" value="<?php echo count($_SESSION["reportVent"]) ?>" >
			<?php foreach ($_SESSION["reportVent"] as $value) { ?>
			<input type="hidden" class="nombre<?php echo $cont ?>"  value="<?php echo  $value["nombre"] ?>">
			<input type="hidden" class="ventas<?php echo $cont ?>"  value="<?php echo  $value["ventas"] ?>">
			<?php $cont++; }  ?>
			<canvas id="bar-chart"  width="400" height="400" style="width: 400;height: 400;"></canvas>
		</div>
		 </div>
              </div>
              <!-- /.card-body -->
            </div>
		<div class="col-6">
				<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Graficas Barras</h3>

                <div class="card-tools">
                  
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
			<canvas id="circle-chart"  width="400" height="400" style="width: 400;height: 400;"></canvas>
		</div>
		</div>
		 </div>
              </div>
	</div>
</div>
</html>