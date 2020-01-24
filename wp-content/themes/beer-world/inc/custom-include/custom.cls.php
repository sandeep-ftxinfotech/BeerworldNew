<?php

if( ! defined( 'ABSPATH' ) ) exit; 

class WPCustomClass
{

	public function __construct()
	{
		add_action( 'wp_enqueue_scripts', 'WPCustomClass::WPCustomEnqueueScripts' );
		/*add_action( 'admin_enqueue_scripts', 'WPCustomClass::WPCustomAdminEnqueueScripts' );*/
		if( isset($_GET['page']) && ( $_GET["page"] == 'keg_form' || $_GET["page"] == 'wedding_form' || $_GET["page"] == 'online_job_application' || $_GET["page"] == 'offline_job_application' ) )
		{
			//add_action( 'admin_enqueue_scripts', 'WPCustomClass::WPCustomAdminEnqueueScripts' );
		}
	}

	/* Function For Include Custom Styles and Scripts Start */
	public function WPCustomEnqueueScripts()
	{
		$src = get_template_directory_uri()."/";
		$ver = rand(1,1).".".rand(0,9);
		
		//Custom Styles Registerd
		wp_enqueue_style( 'slick-style', $src.'css/slick.css', '', $ver, 'all' );
		wp_enqueue_style( 'select2-style', $src.'css/select2.min.css', '', $ver, 'all' );
		wp_enqueue_style( 'custom-style', $src.'css/style.css', '', $ver, 'all' );
		wp_enqueue_style( 'lightgallery-style', $src.'css/lightgallery.min.css', '', $ver, 'all' );
		wp_enqueue_style( 'lightslider-style', $src.'css/lightslider.min.css', '', $ver, 'all' );
		wp_enqueue_style( 'responsive-style', $src.'css/responsive.css', '', $ver, 'all' );		

		//Custom Scripts Registerd
		wp_enqueue_script( 'modernizr-script', $src.'js/vendor/modernizr.min.js', array( 'jquery' ), $ver, false );	
		wp_enqueue_script( 'lightgallery-script', $src.'js/vendor/lightgallery-all.min.js', array( 'jquery' ), $ver, true );
		wp_enqueue_script( 'lightslider-script', $src.'js/vendor/lightslider.min.js', array( 'jquery' ), $ver, true );
		/*wp_enqueue_script( 'mousewheel-script', $src.'js/vendor/jquery.mousewheel-all.min.js', array( 'jquery' ), $ver, true );*/
		wp_enqueue_script( 'slick-script', $src.'js/vendor/slick.js', array( 'jquery' ), $ver, true );
		wp_enqueue_script( 'matchHeight-script', $src.'js/vendor/jquery.matchHeight-min.js', array( 'jquery' ), $ver, true );
		wp_enqueue_script( 'jqueryui-script', $src.'js/vendor/jquery-ui.min.js', array( 'jquery' ), $ver, true );
		wp_enqueue_script( 'customfileinput-script', $src.'js/vendor/customfileinput.js', array( 'jquery' ), $ver, true );
		wp_enqueue_script( 'select2-script', $src.'js/vendor/select2.full.min.js', array( 'jquery' ), $ver, true );
		wp_enqueue_script( 'pace-script', $src.'js/vendor/pace.min.js', array( 'jquery' ), $ver, true );
		wp_enqueue_script( 'general-script', $src.'js/general.js', array( 'jquery' ), $ver, true );
		wp_enqueue_script( 'ajax-script', $src.'inc/custom-include/custom-ajax.js', array( 'jquery' ), $ver, true );
	}
	/* Function For Include Custom Styles and Scripts End */

