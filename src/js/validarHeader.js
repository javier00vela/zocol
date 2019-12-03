$(function(){


$(".search").click(function(){
$("li").attr('class','invisible');
$("#search-input").attr('class','visible');
$("#search-input").html('<i class="sech fa fa-search"></i><input id="input-search-make" class="form-control">');
$("#search-input").animate({
  'width':'1090'
});

  $("#input-search-make").keypress(function(e){
     if(e.which == 13) {
            product= $("#input-search-make").val();
              ajax= {"product":product};
              peticionAjax(ajax,"header","buscar","get");
        }
  });


$("#input-search-make").animate({
  'width':'400',
  'margin-left':'50',
  'margin-top':'-30'
});
$(".sech").animate({
  'background':'gray',
  'margin-top':'10'
});
$(".sech").click(function(){
$("li").removeAttr('class');
$("#search-input").attr('class','invisible');
$(".sech").remove();
$("#search-input").animate({
  'width':'0'
});
});


});


  $("#input-search-make").keypress(function(e){
     if(e.which == 13) {
            product= $("#input-search-make").val();
              ajax= {"product":product};
              peticionAjax(ajax,"header","buscar","get");
        }
  });

$("#inicio").click(function(){
 	peticionAjax("","header","index","get");
 });

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
    $("#cat3").click(function(){
    	 	ajax={"product":"10"};
 	peticionAjax(ajax,"header","catalogo","get");
});



$("#manual").click(function(){
  peticionAjax("","header","manual","get");
 });

 $("#login").click(function(){
 	peticionAjax("","header","login","get");
});

 $("#canasta").click(function(){
 	peticionAjax("","header","canasta","get");
});

  $("#misProductos").click(function(){
 	peticionAjax("","header","misProductos","get");
});

  $("#vehiculo").click(function(){
 	peticionAjax("","header","vehiculo","get");
});

   $("#perfil").click(function(){
 	peticionAjax("","header","perfil","get");
});

  $("#salir").click(function(){
 	peticionAjax("","header","salir","post");
});

$("#buscar").click(function(){
 	product= $("#product").val();
 	ajax= {"product":product};
 	peticionAjax(ajax,"header","buscar","get");
});
 });
