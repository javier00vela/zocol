<html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
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
                  <input type="hidden" class="cantidadPedido" value="<?php echo count($_SESSION["repPedidos"]) ?>" >
			<?php for ($i=0; $i < count($_SESSION["repPedidos"]) ; $i++){ ?>
			<input type="hidden" class="pedidoVal<?php echo $i ?>"  value="<?php echo  $_SESSION["repPedidos"][$i] ?>">
			<?php } ?>
			<canvas id="bar-chart"  width="400" height="400" style="width: 400;height: 400;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
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
                  <input type="hidden" class="cantidadPedido" value="<?php echo count($_SESSION["repPedidos"]) ?>" >
			<?php for ($i=0; $i < count($_SESSION["repPedidos"]) ; $i++){ ?>
			<input type="hidden" class="pedidoVal<?php echo $i ?>"  value="<?php echo  $_SESSION["repPedidos"][$i] ?>">
			<?php } ?>
			<canvas id="circle-chart"  width="400" height="400" style="width: 400;height: 400;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
			
		</div>
		
	</div>
</div>
<br>
		<br>
		<br>
		<br>		
	
	
<!--
<div class="contenedor container-fluid  ">
	<div class="cuadro row">
		<div class="vacio col-12 text-center bg-faded">
			<h1 class="textoCanasta">NO HAY REPORTES DE PEDIDOS</h1>
			<img class="emptyImage" src="src/images/sys/canastaVacia.png">
		</div>			
	</div>
</div>
-->

</html>