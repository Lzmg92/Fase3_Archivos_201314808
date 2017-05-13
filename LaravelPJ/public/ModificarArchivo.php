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

<title>Modificar</title>

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

				<?php
					$variable1=($_GET['var1']);
					echo $variable1;
				?>

	<!-- Body -->
	<body>

		<h1>Modificar Archivo</h1>

		<div class="agileitscontainerwthree">

			<form name="formulario"method="get"action="Gestores/Res9.php">
				<fieldset>
					<legend class="section-title aits">Ingrese los datos necesarios</legend>


					<div class="section agileinfo row">
						<fieldset>
							<div class="form-group wthree col-md-4">
								<label class="control-label" for="first-name-1">Nombre <span class="label label-info">Optional</span></label>
								<input class="form-control" type="text" name="nombre" id="nombre" value="" placeholder="nombre">
							</div>
							<div class="form-group w3-agile col-md-4">
								<label class="control-label" for="initial-1">ID User </label>
								<input class="form-control" type="text" name="idJ" id="idJ" value="" placeholder="id">
							</div>
						</fieldset>
					</div>
				

<div class="section agileinfo row">
						<fieldset>
							<div class="form-group wthree col-md-4">
			<textarea name="conte" id="conte" placeholder="Escribir contenido" rows="6"></textarea>
							</div>
						</fieldset>
					</div>


					<button type="submit" value="Submit" class="btn btn-lg agile btn-primary submit">Modificar</button>
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