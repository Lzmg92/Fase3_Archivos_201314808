<!DOCTYPE HTML>
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
							<li><a href="ini.html">Home</a></li>
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
						<h2>Registro</h2>
						<p>Crear nuevo usuario.</p>
					</header>
					<div class="box">
						<form name="formulario"method="get"action="Gestores/Res1.php">
							<div class="row uniform 50%">
								<div class="6u 12u(mobilep)">
									<input type="text" name="name" id="name" value="" placeholder="Nombre" />
								</div>
								<div class="6u 12u(mobilep)">
									<input type="text" name="contra" id="contra" value="" placeholder="Contraseña" />
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u">
									<input type="text" name="correo" id="correo" value="" placeholder="Correo electornico" />
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="6u 12u(mobilep)">
									<input type="text" name="Telefono" id="Telefono" value="" placeholder="Telefono" />
								</div>
								<div class="6u 12u(mobilep)">
									<input type="text" name="genero" id="genero" value="" placeholder="genero" />
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="6u 12u(mobilep)">
									<input type="text" name="direc" id="direc" value="" placeholder="direccion" />
								</div>
								<div class="6u 12u(mobilep)">
									<input type="text" name="fecha" id="fecha" value="" placeholder="fecha dd/mm/yyyy" />
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u">
									<input type="text" name="id" id="id" value="" placeholder="id" />
								</div>	
							<div class="row uniform">
								<div class="12u">
									<ul class="actions align-center">
										<li><input type="submit" value="Send Message" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</section>
		</div>

	</body>
</html>