$(function(){
	algo = $("#cont").val();
	bloquearOpciones(algo);


	$("#confirmar").click(function(e){
		e.preventDefault();
		i = 0 ;
	 do{
	 	 trans = $(".trans"+i).val();
	 	 if($(".trans"+i).val() == 0 ){
	 		
	 	}
	 	var flete = $(".flete"+i).val();
	 	var subtotal = $(".precio"+i).val();
	 	var total = $(".total"+i).val();
	 	var id = $(".idProducto"+i).val();
	 	var peso = $(".peso"+i).val();
	 	var origen = $("#depOrigen").val();
	 	var cantidad = $("#cantidad"+i).val();
	 	var destino = $("#depDestino"+i).val();
	 	json = {"subtotal":subtotal , "total":total,"idProducto":id,"peso":peso,"trans":trans,"origen":origen,"destino":destino,"cantidad":cantidad , "flete":flete}
	 	console.log(json);
	 	if($(".trans"+i).val() == 0 ){
	$("#trans"+i).css({'border-style':'solid','border-color':'red'});
}else{
	if(flete != null || flete != ""){
	peticionAjax(json,"Pedido","crearPedido","post");
	}else{
		e.preventDefault();
	}
}
	 	
	 	i++;
	 }while(i != algo );
	});

	
	
});


function bloquearOpciones(cant){
	var i = 0 ;
	do{
	$(".cantidad").attr("disabled",true);
	$(".nombre").attr("disabled",true);
	$(".precio"+i).attr("disabled",true);
	$(".iva"+i).attr("disabled",true);
	$(".flete"+i).attr("disabled",true);
	$(".total"+i).attr("disabled",true);
	$(".peso"+i).attr("disabled",true);
		i++;
	 }while(i != cant );
}







