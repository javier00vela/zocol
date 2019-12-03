<html>
<head>
 <script type="text/javascript" src="src/js/validarPublicarProducto.js"></script>
</head>

<section class="card has-border-left-3">
                            <header class="panel_header">
                              
                                <div class="actions panel_actions pull-right">
                                </div>
                            </header>
                            <div class="content-body">    
                                <div class="container">
      <div class="row">
        <div class="col-1">
        <form  id="publicarProducto" method="post"  enctype="multipart/form-data">
        </div>
         <div class="col-10">
              <div class="row">
          <div class="imagen col-3">
          
             <img id="imgPublicar" class="perfil img-fluid rounded-circle" src="src/images/sys/productoUpdate.png" >
          </div>
          <div class="col-9">
            <div class="row">
          <div class="col-2">
            <b>NOMBRE PRODUCTO: </b>
          </div>
          <div class="col-10">
            <input class="form-control" type="text" name="producto" placeholder="nombre del producto" id="producto" ></br>
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
             <input class="form-control" type="number" name="cantidades" placeholder="cantidad del producto" id="cantidades"></b><br>
          </div>
          <div class="col-2">
            <b>IVA:</b>
          </div>
          <div class="col-10">
              <input class="form-control" type="number" name="iva" placeholder="iva del producto" id="iva"></b><br>
          </div>
          <div class="col-2">
           <b>PRECIO :</b> 
          </div>
          <div class="col-10">
             <input class="form-control" type="number" name="precio" placeholder="precio del producto" id="precio" ></br>   
        
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
           <input class="form-control" type="text" name="peso" placeholder="peso del producto" id="peso">
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
             <select class="form-control" name="estado" id="estado" >
             <option value="0">NO PRIORITARIO</option>
             <option value="1">PRIORITARIO</option>   
          </select></br>   
          </div>
          <div class="col-2">
           <b>DESCRIPCIÓN :</b> 
          </div>
          <div class="col-10">
              <textarea class="form-control" rows="5" id="descripcion" placeholder="descripción del producto"></textarea>
        
          </div>
        </div>    
        <div class="container">
          <div class="row">
            <div class="col-4">
              
            </div>
            <div class="col-4 text-center">
              <button class="publicar btn btn-success"  type="submit" id="publicar" >Registrar producto</button><br>
            </div>
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
</div>
<br>
<br>
<br>
                    </section>                  
  
  </html>    