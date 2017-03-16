<?php include_once "header.html" ?>
<?php session_start() ?>
	<h3 class="text-warning bg-primary text-center">Parking Barcelona</h3>
	<section class="content-wrapper">
		<form action="take.php" method="post" class="form-horizontal">
		  <fieldset>
		    <legend class="text-danger">Retirar vehículo</legend>

		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-12 control-label">Elige el tamaño del coche</label>
		      <div class="col-lg-10">
		         <select class="form-control" id="carSelect" name="car_type">
		          <option>Pequeño</option>
		          <option>Grande</option>
		        </select>
		      </div>
		    </div> <!-- .form-group -->

		    <div class="form-group">
		      <div class="col-lg-10">
		        <button name="submit" type="submit" class="btn btn-primary">Retirar Coche</button>
		        <a href='principal.php' class='btn btn-info'>Menú Principal</a>
		      </div>
		    </div> <!-- .form-group -->

		  </fieldset>
		</form>
	</section>
	<aside class="info-wrapper">
		<div class="wrapper">
			<p class="sq-text">Indicar tamaño del coche para poder buscarlo en el parking</p>
		</div>	
	</aside>
<?php include_once "footer.html" ?>