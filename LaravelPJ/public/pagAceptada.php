<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Gestiones Cliente</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Css3 link hover effects,hover effects, css3 hover effects, ancher link hover effects,Elements"./>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!-- webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Lora|Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600' rel='stylesheet' type='text/css'>
<!-- webfonts-->
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
</style>

</head>
<body>


<div class="w3-bar w3-border w3-light-grey">
  <a href="#" style="width:33.33%" class="w3-bar-item w3-button w3-mobile w3-green">Acciones</a>
  <a href="#" style="width:33.33%" class="w3-bar-item w3-button w3-mobile">Acerca de nosotros</a>
  <a href="login.php" style="width:33.33%" class="w3-bar-item w3-button w3-mobile">Salir</a>
</div>


	<div class="hover-buttons">
		<div class="wrap">
			<div class="bg-effect">
				<h1>Acciones para clientes: </h2>
				<ul class="bt-list">

				<h2>Visualizar archivos</h2>
					<li>
						<a href="MostrarCar.php?var1=<?php echo $variable1 ?>" class="hvr-fade button">Archivos y carpetas</a>
						<a href="OrdenDS.php" class="hvr-back-pulse button">Descendente</a>
						<a href="OrdenAS.php" class="hvr-sweep-to-right button">Ascendente</a>
					</li>

				<h2>Gestiones de archivos</h2>
					<li>
						<a href="AgregarArchivo.php?var1=<?php echo $variable1 ?>" class="hvr-bounce-to-right button">Crear Nuevo</a>
						<a href="MostrarD.php?var1=<?php echo $variable1 ?>" class="hvr-sweep-to-bottom button">Ver Contenido</a>
						<a href="ModificarArchivo.php?var1=<?php echo $variable1 ?>" class="hvr-sweep-to-top button">Modificar</a>
						<a href="EliminarArchivos.php?var1=<?php echo $variable1 ?>" class="hvr-bounce-to-left button">Eliminar</a>
					</li>

				<h2>Gestiones de carpetas</h2>
					<li>
						<a href="AgregarCarpeta.php?var1=<?php echo $variable1 ?>" class="hvr-bounce-to-bottom button">Crear Nueva</a>
						<a href="EliminarCarpetas.php?var1=<?php echo $variable1 ?>"class="hvr-bounce-to-top button">Eliminar</a>
					</li>
					
				</ul>
			</div>
			

			</div>
		</div>
	</div>
							<div class="copy-right">
								<div class="wrap">
											<p>Copyright &copy; 2015  All rights  Reserved | Template by &nbsp;<a href="http://w3layouts.com">W3Layouts</a></p>

									</div>	
							</div>	
	</body>
</html>