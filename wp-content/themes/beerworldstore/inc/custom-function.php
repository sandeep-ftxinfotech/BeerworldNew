<?php

if( ! defined( 'ABSPATH' ) ) exit; 

/* Include Class file. */
require get_parent_theme_file_path( '/inc/custom-include/custom.cls.php' );

/* Include Custom Post Type file. */
require get_parent_theme_file_path( '/inc/custom-include/custom.posttype.php' );

/* Object for a class */
$FunctionOBJ	=	new WPCustomClass();

/* Call Function for Add Option Page in Admin Panel */
WPCustomClass::WPOptionPage();

//add_action( 'wp_enqueue_scripts', 'WPCustomClass::WPCustomEnqueueScripts' );


add_filter( 'wpcf7_autop_or_not', '__return_false' );

/* KEG Form Ajax registration Start */
add_action('wp_ajax_actKegFrom', 'kegFormSubmit');
add_action('wp_ajax_nopriv_actKegFrom', 'kegFormSubmit');
function kegFormSubmit()
{
	global $wpdb;

	$tableName = $wpdb->prefix.'online_application_form';

	$customerName	 = trim($_POST["customername"]);
	$pnoneNumber	 = trim($_POST["pnonenumber"]);
	$dateNeeded 	 = trim($_POST["dateneeded"]);
	$nameOfKeg1		 = trim($_POST["krnameofkeg1"]);
	$sizeofkeg1		 = trim($_POST["sizeofkeg1"]);
	$sizeofkeg2		 = trim($_POST["krsizeofkeg2"]);
	$nameOfKeg2		 = trim($_POST["krnameofkeg2"]);
	$youNeedIce		 = trim($_POST["ksdoyouneedice"]);
	$needTapOnKeg	 = trim($_POST["ksneedtaponkeg"]);
	$orderFromStore	 = trim($_POST["orderfromstore"]);
	$bucketforKeg	 = trim($_POST["ktbucketforkeg"]);
	$peopleCounsume  = trim($_POST["chkpeopleconsume"]);
	$applicationType = trim($_POST["application_type"]);


	$storedArray = array(
		'customer_name'		=> $customerName,
		'phone_number'		=> $pnoneNumber,
		'date_needed'		=> $dateNeeded,
		'name_of_keg1'		=> $nameOfKeg1,
		'size_of_keg1'		=> $sizeofkeg1,
		'name_of_keg2'		=> $nameOfKeg2,
		'size_of_keg2'		=> $sizeofkeg2,
		'you_need_ice'		=> $youNeedIce,
		'need_tap_on_keg'	=> $needTapOnKeg,
		'order_from_store'	=> $orderFromStore,
		'bucket_for_keg'	=> $bucketforKeg,
		'people_consume'	=> $peopleCounsume,
	);

	$serializeArr = maybe_serialize($storedArray);

	$dataArray = array(
		'application_content' => $serializeArr,
		'application_type' 	  => $applicationType,
		'application_status'  => 1,
	);

	if( $wpdb->insert($tableName, $dataArray) )
	{
		echo "1";
		die();
	}
	else
	{
		echo '0';
		die();
	}
}
/* KEG Form Ajax registration End */


/* Wedding Form Ajax registration Start */
add_action('wp_ajax_actWeddingFrom', 'kegWeddingSubmit');
add_action('wp_ajax_nopriv_actWeddingFrom', 'kegWeddingSubmit');
function kegWeddingSubmit()
{
	/*echo "<pre>";
	print_r($_POST); exit;*/
	global $wpdb;

	$tableName     = $wpdb->prefix.'online_application_form';
	$beerArray     = [];

	for($b=0; $b+1 <= count($_POST["beername"]); $b++ )
	{
		$beerArray[] = ['beer_name' 	 => $_POST["beername"][$b],
						'container_type' => $_POST["selectcontainertype"][$b],
		];
	}

	$applicationType = trim($_POST["application_type"]);

	$storedArray = array(
		'customer_name'		  => trim($_POST["customername"]),
		'phone_number'		  => trim($_POST["pnonenumber"]),
		'email_address'		  => trim($_POST["emailaddress"]),
		'addressline1'		  => trim($_POST["addressline1"]),
		'addressline2'		  => trim($_POST["addressline2"]),
		'event_date'		  => trim($_POST["eventdate"]),
		'name_party'		  => trim($_POST["nameparty"]),
		'typeofevent'		  => trim($_POST["typeofevent"]),
		'event_location'	  => trim($_POST["eventlocation"]),
		'beerNameAndContainer'=> $beerArray,
		'item_elivered'	      => trim($_POST["itemdelivered"]),
		'soda'				  => trim($_POST["soda"]),
		'water'				  => trim($_POST["water"]),
		'ice'				  => trim($_POST["ice"]),
		'note'				  => trim($_POST["note"]),
	);

	$serializeArr = maybe_serialize($storedArray);

	$dataArray = array(
		'application_content' => $serializeArr,
		'application_type' 	  => $applicationType,
		'application_status'  => 1,
	);

	if( $wpdb->insert($tableName, $dataArray) )
	{
		echo "1";
		die();
	}
	else
	{
		echo '0';
		die();
	}
}
/* Wedding Form Ajax registration End */


