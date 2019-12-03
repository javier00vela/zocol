	<?php 
			
			foreach ($result as  $producto) {
					$id= $producto["id_producto"];
					$foto= $producto["foto_producto"];
					$nombreProducto=$producto["nombre"];
					$user=$producto["fk_usuario"];
					$precio=$producto["precio"];
					$cantidad=$producto["cantidad"];
					$ventas=$producto["ventas"];
					$descripcion = $producto["descripcion"];
			}
			foreach ($departamento as $dep) {
				$ubicacion = $dep["ubicacion"];
				$departamento = $dep["nombre_departamento"];
			}
			?>

<link rel="stylesheet" type="text/css" href="src/css/single_styles.css">
<link rel="stylesheet" type="text/css" href="src/css/single_responsive.css">
<body>

<div class="super_container">

	<!-- Header -->

	

	

	<!-- Hamburger Menu -->

	

	<div class="container ">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.html">Inicio</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Producto</a></li>
					</ul>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
					
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(<?php echo $foto ?>)"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
						<h2><?php echo strtoupper($nombreProducto)  ?></h2>
						<p> <?php echo $descripcion ?></p>
					</div>
					<input type="hidden" id="ubicacion" value="<?php echo $ubicacion ?>">
					<div class="map img-fluid" id="mapa" style="width: 100%;height: 200px;" ></div>
					<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
						<span class="ti-truck"></span><span><?php echo $departamento ?></span>
					</div>
					<div class="product_price">$<?php echo $precio ?> - <?php echo $ventas ?> vendidos</div>
					
					<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
						<span>Cantidad:</span>
						<div class="quantity_selector">
							<span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
							<span id="quantity_value">1</span>
							<span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
						</div>
						<div class="red_button add_to_cart_button"><a href="#" id="<?php echo $id.','.$precio ?>"" class="agregar">Agregar</a></div>
						<div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- Tabs -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBSB0rjwAKMTvxmHT9C30-94i3Ii35rwu8"></script>
<script src="src/bootstrap/js/bootstrap.min.js"></script>
  <script src="src/bootstrap/js/popper.js"></script>
<script src="src/libs/Isotope/isotope.pkgd.min.js"></script>
<script src="src/libs/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="src/libs/easing/easing.js"></script>
<script src="src/libs/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="src/js/single_custom.js"></script>
<script type="text/javascript" src="src/js/agregarProducto.js"></script>