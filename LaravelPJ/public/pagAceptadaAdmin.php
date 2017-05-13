<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Administrador</title>
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
					<h1><a href="index.html">Alpha</a> by HTML5 UP</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Layouts</a>
								<ul>
									<li><a href="generic.html">Generic</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="elements.html">Elements</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Bienvenido Administrador</h2>
						<p>Perfil</p>
					</header>

					<div class="row">
						<div class="12u">

							<!-- Lists -->
								<section class="box">

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="RegistroAdmin.php" class="button special">Crear cuentas de usuarios</a></li><br><br>
										<li><a href="visDatos.php" class="button">Eliminar, visualizar y actualizar datos de clientes</a></li><br><br>
										<li><a href="#" class="button special">Eliminar, visualizar y actualizar datos de usuarios</a></li><br><br>
									</ul>
									<ul class="actions small">
										<li><a href="pdf/reporte4.php" class="button">Bitacora </a></li><br><br>
									</ul>
								</section>
						</div>
					</div>
				</section>
		</div>
	</body>
</html>