<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="src/css/categories_styles.css">
<link rel="stylesheet" type="text/css" href="src/css/categories_responsive.css">
</head>

<body>


	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.html">Inicio</a></li>
						<li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Catalogo</a></li>
					</ul>
				</div>

				<!-- Sidebar -->

				<div class="sidebar">
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Categorias</h5>
						</div>
						<ul class="sidebar_categories">
							<li><a id="agricola" href="#">Agricolas</a></li>
							<li><a id="ganadero" href="#">Ganaderos</a></li>
							<li><a id="semillas" href="#">Semillas</a></li>
							<li><a id="lacteos" href="#">lacteos</a></li>
							<li><a id="fertilizantes" href="#">fertilizantes</a></li>
							<li><a  id="otros" href="#">otros</a></li>
						</ul>
					</div>

					<!-- Price Range Filtering -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Filtro de Precio</h5>
						</div>
						<p>
							<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
						</p>
						<div id="slider-range"></div>
						<div class="filter_button"><span>filtrar</span></div>
					</div>

					<!-- Sizes -->
					

			

				</div>

				<!-- Main Content -->

				<div class="main_content">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">
										<li>
											<span class="type_sorting_text">Ordenar</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Ordenar por Defecto</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Ordenar Precio</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Ordenar Nombre</span></li>
											</ul>
										</li>
										<li>
											<span>Mostrar</span>
											<span class="num_sorting_text">6</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>6</span></li>
												<li class="num_sorting_btn"><span>12</span></li>
												<li class="num_sorting_btn"><span>24</span></li>
											</ul>
										</li>
									</ul>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

								<!-- Product Grid -->

								<div class="product-grid">
						<?php  
								if(empty($result)){ ?>
	<h4 class="mensaje text-center" >no se ha encontrado productos relacioandos con <?php  echo $product ?> </h4>
	<?php }else{ ?>
								<?php foreach ($result as $product) {?>
									<div class="product-item men">
										<div class="product discount product_filter">
											<div class="product_image">
												<img class='imageProduct img-responsive' src='<?php echo $product['foto_producto'] ?>' rel="<?php echo $product['foto_producto']?>">
											</div>
											<div class="favorite favorite_left"></div>
										
											<div class="product_info">
												<h6 class="product_name"><a href="single.html"><?php echo ucfirst($product['nombre']);?></a></h6>
												<div class="product_price">$<?php echo $product['precio'] ?></div>
											</div>
										</div>
										<div  class="red_button add_to_cart_button"><a id='<?php echo $product['id_producto'] ?>' class="ver" href="#">Detalles Producto</a></div>
									</div>
								<?php } 
							} ?>
									

								</div>

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_bottom clearfix">
									<ul class="product_sorting">
										<li>
											<span>Mostrar:</span>
											<span class="num_sorting_text">04</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>01</span></li>
												<li class="num_sorting_btn"><span>02</span></li>
												<li class="num_sorting_btn"><span>03</span></li>
												<li class="num_sorting_btn"><span>04</span></li>
											</ul>
										</li>
									</ul>
									<span class="showing_results">Showing 1–3 of 12 results</span>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Benefit -->


</div>
<script type="text/javascript" src="src/js/validarCatalogo.js"></script>
 <script src="src/bootstrap/js/bootstrap.min.js"></script>
  <script src="src/bootstrap/js/popper.js"></script>
<script src="src/libs/Isotope/isotope.pkgd.min.js"></script>
<script src="src/libs/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="src/libs/easing/easing.js"></script>
<script src="src/libs/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="src/js/categories_custom.js"></script>
</body>

</html>

