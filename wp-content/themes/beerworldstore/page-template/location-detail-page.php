<?php

/*

Template name: Location Detail Template 
*/

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/locationdetail-banner.jpg");

$aboutSection = get_field("acf_ld_about_section");
$bannerImg = get_field("banner_image");

global $post;


?>

    <div class="banner" style="background-image:url(<?php echo $bannerImg;  ?>);">
        <div class="main-title"><h1 class="banner-title"><?php  the_title(); ?></h1></div>
	</div><!--/.banner-->
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content">
            	<div class="locationi-detail">
                     <div class="aboutsectionmain">
                        <div class="aboutsectionwrapper">
                            <?php
                            if( !empty($aboutSection["acf_ld_section_content_1"]) )
                            {
                            ?>
                                <div class="aboutsectionwrap">
                                    <div class="aboutsectionwrapimg">
                                        <?php $leftImage = WPCustomClass::GetAcfImage($aboutSection["acf_fs_section_image_1"], "bgi/locationimgleft.jpg");  ?>
                                        <figure class="bgimg"><img src="<?php echo $leftImage["image_url"]; ?>" alt="<?php echo $leftImage["image_alt"]; ?>" title="<?php echo $leftImage["image_title"]; ?>"></figure>
                                    </div><!--/.aboutsectionwrapleft-->
                                    <div class="aboutsectionwrapcontent">
                                        <?php echo $aboutSection["acf_ld_section_content_1"]; ?>
                                    </div><!--/.aboutsectionwrapright-->
                                </div><!--/.aboutsectionwrap-->
                            <?php
                            }

                            if( !empty($aboutSection["acf_ld_section_content_2"]) )
                            {
                            ?>
                                <div class="aboutsectionwrap aboutsectionwrapreverse">
                                    <div class="aboutsectionwrapimg">
                                        <?php $rightImage = WPCustomClass::GetAcfImage($aboutSection["acf_ld_section_image_2"], "bgi/locationimgright.jpg");  ?>
                                        <figure class="bgimg"><img src="<?php echo $rightImage["image_url"]; ?>" alt="<?php echo $rightImage["image_alt"]; ?>" title="<?php echo $rightImage["image_title"]; ?>"></figure>
                                    </div><!--/.aboutsectionwrapleft-->
                                    <div class="aboutsectionwrapcontent ourmisssioncontent">
                                       <?php echo $aboutSection["acf_ld_section_content_2"]; ?>
                                    </div><!--/.aboutsectionwrapright-->
                                </div><!--/.aboutsectionwrap-->
                            <?php
                            }
                            ?>
                        </div><!--/.aboutsectionwrapper-->
                        <div class="on-tap-kingston">
                            <?php 
                            global $post;
                            $postResult = get_posts(
                                array(
                                    'post_type'  => 'location-specials',
                                    'post_status'=> 'publish',
                                    'tax_query'  => array(
                                                        array(
                                                            'taxonomy' => 'location-special-category',
                                                            'field'    => 'slug',
                                                            'terms'    => $post->post_name,
                                                        ),
                                                    ),
                                )
                            );

                            if( count($postResult) > 0)
                            {
                                ?>
                                <script type="text/javascript">
                                    jQuery(document).ready(function($) {
                                        jQuery("#specialcols").addClass('cols3');
                                        jQuery("#specialcol").show();    
                                    });
                                </script>
                                <?php
                            }
                            else
                            {
                                ?>
                                <script type="text/javascript">
                                    jQuery(document).ready(function($) {
                                        jQuery("#specialcols").addClass('cols2');
                                        jQuery("#specialcol").hide();     
                                    });
                                </script>
                                <?php
                            }

                            ?>

                            <?php 
                                $siteUrl   =  get_permalink(55);
                                $slugArray = array(
                                    'beer-world-catskill'   => 'Catskill',
                                    'beer-world-kingston'   => 'Kingstone',
                                    'liberty-store'    => 'Liberty',
                                    'beer-world-monticello' => 'Monticello',
                                    'chester-store'    => 'Chester',
                                    'monroe-store'     => 'Monroe',
                                );
                                $apiOnTapArray = array(
                                    'beer-world-catskill'  => '13058',
                                    'beer-world-kingston'  => '13057',
                                    'liberty-store'        => '50993',
                                    'beer-world-monticello'=> '31284',
                                    'chester-store'   => 'CS',
                                    'monroe-store'    => 'CS',
                                );
                                $apiKegsArray = array(
                                    'beer-world-catskill'  => '13058',
                                    'beer-world-kingston'  => '13057',
                                    'liberty-store'   => '50993',
                                    'beer-world-monticello'=> 'CS',
                                    'chester-store'   => 'Table',
                                    'monroe-store'    => 'Table',
                                );
                            ?>
                            <div class="cols" id="specialcols">
                                <div class="col">
                                    <a href="<?php echo $siteUrl."on-tap?api=".$apiOnTapArray[$post->post_name]."&location=".$slugArray[$post->post_name];  ?>">
                                        <figure class="bgimg">
                                            <?php $onTapImage = WPCustomClass::GetAcfImage(get_field('acf_otsi_on_tap_section_image'), "kingstonimg1.jpg");  ?>
                                            <img src="<?php echo $onTapImage['image_url']; ?>" alt="<?php echo $onTapImage['image_alt']; ?>">
                                        </figure>
                                        
                                        <div class="kingston-innertext">
                                            <span class="kingston-title">On Tap in <?php echo $slugArray[$post->post_name]; ?></span>
                                            <span class="kingston-viewall">View all</span>
                                        </div>                                
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="<?php echo $siteUrl."kegs?api=".$apiKegsArray[$post->post_name]."&location=".$slugArray[$post->post_name];  ?>">
                                        <figure class="bgimg">
                                            <?php $kegsImage = WPCustomClass::GetAcfImage(get_field('acf_ksi_kegs_section_image'), "kingstonimg2.jpg");  ?>
                                            <img src="<?php echo $kegsImage['image_url']; ?>" alt="<?php echo $kegsImage['image_alt']; ?>">
                                        </figure>
                                        <div class="kingston-innertext">
                                            <span class="kingston-title"><?php echo $slugArray[$post->post_name]; ?> Kegs</span>
                                            <span class="kingston-viewall">View all</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col" id="specialcol">
                                    <a href="<?php echo get_post_type_archive_link( 'location-specials' ); ?>?location=<?php echo $post->post_name; ?>">
                                        <figure class="bgimg">
                                            <?php $specialImage = WPCustomClass::GetAcfImage(get_field('acf_ssi_special_section_image'), "kingstonimg2.jpg");  ?>
                                            <img src="<?php echo $specialImage['image_url']; ?>" alt="<?php echo $specialImage['image_alt']; ?>">
                                        </figure>
                                        <div class="kingston-innertext">
                                            <span class="kingston-title"><?php echo $slugArray[$post->post_name]; ?> Specials</span>
                                            <span class="kingston-viewall">View all</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div><!--/.on-tap-kingston-->
                        <?php
                        if( !empty( get_field("acf_tcs_sc_section_content") ) )
                        {
                        ?>
                            <div class="orderstypesection">
                                <div class="wrap">
                                    <div class="flexwrapper">
                                        <div class="flex50">
                                            <div class="flexwrapper flexwrapperend">
                                                <div class="flex50">
                                                    <?php $sectionImage = WPCustomClass::GetAcfImage(get_field('acf_tcs_si_section_image'), "tobacco-cigarsimg.jpg");  ?>
                                                    <figure class="bgimg"><img src="<?php echo $sectionImage['image_url']; ?>" alt="<?php echo $sectionImage['image_alt']; ?>"></figure>
                                                </div><!--/.flex50-->
                                                <div class="flex50 typeinfocontent">
                                                    <?php the_field("acf_tcs_sc_section_content"); ?>                     
                                                </div><!--/.flex50-->
                                            </div><!--/.flexwrapperend-->
                                        </div><!--/.flex50-->
                                    </div><!--/.flexwrapper-->
                                </div><!--/.wrap-->
                            </div><!--/.orderstypesection-->
                        <?php
                        }
                        ?>
                        <div class="beerworldblog">                            
                            <div class="wrap">
                                    <?php
                                    $arry  = array(                        
                                        'post_type'      => 'post',
                                        'order'          => 'DESC',
                                        'posts_per_page' => 3,
                                    ); 
                                    $posts = get_posts($arry);

                                    if( count($posts) > 0 )
                                    {
                                        ?>
                                        <h2>Beer World Blog</h2>
                                        <div class="beerworldbloginner">
                                        <?php
                                        foreach ($posts as $postList)
                                        {
                                            $postImage= WPCustomClass::CustomFeatureImage($postList->ID,"extra-large","beerworldblogimg1.jpg");
                                            ?>
                                                <a href="<?php echo get_permalink($postList->ID);?>">
                                                    <div class="beerworldblogblock">
                                                        <figure class="bgimg">
                                                             <img src="<?php echo $postImage; ?>" alt="">
                                                        </figure>
                                                        <div class="beerworldblog-text">
                                                            <span class="beerworldblog-title"><?php echo $postList->post_title; ?></span>
                                                            <span class="beerworldblog-date">by <?php echo get_the_author_meta("display_name", $postList->post_author); ?> on <?php echo  get_the_date( 'F j, Y' );  ?></span>
                                                        </div><!--/.beerworldblog-text-->
                                                    </div><!--/.beerworldblogblock-->
                                                </a>
                                            <?php
                                        }
                                        ?>
                                        </div><!--/.beerworldbloginner-->
                                        <?php
                                    }
                                    ?>                                   
                            </div><!--/.wrap-->
                        </div><!--/.beerworldblog--> 
                        <div class="galleryarea">
                            <h2>Gallery</h2>
                            <?php $gallerySection = get_field("acf_ld_gallery_section");  ?>
                            <div class="demo-gallery">
                                <ul id="lightgallery" class="list-unstyled row">
                                    <?php
                                    foreach ($gallerySection["acf_ld_gallery"] as $gallery) 
                                    {
                                        ?>
                                            <li>
                                                <a class="lightslidemain" href="" data-src="<?php echo $gallery["sizes"]["medium_large"];  ?>">
                                                    <img class="img-responsive" src="<?php echo $gallery["sizes"]["medium_large"];  ?>">
                                                    <div class="demo-gallery-poster">
                                                    <span></span>
                                                    </div>
                                                </a>
                                            </li> 
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div><!-- demo-gallery -->
                        </div><!-- galleryarea -->

                        <div class="location-contdetail">
                            <div class="wrap">
                                <?php $contactSection = get_field("acf_ld_c_contact_section"); 
                                if( $contactSection != "" )
                                { 
                                ?>
                                    <h2>Contact Us</h2>
                                    <div class="cols cols4">
                                        <div class="col">
                                            <?php echo $contactSection["acf_ld_cd_location"];  ?>
                                        </div>
                                        <div class="col">
                                            <?php echo $contactSection["acf_ld_cd_contact_details"];  ?>
                                        </div>
                                        <div class="col">
                                            <?php echo $contactSection["acf_ld_cd_email_details"];  ?>
                                        </div>
                                        <div class="col">
                                            <?php echo $contactSection["acf_ld_cd_store_hours"];  ?>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div><!-- /.wrap -->
                        </div><!-- /.location-contdetail -->
                    </div><!--/.aboutsectionmain-->   
                </div><!--/.locationi-detail-->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main-->
<?php
get_footer();