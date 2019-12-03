$(function(){

ubi = $("#ubicacion").attr("value");
array = ubi.split(",");
var divMapa = document.getElementById('mapa');
navigator.geolocation.getCurrentPosition(fn_ok,fn_mal);
function fn_mal(){
}
function fn_ok(rta){
 lat = array[0];
 lon = array[1];

	var gLatLon = new google.maps.LatLng( lat, lon);
	var objConfig = {
		zoom:7,
		center:gLatLon
	}
	var gMapa =new google.maps.Map( divMapa,objConfig);
}

$(".agregar").click(function(){

 var vale = $(this).attr("id");
 var array = vale.split(",");
 var valor = $("#quantity_value").html();
	var ajax = {"idProducto":array[0],"cantidad":valor,"precio":array[1],"id":vale};
	peticionAjax(ajax,"canasta","agregar","post");

});


});