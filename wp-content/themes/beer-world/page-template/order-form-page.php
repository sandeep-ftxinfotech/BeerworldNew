<?php

/*

Template name: Order Form Template 
*/

get_header();

$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/innerbanner.jpg");

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
            				<h3 class="ac-forminfotitle">KEG Order Form</h3>
            					<form method="post" id="kegform">
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
                                            <div class="form-group">
                                                <label>Date Needed :</label>
                                                <input type="text" id="datepicker10" readonly name="dateneeded" class="validate">
                                                <span class="datepik "><span>
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<p class="ac-forminfosubtitle">Kegs Request</p>
		            					<div class="ac-formblock flex-wrapper-tow" id="beerGroup">
		            						<div class="form-group">
                                                <label>Name Of Keg 1 :</label>
                                                <input type="text" class="textbox validate" name="krnameofkeg1">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <div class="field-box">
                                                    <div class="custom-select custom-selects">
                                                        <label>Size Of Keg 1 :</label>
                                                        <select name="sizeofkeg1" class="validate select2">
                                                        	<option value=""></option>
                                                            <option value="1/6">1/6</option>
                                                            <option value="1/4">1/4</option>
                                                            <option value="1/2">1/2</option>
                                                        </select>
                                                    </div><!--/.custom-select-->	
                                                </div><!--/.field-box-->	
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-formblock flex-wrapper-tow" id="beerGroup">
                                            <div class="form-group">
                                                <label>Name Of Keg 2 :</label>
                                                <input type="text" class="textbox validate" name="krnameofkeg2">
                                            </div><!-- form-group -->
		            						<div class="form-group">
                                                <div class="field-box">
                                                    <div class="custom-select custom-selects">
                                                        <label>Size Of Keg 2 :</label>
                                                        <select name="krsizeofkeg2" class="validate select2">
                                                        	<option value=""></option>
                                                            <option value="1/6">1/6</option>
                                                            <option value="1/4">1/4</option>
                                                            <option value="1/2">1/2</option>
                                                        </select>
                                                    </div><!--/.custom-select-->	
                                                </div><!--/.field-box-->	
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->	
		            					<p class="ac-forminfosubtitle">Kegs Specifications</p>
		            					<div class="ac-formblock flex-wrapper-tow">
		            						<div class="form-group">
	                                        	<div class="ac-checkbox">
	                                                <div class="checkbox">
														<label for="acten-checkbox">
															<span>Do you need ice?</span>
															<input type="checkbox" id="acten-checkbox" name="ksdoyouneedice">
															<em class="input-helper"></em>
														</label>
													</div><!-- checkbox -->
												</div><!-- ac-checkbox -->
												  <div class="kegbottomtext blankbox">
                                                    <p><span>&nbsp;</span></p>
                                                </div>
	                                        </div><!-- form-group -->
                                            <div class="form-group">
	                                        	<div class="ac-checkbox">
	                                                <div class="checkbox">
														<label for="aceleven-checkbox">
															<span>Do you need tap on Keg ?</span>
															<input type="checkbox" id="aceleven-checkbox" name="ksneedtaponkeg">
															<em class="input-helper"></em>
														</label>
													</div><!-- checkbox -->
												</div><!-- ac-checkbox -->
                                                <div class="kegbottomtext">
                                                    <p><span>$10 rental fee ( $45 Dep )</span>|<span>$15 rental fee on euro tap(euro tap deposit $75)</span></p>
                                                </div>
	                                        </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-formblock flex-wrapper-tow" id="beerGroup">
		            						<div class="form-group">
                                                <div class="field-box">
                                                    <div class="custom-select custom-selects">
                                                        <label>Order from which store? Order from which store? :</label>
                                                        <select name="orderfromstore" class="select2">
                                                        	<option value=""></option>
                                                            <option value="Kingston">Kingston</option>
                                                            <option value="Catskill">Catskill</option>
                                                            <option value="Monticello">Monticello</option>
                                                            <option value="Monroe">Monroe</option>
                                                            <option value="Chester">Chester</option>
                                                            <option value="Liberty">Liberty</option>
                                                        </select>
                                                    </div><!--/.custom-select-->	
                                                </div><!--/.field-box-->	
												<div class="kegbottomtext">
                                                    <p><span>&nbsp;</span></p>
                                                </div>
                                            </div><!-- form-group -->
                                            <div class="form-group">
	                                        	<div class="ac-checkbox">
	                                                <div class="checkbox">
														<label for="actwentieth-checkbox">
															<span>Do you need bucket for Keg ?</span>
															<input type="checkbox" id="actwentieth-checkbox" name="ktbucketforkeg">
															<em class="input-helper"></em>
														</label>
													</div><!-- checkbox -->
												</div><!-- ac-checkbox -->
                                                <div class="kegbottomtext">
                                                    <p><span>$7. rental fee</span><span>( $10 Deposit )</span></p>
                                                </div>
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
		            					 <div class="order-checkbox">
                                        	<div class="checkbox">
												<label for="acthartieth-checkbox">
													<input type="checkbox" id="acthartieth-checkbox" name="chkpeopleconsume">
													<em class="input-helper"></em>
													<span>No person buying a keg will be allowing under age people to consume. *</span>
												</label>
											</div><!-- checkbox -->
                                        </div><!-- order-checkbox -->
		            					<div class="ac-btn">
		            						<span>
												<input type="button" class="button btn-lg btn-outline" value="Submit" name="kegsubmit" id="kegsubmit">
											</span>
                                            <input type="hidden" name="application_type" value="keg">
                                            <input type="hidden" name="action" value="actKegFrom">
                                            <div><input type="hidden" name="g-recaptcha-response"></div>
		            					</div><!-- ac-btn -->
		            				</fieldset>
            					</form>
                            <div class="alert alert-success" id="alert_success"><span></span></div>
                            <div class="alert alert-notification" id="alert_faild"><span></span></div>
            				</div><!-- wrap -->
            				
            			</div><!-- ac-formbottomarea -->
            		</div><!-- ac-formbottom -->
            	</div><!-- ac-formmain -->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main-->
    <!--<div class="loading">
        <svg width="70px"  height="70px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-flickr" style="background: none;"><circle ng-attr-cx="{{config.cx1}}" cy="50" ng-attr-fill="{{config.c1}}" ng-attr-r="{{config.radius}}" cx="42.3568" fill="#1c1954" r="20"><animate attributeName="cx" calcMode="linear" values="30;70;30" keyTimes="0;0.5;1" dur="1.3" begin="-0.65s" repeatCount="indefinite"></animate></circle><circle ng-attr-cx="{{config.cx2}}" cy="50" ng-attr-fill="{{config.c2}}" ng-attr-r="{{config.radius}}" cx="57.6432" fill="#f7941d" r="20"><animate attributeName="cx" calcMode="linear" values="30;70;30" keyTimes="0;0.5;1" dur="1.3" begin="0s" repeatCount="indefinite"></animate></circle><circle ng-attr-cx="{{config.cx1}}" cy="50" ng-attr-fill="{{config.c1}}" ng-attr-r="{{config.radius}}" cx="42.3568" fill="#1c1954" r="20"><animate attributeName="cx" calcMode="linear" values="30;70;30" keyTimes="0;0.5;1" dur="1.3" begin="-0.65s" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" values="0;0;1;1" calcMode="discrete" keyTimes="0;0.499;0.5;1" ng-attr-dur="{{config.speed}}s" repeatCount="indefinite" dur="1.3s"></animate></circle></svg>
    </div>-->
<?php
get_footer();
?>
<script type="text/javascript">
jQuery('.loading').hide();
jQuery('#alert_success').hide(); 
jQuery('#alert_faild').hide();  
jQuery("body").on('click', '#kegsubmit', function(event) {
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
        var kegForm = jQuery('#kegform').serialize();

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
                    jQuery("#kegform")[0].reset();
                    jQuery('#alert_success').show(); 
                    jQuery("#alert_success span").html("Your KEG order application successfully submitted!!.");
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
</script>