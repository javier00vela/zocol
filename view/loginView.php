
		<!DOCTYPE html>
		<html>
		<head>
			<link href="src/css/style.css" rel='stylesheet' type='text/css' /><!--stylesheet-->
			<script type="text/javascript" src="src/js/validacionesLogin.js"></script> 
		</head>
<body id="cuerpo">
		<h1></h1>
		<div class="form-w3ls">
			<div id="containerTitle">
			<div id="titleLogin" class="text-center visible">
			<img src="src/images/sys/titulo.png">
			<hr>
			</div>
			</div>
		    <ul class="tab-group cl-effect-4">
		        <li id="loginAction" class="tab active"><a href="#signin-agile">Inicio Sesión</a></li>
				<li id="registerAction" class="tab"><a href="#signup-agile">Registro</a></li>
		    </ul>
		    <div class="tab-content">
		        <div id="signin-agile">
			   <div class="wrap-input100 validate-input signin-agile " data-validate = "Valid email is: a@b.c">
							<div class="input-group" >
		  <abbr title="nombre"><span class="input-group-addon"  style="background:white;"><i class="fa fa-user"></i>  </span></abbr>
		  <input  placeholder="Ingrese su nombre" id="documentoLogin" class="form-control"  type="text" style="background:rgb(237, 233, 233, 0.2);margin-top: -1px;height: 34px;">
		    </div>
						</div>
		         <br>
		                <div class="wrap-input100 validate-input signin-agile " data-validate = "Valid email is: a@b.c">
							<div class="input-group" >
		  <abbr title="nombre"><span class="input-group-addon" style="background:white;"><i class="fa fa-key"></i>  </span></abbr>
		  <input    placeholder="Ingrese su nombre" id="contrasenaLogin" class="form-control"  type="password" style="background:rgb(237, 233, 233, 0.2);margin-top: -1px;height: 34px;">
		    </div>
						</div>
				<div class="container" style="padding-left: 30%;">
						<button class="btn btn-success" id="iniciarUsuario" style="margin: 5px;" >Iniciar Sesión</button>
				</div>
				<hr>	
						<div class="container " >
					<a role="button" id="restartPass" style="padding-left: 135px"> ¿olvidaste la contraseña?</a>
					</div>
				</div>
				<div id="signup-agile">
					<div class="container">
				<span><span style="background:#3CC63C;border-radius: 100%;padding: 10px;"><i class="fa fa-user" style="color:white"></i></span><b> Información Usuarios </b></span><hr style="width: 80%">
						<div class="row">
							
				
		  <div class="col-md-9 inputGroupContainer">
		  <div class="input-group" >
		  <abbr title="nombre"><span class="input-group-addon"  style="background:white;"><i class="fa fa-user"></i>  </span></abbr>
		  <input  name="first_name"  placeholder="Ingrese su nombre" class="form-control" id="nombres" type="text" style="background:rgb(237, 233, 233, 0.2);margin-top: -1px;height: 34px;">
		    </div>

		  </div>
		  
						</div>

		<br>
				<div class="row">
					<div class="col-md-3 inputGroupContainer">
		  <div class="input-group" >
		  <abbr title="departamento"><span class="input-group-addon" style="background:white;"><i class="fa fa-globe"></i>  </span></abbr>
		  <select class="form-control" name="departamento"   id="cbx_departamento"  style="background:rgb(237, 233, 233, 0.2);margin-top: -1px;"  >
		<option value="0">departamento</option>
		<?PHP foreach ($_SESSION["departamentos"] as $departamento) { ?>
		<option value="<?php echo $departamento['id_departamento']?>"><?php echo $departamento['nombre_departamento'] ?></option>
		<?php } ?>
		</select>
		    </div>

		  </div>
		  <div class="col-md-3 inputGroupContainer">
		  <div class="input-group" >
		  <abbr title="ciudad"><span class="input-group-addon"  style="background:white;"><i class="fa fa-globe"></i>  </span></abbr>
		  <select class=".inputGP form-control" placeholder="ciudad"  id="cbx_ciudad" name="ciudad" style="background:rgb(237, 233, 233, 0.2);margin-top: -1px;height: 34px;" > <option value="0">ciudad</option></select>

		    </div>
		  </div>
		   <div class="col-md-3 inputGroupContainer">
		  <div class="input-group" >
		  <abbr title="localidad"><span class="input-group-addon"  style="background:white;"><i class="fa fa-building"></i>  </span></abbr>
		  <input  name="first_name"  placeholder="Ingrese su localidad" id="localidad" class="form-control"  type="text" style="background:rgb(237, 233, 233, 0.2);margin-top: -1px;height: 34px;">
		    </div>
		  </div>
				</div>
		<br>
	<div class="row">
		<div class="col-md-9 inputGroupContainer">
		  <div class="input-group" >
		  <abbr title="correo"><span class="input-group-addon"  style="background:white;"><i class="fa fa-envelope"></i>  </span></abbr>
		  <input  name="first_name"  placeholder="Ingrese su correo" class="form-control" id="correo"  type="text" style="background:rgb(237, 233, 233, 0.2);margin-top: -1px;height: 34px;">
		    </div>
		</div>
