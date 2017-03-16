<?php
	/****************************************************/
	/* == Función que decide la lógina aparcar coche == */
	/****************************************************/
	function park_car($car_type){
		if (isset($car_type)) {
			//si el coche es pequeño
			if ($car_type == "Pequeño") {
				//comprobamos que el parking de coches pequeños no esté lleno (<14)
				if (count($_SESSION['small']) < 14) {
					array_push($_SESSION['small'], 'Coche Pequeño');
					echo "<script>
							alert('Coche pequeño aparcado!');
							window.location.href='principal.php';
						  </script>";
					//header('Location: principal.php');
				}else{
					//comprobamos que el parkin de coches grandes no esté lleno (<10)
					if (count($_SESSION['big']) < 10) {
						array_push($_SESSION['big'], 'Coche Pequeño');
						echo "<script>
								alert('Coche Pequeño aparcado en plaza Grande!');
								window.location.href='principal.php';
							  </script>";
						//header('Location: principal.php');
					}else{
						echo "<p class='text-danger'>Parking completo, vuelva mas tarde</p>";
						echo "<a href='principal.php' class='btn btn-info'>Menú Principal</a>";
					}
				}
				//si el coche es grande			
			}else{
				//comprobamos que en el parking de coches grandes haya sitio y aparcamos
				if (count($_SESSION['big']) < 10) {
					array_push($_SESSION['big'], 'Coche Grande');
					echo "<script>
							alert('Coche grande aparcado!');
							window.location.href='principal.php';
						  </script>";
					//header('Location: principal.php');
				}else{
					//si no hay sitio para coches grandes no puede aparcar
					echo "<p class='text-danger'>Parking de coches grandes lleno</p>";
					echo "<a href='principal.php' class='btn btn-info'>Menú Principal</a>";
				}
			}						
		}
	}
	/****************************************************/
	/* === Función que decide la lógina sacar coche === */
	/****************************************************/
	function take_car($car_type){
		$control = 0;
		//si no hay coches en los garajes volvemos al menú principal
		if (!isset($_SESSION['small']) || !isset($_SESSION['big'])) {
			echo "<script>
						alert('No hay coches en el garaje!');
						window.location.href='principal.php';
				 </script>";
		}
		
		if ($car_type == "Pequeño") {
			//Antes de nada verificamos que haya pequeños en el grande
			if (count($_SESSION['big']) > 0) {
				foreach ($_SESSION['big'] as $key => $value) {
					if ($value == "Coche Pequeño") {
						unset($_SESSION['big'][$key]);
						$control = 1;
						echo "<script>
									alert('Hemos sacado un coche pequeño del parking grande!');
									window.location.href='principal.php';
							 </script>";
						//break para que solo saque un coche pequeño del grande
						break;
					}
				}
			}
			//verificamos que el parking pequeño no esté vacio
			if (count($_SESSION['small']) > 0 && $control == 0) {
				array_pop($_SESSION['small']);
				echo "<script>
						alert('Hemos retirado su coche pequeño!');
						window.location.href='principal.php';
					  </script>";
			}else{
				echo "<p class='text-warning bg-danger'>No hay coches pequeños en el parking</p>";
				echo "<a href='principal.php' class='btn btn-danger'>Menú Principal</a>";
			}
		}elseif($car_type == "Grande"){
			//verificamos que el parking no esté vacio
			if (count($_SESSION['big']) > 0) {
				foreach ($_SESSION['big'] as $key => $value) {
					if ($value == "Coche Pequeño") {
						continue;
						
					}else{
						unset($_SESSION['big'][$key]);
						echo "<script>
								alert('Hemos retirado su coche grande!');
								window.location.href='principal.php';
							  </script>";
						//break para que sólo saque un coche grande
						break;
					}
				}
				
			}else{
				//echo "<p class='text-warning bg-danger'>No hay coches grandes en el parking</p>";
				//echo "<a href='principal.php' class='btn btn-danger'>Menú Principal</a>";
			}
		}
	}

	/************************************/
	/* === Funciones imprime contadores === */
	/************************************/

	
	function print_big($cont_big,$cont_small,$cont_small_big){
		if (isset($_SESSION['big'])) {
			foreach ($_SESSION['big'] as $key => $value) {
				if ($value == 'Coche Grande') {
					$cont_big++;
				}elseif ($value == 'Coche Pequeño') {
					$cont_small_big++;
				}
			}
			//imprimimos cantidad total de coches en plazas grandes
			echo ($cont_big + $cont_small_big) . "/10";
		}else{
			//si no hay array imprimimos un fake 
			echo "0/10";
		}
		
	}

	function print_small($cont_big,$cont_small,$cont_small_big){
		if (isset($_SESSION['small'])) {
			foreach ($_SESSION['small'] as $key => $value) {
				if ($value == 'Coche Pequeño') {
					$cont_small++;
				}
			}
			//imprimimos cantidad coches en plazas pequeñas
			echo "$cont_small/14";
		}else{
			//si no hay array imprimimos un fake 
			echo "0/14";
		}	
	}

 ?>