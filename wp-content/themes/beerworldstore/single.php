<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="banner" style="background-image:url(<?php echo get_template_directory_uri();  ?>/images/bgi/innerbanner.jpg);">
    <div class="main-title"><h1 class="banner-title"><?php the_title();  ?></h1></div>
</div><!--/.banner-->

<div id="main">
	<div class="wrap">
		<div id="primary" class="nothingfound-area one-column">
			<main id="main" class="site-main" role="main">
				<div class="nothingfound-flex">
					<div class="nothingfound-leftsearch">
						<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/post/content', get_post_format() );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								the_post_navigation(
									array(
										'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
										'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
									)
								);

							endwhile; // End of the loop.
							?>
					</div><!-- .nothingfound-leftsearch -->
					<div class="nothingfound-sidebar">
						<?php get_sidebar(); ?>
					</div><!-- .nothingfound-sidebar -->
				</div><!-- .nothingfound-flex -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .wrap -->
</div><!-- #main -->

<?php
get_footer();
