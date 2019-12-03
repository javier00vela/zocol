<html>
<head>
<script type="text/javascript" src="src/js/actualizarVehiculo.js"></script>
</head>
<div class="container">
<div class="card">
		<div class=" divOpc col-12">
    <?php foreach ($result as $vehiculo ) { ?>
		<form id="updateVehiculo" method="post" enctype="multipart/form-data" >
		<div class="container">
			<div class="row">
				<div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <b>CAPACIDAD VEHICULO: </b><input type="text" class="form-control" name="capacidad" id="capacidad" value="<?php echo $vehiculo['capacidad'] ?>" ></br>
                        </div>
                        <div class="col-6">
                            <b>PESO CAPACIDAD:</b> <select  class="form-control" name="Tpeso" id="Tpeso" >
             <option value="1">LIBRAS</option>   
             <option value="2">KILOGRAMOS</option>
             <option value="3">TONELADAS</option> 
          </select></br>  
                        </div>
          <div class="col-6">		
          <b>PLACA</b><input type="text" name="placa" class="form-control" id="placa" value="<?php echo $vehiculo['placa'] ?>" > </br>  
          </div>
          <div class="col-6">   
          REFRIGERACION <select name="refrigeracion" class="form-control" id="refrigeracion">
             <option value="0">Si</option>
             <option value="1">No</option>   
          </select></br>
          </div>
        <div class="col-6">
             DEPARTAMENTO: <select class="form-control" name="departamento" id="cbx_departamento" >
             <option value="0">SELECCIONE UNA OPCIÓN</option>
             <?PHP foreach ($_SESSION["departamentos"] as $departamento) { ?>
             <option value="<?php echo $departamento['id_departamento']?>"><?php echo $departamento['nombre_departamento'] ?></option>
             <?php } ?>
             </select></br>
        </div>
        <div class="col-6">
           <b>CIUDAD DEL VEHICULO :</b> <select class="form-control" id="cbx_ciudad" name="ciudad"  > </select></br></br>
        </div>
         <div class="col-6">
             <b>FLETE:</b> <select  class="form-control" name="flete" id="flete"  >
             <option value="0">Peso</option>
             </select><br>
        </div>
       </div>
     </div>
       </div>
        <hr>
          <div class="row text-center ">
            <div class="col-3 ">
              <button class="btn btn-primary"><a  href="<?php echo $vehiculo['matricula_vehiculo'] ?>" download ><span class="icon-download"> MATRICULA VEHICULO</span></a></button> 
            </div>
            <div class="col-3">
              <button class="btn btn-primary"><a href="<?php echo $vehiculo['soat'] ?>"><span class="icon-download" download > SOAT DEL VEHICULO</span></a></button>
            </div>
            <div class="col-3">
              <button class="btn btn-primary"><a href="<?php echo $vehiculo['licencia'] ?>"><span class="icon-download" download> LICENCIA</span></a></button>
            </div>
            <div class="col-3">
              <button class="btn btn-primary"><a href="<?php echo $vehiculo['prueba_tecnomecanica'] ?>" download><span class="icon-download"> PRUEBA TECNOMECANICA</span></a></button>
            </div>
            </div>
            <hr>
    	<div class="container">
    		<div class="row">
    			<div class="col-4">
    			</div>
    			<div class="col-4">
           
    				 <p><button class="btn btn-success btn-xs" id="actualizar" >Actualizar vehiculo</button><br></p>
    			</div>
    			<div class="col-4">
    				
    			</div>
    		</div>
    	</div>

      </div>   
   </div>
    	</div>

			</div>	
		</div>
	</div>
        </div>  
        </div>
      </div>
    </div>
     </form>
     <?php } ?>
         </html>