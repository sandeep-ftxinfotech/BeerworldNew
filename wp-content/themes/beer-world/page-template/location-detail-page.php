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
<div id="innerlocation">

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
	
</div>
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content">
            	<div class="locationi-detail">
                     <div class="aboutsectionmain">
						 <div class="container-location">
						 	 <div class="aboutsectionwrapper" id="innerLocation">
                            <?php
                            if( !empty($aboutSection["acf_ld_section_content_1"]) )
                            {
                            ?>
                                <div class="aboutsectionwrap row">
                                    <div class="aboutsectionwrapimg col-md-6 col-xs-12">
                                        <?php $leftImage = WPCustomClass::GetAcfImage($aboutSection["acf_fs_section_image_1"], "bgi/locationimgleft.jpg");  ?>
                                        <figure class="bgimg"><img src="<?php echo $leftImage["image_url"]; ?>" alt="<?php echo $leftImage["image_alt"]; ?>" title="<?php echo $leftImage["image_title"]; ?>"></figure>
                                    </div><!--/.aboutsectionwrapleft-->
                                    <div class="aboutsectionwrapcontent  col-md-6 col-xs-12">
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
						 </div>
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
                                    'beer-world-kingston'   => 'Kingston',
                                    'liberty-store'    => 'Liberty',
                                    'beer-world-monticello' => 'Monticello',
                                    'chester-store'    => 'Chester',
                                    'monroe-store'     => 'Monroe',
                                    'middletown'       => 'Middletown',
                                    'horsehead'        => 'Horsehead',
                                    'newburgh'          => 'Newburgh',
                                );
                                $apiOnTapArray = array(
                                    'beer-world-catskill'  => '13058',
                                    'beer-world-kingston'  => '13057',
                                    'liberty-store'        => '50993',
                                    'beer-world-monticello'=> '31284',
                                    //'chester-store'   => 'CS',
                                    //'monroe-store'    => 'CS',
                                    'middletown'      =>  '64946',
                                    'horsehead'       =>  '62481',
                                    'newburgh'         =>  '62479',
                                );
                                $apiKegsArray = array(
                                    'beer-world-catskill'  => '13058',
                                    'beer-world-kingston'  => '13057',
                                    'liberty-store'   => '50993',
                                    'beer-world-monticello'=> 'CS',
                                    'chester-store'   => 'Table',
                                    'monroe-store'    => 'Table',
                                    'middletown'      =>  '64946',
                                    'horsehead'       =>  'Table',
                                    'newburgh'         =>  '62479',
                                );

                                $fullWidthClass = "";
                                if(!array_key_exists($post->post_name, $apiOnTapArray) || !array_key_exists($post->post_name, $apiKegsArray)) {
                                    $fullWidthClass = "full-width";
                                }
                            ?>
                            <div class="cols" id="specialcols">
                                <?php if(array_key_exists($post->post_name, $apiOnTapArray)) { ?>
                                    <div class="col <?php echo $fullWidthClass; ?>">
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
                                <?php } ?>
                                <?php if(array_key_exists($post->post_name, $apiKegsArray)) { ?>
                                    <div class="col <?php echo $fullWidthClass; ?>">
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
                                <?php } ?>
                                <!-- <div class="col" id="specialcol">
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
                                </div> -->
                            </div>
                        </div><!--/.on-tap-kingston-->
                        <?php
                        if( !empty( get_field("acf_tcs_sc_section_content") ) )
                        {
                        ?>
                            <div class="orderstypesection">
                                <div class="wrap-location">
                                    <div class="flexwrapper">
                                        <div class="flex50">
                                            <div class="flexwrapper flexwrapperend">
												<div class="flex50 typeinfocontent">
                                                    <?php the_field("acf_tcs_sc_section_content"); ?>                     
                                                </div><!--/.flex50-->
                                                <div class="flex50">
                                                    <?php $sectionImage = WPCustomClass::GetAcfImage(get_field('acf_tcs_si_section_image'), "tobacco-cigarsimg.jpg");  ?>
                                                    <figure class="bgimg"><img src="<?php echo $sectionImage['image_url']; ?>" alt="<?php echo $sectionImage['image_alt']; ?>"></figure>
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
                        <?php $contactSection = get_field("acf_ld_c_contact_section"); ?>
                        <div class="location-contdetail">
                            <div class="container">
                                
                                    <!--h2>Contact Us</h2-->
                                    <div class="cols cols4">
                                        
                                        <?php if($contactSection["acf_ld_cd_location"] != ""){ ?>
                                            <div class="col">
                                                <div class="contactinfobox">
    												<?php echo $contactSection["acf_ld_cd_location"];  ?>
    											</div>
                                            </div>
                                        <?php } ?>

                                        <?php if($contactSection["acf_ld_cd_contact_details"] != ""){ ?>
                                            <div class="col">
                                                <div class="contactinfobox">
                                                    <?php echo $contactSection["acf_ld_cd_contact_details"];  ?>
                                                </div>
                                            </div>
                                        <?php } ?>

                                        <?php if($contactSection["acf_ld_cd_email_details"] != ""){ ?>
                                            <div class="col">
                                                <div class="contactinfobox">
                                                    <?php echo $contactSection["acf_ld_cd_email_details"];  ?>
                                                </div>
                                            </div>
                                        <?php } ?>


                                        <?php if($contactSection["acf_ld_cd_store_hours"] != ""){ ?>
                                            <div class="col">
                                                <div class="contactinfobox">
                                                    <?php echo $contactSection["acf_ld_cd_store_hours"];  ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                
                            </div><!-- /.wrap -->
                        </div><!-- /.location-contdetail -->
                            
                    </div><!--/.aboutsectionmain-->   
                </div><!--/.locationi-detail-->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main-->
<?php
get_footer();