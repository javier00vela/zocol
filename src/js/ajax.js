
function peticionAjax(json,controller,action,method) {
	$.ajax({
                data:  json,
                url:   'index.php?controller='+controller+'&action='+action,
                type:  method,
      
                 beforeSend: function(response){
     				     wait();
  				 },
                success:  function (response) {
                        $("#cuerpo").html(response);

                }
        });
}




