<html>
<div class="contenedor">
<h1 class="titulo text-center">REPORTES VEHICULO</h1>
<script type="text/javascript"  src="src/libs/char/Chart.bundle.js"></script>
<script type="text/javascript"  src="src/js/reportes.js"></script>
<?php if(!isset($_SESSION)){ session_start(); } ?>
<div class="container-fluid">
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
			<input type="hidden" class="cantidadPedido" value="<?php echo count($_SESSION["repPedidosVehiculo"]) ?>" >
			<?php for ($i=0; $i < count($_SESSION["repPedidosVehiculo"]) ; $i++){ ?>
			<input type="hidden" class="pedidoVal<?php echo $i ?>"  value="<?php echo  $_SESSION["repPedidosVehiculo"][$i] ?>">
			<?php } ?>
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
			<!--
				<div class="col-6 text-center">
					<button class="btn btn-danger">DESCARGAR ESTE REPORTE </button>
				</div>
				<div class="col-6 text-center">
					<button class="btn btn-primary">DESCARGAR ESTE REPORTE </button>
				</div>
			-->
	</div>
	</div>
</div>
</html>