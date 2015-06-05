<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacountry = array();	
	$tdatacountry[".truncateText"] = true;
	$tdatacountry[".NumberOfChars"] = 80; 
	$tdatacountry[".ShortName"] = "country";
	$tdatacountry[".OwnerID"] = "Country";
	$tdatacountry[".OriginalTable"] = "country";

//	field labels
$fieldLabelscountry = array();
$fieldToolTipscountry = array();
$pageTitlescountry = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscountry["English"] = array();
	$fieldToolTipscountry["English"] = array();
	$pageTitlescountry["English"] = array();
	$fieldLabelscountry["English"]["Country"] = "Country";
	$fieldToolTipscountry["English"]["Country"] = "Country";
	$fieldLabelscountry["English"]["ISO_number"] = "ISO Number";
	$fieldToolTipscountry["English"]["ISO number"] = "Country ISO number";
	$fieldLabelscountry["English"]["country"] = "Country";
	$fieldToolTipscountry["English"]["country"] = "";
	if (count($fieldToolTipscountry["English"]))
		$tdatacountry[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscountry[""] = array();
	$fieldToolTipscountry[""] = array();
	$pageTitlescountry[""] = array();
	$fieldLabelscountry[""]["ISO_number"] = "ISO Number";
	$fieldToolTipscountry[""]["ISO number"] = "";
	$fieldLabelscountry[""]["country"] = "Country";
	$fieldToolTipscountry[""]["country"] = "";
	if (count($fieldToolTipscountry[""]))
		$tdatacountry[".isUseToolTips"] = true;
}
	
	
	$tdatacountry[".NCSearch"] = true;


$tdatacountry[".scrollGridBody"] = true;	

$tdatacountry[".shortTableName"] = "country";
$tdatacountry[".nSecOptions"] = 1;
$tdatacountry[".recsPerRowList"] = 1;
$tdatacountry[".mainTableOwnerID"] = "Country";
$tdatacountry[".moveNext"] = 1;
$tdatacountry[".nType"] = 0;

$tdatacountry[".strOriginalTableName"] = "country";




$tdatacountry[".showAddInPopup"] = false;

$tdatacountry[".showEditInPopup"] = false;

