$(function(){
var divTitle;
mostrarCiudades();
restriccionesLogin();
recuperarLogin();

$("#registerAction").click(function(){

$("h1").animate({'margin-top':'-65px'});
$(".form-w3ls").animate({'width':'55%'});
$("#titleLogin").remove();
});

$("#loginAction").click(function(){
$("h1").animate({'margin-top':'0'});
$(".form-w3ls").animate({'width':'35%'});
if(!$("#titleLogin").hasClass("visible")){
 $("#containerTitle").append('<div id="titleLogin" class="text-center visible"><img src="src/images/sys/titulo.png"><hr></div>');
}
});



$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a,.links a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});

$("#registroUsuario").click(function(){
			recibirRegistro();
			validarVacioRegistro();	
		});

		$("#pass").click(function(){
			
			newPass= $("#pass").val();
			peticionAjax({"MI":newPass},"header","index","get");
			});

		$("#iniciarUsuario").click(function(){
			recibirLogin();
			validarVacioLogin();
		});

		
});

function recuperarLogin(){
	$("#restartPass").click(function(){
		swal({
  title: 'Recupera tu contraseña escribiendo tu correo',
  input: 'email',
  showCancelButton: true,
  confirmButtonText: 'enviar',
  showLoaderOnConfirm: true,
  preConfirm: (email) => {
    return new Promise((resolve) => {
      setTimeout(() => {
        if (email === 'taken@example.com') {
          swal.showValidationError(
            'debes escribir un formato de correo'
          )
        }
        peticionAjax({"email":email},"usuarios","recuperarPass","post");
        resolve()
      }, 2000)
    })
  },
}).then((result) => {
})
	});
		
	} 
//funciones del login 

function recibirLogin(){
		 documentoLogin = $("#documentoLogin").val();
		 contrasenaLogin = $("#contrasenaLogin").val();
		}

function validarVacioLogin(){
 if (documentoLogin==""){
	$("#documentoLogin").css({'border-style':'solid','border-color':'red'});
  }
 if (contrasenaLogin==""){
	$("#contrasenaLogin").css({'border-style':'solid','border-color':'red'});
	}
json={"documentoLogin":documentoLogin,'contrasenaLogin':contrasenaLogin};
 if (documentoLogin !="" && contrasenaLogin!="" ){
 	peticionAjax(json,"usuarios","validarUsuario","post");
};
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

function recibirRegistro(){
		nombres = $("#nombres").val();
		documento = $("#documento").val();
		contraseña = $("#contraseña").val();
		contraseña2 = $("#contraseña2").val();
		cbx_departamento = $("#cbx_departamento").val();
		cbx_ciudad = $("#cbx_ciudad").val();
		correo = $("#correo").val();
		fecha = $("#fecha").val();
		telefono = $("#telefono").val();
		localidad = $("#localidad").val();
		barrio = $("#barrio").val();
		direccion = $("#direccion").val();
		condicion = $("#condicion").val();
		}
function validarVacioRegistro(){
	
	if (nombres==""){
			$("#nombres").css({'border-style':'solid','border-color':'red'});
		}
	if (documento==""){
			$("#documento").css({'border-style':'solid','border-color':'red'});
		}
	if (contraseña==""){
			$("#contraseña").css({'border-style':'solid','border-color':'red'});
		}
	if (contraseña2==""){
			$("#contraseña2").css({'border-style':'solid','border-color':'red'});
		}
	if (cbx_departamento==0){
			$("#cbx_departamento").css({'border-style':'solid','border-color':'red'});
			$("#cbx_ciudad").css({'border-style':'solid','border-color':'red'});
		}

	if (correo==""){
			$("#correo").css({'border-style':'solid','border-color':'red'});
		}
	if (fecha==""){
			$("#fecha").css({'border-style':'solid','border-color':'red'});
		}
	if (telefono==""){
			$("#telefono").css({'border-style':'solid','border-color':'red'});
		}
	if (localidad==""){
			$("#localidad").css({'border-style':'solid','border-color':'red'});
		}
	if (barrio==""){
			$("#barrio").css({'border-style':'solid','border-color':'red'});
		}
	if (direccion==""){
			$("#direccion").css({'border-style':'solid','border-color':'red'});
		}
	registro= {'direccion':direccion,'barrio':barrio};
	if(direccion!="" && barrio!="" && localidad!="" && telefono!="" && fecha!="" && correo!="" && cbx_departamento!=0 && contraseña!="" && contraseña2!="" && nombres!="" && documento!="" ){
		
		ajax={"nombre":nombres,"documento":documento,"contrasena":contraseña,"contrasena2":contraseña2,"ciudad":cbx_ciudad,"correo":correo,"fechaNacimiento":fecha,"localidad":localidad,"barrio":barrio,"nomenclatura":direccion,"telefono":telefono,"condiciones":condicion};
		peticionAjax(ajax,"usuarios","registrar","post");
	}
	}


function restriccionesLogin(){
	$("#a").keydown(function(event){
		alert();
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
	$("#contrasena").keydown(function(event){
		 validarLenght(this,100);
	});
	$("#contrasena2").keydown(function(event){
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
