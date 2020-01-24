<?php

/*

Template name: Contact Template 
*/

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/innerbannercontact.jpg");

?>
    <div class="banner" style="background-image:url(<?php echo $PageImage;  ?>);">
        <div class="main-title"><h1 class="banner-title"><?php the_title();  ?></h1></div>
    </div><!--/.banner-->
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content">
            	<div class="contactinfo-area secpadding">
                    <div class="wrap">
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
                		<div class="wrap">
                			<div class="contactsectionright">
		                    	<h3>Contact Us</h3>
		                        <div class="contactformwrapper">	                            	
                                	<?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]');  ?>                                    
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