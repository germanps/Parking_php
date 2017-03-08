jQuery(document).ready(function($) {

	//Mostrar/esconder info parking
	$('#smartCars a').click(function(e) {
		$('#smartCarsTable').slideToggle(200);
		printAjaxSmall();
	});
	$('#bigCars a').click(function(e) {
		$('#bigCarsTable').slideToggle(200);
		printAjaxBig();
	});

	function printAjaxSmall(){
		$.ajax({
		  type: 'GET',
		  url: 'includes/small_ajax.php',
		  data: 'id=testdata',
		  cache: false,
		  success: function(data) {
		    result = data.split('~');
		    //imprimimos la tabla con valores del servidor
		    $('#smartCarsTable table td span.resul').each(function(index, el) {
		    	$(this).html(result[index]);
		    });
		  },
		});
	}

	function printAjaxBig(){
		$.ajax({
		  type: 'GET',
		  url: 'includes/big_ajax.php',
		  data: 'id=testdata',
		  cache: false,
		  success: function(data) {
		    result = data.split('~');
		    //imprimimos la tabla con valores del servidor
		    $('#bigCarsTable table td span.resul').each(function(index, el) {
		    	$(this).html(result[index]);
		    });
		  },
		});
	}

});

