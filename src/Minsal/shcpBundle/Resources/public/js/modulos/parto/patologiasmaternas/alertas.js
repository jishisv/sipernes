jQuery(document).ready(function() {
    
		

		$('.iradio_minimal').each(function(index, val) {
			 /* iterate through array or object */

			 switch(index){
			 	case 0:
			 	case 2:
			 	case 4:
			 	case 6:
			 	case 8:
			 	case 10:
			 	case 12:
			 	case 14:
			 	case 16:
			 	case 18:
			 	case 20:
			 	case 22:
			 	case 24:
			 	case 26:
			 	case 28:
			 	case 30:
			 	case 32:
			 	case 34:
			 	case 36:
			 	case 38:
			 		$(this).addClass('alertasradios');
			 	break;
			 	default:
			 		$(this).addClass('radiosnormales');
			 	break;
			 }
		});
	

	
		/*$('.btn-sm.btn-outline.sonata-ba-action').on('click', function(event) {*/
			/*return false;*/
			/* Act on the event */
		/*});*/

		$('.field-container').parent().attr('colspan', '2');;
		
       
});

