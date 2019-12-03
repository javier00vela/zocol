$(function(){

$(".btnDetalles").click(function(){
var id =$(this).attr("data-id");

var data = id.split("-");
var json = {"id":data[0],"tipo":data[1] , "producto":data[2] }; 
peticionAjax(json,"pedido","detallesPedido","post"); 
});
});