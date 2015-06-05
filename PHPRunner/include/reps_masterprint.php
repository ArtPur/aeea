<?php
function DisplayMasterTableInfoForPrint_reps($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "reps";
	$xt->eventsObject = getEventObject($tName);

	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "school" )
	{
		$keysAssoc["rep_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("rep_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("rep_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("rep_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("reps","rep_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( !$where )
		return;

	$str = SecuritySQL("Export", $tName );
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["rep_id"]));
	
	$xt->assign("First_Name_mastervalue", $viewControls->showDBValue("First Name", $data, $keylink));
	$format = $settings->getViewFormat("First Name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("First Name")))
		$class = ' rnr-field-number';
		
	$xt->assign("First_Name_class", $class); // add class for field header as field value
	$xt->assign("Last_Name_mastervalue", $viewControls->showDBValue("Last Name", $data, $keylink));
	$format = $settings->getViewFormat("Last Name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Last Name")))
		$class = ' rnr-field-number';
		
	$xt->assign("Last_Name_class", $class); // add class for field header as field value
	$xt->assign("Passport_Number_mastervalue", $viewControls->showDBValue("Passport Number", $data, $keylink));
	$format = $settings->getViewFormat("Passport Number");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Passport Number")))
		$class = ' rnr-field-number';
		
	$xt->assign("Passport_Number_class", $class); // add class for field header as field value
	$xt->assign("P__O__Box_mastervalue", $viewControls->showDBValue("P. O. Box", $data, $keylink));
	$format = $settings->getViewFormat("P. O. Box");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("P. O. Box")))
		$class = ' rnr-field-number';
		
	$xt->assign("P__O__Box_class", $class); // add class for field header as field value
	$xt->assign("Address_mastervalue", $viewControls->showDBValue("Address", $data, $keylink));
	$format = $settings->getViewFormat("Address");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Address")))
		$class = ' rnr-field-number';
		
	$xt->assign("Address_class", $class); // add class for field header as field value
	$xt->assign("City_mastervalue", $viewControls->showDBValue("City", $data, $keylink));
	$format = $settings->getViewFormat("City");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("City")))
		$class = ' rnr-field-number';
		
	$xt->assign("City_class", $class); // add class for field header as field value
	$xt->assign("Province_mastervalue", $viewControls->showDBValue("Province", $data, $keylink));
	$format = $settings->getViewFormat("Province");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Province")))
		$class = ' rnr-field-number';
		
	$xt->assign("Province_class", $class); // add class for field header as field value
	$xt->assign("Country_mastervalue", $viewControls->showDBValue("Country", $data, $keylink));
	$format = $settings->getViewFormat("Country");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Country")))
		$class = ' rnr-field-number';
		
	$xt->assign("Country_class", $class); // add class for field header as field value
	$xt->assign("Postal_code_mastervalue", $viewControls->showDBValue("Postal code", $data, $keylink));
	$format = $settings->getViewFormat("Postal code");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Postal code")))
		$class = ' rnr-field-number';
		
	$xt->assign("Postal_code_class", $class); // add class for field header as field value
	$xt->assign("Home_Phone_mastervalue", $viewControls->showDBValue("Home Phone", $data, $keylink));
	$format = $settings->getViewFormat("Home Phone");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Home Phone")))
		$class = ' rnr-field-number';
		
	$xt->assign("Home_Phone_class", $class); // add class for field header as field value
	$xt->assign("Work_Phone_mastervalue", $viewControls->showDBValue("Work Phone", $data, $keylink));
	$format = $settings->getViewFormat("Work Phone");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Work Phone")))
		$class = ' rnr-field-number';
		
	$xt->assign("Work_Phone_class", $class); // add class for field header as field value
	$xt->assign("Cell_Phone_mastervalue", $viewControls->showDBValue("Cell Phone", $data, $keylink));
	$format = $settings->getViewFormat("Cell Phone");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Cell Phone")))
		$class = ' rnr-field-number';
		
	$xt->assign("Cell_Phone_class", $class); // add class for field header as field value
	$xt->assign("E_mail_mastervalue", $viewControls->showDBValue("E-mail", $data, $keylink));
	$format = $settings->getViewFormat("E-mail");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("E-mail")))
		$class = ' rnr-field-number';
		
	$xt->assign("E_mail_class", $class); // add class for field header as field value
	$xt->assign("Birthdate_mastervalue", $viewControls->showDBValue("Birthdate", $data, $keylink));
	$format = $settings->getViewFormat("Birthdate");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Birthdate")))
		$class = ' rnr-field-number';
		
	$xt->assign("Birthdate_class", $class); // add class for field header as field value
	$xt->assign("Photo_mastervalue", $viewControls->showDBValue("Photo", $data, $keylink));
	$format = $settings->getViewFormat("Photo");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Photo")))
		$class = ' rnr-field-number';
		
	$xt->assign("Photo_class", $class); // add class for field header as field value
	$xt->assign("Username_mastervalue", $viewControls->showDBValue("Username", $data, $keylink));
	$format = $settings->getViewFormat("Username");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Username")))
		$class = ' rnr-field-number';
		
	$xt->assign("Username_class", $class); // add class for field header as field value
	$xt->assign("Password_mastervalue", $viewControls->showDBValue("Password", $data, $keylink));
	$format = $settings->getViewFormat("Password");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Password")))
		$class = ' rnr-field-number';
		
	$xt->assign("Password_class", $class); // add class for field header as field value
	$xt->assign("Group_mastervalue", $viewControls->showDBValue("Group", $data, $keylink));
	$format = $settings->getViewFormat("Group");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Group")))
		$class = ' rnr-field-number';
		
	$xt->assign("Group_class", $class); // add class for field header as field value
	$xt->assign("Date_Created_mastervalue", $viewControls->showDBValue("Date Created", $data, $keylink));
	$format = $settings->getViewFormat("Date Created");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Date Created")))
		$class = ' rnr-field-number';
		
	$xt->assign("Date_Created_class", $class); // add class for field header as field value
	$xt->assign("rep_id_mastervalue", $viewControls->showDBValue("rep_id", $data, $keylink));
	$format = $settings->getViewFormat("rep_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("rep_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("rep_id_class", $class); // add class for field header as field value

	$layout = GetPageLayout("reps", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("reps", "masterprint"));
}

?>