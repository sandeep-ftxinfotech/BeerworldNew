<?php

/*

Template name: Kegs Template 
*/

get_header();
$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/locationdetail-banner.jpg");

$aboutSection = get_field("acf_ld_about_section");
?>
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
<div id="main">
    <div id="primary" class="ontap-area one-column">
        <div id="content">
        	<!-- <div class="kingstone-area">
                <div class="wrap">
                    <div class="kingstone-topsection">
                        <div class="kingstone-topsectionleft">
                            <figure class="bgimg">
                                <img src="<?php echo get_template_directory_uri();  ?>/images/kingstonsecimg.jpg" alt="">
                            </figure>
                        </div>
                        <div class="kingstone-topsectionright">
                            <h3><span><?php echo $_REQUEST["location"];  ?> beer world</span>Kegs</h3>
                            <p class="kin-topsectext">We always carry Bud, Bud Light, Coors Light, Busch and most domestic beers in 1/2 and 1/4 kegs, please call for prices.</p>                            
                        </div>
                    </div>
                </div>
            </div> -->
            <?php
            if( isset($_REQUEST["api"]) && ( is_numeric($_REQUEST["api"]) ) )
            {
                ?>
                    <div id="tap-king">
                        <div id="menu_widget">
                            <div id="menu_widget_<?php echo $_REQUEST["api"];  ?>">
                              <a href="https://www.beermenus.com/?ref=widget">Powered by BeerMenus</a>
                            </div><!-- #menu_widget_13057 -->
                            <p></p>
                        </div><!-- #menu_widget -->
                    </div><!-- #tap-king -->
                    <p>
                        <script src="https://www.beermenus.com/menu_widgets/<?php echo $_REQUEST["api"];  ?>?no_links=1&amp;beer_descriptions=1" type="text/javascript" charset="utf-8"></script>
                    </p> 
                <?php
            }
            elseif( isset($_REQUEST["api"]) && ( !is_numeric($_REQUEST["api"]) ) && $_REQUEST["location"] == "Chester" )
            {
                if( $_REQUEST["api"] == "Table"  )
                {
                    echo do_shortcode( '[table id=1 /]' );
                }
                else
                {
                     echo '<div class="secpadding">
                                <div><h2>Coming Soon</h2></div>
                          </div>';
                }
            }
            elseif( isset($_REQUEST["api"]) && ( !is_numeric($_REQUEST["api"]) ) && $_REQUEST["location"] == "Monticello" )
            {
                if( $_REQUEST["api"] == "Table"  )
                {
                    echo do_shortcode( '[table id=1 /]' );
                }
                else
                {
                     echo '<div class="secpadding">
                                <div><h2>Coming Soon</h2></div>
                          </div>';
                }
            }
            elseif( isset($_REQUEST["api"]) && ( !is_numeric($_REQUEST["api"]) ) && $_REQUEST["location"] == "Monroe" )
            {
                if( $_REQUEST["api"] == "Table"  )
                {
                    echo do_shortcode( '[table id=2 /]' );
                }
                else
                {
                     echo '<div class="secpadding">
                                <div><h2>Coming Soon</h2></div>
                          </div>';
                }
            }
            elseif( isset($_REQUEST["api"]) && ( !is_numeric($_REQUEST["api"]) ) && $_REQUEST["location"] == "Horsehead" )
            {
                if( $_REQUEST["api"] == "Table"  )
                {
                    echo do_shortcode( '[table id=1 /]' );
                }
                else
                {
                     echo '<div class="secpadding">
                                <div><h2>Coming Soon</h2></div>
                          </div>';
                }
            }
            elseif( isset($_REQUEST["api"]) && ( !is_numeric($_REQUEST["api"]) ) && $_REQUEST["location"] == "Newburg" )
            {
                if( $_REQUEST["api"] == "Table"  )
                {
                    echo do_shortcode( '[table id=1 /]' );
                }
                else
                {
                     echo '<div class="secpadding">
                                <div><h2>Coming Soon</h2></div>
                          </div>';
                }
            }
            ?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main -->
<?php
get_footer();
?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        jQuery("#growlers").hide();    
    });
</script>