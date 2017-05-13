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

					<?php
					       $id1 = 3;
       $nombre = 'musica';
       $contra = '777';
       $correo1 = 4;
       $Telefono1 = 2;


									$conn = oci_connect('video1', 'lisbeth', 'localhost/xe');
$stid = oci_parse($conn, 'INSERT INTO CARPETA (id_carpeta, nombre, permisos, CARPETA_id_carpeta, USUARIO_id_usuario) VALUES(:myid, :mydata, :mydata1,:data1, :datotel)');

oci_bind_by_name($stid, ':myid', $id1);
oci_bind_by_name($stid, ':mydata', $nombre);
oci_bind_by_name($stid, ':mydata1', $contra);
oci_bind_by_name($stid, ':data1', $correo1);
oci_bind_by_name($stid, ':datotel', $Telefono1);

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


									<ul class="actions">
										<li><a href="MostrarCar1.php" class="Regresar">Regresar</a></li><br><br>
									</ul>


				</section>
		</div>
	</body>
</html>