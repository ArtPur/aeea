<?php
require_once(getabspath("classes/cipherer.php"));




$tdataprovinces = array();	
	$tdataprovinces[".truncateText"] = true;
	$tdataprovinces[".NumberOfChars"] = 80; 
	$tdataprovinces[".ShortName"] = "provinces";
	$tdataprovinces[".OwnerID"] = "Country ISO";
	$tdataprovinces[".OriginalTable"] = "provinces";

//	field labels
$fieldLabelsprovinces = array();
$fieldToolTipsprovinces = array();
$pageTitlesprovinces = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprovinces["English"] = array();
	$fieldToolTipsprovinces["English"] = array();
	$pageTitlesprovinces["English"] = array();
	$fieldLabelsprovinces["English"]["Privince_ISO"] = "Privince Iso";
	$fieldToolTipsprovinces["English"]["Privince ISO"] = "";
	$fieldLabelsprovinces["English"]["Country_ISO"] = "Country Iso";
	$fieldToolTipsprovinces["English"]["Country ISO"] = "";
	$fieldLabelsprovinces["English"]["Province"] = "Province";
	$fieldToolTipsprovinces["English"]["Province"] = "";
	$fieldLabelsprovinces["English"]["province"] = "Province";
	$fieldToolTipsprovinces["English"]["province"] = "";
	if (count($fieldToolTipsprovinces["English"]))
		$tdataprovinces[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsprovinces[""] = array();
	$fieldToolTipsprovinces[""] = array();
	$pageTitlesprovinces[""] = array();
	$fieldLabelsprovinces[""]["Privince_ISO"] = "Privince Iso";
	$fieldToolTipsprovinces[""]["Privince ISO"] = "";
	$fieldLabelsprovinces[""]["Country_ISO"] = "Country Iso";
	$fieldToolTipsprovinces[""]["Country ISO"] = "";
	$fieldLabelsprovinces[""]["Province"] = "Province";
	$fieldToolTipsprovinces[""]["Province"] = "";
	if (count($fieldToolTipsprovinces[""]))
		$tdataprovinces[".isUseToolTips"] = true;
}
	
	
	$tdataprovinces[".NCSearch"] = true;


$tdataprovinces[".scrollGridBody"] = true;	

$tdataprovinces[".shortTableName"] = "provinces";
$tdataprovinces[".nSecOptions"] = 1;
$tdataprovinces[".recsPerRowList"] = 1;
$tdataprovinces[".mainTableOwnerID"] = "Country ISO";
$tdataprovinces[".moveNext"] = 1;
$tdataprovinces[".nType"] = 0;

$tdataprovinces[".strOriginalTableName"] = "provinces";




$tdataprovinces[".showAddInPopup"] = false;

$tdataprovinces[".showEditInPopup"] = false;

