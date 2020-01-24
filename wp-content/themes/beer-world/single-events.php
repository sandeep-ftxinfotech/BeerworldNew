<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
	
	<section id="eventPage" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>
			<div id="eventDetail">
				<div class="eventBanner">
				
				
				<?php
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
					if($feat_image !== ""){ ?>
						<div class="eventdetailImg">
								<img src="<?php echo $feat_image; ?>">
						</div><?php
					} ?>
					<div class="bannerContent">
						<ul>
							<li class="date"><?php the_date('d M,Y'); ?></li>
							<li class="hostedBy"><?php echo get_field('acf_events_hosted_by',get_the_ID()); ?></li>
						</ul>
						<div class="title"><h1><?php the_title(); ?></h1></div>
						<div class="address"><span><?php echo get_field('acf_events_location',get_the_ID()); ?></span></div>
						</div>
					
					 <a href="#eventContent" class="arrow-bottom"></a>
				
				</div>
					<div id="eventContent" class="leafBG"><div class="container eventDes">
							<?php echo the_content(); ?>
							</div>

							<div id="eventGallery" class="container">
									<h2>Event Gallery</h2>
								<?php
								$images = get_field('acf_events_event_gallery');
								if( $images ): ?>
									<div id="owl-demo" class="owl-carousel-1 owl-theme">
										<?php foreach( $images as $image ): ?>
											<div class="item">
											  <div class="innerEvent">
													<a href="javascript:void(0)">
														<?php
														//echo "<pre>";
//															/print_r($image);
														?>
														 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
													</a>
													<p><?php echo $image['caption']; ?></p>
												</div>
											</div>

										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div id="recentEvent">
						<div class="container">
						<h2>Recent Events</h2>
						<div id="slider-id" class="slider-class">
						    <?php
						    $recent_posts = wp_get_recent_posts(array(
						    		'post_type' => 'events',
						        'numberposts' => 10, // Number of recent posts thumbnails to display
						        'post_status' => 'publish' // Show only the published posts
						    ));
						    foreach($recent_posts as $post) :
						    		$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post['ID']) );
										if($feat_image !== ""){ ?>
										<div class="item">
											<a href="<?php echo get_permalink($post['ID']);  ?>" class="">
											<div class="recentImg">
													<img src="<?php echo $feat_image; ?>">
											</div><?php
										} ?>
											<div class="recentContent">
												<div class="date"><?php echo date('d M,Y',strtotime($post['post_date'])); ?></div>
												<div class="eventBottom">
													<!--div class=""><?php //echo get_field('acf_events_hosted_by',$post['ID']); ?></div-->
													<div class="heading"><?php echo $post['post_title']; ?></div>
													<div class="eventaddress"><?php echo get_field('acf_events_location',$post['ID']); ?></div>
												</div>
											</div>
											</a>
									</div>
						    <?php endforeach; wp_reset_query(); ?>
						</div>
					</div>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif; ?>
			</div></div><?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
