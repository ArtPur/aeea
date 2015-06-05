<?php
function DisplayMasterTableInfoForPrint_country($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "country";
	$xt->eventsObject = getEventObject($tName);

	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "provinces" )
	{
		$keysAssoc["country_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("country_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("country_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("country_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("country","country_id").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["country"]));
	
	$xt->assign("ISO_number_mastervalue", $viewControls->showDBValue("ISO number", $data, $keylink));
	$format = $settings->getViewFormat("ISO number");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ISO number")))
		$class = ' rnr-field-number';
		
	$xt->assign("ISO_number_class", $class); // add class for field header as field value
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

	$layout = GetPageLayout("country", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("country", "masterprint"));
}

?>