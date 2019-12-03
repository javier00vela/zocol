$(function(){
	$("#cancelarPedido").click(function(){
		var id =  $(this).attr("data-id");
		json = {"idPedido":id};
		peticionAjax(json,"pedido","cancelarPedido","post");
	});
});