	/* Function For Include Custom Styles and Scripts for Admin Start */
	public function WPCustomAdminEnqueueScripts($hook)
	{
		//echo $hook; exit;
		/*if( "toplevel_page_keg_form" != $hook && "keg-form_page_wedding_form" != $hook  )
		{
			return;
		}*/

		$src = get_template_directory_uri()."/";
		$ver = rand(1,1).".".rand(0,9);
		
		//Custom Styles Registerd
		wp_enqueue_style( 'admin-bootstrap-style', $src.'inc/admin-enque/bootstrap.min.css', '', $ver, 'all' );

		wp_enqueue_script( 'admin-bootstrap-script', $src.'inc/admin-enque/bootstrap.min.js', array( 'jquery' ), $ver, true );
	}
	/* Function For Include Custom Styles and Scripts for Admin End */

	/* Function For Include Option Page in Admin Panel Start */
	public function WPOptionPage()
	{
		if( function_exists( 'acf_add_options_page' ) )
		 {
			 acf_add_options_page(array(
				'page_title' 	=>	'Theme Options',
				'menu_title' 	=> 	'Theme Options',
				'menu_slug' 	=> 	'theme-options',
				'capability'	=>	'edit_posts',
				'parent_slug'	=>	'',
				'position'		=>	20,
				'icon_url'		=>	false,
				'redirect'		=>	false
			));
		 }
	}
	/* Function For Include Option Page in Admin Panel End */

	/* Function for show Wordpress Navigation Menu Start */
	public function TopMenu( $MenuName = "", $MenuClass = "")
	{
		if( $MenuName != "" )
		{
			wp_nav_menu( array(
				'menu'            => $MenuName,
				'container'       => false,
				'container_class' => false,
				'container_id'    => false,
				'menu_class'      => $MenuClass,
				'menu_id'         => false,
	      ) );
		}
	}
	/* Function for show Wordpress Navigation Menu End */

	/* Function for Get Flexible Image Start */

	public function GetAcfImage( $FieldName = "", $DefaultImage = "" )
	{
		$ImgFlb	=	"";

		if( !empty( $FieldName ) )
		{
			$ImgArry	=	"";
			$ImgArry	=	$FieldName;
			$ImgFlb		=	array(
				'image_url'		=>	$ImgArry["url"],
				'image_alt'		=>	$ImgArry["alt"],
				'image_title'	=>	$ImgArry["title"],
			);
		}
		else
		{
			$ImgFlb		=	array(
				'image_url'		=>	get_template_directory_uri()."/images/".$DefaultImage,
				'image_alt'		=>	"",
				'image_title'	=>	"",
			);
		}
		return $ImgFlb;
	}

	/* Function for Get Flexible Image End */

	/* Function for Get Social Url Start */
	public function GetSocialUrl( $ClassName = "", $TitleName = "", $Url = "")
	{
		if(  $ClassName != "" && $TitleName != "" && $Url != "" )
		{
			echo '<li class="'.$ClassName.'"><a title="'.$TitleName.'" href="'.$Url.'">'.$TitleName.'</a></li>';
		}
	}
	/* Function for Get Social Url End */

	/**/
	function CustomFeatureImage($PostId, $Size, $DefaultImage = "" )
	{
		if( !empty($PostId) )		
		{
			$img_path   =   "";
			if( !empty( get_the_post_thumbnail_url($PostId) ) )
			{
				$img_path   =   get_the_post_thumbnail_url($PostId, $Size);
			}
			else
			{
				$img_path   =   get_template_directory_uri()."/images/".$DefaultImage;
			}
			return $img_path;
		}
	}
	/**/

	/* Custom function for get wp query result start */
	function wpGetCustomPostType($posttype = "", $page_id = "", $pot_parent = "", $post_per_page = "", $order = "", $order_by = "")
 	{
 		$args 	= 	array(
			'post_type' 	=> 		$posttype,
			'post_status'	=>		'publish',
			'page_id'		=>		$page_id,
			'post_parent'	=>		$pot_parent,
			'posts_per_page'=>		$post_per_page,
			'order'			=>		$order, 
			'order_by'		=>		$order_by, 
		);
		$result	=	new WP_Query($args);

		return $result;
 	}
 	/* Custom function for get wp query result end */
}