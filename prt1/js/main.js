jQuery(document).ready(function($) {

	//Mostrar/esconder info parking
	$('#smartCars a').click(function(e) {
		$('#bigTableContainer').slideToggle(200);
	});
	$('#bigCars a').click(function(e) {
		$('#smallTableContainer').slideToggle(200);
	});
});