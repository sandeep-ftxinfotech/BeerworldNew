<?php
/**
 * Template Name: Beer & Brands Template
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since top managment 1.0
 */

get_header(); ?>

<div id="brandPage">

	<section id="aboutBanner" class="banner"  style="background-image: url(<?php the_field('banner_image',get_the_ID()); ?>);">
		<div class="container">
			<div class="row">
				<div id="aboutbannerContent" class="text-center wow fadeInLeft col-md-12 col-xs-12" data-wow-delay=".3s">
					<h1><?php the_field('banner_title',get_the_ID()); ?></h1>
					<div class="article wow fadeInLeft" data-wow-delay=".3s">
						<?php the_field('banner_description',get_the_ID()); ?>
					</div>
				</div>

			</div>
		</div>
	</section>
	
<?php get_footer(); ?>
</div>


