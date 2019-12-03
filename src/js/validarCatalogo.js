$(function(){
	$("#agricola").click(function(){
		ajax={"product":"1"};
		peticionAjax(ajax,"header","catalogo","get");

	});

	$("#ganadero").click(function(){
		ajax={"product":"0"};
		peticionAjax(ajax,"header","catalogo","get");

	});

	$("#lacteos").click(function(){
		ajax={"product":"3"};
		peticionAjax(ajax,"header","catalogo","get");

	});

	$("#semillas").click(function(){
		ajax={"product":"4"};
		peticionAjax(ajax,"header","catalogo","get");

	});

	$("#fertilizantes").click(function(){
		ajax={"product":"5"};
		peticionAjax(ajax,"header","catalogo","get");

	});


	$("#otros").click(function(){
		ajax={"product":"2"};
		peticionAjax(ajax,"header","catalogo","get");

	});

	$("#todos").click(function(){
		ajax={"product":"3"};
		peticionAjax(ajax,"header","catalogo","get");

	});

	$(".pagin").click(function(){
		pag = $(this).attr("id");
		res = pag.split(",");
	ajax = {"page":res[0],"product":res[1]};
peticionAjax(ajax,"Header","catalogo","get");
});

	$(".ver").click(function(){
		id = $(this).attr("id");
	ajax = {"id":id};
peticionAjax(ajax,"producto","verProducto","post");
});
});