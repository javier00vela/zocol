$(function(){
  restriccionesLogin();
$("#btnActualizar").click(function(e){
  e.preventDefault();

 


nombres = $("#nombres").val();
  documento = $("#documento").val();
  contraseña = $("#contraseña").val();
  contraseña2 = $("#contraseña2").val();
  ciudad = $("#cbx_ciudad").val();
  correo = $("#correo").val();
   fecha = $("#fecha").val();
    telefono = $("#telefono").val();
   localidad = $("#localidad").val();
   barrio = $("#barrio").val();
    direccion = $("#direccion").val();
   activo = $("#activo");
   if($("#img").hasClass("img")){
    image = $("#img");
   res = image[0].files[0];
   }
   
   var datos = new FormData($("#updateUser")[0]);
   datos.append("nombres",nombres);
  
   datos.append("documento",documento);
   datos.append("contrasena",contraseña);
    datos.append("contrasena2",contraseña2);
   datos.append("cbx_ciudad",ciudad);
   datos.append("correo",correo);
   datos.append("fecha",fecha);
   datos.append("telefono",telefono);
   datos.append("localidad",localidad);
   datos.append("barrio",barrio);
   datos.append("direccion",direccion);
   datos.append("activo",activo);
   if($("#img").hasClass("img")){
     datos.append("img",res);
   }
   $.ajax({
                data:  datos,
                url:   'index.php?controller=usuarios&action=actualizarUsuario',
                type: "post",
                contentType: false,
                processData: false,
                success:  function (response) {
                  $("#cuerpo").html(response);

                }
        });

});

});


function restriccionesLogin(){
  $("#nombres").keydown(function(event){
     keydown_letras();
     validarLenght(this,50);
  });
  $("#documento").keydown(function(event){
     keydown_numeros();
     validarLenght(this,30);
  });
  $("#telefono").keydown(function(event){
     keydown_numeros();
     validarLenght(this,10);
  });
  $("#direccion").keydown(function(event){
     validarLenght(this,50);
  });
  $("#localidad").keydown(function(event){
     validarLenght(this,15);
  });
  $("#contraseña").keydown(function(event){
     validarLenght(this,100);
  });
  $("#contraseña2").keydown(function(event){
     validarLenght(this,100);
  });
  $("#correo").keydown(function(event){
     validarLenght(this,50);
  });
  $("#documentoLogin").keydown(function(event){
     keydown_numeros();
     validarLenght(this,30);
  });
  $("#contrasenaLogin").keydown(function(event){
     validarLenght(this,100);
  });
};


  