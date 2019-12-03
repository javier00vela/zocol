$(function(){




	$("#productos").click(function(){
		peticionAjax("","header","misProductos","get");
	});

	$("#agregar").click(function(){
		$(".contenedor").remove();
		$(".contenido").append("<div class='contenedor'></div>");
		$(".contenedor").load("view/misProductos/publicarProductoView.php" );
		$(".contenedor").css({"position":"relative","opacity": 0, "left":"+=1200"});
 $(".contenedor").animate({left:0, opacity:10},600);
	
	});
	$("#suspendidos").click(function(){
		$(".contenedor").remove();
		$(".contenido").append("<div class='contenedor'></div>");
		$(".contenedor").load("view/misProductos/suspendidosView.php" );
		$(".contenedor").css({"position":"relative","opacity": 0, "left":"+=1200"});
 $(".contenedor").animate({left:0, opacity:10},600)
	});
	$("#ventas").click(function(){
		$(".contenedor").remove();
		$(".contenido").append("<div class='contenedor'></div>");
		$(".contenedor").load("view/misProductos/reportesVentasView.php" );
		$(".contenedor").css({"position":"relative","opacity": 0, "left":"+=1200"});
 $(".contenedor").animate({left:0, opacity:10},600)
	});
	$("#pedidos").click(function(){
		$(".contenedor").remove();
		$(".contenido").append("<div class='contenedor'></div>");
		$(".contenedor").load("view/misProductos/reportesPedidosView.php" );
		$(".contenedor").css({"position":"relative","opacity": 0, "left":"+=1200"});
 $(".contenedor").animate({left:0, opacity:10},600)
	});

	$(".modificar").click(function(){
	 id = $(this).attr("id");
	ajax={"id":id};
peticionAjax(ajax,"Producto","modificarProducto","post");
	});

	$(".suspender").click(function(){
	 id = $(this).attr("id");
	ajax={"id":id};
peticionAjax(ajax,"Producto","suspenderProducto","post");

	});


$(".pag").click(function(){
	id = $(this).attr("id");
	ajax = {"pag":id};
peticionAjax(ajax,"Header","misProductos","get");
	
});


});