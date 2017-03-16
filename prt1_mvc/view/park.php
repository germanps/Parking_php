<?php include_once "header.html" ?>
	<?php 
		session_start();
		include "../controller/parking.php";
		$car_type = $_POST['car_type'];
		//aseguramos de no reescribir las variables de sesión
		if (!isset($_SESSION['big'])) {
			$_SESSION['big'] = array();
			/*for ($i=0; $i < 10; $i++) { 
				$_SESSION['big'][$i] = 0;
			}*/
		}
		if (!isset($_SESSION['small'])) {
			$_SESSION['small'] = array();
			/*for ($i=0; $i < 14; $i++) { 
				$_SESSION['small'][$i] = 0;
			}*/
		}
		park_car($car_type);
	?>
<?php include_once "footer.html" ?>