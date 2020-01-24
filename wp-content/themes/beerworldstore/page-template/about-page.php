<?php

/*

Template name: About Template 
*/

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/innerbanner.jpg");

?>

    <div class="banner" style="background-image:url(<?php echo $PageImage;  ?>);">
        <div class="main-title"><h1 class="banner-title"><?php the_title();  ?></h1></div>
	</div><!--/.banner-->
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content">
            	<div class="aboutsectionmain">
                	<div class="aboutsectionwrapper">
                    	<div class="aboutsectionwrap">
                        	<div class="aboutsectionwrapimg">
                                <?php $FirstImage = WPCustomClass::GetAcfImage(get_field("acf_section_image_1"),"img-placeholder.jpg");  ?>
                            	<figure class="bgimg"><img src="<?php echo $FirstImage['image_url']; ?>" alt="<?php echo $FirstImage['image_alt']; ?>" title="<?php echo $FirstImage['image_title']; ?>"></figure>
                            </div><!--/.aboutsectionwrapleft-->
                            <div class="aboutsectionwrapcontent">
                            	<?php the_field('acf_section_content_1');  ?>
                            </div><!--/.aboutsectionwrapright-->
                        </div><!--/.aboutsectionwrap-->
                        <div class="aboutsectionwrap aboutsectionwrapreverse">
                            <?php $SecondImage = WPCustomClass::GetAcfImage(get_field("acf_section_image_2"),"img-placeholder.jpg");  ?>
                        	<div class="aboutsectionwrapimg">
                            	<figure class="bgimg"><img src="<?php echo $SecondImage['image_url']; ?>" alt="<?php echo $SecondImage['image_alt']; ?>" title="<?php echo $SecondImage['image_title']; ?>"></figure>
                            </div><!--/.aboutsectionwrapleft-->
                            <div class="aboutsectionwrapcontent ourmisssioncontent">
                            	<?php the_field('acf_section_content_2');  ?>
                            </div><!--/.aboutsectionwrapright-->
                        </div><!--/.aboutsectionwrap-->
                    </div><!--/.aboutsectionwrapper-->
                </div><!--/.aboutsectionmain-->
                <div class="orderstypesection orderstypesectiontwoitems">
                	<div class="wrap">
                    	<div class="flexwrapper">
                        	<div class="flex50">
                            	<div class="flexwrapper flexwrapperend">
                                	<div class="flex50">
                                        <?php $FirstListImage = WPCustomClass::GetAcfImage(get_field("acf_list_image",173),"img-placeholder.jpg");  ?>
                                    	<figure class="bgimg"><img src="<?php echo $FirstListImage['image_url']; ?>" alt="<?php echo $FirstListImage['image_alt']; ?>" title="<?php echo $FirstListImage['image_title']; ?>"></figure>
                                    </div><!--/.flex50-->
                                    <div class="flex50 typeinfocontent">
                                    	<h3><?php echo get_the_title(173);  ?></h3>
                                        <p><?php the_field("acf_excerpt_content",173);  ?></p>
                                        <span class="buttonwwrapper"><a href="<?php echo get_the_permalink(173);  ?>" class="button btn-lg btn-outline" title="<?php echo get_the_title(173);  ?>"><?php echo get_the_title(173);  ?></a></span>
                                    </div><!--/.flex50-->
                                </div><!--/.flexwrapperend-->
                            </div><!--/.flex50-->
                            <div class="flex50">
                            	<div class="flexwrapper flexwrapperend">
                                	<div class="flex50">
                                        <?php $SecondListImage = WPCustomClass::GetAcfImage(get_field("acf_list_image",175),"img-placeholder.jpg");  ?>
                                    	<figure class="bgimg"><img src="<?php echo $SecondListImage['image_url']; ?>" alt="<?php echo $SecondListImage['image_alt']; ?>" title="<?php echo $SecondListImage['image_title']; ?>"></figure>
                                    </div><!--/.flex50-->
                                    <div class="flex50 typeinfocontent">
                                    	<h3><?php echo get_the_title(175);  ?></h3>
                                        <p><?php the_field("acf_excerpt_content",175);  ?></p>
                                        <span class="buttonwwrapper"><a href="<?php echo get_the_permalink(175);  ?>" class="button btn-lg btn-outline" title="<?php echo get_the_title(175);  ?>"><?php echo get_the_title(175);  ?></a></span>
                                    </div><!--/.flex50-->
                                </div><!--/.flexwrapperend-->
                            </div><!--/.flex50-->
                        </div><!--/.flexwrapper-->
                    </div><!--/.wrap-->
                </div><!--/.orderstypesection-->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main-->
<?php
get_footer();