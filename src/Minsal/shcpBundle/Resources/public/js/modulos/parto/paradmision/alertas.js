jQuery(document).ready(function() {
    
		var lista=$('#rotura>ul').attr('id');
		
		$('.iradio_minimal').each(function(index, val) {
			 /* iterate through array or object */

			 switch(index){
			 	case 1:
			 	case 2:
			 	case 5:
			 	case 6:
			 	case 9:
			 	case 10:
			 	case 11:
			 	case 13:
			 	case 14:
			 	case 15:
			 	case 19:
			 	case 20:
			 	case 22:
			 	case 26:
			 	case 30:
			 		$(this).addClass('alertasradios');
			 	break;
			 	default:
			 		$(this).addClass('radiosnormales');
			 	break;
			 }
		});
	
		//metodos, si es necesario implementar algo al hacer click en si o no de rotura
		/*$('#'+lista+'>li:nth-child(1)>label>div>ins').on('click', function(event) {
			$('').addClass('obligatorio')
		});
		
		$('#'+lista+'_1').on('click', function(event) {
			alert('no');
		});*/
		

	$('.temp').on('keyup', function(event) {
		var temperatura = $(this).val();
		if (temperatura>=38) {
			$('.tempmayor>li>label>div').addClass('checked');
		}
		else{
			$('.tempmayor>li>label>div').removeClass('checked');
		}
	});

	$('.tempmayor>li>label>div>ins').on('click', function(event) {
		var temperatura = $('.temp').val();
		if (temperatura>=38) {
			$('.tempmayor>li>label>div').addClass('checked');
		}
		else{
			$('.tempmayor>li>label>div').removeClass('checked');
		}
		
		/* Act on the event */
	});


});