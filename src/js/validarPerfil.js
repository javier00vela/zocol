$(function(){

	$(".divOpc").css({"position":"relative","opacity": 0, "left":"+=1200"});
 $(".divOpc").animate({left:0, opacity:10},600);


	$("#infPerfil").click(function(){
		$(".contenedor").remove();
		$(".contenido").append("<div class='contenedor'></div>");
		$(".contenedor").load("view/perfil/datosPerfilView.php" );
		$(".contenedor").css({"position":"relative","opacity": 0, "left":"+=1200"});
 $(".contenedor").animate({left:0, opacity:10},600);
	});

	$("#pedidos").click(function(){
		$(".contenedor").remove();
		$(".contenido").append("<div class='contenedor'></div>");
		$(".contenedor").load("view/perfil/pedidosPerfilView.php" );
		$(".contenedor").css({"position":"relative","opacity": 0, "left":"+=1200"});
 $(".contenedor").animate({left:0, opacity:10},600);
	});
	$("#ventas").click(function(){
		$(".contenedor").remove();
		$(".contenido").append("<div class='contenedor'></div>");
		$(".contenedor").load("view/perfil/ventasPerfilView.php" );
		$(".contenedor").css({"position":"relative","opacity": 0, "left":"+=1200"});
 $(".contenedor").animate({left:0, opacity:10},600);
	});
	$("#cancelados").click(function(){
		$(".contenedor").remove();
		$(".contenido").append("<div class='contenedor'></div>");
		$(".contenedor").load("view/perfil/canceladosPerfilView.php" );
		$(".contenedor").css({"position":"relative","opacity": 0, "left":"+=1200"});
 $(".contenedor").animate({left:0, opacity:10},600);
	});
});

 