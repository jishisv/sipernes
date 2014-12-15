jQuery(document).ready(function() {
    
//    var input = $
	var insistencia=0;
    $('.fechacal').Zebra_DatePicker({
  		direction: 1,
	});
    
	$('.hora').mask('00:00');
   

	$(".obligatorio, .numeros").on('click', function(event) {
		$(this).removeClass('errorform');
	});

	$(".obligatorio>li>label>div, .obligatorio>li>label").on('click', function(event) {
		var obj = $(this).parent().parent().attr('id');
		//var obj = $(this).parent().siblings().removeClass('errorform');
		
		$("#"+obj+">li>label>div").removeClass('errorform');
		
		$(this).removeClass('errorform');

	});	

	$(".iCheck-helper").on('click', function(event) {
		var ido = $(this).siblings().attr('id');
		var numchar=ido.length;
		var id = ido.substring(0, numchar-2);
		//alert(id.substring(14,numchar));
		var nombreclase = $("#"+id+">li:first-child>label>div").hasClass('checked');
		/*alert(nombreclase);*/


		$("#"+id+">li>label>div").removeClass('errorform');
		
		/*alert(id);*/


	});	


	$('.btn-sm.btn-outline.sonata-ba-action').removeClass('btn-success'); // en los form que tienen relaciones OnetoMany elimina la clase especificada porque habia un conflicto 
	//con el boton de guardar/actualizar porque compartian clases
	/*$('.btn-sm.btn-outline.sonata-ba-action').removeClass('btn-outline');
	$('.btn-sm.btn-outline.sonata-ba-action').addClass('agregarsubform');*/


	$(".btn-success").on('click', function(event) {

		
		var errores=0;
		var text = /^([0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/; //Expresión regular que valida la hora
		var hora = $('.hora').val();
		var numvalido=0;
		var check=0;


		$(".fechacal.obligatorio, .textos.obligatorio").each(function(index, val) {
			var fecha = $(this).val();

			/*alert(fecha.length);*/
			if (fecha.length==0) {

				$(this).addClass('errorform');
				errores++;
			}
		});
		
		$(".list-unstyled.obligatorio").each(function(index, val) {
				
				chequeado = 0;
				var idlista = $(this).attr('id');
				var num=0;

				$("#"+idlista+">li>label>div").each(function(index, val) {
					num++;
					
					if ( $(this).hasClass('checked') ) {
						chequeado++;
						/*alert(idlista);*/
						/*$("#"+idlista+">li>label>div").addClass('errorform');*/
					}
					
				});
				/*alert(num);*/
				

				if(!chequeado!=0){
					$("#"+idlista+">li>label>div").addClass('errorform');
					check++;  
				}
				/*var ischecked = $(this).is(':checked');
				if (ischecked) {
					$(this).addClass('errorform')	;
					errores++;
				}*/
		});
		

    	$('.radios input:checked').each(function() {
	    	 		
	    	$('.iradio_minimal>input').addClass('errorform');
		});
    	
    		if (errores!=0 || check!=0) {
    			if (!$('.ajs-message.ajs-error.ajs-visible').is(':visible')) {
    				mensaje_error("¡ Complete los campos señalados !");	
    			}
				
				return false;
			}

		if (hora) {

			if (!hora.match(text) && hora.length!=0) {
				if (!$('.ajs-message.ajs-error.ajs-visible').is(':visible')) {
					$('.hora').addClass('errorform');
					mensaje_error("¡ La hora ingresada no es válida !");
				}
				return false;
			}

		}

		$('.textos.numeros').each(function(index, val) {
			var valor = $(this).val();
			
			var number = /^([0-9])*$/;
			if (!valor.match(number))  {
				$(this).addClass('errorform');
				numvalido++;
			}
			
			
		});

		
		if (numvalido!=0) {
			if ( !$('.ajs-message.ajs-error.ajs-visible').is(':visible')) {
				mensaje_error("¡ Los campos señalados deben ser números !");	
				
			}  
			return false;
		}


		alertify.confirm().set('title', 'Esperando confirmación...');
		alertify.confirm('¿ Desea guardar los datos introducidos ?').set('onok', function(){ $('form').submit();} ); 
		return false;

	});

	

	$('.textos.obligatorio, .areadetextos').on('keyup', function(event) {
		
		var valor = $(this).val();
		var max = $(this).attr('maxlength');
		if (valor.length==max) {
			insistencia++;

		}
		
		if ( insistencia>3 && (!$('.ajs-message.ajs-warning.ajs-visible').is(':visible')) ){
			mensaje_warning(max,"La longitud máxima de este campo es: "+max);
			
		}
		/* Act on the event */
	});


	$('.textos.obligatorio,.presion.textos.obligatorio').on('focusout', function(event) {
		insistencia =0;		
	});
			//$('.alertas').addClass('aertas');


       
});