<?php

/*

Template name: Wedding Order Form Template 
*/

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/order-bannerbg.jpg");

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
        <div id="primary" class="content-area one-column mainPage leafBG">
            <div id="content">
            	<div class="ac-formmain orderformarea">
            		<div class="ac-formbottom">
            			<div class="ac-formbottomarea">
            				<div class="container">
            				<h3 class="ac-forminfotitle">Wedding Order Form</h3>
            					<form method="post" id="weddingform">
		            				<fieldset>
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <label>Customer Name :</label>
                                                <input type="text" class="textbox validate" name="customername">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Phone Number : </label>
                                                <input type="text" class="textbox validate" name="pnonenumber">
                                            </div><!-- form-group -->
                                           
		            					</div><!-- flex-wrapper-three -->
                                        <div class="ac-formblock flex-wrapper-three">
											 <div class="form-group">
                                                <label>Email Address :</label>
                                                <input type="email" id="emailaddress" name="emailaddress" class="validate">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Address Line 1 :</label>
                                                <input type="text" class="textbox validate" name="addressline1">
                                            </div><!-- form-group -->
                                            
                                            
                                        </div><!-- flex-wrapper-three -->
                                        <div class="ac-formblock flex-wrapper-three">
											<div class="form-group">
                                                <label>Address Line 2: </label>
                                                <input type="text" class="textbox validate" name="addressline2">
                                            </div><!-- form-group -->
											<div class="form-group">
                                                <label>Event Date :</label>
                                                <input type="text" id="datepicker10" readonly="" name="eventdate" class="validate">
                                                <span class="datepik "><span>
                                            </div><!-- form-group -->
                                           
                                        </div><!-- flex-wrapper-three -->
										<div class="ac-formblock flex-wrapper-three">
											
                                            <div class="form-group">
                                                <label>Name/Party :</label>
                                                <input type="text" class="textbox validate" name="nameparty">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Type of Event : </label>
                                                <input type="text" class="textbox validate" name="typeofevent">
                                            </div><!-- form-group -->
                                        </div><!-- flex-wrapper-three -->
										<div class="ac-formblock flex-wrapper-three">
                                            <div class="form-group">
                                                <label>Event Location :</label>
                                                <input type="text" id="eventlocation" name="eventlocation" class="validate">
                                            </div><!-- form-group -->
                                        </div><!-- flex-wrapper-three -->
		            					<p class="ac-forminfosubtitle">Beer Request</p>
                                        <div id="beerGroup">
    		            					<div class="ac-formblock flex-wrapper-tow">
    		            						<div class="form-group">
                                                    <label>Beer Name 1 :</label>
                                                    <input type="text" class="textbox validate" name="beername[]">
                                                </div><!-- form-group -->
                                                <div class="form-group">
                                                    <div class="field-box">
                                                        <div class="custom-select custom-selects">
                                                            <label>Select Container Type 1 :</label>
                                                            <select name="selectcontainertype[]" class="validate select2">
                                                            	<option value="">Select Container Type 1</option>
                                                                <option value="Can">Can</option>
                                                                <option value="Bottle">Bottle</option>
                                                                <option value="Keg">Keg</option>
                                                            </select>
                                                        </div><!--/.custom-select-->	
                                                    </div><!--/.field-box-->	
                                                </div><!-- form-group -->
    		            					</div><!-- flex-wrapper-three -->
    		            					<div class="ac-formblock flex-wrapper-tow">
                                                <div class="form-group">
                                                    <label>Beer Name 2 :</label>
                                                    <input type="text" class="textbox validate" name="beername[]">
                                                </div><!-- form-group -->
                                                <div class="form-group">
                                                    <div class="field-box">
                                                        <div class="custom-select custom-selects">
                                                            <label>Select Container Type 2 :</label>
                                                            <select name="selectcontainertype[]" class="validate select2">
                                                                <option value="">Select Container Type 2</option>
                                                                <option value="Can">Can</option>
                                                                <option value="Bottle">Bottle</option>
                                                                <option value="Keg">Keg</option>
                                                            </select>
                                                        </div><!--/.custom-select-->    
                                                    </div><!--/.field-box-->    
                                                </div><!-- form-group -->
                                            </div><!-- flex-wrapper-three -->
                                            <div class="ac-formblock flex-wrapper-tow">
                                                <div class="form-group">
                                                    <label>Beer Name 3 :</label>
                                                    <input type="text" class="textbox validate" name="beername[]">
                                                </div><!-- form-group -->
                                                <div class="form-group">
                                                    <div class="field-box">
                                                        <div class="custom-select custom-selects">
                                                            <label>Select Container Type 3 :</label>
                                                            <select name="selectcontainertype[]" class="validate select2">
                                                                <option value="">Select Container Type 3</option>
                                                                <option value="Can">Can</option>
                                                                <option value="Bottle">Bottle</option>
                                                                <option value="Keg">Keg</option>
                                                            </select>
                                                        </div><!--/.custom-select-->    
                                                    </div><!--/.field-box-->    
                                                </div><!-- form-group -->
                                            </div><!-- flex-wrapper-three -->
                                        </div>
                                        <div id="addbeer">
											<span><button type="button" name="addnew" id="addMoreBeer">Add More Beer</button></span>		
										</div>
		            					<p class="ac-forminfosubtitle">Beer Specifications</p>
		            					<div class="ac-formblock flex-wrapper-tow" id="delivery">
		            						<div class="form-group">
												<span class="lable">There is delivery fee charged.</span>
	                                        	<div class="ac-checkbox">
	                                                <div class="checkbox">
														<label for="acten-checkbox">
															<span>Do you need this item delivered?*</span>
															<input type="checkbox" id="acten-checkbox" name="itemdelivered">
															<em class="input-helper"></em>
														</label>
													</div><!-- checkbox -->
												</div><!-- ac-checkbox -->
	                                        </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
                                        <p class="wo-paskisection">We have greate rates on Soda/ Water/ Ice <br>
											We have custom Soda for your event. Any label you would like on suger cane soda. Please ask if interested.</p>
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <div class="ac-checkbox">
                                                    <div class="checkbox">
                                                        <label for="actsoda-checkbox">
                                                            <span>Soda</span>
                                                            <input type="checkbox" id="actsoda-checkbox" name="soda">
                                                            <em class="input-helper"></em>
                                                        </label>
                                                    </div><!-- checkbox -->
                                                </div><!-- ac-checkbox -->
                                            </div><!-- form-group -->
                                            <div class="form-group">
	                                        	<div class="ac-checkbox">
	                                                <div class="checkbox">
														<label for="actwater-checkbox">
															<span>Water</span>
															<input type="checkbox" id="actwater-checkbox" name="water">
															<em class="input-helper"></em>
														</label>
													</div><!-- checkbox -->
												</div><!-- ac-checkbox -->
	                                        </div><!-- form-group -->
                                            <div class="form-group">
                                                <div class="ac-checkbox">
                                                    <div class="checkbox">
                                                        <label for="actice-checkbox">
                                                            <span>ICE</span>
                                                            <input type="checkbox" id="actice-checkbox" name="ice">
                                                            <em class="input-helper"></em>
                                                        </label>
                                                    </div><!-- checkbox -->
                                                </div><!-- ac-checkbox -->
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
                                        <div class="ac-formblock full-input" id="note">
                                            <div class="form-group">
                                                <label>Note :</label>
                                                <textarea  class="textbox validate" name="note"></textarea>
                                            </div><!-- form-group -->
                                        </div><!-- flex-wrapper-three -->
		            					<div class="orderformlist">
		            						<ul>
		            							<li>* No Order is confirmed before staff has approved it</li>
		            							<li>* 10% restocking fee on all kegs that are reserved and order is canceled or changed</li>
		            							<li>* Not all companies are NY Registered. We will call to confirm and hard to get kegs.</li>
		            							<li>* We need to have people put put their card information to hold keg.</li>
		            							<li>* Any other needs items please provide in notes area below.</li>
		            							<li>* 10% restocking fee on all keg orders that are reserved then canceled.</li>
		            						</ul>
		            					</div><!-- orderformlist -->
		            					<div class="ac-btn">
		            						<span>
												<input type="button" class="button btn-lg btn-outline" value="Submit" name="weddingsubmit" id="weddingsubmit">
											</span>
                                            <input type="hidden" name="application_type" value="Wedding">
                                            <input type="hidden" name="action" value="actWeddingFrom">
                                            <div><input type="hidden" name="g-recaptcha-response"></div>
		            					</div><!-- ac-btn -->
		            				</fieldset>
            					</form>
                            <div class="alert alert-success" id="alert_success"><span></span></div>
                            <div class="alert alert-notification" id="alert_faild"><span></span></div>
            				</div><!-- wrap -->
            				<!--div class="order-bannerarea" style="background: url(<?php //echo get_template_directory_uri();  ?>/images/bgi/applicationbg.jpg) no-repeat center center / cover;">
            					<div class="order-bannerinner">
            						<h2>Looking <br>for KEG order ?</h2>
            						<p>Are you looking for well-known beer keg delivery near your area? Well If yes, then your search end here. Beer World Store is one of the finest tops hops beer shop in the united kingdom. We have beer store in Kingston, Catskill, Montecello, Monroe, Chester & Liberty.</p>
            						<div class="ac-btn">
	            						<a href="<?php //the_permalink(173); ?>"><input type="button" class="button btn-lg" value="KEG Order"></a>
	            					</div><!-- ac-btn -->
            					</div><!-- order-bannerinner -->
            				</div --><!-- order-bottombanner -->
            			</div><!-- ac-formbottomarea -->
            		</div><!-- ac-formbottom -->
            	</div><!-- ac-formmain -->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main-->
    <div class="loading">
        <svg width="70px"  height="70px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-flickr" style="background: none;"><circle ng-attr-cx="{{config.cx1}}" cy="50" ng-attr-fill="{{config.c1}}" ng-attr-r="{{config.radius}}" cx="42.3568" fill="#1c1954" r="20"><animate attributeName="cx" calcMode="linear" values="30;70;30" keyTimes="0;0.5;1" dur="1.3" begin="-0.65s" repeatCount="indefinite"></animate></circle><circle ng-attr-cx="{{config.cx2}}" cy="50" ng-attr-fill="{{config.c2}}" ng-attr-r="{{config.radius}}" cx="57.6432" fill="#f7941d" r="20"><animate attributeName="cx" calcMode="linear" values="30;70;30" keyTimes="0;0.5;1" dur="1.3" begin="0s" repeatCount="indefinite"></animate></circle><circle ng-attr-cx="{{config.cx1}}" cy="50" ng-attr-fill="{{config.c1}}" ng-attr-r="{{config.radius}}" cx="42.3568" fill="#1c1954" r="20"><animate attributeName="cx" calcMode="linear" values="30;70;30" keyTimes="0;0.5;1" dur="1.3" begin="-0.65s" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" values="0;0;1;1" calcMode="discrete" keyTimes="0;0.499;0.5;1" ng-attr-dur="{{config.speed}}s" repeatCount="indefinite" dur="1.3s"></animate></circle></svg>
    </div>
