<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

	<footer id="footer">
    	<div class="footertop">
        	<div class="footertopwrap">
                <?php
                    $FooterLogo = WPCustomClass::GetAcfImage(get_field("acf_opt_ws_footer_logo","option"),"footerlogo.png");

                    ?>
            	<figure class="flogo"><img src="<?php echo $FooterLogo['image_url']; ?>" alt="<?php echo $FooterLogo['image_alt']; ?>" title="<?php echo $FooterLogo['image_title']; ?>"></figure>
                <div class="newslatter">
                	<h5>Get Updated</h5>
                    <div class="form-group">
                        <?php /*echo do_shortcode( '[email-subscribers namefield="NO" desc="" group="Public"]' );*/

                            echo do_shortcode( '[mc4wp_form id="303"]' );  ?>
                        <!-- <input type="text" placeholder="Enter Your Mail Adress" class="textbox">
                        <input type="submit" class="button btn-lg btn-outline" value="Subscribe"> -->
                    </div><!--/.form-group-->
                </div><!--/.newslatter-->
            </div><!--/.footertopwrap-->
        </div><!--/.footertop-->
        <div class="footerbottom">
        	<div class="wrap">
            	<p class="copyright">&copy; <?php echo date("Y");  ?> Beer World. All rights reserved.</p>
                <?php WPCustomClass::TopMenu("footer-links","flinks");  ?>
            </div><!--/.wrap-->
        </div><!--/.footerbottom-->
    </footer>
</div><!--/#wrapper-->
<nav id="mainmenu">
	<div class="mainmenutop">
        <?php WPCustomClass::TopMenu("top-menu","");  ?>
        <div class="loactionswrapper">
        	<div class="loactionssliderwrap">
            	<div class="loactionsslider">
                <?php
                /*wp_get_custom_postype_content($posttype = "", $page_id = "", $page_parent = "", $post_per_page = "", $order = "", $order_by = "")*/
                $agrsResult = WPCustomClass::wpGetCustomPostType("page", "", 55, 9, "ASC", "");
                $dataValue = array("Kingstone","Catskill","Montcello","Monroe","Chester","Liberty","Wappingers Falls","Newburgh","Horseheads");
                $itemId = 0;
                if( $agrsResult->have_posts() ):
                    while( $agrsResult->have_posts() ): $agrsResult->the_post();
                        ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="item" data-name="<?php echo $dataValue[$itemId]; ?>" id="item_<?php echo $itemId; ?>">
                                    <div class="locationboxmenu">
                                        <figure class="bgimg"><img src="<?php echo WPCustomClass::CustomFeatureImage(get_the_ID(),"large","location01.jpg"); ?>" alt=""></figure>
                                        <div class="locationinformation">
                                            <span class="locationname"><?php the_title(); ?></span><!--/.locationname-->
                                            <!-- <p>1221 Ulster Ave Kingstone, New York 12401 <span class="number">(845) 336-3300</span></p> -->
                                            <?php  the_content(); ?>
                                        </div><!--/.locationinformation-->
                                    </div><!--/.locationboxmenu-->
                                </div><!--/.item-->
                            </a>
                        <?php
                        $itemId++;
                    endwhile;
                endif;
                wp_reset_postdata();
                    ?>
                </div><!--/.loactionsslider-->
            </div><!--/.loactionssliderwrap-->
        </div><!--/.loactionswrapper-->
        <div class="mainmenubottom">
            <div class="copyrightarea">
                <p>&copy; <?php echo date("Y");  ?> Beer World. All rights reserved.</p>
            </div><!--/.copyrightarea-->
            <div class="mainmenubottomright">
                <?php WPCustomClass::TopMenu("menu-links","");  ?>
            </div><!--/.mainmenubottomright-->
        </div><!--mainmenubottom-->
    </div><!--/.mainmenutop-->
</nav><!--/#mainmenu-->

<div class="page-loader loading">
  <div class="logo-holder"><img src="<?php echo get_template_directory_uri(); ?>/images/loaderbw.png" alt=""><span class="fill-logo" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/loadercolor.png);"></span></div>
</div>

<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript">
	setTimeout(function(){
jQuery(".loactionsslider .custom-dots").mCustomScrollbar({
		axis:"x",
		theme:"dark-thin",
		autoExpandScrollbar:true,
		advanced:{autoExpandHorizontalScroll:true}
	});
}, 5000);
	
	
	jQuery(document).ready(function($) 
						   {
		jQuery(".es_caption").hide();
		jQuery(".mc4wp-form-fields label").hide();    
	});
	

	var i = 0;
	jQuery('.locationboxwrapper').find('.outerLocation').each(function(){
		if(i<15){
			i++;
		}
		else{
			i = 1;
		}
		jQuery(this).addClass('box-' + i);
	});
	
</script>
<style type="text/css">
.subscribeinputwrapper input[type="submit"]
{
    top: -13px !important;
}
</style>
<?php wp_footer(); ?>
</body>
</html>
