<?php include_once "header.html" ?>
<?php include "includes/parking.php"; ?>
<?php session_start() ?>
	<h3 class="text-warning bg-primary text-center">Parking Barcelona</h3>
	<div class="welcome-menu">
		<section class="menu-options">
			<h4 class="text-info">Bienvenido al Parking Barcelona - Elige una opción</h4>
			<ul class="menu-options-list clearfix">
				<li>
					<a href="park_car.php" class="btn btn-success">Aparcar Coche</a>
				</li>
				<li>
					<a href="take_car.php" class="btn btn-danger">Retirar Coche</a>
				</li>
				<li class="counter">
					<p class="text-info">Aforo parking pequeño</p>
					<p id="smallCount" class="text-info bg-info"><?php 
					
					//imprime_contador_peq();

					//variables contador
					$cont_big = 0;
					$cont_small = 0;
					//verificamos cuantos coches pequeños hay en el array small
					foreach ($_SESSION['small'] as $key => $value) {
						if ($value == 'Coche Pequeño') {
							$cont_small++;
						}
					}
					//imprimimos cantidad coches en plazas pequeñas
					echo "$cont_small/14"; 

					?></p>


					<p><?php //print_r($_SESSION['small']); ?></p>
				</li>
				<li class="counter">
					<p class="text-info">Aforo parking grande</p>
					<p id="bigCount" class="text-info bg-info">
					<?php

					//imprime_contador_gra();

					//verificamos cuantos coches grandes hay en el array big
					foreach ($_SESSION['big'] as $key => $value) {
						if ($value == 'Coche Grande') {
							$cont_big++;
						}
					}
					//comprobamos si el array small esta lleno y el big aún tiene sitio
					if (count($_SESSION['small']) == 14 && count($_SESSION['big'] < 10))  {
						//entonces comprobamos los coches pequeños que hay en el array big
						foreach ($_SESSION['big'] as $key => $value) {
							if ($value == 'Coche Pequeño') {
								//y sumamos uno al contador (será pequeño pero está en la plaza grande)
								$cont_big++;
							}
						}
					}
					//imprimimos cantidad coches en plazas grandes
					echo "$cont_big/10";

					?></p>


					<p><?php //print_r($_SESSION['big']); ?></p>
				</li>
			</ul>
		</section>
		<hr>
		<section id="smartCars" class="info-wrapper">
			<a href="#" class="btn btn-primary">Info Parking Pequeño</a>
			<div id="bigTableContainer" class="wrapper">
				<table class="table table-striped table-hover ">
				  <thead>
				    <tr>
				      <th class="title" colspan='3'>Parking coches pequeños</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr class="info">
				      <td> 1 (vacia) </td>
				      <td> 2 (vacia) </td>
				      <td> 3 (vacia) </td>
				    </tr>
				    <tr class="success">
				      <td> 4 (vacia) </td>
				      <td> 5 (vacia) </td>
				      <td> 6 (vacia) </td>
				    </tr>
				    <tr class="danger">
				      <td> 7 (vacia) </td>
				      <td> 8 (vacia) </td>
				      <td> 9 (vacia) </td>
				    </tr>
				    <tr class="warning">
				      <td> 10 (vacia) </td>
				      <td> 11 (vacia) </td>
				      <td> 12 (vacia) </td>
				    </tr>
				    <tr class="active">
				      <td> 13 (vacia) </td>
				      <td> 14 (vacia) </td>
				      <td> OCUPADA </td>
				    </tr>
				  </tbody>
				</table> 
			</div>	
		</section>
		<section id="bigCars" class="info-wrapper">
			<a href="#" class="btn btn-primary">Info Parking Grande</a>
			<div id="smallTableContainer" class="wrapper">
				<table class="table table-striped table-hover ">
				  <thead>
				    <tr>
				      <th class="title" colspan='3'>Parking coches grandes</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr class="info">
				      <td> 1 (vacia) </td>
				      <td> 2 (vacia) </td>
				      <td> 3 (vacia) </td>
				    </tr>
				    <tr class="success">
				      <td> 4 (vacia) </td>
				      <td> 5 (vacia) </td>
				      <td> 6 (vacia) </td>
				    </tr>
				    <tr class="danger">
				      <td> 7 (vacia) </td>
				      <td> 8 (vacia) </td>
				      <td> 9 (vacia) </td>
				    </tr>
				    <tr class="warning">
				      <td> 10 (vacia) </td>
				      <td> OCUPADA </td>
				      <td> OCUPADA </td>
				    </tr>
				  </tbody>
				</table> 
			</div>	
		</section>
	</div>

<?php include_once "footer.html" ?>
