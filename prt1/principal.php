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
					<p id="smallCount" class="text-info bg-info">
					<?php 

					$cont_big = 0;
					$cont_small = 0;
					$cont_small_big = 0;

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


					<p><?php //print_r($_SESSION['small']); ?></p>
				</li>
				<li class="counter">
					<p class="text-info">Aforo parking grande</p>
					<p id="bigCount" class="text-info bg-info">
					<?php

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
				      <td><span>1 </span><span class="resul">(vacia)</span></td>
				      <td><span>2 </span><span class="resul">(vacia)</span></td>
				      <td><span>3 </span><span class="resul">(vacia)</span></td>
				    </tr>
				    <tr class="success">
				      <td><span>4 </span><span class="resul">(vacia)</span></td>
				      <td><span>5 </span><span class="resul">(vacia)</span></td>
				      <td><span>6 </span><span class="resul">(vacia)</span></td>
				    </tr>
				    <tr class="danger">
				      <td><span>7 </span><span class="resul">(vacia)</span></td>
				      <td><span>8 </span><span class="resul">(vacia)</span></td>
				      <td><span>9 </span><span class="resul">(vacia)</span></td>
				    </tr>
				    <tr class="warning">
				      <td> <span>10 </span><span class="resul">(vacia)</span></td>
				      <td> <span>11 </span><span class="resul">(vacia)</span></td>
				      <td> <span>12 </span><span class="resul">(vacia)</span></td>
				    </tr>
				    <tr class="active">
				      <td> <span>13 </span><span class="resul">(vacia)</span></td>
				      <td> <span>14 </span><span class="resul">(vacia)</span></td>
				      <td> OCUPADA </td>
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
				      <td><span>1 </span><span class="resul">(vacia)</span> </td>
				      <td><span>2 </span><span class="resul">(vacia)</span> </td>
				      <td><span>3 </span><span class="resul">(vacia)</span> </td>
				    </tr>
				    <tr class="success">
				      <td><span>4 </span><span class="resul">(vacia)</span> </td>
				      <td><span>5 </span><span class="resul">(vacia)</span> </td>
				      <td><span>6 </span><span class="resul">(vacia)</span> </td>
				    </tr>
				    <tr class="danger">
				      <td><span>7 </span><span class="resul">(vacia)</span> </td>
				      <td><span>8 </span><span class="resul">(vacia)</span> </td>
				      <td><span>9 </span><span class="resul">(vacia)</span> </td>
				    </tr>
				    <tr class="warning">
				      <td><span>10 </span><span class="resul">(vacia)</span> </td>
				      <td> OCUPADA </td>
				      <td> OCUPADA </td>
				    </tr>
				  </tbody>
				</table> 
			</div>	
		</section>
	</div>

<?php include_once "footer.html" ?>
