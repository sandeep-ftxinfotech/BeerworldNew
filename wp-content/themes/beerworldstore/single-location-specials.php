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

get_header(); ?>

<div class="banner" style="background-image:url(<?php echo WPCustomClass::CustomFeatureImage(get_the_ID(), "large", "bgi/innerbannereventd.jpg");  ?>">
    <div class="main-title"><h1 class="banner-title"><?php the_title(); ?></h1></div>
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

    						$term_list = wp_get_post_terms( get_the_ID(), 'location-special-category' );

	                        $Args   =   array(
                                'post_type'      =>  'location-specials',
                                'post_status'    =>  'publish',
                                'posts_per_page' =>  -1,
                                'order'          =>  'DESC',
                                'tax_query'      =>  array(
	                                                        array(
	                                                            'taxonomy' => 'location-special-category',
	                                                            'field'    => 'slug',
	                                                            'terms'    => $term_list[0]->slug,
	                                                        ),
                                    				),
	                        );

	                        $Result =   new WP_Query($Args);

	                        if( $Result->have_posts() ):
	                            while( $Result->have_posts() ): $Result->the_post();
	                            	$getTerms = get_the_terms( get_the_ID(), 'location-special-category' );
	                                ?>
	                                	<a href="<?php the_permalink(); ?>">
			    							<div class="recenteventbox">
			    								<figure class="bgimg">
			                                        <img src="<?php echo WPCustomClass::CustomFeatureImage(get_the_ID(), "thumbnail", "eventsimg2.jpg");  ?>" alt="">
			                                    </figure>
			                                    <div class="recenteventinner">
			                                    	<span class="recevedate"><?php echo get_the_date( 'j F Y' );  ?></span>
			                                    	<h3><?php the_title(); ?></h3>
			                                    	<span class="recevehos"><?php echo $getTerms[0]->name; ?></span>
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
    				<div class="eventsarea">
	            		<div class="wrap">
	            			<div class="cols">
	                        <?php
	                        if( have_posts() ):
	                            while( have_posts() ): the_post();
	                                ?>
	                                <div class="col">
	                                    <div class="edboxrightinner">
			        					<?php the_content(); ?>
			        				</div><!-- edboxrightinner -->
	                                </div>
	                                <?php
	                            endwhile;
	                        endif;
	                        ?>
	            			</div>
	            		</div><!-- wrap -->
	            	</div><!-- eventsarea -->
        		</div><!-- edetail-boxright -->
        	</div><!-- events-detailarea -->
        </div><!--/#content-->
    </div><!--/#primary-->
</div><!--/#main-->

<?php
get_footer();
