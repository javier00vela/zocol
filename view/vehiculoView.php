<html>
<head>
<script type="text/javascript" src="src/js/validarVehiculo.js"></script>
</head>
<div class="container" >
	<div class="row">
	<div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Mi vehiculo</h3>
              </div>
              <div class="icon">
                <i class="fa fa-car"></i>
              </div>
              <a href="#" id="perfil" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Pedidos Vehiculo</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" id="notificaciones" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Reportes Pedidos</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" id="pedidos" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
</div>

	<div class="row">
		<div class=" divOpc col-12 ">
			<div class="card">
<div class="contenido">
	<div class="box">
	<div class="contenedor"><?php include "view/vehiculo/formularioVehiculoView.php"; ?></div>
	</div>
</div>
	</div>
</div>
</div>
</html>