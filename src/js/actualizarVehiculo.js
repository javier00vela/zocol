$(function(){
  restriccionesFvehiculo();
    mostrarCiudades();
$("#actualizar").click(function(e){
  e.preventDefault();
  agregarContenido();
  validarVacio();
  if (capacidad != "" && Tpeso != "" && placa != ""  && refrigeracion!= ""  && ciudad != null ){
   //matricula = matricula[0].files[0];
   //soat = soat[0].files[0];
   //licencia = licencia[0].files[0];
   //prueba = prueba[0].files[0];
   var datos = new FormData($("#updateVehiculo")[0]);
   datos.append("capacidad",capacidad);
   datos.append("Tpeso",Tpeso);
   datos.append("placa",placa);
   datos.append("refrigeracion",refrigeracion);
   datos.append("ciudad",ciudad);
   datos.append("flete",flete);
   //datos.append("licencia",licencia);
   //datos.append("matricula",matricula);
   //datos.append("soat",soat);
   //datos.append("tecnoM",prueba);
   $.ajax({
                data:  datos,
                url:   'index.php?controller=vehiculo&action=actualizarVehiculo',
                type: "post",
                contentType: false,
                processData: false,
                success:  function (response) {
                  $("#cuerpo").html(response);

                }
        });
 }
 });

  });



function mostrarCiudades(){
	 $("#cbx_departamento").change(function () {
          $("#cbx_departamento option:selected").each(function () {
            id_departamento = $(this).val();
            $.post("index.php?controller=ciudad&action=ciudad", { id_departamento: id_departamento }, function(data){
              console.log(data.split("|-|")[1]);
              $("#cbx_ciudad").html(data.split("|-|")[1]);
            });            
          });
        });
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



 function validarVacio(){

  if(capacidad == ""){
    $("#capacidad").css({'border-style':'solid','border-color':'red'});
  }
  if(Tpeso == ""){
    $("#Tpeso").css({'border-style':'solid','border-color':'red'});
  }
  if(placa == ""){
    $("#placa").css({'border-style':'solid','border-color':'red'});
  }
if(refrigeracion == ""){
    $("#refrigeracion").css({'border-style':'solid','border-color':'red'});
  }
if(ciudad == null){
    $("#cbx_ciudad").css({'border-style':'solid','border-color':'red'});
     $("#cbx_departamento").css({'border-style':'solid','border-color':'red'});
  }
  /*
  if(matriculaVal == null){
    $("#matricula").css({'border-style':'solid','border-color':'red'});
  }
   if(licencia == null){
    $("#licencia").css({'border-style':'solid','border-color':'red'});
  }
   if(soatVal == null){
    $("#soat").css({'border-style':'solid','border-color':'red'});
  }
   if(pruebaVal == null){
    $("#prueba").css({'border-style':'solid','border-color':'red'});
  }
*/

 }

 function agregarContenido(){
  capacidad  = $("#capacidad").val();
  Tpeso = $("#Tpeso").val();
  placa = $("#placa").val();
  refrigeracion = $("#refrigeracion").val();
  ciudad = $("#cbx_ciudad").val();
  //matricula = $("#matricula");
  //matriculaVal = $("#matricula").val();
  //soat = $("#soat");
  //soatVal = $("#soat").val();
  //licencia = $("#licencia");
  //licenciaVal = $("#licencia").val();
  //prueba = $("#prueba");
  //pruebaVal = $("#prueba").val();
  flete = $("#flete").val();
 }

 function   restriccionesFvehiculo(){

 $("#capacidad").keydown(function(){
  keydown_numeros();
  validarLenght(this,15);
 });

 $("#placa").keydown(function(){
  validarLenght(this,6);
 });


 }
