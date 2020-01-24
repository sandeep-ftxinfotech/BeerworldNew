<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

    </div><!-- #content -->

<?php 

if(!is_page(22) && !is_page(16)){ ?>
	<div id="getIn" class="mainPage">
		<!--div id="parallax-bg-5" class="parallax-bg">
			<div id="bg-2-6" class="wow fadeInDown" data-wow-delay=".2s"></div>
		</div-->
		<h3 class="text-center"><?php echo get_field('title','option'); ?></h3>
		<p class="subTitle text-center"><?php echo get_field('description','option'); ?></p>
		<div class="container">
			<div class="row">
				<div class="contactFrom">
					<?php echo do_shortcode('[contact-form-7 id="13396" title="Contact Form 2"]'); ?>
				</div>
			</div>
		</div>
	</div>
<?php }
?>
	 

	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<?php dynamic_sidebar('footer') ;?>
				</div>
				<div class="col-md-4 col-xs-12">
					<?php dynamic_sidebar('footer-1') ;?>
				</div>
				<div class="col-md-4 col-xs-12">
					<?php dynamic_sidebar('footer-2') ;?>
				</div>
			</div>
          
		</div>
		 <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | Website Design by </span>
                <a class="credits" href="http://www.ftxinfotech.com/" target="_blank" title="Website Design by FasTrax Solutions" alt="Website Design by FasTrax Solutions"><?php echo esc_html__('FasTrax Infotech','wp-bootstrap-starter'); ?></a>

            </div><!-- close .site-info -->
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
<script  src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/menu-style.css">
<script  src="<?php echo get_stylesheet_directory_uri(); ?>/js/sideToggleExtended.js"></script>


<!--slider-->
<link rel='stylesheet' href='https://npmcdn.com/flickity@2/dist/flickity.css'>
<script src='https://npmcdn.com/flickity@2/dist/flickity.pkgd.js'></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"/>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script  src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/130527/vanilla-tilt.min.js'></script>

<script  src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-tabcollapse.js"></script>

<script>
window.addEventListener("orientationchange", function() {
  jQuery(window).resize(function(){location.reload();});

});
	

	jQuery('.panel-title a').on('click', function(){
		jQuery(this).addClass('rotate').siblings().removeClass('rotate');
	});
	
	jQuery('#pills-tab').tabCollapse();
	
	
	jQuery('.home-brand').owlCarousel({
		loop:true,
		items : 3,
		margin:0,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});
	
	jQuery(document).ready(function() {
	  jQuery(".owl-carousel-1, .slider-class").owlCarousel({
		 // autoPlay: 5000, //Set AutoPlay to 3 seconds
		  items : 3,
		  navigation : true,
		  margin:10,
		  responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:3
				}
			}
	  });
	});
	
	jQuery(document).ready(function(){
		jQuery(window).scroll(function(e){
		parallaxScroll();
		});

		function parallaxScroll(){
			var scrolled = jQuery(window).scrollTop();
			jQuery('#parallax-bg-2').css('top',(0-(scrolled*.4))+'px');
			jQuery('#parallax-bg-3').css('top',(0-(scrolled*.4))+'px');
			jQuery('#parallax-bg-4').css('top',(0-(scrolled*.4))+'px');
			jQuery('#parallax-bg-5').css('top',(0-(scrolled*.75))+'px');
		}
	}); 
	
	
	 if ( jQuery(window).width() > 900 ) {

		jQuery(document).ready(function(){
			  jQuery('#sideMenu').sideToggle({
				moving: '#sideMenuContainer',
				direction: 'right'
			  });

			});
		 
			 jQuery(".cross").click(function(){
			  jQuery("#sideMenuContainer").css("right", "-600px");
			});
		};
	
	if ( jQuery(window).width() < 890) {
		
		jQuery(document).ready(function(){
		   jQuery("#sideMenu").click(function(){
				jQuery("#sideMenuContainer").slideToggle();
			});
		});
		
		jQuery(document).ready(function(){
		   jQuery(".cross").click(function(){
				jQuery("#sideMenuContainer").hide();
			});
		});

		};
	
	
	
	
	
	jQuery(".menu-item-has-children").prepend("<div class='arrow'></div>");
	
	jQuery(document).ready(function(){
	  jQuery(".arrow").click(function(){

		var target = jQuery(this).parent().children(".sub-menu");
		jQuery(target).slideToggle();
	  });
	});
	
	jQuery('.arrow-bottom').click(function(e){
		  e.preventDefault();
		  var target = jQuery(jQuery(this).attr('href'));
		  if(target.length){
			var scrollTo = target.offset().top;
			jQuery('body, html').animate({scrollTop: scrollTo+'px'}, 800);
		  }
	}); 
	
	if ( jQuery(window).width() > 800 ) {
		new WOW().init()

	};
	
	jQuery(window).load(function() {
		jQuery(".loader").delay(2000).fadeOut("slow");
	  jQuery("#overlayer").delay(2000).fadeOut("slow");
	})
	
</script>
<style type="text/css">
.subscribeinputwrapper input[type="submit"]
{
    top: -13px !important;
}
</style>
</body>
</html>