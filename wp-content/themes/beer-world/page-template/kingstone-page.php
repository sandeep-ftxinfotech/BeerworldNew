<?php

/*

Template name: kingstone Template 
*/

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/locationdetail-banner.jpg");

$aboutSection = get_field("acf_ld_about_section");

?>

    <div class="banner" style="background-image:url(<?php echo $PageImage;  ?>);">
        <div class="main-title"><h1 class="banner-title"><?php  the_title(); ?></h1></div>
	</div><!--/.banner-->
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content">
            	<div class="kingstone-area">
                    <div class="wrap">
                        <div class="kingstone-topsection">
                            <div class="kingstone-topsectionleft">
                                <figure class="bgimg">
                                    <img src="<?php echo get_template_directory_uri();  ?>/images/kingstonsecimg.jpg" alt="">
                                </figure>
                            </div><!-- /.kingstone-topsectionleft -->
                            <div class="kingstone-topsectionright">
                                <h3><span>Kingstone beer world</span>Kegs</h3>
                                <p class="kin-topsectext">We always carry Bud, Bud Light, Coors Light, Busch and most domestic beers in 1/2 and 1/4 kegs, please call for prices.</p>
                                <p class="kin-topsecdate">updated 05/10/2019</p>    
                            </div><!-- /.kingstone-topsectionright -->
                        </div><!-- /.kingstone-topsection -->
                    </div><!-- /.wrap -->
                </div><!-- /.kingstone-area -->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main-->
<?php
get_footer();