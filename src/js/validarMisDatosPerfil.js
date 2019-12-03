$(function(){
 mostrarCiudades();
  $("#imgProfile").click(function(){
  if(!$("#img").hasClass("img")){
    $(".imagen").append("<input id='img' class='img' name='img' type='file'>");
  }
  $("#img").css({'display':'none'});
  $("#img").trigger("click");
  $("#imgProfile").after(function(){
  $('#img').change(function(e) {    
      addImage(e);
      });
    });
  });
});

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
  $('#imgProfile').attr("src",result);
}

function mostrarCiudades(){
   $("#cbx_departamento").change(function () {
          $("#cbx_departamento option:selected").each(function () {
            id_departamento = $(this).val();
            $.post("index.php?controller=Ciudad&action=ciudad", { id_departamento: id_departamento }, function(data){
              console.log(data.split("|-|")[1]);
              $("#cbx_ciudad").html(data.split("|-|")[1]);
            });            
          });
        });
}