<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>

<title>Registro Admin</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Valid Address Form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Style-Sheet -->
<link rel="stylesheet" href="css/bootstrap.min.css"	type="text/css" media="all">
<link rel="stylesheet" href="css/stylef.css"			type="text/css" media="all">
<!-- //Custom-Style-Sheet -->

<!-- Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900"		type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"					type="text/css" media="all">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"	type="text/css" media="all">
<!-- //Fonts -->

</head>
<!-- //Head -->


	<!-- Body -->
	<body>

		<h1>Registrar usuarios</h1>

		<div class="agileitscontainerwthree">

			<form name="formulario"method="get"action="Gestores/Res2.php">
				<fieldset>
					<legend class="section-title aits">Ingrese los datos requeridos: </legend>

					<div class="section agileinfo row">
						<fieldset>
							<div class="form-group wthree col-md-4">
								<label class="control-label" for="first-name-1">Nombre</label>
								<input type="text" name="name" id="name" value="" placeholder="Nombre" class="form-control" maxlength="50">
							</div>
							<div class="form-group w3-agile col-md-4">
								<label class="control-label" for="initial-1">Contraseña</label>
								<input type="text" name="contra" id="contra" value="" placeholder="Contraseña" class="form-control" maxlength="50">
							</div>
							<div class="form-group w3-agile col-md-4">
								<label class="control-label" for="initial-1">Correo</label>
								<input type="text" name="correo" id="correo" value="" placeholder="Correo electornico" class="form-control" maxlength="50">
							</div>
						</fieldset>
					</div>

					<div class="section agileinfo row">
						<fieldset>
							<div class="form-group w3-agile col-md-4">
								<label class="control-label" for="initial-1">Telefono</label>
								<input type="text" name="Telefono" id="Telefono" value="" placeholder="Telefono" class="form-control" maxlength="50">
							</div>
							<div class="form-group wthree col-md-4">
								<label class="control-label" for="first-name-1">Género</label>
								<input type="text" name="genero" id="genero" value="" placeholder="genero" class="form-control" maxlength="50">
							</div>
							<div class="form-group wthree col-md-4">
								<label class="control-label" for="first-name-1">Dirección</label>
								<input type="text" name="direc" id="direc" value="" placeholder="direccion" class="form-control" maxlength="50">
							</div>
						</fieldset>
					</div>		


					<div class="section agileinfo row">
						<fieldset>
							<div class="form-group w3-agile col-md-4">
								<label class="control-label" for="initial-1">Fecha</label>
								<input type="text" name="fecha" id="fecha" value="" placeholder="fecha dd/mm/yyyy" class="form-control" maxlength="50">
							</div>
							<div class="form-group wthree col-md-4">
								<label class="control-label" for="first-name-1">Rol</label>
								<input type="text" name="rol" id="rol" value="" placeholder="rol" class="form-control" maxlength="50">
							</div>
						</fieldset>
					</div>	

					<button type="submit" value="Submit" class="btn btn-lg agile btn-primary submit">Registrar</button>
				</div>
			</form>
		</div>




		<!-- Necessary-JavaScript-Files-&-Links -->

			<script src="http://codeorigin.jquery.com/jquery-1.11.3.min.js"></script>
			<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			<script src="js/jq.progress-bar.js"></script>
			<script>
				$(document).ready(function() {
					$('#test_form').showProgress();
				});
			</script>

		<!-- //Necessary-JavaScript-Files-&-Links -->



	</body>
	<!-- //Body -->



</html>