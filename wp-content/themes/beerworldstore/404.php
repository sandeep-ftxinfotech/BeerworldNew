<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/error404bg.jpg");
?>
<div class="banner" style="background-image:url(<?php echo get_template_directory_uri();  ?>/images/bgi/error404bg.jpg);">
    <div class="main-title"><h1 class="banner-title"><?php the_title();  ?></h1></div>
</div><!--/.banner-->
 <div id="main">
	<div class="wrap">
		<div id="primary" class="error-area one-column">
			<main id="main" class="site-main" role="main">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php _e( '404', 'twentyseventeen' ); ?></h1>
					</header><!-- .page-header -->
					<div class="page-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyseventeen' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .wrap -->
</div><!-- #main -->

<?php
get_footer();