/* Job Application Form Ajax registration Start */
add_action('wp_ajax_act_job_application', 'jobApplication');
add_action('wp_ajax_nopriv_act_job_application', 'jobApplication');
function jobApplication()
{
	global $wpdb;

	$tableName      = $wpdb->prefix.'online_application_form';

	$applicationType = "Online Job Application";

	$storedArray = array(
		'last_name'		      			 => trim($_POST["last_name"]),
		'first_name'		  			 => trim($_POST["first_name"]),
		'middle_name'		  			 => trim($_POST["middle_name"]),
		'phone_number'		  			 => trim($_POST["phone_number"]),
		'email_address'		  			 => trim($_POST["email_address"]),
		'position_applied_for'			 => trim($_POST["position_applied_for"]),
		'address_line1'		  			 => trim($_POST["address_line1"]),
		'address_line2'		  			 => trim($_POST["address_line2"]),
		'city'	  			  			 => trim($_POST["city"]),
		'state'				  			 => trim($_POST["state"]),
		'zip_code'	          			 => trim($_POST["zip_code"]),
		'date_available'      			 => trim($_POST["date_available"]),
		/*'social_security_number'		 => trim($_POST["social_security_number"]),*/
		'desired_salary'				 => trim($_POST["desired_salary"]),
		'citizen_of_united_state'		 => trim($_POST["citizen_of_united_state"]),
		'ever_worked_for_this_company'	 => trim($_POST["ever_worked_for_this_company"]),
		'ever_been_convicted_of_a_felony'=> trim($_POST["ever_been_convicted_of_a_felony"]),
		'hsi_address_line1'				 => trim($_POST["hsi_address_line1"]),
		'hsi_address_line2'				 => trim($_POST["hsi_address_line2"]),
		'hsi_from_date'				     => trim($_POST["hsi_from_date"]),
		'hsi_to_date'				  	 => trim($_POST["hsi_to_date"]),
		'hsi_gradute_from_the_highschool'=> trim($_POST["hsi_gradute_from_the_highschool"]),
		'gi_college_name'				 => trim($_POST["gi_college_name"]),
		'gi_address'				     => trim($_POST["gi_address"]),
		'gi_from_date'				     => trim($_POST["gi_from_date"]),
		'gi_to_date'				     => trim($_POST["gi_to_date"]),
		'gi_graduate_from_the_college'	 => trim($_POST["gi_graduate_from_the_college"]),
		'oci_institute_name'			 => trim($_POST["oci_institute_name"]),
		'oci_address'				     => trim($_POST["oci_address"]),
		'oci_from_date'				     => trim($_POST["oci_from_date"]),
		'oci_to_date'				     => trim($_POST["oci_to_date"]),
		'oci_graduate_from_the_institute'=> trim($_POST["oci_graduate_from_the_institute"]),
		'ref1_full_name'				 => trim($_POST["ref1_full_name"]),
		'ref1_relation'				     => trim($_POST["ref1_relation"]),
		'ref1_phone_number'				 => trim($_POST["ref1_phone_number"]),
		'ref1_company_name'				 => trim($_POST["ref1_company_name"]),
		'ref1_company_address'			 => trim($_POST["ref1_company_address"]),
		'ref2_full_name'				 => trim($_POST["ref2_full_name"]),
		'ref2_relation'				     => trim($_POST["ref2_relation"]),
		'ref2_phone_number'				 => trim($_POST["ref2_phone_number"]),
		'ref2_company_name'				 => trim($_POST["ref2_company_name"]),
		'ref2_company_address'			 => trim($_POST["ref2_company_address"]),
		'ref3_full_name'				 => trim($_POST["ref3_full_name"]),
		'ref3_company_name'				 => trim($_POST["ref3_company_name"]),
		'ref3_company_address'			 => trim($_POST["ref3_company_address"]),
		'emp1_conpany_name'				 => trim($_POST["emp1_conpany_name"]),
		'emp1_company_address'			 => trim($_POST["emp1_company_address"]),
		'emp1_phone_number'				 => trim($_POST["emp1_phone_number"]),
		'emp1_job_title'				 => trim($_POST["emp1_job_title"]),
		'emp1_supervisior'				 => trim($_POST["emp1_supervisior"]),
		'emp1_reason_from_leaving'		 => trim($_POST["emp1_reason_from_leaving"]),
		'emp1_from_date'				 => trim($_POST["emp1_from_date"]),
		'emp1_to_date'				     => trim($_POST["emp1_to_date"]),
		'emp1_responsibilities'			 => trim($_POST["emp1_responsibilities"]),
		'emp1_starting_salary'			 => trim($_POST["emp1_starting_salary"]),
		'emp1_ending_salary'			 => trim($_POST["emp1_ending_salary"]),
		'emp1_contact_supervisior'		 => trim($_POST["emp1_contact_supervisior"]),
		'emp2_company_name'				 => trim($_POST["emp2_company_name"]),
		'emp2_company_address'			 => trim($_POST["emp2_company_address"]),
		'emp2_phone_number'				 => trim($_POST["emp2_phone_number"]),
		'emp2_job_title'				 => trim($_POST["emp2_job_title"]),
		'emp2_supervisior'				 => trim($_POST["emp2_supervisior"]),
		'emp2_reason_from_leaving'		 => trim($_POST["emp2_reason_from_leaving"]),
		'emp2_from_date'				 => trim($_POST["emp2_from_date"]),
		'emp2_to_date'				     => trim($_POST["emp2_to_date"]),
		'emp2_responsibilities'			 => trim($_POST["emp2_responsibilities"]),
		'emp2_starting_salary'			 => trim($_POST["emp2_starting_salary"]),
		'emp2_ending_salary'			 => trim($_POST["emp2_ending_salary"]),
		'emp3_conpany_name'				 => trim($_POST["emp3_conpany_name"]),
		'emp3_company_address'			 => trim($_POST["emp3_company_address"]),
		'emp3_phone_number'				 => trim($_POST["emp3_phone_number"]),
		'emp3_job_title'				 => trim($_POST["emp3_job_title"]),
		'emp3_supervisior'				 => trim($_POST["emp3_supervisior"]),
		'emp3_reason_from_leaving'		 => trim($_POST["emp3_reason_from_leaving"]),
		'emp3_from_date'				 => trim($_POST["emp3_from_date"]),
		'emp3_to_date'				     => trim($_POST["emp3_to_date"]),
		'emp3_responsibilities'			 => trim($_POST["emp3_responsibilities"]),
		'emp3_starting_salary'			 => trim($_POST["emp3_starting_salary"]),
		'emp3_ending_salary'			 => trim($_POST["emp3_ending_salary"]),
		'emp3_contact_supervisior'		 => trim($_POST["emp3_contact_supervisior"]),
	);

	$serializeArr = maybe_serialize($storedArray);

	$dataArray = array(
		'application_content' => $serializeArr,
		'application_type' 	  => $applicationType,
		'application_status'  => 1,
	);

	if( $wpdb->insert($tableName, $dataArray) )
	{
		echo "1";
		die();
	}
	else
	{
		echo '0';
		die();
	}
}
/* Job Application Form Ajax registration End */


