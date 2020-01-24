<?php

/*

Template name: Privacy Template 
*/

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/innerbanner.jpg");

?>

	<div id="aboutBanner" class="banner"  style="background-image:url(<?php echo $PageImage;  ?>);">
		<div class="container">
			<div class="row">
				<div id="aboutbannerContent" class="text-center wow fadeInLeft col-md-12 col-xs-12" data-wow-delay=".3s">
					<h1><?php the_title();  ?></h1>
					<div class="article wow fadeInLeft" data-wow-delay=".3s">
						<?php the_field('e_banner_description',get_the_ID()); ?>
					</div>
				</div>
			</div>
			<a href="#primary" class="arrow-bottom"></a>
		</div>
	</div><!--/.banner-->
	<section id="primary" class="content-area col-sm-12 col-lg-12 privacyPolicy mainPage">
		<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
					<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

			endwhile; // End of the loop.
			?>	
			</div>
		</div>

		</main><!-- #main -->
	</section><!-- #primary -->
   
<?php
get_footer();

?>