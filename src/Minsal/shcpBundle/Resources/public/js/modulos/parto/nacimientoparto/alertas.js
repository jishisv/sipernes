jQuery(document).ready(function() {
    
		
		$('.iradio_minimal').each(function(index, val) {
			 /* iterate through array or object */

			 switch(index){
			 	case 1:
			 	case 2:
			 	case 5:
			 	case 6:
			 	case 7:
			 	case 8:			
			 	case 15:
			 	case 16:
			 	case 17:
			 	case 18:
			 	case 22:
			 	case 24:
			 	case 25:
			 	case 27:
			 	case 29:
			 	case 31:
			 	case 33:
			 	case 35:
			 	case 37:
			 	case 39:
			 	case 41:
			 	case 48:
			 	case 49:
			 	case 50:
			 	case 51:
			 		$(this).addClass('alertasradios');
			 	break;
			 	default:
			 		$(this).addClass('radiosnormales');
			 	break;
			 }
		});
	

	


       
});