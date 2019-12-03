$(function(){
	$(".ver").click(function(){
		id = $(this).attr("id");
		console.log(id);
	ajax = {"id":id};
peticionAjax(ajax,"producto","verProducto","post");
});

	$(".pag5").click(function(){
		pag = $(this).attr("id");
	
	ajax = {"page5":pag};
peticionAjax(ajax,"header","index","get");
});

	$(".pag4").click(function(){
		pag = $(this).attr("id");
	
	ajax = {"page4":pag};
peticionAjax(ajax,"header","index","get");
});

	$(".pag3").click(function(){
		pag = $(this).attr("id");
	
	ajax = {"page3":pag};
peticionAjax(ajax,"header","index","get");
});

	$(".pag2").click(function(){
		pag = $(this).attr("id");
	
	ajax = {"page2":pag};
peticionAjax(ajax,"header","index","get");
});

	$(".pag1").click(function(){
		pag = $(this).attr("id");
	
	ajax = {"page1":pag};
peticionAjax(ajax,"header","index","get");
});
});