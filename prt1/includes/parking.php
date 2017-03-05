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
						echo "Parking totalmente completo, vuelva mas tarde";
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
					echo "Parking de coches grandes lleno";
				}
			}						
		}
	}
	/****************************************************/
	/* === Función que decide la lógina sacar coche === */
	/****************************************************/
	function take_car($car_type){
		//si no hay coches en los garajes volvemos al menú principal
		if (!isset($_SESSION['small']) || !isset($_SESSION['big'])) {
			echo "<script>
						alert('No hay coches en el garaje!');
						window.location.href='principal.php';
				 </script>";
			//header('Location: principal.php');
		}
		
		if ($car_type == "Pequeño") {
			//verificamos que el parking no esté vacio
			if (count($_SESSION['small']) > 0) {
				array_pop($_SESSION['small']);
				echo "<script>
						alert('Hemos retirado su coche pequeño!');
						window.location.href='principal.php';
					  </script>";
				//header('Location: principal.php');
			}else{
				echo "<p class='text-warning bg-danger'>No hay coches pequeños en el parking</p>";
				echo "<a href='principal.php' class='btn btn-danger'>Menú Principal</a>";
			}
		}elseif($car_type == "Grande"){
			//verificamos que el parking no esté vacio
			if (count($_SESSION['big']) > 0) {
				array_pop($_SESSION['big']);
				echo "<script>
						alert('Hemos retirado su coche grande!');
						window.location.href='principal.php';
					  </script>";
				//header('Location: principal.php');
			}else{
				echo "<p class='text-warning bg-danger'>No hay coches grandes en el parking</p>";
				echo "<a href='principal.php' class='btn btn-danger'>Menú Principal</a>";
			}
		}
	}

	/************************************/
	/* === Funciones imprime contadores === */
	/************************************/

	function imprime_marcador(){

	}


	function imprime_contador_gra(){
		$cont_big = 0;
		if (!isset($_SESSION['big']) || count($_SESSION['big']) < 1) {
			echo $cont_big;
		}else{
			foreach ($_SESSION['big'] as $key => $value) {
				if ($value == 'Coche Grande') {
					$cont_big++;
				}
			}
			echo $cont_big;
			//print_r($_SESSION['big']);
		}	
	}
	function imprime_contador_peq(){
		$cont_small = 0;
		if (!isset($_SESSION['small']) || count($_SESSION['small']) < 1) {
			echo $cont_small;
		}else{
			
			foreach ($_SESSION['small'] as $key => $value) {
				if ($value == 'Coche Pequeño') {
					$cont_small++;
				}
			}
			
			echo $cont_small;
			//print_r($_SESSION['big']);
		}

	}

 ?>