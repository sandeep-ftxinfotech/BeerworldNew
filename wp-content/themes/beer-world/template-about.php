<?php
/**
 * Template Name: About Template
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

<div id="aboutPage">

	<section id="aboutBanner" class="banner" style="background-image: url(<?php the_field('banner_image',get_the_ID()); ?>);">
		<div class="container">
			<div class="row">
				<div id="aboutbannerContent" class="text-center wow fadeInLeft col-md-12 col-xs-12" data-wow-delay=".3s">
					<h1><?php the_field('banner_title',get_the_ID()); ?></h1>
					<div class="article wow fadeInLeft" data-wow-delay=".3s">
						<?php the_field('banner_description',get_the_ID()); ?>
					</div>
				</div>
			</div>
			<a href="#aboutdescription" class="arrow-bottom"></a>
		</div>
	</section>
	<section id="aboutdescription" class="mainPage">
		<div class="container">
			<div class="row">
				<article class="article text-center">
					<?php the_field('about_description',get_the_ID()); ?>
				</article>
			</div>
		</div>
	</section>
	<section id="mission" class="mainPage">
		<div class="row">
			<div class="col-md-9 col-xs-12 missionImg">
				<figure class="figure">
					<img src="<?php the_field('mission_image',get_the_ID()); ?>">
				</figure>
			</div>
		</div>
		<div class="container missionPart">
			<div class="row">
				<div class="innerMission text-center">
					<h3><?php the_field('mission_title',get_the_ID()); ?></h3>
					<article class="article">
						<?php the_field('mission_description',get_the_ID()); ?>
					</article>
				</div>
			</div>
		</div>
		<div id="missionFeatures" style="background-image: url(<?php the_field('mission_background',get_the_ID()); ?>);">
			<div class="container">
				<div class="row">
					<?php if( have_rows('mission_features') ): ?>
					   <?php while( have_rows('mission_features') ): the_row(); ?>
							 <div class="innermission text-center col-md-4 col-xs-12">
								<figure class="figure">
									<img src="<?php the_sub_field('mission_icon',get_the_ID()); ?>">
								</figure>
								<h5><?php the_sub_field('mission_title'); ?></h5>
								 <p><?php the_sub_field('mission_content'); ?></p>
							 </div>
					   <?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	
	<section id="meetowner" class="mainPage">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12 meetcontent">
					<h4><?php the_field('meet_title',get_the_ID()); ?></h4>
					<article class="article">
						<?php the_field('meet_description',get_the_ID()); ?>
					</article>
				</div>
				<div class="col-md-6 col-xs-12 ownerImg">
					<figure class="figure">
						<img src="<?php the_field('meet_owner_image',get_the_ID()); ?>">
					</figure>
				</div>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>
</div>


