$(function(){

$(".modificar").click(function(){
val = $(this).attr("id");
$(this).attr("class","completar btn btn-success");
$(this).html("completar");
$("#id"+val).removeAttr("disabled");
 $(this).on("click",function(){
val = $(this).attr("id");
$(this).attr("class","modificar btn btn-primary");
$(this).html("modificar");
$("#id"+val).prop("disabled",true);
 valor = $("#id"+val).attr("data-id-"+val);
ajax = {"id":val,"cant":valor};
peticionAjax(ajax,"canasta","modificar","post");
 });
});


$(".cantidad").mouseover(function(){
$(this).change(function(){
 res = $(this).val();
 $(this).attr("data-id-"+val,res);
 valor = $(this).attr("data-id-"+val);
});
});


$(".borrar").click(function(){
id = $(this).attr("id");
var ajax = {"id":id};
//console.log(val);
peticionAjax(ajax,"canasta","borrar","post");
});


$("#continuar").click(function(){
peticionAjax("","canasta","continuar","get");
});

});





