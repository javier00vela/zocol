$(function(){
  $(".publicar").click(function(){
  recibirDatos();
validarVacioDatos();
if (nombre != "" && tipo != "" && cant != "" && iva != "" && precio!= "" && Tpeso !="" && estado != "" && peso != "" && foto != ""  && descripcion!=""){
  $(".publicar").click(function(){
   res = image[0].files[0];
   var datos = new FormData($("#publicarProducto")[0]);
   datos.append("producto",nombre);
   datos.append("img",res);
   datos.append("iva",iva);
   datos.append("precio",precio)
   datos.append("cantidades",cant);
   datos.append("peso",peso);
   datos.append("estado",estado);
   datos.append("Tpeso",Tpeso);
   datos.append("Tproducto",tipo);
   datos.append("descripcion",descripcion);
  
   $.ajax({
                data:  datos,
                url:   'index.php?controller=producto&action=publicar',
                type: "post",
                contentType: false,
                processData: false,
                success:  function (response) {
                  $("#cuerpo").html(response);

                }
        });

 });
 }
});




 
 

function validarVacioDatos(){
  
  if (nombre==""){
      $("#producto").css({'border-style':'solid','border-color':'red'});
    }
    if (tipo==""){
      $("#Tproducto").css({'border-style':'solid','border-color':'red'});
    }
  if (cant==""){
      $("#cantidades").css({'border-style':'solid','border-color':'red'});
    }
    if (iva==""){
      $("#iva").css({'border-style':'solid','border-color':'red'});
    }
    if (precio==""){
      $("#precio").css({'border-style':'solid','border-color':'red'});
    }
    if (peso == "") {
      $("#peso").css({'border-style':'solid','border-color':'red'});
    }
    if (Tpeso==""){
      $("#Tpeso").css({'border-style':'solid','border-color':'red'});
    }
    if (estado==""){
      $("#estado").css({'border-style':'solid','border-color':'red'});
    }
    if (foto==null){
      $("#imgPublicar").css({'border-style':'solid','border-color':'red'});
    }
    if (descripcion==""){
      $("#descripcion").css({'border-style':'solid','border-color':'red'});
    }
    
    }



 $("#imgPublicar").click(function(){
  if(!$("#img").hasClass("img")){
    $(".imagen").append("<input id='img' class='img' name='img' type='file'>");
  }
 	$("#img").trigger("click");
  $("#img").css({'display':'none'});
 	$("#imgPublicar").after(function(){
  $('#img').change(function(e) {    
    e.preventDefault();
      addImage(e);
      });
    });
  });
});

function recibirDatos(){
  nombre = $("#producto").val();
  tipo = $("#Tproducto").val();
  cant = $("#cantidades").val();
  iva = $("#iva").val();
  precio = $("#precio").val();
  Tpeso = $("#Tpeso").val();
  peso = $("#peso").val();
   estado = $("#estado").val();
    foto = $("#img").val();
    descripcion = $("#descripcion").val();
   image = $("#img");
}



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
  $('#imgPublicar').attr("src",result);
 }
