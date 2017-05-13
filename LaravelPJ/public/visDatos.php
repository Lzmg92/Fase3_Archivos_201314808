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
				<section id="main" class="container 75%">
					<header>
						<h2>Visualizacion, Eliminacion y Modificacion de Datos para Usuarios</h2>
					</header>
					<div class="box">
						<form name="formulario"method="get"action="Gestores/Res3.php">
							<div class="row uniform 50%">
								<div class="12u">
									<p>Escriba el nombre del usuario para ver su informacion:</p>
									<input type="text" name="nombre" id="nombre" value="" placeholder="nombre" />
								</div>
							</div>
							<div class="row uniform">
								<div class="12u">
									<ul class="actions align-center">
										<li><input type="submit" value="Aceptar" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>

					<div class="box">
						<form name="formulario"method="get"action="Gestores/Res4.php">
							<div class="row uniform 50%">
								<div class="12u">
									<p>Escriba el nombre del usuario para eliminar:</p>
									<input type="text" name="elim" id="elim" value="" placeholder="nombre" />
								</div>
							</div>
							<div class="row uniform">
								<div class="12u">
									<ul class="actions align-center">
										<li><input type="submit" value="Aceptar" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
					<div class="box">
						<form name="formulario"method="get"action="edicionAdmin.php">
							<div class="row uniform 50%">
								<div class="12u">
									<p>Escriba el nombre del usuario para actualizar sus datos:</p>
									<input type="text" name="modfi" id="modfi" value="" placeholder="nombre" />
								</div>
							</div>
							<div class="row uniform">
								<div class="12u">
									<ul class="actions align-center">
										<li><input type="submit" value="Aceptar" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</section>
		</div>
	</body>
</html>