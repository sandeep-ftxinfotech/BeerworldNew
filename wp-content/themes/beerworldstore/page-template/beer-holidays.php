<?php

/*

Template name: Beer Holidays Template 
*/

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/innerbanner.jpg");

?>
    <div class="banner" style="background-image:url(<?php echo $PageImage;  ?>);">
        <div class="main-title"><h1 class="banner-title"><?php the_title();  ?></h1></div>
	</div><!--/.banner-->
    <div id="main">
        <div id="primary" class="beertrend-main one-column">
            <div id="content">
                <div class="beerholidaysaerea">
                    <div class="beerholidaycalender">
                        <div class="tab-data">
                            <ul class="tabnav cf">
                                <li <?php if( strtolower(strtolower(date("F"))) == 'janyuary' ) { echo "class='active'"; } ?>><a href="#" data-rel="january">January</a></li>
                                <li <?php if( strtolower(date("F")) == 'february' ) { echo "class='active'"; } ?>><a href="#" data-rel="february">February</a></li>
                                <li <?php if( strtolower(date("F")) == 'march' ) { echo "class='active'"; } ?>><a href="#" data-rel="march">March</a></li>
                                <li <?php if( strtolower(date("F")) == 'april' ) { echo "class='active'"; } ?>><a href="#" data-rel="april">April</a></li>
                                <li <?php if( strtolower(date("F")) == 'may' ) { echo "class='active'"; } ?>><a href="#" data-rel="may">May</a></li>
                                <li <?php if( strtolower(date("F")) == 'june' ) { echo "class='active'"; } ?>><a href="#" data-rel="june">June</a></li>
                                <li <?php if( strtolower(date("F")) == 'july' ) { echo "class='active'"; } ?>><a href="#" data-rel="july">July</a></li>
                                <li <?php if( strtolower(date("F")) == 'august' ) { echo "class='active'"; } ?>><a href="#" data-rel="august">August</a></li>
                                <li <?php if( strtolower(date("F")) == 'september' ) { echo "class='active'"; } ?>><a href="#" data-rel="september">September</a></li>
                                <li <?php if( strtolower(date("F")) == 'october' ) { echo "class='active'"; } ?>><a href="#" data-rel="october">October</a></li>
                                <li <?php if( strtolower(date("F")) == 'november' ) { echo "class='active'"; } ?>><a href="#" data-rel="november">November</a></li>
                                <li <?php if( strtolower(date("F")) == 'december' ) { echo "class='active'"; } ?>><a href="#" data-rel="december">December</a></li>
                            </ul><!--/.tabnav -->
                            <div class="tab-container">
                                <?php
                                    if( have_rows('acf_rptr_holiday_list_details') ):
                                        while ( have_rows('acf_rptr_holiday_list_details') ) : the_row();
                                            ?>
                                            <div class="tabcontent" id="<?php echo strtolower(get_sub_field('acf_bh_month_name')); ?>">
                                                <div class="beerholidaycalenderdate">
                                                    <ul>
                                                        <?php
                                                        if( have_rows('acf_bh_holiday_name_with_details') ):
                                                            while ( have_rows('acf_bh_holiday_name_with_details') ) : the_row();
                                                                echo '<li>
                                                                    <div class="beercalendatebox">
                                                                        '.get_sub_field("acf_bh_holiday_details", false, false).'
                                                                    </div><!-- /.beercalendatebox -->
                                                                </li>';                                
                                                            endwhile;
                                                        endif;
                                                        ?>                               
                                                    </ul>
                                                </div><!-- /.beerholidaycalenderdate -->
                                            </div><!--/.tabcontent-->
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                            </div><!--/.tab-container -->
                        </div><!--/.tab-data-->
                    </div><!-- /.beerholidaycalender -->
                    <div class="beerholidaybg">
                        <figure class="bgimg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/beerholidaybg.jpg">
                        </figure>
                    </div><!-- /.beerholidaybg -->
                </div><!-- /.beerholidaysaerea -->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main-->
<?php
get_footer();
?>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        var months    = ['january','february','march','april','may','june','july','august','september','october','november','december'];
        var now       = new Date();
        var thisMonth = months[now.getMonth()];
        jQuery(".tab-container #"+ thisMonth).show();
        jQuery(".tab-container #"+ thisMonth).addClass('visible');
        
    });
</script>