</div>
		<br>	

	<div class="row">
		    <div class="col-md-3 inputGroupContainer">
		  <div class="input-group" >
		  <abbr title="fecha nacimiento"><span class="input-group-addon"  style="background:white;"><i class="fa fa-calendar"></i>  </span></abbr>
		  <input  name="first_name"  placeholder="Ingrese su fecha de nacimiento" id="fecha"  type="date" style="background:rgb(237, 233, 233, 0.2);margin-top: -1px;height: 34px;border:none;width: 100%;border-bottom: 1px solid #D8D6D6;">
		    </div>
		  </div>
<br>
		<div class="col-md-3 inputGroupContainer">
		  <div class="input-group" >
		  <abbr title="documento"><span class="input-group-addon"  style="background:white;"><i class="fa fa-id-card"></i>  </span></abbr>
		  
		  <input  name="first_name"  placeholder="Ingrese su documento" class="form-control" id="documento"  type="text" style="background:rgb(237, 233, 233, 0.2);margin-top: -1px;height: 34px;">
		    </div>
		  </div>
		  <div class="col-md-3 inputGroupContainer">
		  <div class="input-group" >
		  <abbr title="telefono"><span class="input-group-addon"  style="background:white;"><i class="fa fa-phone"></i>  </span></abbr>
		  <input  name="first_name"  placeholder="Ingrese su telefono" class="form-control" id="telefono" type="text" style="background:rgb(237, 233, 233, 0.2);margin-top: -1px;height: 34px;">
		    </div>
		  </div>
	</div>


		<br>
				<div class="row">
					<div class="col-md-6 inputGroupContainer">
		  <div class="input-group" >
		  <abbr title="direccion"><span class="input-group-addon"  style="background:white;"><i class="fa fa-location-arrow"></i>  </span></abbr>
		  <input  name="first_name"  placeholder="Ingrese su direccion" class="form-control" id="direccion"  type="text" style="background:rgb(237, 233, 233, 0.2);margin-top: -1px;height: 34px;">
		    </div>

		  </div>
		
		   <div class="col-md-3 inputGroupContainer">
		  <div class="input-group" >
		  <abbr title="barrio"><span class="input-group-addon"  style="background:white;"><i class="fa fa-building"></i>  </span></abbr>
		  <input  name="first_name"  class="form-control" placeholder="Ingrese su barrio" id="barrio" type="text" style="background:rgb(237, 233, 233, 0.2);margin-top: -1px;height: 34px;">
		    </div>
		  </div>
		    
				</div>
					<br>
		<span><span style="background:#3CC63C;border-radius: 100%;padding: 10px;"><i class="fa fa-key" style="color:white"></i></span><b> Información Privacidad </b></span><hr style="width: 80%">	
		<div class="row">
					<div class="col-md-4 inputGroupContainer">
		  <div class="input-group" >
		  <abbr title="contraseña"><span class="input-group-addon"  style="background:white;"><i class="fa fa-key"></i>  </span></abbr>
		  <input  name="first_name"  placeholder="Ingrese su contraseña" class="form-control" id="contraseña"  type="password" style="background:rgb(237, 233, 233, 0.2);margin-top: -1px;height: 34px;">
		    </div>

		  </div>
		  <div class="col-md-5 inputGroupContainer">
		  <div class="input-group" >
		  <abbr title="contraseña"><span class="input-group-addon"  style="background:white;"><i class="fa fa-key"></i>  </span></abbr>
		  <input  name="first_name"  placeholder="repita su contraseña" class="form-control" id="contraseña2" type="password" style="background:rgb(237, 233, 233, 0.2);margin-top: -1px;height: 34px;">
		    </div>
		  </div>
				</div>
					</div>
					<div class="container" style="padding-left: 30%;">
						<input type="submit"  id="registroUsuario" class="btn btn-success"  style="margin: 5px;" value="Registrarse">
					</div>
				</div>
		    </div><!-- tab-content -->
		</div> <!-- /form -->

		
		</body>
		</html>