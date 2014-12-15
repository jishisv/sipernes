jQuery(document).ready(function() {
    
		
		$('.iradio_minimal').each(function(index, val) {
			 /* iterate through array or object */

			 switch(index){
			 	
			 	case 1:
			 	case 2:
			 		$(this).addClass('alertasradios');
			 	break;
			 	default:
			 		$(this).addClass('radiosnormales');
			 	break;
			 }
		});

	
       
});