$tdataprovinces[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprovinces[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprovinces[".fieldsForRegister"] = array();

$tdataprovinces[".listAjax"] = false;

	$tdataprovinces[".audit"] = false;

	$tdataprovinces[".locking"] = false;

$tdataprovinces[".edit"] = true;

$tdataprovinces[".list"] = true;

$tdataprovinces[".inlineEdit"] = true;
$tdataprovinces[".inlineAdd"] = true;
$tdataprovinces[".view"] = true;

$tdataprovinces[".import"] = true;

$tdataprovinces[".exportTo"] = true;

$tdataprovinces[".printFriendly"] = true;

$tdataprovinces[".delete"] = true;

$tdataprovinces[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataprovinces[".searchSaving"] = false;
//

$tdataprovinces[".showSearchPanel"] = true;
		$tdataprovinces[".flexibleSearch"] = true;		

if (isMobile())
	$tdataprovinces[".isUseAjaxSuggest"] = false;
else 
	$tdataprovinces[".isUseAjaxSuggest"] = true;

$tdataprovinces[".rowHighlite"] = true;



$tdataprovinces[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprovinces[".isUseTimeForSearch"] = false;





$tdataprovinces[".allSearchFields"] = array();
$tdataprovinces[".filterFields"] = array();
$tdataprovinces[".requiredSearchFields"] = array();

$tdataprovinces[".allSearchFields"][] = "Privince ISO";
	$tdataprovinces[".allSearchFields"][] = "Country ISO";
	$tdataprovinces[".allSearchFields"][] = "Province";
	

$tdataprovinces[".googleLikeFields"] = array();
$tdataprovinces[".googleLikeFields"][] = "Privince ISO";
$tdataprovinces[".googleLikeFields"][] = "Country ISO";
$tdataprovinces[".googleLikeFields"][] = "Province";


$tdataprovinces[".advSearchFields"] = array();
$tdataprovinces[".advSearchFields"][] = "Privince ISO";
$tdataprovinces[".advSearchFields"][] = "Country ISO";
$tdataprovinces[".advSearchFields"][] = "Province";

$tdataprovinces[".tableType"] = "list";

$tdataprovinces[".printerPageOrientation"] = 0;
$tdataprovinces[".nPrinterPageScale"] = 100;

$tdataprovinces[".nPrinterSplitRecords"] = 40;

$tdataprovinces[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataprovinces[".pageSize"] = 20;

$tdataprovinces[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY province, country_id";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprovinces[".strOrderBy"] = $tstrOrderBy;

$tdataprovinces[".orderindexes"] = array();
$tdataprovinces[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "province");
$tdataprovinces[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "country_id");

$tdataprovinces[".sqlHead"] = "SELECT province_id AS `Privince ISO`,  country_id AS `Country ISO`,  province AS Province";
$tdataprovinces[".sqlFrom"] = "FROM provinces";
$tdataprovinces[".sqlWhereExpr"] = "";
$tdataprovinces[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprovinces[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprovinces[".arrGroupsPerPage"] = $arrGPP;

$tdataprovinces[".highlightSearchResults"] = true;

$tableKeysprovinces = array();
$tableKeysprovinces[] = "province";
$tdataprovinces[".Keys"] = $tableKeysprovinces;

$tdataprovinces[".listFields"] = array();
$tdataprovinces[".listFields"][] = "Privince ISO";
$tdataprovinces[".listFields"][] = "Country ISO";
$tdataprovinces[".listFields"][] = "Province";

$tdataprovinces[".hideMobileList"] = array();


$tdataprovinces[".viewFields"] = array();
$tdataprovinces[".viewFields"][] = "Privince ISO";
$tdataprovinces[".viewFields"][] = "Country ISO";
$tdataprovinces[".viewFields"][] = "Province";

$tdataprovinces[".addFields"] = array();
$tdataprovinces[".addFields"][] = "Province";

$tdataprovinces[".inlineAddFields"] = array();
$tdataprovinces[".inlineAddFields"][] = "Province";

$tdataprovinces[".editFields"] = array();
$tdataprovinces[".editFields"][] = "Privince ISO";
$tdataprovinces[".editFields"][] = "Country ISO";
$tdataprovinces[".editFields"][] = "Province";

$tdataprovinces[".inlineEditFields"] = array();
$tdataprovinces[".inlineEditFields"][] = "Privince ISO";
$tdataprovinces[".inlineEditFields"][] = "Country ISO";
$tdataprovinces[".inlineEditFields"][] = "Province";

$tdataprovinces[".exportFields"] = array();
$tdataprovinces[".exportFields"][] = "Privince ISO";
$tdataprovinces[".exportFields"][] = "Country ISO";
$tdataprovinces[".exportFields"][] = "Province";

$tdataprovinces[".importFields"] = array();
$tdataprovinces[".importFields"][] = "Privince ISO";
$tdataprovinces[".importFields"][] = "Country ISO";
$tdataprovinces[".importFields"][] = "Province";

$tdataprovinces[".printFields"] = array();
$tdataprovinces[".printFields"][] = "Privince ISO";
$tdataprovinces[".printFields"][] = "Country ISO";
$tdataprovinces[".printFields"][] = "Province";

//	Privince ISO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Privince ISO";
	$fdata["GoodName"] = "Privince_ISO";
	$fdata["ownerTable"] = "provinces";
	$fdata["Label"] = GetFieldLabel("provinces","Privince_ISO"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "province_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "province_id";
	
		
		
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

	

	
	$tdataprovinces["Privince ISO"] = $fdata;
//	Country ISO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Country ISO";
	$fdata["GoodName"] = "Country_ISO";
	$fdata["ownerTable"] = "provinces";
	$fdata["Label"] = GetFieldLabel("provinces","Country_ISO"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
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

	

	
	$tdataprovinces["Country ISO"] = $fdata;
//	Province
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Province";
	$fdata["GoodName"] = "Province";
	$fdata["ownerTable"] = "provinces";
	$fdata["Label"] = GetFieldLabel("provinces","Province"); 
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
	
		$fdata["strField"] = "province"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "province";
	
		
		
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
			$edata["EditParams"].= " maxlength=54";
	
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

	

	
	$tdataprovinces["Province"] = $fdata;

	
$tables_data["provinces"]=&$tdataprovinces;
$field_labels["provinces"] = &$fieldLabelsprovinces;
$fieldToolTips["provinces"] = &$fieldToolTipsprovinces;
$page_titles["provinces"] = &$pageTitlesprovinces;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["provinces"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["provinces"] = array();


	
				$strOriginalDetailsTable="country";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="country";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "country";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["provinces"][0] = $masterParams;	
				$masterTablesData["provinces"][0]["masterKeys"] = array();
	$masterTablesData["provinces"][0]["masterKeys"][]="country_id";
				$masterTablesData["provinces"][0]["detailKeys"] = array();
	$masterTablesData["provinces"][0]["detailKeys"][]="country_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_provinces()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "province_id AS `Privince ISO`,  country_id AS `Country ISO`,  province AS Province";
$proto0["m_strFrom"] = "FROM provinces";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY province, country_id";
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
	"m_strName" => "province_id",
	"m_strTable" => "provinces",
	"m_srcTableName" => "provinces"
));

$proto5["m_sql"] = "province_id";
$proto5["m_srcTableName"] = "provinces";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Privince ISO";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "provinces",
	"m_srcTableName" => "provinces"
));

$proto7["m_sql"] = "country_id";
$proto7["m_srcTableName"] = "provinces";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "Country ISO";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "province",
	"m_strTable" => "provinces",
	"m_srcTableName" => "provinces"
));

$proto9["m_sql"] = "province";
$proto9["m_srcTableName"] = "provinces";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Province";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "provinces";
$proto12["m_srcTableName"] = "provinces";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "province_id";
$proto12["m_columns"][] = "country_id";
$proto12["m_columns"][] = "province";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "provinces";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "provinces";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto15=array();
						$obj = new SQLField(array(
	"m_strName" => "province",
	"m_strTable" => "provinces",
	"m_srcTableName" => "provinces"
));

$proto15["m_column"]=$obj;
$proto15["m_bAsc"] = 1;
$proto15["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto15);

$proto0["m_orderby"][]=$obj;					
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "provinces",
	"m_srcTableName" => "provinces"
));

$proto17["m_column"]=$obj;
$proto17["m_bAsc"] = 1;
$proto17["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto17);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="provinces";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_provinces = createSqlQuery_provinces();


	
			
	
$tdataprovinces[".sqlquery"] = $queryData_provinces;

$tableEvents["provinces"] = new eventsBase;
$tdataprovinces[".hasEvents"] = false;

?>