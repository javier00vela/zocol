<html>
<head>
<script type="text/javascript" src="src/js/validarPerfil.js"></script>
<script type="text/javascript" src="src/js/validarDetallesPedido.js"></script>
</head>
<div class="container">

	<div class="row">
    <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Mi Perfil</h3>
              </div>
              <div class="icon">
                <i class="fa fa-car"></i>
              </div>
              <a href="#" id="perfil" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Pedidos</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" id="pedidos" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Ventas</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" id="ventas" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
		<div class=" divOpc col-12 ">
<div class="contenido">
	<div class="contenedor">
		<div class="container">
		<?php foreach ($datos as $data) { ?>
			<div class=" card container">
      <div class="row">
        <div class="col-1">
        </div>
        
         <div class="col-10">
              <div class="row">
          <div class="imagen col-3">
          
             <img id="imgPublicar" class="perfil img-fluid rounded-circle" src="<?php echo $data["foto_producto"] ?>" >
          </div>
          <div class="col-9">
            <h3 class="text-left">Datos Producto</h3>
          <hr>
            <div class="row">
          <div class="col-2">
            <b>NOMBRE: </b>
          </div>
          <div class="col-10">
            <label><?php echo $data["nombre"] ?></label>
          </div>

          </div>
          <div class="row">
          <div class="col-2">
            <b>TIPO DE PRODUCTO: </b>
          </div>
          <div class="col-4">
           <label><?php echo $data["nombre_tipoProducto"] ?></label>
        </div>
        <div class="col-2">
            <b>FLETE:</b> 
          </div>
          <div class="col-4">
              <label>$<?php echo $data["flete"] ?></label>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
             <b>CANTIDAD:</b>
          </div>
          <div class="col-4">
             <label><?php echo $data["cantidadPedido"] ?></label></b><br>
          </div>
          <div class="col-2">
            <b>IVA:</b>
          </div>
          <div class="col-4">
               <label><?php echo $data["iva"]+10 ?>%</label></b><br>
          </div>
           <div class="col-2">
            <b>FECHA:</b>
          </div>
          <div class="col-4">
              <label><?php echo $data["fechapedido"] ?></label></b><br>
          </div>
          <div class="col-2">
           <b>SUBTOTAL:</b> 
          </div>
          <div class="col-4">
              <label>$<?php echo $data["subtotal"] ?></label>
         
          </div>
          <div class="col-2">
           	<b>TOTAL:</b> 
          </div>
          <div class="col-4">
              <label>$<?php echo $data["total"] ?></label>
          </div>
           <div class="col-2">
           	<b>TONELADAS: </b> 
          </div>
          <div class="col-4">
              <label><?php echo $data["totalToneladas"] ?></label>
          </div>
           <div class="col-2">
            <b>ESTADO:</b> 
          </div>
          <div class="col-4">
              <label><?php echo $data["Nombre_estado"] ?></label>
          </div>
           <div class="col-2">
            <b>CANT REQUERIDA:</b> 
          </div>
          <div class="col-4">
              <label><?php echo $data["cantidadPedido"] ?></label>
          </div>
          

        </div> 
        </div>
        </div>
        <!--  -->
         <?php if ($tipoPedido != "3"){ ?>
        <h3 class="text-left">Datos Vendedor</h3>
          <hr>
        <div class="row">
        <div class="col-2">
           <B>NOMBRE</B>
          </div>
          <div class="col-4">
            <label><?php echo $data["nombreVendedor"] ?></label>
          </div>
          <div class="col-2">
           <B>TELEFONO</B>
          </div>
           <div class="col-4">
             <label><?php echo $data["telefonoVendedor"] ?></label>
          </div>  
          <div class="col-2">
           <B>DIRECCION:</B>
          </div>
          <div class="col-4">
            <label><?php echo $data["nomenclaturaVendedor"] ?></label>
          </div>
          <div class="col-2">
           <B>DOCUMENTO:</B>
          </div>
           <div class="col-4">
             <label><?php echo $data["documentoVendedor"] ?></label>
          </div>
          <div class="col-4">
           <B>DEPARTAMENTO:</B>
          </div>
          <div class="col-2">
             <label><?php echo $data["departamentoVendedor"] ?></label>
          </div>

        </div>
           <?php } ?>
 <?php if ($tipoPedido != "2"){ ?>
<h3 class="text-left">Datos Transportador</h3>
          <hr>
        <div class="row">
        <div class="col-2">
           <B>NOMBRE</B>
          </div>
          <div class="col-4">
            <label><?php echo $data["nombres"] ?></label>
          </div>
          <div class="col-2">
           <B>TELEFONO</B>
          </div>
           <div class="col-4">
             <label><?php echo $data["telefono"] ?></label>
          </div>
          <div class="col-2">
           <B>DIRECCION:</B>
          </div>
          <div class="col-4">
            <label><?php echo $data["nomenclatura"] ?></label>
          </div>
          <div class="col-2">
           <B>DOCUMENTO:</B>
          </div>
           <div class="col-4">
             <label><?php echo $data["documento"] ?></label>
          </div>
           <div class="col-4">
           <B>DEPARTAMENTO:</B>
          </div>
          <div class="col-2">
             <label><?php echo $data["nombre_departamento"] ?></label>
          </div>
        </div>
        <hr>
          <h4 class="text-left">Formatos del Transportador</h4>
          <div class="row">
           <div class="col-2">
           <B>Matricula:</B>
          </div>
          <div class="col-4">
             <label><span class="icon-file-pdf"><p><a href="<?php echo  $data["matricula_vehiculo"]  ?>" style="color:black" >Matricula</a></p></span></label>
          </div>
           <div class="col-2">
           <B>Soat:</B>
          </div>
          <div class="col-4">
             <label><span class="icon-file-pdf"><p><a href="<?php echo  $data["soat"]  ?>" style="color:black" >Soat</p></a></span></label>
          </div>
           <div class="col-2">
           <B>Licencia:</B>
          </div>
          <div class="col-4">
             <label><span class="icon-file-pdf"><p><a href="<?php echo  $data["licencia"]  ?>" style="color:black" >Licencia</p></a></span></label>
          </div>
           <div class="col-2">
           <B>Prueba tecnomecanica:</B>
          </div>
          <div class="col-4">
             <label><span class="icon-file-pdf"><p><a href="<?php echo  $data["prueba"]  ?>" style="color:black" >Prueba</a></p></span></label>
          </div>
          </div>
   <?php } ?>
        <?php if ($tipoPedido != "1"){ ?>
        <h3 class="text-left">Datos Comprador</h3>
          <hr>
        <div class="row">
        <div class="col-2">
           <B>NOMBRE</B>
          </div>
          <div class="col-4">
            <label><?php echo $data["nombreComprador"] ?></label>
          </div>
          <div class="col-2">
           <B>TELEFONO</B>
          </div>
           <div class="col-4">
             <label><?php echo $data["telefonoComprador"] ?></label>
          </div>
          <div class="col-2">
           <B>DIRECCION:</B>
          </div>
          <div class="col-4">
            <label><?php echo $data["nomenclaturaComprador"] ?></label>
          </div>
          <div class="col-2">
           <B>DOCUMENTO:</B>
          </div>
           <div class="col-4">
             <label><?php echo $data["documentoComprador"] ?></label>
          </div>
           <div class="col-4">
           <B>DEPARTAMENTO:</B>
          </div>
          <div class="col-2">
             <label><?php echo $data["departamentoComprador"] ?></label>
          </div>
        </div>    
        <br>  <br>  <br>  <br>  <br>  <br>  
    <?php }  if ($data["fechapedido"] == strftime( "%Y-%m-%d", time())){ ?>
    <!--<button class="btn btn-danger" data-id="<?php echo $data["id_pedido"] ?>" id="cancelarPedido"><span class="icon-cross"> cancelar Pedido</span></button>-->
      <?php   } ?>

      </div>   
   </div>
  
        </div>
      </div>
    </div>
</div>
</div>
</div>
		<?php } ?>


		

        <br>  <br>  <br> 



	</div>
</div>
	</div>
</div>
</div>
</html>