<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/eventsbg.jpg");

?>
<div class="banner" style="background-image:url(<?php echo $PageImage;  ?>);">
    <div class="main-title"><h1 class="banner-title">Beer Charity Fundraiser<br><p><?php  echo get_the_date( ' j F Y' ); ?><span>|</span>Beerworld</p></h1></div>
</div><!--/.banner-->
<div id="main">
    <div id="primary" class="content-area one-column">
        <div id="content">
        	<div class="events-detailarea">
        		<div class="edetail-boxleft">
        			<div class="calendararea">
    					<h2 class="calendartitle">Event Calendar</h2>
    					<div class="calendarbox">
    						<div id="datepicker9"></div>
    					</div><!-- calendarbox -->
    					<div class="calendarboxtext">
    						<h2 class="calendartitle">Recent Events</h2>
    						<div class="recenteventarea">
    						<?php

	                        $Args   =   array(
	                                            'post_type'         =>  'events',
	                                            'post_status'       =>  'publish',
	                                            'posts_per_page'    =>  5,
	                                            'order'             =>  'DESC',
	                                            'post__not_in'		=>	array(get_the_ID()),
	                        );

	                        $Result =   new WP_Query($Args);

	                        if( $Result->have_posts() ):
	                            while( $Result->have_posts() ): $Result->the_post();
	                            	?>
	                            		<a href="<?php the_permalink();  ?>">
			    							<div class="recenteventbox">
			    								<figure class="bgimg">
			                                        <img src="<?php echo WPCustomClass::CustomFeatureImage(get_the_ID(),"thumbnail","eventsimg6.jpg");  ?>" alt="">
			                                    </figure>
			                                    <div class="recenteventinner">
			                                    	<span class="recevedate"><?php  echo get_the_date( ' j F Y' ); ?></span>
			                                    	<h3><?php the_title();  ?></h3>
			                                    	<span class="recevehos"><?php the_field("acf_events_hosted_by");  ?></span>
			                                    </div><!-- recenteventbox -->
			    							</div><!-- recenteventbox -->
			    						</a>
		    						<?php
		    					endwhile;
		    				endif;
		    				wp_reset_postdata();
		    				?>    							
    						</div><!-- recentevent -->
    					</div><!-- calendarboxtext -->
        			</div><!-- calendararea -->
        		</div><!-- edetail-boxleft -->
        		<div class="edetail-boxright">
    				<div class="edboxrightinner">
    					<?php the_content(); ?>
    				</div><!-- edboxrightinner -->
    				 <div class="galleryarea">
		            	<?php 
		            	if( !empty(get_field("acf_events_event_gallery")) )
		            	{
		            		?>
		            	<h2>Event Gallery</h2>
    				 	<div class="demo-gallery">
				            <ul id="lightgallery" class="list-unstyled row">
		            		<?php
		            		$Gallery = get_field("acf_events_event_gallery");
		            	
			            	foreach($Gallery as $GalleryList)
			            	{
			            	?>				            		
				                <li data-responsive="<?php echo $GalleryList["sizes"]["large"];  ?>" data-src="<?php echo $GalleryList["sizes"]["large"];  ?>">
				                  <a href="">
				                    <img class="img-responsive" src="<?php echo $GalleryList["sizes"]["medium"];  ?>">
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
			            <?php
		            	}				           	
		                ?>				            
    				</div><!-- galleryarea -->
        		</div><!-- edetail-boxright -->
        	</div><!-- events-detailarea -->
        </div><!--/#content-->
    </div><!--/#primary-->
</div><!--/#main-->

<?php
get_footer();
