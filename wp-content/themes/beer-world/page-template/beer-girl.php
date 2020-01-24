<?php

/*

Template name: Beer Girl Template 
*/

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/innerbanner.jpg");

?>

<div id="beer-girl-page">
	

<div id="aboutBanner" class="banner"  style="background-image:url(<?php echo $PageImage;  ?>);">
	<div class="container">

    </div>
</div><!--/.banner-->

<section id="beer-girl" class="mainPage">
    <div class="container-girl">
		<div class="row">
			<div class="col-md-6 col-xs-12 meetContent">
				<h3><?php the_field('beer_girl_title',get_the_ID()); ?></h3>
				<div class="article"><?php the_field('beer_girl_description',get_the_ID()); ?></div>
			</div>
			<div class="col-md-6 col-xs-12 meetImg">
				<div class="figure">
					<?php 
					$image = get_field('beer_girl_image',get_the_ID());
					if( !empty($image) ): ?>
						<img src="<?php echo $image; ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
    </div>
</section>

<section id="beer-video" class="mainPage">
    <div class="row">
        <div class="col-md-7 col-xs-12 beerVideo">
            <div id="video" class="embed-container">
                <?php the_field('video_link'); ?>
				<div class="figure">
					<div id="playIcon"></div>
					<?php 
					$image = get_field('video_image',get_the_ID());
					if( !empty($image) ): ?>
						<img src="<?php echo $image; ?>" />
					<?php endif; ?>
				</div>
            </div>
        </div>
        <div class="col-md-5 col-xs-12 beerVideoContent">
            <h3><?php the_field('l_s_w_h_title',get_the_ID()); ?></h3>
            <div class="article"><?php the_field('l_s_w_h_description',get_the_ID()); ?></div>
            <div class="button"><a href="<?php echo get_field('l_s_w_h_link',get_the_ID()); ?>">View All Videoes</a></div>
        </div>
    </div>
</section>

<section id="gallary" class="mainPage">
    <div class="innerGallery">
        <h3>SEE GALLARY</h3>
        <div class="carousel" data-flickity='{ "groupCells": 3 }'>
            <?php 
            $channels = get_field('gallary');
            if( $channels ): ?>
                
                    <?php foreach( $channels as $image ): ?>
                        <div class="carousel-cell">
                            <div class="figure">
                                <img src="<?php echo $image; ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php
get_footer();
?>
	
</div>
