<?php

/*

Template name: On Tap Location Detail Template 
*/

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/locationdetail-banner.jpg");

$aboutSection = get_field("acf_ld_about_section");
$bannerImg = get_field("banner_image");

global $post;


?>
<div id="innerlocation" class="ontapLocation">

  <div id="aboutBanner"  class="banner" style="background-image:url(<?php echo $PageImage;  ?>);">
    <div class="container">
  		<div class="row">
  			<div id="aboutbannerContent" class="text-center wow fadeInLeft col-md-12 col-xs-12" data-wow-delay=".3s">
  				<h1><?php the_title();  ?></h1>
  				<div class="article wow fadeInLeft" data-wow-delay=".3s"><?php the_field('e_banner_description',get_the_ID()); ?></div>
  			</div>
  		</div>
      <a href="#primary" class="arrow-bottom"></a>
    </div>
  </div><!--/.banner-->

  <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content">
              <div id="ontapLocation" class="contactinfo-area secpadding mainPage">
                    <div class="container">
                       <div class="locationsection">
                            <div class="locationboxwrapper" id="location">
                                <?php
                                    /*wp_get_custom_postype_content($posttype = "", $page_id = "", $page_parent = "", $post_per_page = "", $order = "", $order_by = "")*/
                                    $agrsResult = WPCustomClass::wpGetCustomPostType("page", "", 55, 11, "ASC", "");

                                    if( $agrsResult->have_posts() ):
                                        ?>
                                        <div class="innerLocation row">
                                        <?php
                                        while( $agrsResult->have_posts() ): $agrsResult->the_post();
                                            ?>
                                                <div class="outerLocation col-md-6">
													<?php if( get_field("on_tap_id") != "" ) { ?>
														<a href="<?php echo get_site_url() . '/on-tap/?api=' . get_field("on_tap_id"); ?>">
													<?php } ?>
                                                    <div class="locationbox">
														<div class="float-left">
															 <div class="locationimg"><figure class="bgimg"><img src="<?php echo WPCustomClass::CustomFeatureImage(get_the_ID(),"large","location05.jpg"); ?>" alt=""></figure></div>
														</div>
                                                        <div class="locationboxcontent-2 float-right">
                                                            <div class="locationname"><?php the_title();  ?></div>
                                                            <address><?php the_content(); ?></address>
															
															<div class="moreBtn">More</div>
														
                                                        </div><!--/.locationboxcontent-->
														<div class="clear"></div>
                                                    </div><!--/.locationbox-->
													<?php if( get_field("on_tap_id") != "" ) { ?>
													</a>
													<?php } ?>	
                                                </div><!--/.col-->
                                            <?php
                                        endwhile;
                                        ?>
                                        </div><!--/.cols cols3-->
                                        <?php
                                    endif;
                                    wp_reset_postdata();
                                    ?>
                            </div><!--/.locationboxwrapper-->                    
                        </div><!--/.locationsection-->
                    </div><!--/.wrap-->
                </div><!--/.contact-area-->
                <div class="contactform-area" id="tab-location-bg">
                  <div class="contactformarea">
                    <div class="row">
                      <div class="contactsectionright col-md-12 col-xs-12 missionImg">
                            <div class="contactformwrapper">                                
                                    <img src="<?php  the_field("afc_on_tab_location"); ?>">                            
                            </div><!--/.contactformwrapper-->
                        </div><!--/.contactsectionright-->
                    </div><!-- wrap -->
                  </div><!-- formarea -->
                </div><!--/.contact-area-->
            </div><!--/#content-->
        </div><!--/#primary-->
  </div><!--/#main-->


</div>



<?php
get_footer();