<?php
get_footer();
?>
<script type="text/javascript">
jQuery(document).ready(function($) 
{
    jQuery('.loading').hide();
    jQuery('#alert_success').hide(); 
    jQuery('#alert_faild').hide();  
    $cnt=4;
    jQuery("#addMoreBeer").click(function(event) {
        jQuery("#beerGroup").append('<div class="ac-formblock flex-wrapper-tow"><div class="form-group"><label>Beer Name ' + $cnt + ' :</label><input type="text" class="textbox validate" name="beername[]"></div><div class="form-group"><div class="field-box"><div class="custom-select custom-selects ac-formblockselect"><label>Select Container Type ' + $cnt + ' :</label><select name="selectcontainertype[]" class="validate select2 "><option value="">Select Container Type ' + $cnt + '</option><option value="Can">Can</option><option value="Bottle">Bottle</option><option value="Keg">Keg</option></select></div></div></div></div>');
        $('.ac-formblockselect .select2').select2({
            minimumResultsForSearch: Infinity
        });        
        $cnt++;
        $( ".custom-select" ).each(function( index ) {
            var paddingWidth = $(this).find('label').width();
            $('.custom-select').find('.select2-selection__rendered').css('padding-left', paddingWidth + 28 + 'px');
        });
        $('.ac-formbottomarea .form-group label').each(function() {
            var paddingWidth = $(this).width();
            $(this).next('input').css('padding-left', paddingWidth + 28 + 'px');
        })
    });

    jQuery("body").on('click', '#weddingsubmit', function(event) {
        event.preventDefault();
        var isValid = true;
        jQuery(this).parents('form').find('.validate').each(function(){
            if (jQuery.trim(jQuery(this).val()) == '') 
            {
                isValid = false;
                jQuery(this).css({
                    "border": "1px solid red",
                    //"background": "#FFCECE"
                });
            }
            else 
            {
                jQuery(this).css({
                    "border": "1px solid #999",
                    //"background": ""
                });
            }
        });
        if (isValid == false)
        {
            event.preventDefault();
            jQuery('html').animate({
                scrollTop: jQuery(".banner-title").offset().top
            }, 1000);
        }
        else
        {            
            var kegForm = jQuery('#weddingform').serialize();
            jQuery.ajax(
            {
                type:    "POST",
                url:     '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                dataType: 'html',
                data:    kegForm,
                beforeSend:function()
                {
                  jQuery('.loading').show();
                },
                complete:function() 
                {
                    jQuery('.loading').hide(); 
                },
                success: function(data,response)
                {
                    if( data == 1 )
                    {
                        jQuery("#weddingform")[0].reset();
                        jQuery('#alert_success').show(); 
                        jQuery("#alert_success span").html("Your Wedding order application successfully submitted!!.");
                    }
                    else
                    {
                        jQuery('#alert_faild').show();
                        jQuery("#alert_faild span").html("Something were wrong!!!.");
                    }
                }
            });
        }
    }); 
});
</script>