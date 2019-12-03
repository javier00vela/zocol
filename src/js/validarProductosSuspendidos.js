$(function(){
 $(".imageProduct").css({"webkit-filter":"grayscale(100%)"});

/*
$(".eliminar").click(function(){
id =  $(this).attr("id");
ajax={"id":id};
peticionAjax(ajax,"Producto","eliminar","post");
});
*/
$(".activar").click(function(){
id =  $(this).attr("id");
ajax={"id":id};
peticionAjax(ajax,"Producto","activar","post");
});
 
});