<?php
require_once(getabspath("classes/cipherer.php"));




$tdataschool_type = array();	
	$tdataschool_type[".truncateText"] = true;
	$tdataschool_type[".NumberOfChars"] = 80; 
	$tdataschool_type[".ShortName"] = "school_type";
	$tdataschool_type[".OwnerID"] = "School Type";
	$tdataschool_type[".OriginalTable"] = "school_type";

//	field labels
$fieldLabelsschool_type = array();
$fieldToolTipsschool_type = array();
$pageTitlesschool_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsschool_type["English"] = array();
	$fieldToolTipsschool_type["English"] = array();
	$pageTitlesschool_type["English"] = array();
	$fieldLabelsschool_type["English"]["School_Type"] = "School Type";
	$fieldToolTipsschool_type["English"]["School Type"] = "";
	$fieldLabelsschool_type["English"]["type_id"] = "Type Id";
	$fieldToolTipsschool_type["English"]["type_id"] = "";
	if (count($fieldToolTipsschool_type["English"]))
		$tdataschool_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsschool_type[""] = array();
	$fieldToolTipsschool_type[""] = array();
	$pageTitlesschool_type[""] = array();
	$fieldLabelsschool_type[""]["School_Type"] = "School Type";
	$fieldToolTipsschool_type[""]["School Type"] = "";
	$fieldLabelsschool_type[""]["type_id"] = "Type Id";
	$fieldToolTipsschool_type[""]["type_id"] = "";
	if (count($fieldToolTipsschool_type[""]))
		$tdataschool_type[".isUseToolTips"] = true;
}
	
	
	$tdataschool_type[".NCSearch"] = true;


$tdataschool_type[".scrollGridBody"] = true;	

$tdataschool_type[".shortTableName"] = "school_type";
$tdataschool_type[".nSecOptions"] = 1;
$tdataschool_type[".recsPerRowList"] = 1;
$tdataschool_type[".mainTableOwnerID"] = "School Type";
$tdataschool_type[".moveNext"] = 1;
$tdataschool_type[".nType"] = 0;

$tdataschool_type[".strOriginalTableName"] = "school_type";




$tdataschool_type[".showAddInPopup"] = false;

$tdataschool_type[".showEditInPopup"] = false;

$tdataschool_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataschool_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataschool_type[".fieldsForRegister"] = array();

$tdataschool_type[".listAjax"] = false;

	$tdataschool_type[".audit"] = false;

	$tdataschool_type[".locking"] = false;

$tdataschool_type[".edit"] = true;

$tdataschool_type[".list"] = true;

$tdataschool_type[".inlineEdit"] = true;
$tdataschool_type[".inlineAdd"] = true;
$tdataschool_type[".view"] = true;

$tdataschool_type[".import"] = true;

$tdataschool_type[".exportTo"] = true;

$tdataschool_type[".printFriendly"] = true;

$tdataschool_type[".delete"] = true;

