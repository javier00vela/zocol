<html>
<head>
<script type="text/javascript" src="src/js/validarMisProductos.js"></script>
</head>
<div class="misProductos container">
	<div class="container">
		<div class="row">
	<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>Mis Productos</h4>
                <span>&nbsp</span>
              </div>
              <div class="icon">
                <i class="fa fa-car"></i>
              </div>
              <a href="#" id="productos" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Agregar Producto</h4>
                <span>&nbsp</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" id="agregar" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4> Suspendidos</h4>
                <span>&nbsp</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" id="suspendidos" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h4 style="color: white">Reportes Ventas </h4>
                <span>&nbsp</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" id="ventas" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h4 style="color: white">Reportes Pedidos</h4>
                <span>&nbsp</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" id="pedidos" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
</div>
<div class=" divOpc col-12 bg-faded">
<div class="contenido">
	<div class="contenedor"><?php require_once "view/misProductos/misProductosView.php"; ?></div>
</div>
	</div>
</div>
</div>
</html>