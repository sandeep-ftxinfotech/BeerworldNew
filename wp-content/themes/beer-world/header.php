<?php
$splash_name = "splash";
$splash_value = "yes";
setcookie($splash_name, $splash_value, time() + (86400 * 1), "/"); 
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:400,500,700,800,900&display=swap" rel="stylesheet">

	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156731209-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());
 gtag('config', 'UA-156731209-1');
</script>
	

<?php wp_head(); ?>
</head>

		<?php  if( is_front_page() ){ ?>
		<body <?php body_class(); ?>>
		<?php } else { ?>
	<body <?php body_class(); ?>  id="innerPages">
		
	<?php } ?>

<?php
$SiteLogo = WPCustomClass::GetAcfImage(get_field("acf_opt_ws_site_logo","option"),"logo.png");
if( is_front_page() )
{    
    if( !isset( $_COOKIE[$splash_name] ))
    {

    $WSBackgroundImage = WPCustomClass::GetAcfImage(get_field("acf_opt_ws_background_image","option"),"bgi/mainbannerbg.jpg");
    ?>
        <div id="welcomescreen">
            <div class="welcomescreen-wrap">
                <div class="welcomescreen-inner">
                    <figure>
                        <img src="<?php echo $SiteLogo["image_url"]; ?>" alt="<?php echo $SiteLogo["image_alt"]; ?>" title="<?php echo $SiteLogo["image_title"]; ?>">
                    </figure>   
                    <?php the_field("acf_opt_ws_section_content","option");  ?>
                    <div class="welcombtn">
                        <a href="javasctipt:void(0)" class="button btn-lg yesbtn">Yes</a>
                        <a href="javasctipt:void(0)" class="button btn-lg btn-outline nobtn">No</a>
                    </div><!-- welcombtn -->
                    <span class="cferrormsg"><?php the_field("acf_opt_ws_not_eligible_message","option");  ?></span>
                </div><!-- welcomescreen-inner -->
            </div><!--/.welcomescreen-wrap-->
        </div><!--/#welcomescreen-->
    <?php
    }
    else
    {
        
    }
}

?>

	<div id="overlayer"></div>
	<span class="loader">
	<span class="loader-inner"></span>
	</span>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
				<div class="links">
					<?php dynamic_sidebar('Right Header'); ?>
				</div>
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img class="homeLogo"  src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><img class="homeLogo"  src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
                    <?php endif; ?>

                </div>
				<div id="navigation">
					<div class="linking">
						<?php dynamic_sidebar('Social Media'); ?>
					</div>
					<button id="sideMenu" class="navbar-toggler" type="button">
						<span class="navbar-toggler-icon" id="sideMenuClosed"></span>
					</button>
				</div>
				<div id="sideMenuContainer">
					<a href="#0" class="cross">Cross</a>
					<a class="menuLogo" href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img class="homeLogo"  src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
					
					<?php
						wp_nav_menu(array(
						'theme_location'    => 'primary',
						'container'       => 'div',
						'container_id'    => 'main-menu',
						'container_class' => 'nav-bar',
						'menu_id'         => false,
						'menu_class'      => 'navbar-nav',
						'depth'           => 3,
						//'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
						//'walker'          => new wp_bootstrap_navwalker()
						));
					?>
					<!--div id="search">
						<?php get_search_form(); ?>
					</div-->
					<div id="menu-widget">
						<?php dynamic_sidebar('Header'); ?>
					</div>
				</div>
	
            </nav>
        </div>
	</header><!-- #masthead -->
	<?php  if( is_front_page() ){ ?>
	
	<?php } else { ?>
	<div id="content" class="site-content">
		
	<?php } ?>


                <?php endif; ?>