$tdatacountry[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacountry[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacountry[".fieldsForRegister"] = array();

$tdatacountry[".listAjax"] = false;

	$tdatacountry[".audit"] = false;

	$tdatacountry[".locking"] = false;

$tdatacountry[".edit"] = true;

$tdatacountry[".list"] = true;

$tdatacountry[".inlineEdit"] = true;
$tdatacountry[".inlineAdd"] = true;
$tdatacountry[".view"] = true;

$tdatacountry[".import"] = true;

$tdatacountry[".exportTo"] = true;

$tdatacountry[".printFriendly"] = true;

$tdatacountry[".delete"] = true;

$tdatacountry[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacountry[".searchSaving"] = false;
//

$tdatacountry[".showSearchPanel"] = true;
		$tdatacountry[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacountry[".isUseAjaxSuggest"] = false;
else 
	$tdatacountry[".isUseAjaxSuggest"] = true;

$tdatacountry[".rowHighlite"] = true;



$tdatacountry[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacountry[".isUseTimeForSearch"] = false;



$tdatacountry[".useDetailsPreview"] = true;


$tdatacountry[".allSearchFields"] = array();
$tdatacountry[".filterFields"] = array();
$tdatacountry[".requiredSearchFields"] = array();

$tdatacountry[".allSearchFields"][] = "ISO number";
	$tdatacountry[".allSearchFields"][] = "Country";
	

$tdatacountry[".googleLikeFields"] = array();
$tdatacountry[".googleLikeFields"][] = "ISO number";
$tdatacountry[".googleLikeFields"][] = "Country";


$tdatacountry[".advSearchFields"] = array();
$tdatacountry[".advSearchFields"][] = "ISO number";
$tdatacountry[".advSearchFields"][] = "Country";

$tdatacountry[".tableType"] = "list";

$tdatacountry[".printerPageOrientation"] = 0;
$tdatacountry[".nPrinterPageScale"] = 100;

$tdatacountry[".nPrinterSplitRecords"] = 40;

$tdatacountry[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatacountry[".pageSize"] = 20;

$tdatacountry[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY country";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacountry[".strOrderBy"] = $tstrOrderBy;

$tdatacountry[".orderindexes"] = array();
$tdatacountry[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "country");

$tdatacountry[".sqlHead"] = "SELECT country_id AS `ISO number`,  country AS Country";
$tdatacountry[".sqlFrom"] = "FROM country";
$tdatacountry[".sqlWhereExpr"] = "";
$tdatacountry[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacountry[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacountry[".arrGroupsPerPage"] = $arrGPP;

$tdatacountry[".highlightSearchResults"] = true;

$tableKeyscountry = array();
$tableKeyscountry[] = "country";
$tdatacountry[".Keys"] = $tableKeyscountry;

$tdatacountry[".listFields"] = array();
$tdatacountry[".listFields"][] = "ISO number";
$tdatacountry[".listFields"][] = "Country";

$tdatacountry[".hideMobileList"] = array();


$tdatacountry[".viewFields"] = array();
$tdatacountry[".viewFields"][] = "ISO number";
$tdatacountry[".viewFields"][] = "Country";

$tdatacountry[".addFields"] = array();
$tdatacountry[".addFields"][] = "ISO number";
$tdatacountry[".addFields"][] = "Country";

$tdatacountry[".inlineAddFields"] = array();
$tdatacountry[".inlineAddFields"][] = "ISO number";
$tdatacountry[".inlineAddFields"][] = "Country";

$tdatacountry[".editFields"] = array();
$tdatacountry[".editFields"][] = "ISO number";
$tdatacountry[".editFields"][] = "Country";

$tdatacountry[".inlineEditFields"] = array();
$tdatacountry[".inlineEditFields"][] = "ISO number";
$tdatacountry[".inlineEditFields"][] = "Country";

$tdatacountry[".exportFields"] = array();
$tdatacountry[".exportFields"][] = "ISO number";
$tdatacountry[".exportFields"][] = "Country";

$tdatacountry[".importFields"] = array();
$tdatacountry[".importFields"][] = "ISO number";
$tdatacountry[".importFields"][] = "Country";

$tdatacountry[".printFields"] = array();
$tdatacountry[".printFields"][] = "ISO number";
$tdatacountry[".printFields"][] = "Country";

//	ISO number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ISO number";
	$fdata["GoodName"] = "ISO_number";
	$fdata["ownerTable"] = "country";
	$fdata["Label"] = GetFieldLabel("country","ISO_number"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "country_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacountry["ISO number"] = $fdata;
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "country";
	$fdata["Label"] = GetFieldLabel("country","Country"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "country"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacountry["Country"] = $fdata;

	
$tables_data["country"]=&$tdatacountry;
$field_labels["country"] = &$fieldLabelscountry;
$fieldToolTips["country"] = &$fieldToolTipscountry;
$page_titles["country"] = &$pageTitlescountry;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["country"] = array();
//	provinces
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="provinces";
		$detailsParam["dOriginalTable"] = "provinces";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "provinces";
	$detailsParam["dCaptionTable"] = GetTableCaption("provinces");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = true;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["country"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["country"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["country"][$dIndex]["masterKeys"][]="country_id";

				$detailsTablesData["country"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["country"][$dIndex]["detailKeys"][]="country_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["country"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_country()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "country_id AS `ISO number`,  country AS Country";
$proto0["m_strFrom"] = "FROM country";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY country";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "country",
	"m_srcTableName" => "country"
));

$proto5["m_sql"] = "country_id";
$proto5["m_srcTableName"] = "country";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "ISO number";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "country",
	"m_srcTableName" => "country"
));

$proto7["m_sql"] = "country";
$proto7["m_srcTableName"] = "country";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "Country";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "country";
$proto10["m_srcTableName"] = "country";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "country_id";
$proto10["m_columns"][] = "country";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "country";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "country";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto13=array();
						$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "country",
	"m_srcTableName" => "country"
));

$proto13["m_column"]=$obj;
$proto13["m_bAsc"] = 1;
$proto13["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto13);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="country";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_country = createSqlQuery_country();


	
		
	
$tdatacountry[".sqlquery"] = $queryData_country;

include_once(getabspath("include/country_events.php"));
$tableEvents["country"] = new eventclass_country;
$tdatacountry[".hasEvents"] = true;

?>