/* Offline Application Form Ajax registration Start */
add_action('wp_ajax_act_offline_form', 'offlineApplicationForm');
add_action('wp_ajax_nopriv_act_offline_form', 'offlineApplicationForm');
function offlineApplicationForm()
{
	global $wpdb;

	$tableName     = $wpdb->prefix.'online_application_form';

	$applicationType = "Offline Job Application";
	$tmp_file		 = $_FILES["upload_file"]["tmp_name"];
	$tar_path	     = date("Y-m-d")."-".date("h-i-s").rand(0,999999999999)."-".$_FILES["upload_file"]["name"];

	$storedArray = array(
		'first_name'       => trim($_POST["first_name"]),
		'last_name'	       => trim($_POST["last_name"]),
		'email_address'    => trim($_POST["email_address"]),
		'phone_number'     => trim($_POST["phone_number"]),
		'address'	       => trim($_POST["address"]),
		'city'		       => trim($_POST["city"]),
		'postition_sought' => trim($_POST["postition_sought"]),
		'upload_file'      => $tar_path,
		'note'		       => trim($_POST["note"]),
	);

	$serializeArr = maybe_serialize($storedArray);

	$dataArray = array(
		'application_content' => $serializeArr,
		'application_type' 	  => $applicationType,
		'application_status'  => 1,
	);

	if( $wpdb->insert($tableName, $dataArray) )
	{
		$upload_path 		=  	wp_upload_dir();
		$base_directory 	= 	$upload_path['basedir'] . "/offline-application";		

		if(  !empty($upload_path) )
		{
			if( !file_exists($base_directory) )
			{
				wp_mkdir_p( $base_directory );
			}
		}
		
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );

		move_uploaded_file($tmp_file, $base_directory."/".$tar_path);

		echo "1";
		die();
	}
	else
	{
		echo '0';
		die();
	}
}
/* Offline Application Form Ajax registration End */



/* Custom Admin Menu and Page Start */

