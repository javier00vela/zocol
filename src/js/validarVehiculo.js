$(function(){
$(".divOpc").css({"position":"relative","opacity": 0, "left":"+=1200"});
 $(".divOpc").animate({left:0, opacity:10},600);

	$("#imgPerfil").click(function(){
  if(!$("#img").hasClass("img")){
    $(".divOpc").append("<input id='img' class='img' name='img' type='file'>");
  }
 	$("#img").trigger("click");
  $("#img").css({'display':'none'});
 	$("#imgPerfil").after(function(){
  $('#img').change(function(e) {    
      addImage(e);
      });
    });
  });


	$("#vehiculo").click(function(){
		  $(".contenedor").remove();
    $(".contenido").append("<div class='contenedor'></div>");
    $(".contenedor").load("view/vehiculo/formularioVehiculoView.php" );
    $(".contenedor").css({"position":"relative","opacity": 0, "left":"+=1200"});
 $(".contenedor").animate({left:0, opacity:10},600);
	});

	$("#notificaciones").click(function(){
		$(".contenedor").remove();
		$(".contenido").append("<div class='contenedor'></div>");
		$(".contenedor").load("view/vehiculo/pedidosVehiculoView.php" );
    $(".contenedor").css({"position":"relative","opacity": 0, "left":"+=1200"});
 $(".contenedor").animate({left:0, opacity:10},600);
	});
	$("#pedidos").click(function(){
		$(".contenedor").remove();
		$(".contenido").append("<div class='contenedor'></div>");
		$(".contenedor").load("view/vehiculo/reportesVehiculoView.php" );
    $(".contenedor").css({"position":"relative","opacity": 0, "left":"+=1200"});
 $(".contenedor").animate({left:0, opacity:10},600);
	});

 });
 function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;
    
      if (!file.type.match(imageType))
       return;
      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }

 function fileOnload(e) {
   result=e.target.result;
  $('#imgPerfil').attr("src",result);
}