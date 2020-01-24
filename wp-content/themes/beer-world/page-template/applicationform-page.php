<?php

/*

Template name: Application Form Template 
*/

get_header();
$PageImage = WPCustomClass::CustomFeatureImage(get_the_ID(),"extra-large","bgi/innerbanner.jpg");
?>
<script type="text/javascript">
jQuery(document).ready(function($) {
    jQuery("#wholeform").hide();
});
</script>
    <div id="aboutBanner" class="banner" style="background-image:url(<?php echo $PageImage;  ?>);">
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
        <div id="primary" class="content-area one-column mainPage jobApplication leafBG">
            <div id="content" class="container">
            	<div class="ac-formmain">
            		<div class="ac-formbottom" id="wholeform">
            			<div class="progressbarmain">
            				<ul id="progressbar">
								<li class="active applicantimg">Applicant Information</li>
								<li class="educationimg">Education Information</li>
								<li class="referencesimg">References</li>
								<li class="previousimg">Previous Employment</li>
							</ul>
            			</div><!-- progressbarmain -->
            			<div class="ac-formbottomarea">
            				<div class="wrap">
            					<form id="job-application">
		            				<fieldset id="applicationInformation">
		            					<div class="ac-formblock flex-wrapper-three singleLine">
                                            <div class="form-group">
                                                <label>Last Name :</label>
                                                <input type="text" class="textbox validate" name="last_name">
                                            </div><!-- form-group -->
		            						<div class="form-group">
                                                <label>First Name :</label>
                                                <input type="text" class="textbox validate" name="first_name">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Middle Name : </label>
                                                <input type="text" class="textbox" name="middle_name">
                                            </div><!-- form-group -->                 
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-formblock flex-wrapper-three singleLine">
		            						<div class="form-group">
                                                <label>Phone Number :</label>
                                                <input type="text" class="textbox validate" name="phone_number">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Email Address :</label>
                                                <input type="text" class="textbox validate" name="email_address">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Position Applied for :</label>
                                                <input type="text" class="textbox validate" name="position_applied_for">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-formblock flex-wrapper-tow">
		            						<div class="form-group">
                                                <label>Address Line 1 :</label>
                                                <input type="text" class="textbox validate" name="address_line1">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Address Line 2 :</label>
                                                <input type="text" class="textbox" name="address_line2">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-formblock flex-wrapper-three singleLine">
		            						<div class="form-group">
                                                <label>City * :</label>
                                                <input type="text" class="textbox validate" name="city">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>State * :</label>
                                                <input type="text" class="textbox validate" name="state">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Zip Code * :</label>
                                                <input type="text" class="textbox validate" name="zip_code">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-formblock flex-wrapper-tow">
		            						<div class="form-group">
                                                <label>Date Available * :</label>
                                                <input type="text" id="datepicker13" readonly="" class="" name="date_available">
                                                <span class="datepik"><span>
                                            </div><!-- form-group -->
                                            <!-- <div class="form-group">
                                                <label>Social Security Number :</label>
                                                <input type="text" class="textbox validate" name="social_security_number">
                                            </div> --><!-- form-group -->
                                            <div class="form-group">
                                                <label>Desired Salary * :  $</label>
                                                <input type="text" class="textbox validate" name="desired_salary">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-formblock flex-wrapper-three singleLine">
		            						<div class="form-group">
                                                <div class="ac-checkbox">
                                                	<div class="checkbox">
														<label for="acone-checkbox">
															<span>Are you a citizen of the United States? *</span>
															<input type="checkbox" id="acone-checkbox" name="citizen_of_united_state">
															<em class="input-helper"></em>
														</label>
													</div><!-- checkbox -->
                                                </div><!-- ac-checkbox -->
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                            	<div class="ac-checkbox">
	                                                <div class="checkbox">
														<label for="actow-checkbox">
															<span>Have you ever worked for this company? *</span>
															<input type="checkbox" id="actow-checkbox" name="ever_worked_for_this_company">
															<em class="input-helper"></em>
														</label>
													</div><!-- checkbox -->
												</div><!-- ac-checkbox -->
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                            	<div class="ac-checkbox">
	                                                <div class="checkbox">
														<label for="acthree-checkbox">
															<span>Have you ever been convicted of a felony? *</span>
															<input type="checkbox" id="acthree-checkbox" name="ever_been_convicted_of_a_felony">
															<em class="input-helper"></em>
														</label>
													</div><!-- checkbox -->
												</div><!-- ac-checkbox -->
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-btn">
		            						<span><input type="button" class="button btn-lg btn-outline" value="Next Step" id="btnNextApplicationInformation"></span>
		            					</div><!-- ac-btn -->
		            				</fieldset>
		            				<fieldset id="educationInformation">
		            					<p class="ac-forminfosubtitle">High School Information</p>
		            					<div class="ac-formblock flex-wrapper-tow">
		            						<div class="form-group">
                                                <label>Address Line 1 :</label>
                                                <input type="text" class="textbox" name="hsi_address_line1">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Address Line 2 :</label>
                                                <input type="text" class="textbox" name="hsi_address_line2">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-tow -->
		            					<div class="ac-formblock flex-wrapper-three acborder-bottom">
		            						<div class="form-group">
                                                <label>From  :</label>
                                                <input type="text" id="datepicker1" readonly="" class="" name="hsi_from_date">
                                                <span class="datepik"><span>
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>To  :</label>
                                                <input type="text" id="datepicker2" readonly="" class="" name="hsi_to_date">
                                                <span class="datepik"><span>
                                            </div><!-- form-group -->
                                            <div class="form-group question">
	                                        	<div class="ac-checkbox">
	                                                <div class="checkbox">
														<label for="actfhour-checkbox">
															<span>Did you graduate from the high school ? </span>
															<input type="checkbox" id="actfhour-checkbox" name="hsi_gradute_from_the_highschool">
															<em class="input-helper"></em>
														</label>
													</div><!-- checkbox -->
												</div><!-- ac-checkbox -->
	                                        </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<p class="ac-forminfosubtitle">Graduate Information</p>
		            					<div class="ac-formblock flex-wrapper-tow">
		            						<div class="form-group">
                                                <label>Collage Name  :</label>
                                                <input type="text" class="textbox" name="gi_college_name">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Address :</label>
                                                <input type="text" class="textbox" name="gi_address">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-tow -->
		            					<div class="ac-formblock flex-wrapper-three acborder-bottom">
		            						<div class="form-group">
                                                <label>From  :</label>
                                                <input type="text" id="datepicker3" readonly="" class="" name="gi_from_date">
                                                <span class="datepik"><span>
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>To  :</label>
                                                <input type="text" id="datepicker4" readonly="" class="" name="gi_to_date">
                                                <span class="datepik"><span>
                                            </div><!-- form-group -->
                                            <div class="form-group question">
	                                        	<div class="ac-checkbox">
	                                                <div class="checkbox">
														<label for="acfive-checkbox">
															<span>Did you graduate from the collage? </span>
															<input type="checkbox" id="acfive-checkbox" name="gi_graduate_from_the_college">
															<em class="input-helper"></em>
														</label>
													</div><!-- checkbox -->
												</div><!-- ac-checkbox -->
	                                        </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<p class="ac-forminfosubtitle">Other Course Information</p>
		            					<div class="ac-formblock flex-wrapper-tow">
                                            <div class="form-group">
                                                <label>Institute Name  :</label>
                                                <input type="text" class="textbox" name="oci_institute_name">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Address :</label>
                                                <input type="text" class="textbox" name="oci_address">
                                            </div><!-- form-group -->
                                        </div><!-- flex-wrapper-tow -->
                                        <div class="ac-formblock flex-wrapper-three acborder-bottom">
                                            <div class="form-group">
                                                <label>From  :</label>
                                                <input type="text" id="datepicker14" readonly="" class="" name="oci_from_date">
                                                <span class="datepik"><span>
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>To  :</label>
                                                <input type="text" id="datepicker15" readonly="" class="" name="oci_to_date">
                                                <span class="datepik"><span>
                                            </div><!-- form-group -->
                                            <div class="form-group question">
                                                <div class="ac-checkbox">
                                                    <div class="checkbox">
                                                        <label for="acinstitute-checkbox">
                                                            <span>Did you graduate from the institute? </span>
                                                            <input type="checkbox" id="acinstitute-checkbox" name="oci_graduate_from_the_institute">
                                                            <em class="input-helper"></em>
                                                        </label>
                                                    </div><!-- checkbox -->
                                                </div><!-- ac-checkbox -->
                                            </div><!-- form-group -->
                                        </div><!-- flex-wrapper-three -->
		            					<div class="ac-btn btn-tow" id="submitBtn">
		            						<input type="button" class="button btn-lg btn-outline" value="Back" id="btnBackApplicationInformation">
		            						<input type="button" class="button btn-lg btn-outline" value="Next" id="btnNextReferenceInformation">
		            					</div><!-- ac-btn btn-tow -->
		            				</fieldset>
		            				<fieldset id="referenceInformation">
		            					<!--h2 class="ac-forminfotitle">References<sub>( Please list three professional references )</sub></h2-->
		            					<p class="ac-forminfosubtitle">Reference 1</p>
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <label>Full Name : </label>
                                                <input type="text" class="textbox" name="ref1_full_name">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Relation  :</label>
                                                <input type="text" class="textbox" name="ref1_relation">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Phone Number :</label>
                                                <input type="text" class="textbox" name="ref1_phone_number">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-tow -->
		            					<div class="ac-formblock flex-wrapper-tow acborder-bottom">
		            						<div class="form-group">
                                                <label>Company Name :</label>
                                                <input type="text" class="textbox" name="ref1_company_name">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Company Address :</label>
                                                <input type="text" class="textbox" name="ref1_company_address">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-tow -->
		            					<p class="ac-forminfosubtitle">Reference 2</p>
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <label>Full Name : </label>
                                                <input type="text" class="textbox" name="ref2_full_name">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Relation  :</label>
                                                <input type="text" class="textbox" name="ref2_relation">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Phone Number :</label>
                                                <input type="text" class="textbox" name="ref2_phone_number">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-tow -->
		            					<div class="ac-formblock flex-wrapper-tow acborder-bottom">
		            						<div class="form-group">
                                                <label>Company Name :</label>
                                                <input type="text" class="textbox" name="ref2_company_name">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Company Address :</label>
                                                <input type="text" class="textbox" name="ref2_company_address">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-tow -->
		            					<p class="ac-forminfosubtitle">Reference 3</p>
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <label>Full Name : </label>
                                                <input type="text" class="textbox" name="ref3_full_name">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Relation  :</label>
                                                <input type="text" class="textbox" name="ref3_relation">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Phone Number :</label>
                                                <input type="text" class="textbox" name="ref3_phone_number">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-tow -->
		            					<div class="ac-formblock flex-wrapper-tow acborder-bottom">
		            						<div class="form-group">
                                                <label>Company Name :</label>
                                                <input type="text" class="textbox" name="ref3_company_name">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Company Address :</label>
                                                <input type="text" class="textbox" name="ref3_company_address">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three-->
		            					<div class="ac-btn btn-tow" id="submitBtn">
		            						<input type="button" class="button btn-lg btn-outline" value="Back" id="btnBackEducationInformation">
		            						<input type="button" class="button btn-lg btn-outline" value="Next" id="btnNextEmploymentInformation">
		            					</div><!-- ac-btn btn-tow -->
		            				</fieldset>
		            				<fieldset id="previousEmploymentInformation">
		            					<!--h2 class="ac-forminfotitle">PREVIOUS EMPLOYMENT</h2-->
		            					<p class="ac-forminfosubtitle">First Employment</p>
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <label>Company Name :</label>
                                                <input type="text" class="textbox" name="emp1_conpany_name">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Company Address :</label>
                                                <input type="text" class="textbox" name="emp1_company_address">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Phone Number : </label>
                                                <input type="text" class="textbox" name="emp1_phone_number">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three-->
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <label>Job Title :</label>
                                                <input type="text" class="textbox" name="emp1_job_title">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Supervisor  :</label>
                                                <input type="text" class="textbox" name="emp1_supervisior">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Reason for Leaving :</label>
                                                <input type="text" class="textbox" name="emp1_reason_from_leaving">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three-->
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <label>From : </label>
                                                <input type="text" id="datepicker7" readonly="" class="" name="emp1_from_date">
                                                <span class="datepik"><span>
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>To :</label>
                                                <input type="text" id="datepicker8" readonly="" class="" name="emp1_to_date">
                                                <span class="datepik"><span>
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Responsibilities :</label>
                                                <input type="text" class="textbox" name="emp1_responsibilities">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-formblock flex-wrapper-three acborder-bottom">
		            						<div class="form-group">
                                                <label>Starting Salary : $</label>
                                                <input type="text" class="textbox employmentValidate" name="emp1_starting_salary">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Ending Salary : $</label>
                                                <input type="text" class="textbox employmentValidate" name="emp1_ending_salary">
                                            </div><!-- form-group -->
                                            <div class="form-group">
	                                        	<div class="ac-checkbox tow-line">
	                                                <div class="checkbox">
														<label for="acseven-checkbox">
															<span>May we contact your previous supervisor for a reference?</span>
															<input type="checkbox" id="acseven-checkbox" name="emp1_contact_supervisior">
															<em class="input-helper"></em>
														</label>
													</div><!-- checkbox -->
												</div><!-- ac-checkbox -->
	                                        </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three-->
		            					<p class="ac-forminfosubtitle">Second Employment</p>
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <label>Company Name :</label>
                                                <input type="text" class="textbox" name="emp2_company_name">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Company Address :</label>
                                                <input type="text" class="textbox" name="emp2_company_address">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Phone Number : </label>
                                                <input type="text" class="textbox" name="emp2_phone_number">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three-->
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <label>Job Title :</label>
                                                <input type="text" class="textbox" name="emp2_job_title">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Supervisor  :</label>
                                                <input type="text" class="textbox" name="emp2_supervisior">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Reason for Leaving :</label>
                                                <input type="text" class="textbox" name="emp2_reason_from_leaving">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three-->
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <label>From : </label>
                                                <input type="text" id="datepicker9" readonly="" name="emp2_from_date">
                                                <span class="datepik"><span>
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>To :</label>
                                                <input type="text" id="datepicker10" readonly="" name="emp2_to_date">
                                                <span class="datepik"><span>
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Responsibilities :</label>
                                                <input type="text" class="textbox" name="emp2_responsibilities">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-formblock flex-wrapper-three acborder-bottom">
		            						<div class="form-group">
                                                <label>Starting Salary : $</label>
                                                <input type="text" class="textbox" name="emp2_starting_salary">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Ending Salary : $</label>
                                                <input type="text" class="textbox" name="emp2_ending_salary">
                                            </div><!-- form-group -->
                                            <div class="form-group">
	                                        	<div class="ac-checkbox tow-line">
	                                                <div class="checkbox">
														<label for="aceight-checkbox">
															<span>May we contact your previous supervisor for a reference?</span>
															<input type="checkbox" id="aceight-checkbox" class="emp2_contact_supervisior">
															<em class="input-helper"></em>
														</label>
													</div><!-- checkbox -->
												</div><!-- ac-checkbox -->
	                                        </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three-->
		            					<p class="ac-forminfosubtitle">Third Employment</p>
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <label>Company Name :</label>
                                                <input type="text" class="textbox" name="emp3_conpany_name">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Company Address :</label>
                                                <input type="text" class="textbox" name="emp3_company_address">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Phone Number : </label>
                                                <input type="text" class="textbox" name="emp3_phone_number">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three-->
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <label>Job Title :</label>
                                                <input type="text" class="textbox" name="emp3_job_title">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Supervisor  :</label>
                                                <input type="text" class="textbox" name="emp3_supervisior">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Reason for Leaving :</label>
                                                <input type="text" class="textbox" name="emp3_reason_from_leaving">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three-->
		            					<div class="ac-formblock flex-wrapper-three">
		            						<div class="form-group">
                                                <label>From : </label>
                                                <input type="text" id="datepicker11" readonly="" name="emp3_from_date">
                                                <span class="datepik"><span>
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>To :</label>
                                                <input type="text" id="datepicker12" readonly="" name="emp3_to_date">
                                                <span class="datepik"><span>
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Responsibilities :</label>
                                                <input type="text" class="textbox" name="emp3_responsibilities">
                                            </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three -->
		            					<div class="ac-formblock flex-wrapper-three acborder-bottom">
		            						<div class="form-group">
                                                <label>Starting Salary : $</label>
                                                <input type="text" class="textbox" name="emp3_starting_salary">
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label>Ending Salary : $</label>
                                                <input type="text" class="textbox" name="emp3_ending_salary">
                                            </div><!-- form-group -->
                                            <div class="form-group">
	                                        	<div class="ac-checkbox tow-line">
	                                                <div class="checkbox">
														<label for="acnine-checkbox">
															<span>May we contact your previous supervisor for a reference?</span>
															<input type="checkbox" id="acnine-checkbox" name="emp3_contact_supervisior">
															<em class="input-helper"></em>
														</label>
													</div><!-- checkbox -->
												</div><!-- ac-checkbox -->
	                                        </div><!-- form-group -->
		            					</div><!-- flex-wrapper-three-->
                                        <div class="ac-btn btn-tow"  id="submitBtn">
		            						<input type="button" class="button btn-lg btn-outline" value="Back" id="btnBackReferenceInformation">
		            						<input type="button" class="button btn-lg btn-outline" value="Submit" id="btnSubmitEmploymentInformation">
                                            <input type="hidden" name="action" value="act_job_application">
                                            <div><input type="hidden" name="g-recaptcha-response"></div>
		            					</div><!-- ac-btn btn-tow -->
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
				
				<h5>Download Employment Application Form & Upload Below</h5>
				<div class="button">
					<a href="<?php echo get_page_link(22); ?>" class="download">Download Form</a>
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
jQuery(document).ready(function($) {

    jQuery('.loading').hide();
    jQuery('#alert_success').hide(); 
    jQuery('#alert_faild').hide(); 
    jQuery("#wholeform").slideDown('slow');
    jQuery("#applicationInformation").slideDown('slow'); 
    jQuery("#educationInformation, #referenceInformation, #previousEmploymentInformation").slideUp('slow');

    jQuery("body").on('click', '#btnNextApplicationInformation', function(event) {
        event.preventDefault();
        var isValid = true;
        jQuery(this).parents('form').find('.validate').each(function(){
            if (jQuery.trim(jQuery(this).val()) == '' ) 
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
                scrollTop: jQuery(".progressbarmain").offset().top
            }, 1000);
        }
        else
        {
            jQuery("#applicationInformation").slideUp('slow');
            jQuery(".educationimg").addClass('active');
            jQuery("#educationInformation").slideDown('slow');
            jQuery('html, body').animate({
            scrollTop: jQuery(".progressbarmain").offset().top - 90
            }, 1000);
        }
    });

    jQuery("body").on('click', '#btnBackApplicationInformation', function(event) {
        event.preventDefault();
        jQuery("#educationInformation").slideUp('slow');
        jQuery(".educationimg").removeClass('active');
        jQuery("#applicationInformation").slideDown('slow');
        jQuery('html, body').animate({
        scrollTop: jQuery(".progressbarmain").offset().top - 90
    }, 1000);
    });

    jQuery("body").on('click', '#btnNextReferenceInformation', function(event) {
        event.preventDefault();
        jQuery("#educationInformation").slideUp('slow');
        jQuery(".referencesimg").addClass('active');
        jQuery("#referenceInformation").slideDown('slow');
        jQuery('html, body').animate({
        scrollTop: jQuery(".progressbarmain").offset().top - 90
        }, 1000);
    });

    jQuery("body").on('click', '#btnBackEducationInformation', function(event) {
        event.preventDefault();
        jQuery("#referenceInformation").slideUp('slow');
        jQuery(".referencesimg").removeClass('active');
        jQuery("#educationInformation").slideDown('slow');
        jQuery('html, body').animate({
        scrollTop: jQuery(".progressbarmain").offset().top - 90
    }, 1000);
    });

    jQuery("body").on('click', '#btnNextEmploymentInformation', function(event) {
        event.preventDefault();
        jQuery("#referenceInformation").slideUp('slow');
        jQuery(".previousimg").addClass('active');
        jQuery("#previousEmploymentInformation").slideDown('slow');
        jQuery('html, body').animate({
        scrollTop: jQuery(".progressbarmain").offset().top - 90
        }, 1000);
    });

    jQuery("body").on('click', '#btnBackReferenceInformation', function(event) {
        event.preventDefault();
        jQuery("#previousEmploymentInformation").slideUp('slow');
        jQuery(".previousimg").removeClass('active');
        jQuery("#referenceInformation").slideDown('slow');
        jQuery('html, body').animate({
        scrollTop: jQuery(".progressbarmain").offset().top - 90
        }, 1000);
    });

    jQuery("body").on('click', '#btnSubmitEmploymentInformation', function(event) {
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

                jQuery("#applicationInformation").slideDown('slow'); 
                jQuery("#educationInformation, #referenceInformation, #previousEmploymentInformation").slideUp('slow');
                jQuery('#alert_success').hide(); 
                jQuery('#alert_faild').hide();
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
        }
        else
        {
            var kegForm = jQuery('#job-application').serialize();

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
                        jQuery("#job-application")[0].reset();
                        jQuery('#alert_success').show(); 
                        jQuery("#alert_success span").html("Your Online Job Application successfully submitted!!.");
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