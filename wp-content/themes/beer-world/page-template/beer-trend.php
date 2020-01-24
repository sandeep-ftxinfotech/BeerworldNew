<?php

/*

Template name: Beer Trend Template 
*/

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/innerbanner.jpg");

?>
    <div id="aboutBanner"  class="banner" style="background-image:url(<?php echo $PageImage;  ?>);">
       	<div class="container">
			<div class="row">
				<div id="aboutbannerContent" class="text-center wow fadeInLeft col-md-12 col-xs-12" data-wow-delay=".3s">
					<h1><?php the_title();  ?></h1>
					<div class="article wow fadeInLeft" data-wow-delay=".3s">
                        <?php the_field('b_t_banner_description',get_the_ID()); ?>
					</div>
				</div>

			</div>
            <a href="#primary" class="arrow-bottom"></a>
		</div>
	</div><!--/.banner-->
    <div id="main">
        <div id="primary" class="beertrend-main one-column">
            <div id="content">
                <div class="container">                              	
                    <div class="beertrendsblock mainPage">
                        <div class="row">
                            <?php
                                if( have_rows('acf_flx_btc_beer_trends_content') ):
									$cntDiv = 1;
									$flagLeftDiv = false;
                                    while ( have_rows('acf_flx_btc_beer_trends_content') ) : the_row();
                                        $backImage = WPCustomClass::GetAcfImage(get_sub_field("acf_flx_backround_image"),"spring.jpeg");
										
										if($cntDiv % 4 == 0) {
											?></div><div class="float-right col-md-4"><?php
										}
										else if(!$flagLeftDiv) {
											?><div class="float-left col-md-8"><?php
											$flagLeftDiv = true;
										}
                                        ?>
                                            <div class="col">
                                                <div class="trendsboxs" style="background: url(<?php  echo $backImage['image_url']; ?>)">
                                                    <div class="inner">
														<?php the_sub_field("acf_flx_column_content"); ?>
													</div>
                                                </div><!-- trendsboxs -->
                                            </div>
                                        <?php
										$cntDiv++;
                                    endwhile;
                                endif;
                            ?>
										</div>
                        </div>
                    </div><!-- /.beertrendsblock -->
                </div><!-- /.wrap -->
				<div class="orderstypesectionmain">
                        <div class="orderstypesection">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="flexwrapper flexwrapperend">
                                            <div class="col-md-7 col-xs-12 paddingNone">
                                                <?php $sectionImage = WPCustomClass::GetAcfImage(get_field("acf_sic_section_image"), "education-information.jpg"); ?>
                                                <figure class="bgimg" style="background-image: url(<?php echo $sectionImage["image_url"]; ?>)"><img src="<?php echo $sectionImage["image_url"]; ?>" alt="<?php echo $sectionImage["image_alt"]; ?>"></figure>
                                            </div><!--/.flex50-->
                                             <div class="col-md-5 col-xs-12 typeinfocontent">
                                                <?php the_field("acf_sic_section_content"); ?>
                                            </div><!--/.flex50-->
                                        </div><!--/.flexwrapperend-->
                                    </div><!--/.flex50-->
                                </div><!--/.flexwrapper-->
                            </div><!--/.wrap-->
                        </div>
                        <div class="orderstypesection flexrevers">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="flexwrapper flexwrapperend">
                                            <div class="col-md-5 col-xs-12 typeinfocontent">
                                                <?php the_field("acf_sci_section_content"); ?>
                                            </div><!--/.flex50-->
                                            <div class="col-md-7 col-xs-12 paddingNone">
                                                <?php $sectionImage = WPCustomClass::GetAcfImage(get_field("acf_sci_section_image"), "education-information.jpg"); ?>
                                                <figure class="bgimg" style="background-image: url(<?php echo $sectionImage["image_url"]; ?>)"><img src="<?php echo $sectionImage["image_url"]; ?>" alt="<?php echo $sectionImage["image_alt"]; ?>"></figure>
                                            </div><!--/.flex50-->                                        
                                        </div><!--/.flexwrapperend-->
                                    </div><!--/.flex50-->
                                </div><!--/.flexwrapper-->
                            </div><!--/.wrap-->
                        </div>
                    </div><!-- /.orderstypesectionmain -->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main-->
<?php
get_footer();