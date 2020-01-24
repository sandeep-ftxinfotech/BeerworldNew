<?php

/*

Template name: Request Order Template
*/

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/innerbannercontact.jpg");

?>
    <div id="aboutBanner"  class="banner" style="background-image:url(<?php echo $PageImage;  ?>);">
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
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content">
            	<div class="contactinfo-area secpadding mainPage" id="requestOrder">
                    <div class="container">
                       <div class="requestordersec row">
                            <?php
                                if( have_rows('acf_request_order_content') ):
                                    while ( have_rows('acf_request_order_content') ) : the_row();
                                        ?>
                                            <div class="col-md-6">
												<div class="innersec text-center">
													<div class="trendsboxs" style="background: url(<?php the_sub_field("acf_background_image"); ?>)">
														<div class="icon"><img src="<?php the_sub_field("acf_request_order_icon"); ?>"></div>
														<div class="orderContent">
															<?php the_sub_field("acf_request_order_content"); ?>
														</div>
														<a href="<?php the_sub_field("acf_request_button"); ?>" class="buttons">Order Now</a>
													</div><!-- trendsboxs -->
												</div>
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                            ?>   
                       </div><!--/.locationsection-->
                    </div><!--/.wrap-->
                </div><!--/.contact-area-->
                <div class="contactform-area">
                	<div class="contactformarea">
                		<div class="row">
                			<div class="contactsectionright col-md-9 col-xs-12 missionImg">
		                        <div class="contactformwrapper">	                            	
                                	  <img src="<?php  the_field("acf_big_request_order_image"); ?>">                            
		                        </div><!--/.contactformwrapper-->
		                    </div><!--/.contactsectionright-->
                		</div><!-- wrap -->
                	</div><!-- formarea -->
                </div><!--/.contact-area-->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main-->
<?php
get_footer();