<?php
/**
 * Template Name: Home Template
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

<div id="homePage">
	<section id="homeBanner" class="banner"  style="background-image: url(<?php the_field('home_banner',get_the_ID()); ?>);">
		<div id="parallax-bg-2" class="parallax-bg">
			<div id="bg-2-1" class="wow fadeInDown" data-wow-delay=".2s"></div>
			<div id="bg-2-2" class=" wow fadeInDown" data-wow-delay=".5s"></div>
		</div>
		<div class="container">
			<div class="row">
				<div id="bannerContent" class="float-left wow fadeInLeft col-md-7 col-xs-12" data-wow-delay=".3s">
					<div class="vc_column-inner">
						<h1><?php the_field('banner_heading',get_the_ID()); ?></h1>
						<div class="article wow fadeInLeft" data-wow-delay=".3s">
							<?php the_field('banner_content',get_the_ID()); ?>
						</div>
						<div class="button wow fadeInLeft" data-wow-delay=".3s">
							<a href="<?php the_field('banner_button',get_the_ID()); ?>">Wedding Order</a>
						</div>
					</div>
				</div>
				<div class="bottle-img wow bounceInRight col-md-5 col-xs-12" data-wow-delay=".8s">
					<div class="vc_column-inner">
						<img class="bottle"  src="<?php bloginfo('template_url'); ?>/images/bottle.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="homeAbout" class="mainPage">
		<div class="container">
			<div class="row">
				<div class="innerPart col-md-8 col-xs-12 float-left">
					<h2 class=" wow fadeInLeft" data-wow-delay=".1s"><?php the_field('home_about_section_heading',get_the_ID()); ?></h2>
					<article class="article wow fadeInLeft" data-wow-delay=".2s">
						<?php the_field('home_about_section_content',get_the_ID()); ?>
						<div class="button wow fadeInLeft" data-wow-delay=".3s">
							<a href="<?php the_field('home_about_section_button',get_the_ID()); ?>">About Us</a>
						</div>
					</article>
				</div>
			</div>
		</div>
		<div id="parallax-bg-3" class="parallax-bg">
			<div id="bg-2-3" class="wow fadeInDown" data-wow-delay=".2s"></div>
		</div>
	</section>

	<section id="homeBrand" class="mainPage">
    	<h2 class=" wow fadeInLeft text-center" data-wow-delay=".1s"><?php the_field('b_and_b_heading',get_the_ID()); ?></h2>
    	<article class="article wow fadeInDown"><?php the_field('b_and_b_description',get_the_ID()); ?></article>
		<div class="innStr wow fadeInUp animated" data-wow-duration="2s">
			<ul class="col-md-12 nav nav-tabs hidden-xs" id="pills-tab" role="tablist" data-tabs="tabs">
			  <?php 
				$Terms = get_terms( array( 
					'taxonomy'  => 'beers-and-brands-category',
					'orderby'   => 'ID',
					'order'     =>  'DESC',
					'hide_empty' => false,
				) );
				$count = 1;

				foreach ($Terms as $Term) { ?>
						<li role="presentation" <?php if ($count==0) { ?>class="active"<?php } ?>  >
							<a href="#<?php echo $Term->slug; ?>" aria-controls="<?php echo $Term->slug; ?>" role="tab" data-toggle="tab" <?php if ($count==0) { ?>class="active"<?php } ?>>
								<?php echo $Term->name; ?>
							</a>
					</li><?php
					$count++;
				} 
			   ?>
			</ul>

			<div class="tab-content col-lg-12" id="pills-tabContent">
				<?php
				$count = 0;
				foreach ($Terms as $Term) { ?>
				<div role="tabpanel" class="tab-pane text-left  <?php if ($count==0) { ?> active<?php } ?>" id="<?php echo $Term->slug; ?>">
				  <div class="owl-carousel owl-theme home-brand">
				  <?php
					$Args = array(
							  'post_type'     =>  'beers-and-brands',
							  'post_status'   =>  'publish',
							  'posts_per_page'=>  -1,
							  'tax_query'     =>  array(
								  array(
									  'taxonomy' => 'beers-and-brands-category',
									  'field' => 'slug',
									  'terms' => $Term->slug,
								  ),
							  ),
						  );

					$Result =   new WP_Query($Args);

					if( $Result->have_posts() ):
					  $cnt = 1;
					  while( $Result->have_posts() ): $Result->the_post(); 
						$BBImage = WPCustomClass::CustomFeatureImage(get_the_ID(), "large","heinekenbeer02.jpg");

						?>
						<div class="item">
						  <div class="tilt-box flex-container">
							<a data-tilt data-tilt-glare="true" data-tilt-transition="true"  data-tilt-scale="1.1" class="c-logo" href="javascript:" title="<?php the_title(); ?>">
							  <img src="<?php the_field('tilt_image',get_the_ID()); ?>">
							</a>
						  </div>
						  <div class="image-box"><img alt="<?php the_title(); ?>" src="<?php echo $BBImage; ?>"></div>
						  <div class="caption-box">   
							<h3 class="dont-change-me woocommerce dont-force"><?php the_title(); ?></h3>    
							<?php the_excerpt(); ?>      

							  <a href="#" data-rel="formsubmission" class="button btn-lg btn-outline poptrigger" title="View">View</a>

								<div class="showPopupDetails" style="display: none;">
									<div class="beerdetail-img">
										<figure class="bgimg"><img alt="<?php the_title(); ?>" src="<?php echo $BBImage; ?>" alt=""></figure>
									</div><!-- beerdetail-img -->
									<div class="beerdetail-text">
										<h2><?php the_title();  ?></h2>
										<?php the_content();  ?>
										<p class="pop-enquiry">Enquiry for order</p>
										<a href="<?php echo site_url( "contact-us" ); ?>" class="button btn-lg">Enquire Now</a>
									</div><!-- beerdetail-img -->
								</div>
						  </div>  

						</div><?php 
					  endwhile; 
					endif; wp_reset_postdata(); ?>
				  </div>
				</div> <?php $count++;
			  }	?>
			</div>
		</div>
	</section>

	
	<section id="orderSection" class="mainPage">
		<div class="row">
			<div class="col-md-5 col-xs-12 weedingOrder">
				<figure class="figure">
					<img class="img-fluid" alt="Buy Beer Online" src="<?php the_field('wedding_image',get_the_ID()); ?>">
				</figure>
				<div class="weddingContent text-center">
					<span class="icon"><img src="<?php the_field('icon',get_the_ID()); ?>"></span>
					<h2><?php the_field('wedding_heading',get_the_ID()); ?></h2>
					<article class="article">
						<?php the_field('wedding_content',get_the_ID()); ?>
					</article>
					<div class="button">
						<a href="<?php the_field('view_button',get_the_ID()); ?>">Order</a>
					</div>
				</div>
			</div>
			<div class="col-md-7 col-xs-12 kegOrder">
				<div class="weddingContent text-center">
					<span class="icon"><img src="<?php the_field('keg_icon',get_the_ID()); ?>"></span>
					<h2><?php the_field('keg_heading',get_the_ID()); ?></h2>
					<article class="article">
						<?php the_field('keg_content',get_the_ID()); ?>
					</article>
					<div class="button">
						<a href="<?php the_field('keg_button',get_the_ID()); ?>">Order</a>
					</div>
				</div>
				<figure class="figure">
					<img class="img-fluid"  src="<?php the_field('keg_image',get_the_ID()); ?>">
				</figure>
				<div class="productIcons">
					<?php if( have_rows('beer_icons') ): ?>
						<ul class="list">
						   <?php while( have_rows('beer_icons') ): the_row(); ?>
								 <li class="innerList">
									<img src="<?php the_sub_field('beer_icon_image'); ?>" alt="">
								 </li>
						   <?php endwhile; ?>
					   </ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	
	<section id="flavors" class="mainPage">
		<div id="parallax-bg-4" class="parallax-bg">
			<div id="bg-2-4" class="wow fadeInDown" data-wow-delay=".2s"></div>
			<div id="bg-2-5" class=" wow fadeInDown" data-wow-delay=".5s"></div>
		</div>
		<div class="container flavourImage" style="background-image: url(<?php the_field('flavour_image',get_the_ID()); ?>);">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12 beerLogo text-center">
					<figure class="figure">
						<img src="<?php the_field('beer_logo',get_the_ID()); ?>">
					</figure>
				</div>
				<div class="col-md-5 col-sm-12 col-xs-12 flavourContent text-left">
					<div class="outer">
						<div class="innerContent">
							<h4><?php the_field('flavor_heading',get_the_ID()); ?></h4>
							<article class="article">
								<?php the_field('flavor_description',get_the_ID()); ?>
							</article>
							<div class="button">
								<a href="<?php the_field('flavor_button',get_the_ID()); ?>">View More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

  
	<section id="locationHome" class="mainPage">
		<div class="row">
			<div class="col-md-6 col-xs-12 map">
				<img src="<?php the_field('map',get_the_ID()); ?>">
			</div>
			<div class="col-md-6 col-xs-12 locations">
				<div class="innerArea">
					<h2><?php the_field('location_heading',get_the_ID()); ?></h2>
					<article class="article">
						<?php the_field('location_description',get_the_ID()); ?>
					</article>
					<div class="storeAreas">
						 <div class="locationsection">
							<div class="locationboxwrapper">
								<?php
								/*wp_get_custom_postype_content($posttype = "", $page_id = "", $page_parent = "", $post_per_page = "", $order = "", $order_by = "")*/
								$agrsResult = WPCustomClass::wpGetCustomPostType("page", "", 55, 11, "ASC", "");

								if( $agrsResult->have_posts() ):
									?>
									<div class="cols cols3 storeList"><?php
									  while( $agrsResult->have_posts() ): $agrsResult->the_post();
										?>
										
										  <div class="outerLocation innerStore">
											  <a href="<?php the_permalink(get_the_ID()); ?>" class="hoveroverlay"></a>
											  <div class="locationbox">
												  <div class="locationboxcontent1">
													  <a href="<?php the_permalink(get_the_ID()); ?>" class="locationname"><?php the_title();  ?></a>
													  <address><?php the_content(); ?></address>
													  <ul class="social">
													  <?php
													  if( get_field("acf_ol_facebook_url") != "" )
													  {
														  echo '<li class="fb"><a target="_blank" href="'.get_field("acf_ol_facebook_url").'" title="Facebook">Facebook</a></li>';
													  }

													  if( get_field("acf_ol_twitter_url") != "" )
													  {
														  echo '<li class="tw"><a target="_blank" href="'.get_field("acf_ol_twitter_url").'" title="Twitter">Twitter</a></li>';
													  }

													  if( get_field("acf_ol_instagram_url") != "" )
													  {
														  echo '<li class="insta"><a target="_blank" href="'.get_field("acf_ol_instagram_url").'" title="Instagram">Instagram</a></li>';
													  }

													  //if( get_field("acf_ol_yelp_url") != "" )
													  //{
														 // echo '<li class="yelp"><a href="'.get_field("acf_ol_yelp_url").'" title="Yelp">Yelp</a></li>';
													  //}
													  ?>
													  </ul><!--/.social-->
												  </div><!--/.locationboxcontent-->
											  </div><!--/.locationbox-->
										  </div><!--/.col-->
										<?php
									  endwhile; ?>
									</div><!--/.cols cols3-->
									<?php
								endif;
								wp_reset_postdata();
								?>
							</div><!--/.locationboxwrapper-->                    
						  </div><!--/.locationsection-->
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<div class="popouterbox" id="formsubmission">
    <div class="popup-block">
        <div class="pop-contentbox">
        <a href="#" class="close-dialogbox"></a>
            <div class="beerdetail-area">
                <div class="beerdetail-img">
                	<figure class="bgimg"><img src="http://localhost/projects/b/beerworldstore/wp-content/themes/beerworldstore/images/heinekenbeer01.jpg" alt=""></figure>
                </div><!-- beerdetail-img -->
                <div class="beerdetail-text">
                	<h2>Heineken Beer Premium Quality</h2>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Vestibulum scelerisque accumsan enim, at condimentum felis
					bibendum quis. Fusce sodales aliquam mi feugiat accumsan.
					Nullam nec interdum purus. Pellentesque malesuada dui leo,
					ac consectetur nisi elementum eget.</p>
					<span>ABV: 13.0%</span>
					<span>Type: Imperial Stout</span>
					<p class="pop-enquiry">Enquiry for order</p>
					<div class="button">
						<a href="#" class="button btn-lg">Enquire Now</a>
					</div>
                </div><!-- beerdetail-img -->
            </div><!--/.formsubmission-area-->
        </div><!--/.pop-contentbox-->
    </div><!--/.popup-block-->
</div><!--/.popouterbox-->
	
	
<?php get_footer(); ?>
</div>