$tdataschool_type[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataschool_type[".searchSaving"] = false;
//

$tdataschool_type[".showSearchPanel"] = true;
		$tdataschool_type[".flexibleSearch"] = true;		

if (isMobile())
	$tdataschool_type[".isUseAjaxSuggest"] = false;
else 
	$tdataschool_type[".isUseAjaxSuggest"] = true;

$tdataschool_type[".rowHighlite"] = true;



$tdataschool_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdataschool_type[".isUseTimeForSearch"] = false;





$tdataschool_type[".allSearchFields"] = array();
$tdataschool_type[".filterFields"] = array();
$tdataschool_type[".requiredSearchFields"] = array();

$tdataschool_type[".allSearchFields"][] = "School Type";
	$tdataschool_type[".allSearchFields"][] = "type_id";
	

$tdataschool_type[".googleLikeFields"] = array();
$tdataschool_type[".googleLikeFields"][] = "School Type";
$tdataschool_type[".googleLikeFields"][] = "type_id";


$tdataschool_type[".advSearchFields"] = array();
$tdataschool_type[".advSearchFields"][] = "School Type";
$tdataschool_type[".advSearchFields"][] = "type_id";

$tdataschool_type[".tableType"] = "list";

$tdataschool_type[".printerPageOrientation"] = 0;
$tdataschool_type[".nPrinterPageScale"] = 100;

$tdataschool_type[".nPrinterSplitRecords"] = 40;

$tdataschool_type[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataschool_type[".pageSize"] = 20;

$tdataschool_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataschool_type[".strOrderBy"] = $tstrOrderBy;

$tdataschool_type[".orderindexes"] = array();

$tdataschool_type[".sqlHead"] = "SELECT school_type AS `School Type`,  type_id";
$tdataschool_type[".sqlFrom"] = "FROM school_type";
$tdataschool_type[".sqlWhereExpr"] = "";
$tdataschool_type[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataschool_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataschool_type[".arrGroupsPerPage"] = $arrGPP;

$tdataschool_type[".highlightSearchResults"] = true;

$tableKeysschool_type = array();
$tableKeysschool_type[] = "type_id";
$tdataschool_type[".Keys"] = $tableKeysschool_type;

$tdataschool_type[".listFields"] = array();
$tdataschool_type[".listFields"][] = "type_id";
$tdataschool_type[".listFields"][] = "School Type";

$tdataschool_type[".hideMobileList"] = array();


$tdataschool_type[".viewFields"] = array();
$tdataschool_type[".viewFields"][] = "School Type";
$tdataschool_type[".viewFields"][] = "type_id";

$tdataschool_type[".addFields"] = array();
$tdataschool_type[".addFields"][] = "School Type";

$tdataschool_type[".inlineAddFields"] = array();
$tdataschool_type[".inlineAddFields"][] = "School Type";

$tdataschool_type[".editFields"] = array();
$tdataschool_type[".editFields"][] = "School Type";

$tdataschool_type[".inlineEditFields"] = array();
$tdataschool_type[".inlineEditFields"][] = "School Type";

$tdataschool_type[".exportFields"] = array();
$tdataschool_type[".exportFields"][] = "School Type";
$tdataschool_type[".exportFields"][] = "type_id";

$tdataschool_type[".importFields"] = array();
$tdataschool_type[".importFields"][] = "School Type";
$tdataschool_type[".importFields"][] = "type_id";

$tdataschool_type[".printFields"] = array();
$tdataschool_type[".printFields"][] = "type_id";
$tdataschool_type[".printFields"][] = "School Type";

//	School Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "School Type";
	$fdata["GoodName"] = "School_Type";
	$fdata["ownerTable"] = "school_type";
	$fdata["Label"] = GetFieldLabel("school_type","School_Type"); 
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
	
		$fdata["strField"] = "school_type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "school_type";
	
		
		
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

	

	
	$tdataschool_type["School Type"] = $fdata;
//	type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "type_id";
	$fdata["GoodName"] = "type_id";
	$fdata["ownerTable"] = "school_type";
	$fdata["Label"] = GetFieldLabel("school_type","type_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "type_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "type_id";
	
		
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataschool_type["type_id"] = $fdata;

	
$tables_data["school_type"]=&$tdataschool_type;
$field_labels["school_type"] = &$fieldLabelsschool_type;
$fieldToolTips["school_type"] = &$fieldToolTipsschool_type;
$page_titles["school_type"] = &$pageTitlesschool_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["school_type"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["school_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_school_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "school_type AS `School Type`,  type_id";
$proto0["m_strFrom"] = "FROM school_type";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
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
	"m_strName" => "school_type",
	"m_strTable" => "school_type",
	"m_srcTableName" => "school_type"
));

$proto5["m_sql"] = "school_type";
$proto5["m_srcTableName"] = "school_type";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "School Type";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "type_id",
	"m_strTable" => "school_type",
	"m_srcTableName" => "school_type"
));

$proto7["m_sql"] = "type_id";
$proto7["m_srcTableName"] = "school_type";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "school_type";
$proto10["m_srcTableName"] = "school_type";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "type_id";
$proto10["m_columns"][] = "school_type";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "school_type";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "school_type";
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
$proto0["m_srcTableName"]="school_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_school_type = createSqlQuery_school_type();


	
		
	
$tdataschool_type[".sqlquery"] = $queryData_school_type;

$tableEvents["school_type"] = new eventsBase;
$tdataschool_type[".hasEvents"] = false;

?>