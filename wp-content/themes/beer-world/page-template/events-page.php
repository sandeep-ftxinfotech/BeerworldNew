<?php

/*

Template name: Events Template 
*/

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/eventsbg.jpg");

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
        <div id="primary" class="content-area one-column">
            <div id="content">
            	<div class="eventsarea">
            		<div class="wrap">
            			<?php
                        $Args   =   array(
                                            'post_type'         =>  'events',
                                            'post_status'       =>  'publish',
                                            'posts_per_page'    =>  6,
                                            'order'             =>  'DESC',
                        );

                        $Result =   new WP_Query($Args);

                        if( $Result->have_posts() ):
						?>
						<div class="cols cols3">
						<?php
                            while( $Result->have_posts() ): $Result->the_post();
                                ?>
                                <div class="col">
                                    <a href="<?php the_permalink();  ?>" class="eventsbox">
                                        <figure class="bgimg">
											<?php
											$feat_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
											$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array('500','500') );?>

											<img id="<?php echo $post->post_name;?>" src="<?php echo $src[0];?>" alt="<?php echo $feat_image;?>" class="news-thumb" />

                                        </figure>
                                     	<div id="eventPart">
											<div class="eventdate"><?php echo get_the_date( 'j' );  ?> <?php echo get_the_date( 'F Y' );  ?></div>
											  <div class="eventsboxtext">
												<h3><?php the_title();  ?></h3>
												<!--span class="hostedby"><?php //the_field("acf_events_hosted_by"); ?></span-->
												<span class="eventarrow"></span>
												 <span class="location"><?php the_field("acf_events_location"); ?></span>
											</div><!-- eventsboxtext -->
										</div>
                                    </a><!-- eventsbox -->
                                </div>
                                <?php
                            endwhile;
							?>
						</div>
            			<div class="ac-btn">
							<span><input type="button" class="button btn-lg btn-outline" id="load_more" value="Load More"></span>
						</div><!-- ac-btn -->
						<?php
						else:
						echo "<h2 style='text-align:center;'>No Events available</h2>";
                        endif;
                        wp_reset_postdata();
                        ?>
            		</div><!-- wrap -->
            	</div><!-- eventsarea -->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main-->
<?php
get_footer();
?>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        var page = 2;
        jQuery("body").on('click', '#load_more', function(event) {
            event.preventDefault();
               
            jQuery.ajax({
                url : '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                type : 'post',
                data : {
                    action : 'act_load_more',
                    page : page,
                },
                beforeSend:function()
                {
                    jQuery('#load_more').val('Loading...');
                },
                complete:function() 
                {
                    jQuery('#load_more').val('Load More');
                },
                success : function( response ) {
                    jQuery(".cols3").append(response);
                }
            });
            //jQuery(this).hide();
            page++;
        });
    });
</script>