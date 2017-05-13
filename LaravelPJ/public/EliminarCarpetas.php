<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact - Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<?php
					$variable1=($_GET['var1']);
					echo $variable1;
		?>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
				</header>

			<!-- Main -->
				<section id="main" class="container 75%">
					<header>
						<h2>Visualizacion de Datos </h2>
					</header>

 <?php
			$conn = oci_connect('video1', 'lisbeth', 'localhost/xe');
			$stid1 = oci_parse($conn, 'select ID_USUARIO from USUARIO
									where usr_nombre= :myid');
			oci_bind_by_name($stid1, ':myid', $variable1);
			oci_execute($stid1);

			echo "<table>\n";
			while (($row1 = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
			echo "<tr>\n";
			foreach ($row1 as $item1) {
			echo " Su id es: <td>".($item1 !== null ? htmlentities($item1, ENT_QUOTES) : "&nbsp;")."</td>\n";
			}
				echo "</tr>\n";
				}
			echo "</table>\n";

			$stid = oci_parse($conn, 'Select NOMBRE, ID_CARPETA from CARPETA where USUARIO_ID_USUARIO=:myil');
			oci_bind_by_name($stid, ':myil', $item1);
			oci_execute($stid);

			echo "<table>\n";
			while (($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
			echo "<tr>\n";
			foreach ($row as $item) {
			echo " <td>".($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</td>\n";
			}
				echo "</tr>\n";
				}
			echo "</table>\n";

?>						
						<form name="formulario"method="get"action="Gestores/Res12.php">
							<div class="row uniform 50%">
								<div class="12u">
									<input type="text" name="elimarcarpe" id="elimarcarpe" value="" placeholder="id del archivo qeu desea eliminar" />
								</div>
							</div>
							<div class="row uniform">
								<div class="12u">
									<ul class="actions align-center">
										<li><input type="submit" value="Eliminar" /></li>
									</ul>
								</div>
							</div>
						</form>

									<ul class="actions">
										<li><a href="visDatos.php" class="button special">Regresar</a></li><br><br>
									</ul>


				</section>
		</div>
	</body>
</html>