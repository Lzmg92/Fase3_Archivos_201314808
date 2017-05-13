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

<title>Mostrar</title>

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

			$conn = oci_connect('leslie', 'tael', 'localhost/xe');

			$stid = oci_parse($conn, 'select ID_USUARIO from USUARIO
									where usr_nombre= :myid');
			oci_bind_by_name($stid, ':myid', $variable1);
			oci_execute($stid);

			echo "<table>\n";
			while (($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
			echo "<tr>\n";
			foreach ($row as $item) {
			echo " Su id es: <td>".($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</td>\n";
			}
				echo "</tr>\n";
				}
			echo "</table>\n";
					?>

	<!-- Body -->
	<body>

		<h1>Ver Contenido Carpeta</h1>

		<div class="agileitscontainerwthree">

			<form id="test_form" name="formulario"method="get"action="Gestores/Res13.php">
				<fieldset>
					<legend class="section-title aits">Ingrese el nombre de la carpeta: </legend>
					<div class="section agileinfo row">
						<fieldset>
							<div class="form-group wthree col-md-4">
								<label class="control-label" for="first-name-1">Nombre <span class="label label-info">Optional</span></label>
								<input class="form-control" type="text" maxlength="50" name="nombreBuscar" id="nombreBuscar" value="">
							</div>
							<div class="form-group w3-agile col-md-4">
								<label class="control-label" for="initial-1">ID </label>
								<input class="form-control" id="initial-1" name="id" id="id" value=""  type="text" maxlength="50">
							</div>
						</fieldset>
					</div>
				
					<button type="submit" value="Submit" class="btn btn-lg agile btn-primary submit">Submit</button>
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