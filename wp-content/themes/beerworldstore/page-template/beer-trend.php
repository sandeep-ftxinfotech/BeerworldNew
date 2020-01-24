<?php

/*

Template name: Beer Trend Template 
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
                    <div class="beertrendsblock">
                        <div class="cols col4">
                            <?php
                                if( have_rows('acf_flx_btc_beer_trends_content') ):
                                    while ( have_rows('acf_flx_btc_beer_trends_content') ) : the_row();
                                        $backImage = WPCustomClass::GetAcfImage(get_sub_field("acf_flx_backround_image"),"spring.jpeg");
                                        ?>
                                            <div class="col">
                                                <div class="trendsboxs" style="background: url(<?php  echo $backImage['image_url']; ?>)">
                                                    <?php the_sub_field("acf_flx_column_content"); ?>
                                                </div><!-- trendsboxs -->
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                            ?>
                        </div>
                    </div><!-- /.beertrendsblock -->
                    <div class="orderstypesectionmain">
                        <div class="orderstypesection">
                            <div class="wrap">
                                <div class="flexwrapper">
                                    <div class="flex50">
                                        <div class="flexwrapper flexwrapperend">
                                            <div class="flex50">
                                                <?php $sectionImage = WPCustomClass::GetAcfImage(get_field("acf_sic_section_image"), "education-information.jpg"); ?>
                                                <figure class="bgimg" style="background-image: url(<?php echo $sectionImage["image_url"]; ?>)"><img src="<?php echo $sectionImage["image_url"]; ?>" alt="<?php echo $sectionImage["image_alt"]; ?>"></figure>
                                            </div><!--/.flex50-->
                                             <div class="flex50 typeinfocontent">
                                                <?php the_field("acf_sic_section_content"); ?>
                                            </div><!--/.flex50-->
                                        </div><!--/.flexwrapperend-->
                                    </div><!--/.flex50-->
                                </div><!--/.flexwrapper-->
                            </div><!--/.wrap-->
                        </div>
                        <div class="orderstypesection flexrevers">
                            <div class="wrap">
                                <div class="flexwrapper">
                                    <div class="flex50">
                                        <div class="flexwrapper flexwrapperend">
                                            <div class="flex50 typeinfocontent">
                                                <?php the_field("acf_sci_section_content"); ?>
                                            </div><!--/.flex50-->
                                            <div class="flex50">
                                                <?php $sectionImage = WPCustomClass::GetAcfImage(get_field("acf_sci_section_image"), "education-information.jpg"); ?>
                                                <figure class="bgimg" style="background-image: url(<?php echo $sectionImage["image_url"]; ?>)"><img src="<?php echo $sectionImage["image_url"]; ?>" alt="<?php echo $sectionImage["image_alt"]; ?>"></figure>
                                            </div><!--/.flex50-->                                        
                                        </div><!--/.flexwrapperend-->
                                    </div><!--/.flex50-->
                                </div><!--/.flexwrapper-->
                            </div><!--/.wrap-->
                        </div>
                    </div><!-- /.orderstypesectionmain -->

                </div><!-- /.wrap -->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main-->
<?php
get_footer();