/* Custom General jQuery
/*--------------------------------------------------------------------------------------------------------------------------------------*/
;(function($, window, document, undefined) {
	//Genaral Global variables
	//"use strict";
	var $win = $(window);
	var $doc = $(document);
	var $winW = function(){ return $(window).width(); };
	var $winH = function(){ return $(window).height(); };
	var $screensize = function(element){  
			$(element).width($winW()).height($winH());
		};
		
		var screencheck = function(mediasize){
			if (typeof window.matchMedia !== "undefined"){
				var screensize = window.matchMedia("(max-width:"+ mediasize+"px)");
				if( screensize.matches ) {
					return true;
				}else {
					return false;
				}
			} else { // for IE9 and lower browser
				if( $winW() <=  mediasize ) {
					return true;
				}else {
					return false;
				}
			}
		};

		$doc.ready(function() {
		/*--------------------------------------------------------------------------------------------------------------------------------------*/		
		// Remove No-js Class
		$("html").removeClass('no-js').addClass('js');		
		
		/* Get Screen size
		---------------------------------------------------------------------*/
		$win.load(function(){
			$win.on('resize', function(){
				$screensize('your selector');	
			}).resize();	
		});

		
		/* Tab Content box 
		---------------------------------------------------------------------*/
		var tabBlockElement = $('.tab-data');
			$(tabBlockElement).each(function() {
				var $this = $(this),
					tabTrigger = $this.find(".tabnav li"),
					tabContent = $this.find(".tabcontent");
					var textval = [];
					tabTrigger.each(function() {
						textval.push( $(this).text() );
					});	
				$this.find(tabTrigger).first().addClass("active");
				$this.find(tabContent).first().show();

				
				$(tabTrigger).on('click',function () {
					$(tabTrigger).removeClass("active");
					$(this).addClass("active");
					$(tabContent).hide().removeClass('visible');
					var activeTab = $(this).find("a").attr("data-rel");
					$this.find('#' + activeTab).fadeIn('normal').addClass('visible');
								
					return false;
				});
			
				var responsivetabActive =  function(){
				if (screencheck(767)){
					if( !$('.tabMobiletrigger').length ){
						$(tabContent).each(function(index) {
							$(this).before("<h2 class='tabMobiletrigger'>"+textval[index]+"</h2>");	
							$this.find('.tabMobiletrigger:first').addClass("rotate");
						});
						$('.tabMobiletrigger').click('click', function(){
							var tabAcoordianData = $(this).next('.tabcontent');
							if($(tabAcoordianData).is(':visible') ){
								$(this).removeClass('rotate');
								$(tabAcoordianData).slideUp('normal');
								$(this).next('.tabcontent').removeClass('visible');
								//return false;
							} else {
								$this.find('.tabMobiletrigger').removeClass('rotate');
								$(this).next('.tabcontent').addClass('visible');
								$(tabContent).slideUp('normal');
								$(this).addClass('rotate');
								$(tabAcoordianData).not(':animated').slideToggle('normal');
							}
							return false;
						});
					}
						
				} else {
					if( $('.tabMobiletrigger').length ){
						$('.tabMobiletrigger').remove();
						tabTrigger.removeClass("active");
						$this.find(tabTrigger).removeClass("active").first().addClass('active');
						$this.find(tabContent).hide().first().show();				
					}		
				}
			};
			$(window).on('resize', function(){
				if(!$this.hasClass('only-tab')){
					responsivetabActive();
				}
			}).resize();
		});
		
		/* Accordion box JS
		---------------------------------------------------------------------*/
		$('.accordion-databox').each(function() {
			var $accordion = $(this),
				$accordionTrigger = $accordion.find('.accordion-trigger'),
				$accordionDatabox = $accordion.find('.accordion-data');
				
				$accordionTrigger.first().addClass('open');
				$accordionDatabox.first().show();
				
				$accordionTrigger.on('click',function (e) {
					var $this = $(this);
					var $accordionData = $this.next('.accordion-data');
					if( $accordionData.is($accordionDatabox) &&  $accordionData.is(':visible') ){
						$this.removeClass('open');
						$accordionData.slideUp(400);
						e.preventDefault();
					} else {
						$accordionTrigger.removeClass('open');
						$this.addClass('open');
						$accordionDatabox.slideUp(400);
						$accordionData.slideDown(400);
					}
				});
		});
		
		
		/* MatchHeight Js
		-------------------------------------------------------------------------*/
		if($('.matchheightbox').length){
			$('.matchheightbox').matchHeight();
		}
		
		if($('.beerinfobox h5').length){
			$('.beerinfobox h5').matchHeight();
		}

		if($('.quantityinfo').length){
			$('.quantityinfo').matchHeight();
		}

		if($('.location-contdetail .col').length){
			$('.location-contdetail .col').matchHeight();
		}
		/*Mobile menu click
		---------------------------------------------------------------------*/
		$(document).on('click',"#menu", function(){
			$(this).toggleClass('menuopen');
			$('body').toggleClass('menuactive')
			$(this).next('ul').slideToggle('normal');
			if($(this).hasClass('menuopen')){
				$(this).find('em').text('close');
			} else {
				$(this).find('em').text('menu');
			}
			return false;
		});
		
		$(".mainmenutop > ul > li > ul").parent('li').addClass('hasnav');
		$(".mainmenutop > ul > li.hasnav").prepend('<span class="navtrigger"></span>');
		$(".mainmenutop li").hover( function(){
			if (!screencheck(1023))
			{
				$(this).addClass('current');
			}
		}, function(){
				if (!screencheck(1023))
				{
					$(this).removeClass('current');	
				}
		});
		
		/* Go to next screen
		---------------------------------------------------------------------*/
		$('.explorebtn').click(function(){
			setTimeout(function(){
				$('body').addClass('welcomehide')
			}, 2000);
			$('body').addClass('pageloded');
			$('body').removeClass('welcome');
			return false;
		});
		
		
		/* Go to next Section
		---------------------------------------------------------------------*/
		$('.scrolldown a').click(function(){
			var getOffset = $('#main').offset().top;
			$("html:not(:animated),body:not(:animated)").animate({ scrollTop:getOffset},600);
			return false;
		});
		
		/*Convert Img to BG
		---------------------------------------------------------------------*/
		if($('.bgimg img')){
			$('.bgimg img').each(function() {
				var imgSrc = $(this).attr('src');
				$(this).parents('.bgimg').css('background-image', 'url('+imgSrc+')'); 
				$(this).hide();
			});
		}
		
		if($('.testimonialslider').length){
			$('.testimonialslider').slick({
				arrows: false,
				dots: true
			})
		}
		
		if($('.loactionsslider').length){
			$('.loactionsslider').slick({
				arrows: false,
				infinite: false,
				dots: true,
				dotsClass: 'custom-dots',
				customPaging: function (slider, i) {
					var dot_name = $("#item_" + i).attr('data-name');
					totalSlides = slider.slideCount;
					console.log(dot_name);
					return '<a class="dot" role="button" title="' + dot_name + '"><span class="string">'+ dot_name +'</span></a>';
				}
			})
		}
		
		/* Main Navigation Sticky
		* ----------------------------------------------------------------------------------------------------------------------*/
		var intialtop = $(document).scrollTop();
		var headerheight = $("#header").outerHeight();
		$(window).scroll(function() {
			var afterscrolltop = $(document).scrollTop();
			if( afterscrolltop > headerheight ) {
				$("#header").addClass("navhide");
			} else {
				$("#header").removeClass("navhide");
			}
			if( afterscrolltop > intialtop ) {
				$("#header").removeClass("navshow");
			} else {
				$("#header").addClass("navshow");
			}
			intialtop = $(document).scrollTop();
		});
		
		/* add class When User reach section
		---------------------------------------------------------------------*/
		if($('.orderstypesection').length){
			$(window).scroll(function() {
				if( $(this).scrollTop() > ($('.orderstypesection').offset().top)-500) {
					$(".orderstypesection").addClass("sectionactive");
				}
			});
		}
		
		/*$(window).scroll(function () {
			if( $(this).scrollTop() > ($('.beerbrandswrapper').offset().top)-150) {
				var transforValue = -($(this).scrollTop() / 3) + 'px';
				var transforValue2 = -($(this).scrollTop() / 5) + 'px';
				var transforValue3 = -($(this).scrollTop() / 7) + 'px';
				$('.beerbrandswrapper .tabcontent .flexbox').css({'top' : transforValue, 'transform': 'translateY(0)'});
				$('.beerbrandswrapper .tabcontent .flexbox + .flexbox').css({'top' : transforValue, 'transform': 'translateY(0)'});
				$('.beerbrandswrapper .tabcontent .flexbox + .flexbox + .flexbox').css({'top' : transforValue, 'transform': 'translateY(0)'});
			}
		});*/

		 /* dropdown 
		 ---------------------------------------------------------------------*/      
		 $('.hasnav').on('click', function () {
			$(this).parent().find('ul').slideToggle('normal');
			$(this).toggleClass('open');
		});

		  /* lable auto padding
		 ---------------------------------------------------------------------*/ 
		 $('.contactformarea .form-group label').each(function() {
			var paddingWidth = $(this).width();
			$(this).next('input').css('padding-left', paddingWidth + 28 + 'px');
		})

		$('.contactformarea .form-group label').each(function() {
			var paddingWidth = $(this).width();
			$(this).next('textarea').css('padding-left', paddingWidth + 28 + 'px');
		})

		$('.ac-formbottomarea .form-group label').each(function() {
			var paddingWidth = $(this).width();
			$(this).next('input').css('padding-left', paddingWidth + 28 + 'px');
		})

		$('.ac-formbottomarea .form-group label').each(function() {
			var paddingWidth = $(this).width();
			$(this).next('textarea').css('padding-left', paddingWidth + 28 + 'px');
		})
		
		$('.ac-textarea .form-group label').each(function() {
			var paddingWidth = $(this).width();
			$(this).next('textarea').css('padding-left', paddingWidth + 28 + 'px');
		})

		$('.orderformarea .form-group label').each(function() {
			var paddingWidth = $(this).width();
			$(this).next('select').css('padding-left', paddingWidth + 28 + 'px');
		})

		/*Date picker
		---------------------------------------------------------------------*/
		$( "#datepicker1" ).datepicker({ dateFormat: 'dd / mm / yy' });
		$( "#datepicker2" ).datepicker({ dateFormat: 'dd / mm / yy' });
		$( "#datepicker3" ).datepicker({ dateFormat: 'dd / mm / yy' });
		$( "#datepicker4" ).datepicker({ dateFormat: 'dd / mm / yy' });
		$( "#datepicker5" ).datepicker({ dateFormat: 'dd / mm / yy' });
		$( "#datepicker6" ).datepicker({ dateFormat: 'dd / mm / yy' });
		$( "#datepicker7" ).datepicker({ dateFormat: 'dd / mm / yy' });
		$( "#datepicker8" ).datepicker({ dateFormat: 'dd / mm / yy' });
		$( "#datepicker9" ).datepicker({
			dateFormat: 'dd / mm / yy',
			dayNamesMin: ['S', 'M', 'T', 'W', 'T', 'F', 'S']
		});
		$( "#datepicker8" ).datepicker({ dateFormat: 'dd / mm / yy' });
		$( "#datepicker9" ).datepicker({ dateFormat: 'dd / mm / yy' });
		$( "#datepicker10" ).datepicker({ dateFormat: 'dd / mm / yy' });
		$( "#datepicker11" ).datepicker({ dateFormat: 'dd / mm / yy' });
		$( "#datepicker12" ).datepicker({ dateFormat: 'dd / mm / yy' });
		$( "#datepicker13" ).datepicker({ dateFormat: 'dd / mm / yy', minDate: 1 });
		$( "#datepicker14" ).datepicker({ dateFormat: 'dd / mm / yy' });
		$( "#datepicker15" ).datepicker({ dateFormat: 'dd / mm / yy' });

		$(document).on("focusout", ".ac-formblock .form-group input", function(e) {
			if($(this).length > 0 && $(this).val() != ''){
				$(this).parent().addClass('active');
			} else {
				$(this).parent().removeClass('active');
			}
		});

		/*Custom file input
		---------------------------------------------------------------------*/
		if($('.customfileinput').length){
			$('.customfileinput').customFileinput({
				buttontext : 'Browse',
				customboxwidth : 234
		  	});
		}
		
		/*Convert Img to BG
		---------------------------------------------------------------------*/
		if($('.bgimg img').length){
			$('.bgimg img').each(function() {
				var imgSrc = $(this).attr('src');
				$(this).parents('.bgimg').css('background-image', 'url('+imgSrc+')');
			});
		}

		/* lightgallery
		---------------------------------------------------------------------*/
		if($('#lightgallery').length){
			$('#lightgallery').lightGallery();
		}

		/* Popup function
		---------------------------------------------------------------------*/
		var $dialogTrigger = $('.poptrigger'),
		$pagebody =  $('body');
		$dialogTrigger.click( function(){
			var popID = $(this).attr('data-rel');
			$('body').addClass('overflowhidden');
			var winHeight = $(window).height();
			$('#' + popID).fadeIn();
			var popheight = $('#' + popID).find('.popup-block').outerHeight(true);
			
			if( $('.popup-block').length){
				var popMargTop = popheight / 2;
				//var popMargLeft = ($('#' + popID).find('.popup-block').width()/2);
				
				if ( winHeight > popheight ) {
					$('#' + popID).find('.popup-block').css({
						'margin-top' : -popMargTop,
						//'margin-left' : -popMargLeft
					});	
				} else {
					$('#' + popID).find('.popup-block').css({
						'top' : 0,
						//'margin-left' : -popMargLeft
					});
				}
				
			}
			
			$('#' + popID).append("<div class='modal-backdrop'></div>");
			$('.popouterbox .modal-backdrop').fadeTo("slow", 0.70);
			
			$('.custom-pop-box .modal-backdrop').fadeTo("fast", 0.88);
			
			if( popheight > winHeight ){
				$('.popouterbox .modal-backdrop').height(popheight);
			} 
			$('#' + popID).focus();
			return false;
		});
		
		$(window).on("resize", function () {
			if( $('.popouterbox').length && $('.popouterbox').is(':visible')){
				var popheighton = $('.popouterbox .popup-block').height()+60;
				var winHeight = $(window).height();
				if( popheighton > winHeight ){
					$('.popouterbox .modal-backdrop').height(popheighton);
					$('.popouterbox .popup-block').removeAttr('style').addClass('taller');
					
				} else {
					$('.popouterbox .modal-backdrop').height('100%');
					$('.popouterbox .popup-block').removeClass('taller');
					$('.popouterbox .popup-block').css({
						'margin-top' : -(popheighton/2)
					});
				}	
			}
		});
		
		//Close popup		
		$(document).on('click', '.close-dialogbox, .modal-backdrop', function(){
			$(this).parents('.popouterbox').fadeOut(300, function(){
				$(this).find('.modal-backdrop').fadeOut(250, function(){
					$('body').removeClass('overflowhidden');
					$('.popouterbox .popup-block').removeAttr('style');
					$(this).remove();
				});
			});
			return false;
		});

		$('.welcombtn a.yesbtn').click(function(){
			$('body').removeClass('welcome').addClass('pageloded');
			return false;
		});
		
		$('.welcombtn a.nobtn').click(function(){
			$(this).parent().next().slideDown();
			return false;
		});
/*--------------------------------------------------------------------------------------------------------------------------------------*/		
	});	

/*All function need to define here for use strict mode
----------------------------------------------------------------------------------------------------------------------------------------*/

	
/*--------------------------------------------------------------------------------------------------------------------------------------*/
})(jQuery, window, document);