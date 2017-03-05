<?php include_once "header.html" ?>
	<?php
		session_start();
		include "includes/parking.php";
		$car_type = $_POST['car_type'];
		take_car($car_type);
	 ?>
<?php include_once "footer.html" ?>