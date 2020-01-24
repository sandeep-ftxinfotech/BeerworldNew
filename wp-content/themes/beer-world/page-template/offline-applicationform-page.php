<?php

/*

Template name: Offline Application Form Template 
*/

get_header();
$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/innerbanner.jpg")
?>
   <div id="aboutBanner" class="banner"  style="background-image:url(<?php echo $PageImage;  ?>);">
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
        <div id="primary" class="content-area one-column">
            <div id="content">
            	<div class="ac-formmain" id="offlineform">
            		<div class="forminnertitle">
            			<div class="wrap">
            				<h2 class="ac-forminfotitle">Offline Form</h2>
            			</div><!-- wrap -->
            		</div><!-- forminnertitle -->
            		<div class="ac-formbottom offlineform">
            			<div class="ac-formbottomarea">
            				<div class="container">
            					<form id="offline-form" method="post" enctype="multipart/form-data">
		            				<fieldset>
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <label>First Name : </label>
                                                <input type="text" class="textbox validate" name="first_name">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Last Name :</label>
                                                <input type="text" class="textbox validate" name="last_name">
                                            </div><!-- form-group -->
                                            
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-formblock flex-wrapper-three">
											<div class="form-group">
                                                <label>Email Address :</label>
                                                <input type="text" class="textbox validate" name="email_address">
                                            </div><!-- form-group -->
		            						<div class="form-group">
                                                <label>Phone Number :</label>
                                                <input type="text" class="textbox validate" name="phone_number">
                                            </div><!-- form-group -->
                                            
		            					</div><!-- flex-wrapper-three -->
										<div class="ac-formblock flex-wrapper-three">
                                            <div class="form-group">
                                                <label>Address :</label>
                                                <input type="text" class="textbox validate" name="address">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>City :</label>
                                                <input type="text" class="textbox validate" name="city">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-formblock flex-wrapper-tow">
		            						<div class="form-group">
                                                <label>Position Sought :</label>
                                                <input type="text" class="textbox validate" name="postition_sought">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                 <div class="customfileinput">
                                                    <label>Upload Job Application File (PDF, DOC) :</label>
                                                    <input type="file" placeholder="eg. 95135742680" class="textbox validate" name="upload_file" id="upload_file">
                                                </div><!--/.customfileinput -->
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-formblock flex-wrapper-one ac-textarea">
		            						<div class="form-group">
                                                <label>Note :</label>
                                                <textarea name="note"></textarea>
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-btn" id="submitBtn">
		            						<span><input type="submit" class="button btn-lg btn-outline" value="Submit" name="offline_form" id="offline_form"></span>
                                            <input type="hidden" name="action" value="act_offline_form">
		            					</div><!-- ac-btn -->
                                        <div><input type="hidden" name="g-recaptcha-response"></div>
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
         <div id="download" class="mainPage">
            <div class="or"><span>OR</span></div>
            <div class="inner">
                
                <h5>Fill Online Application Form </h5>
                <div class="button">
                    <a href="<?php echo get_page_link(16); ?>" class="download">Online Application Form</a>
                </div>
            </div>                                      
        </div>
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
    jQuery("body").on('submit', '#offline-form', function(e) {
        e.preventDefault();
        var isValid = true;
        jQuery("#offline_form").parents('form').find('.validate').each(function(){
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
                var ext = jQuery('#upload_file').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(ext, ['docx','doc','pdf']) == -1) 
                {
                    isValid = false;
                    jQuery(".customfile").css({
                        "border": "solid 1px red",
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
            }
        });
        if (isValid == false)
        {
            event.preventDefault();
            jQuery('html').animate({
                scrollTop: jQuery(".forminnertitle").offset().top - 50
            }, 1000);
        }
        else
        {            
            var ajaxurl   =   "<?php echo admin_url('admin-ajax.php'); ?>";
            var formdata  =   new FormData(this);

            jQuery.ajax(
            {
                url:     ajaxurl,
                type:    "POST",
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false, 
                data:    formdata,
                beforeSend:function()
                {
                  jQuery('.loading').show();
                },
                complete:function() 
                {
                    jQuery('.loading').hide(); 
                },
                success: function(response)
                {
                    if( response == 1 )
                    {
                        jQuery("#offline-form")[0].reset();
                        jQuery('#alert_success').show(); 
                        jQuery("#alert_success span").html("Your Offline Job Application successfully submitted!!.");
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