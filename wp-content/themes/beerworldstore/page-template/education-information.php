<?php

/*

Template name: Education Information Template 
*/

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/innerbanner.jpg");

?>
    <div class="banner" style="background-image:url(<?php echo $PageImage;  ?>);">
        <div class="main-title"><h1 class="banner-title"><?php the_title();  ?></h1></div>
    </div><!--/.banner-->
    <div id="main">
        <div id="primary" class="beertrend-main one-column">
            <div id="content">
                <div class="wrap">                                  
                    <div class="orderstypesection sectionactive">
                        <div class="wrap">
                            <div class="flexwrapper">
                                <div class="flex50">
                                    <div class="flexwrapper flexwrapperend">
                                        <div class="flex50">
                                            <?php $sectionImage = WPCustomClass::GetAcfImage(get_field("acf_si_section_image"), "education-information.jpg"); ?>
                                            <figure class="bgimg" style="background-image: url(<?php echo $sectionImage["image_url"]; ?>)"><img src="<?php echo $sectionImage["image_url"]; ?>" alt="<?php echo $sectionImage["image_alt"]; ?>"></figure>
                                        </div><!--/.flex50-->
                                        <div class="flex50 typeinfocontent">
                                            <?php the_field("acf_ei_section_content"); ?>
                                        </div><!--/.flex50-->
                                    </div><!--/.flexwrapperend-->
                                </div><!--/.flex50-->
                            </div><!--/.flexwrapper-->
                        </div><!--/.wrap-->
                    </div>
                </div><!-- /.wrap -->
            </div><!--/#content-->
        </div><!--/#primary-->
    </div><!--/#main-->
<?php
get_footer();