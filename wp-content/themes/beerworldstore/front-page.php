<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <?php $SectionImage = WPCustomClass::GetAcfImage(get_field("acf_flx_home_background_image"),"bgi/mainbannerbg.jpg"); ?>
	<div id="mainbanner" style="background: #000 url(<?php echo $SectionImage["image_url"];  ?>) no-repeat center center / cover;" alt="<?php echo $SectionImage["image_alt"];  ?>">
    	<div class="mainbannerwrapper">
        	<div class="mainbannercontent">
                <?php the_field("acf_flx_home_main_banner_section");  ?>            	
                <div class="buttongroup">
                	<?php /*<a href="<?php the_field("acf_flx_home_button_url_1");  ?>" class="button btn-lg" title="<?php the_field("acf_flx_home_button_text_1");  ?>"><?php the_field("acf_flx_home_button_text_1");  ?></a> */ ?>
                    <a href="<?php the_field("acf_flx_home_button_url_2");  ?>" class="button btn-lg btn-outline" title="<?php the_field("acf_flx_home_button_text_2");  ?>"><?php the_field("acf_flx_home_button_text_2");  ?></a>
                </div><!--/.buttongroup-->
            </div><!--/.mainbannercontent-->
        </div><!--/.mainbannerwrapper-->
        <span class="scrolldown"><a href="#">SCROLL</a></span>
    </div><!--/#mainbanner-->
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content">
            <?php
                if( have_rows('acf_flx_flexible_content') ):
                    while ( have_rows('acf_flx_flexible_content') ) : the_row();
                        if( get_row_layout() == 'acf_flx_about_section' ):
                            $SectionImage1 = WPCustomClass::GetAcfImage(get_sub_field("acf_flx_section_image_1"),"aboutimg01.jpg");
                            $SectionImage2 = WPCustomClass::GetAcfImage(get_sub_field("acf_flx_section_image_2"),"aboutimg02.jpg");
                            $SectionImage3 = WPCustomClass::GetAcfImage(get_sub_field("acf_flx_section_intro_image"),"aboutimg03.jpg");
                            ?>
                                <div class="aboutsection">
                                    <div class="aboutsectionwrap">
                                        <div class="aboutflexwrapper">
                                            <div class="aboutflex flex25 aboutflexleft">
                                                <figure class="bgimg"><img src="<?php echo $SectionImage1["image_url"] ?>" alt="<?php echo $SectionImage1["image_alt"] ?>" title="<?php echo $SectionImage1["image_title"] ?>"></figure>
                                            </div><!--/.aboutflex-->
                                            <div class="aboutflex flex75 aboutflexright">
                                                <div class="aboutflexinnerwrapper">
                                                    <div class="aboutflexinner flex30">
                                                        <figure class="bgimg"><img src="<?php echo $SectionImage2["image_url"] ?>" alt="<?php echo $SectionImage2["image_alt"] ?>" title="<?php echo $SectionImage2["image_title"] ?>"></figure>
                                                    </div><!--/.aboutflexinner-->
                                                    <div class="aboutflexinner flex70">
                                                        <?php the_sub_field("acf_flx_section_content")  ?>
                                                    </div><!--/.aboutflexinner-->
                                                </div><!--/.aboutflexinnerwrapper-->
                                                <div class="aboutintro">
                                                    <figure class="bgimg"><img src="<?php echo $SectionImage3["image_url"] ?>" alt="<?php echo $SectionImage3["image_alt"] ?>" title="<?php echo $SectionImage3["image_title"] ?>"></figure>
                                                    <div class="aboutintrocontent">
                                                        <?php the_sub_field("acf_flx_section_intro_content")  ?>
                                                    </div>
                                                </div><!--/.aboutintro-->
                                            </div><!--/.aboutflex-->
                                        </div><!--/.aboutflexwrapper-->
                                    </div><!--/.aboutsectionwrap-->
                                </div><!--/.aboutsection-->
                            <?php
                        elseif( get_row_layout() == 'acf_flx_beer_brand_section' ): 
                            ?>
                                
                            <?php
                        elseif( get_row_layout() == 'acf_flx_our_location_section' ): 
                            ?>
                                <div class="locationsection secpadding">
                                    <div class="locationboxwrapper">
                                        <?php
                                            /*wp_get_custom_postype_content($posttype = "", $page_id = "", $page_parent = "", $post_per_page = "", $order = "", $order_by = "")*/
                                            $agrsResult = WPCustomClass::wpGetCustomPostType("page", "", 55, 11, "ASC", "");

                                            if( $agrsResult->have_posts() ):
                                                ?>
                                                <h3 class="txtaligncenter">Our Locations</h3>
                                                <div class="cols cols3">
                                                <?php
                                                while( $agrsResult->have_posts() ): $agrsResult->the_post();
                                                    ?>
                                                        <div class="col outerLocation">
                                                            <div class="locationbox">
                                                                <a href="<?php the_permalink(get_the_ID()); ?>" class="locationimg"><figure class="bgimg"><img src="<?php echo WPCustomClass::CustomFeatureImage(get_the_ID(),"large","location05.jpg"); ?>" alt=""></figure></a>
                                                                <div class="locationboxcontent">
                                                                    <a href="<?php the_permalink(get_the_ID()); ?>" class="locationname"><?php the_title();  ?></a>
                                                                    <address><?php the_content(); ?></address>
                                                                    <ul class="social">
                                                                    <?php
                                                                    if( get_field("acf_ol_facebook_url") != "" )
                                                                    {
                                                                        echo '<li class="fb"><a href="'.get_field("acf_ol_facebook_url").'" title="Facebook">Facebook</a></li>';
                                                                    }

                                                                    if( get_field("acf_ol_twitter_url") != "" )
                                                                    {
                                                                        echo '<li class="tw"><a href="'.get_field("acf_ol_twitter_url").'" title="Twitter">Twitter</a></li>';
                                                                    }

                                                                    if( get_field("acf_ol_instagram_url") != "" )
                                                                    {
                                                                        echo '<li class="insta"><a href="'.get_field("acf_ol_instagram_url").'" title="Instagram">Instagram</a></li>';
                                                                    }

                                                                    if( get_field("acf_ol_yelp_url") != "" )
                                                                    {
                                                                        echo '<li class="yelp"><a href="'.get_field("acf_ol_yelp_url").'" title="Yelp">Yelp</a></li>';
                                                                    }
                                                                    ?>
                                                                    </ul><!--/.social-->
                                                                </div><!--/.locationboxcontent-->
                                                            </div><!--/.locationbox-->
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
                            <?php
                        elseif( get_row_layout() == 'acf_flx_order_type_section' ): 
                            ?>
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
                            <?php
                        elseif( get_row_layout() == 'acf_flx_testimonial_section' ): 
                            $BackgroundImage = WPCustomClass::GetAcfImage(get_sub_field("acf_flx_section_background_image"),"img-placeholder.jpg");
                            ?>
                                <div class="testimonialssection secpadding" style="background: #000 url(<?php echo $BackgroundImage["image_url"];  ?>) no-repeat center center / cover;" alt="<?php echo $BackgroundImage["image_alt"];  ?>" title="<?php echo $BackgroundImage["image_title"];  ?>">
                                    <div class="wrap">
                                        <h3>Testimonials</h3>
                                        <div class="testimonialsliderwrapper">
                                            <div class="testimonialslider">
                                            <?php
                                                if( have_rows('acf_flx_testimonial_list') ):
                                                    while ( have_rows('acf_flx_testimonial_list') ) : the_row();
                                                        ?>
                                                            <div class="item">
                                                                <?php the_sub_field("acf_flx_testimonial_content",false, false);  ?>
                                                            </div><!--/.item-->
                                                        <?php
                                                    endwhile;
                                                endif;
                                                ?>  
                                            </div><!--/.testimonialslider-->
                                        </div><!--/.testimonialsliderwrapper-->
                                    </div><!--/.wrap-->
                                </div><!--/.testimonialssection-->
                            <?php
                        elseif( get_row_layout() == 'acf_flx_contact_section' ): 
                            ?>
                                 <div class="contactsection">
                                    <div class="contactsectionleft">
                                        <?php the_sub_field("acf_flx_contact_list", false, false);  ?>
                                    </div><!--/.contactsectionleft-->
                                    <div class="contactsectionright">
                                        <h3>Contact Us</h3>
                                        <div class="contactformwrapper">
                                            <div class="form-block">
                                                <div class="cols cols2">
                                                    <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]');  ?>
                                                </div><!--/.cols2-->
                                            </div><!--/.form-block-->
                                        </div><!--/.contactformwrapper-->
                                    </div><!--/.contactsectionright-->
                                </div><!--/.contactsection-->
                            <?php
                        endif;
                    endwhile;
                endif;
            ?>    
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
                        <a href="#" class="button btn-lg">Enquire Now</a>
                    </div><!-- beerdetail-img -->
                </div><!--/.formsubmission-area-->
            </div><!--/.pop-contentbox-->
        </div><!--/.popup-block-->
    </div><!--/.popouterbox-->
<?php
get_footer();
