<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/innerbanner.jpg");

?>

    <div class="banner" style="background-image:url(<?php echo $PageImage;  ?>);">
        <div class="main-title"><h1 class="banner-title"><?php the_title();  ?></h1></div>
	</div><!--/.banner-->
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content">
            	<div class="secpadding">
	            	<?php 
	            	if( have_posts() ):
	            		while(have_posts()): the_post();
	            			the_content();
	            		endwhile;
	            	endif;
	            	?>
	            </div>
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main-->
<?php
get_footer();