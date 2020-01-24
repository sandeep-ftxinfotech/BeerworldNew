/* Popup function
		---------------------------------------------------------------------*/
		var jQuerydialogTrigger = jQuery('.poptrigger'),
		jQuerypagebody =  jQuery('body');
		jQuerydialogTrigger.click( function(){
			var popID = jQuery(this).attr('data-rel');
			jQuery('body').addClass('overflowhidden');
			var winHeight = jQuery(window).height();
			jQuery('#' + popID).fadeIn();
			var popheight = jQuery('#' + popID).find('.popup-block').outerHeight(true);
			
			if( jQuery('.popup-block').length){
				var popMargTop = popheight / 2;
				//var popMargLeft = (jQuery('#' + popID).find('.popup-block').width()/2);
				
				if ( winHeight > popheight ) {
					jQuery('#' + popID).find('.popup-block').css({
						'margin-top' : -popMargTop,
						//'margin-left' : -popMargLeft
					});	
				} else {
					jQuery('#' + popID).find('.popup-block').css({
						'top' : 0,
						//'margin-left' : -popMargLeft
					});
				}
				
			}
			
			jQuery('#' + popID).append("<div class='modal-backdrop'></div>");
			jQuery('.popouterbox .modal-backdrop').fadeTo("slow", 0.70);
			if( popheight > winHeight ){
				jQuery('.popouterbox .modal-backdrop').height(popheight);
			} 
			jQuery('#' + popID).focus();
			return false;
		});
		
		jQuery(window).on("resize", function () {
			if( jQuery('.popouterbox').length && jQuery('.popouterbox').is(':visible')){
				var popheighton = jQuery('.popouterbox .popup-block').height()+60;
				var winHeight = jQuery(window).height();
				if( popheighton > winHeight ){
					jQuery('.popouterbox .modal-backdrop').height(popheighton);
					jQuery('.popouterbox .popup-block').removeAttr('style').addClass('taller');
					
				} else {
					jQuery('.popouterbox .modal-backdrop').height('100%');
					jQuery('.popouterbox .popup-block').removeClass('taller');
					jQuery('.popouterbox .popup-block').css({
						'margin-top' : -(popheighton/2)
					});
				}	
			}
		});
		
		//Close popup		
		jQuery(document).on('click', '.close-dialogbox, .modal-backdrop', function(){
			jQuery(this).parents('.popouterbox').fadeOut(300, function(){
				jQuery(this).find('.modal-backdrop').fadeOut(250, function(){
					jQuery('body').removeClass('overflowhidden');
					jQuery('.popouterbox .popup-block').removeAttr('style');
					jQuery(this).remove();
				});
			});
			return false;
		});