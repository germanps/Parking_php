<?php include_once "header.html" ?>
	<?php
		session_start();
		include "../controller/parking.php";
		$car_type = $_POST['car_type'];
		take_car($car_type);
		
		echo "<p class='text-warning bg-danger'>No hay coches grandes en el parking</p>";
		echo "<a href='principal.php' class='btn btn-danger'>Menú Principal</a>";
	 ?>
<?php include_once "footer.html" ?>