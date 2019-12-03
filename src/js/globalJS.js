function validarLenght(object,lenght){
	 longitud = $(object).val().length;
	 resto = lenght - longitud;
	$('#numero').html(resto);
	if(resto <= 0){
	    $(object).attr("maxlength",lenght);
	}
}



function keydown_letras(){
	if(event.shiftKey)
	   {
	        event.preventDefault();
	   }

	   if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 32 )    {
	   }
	   else {
	        if (event.keyCode > 1 || event.keyCode < 20) {
	          if (event.keyCode < 65 || event.keyCode > 95 ) {
	                event.preventDefault();
	          }
	        }
	      }
}

function keydown_numeros(){
	if(event.shiftKey)
	   {
	        event.preventDefault();
	   }

	   if (event.keyCode == 46 || event.keyCode == 8)    {
	   }
	   else {
	        if (event.keyCode < 95) {
	          if (event.keyCode < 48 || event.keyCode > 57) {
	                event.preventDefault();
	          }
	        } 
	        else {
	              if (event.keyCode < 96 || event.keyCode > 105) {
	                  event.preventDefault();
	              }
	        }
	      }
}




function wait(){
	cargar();
	 cargar2();
	 cargar3();
	 cargarDefault();
}



function cargar(){
  setTimeout(
   function(){
      $("#pestaña").html("cargando.");
   }, 200);
}

function cargar2(){
  setTimeout(
   function(){
      $("#pestaña").html("cargando..");
   }, 450);
}

function cargar3(){
  setTimeout(
   function(){
      $("#pestaña").html("cargando...");
     
   }, 700);
}

function cargarDefault(){
  setTimeout(
   function(){
      $("#pestaña").html("ZOCOL");
   }, 950);
}

