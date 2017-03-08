<?php include_once "header.html" ?>
	<?php
		session_start();
		include "includes/parking.php";
		$car_type = $_POST['car_type'];
		take_car($car_type);
		
		//Esto sólo se imprime cuando quieres sacar un coche grande pero en el parking grande sólo hay coches pequeños
		echo "<p class='text-warning bg-danger'>No hay coches grandes en el parking</p>";
		echo "<a href='principal.php' class='btn btn-danger'>Menú Principal</a>";
	 ?>
<?php include_once "footer.html" ?>