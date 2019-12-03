<html>
<head>
<script type="text/javascript" src="src/js/validarFvehiculo.js"></script>
</head>
<div class="container-fluid">
	<div class="row">
		<div class=" card col-12 ">
       <div class="box">
		<h2 class="text-center">FORMULARIO SOLICITUD DE VEHICULO</h2>
         <form id="formularioVehiculo" method="post" enctype="multipart/form-data" >
		<div class="container">
			<div class="row">
				<div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <b>CAPACIDAD VEHICULO: </b><input type="text" class="form-control" name="capacidad" id="capacidad" ></br>
                        </div>
                        <div class="col-6">
                            <b>PESO CAPACIDAD:</b> <select  class="form-control" name="Tpeso" id="Tpeso" >
             <option value="2">KILOGRAMOS</option>
             <option value="1">LIBRAS</option>   
             <option value="3">TONELADAS</option> 
          </select></br>  
                        </div>
                    </div>			
          <b>PLACA<b><input type="text" name="placa" class="form-control" id="placa" > </br>  
          REFRIGERACION <select name="refrigeracion" class="form-control" id="refrigeracion">
             <option value="0">Si</option>
             <option value="1">No</option>   
          </select></br>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
				 DEPARTAMENTO: <select class="form-control" name="departamento" id="cbx_departamento" >
        <option value="0">SELECCIONE UNA OPCIÓN</option>
        <?PHP foreach ($_SESSION["departamentos"] as $departamento) { ?>
<option value="<?php echo $departamento['id_departamento']?>"><?php echo $departamento['nombre_departamento'] ?></option>
<?php } ?>
    </select></br>
          <b>CIUDAD DEL VEHICULO :</b> <select class="form-control" id="cbx_ciudad" name="ciudad" > </select></br></br>
          <b>FLETE:</b> <select  class="form-control" name="flete" id="flete" >
             <option value="0">Peso</option>
          </select><br>
         	</div>
            

         	<div class="row text-center ">
         		<div class="col-3">
         			<span class="btn btn-danger btn-file"> 
        <b>MATRICULA VEHICULO </b> <input type="file" class="file"  name="matricula" id="matricula" ></br>
    </span>
         	</div>
         		<div class="col-3">
         			 <span class="btn btn-danger btn-file"> 
        <b>SOAT DEL VEHICULO</b> <input type="file" value="ADJUNTAR" name="soat" id="soat"> 
    </span>
         	</div>
         		<div class="col-3">
         			         <span class="btn btn-danger btn-file"> 
       LICENCIA <input class="btn btn-danger btn-lg" type="file" value="ADJUNTAR" name="licencia" id="licencia"></br>
   </span>
         	</div>
         	<div class="col-3">
         			         <span class="btn btn-danger btn-file"> 
        <b>PRUEBA TECNOMECANICA</b>  <input type="file" value="ADJUTAR" name="tecnoM" id="prueba"></br>
   </span>
         	</div>
            <div class="container">
                <hr style="margin: 5px;">
            </div>
    	<div class="container">
    		<div class="row">
    			<div class="col-4">
    			</div>
    			<div class="col-4">
    				 <p><button class="btn btn-success btn-xs" id="registrar" >Registrar vehiculo</button><br></p>
    			</div>

    			<div class="col-4">
    				
    			</div>
    		</div>
              <br>
                <br>
                <br>
    	</div>
       
      </div>   
   </div>
    	</div>

			</div>	
		</div>
	</div>
    </div>
     </form>       
     </html>