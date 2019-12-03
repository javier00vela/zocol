<html>
<head>
<script type="text/javascript" src="src/js/actualizarUsuarioJS.js"></script>
<script type="text/javascript" src="src/js/validarMisDatosPerfil.js"></script>	
</head>
<div class="contenedor">
<div class="card container">
<form id="updateUser" method="post"  enctype="multipart/form-data">
	<?php if(!isset($_SESSION)){ session_start(); } ?>
<div class="row">
<div class="col-1">
</div>
<div class="contReg col-10 text-center">
<div class="row">
	<div class="imagen col-4">
		<img  class="perfil img-fluid rounded-circle" id="imgProfile" src="src/images/sys/perfilUpdate.png">
	</div>
<div class=" col-8">
	<span class='icon-user'><p> NOMBRES</p> <input type="text" class="form-control" id="nombres" name="nombre" value="<?php echo $_SESSION["nombreUser"] ?>" placeholder="ingrese su nombre" ><br>

<span class='icon-profile text-center'><p> DOCUMENTO</p> <input type="text" class="form-control" id="documento" name="documento" value="<?php echo $_SESSION["documentoUser"] ?>" placeholder="ingrese su documento"><br>
</div>

<div class="container">
<div class="row">
<div class="col-6">
<span class='icon-key'><p> CONTRASEÑA</p> <input class="form-control" type="password"  id="contraseña" name="contrasena"   placeholder="ingrese su contraseña"  m ><br>
</div>
<div class="col-6">
<span class='icon-key'><p> NUEVA CONTRASEÑA</p> <input class="form-control" type="password"  id="contraseña2" name="contrasena2"  placeholder="Escriba la nueva Contraseña"  m ><br>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-6">
<span class='icon-office'><p> DEPARTAMENTO</p> <select class="form-control" name="departamento" id="cbx_departamento" >
<option value="0">SELECCIONE UNA OPCIÓN</option>
<?PHP foreach ($_SESSION["departamentos"] as $departamento) { ?>
<option value="<?php echo $departamento['id_departamento']?>"><?php echo $departamento['nombre_departamento'] ?></option>
<?php } ?>
</select></br>
</div>
<div class="col-6">
<span class='icon-home2'><p> CIUDAD</p> <select class="form-control" id="cbx_ciudad" name="ciudad" > </select></br>
</div>
</div>
</div> 
</div>
<span class='icon-envelop'><p> CORREO</p> <input class="form-control" type="email" id="correo" name="correo" value="<?php echo $_SESSION["correoUser"] ?>" placeholder="ingrese su correo " ><br>
<div class="row">
<div class="col-6">
<span class='icon-calendar'><p> NACIMIENTO </p> <input class="form-control" type="date" id="fecha"  name="fechaNacimiento"  value="<?php echo $_SESSION["nacimientoUser"] ?>" ><br>
</div>
<div class="col-6">
<span class='icon-mobile'><p> TELEFONO </p> <input class="form-control" type="text" id="telefono" name="telefono"  value="<?php echo $_SESSION["telefonoUser"] ?>" placeholder="ingrese su telefono"><br>
</div>
</div>

<div class="row">
<div class="col-6">
<span class='icon-office'><p> LOCALIDAD</p> <input class="form-control" type="text" id="localidad"  name="localidad" value="<?php echo $_SESSION["localidadUser"] ?>" placeholder="ingrese su localidad"   ><br>
</div>
<div class="col-6">
<span class='icon-home3'><p> BARRIO</p> <input class="form-control"  type="text" id="barrio" name="barrio" value="<?php echo $_SESSION["barrioUser"] ?>"  placeholder="ingrese su barrio"><br>
</div>
</div>  
<span class='icon-home'><p> DIRECCIÓN HOGAR</p> <input class="form-control" type="text" id="direccion" name="nomenclatura" value="<?php echo $_SESSION["nomenclaturaUser"] ?>"  placeholder="ingrese su dirección de hogar"   ><br>

<span class='icon-user'><p> USUARIO ACTIVO</p> <select class="form-control" name="activo" id="activo" >
<option value="1">SI</option>
<option value="0">NO</option>
</select></br>
<p><button id="btnActualizar" type="submit" class="btn btn-success">actualizar</button></p>
<br>
<br>
</form>
</div>
</div>						    
</div>
</div>
</div>
</html>