add_action('admin_menu', 'myCustomMennuPage');
function myCustomMennuPage()
{
	add_menu_page( 'KEG Order Form', 'KEG Form', 'read', 'keg_form', 'kegOrderForm', 'dashicons-media-spreadsheet' );
	add_submenu_page( 'keg_form', 'Wedding Order Form', 'Wedding Form', 'read', 'wedding_form', 'weddingOrderForm' );
	add_submenu_page( 'keg_form', 'Online Job Application', 'Online Job Application', 'read', 'online_job_application', 'onlineJobApplicationForm' );
	add_submenu_page( 'keg_form', 'Offline Job Application', 'Offline Job Application', 'read', 'offline_job_application', 'offlineJobApplicationForm' );

	function kegOrderForm()
	{
		require get_parent_theme_file_path( '/inc/custom-include/keg-order-form.php' );
		$customListTable = new Custom_List_Table();
        $customListTable->prepare_items();


        if( isset($_REQUEST["operation"]) && isset($_REQUEST["page"]) && isset($_REQUEST["view_id"]) && $_REQUEST["operation"] != "" && $_REQUEST["page"] == "keg_form" && $_REQUEST["view_id"] != "" )
        {
        	global $wpdb;
        	$table_name = $wpdb->prefix . "online_application_form";

        	$rows    =   $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE application_type = 'Keg' AND application_id = ".trim($_REQUEST["view_id"]));
        	$content = maybe_unserialize( $rows[0]->application_content);

        	function showYesNo($Variable)
        	{
        		if( $Variable == "on" )
        		{
        			return "Yes";
        		}
        		else
        		{
        			return "No";
        		}
        	}

        	foreach ($rows as $values)
        	{
        	?>

        		<table>
        			<tr>
        				<td colspan="2"><h3>Keg Order Details&nbsp;&nbsp;&nbsp;<a href="<?php echo admin_url('admin.php?page=keg_form');  ?>" class="btn btn-warning">Back to List</a></h3></td>
        			</tr>
        			<tr>
        				<td>Application ID :- </td>
        				<td><?php echo $rows[0]->application_id; ?></td>
        			</tr>
        			<tr>
        				<td>Application Registered Date :- </td>
        				<td><?php echo $rows[0]->publish_date; ?></td>
        			</tr>
        			<tr>
        				<td>Customer Name :- </td>
        				<td><?php echo $content["customer_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Phone Number :- </td>
        				<td><?php echo $content["phone_number"]; ?></td>
        			</tr>
        			<tr>
        				<td>Date Needed :- </td>
        				<td><?php echo $content["date_needed"]; ?></td>
        			</tr>
        			<tr>
        				<td>Name of KEG 1 :- </td>
        				<td><?php echo $content["name_of_keg1"]; ?></td>
        			</tr>
        			<tr>
        				<td>Size of KEG 1 :- </td>
        				<td><?php echo $content["size_of_keg1"]; ?></td>
        			</tr>
        			<tr>
        				<td>Name of KEG 2 :- </td>
        				<td><?php echo $content["name_of_keg2"]; ?></td>
        			</tr>
        			<tr>
        				<td>Size of KEG 2 :- </td>
        				<td><?php echo $content["size_of_keg2"]; ?></td>
        			</tr>
        			<tr>
        				<td>Do you need ICE? :- </td>
        				<td><?php echo showYesNo($content["you_need_ice"]);  ?></td>
        			</tr>
        			<tr>
        				<td>Do you need tap on KEG? :- </td>
        				<td><?php echo showYesNo($content["need_tap_on_keg"]);  ?></td>
        			</tr>
        			<tr>
        				<td>Order from which store? :- </td>
        				<td><?php echo $content["order_from_store"];  ?></td>
        			</tr>
        			<tr>
        				<td>Do you need bucket for KEG? :- </td>
        				<td><?php echo showYesNo($content["bucket_for_keg"]);  ?></td>
        			</tr>
        			<tr>
        				<td>No person buying a keg will be allowwing under age people to consume. :- </td>
        				<td><?php echo showYesNo($content["people_consume"]);  ?></td>
        			</tr>
        			
        		</table>
        	<?php
        	}
        }
        else
        {
        ?>
            <div class="wrap">
                <div id="icon-users" class="icon32"></div>
                <div><h2>KEG Order Form</div>
                <div id="reg_record_delete" style="background-color: #eff9f1; padding: 10px; border-left: solid #4ab866; display: none; ">Record Deleted.</div>
                <?php
            		$customListTable->search_box('Search', 'search');
            		$customListTable->display();
                ?>
            </div>
        <?php
        }
	}

	function weddingOrderForm()
	{
		require get_parent_theme_file_path( '/inc/custom-include/wedding-order-form.php' );
		$customListTable = new Custom_List_Table();
        $customListTable->prepare_items();


        if( isset($_REQUEST["operation"]) && isset($_REQUEST["page"]) && isset($_REQUEST["view_id"]) && $_REQUEST["operation"] != "" && $_REQUEST["page"] == "wedding_form" && $_REQUEST["view_id"] != "" )
        {
        	global $wpdb;
        	$table_name = $wpdb->prefix . "online_application_form";

        	$rows    =   $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE application_type = 'Wedding' AND application_id = ".trim($_REQUEST["view_id"]));
        	$content = maybe_unserialize( $rows[0]->application_content);

        	/*echo '<pre>';
        	print_r($content);*/


        	function showYesNo($Variable)
        	{
        		if( $Variable == "on" )
        		{
        			return "Yes";
        		}
        		else
        		{
        			return "No";
        		}
        	}

        	foreach ($rows as $values)
        	{
        	?>
        		<table>
        			<tr>
        				<td colspan="2"><h3>Wedding Order Details&nbsp;&nbsp;&nbsp;<a href="<?php echo admin_url('admin.php?page=wedding_form');  ?>" class="btn btn-warning">Back to List</a></h3></td>
        			</tr>
        			<tr>
        				<td>Application ID :-</td>
        				<td><?php echo $rows[0]->application_id; ?></td>
        			</tr>
        			<tr>
        				<td>Application Registered Date :-</td>
        				<td><?php echo $rows[0]->publish_date; ?></td>
        			</tr>
        			<tr>
        				<td>Customer Name :-</td>
        				<td><?php echo $content["customer_name"];  ?></td>
        			</tr>
        			<tr>
        				<td>Phone Number :-</td>
        				<td><?php echo $content["phone_number"];  ?></td>
        			</tr>
        			<tr>
        				<td>Email Address :-</td>
        				<td><?php echo $content["email_address"];  ?></td>
        			</tr>
        			<tr>
        				<td>Address Line 1 :-</td>
        				<td><?php echo $content["addressline1"];  ?></td>
        			</tr>
        			<tr>
        				<td>Address Line 2 :-</td>
        				<td><?php echo $content["addressline2"];  ?></td>
        			</tr>
        			<tr>
        				<td>Event Date :-</td>
        				<td><?php echo $content["event_date"];  ?></td>
        			</tr>
        			<tr>
        				<td>Name/Party :-</td>
        				<td><?php echo $content["name_party"];  ?></td>
        			</tr>
        			<tr>
        				<td>Type of Event :-</td>
        				<td><?php echo $content["typeofevent"];  ?></td>
        			</tr>
        			<tr>
        				<td>Event location :-</td>
        				<td><?php echo $content["event_location"];  ?></td>
        			</tr>
        			<tr>
        				<td colspan="2">Beer Request</td>
        			</tr>
        			<tr>
        				<td colspan="2">
        				<table class="table table-hover">
						  <thead>
						    <tr>
						      <th scope="col">No</th>
						      <th scope="col">Beer Name</th>
						      <th scope="col">Container Type</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php 
						  	$beerandContainer = $content["beerNameAndContainer"];
						  	$cnt=1;
						  	foreach ($beerandContainer as $Values ) 
						  	{
						  		/*if( $Values["beer_name"] != "" && $Values["container_type"]!= "" )
						  		{*/
						  		?>
								    <tr>
								      <th scope="row"><?php echo $cnt;  ?></th>
								      <td><?php echo $Values["beer_name"];  ?></td>
								      <td><?php echo $Values["container_type"];  ?></td>
								    </tr>
								<?php
								$cnt++;
								/*}*/
						  	}
						  	?>
						  </tbody>
						</table>	
        				</td>
        			</tr>
        			<tr>
        				<td>Do you need this item delivered? :-</td>
        				<td><?php echo showYesNo($content["item_elivered"]);  ?></td>
        			</tr>
        			<tr>
        				<td>Soda? :-</td>
        				<td><?php echo showYesNo($content["soda"]);  ?></td>
        			</tr>
        			<tr>
        				<td>Water? :-</td>
        				<td><?php echo showYesNo($content["Water"]);  ?></td>
        			</tr>
        			<tr>
        				<td>ICE? :-</td>
        				<td><?php echo showYesNo($content["ice"]);  ?></td>
        			</tr>
        			<tr>
        				<td>Do you need bucket for KEG? :-</td>
        				<td><?php echo showYesNo($content["bucket_for_keg"]);  ?></td>
        			</tr>
        			<tr>
        				<td>Note :-</td>
        				<td><?php echo showYesNo($content["note"]);  ?></td>
        			</tr>
        		</table>
        	<?php
        	}
        }
        else
        {
        ?>
            <div class="wrap">
                <div id="icon-users" class="icon32"></div>
                <div><h2>Wedding Order Form</div>
                <div id="reg_record_delete" style="background-color: #eff9f1; padding: 10px; border-left: solid #4ab866; display: none; ">Record Deleted.</div>
                <?php
            		$customListTable->search_box('Search', 'search');
            		$customListTable->display();
                ?>
            </div>
        <?php
        }
	}

	function onlineJobApplicationForm()
	{
		require get_parent_theme_file_path( '/inc/custom-include/online-job-application.php' );
		$customListTable = new Custom_List_Table();
        $customListTable->prepare_items();


        if( isset($_REQUEST["operation"]) && isset($_REQUEST["page"]) && isset($_REQUEST["view_id"]) && $_REQUEST["operation"] != "" && $_REQUEST["page"] == "online_job_application" && $_REQUEST["view_id"] != "" )
        {
        	global $wpdb;
        	$table_name = $wpdb->prefix . "online_application_form";

        	$rows    =   $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE application_type = 'Online Job Application' AND application_id = ".trim($_REQUEST["view_id"]));
        	$content = maybe_unserialize( $rows[0]->application_content);

        	function showYesNo($Variable)
        	{
        		if( $Variable == "on" )
        		{
        			return "Yes";
        		}
        		else
        		{
        			return "No";
        		}
        	}

        	foreach ($rows as $values)
        	{
        	?>

        		<table>
        			<tr>
        				<td colspan="2"><h3>Keg Order Details&nbsp;&nbsp;&nbsp;<a href="<?php echo admin_url('admin.php?page=online_job_application');  ?>" class="btn btn-warning">Back to List</a></h3></td>
        			</tr>
        			<tr>
        				<td colspan="2">Application Information</td>
        			</tr>
        			<tr>
        				<td>Application ID :- </td>
        				<td><?php echo $rows[0]->application_id; ?></td>
        			</tr>
        			<tr>
        				<td>Application Registered Date :- </td>
        				<td><?php echo $rows[0]->publish_date; ?></td>
        			</tr>
        			<tr>
        				<td>Last Name :- </td>
        				<td><?php echo $content["last_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>First Name :- </td>
        				<td><?php echo $content["first_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Middle Name :- </td>
        				<td><?php echo $content["middle_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Phone Number :- </td>
        				<td><?php echo $content["phone_number"]; ?></td>
        			</tr>
        			<tr>
        				<td>Email Address :- </td>
        				<td><?php echo $content["email_address"]; ?></td>
        			</tr>
        			<tr>
        				<td>Position Applied For :- </td>
        				<td><?php echo $content["position_applied_for"]; ?></td>
        			</tr>
        			<tr>
        				<td>Address Line 1 :- </td>
        				<td><?php echo $content["address_line1"]; ?></td>
        			</tr>
        			<tr>
        				<td>Address Line 2 :- </td>
        				<td><?php echo $content["address_line2"]; ?></td>
        			</tr>
        			<tr>
        				<td>City :- </td>
        				<td><?php echo $content["city"]; ?></td>
        			</tr>
        			<tr>
        				<td>State :- </td>
        				<td><?php echo $content["state"]; ?></td>
        			</tr>
        			<tr>
        				<td>Zip Code :- </td>
        				<td><?php echo $content["zip_code"]; ?></td>
        			</tr>
        			<tr>
        				<td>Date Available :- </td>
        				<td><?php echo $content["date_available"]; ?></td>
        			</tr>
        			<tr>
        				<td>Social Security Number :- </td>
        				<td><?php echo $content["social_security_number"]; ?></td>
        			</tr>
        			<tr>
        				<td>Desired Salary :- </td>
        				<td><?php echo $content["desired_salary"]; ?></td>
        			</tr>
        			<tr>
        				<td>Are you a citizen of the United States? :- </td>
        				<td><?php echo $content["citizen_of_united_state"]; ?></td>
        			</tr>
        			<tr>
        				<td>Have you ever worked for this company? :- </td>
        				<td><?php echo $content["ever_worked_for_this_company"]; ?></td>
        			</tr>
        			<tr>
        				<td>Have you ever been convicted of a felony? :- </td>
        				<td><?php echo $content["ever_been_convicted_of_a_felony"]; ?></td>
        			</tr>
        			<tr>
        				<td colspan="2">Education Information</td>
        			</tr>
        			<tr>
        				<td colspan="2">High School Information</td>
        			</tr>
        			<tr>
        				<td>Address Line 1 :- </td>
        				<td><?php echo $content["hsi_address_line1"]; ?></td>
        			</tr>
        			<tr>
        				<td>Address Line 2 :- </td>
        				<td><?php echo $content["hsi_address_line2"]; ?></td>
        			</tr>
        			<tr>
        				<td>From :- </td>
        				<td><?php echo $content["hsi_from_date"]; ?></td>
        			</tr>
        			<tr>
        				<td>To :- </td>
        				<td><?php echo $content["hsi_to_date"]; ?></td>
        			</tr>
        			<tr>
        				<td>Did you graduate from the high school ? :- </td>
        				<td><?php echo $content["hsi_gradute_from_the_highschool"]; ?></td>
        			</tr>
        			<tr>
        				<td colspan="2">Graduation Information</td>
        			</tr>
        			<tr>
        				<td>College Name :- </td>
        				<td><?php echo $content["gi_college_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Address :- </td>
        				<td><?php echo $content["gi_address"]; ?></td>
        			</tr>
        			<tr>
        				<td>From :- </td>
        				<td><?php echo $content["gi_from_date"]; ?></td>
        			</tr>
        			<tr>
        				<td>To :- </td>
        				<td><?php echo $content["gi_to_date"]; ?></td>
        			</tr>
        			<tr>
        				<td>Did you graduate from the collage? :- </td>
        				<td><?php echo $content["gi_graduate_from_the_college"]; ?></td>
        			</tr>
        			<tr>
        				<td colspan="2">Other Course Information</td>
        			</tr>
        			<tr>
        				<td>Institute Name :- </td>
        				<td><?php echo $content["oci_institute_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Address :- </td>
        				<td><?php echo $content["oci_address"]; ?></td>
        			</tr>
        			<tr>
        				<td>From :- </td>
        				<td><?php echo $content["oci_from_date"]; ?></td>
        			</tr>
        			<tr>
        				<td>To :- </td>
        				<td><?php echo $content["oci_to_date"]; ?></td>
        			</tr>
        			<tr>
        				<td>Did you graduate from the institute?  :- </td>
        				<td><?php echo $content["oci_graduate_from_the_institute"]; ?></td>
        			</tr>
        			<tr>
        				<td colspan="2">References Information</td>
        			</tr>
        			<tr>
        				<td colspan="2">References 1</td>
        			</tr>
        			<tr>
        				<td>Fullname :- </td>
        				<td><?php echo $content["ref1_full_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Relation :- </td>
        				<td><?php echo $content["ref1_relation"]; ?></td>
        			</tr>
        			<tr>
        				<td>Phone Number :- </td>
        				<td><?php echo $content["ref1_phone_number"]; ?></td>
        			</tr>
        			<tr>
        				<td>Company Name :- </td>
        				<td><?php echo $content["ref1_company_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Company Address :- </td>
        				<td><?php echo $content["ref1_company_address"]; ?></td>
        			</tr>
        			<tr>
        				<td colspan="2">References 2</td>
        			</tr>
        			<tr>
        				<td>Fullname :- </td>
        				<td><?php echo $content["ref2_full_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Relation :- </td>
        				<td><?php echo $content["ref2_relation"]; ?></td>
        			</tr>
        			<tr>
        				<td>Phone Number :- </td>
        				<td><?php echo $content["ref2_phone_number"]; ?></td>
        			</tr>
        			<tr>
        				<td>Company Name :- </td>
        				<td><?php echo $content["ref2_company_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Company Address :- </td>
        				<td><?php echo $content["ref2_company_address"]; ?></td>
        			</tr>
        			<tr>
        				<td colspan="2">References 3</td>
        			</tr>
        			<tr>
        				<td>Fullname :- </td>
        				<td><?php echo $content["ref3_full_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Relation :- </td>
        				<td><?php echo $content["ref3_relation"]; ?></td>
        			</tr>
        			<tr>
        				<td>Phone Number :- </td>
        				<td><?php echo $content["ref3_phone_number"]; ?></td>
        			</tr>
        			<tr>
        				<td>Company Name :- </td>
        				<td><?php echo $content["ref3_company_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Company Address :- </td>
        				<td><?php echo $content["ref3_company_address"]; ?></td>
        			</tr>
        			<tr>
        				<td colspan="2">Employment Information</td>
        			</tr>
        			<tr>
        				<td colspan="2">Employment 1</td>
        			</tr>
        			<tr>
        				<td>Company Name :- </td>
        				<td><?php echo $content["emp1_conpany_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Company Address :- </td>
        				<td><?php echo $content["emp1_company_address"]; ?></td>
        			</tr>
        			<tr>
        				<td>Phone Number :- </td>
        				<td><?php echo $content["emp1_phone_number"]; ?></td>
        			</tr>
        			<tr>
        				<td>Job Title :- </td>
        				<td><?php echo $content["emp1_job_title"]; ?></td>
        			</tr>
        			<tr>
        				<td>Supervisior :- </td>
        				<td><?php echo $content["emp1_supervisior"]; ?></td>
        			</tr>
        			<tr>
        				<td>Reason For Leaving :- </td>
        				<td><?php echo $content["emp1_reason_from_leaving"]; ?></td>
        			</tr>
        			<tr>
        				<td>From :- </td>
        				<td><?php echo $content["emp1_from_date"]; ?></td>
        			</tr>
        			<tr>
        				<td>To :- </td>
        				<td><?php echo $content["emp1_to_date"]; ?></td>
        			</tr>
        			<tr>
        				<td>Responsibilities :- </td>
        				<td><?php echo $content["emp1_responsibilities"]; ?></td>
        			</tr>
        			<tr>
        				<td>Starting Salary :- </td>
        				<td><?php echo $content["emp1_starting_salary"]; ?></td>
        			</tr>
        			<tr>
        				<td>Ending Salary :- </td>
        				<td><?php echo $content["emp1_ending_salary"]; ?></td>
        			</tr>
        			<tr>
        				<td>Contact Supervisior :- </td>
        				<td><?php echo $content["emp1_contact_supervisior"]; ?></td>
        			</tr>
        			<tr>
        				<td colspan="2">Employment 2</td>
        			</tr>
        			<tr>
        				<td>Company Name :- </td>
        				<td><?php echo $content["emp2_conpany_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Company Address :- </td>
        				<td><?php echo $content["emp2_company_address"]; ?></td>
        			</tr>
        			<tr>
        				<td>Phone Number :- </td>
        				<td><?php echo $content["emp2_phone_number"]; ?></td>
        			</tr>
        			<tr>
        				<td>Job Title :- </td>
        				<td><?php echo $content["emp2_job_title"]; ?></td>
        			</tr>
        			<tr>
        				<td>Supervisior :- </td>
        				<td><?php echo $content["emp2_supervisior"]; ?></td>
        			</tr>
        			<tr>
        				<td>Reason For Leaving :- </td>
        				<td><?php echo $content["emp2_reason_from_leaving"]; ?></td>
        			</tr>
        			<tr>
        				<td>From :- </td>
        				<td><?php echo $content["emp2_from_date"]; ?></td>
        			</tr>
        			<tr>
        				<td>To :- </td>
        				<td><?php echo $content["emp2_to_date"]; ?></td>
        			</tr>
        			<tr>
        				<td>Responsibilities :- </td>
        				<td><?php echo $content["emp2_responsibilities"]; ?></td>
        			</tr>
        			<tr>
        				<td>Starting Salary :- </td>
        				<td><?php echo $content["emp2_starting_salary"]; ?></td>
        			</tr>
        			<tr>
        				<td>Ending Salary :- </td>
        				<td><?php echo $content["emp2_ending_salary"]; ?></td>
        			</tr>
        			<tr>
        				<td>Contact Supervisior :- </td>
        				<td><?php echo $content["emp2_contact_supervisior"]; ?></td>
        			</tr>
        			<tr>
        				<td colspan="2">Employment 3</td>
        			</tr>
        			<tr>
        				<td>Company Name :- </td>
        				<td><?php echo $content["emp3_conpany_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Company Address :- </td>
        				<td><?php echo $content["emp3_company_address"]; ?></td>
        			</tr>
        			<tr>
        				<td>Phone Number :- </td>
        				<td><?php echo $content["emp3_phone_number"]; ?></td>
        			</tr>
        			<tr>
        				<td>Job Title :- </td>
        				<td><?php echo $content["emp3_job_title"]; ?></td>
        			</tr>
        			<tr>
        				<td>Supervisior :- </td>
        				<td><?php echo $content["emp3_supervisior"]; ?></td>
        			</tr>
        			<tr>
        				<td>Reason For Leaving :- </td>
        				<td><?php echo $content["emp3_reason_from_leaving"]; ?></td>
        			</tr>
        			<tr>
        				<td>From :- </td>
        				<td><?php echo $content["emp3_from_date"]; ?></td>
        			</tr>
        			<tr>
        				<td>To :- </td>
        				<td><?php echo $content["emp3_to_date"]; ?></td>
        			</tr>
        			<tr>
        				<td>Responsibilities :- </td>
        				<td><?php echo $content["emp3_responsibilities"]; ?></td>
        			</tr>
        			<tr>
        				<td>Starting Salary :- </td>
        				<td><?php echo $content["emp3_starting_salary"]; ?></td>
        			</tr>
        			<tr>
        				<td>Ending Salary :- </td>
        				<td><?php echo $content["emp3_ending_salary"]; ?></td>
        			</tr>
        			<tr>
        				<td>Contact Supervisior :- </td>
        				<td><?php echo $content["emp3_contact_supervisior"]; ?></td>
        			</tr>
        			
        		</table>
        	<?php
        	}
        }
        else
        {
        ?>
            <div class="wrap">
                <div id="icon-users" class="icon32"></div>
                <div><h2>Online Job Application Details</div>
                <div id="reg_record_delete" style="background-color: #eff9f1; padding: 10px; border-left: solid #4ab866; display: none; ">Record Deleted.</div>
                <?php
            		$customListTable->search_box('Search', 'search');
            		$customListTable->display();
                ?>
            </div>
        <?php
        }
	}

	function offlineJobApplicationForm()
	{
		require get_parent_theme_file_path( '/inc/custom-include/offline-job-application.php' );
		$customListTable = new Custom_List_Table();
        $customListTable->prepare_items();


        if( isset($_REQUEST["operation"]) && isset($_REQUEST["page"]) && isset($_REQUEST["view_id"]) && $_REQUEST["operation"] != "" && $_REQUEST["page"] == "offline_job_application" && $_REQUEST["view_id"] != "" )
        {
        	global $wpdb;
        	$table_name = $wpdb->prefix . "online_application_form";

        	$rows    =   $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE application_type = 'Offline Job Application' AND application_id = ".trim($_REQUEST["view_id"]));
        	$content = maybe_unserialize( $rows[0]->application_content);

        	function showYesNo($Variable)
        	{
        		if( $Variable == "on" )
        		{
        			return "Yes";
        		}
        		else
        		{
        			return "No";
        		}
        	}

        	foreach ($rows as $values)
        	{
        		$upload_path 		=  	wp_get_upload_dir();
				$base_directory 	= 	$upload_path['baseurl'] . "/offline-application";
        	?>

        		<table>
        			<tr>
        				<td colspan="2"><h3>Offline Job Application Details&nbsp;&nbsp;&nbsp;<a href="<?php echo admin_url('admin.php?page=offline_job_application');  ?>" class="btn btn-warning">Back to List</a></h3></td>
        			</tr>
        			<tr>
        				<td>Application ID :- </td>
        				<td><?php echo $rows[0]->application_id; ?></td>
        			</tr>
        			<tr>
        				<td>Application Registered Date :- </td>
        				<td><?php echo $rows[0]->publish_date; ?></td>
        			</tr>
        			<tr>
        				<td>First Name :- </td>
        				<td><?php echo $content["first_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Last Name :- </td>
        				<td><?php echo $content["last_name"]; ?></td>
        			</tr>
        			<tr>
        				<td>Email Address :- </td>
        				<td><?php echo $content["email_address"]; ?></td>
        			</tr>
        			<tr>
        				<td>Phone Number :- </td>
        				<td><?php echo $content["phone_number"]; ?></td>
        			</tr>
        			<tr>
        				<td>Address :- </td>
        				<td><?php echo $content["address"]; ?></td>
        			</tr>
        			<tr>
        				<td>City :- </td>
        				<td><?php echo $content["city"]; ?></td>
        			</tr>
        			<tr>
        				<td>Position Sought :- </td>
        				<td><?php echo $content["postition_sought"]; ?></td>
        			</tr>
        			<tr>
        				<td>Note :- </td>
        				<td><?php echo $content["note"]; ?></td>
        			</tr>
        			<tr>
        				<td>Resume Link :- </td>
        				<td><a href="<?php echo $base_directory."/".$content["upload_file"]; ?>">Download</a></td>
        			</tr>
        		</table>
        	<?php
        	}
        }
        else
        {
        ?>
            <div class="wrap">
                <div id="icon-users" class="icon32"></div>
                <div><h2>Offline Job Application Form</div>
                <div id="reg_record_delete" style="background-color: #eff9f1; padding: 10px; border-left: solid #4ab866; display: none; ">Record Deleted.</div>
                <?php
            		$customListTable->search_box('Search', 'search');
            		$customListTable->display();
                ?>
            </div>
        <?php
        }
	}


}

/* Custom Admin Menu and Page End */



add_action( 'wp_ajax_act_load_more', 'fnLoadMore' );
add_action( 'wp_ajax_nopriv_act_load_more', 'fnLoadMore' );

function fnLoadMore()
{
	$paged  = $_POST['page'];
	$Args   =   array(
        'post_type'         =>  'events',
        'post_status'       =>  'publish',
        'posts_per_page'    =>  3,
        'order'             =>  'DESC',
        'paged' 			=>  $paged
    );

    $Result =   new WP_Query($Args);

    if( $Result->have_posts() ):
        while( $Result->have_posts() ): $Result->the_post();
            ?>
            <div class="col">
                <a href="<?php the_permalink();  ?>" class="eventsbox">
                    <figure class="bgimg">
                        <img src="<?php echo get_template_directory_uri();  ?>/images/eventsimg1.jpg" alt="">
                    </figure>
                    <span class="location"><?php the_field("acf_events_location"); ?></span>
                    <div class="eventsboxtext">
                        <span class="eventdate"><?php echo get_the_date( 'j' );  ?><sup><?php echo get_the_date( 'F Y' );  ?></sup></span>
                        <h3><?php the_title();  ?></h3>
                        <span class="hostedby"><?php the_field("acf_events_hosted_by"); ?></span>
                        <span class="eventarrow"></span>
                    </div><!-- eventsboxtext -->
                </a><!-- eventsbox -->
            </div>
            <?php
        endwhile;
    endif;
    wp_reset_postdata();
    exit;
}


add_action('acf/render_field_settings/type=text', 'add_readonly_and_disabled_to_text_field');
  function add_readonly_and_disabled_to_text_field($field) {
    acf_render_field_setting( $field, array(
      'label'      => __('Read Only?','acf'),
      'instructions'  => '',
      'type'      => 'radio',
      'name'      => 'readonly',
      'choices'    => array(
        1        => __("Yes",'acf'),
        0        => __("No",'acf'),
      ),
      'layout'  =>  'horizontal',
    ));
  }