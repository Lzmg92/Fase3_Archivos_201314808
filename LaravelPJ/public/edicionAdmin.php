<!DOCTYPE HTML>
<html>
	<head>
		<title>Edicion</title>
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
				</header>

			<!-- Main -->
				<section id="main" class="container 75%">
					<header>
						<h2>Edicion de Usuarios</h2>
					</header>
					<div class="box">
						<form name="formulario"method="get"action="Gestores/Res5.php">

							<div class="row uniform 50%">
								<h4>Nombre del usuario a modificar:</h4>
								<div class="12u">
									<input type="text" name="base" id="base" value="" placeholder="base" />
								</div>
							</div>

							<div class="row uniform 50%">
								<div class="6u 12u(mobilep)">
									<input type="text" name="nombreC" id="nombreC" value="" placeholder="Nombre" />
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
								<div class="6u 12u(mobilep)">
									<input type="text" name="rol" id="rol" value="" placeholder="rol" />
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="6u 12u(mobilep)">
									<input type="text" name="activo" id="activo" value="" placeholder="activo" />
								</div>
								<div class="6u 12u(mobilep)">
									<input type="text" name="grupo" id="grupo" value="" placeholder="grupo" />
								</div>
							</div>
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