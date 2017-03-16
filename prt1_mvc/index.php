<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Practica 1</title>
	<link rel="stylesheet" href="src/css/bootstrap.css">
	<link rel="stylesheet" href="src/css/main.css">
</head>
<body>
<main class="container">
	<div class="wrapper">
		<div class="header">
			<h1 class="text-center bg-info"> <!-- DAW M07 UF2 - PR1 <i class="text-primary"> #Germán Pla</i></h1>-->
			<h2 class="text-center text-info bg-info">Arrays y sesiones en php</h2>
		</div>
	</div>
	<div class="wrapper">
		<div class="principal">

			<p class="sq-text">
				Realizar una aplicación que simule el funcionamiento de un parking que dispone de las siguientes plazas: 14 para coches pequeños y 10 para coches grandes. Usa dos arrays para representar el parking. Las posiciones de los arrays representarán las plazas, y almacenarán información de si la plaza está ocupada o no (puedes usar un valor numérico, como 0 para plaza libre, 1 para plaza ocupada).
			</p>
			<p class="sq-text">
				Los coches se aparcarán de la siguiente forma: cuando entra en el parking, se identifica al coche como grande o pequeño. Los coches grandes aparcan en la primera plaza grande que encuentren. En cambio, los coches pequeños aparcaran en la primera plaza pequeña que encuentren, pero, de no encontrar ninguna, intentarán aparcar en la primera plaza grande libre que vean.
			</p>
			<p class="sq-text">La aplicación tendrás las siguientes páginas:</p>
			<ol class="sq-text">
				<li>Página inicial donde se mostrarán las siguientes opciones:
					<ul>
						<li>Aparcar coche.</li>
						<li>Retirar coche</li>
						<li>Ver estado del parking</li>
					</ul>
					<span class="text-danger xs-text">Cada una de las opciones anteriores nos llevará a una página donde se ejecutarán las operaciones necesarias para llevar a cabo la opción seleccionada por el usuario. Éstas se detallan a continuación.</span>
				</li>
				<li>
					Aparcar Coche: mediante un formulario se indicará si el coche es grande o pequeño. A continuación se procederá a aparcar usando el mecanismo que se ha explicado previamente. Obtendremos un mensaje que nos indicará si el coche se ha aparcado (no es necesario indicar la plaza), o si el parking está lleno.
				</li>
				<li>
					Retirar coche: mediante un formulario se indicará de qué parking se quiere retirar el coche (parking grande o parking pequeño) y la plaza que ocupa el vehículo. El programa mostrará un mensaje indicando si se ha retirado el coche, o si no se encontraba ningún coche en la plaza indicada.
				</li>
				<li>
					Ver estado del parking: se mostrará por pantalla el estado de cada plaza del parking, indicando si está libre u ocupada.
				</li>
			</ol>
			<p class="text-danger xs-text">* Consideraciones: recuerda que para pasar datos no incluidos en un formulario de una página a otra puedes usar sesiones.</p>

			<a href="view/principal.php" class="btn btn-success">Ir al parking</a>


		</div>
	</div>
</main>
<footer class="container">
	<div class="wrapper">
		<p class="text-warning">Parking Barcelona -  Todos los derechos reservados</p>
	</div>
</footer>

</body>
</html> 