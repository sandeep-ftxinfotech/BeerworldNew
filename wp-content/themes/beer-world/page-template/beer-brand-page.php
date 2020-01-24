<?php

/*

Template name: Beer Brand Template 
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
                        <?php the_field('b_b_banner_description',get_the_ID()); ?>
                    </div>
				</div>
			</div>
            <a href="#primary" class="arrow-bottom"></a>
		</div>
</div><!--/.banner-->
<div id="main">
    <div id="primary" class="content-area one-column">
        <div id="content">
            <div class="beerbrandssection secpadding beerbrandarea">
				<div class="tabbingArea">
            	<div class="wrap">
                    <div class="beerbrandswrapper">
                        <div class="beerbrandstabwrap" onscroll="parallaxScroll()">
                        	<div class="tab-data">
								<div class="uppertab">
									   <ul class="tabnav cf">
										<?php 
											$Terms = get_terms( array( 
												'taxonomy'  => 'beers-and-brands-category',
												'orderby'   => 'ID',
												'order'     =>  'DESC',
												'hide_empty' => false,
											) );
											$count = 1;

											foreach ($Terms as $Term) { ?>
												<li class="<?php if( $count == 1 ){ echo 'active'; }  ?>"><a href="#" data-rel="<?php echo $Term->slug; ?>"><?php echo $Term->name; ?></a></li><?php
												$count++;
											} 
										?>
									</ul><!--/.tabnav -->
								</div>
                             
                                <div class="tab-container">
                                    <?php
                                    $Terms = get_terms( array( 
                                        'taxonomy'  => 'beers-and-brands-category',
                                        'orderby'   => 'ID',
                                        'order'     =>  'DESC',
                                        'hide_empty' => false,
                                    ) );
                                    $count = 1;

                                    foreach ($Terms as $Term) 
                                    {
                                        ?>
                                            <div class="tabcontent <?php if( $count == 1 ){ echo 'visible'; }  ?>" id="<?php echo $Term->slug; ?>">
                                                <div class="flexwrapper brandsshowwrapper flex3" data-direction="down" data-speed="0.6">
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
                                                        <div class="flexbox" data-direction="up" data-speed="0.45">
                                                            <div class="beerinfobox">
                                                                <figure><img src="<?php echo $BBImage; ?>" alt=""></figure>
                                                                <div id="hidden" class="content-details fadeIn-bottom">
																	<div class="inner">
																	   <h5><?php the_title();  ?></h5>
																	   <span class="quantityinfo"><?php the_field("acf_flx_beerandbrand_second_title"); ?></span>
                                                                            <a href="#" data-rel="formsubmission" class="button btn-lg btn-outline poptrigger" title="View">View</a>
                                                                        <!-- -->
    																	<div class="showPopupDetails" style="display: none;">
    																		<div class="beerdetail-img">
    																			<figure class="bgimg"><img src="<?php echo $BBImage; ?>" alt=""></figure>
    																		</div><!-- beerdetail-img -->
    																		<div class="beerdetail-text">
    																			<h2><?php the_title();  ?></h2>
    																			<?php the_content();  ?>
    																			<p class="pop-enquiry">Enquiry for order</p>
    																			<a href="<?php echo site_url( "contact-us" ); ?>" class="button btn-lg">Enquire Now</a>
    																		</div><!-- beerdetail-img -->
    																	</div>
                                                                        <!---->

																    </div>
																</div>
                                                            </div><!--/.beerinfobox-->
                                                        </div><!--/.flexbox-->
                                                        <?php
                                                        if ($cnt%3 == 0) {
														   echo "<div class='clear'>";
														   echo "</div>";
													    }
														$cnt++;
                                                    endwhile;
                                                endif;
                                                wp_reset_postdata(); 
                                                ?>
                                                </div><!--/.flexwrapper-->
                                            </div><!--/.tabcontent-->
                                        <?php
                                     $count++;
                                    }
                                    ?>
                                    <!-- <div class="btnitemcenter"><a href="#" class="button btn-lg" title="Load More">Load More</a></div> -->
                                </div><!--/.tab-container -->
                            </div><!--/.tab-data-->
                        </div><!--/.beerbrandstabwrap-->
                    </div><!--/.beerbrandswrapper-->
                </div><!--/.wrap-->
			</div>
                <?php  $lukiImage = WPCustomClass::GetAcfImage(get_field("acf_luks_section_image"),"testimonialsbg.jpg"); ?>
                <div class="order-bannerarea" style="background: url(<?php echo $lukiImage["image_url"]; ?>) no-repeat center center / cover;">
                    <div class="order-bannerinner">
                        <?php the_field("acf_luks_section_content"); ?>
                        <div class="ac-btn button">
                            <!-- <input type="button" class="button btn-lg" value="Contact Us"> -->
                            <a href="<?php echo site_url("contact-us"); ?>" class="button btn-lg" title="Contact Us">Contact Us</a>
                        </div><!-- ac-btn -->
                    </div><!-- order-bannerinner -->
                </div><!--/.order-bannerarea-->
            </div><!--/.beerbrandssection-->
        </div><!--/#content-->
    </div><!--/#primary-->
</div><!--/#main-->

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

<?php
get_footer();