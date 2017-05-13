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
			$variable1=($_GET['variable1']);
			echo "$variable1";
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
							<h4>Para Carpetas </h4>
						
									<?php

									$conn = oci_connect('video1', 'lisbeth', 'localhost/xe');
									$jj='archivo';

									$stid = oci_parse($conn, 'SELECT nombre_car_arch NOMBRE, fecha FECHA, tipo TIPO
									FROM BITACORA
									where tipo = \'carpeta\'
									GROUP BY nombre_car_arch, fecha, tipo
									ORDER BY fecha asc');
									oci_execute($stid);

									echo "<table>\n";
									while (($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
									    echo "<tr>\n";
									    foreach ($row as $item) {
									        echo "  <td>".($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</td>\n";
									    }
									    echo "</tr>\n";
									}
									echo "</table>\n";

									echo " ";
									echo " ";	
									?>



							<h4>Para Archivos </h4>


									<?php

									$stid2 = oci_parse($conn, 'SELECT nombre_car_arch NOMBRE, fecha FECHA, contenido_arch CONTENIDO
									FROM BITACORA
									where tipo = \'archivo\'
									GROUP BY nombre_car_arch, fecha, contenido_arch
									ORDER BY fecha asc');
									oci_execute($stid2);

									echo "<table>\n";
									while (($row2 = oci_fetch_array($stid2, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
									    echo "<tr>\n";
									    foreach ($row2 as $item2) {
									        echo "  <td>".($item2 !== null ? htmlentities($item2, ENT_QUOTES) : "&nbsp;")."</td>\n";
									    }
									    echo "</tr>\n";
									}
									echo "</table>\n";

									?>

	
									<ul class="actions">
										<li><a href="visDatos.php" class="button special">Regresar</a></li><br><br>
									</ul>


				</section>
		</div>
	</body>
</html>