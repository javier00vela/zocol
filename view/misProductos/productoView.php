 <script type="text/javascript" src="src/js/validarActualizarProducto.js"></script>
<script type="text/javascript" src="src/js/validarMisProductos.js"></script>
<?php 
  if(!isset($_SESSION)){ 
    session_start(); 
}
?>
<div class="misProductos container">
  <div class="row">
  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>Mis Productos</h4>
                <span>&nbsp</span>
              </div>
              <div class="icon">
                <i class="fa fa-car"></i>
              </div>
              <a href="#" id="productos" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Agregar Producto</h4>
                <span>&nbsp</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" id="agregar" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4> Suspendidos</h4>
                <span>&nbsp</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" id="suspendidos" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h4 style="color: white">Reportes Ventas </h4>
                <span>&nbsp</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" id="ventas" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h4 style="color: white">Reportes Pedidos</h4>
                <span>&nbsp</span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" id="pedidos" class="small-box-footer">Abrir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
    <div class=" divOpc col-12 bg-faded">
<div class="contenido">
  <?php foreach ($productos as $product) { ?>

  <div class="card container">
      <div class="row">
        <div class="col-1">
        <form  id="actualizarProducto" method="post"  enctype="multipart/form-data">
        </div>
         <div class="col-10">
              <div class="row">
          <div class="imagen col-3">
          
             <img id="imgPublicar" class="perfil img-fluid rounded-circle" src="<?php echo $product["foto_producto"] ?>" >
          </div>
          <div class="col-9">
            <div class="row">
          <div class="col-2">
            <b>NOMBRE PRODUCTO: </b>
          </div>
          <div class="col-10">
            <input class="form-control" type="text" name="producto" id="producto" value="<?php echo $product["nombre"] ?>" ></br>
          </div>
          </div>
          <div class="row">
          <div class="col-2">
            <b>TIPO DE PRODUCTO: </b>
          </div>
          <div class="col-10">
            <select class="form-control" name="Tproducto" id="Tproducto" >
             <option value="0">AGRICOLA</option>
             <option value="1">GANADERO</option>   
             <option value="2">OTROS</option> 
              <option value="3">SEMILLAS</option>
             <option value="4">LACTEOS</option>   
             <option value="5">FERTILIZANTES</option>
          </select></br>
        </div>
        </div>
        <div class="row">
          <div class="col-2">
             <b>CANTIDADES DISPONIBLES:</b>
          </div>
          <div class="col-10">
             <input class="form-control" type="number" name="cantidades" id="cantidades" value="<?php echo $product["cantidad"] ?>""></b><br>
          </div>
          <div class="col-2">
            <b>IVA:</b>
          </div>
          <div class="col-10">
              <input class="form-control" type="number" name="iva" id="iva" value="<?php echo $product["iva"] ?>""></b><br>
          </div>
          <div class="col-2">
           <b>PRECIO :</b> 
          </div>
          <div class="col-10">
             <input class="form-control" type="number" name="precio" id="precio" value="<?php echo $product["precio"] ?>"" ></br>   
         
          </div>
        </div> 
        </div>
        </div>
        <!--  -->
        <div class="row">
        <div class="col-2">
           <B>PESO</B>
          </div>
          <div class="col-4">
           <input class="form-control" type="text" name="peso" id="peso" value="<?php echo $product["peso"] ?>"">
          </div>
          <div class="col-2">
           <B>TIPO DE PESO</B>
          </div>
          <div class="col-4">
             <select  class="form-control" name="Tpeso" id="Tpeso" >
             <option value="0">KILOGRAMOS</option>
             <option value="1">LIBRAS</option>   
             <option value="2">TONELADAS</option> 
          </select></br>  
          </div>
        </div>  
        <div class="row">
          <div class="col-2">
           <B>ESTADO:</B>
          </div>
          <div class="col-10">
             <select class="form-control" name="estado" id="estado"  >
             <option value="0">NO PRIORITARIO</option>
             <option value="1">PRIORITARIO</option>   
          </select></br>   
          </div>
          <div class="col-2">
           <b>DESCRIPCIÓN :</b> 
          </div>
          <div class="col-10">
              <p><input class="descripcion form-control"  id="descripcion" value="<?php echo  $product["descripcion"] ?>" ></p>
          </div>
        </div>    
        <div class="container">
          <div class="row">
            <div class="col-4">
              <input type="hidden" name="id"  id="id" value="<?php echo $product["id_producto"] ?>">
            </div>
            <div class="col-4 text-center">
              <button class="actualizar  btn btn-success"  type="submit" id="actualizar" >Actualizar producto</button><br>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="col-4">
              <form>
            </div>
          </div>  
        </div>
        
      </div>   
   </div>
  
        </div>
         <div class="col-1">
          
        </div>
      </div>
    </div>
</form>
</div>
</div>
</div>
      <?php } ?>