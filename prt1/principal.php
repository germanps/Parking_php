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
					<p class="text-info sq-font">Aforo parking grande</p>
					<p id="bigCount" class="text-info bg-info sq-font">
					<?php

					//Declaramos los contadores
					$cont_big = 0;
					$cont_small = 0;
					$cont_small_big = 0;

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

					?></p>

				</li>
				<li class="counter">
					<p class="text-info sq-font">Aforo parking pequeño</p>
					<p id="smallCount" class="text-info bg-info sq-font">
					<?php 

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

					?></p>
				</li>
			</ul>
		</section>
		<hr>
		<section id="smartCars" class="info-wrapper">
			<a href="#" class="btn btn-primary">Info Parking Pequeño</a>
			<div id="smartCarsTable" class="wrapper">
				<table class="table table-striped table-hover ">
				  <thead>
				    <tr>
				      <th class="title" colspan='3'>Parking coches pequeños</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr class="info">
				      <td>
				      	<p class="text-primary">Plaza 1</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 2</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 3</p>
				      	<span class="resul"></span>
				      </td>
				    </tr>
				    <tr class="success">
				      <td>
				      	<p class="text-primary">Plaza 4</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 5</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 6</p>
				      	<span class="resul"></span>
				      </td>
				    </tr>
				    <tr class="danger">
				      <td>
				      	<p class="text-primary">Plaza 7</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 8</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 9</p>
				      	<span class="resul"></span>
				      </td>
				    </tr>
				    <tr class="warning">
				     <td>
				      	<p class="text-primary">Plaza 10</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 11</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 12</p>
				      	<span class="resul"></span>
				      </td>
				    </tr>
				    <tr class="active">
				      <td>
				      	<p class="text-primary">Plaza 13</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 14</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				 		<span class="resul">RESERVADA</span>
				      </td>
				    </tr>
				  </tbody>
				</table> 
			</div>	
		</section>
		<section id="bigCars" class="info-wrapper">
			<a href="#" class="btn btn-primary">Info Parking Grande</a>
			<div id="bigCarsTable" class="wrapper">
				<table class="table table-striped table-hover ">
				  <thead>
				    <tr>
				      <th class="title" colspan='3'>Parking coches grandes</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr class="info">
				      <td>
				      	<p class="text-primary">Plaza 1</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 2</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 3</p>
				      	<span class="resul"></span>
				      </td>
				    </tr>
				    <tr class="success">
				      <td>
				      	<p class="text-primary">Plaza 4</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 5</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 6</p>
				      	<span class="resul"></span>
				      </td>
				    </tr>
				    <tr class="danger">
				      <td>
				      	<p class="text-primary">Plaza 7</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 8</p>
				      	<span class="resul"></span>
				      </td>
				      <td>
				      	<p class="text-primary">Plaza 9</p>
				      	<span class="resul"></span>
				      </td>
				    </tr>
				    <tr class="warning">
				      <td>
				      	<p class="text-primary">Plaza 10</p>
				      	<span class="resul"></span>
				      </td>
				      <td> RESERVADA </td>
				      <td> RESERVADA </td>
				    </tr>
				  </tbody>
				</table> 
			</div>	
		</section>
	</div>

<?php include_once "footer.html" ?>
