<?php

/*

Template name: Contact Template 
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
                        <?php the_field('c_banner_description',get_the_ID()); ?>
					</div>
				</div>

			</div>
            <a href="#primary" class="arrow-bottom"></a>
		</div>
    </div><!--/.banner-->
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content">
            	<div class="contactinfo-area secpadding mainPage">
                    <div class="container">
                        <div class="cols cols3">
                            <div class="col">
                                <div class="contactinfobox">
                                    <?php  the_field("acf_address_1"); ?>
                                </div><!--/.contactinfobox-->
                            </div><!--/.col-->
                            <div class="col">
                                <div class="contactinfobox">
                                    <?php  the_field("acf_address_2"); ?>
                                </div><!--/.contactinfobox-->
                            </div><!--/.col-->
                            <div class="col">
                                <div class="contactinfobox">
                                    <?php  the_field("acf_address_3"); ?>
                                </div><!--/.contactinfobox-->
                            </div><!--/.col-->
                        </div><!--/.cols-->
                    </div><!--/.wrap-->
                </div><!--/.contact-area-->
                <div class="contactform-area">
                	<div class="contactformarea">
                		<div class="row">
                			<div class="contactsectionright col-md-9 col-xs-12 missionImg">
		                        <div class="contactformwrapper">	                            	
                                	  <img src="<?php  the_field("acf_contact_image"); ?>">                            
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