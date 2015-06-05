<?php
require_once(getabspath("classes/cipherer.php"));




$tdataStudent_Report = array();	
	$tdataStudent_Report[".truncateText"] = true;
	$tdataStudent_Report[".NumberOfChars"] = 80; 
	$tdataStudent_Report[".ShortName"] = "Student_Report";
	$tdataStudent_Report[".OwnerID"] = "Cresh";
	$tdataStudent_Report[".OriginalTable"] = "school";

//	field labels
$fieldLabelsStudent_Report = array();
$fieldToolTipsStudent_Report = array();
$pageTitlesStudent_Report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsStudent_Report["English"] = array();
	$fieldToolTipsStudent_Report["English"] = array();
	$pageTitlesStudent_Report["English"] = array();
	$fieldLabelsStudent_Report["English"]["Cresh"] = "Cresh";
	$fieldToolTipsStudent_Report["English"]["Cresh"] = "";
	$fieldLabelsStudent_Report["English"]["School_Name"] = "School Name";
	$fieldToolTipsStudent_Report["English"]["School Name"] = "";
	$fieldLabelsStudent_Report["English"]["Grade_R"] = "Grade R";
	$fieldToolTipsStudent_Report["English"]["Grade R"] = "";
	$fieldLabelsStudent_Report["English"]["Grade_0"] = "Grade 0";
	$fieldToolTipsStudent_Report["English"]["Grade 0"] = "";
	$fieldLabelsStudent_Report["English"]["Grade_1"] = "Grade 1";
	$fieldToolTipsStudent_Report["English"]["Grade 1"] = "";
	$fieldLabelsStudent_Report["English"]["Grade_2"] = "Grade 2";
	$fieldToolTipsStudent_Report["English"]["Grade 2"] = "";
	$fieldLabelsStudent_Report["English"]["Grade_3"] = "Grade 3";
	$fieldToolTipsStudent_Report["English"]["Grade 3"] = "";
	$fieldLabelsStudent_Report["English"]["Grade_4"] = "Grade 4";
	$fieldToolTipsStudent_Report["English"]["Grade 4"] = "";
	$fieldLabelsStudent_Report["English"]["Grade_5"] = "Grade 5";
	$fieldToolTipsStudent_Report["English"]["Grade 5"] = "";
	$fieldLabelsStudent_Report["English"]["Grade_6"] = "Grade 6";
	$fieldToolTipsStudent_Report["English"]["Grade 6"] = "";
	$fieldLabelsStudent_Report["English"]["Grade_7"] = "Grade 7";
	$fieldToolTipsStudent_Report["English"]["Grade 7"] = "";
	$fieldLabelsStudent_Report["English"]["Grade_8"] = "Grade 8";
	$fieldToolTipsStudent_Report["English"]["Grade 8"] = "";
	$fieldLabelsStudent_Report["English"]["Grade_9"] = "Grade 9";
	$fieldToolTipsStudent_Report["English"]["Grade 9"] = "";
	$fieldLabelsStudent_Report["English"]["Grade_10"] = "Grade 10";
	$fieldToolTipsStudent_Report["English"]["Grade 10"] = "";
	$fieldLabelsStudent_Report["English"]["Grade_11"] = "Grade 11";
	$fieldToolTipsStudent_Report["English"]["Grade 11"] = "";
	$fieldLabelsStudent_Report["English"]["Grade_12"] = "Grade 12";
	$fieldToolTipsStudent_Report["English"]["Grade 12"] = "";
	$fieldLabelsStudent_Report["English"]["Total_Students"] = "Total Students";
	$fieldToolTipsStudent_Report["English"]["Total Students"] = "";
	if (count($fieldToolTipsStudent_Report["English"]))
		$tdataStudent_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsStudent_Report[""] = array();
	$fieldToolTipsStudent_Report[""] = array();
	$pageTitlesStudent_Report[""] = array();
	$fieldLabelsStudent_Report[""]["Cresh"] = "Cresh";
	$fieldToolTipsStudent_Report[""]["Cresh"] = "";
	$fieldLabelsStudent_Report[""]["School_Name"] = "School Name";
	$fieldToolTipsStudent_Report[""]["School Name"] = "";
	$fieldLabelsStudent_Report[""]["Grade_R"] = "Grade R";
	$fieldToolTipsStudent_Report[""]["Grade R"] = "";
	$fieldLabelsStudent_Report[""]["Grade_0"] = "Grade 0";
	$fieldToolTipsStudent_Report[""]["Grade 0"] = "";
	$fieldLabelsStudent_Report[""]["Grade_1"] = "Grade 1";
	$fieldToolTipsStudent_Report[""]["Grade 1"] = "";
	$fieldLabelsStudent_Report[""]["Grade_2"] = "Grade 2";
	$fieldToolTipsStudent_Report[""]["Grade 2"] = "";
	$fieldLabelsStudent_Report[""]["Grade_3"] = "Grade 3";
	$fieldToolTipsStudent_Report[""]["Grade 3"] = "";
	$fieldLabelsStudent_Report[""]["Grade_4"] = "Grade 4";
	$fieldToolTipsStudent_Report[""]["Grade 4"] = "";
	$fieldLabelsStudent_Report[""]["Grade_5"] = "Grade 5";
	$fieldToolTipsStudent_Report[""]["Grade 5"] = "";
	$fieldLabelsStudent_Report[""]["Grade_6"] = "Grade 6";
	$fieldToolTipsStudent_Report[""]["Grade 6"] = "";
	$fieldLabelsStudent_Report[""]["Grade_7"] = "Grade 7";
	$fieldToolTipsStudent_Report[""]["Grade 7"] = "";
	$fieldLabelsStudent_Report[""]["Grade_8"] = "Grade 8";
	$fieldToolTipsStudent_Report[""]["Grade 8"] = "";
	$fieldLabelsStudent_Report[""]["Grade_9"] = "Grade 9";
	$fieldToolTipsStudent_Report[""]["Grade 9"] = "";
	$fieldLabelsStudent_Report[""]["Grade_10"] = "Grade 10";
	$fieldToolTipsStudent_Report[""]["Grade 10"] = "";
	$fieldLabelsStudent_Report[""]["Grade_11"] = "Grade 11";
	$fieldToolTipsStudent_Report[""]["Grade 11"] = "";
	$fieldLabelsStudent_Report[""]["Grade_12"] = "Grade 12";
	$fieldToolTipsStudent_Report[""]["Grade 12"] = "";
	$fieldLabelsStudent_Report[""]["Total_Students"] = "Total Students";
	$fieldToolTipsStudent_Report[""]["Total Students"] = "";
	if (count($fieldToolTipsStudent_Report[""]))
		$tdataStudent_Report[".isUseToolTips"] = true;
}
	
	
	$tdataStudent_Report[".NCSearch"] = true;



$tdataStudent_Report[".shortTableName"] = "Student_Report";
$tdataStudent_Report[".nSecOptions"] = 1;
$tdataStudent_Report[".recsPerRowList"] = 1;
$tdataStudent_Report[".mainTableOwnerID"] = "Cresh";
$tdataStudent_Report[".moveNext"] = 1;
$tdataStudent_Report[".nType"] = 2;

$tdataStudent_Report[".strOriginalTableName"] = "school";




$tdataStudent_Report[".showAddInPopup"] = false;

$tdataStudent_Report[".showEditInPopup"] = false;

$tdataStudent_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataStudent_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataStudent_Report[".fieldsForRegister"] = array();

$tdataStudent_Report[".listAjax"] = false;

	$tdataStudent_Report[".audit"] = false;

	$tdataStudent_Report[".locking"] = false;


$tdataStudent_Report[".list"] = true;

$tdataStudent_Report[".inlineAdd"] = true;


$tdataStudent_Report[".exportTo"] = true;

$tdataStudent_Report[".printFriendly"] = true;


$tdataStudent_Report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataStudent_Report[".searchSaving"] = false;
//

$tdataStudent_Report[".showSearchPanel"] = true;
		$tdataStudent_Report[".flexibleSearch"] = true;		

if (isMobile())
	$tdataStudent_Report[".isUseAjaxSuggest"] = false;
else 
	$tdataStudent_Report[".isUseAjaxSuggest"] = true;




$tdataStudent_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataStudent_Report[".isUseTimeForSearch"] = false;





$tdataStudent_Report[".allSearchFields"] = array();
$tdataStudent_Report[".filterFields"] = array();
$tdataStudent_Report[".requiredSearchFields"] = array();

$tdataStudent_Report[".allSearchFields"][] = "School Name";
	$tdataStudent_Report[".allSearchFields"][] = "Cresh";
	$tdataStudent_Report[".allSearchFields"][] = "Grade R";
	$tdataStudent_Report[".allSearchFields"][] = "Grade 0";
	$tdataStudent_Report[".allSearchFields"][] = "Grade 1";
	$tdataStudent_Report[".allSearchFields"][] = "Grade 2";
	$tdataStudent_Report[".allSearchFields"][] = "Grade 3";
	$tdataStudent_Report[".allSearchFields"][] = "Grade 4";
	$tdataStudent_Report[".allSearchFields"][] = "Grade 5";
	$tdataStudent_Report[".allSearchFields"][] = "Grade 6";
	$tdataStudent_Report[".allSearchFields"][] = "Grade 7";
	$tdataStudent_Report[".allSearchFields"][] = "Grade 8";
	$tdataStudent_Report[".allSearchFields"][] = "Grade 9";
	$tdataStudent_Report[".allSearchFields"][] = "Grade 10";
	$tdataStudent_Report[".allSearchFields"][] = "Grade 11";
	$tdataStudent_Report[".allSearchFields"][] = "Grade 12";
	$tdataStudent_Report[".allSearchFields"][] = "Total Students";
	
$tdataStudent_Report[".filterFields"][] = "Total Students";	

$tdataStudent_Report[".googleLikeFields"] = array();
$tdataStudent_Report[".googleLikeFields"][] = "School Name";
$tdataStudent_Report[".googleLikeFields"][] = "Cresh";
$tdataStudent_Report[".googleLikeFields"][] = "Grade R";
$tdataStudent_Report[".googleLikeFields"][] = "Grade 0";
$tdataStudent_Report[".googleLikeFields"][] = "Grade 1";
$tdataStudent_Report[".googleLikeFields"][] = "Grade 2";
$tdataStudent_Report[".googleLikeFields"][] = "Grade 3";
$tdataStudent_Report[".googleLikeFields"][] = "Grade 4";
$tdataStudent_Report[".googleLikeFields"][] = "Grade 5";
$tdataStudent_Report[".googleLikeFields"][] = "Grade 6";
$tdataStudent_Report[".googleLikeFields"][] = "Grade 7";
$tdataStudent_Report[".googleLikeFields"][] = "Grade 8";
$tdataStudent_Report[".googleLikeFields"][] = "Grade 9";
$tdataStudent_Report[".googleLikeFields"][] = "Grade 10";
$tdataStudent_Report[".googleLikeFields"][] = "Grade 11";
$tdataStudent_Report[".googleLikeFields"][] = "Grade 12";
$tdataStudent_Report[".googleLikeFields"][] = "Total Students";


$tdataStudent_Report[".advSearchFields"] = array();
$tdataStudent_Report[".advSearchFields"][] = "School Name";
$tdataStudent_Report[".advSearchFields"][] = "Cresh";
$tdataStudent_Report[".advSearchFields"][] = "Grade R";
$tdataStudent_Report[".advSearchFields"][] = "Grade 0";
$tdataStudent_Report[".advSearchFields"][] = "Grade 1";
$tdataStudent_Report[".advSearchFields"][] = "Grade 2";
$tdataStudent_Report[".advSearchFields"][] = "Grade 3";
$tdataStudent_Report[".advSearchFields"][] = "Grade 4";
$tdataStudent_Report[".advSearchFields"][] = "Grade 5";
$tdataStudent_Report[".advSearchFields"][] = "Grade 6";
$tdataStudent_Report[".advSearchFields"][] = "Grade 7";
$tdataStudent_Report[".advSearchFields"][] = "Grade 8";
$tdataStudent_Report[".advSearchFields"][] = "Grade 9";
$tdataStudent_Report[".advSearchFields"][] = "Grade 10";
$tdataStudent_Report[".advSearchFields"][] = "Grade 11";
$tdataStudent_Report[".advSearchFields"][] = "Grade 12";
$tdataStudent_Report[".advSearchFields"][] = "Total Students";

$tdataStudent_Report[".tableType"] = "report";

$tdataStudent_Report[".printerPageOrientation"] = 0;
$tdataStudent_Report[".nPrinterPageScale"] = 100;

$tdataStudent_Report[".nPrinterSplitRecords"] = 40;

$tdataStudent_Report[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataStudent_Report[".printReportLayout"] = 6;	
$tdataStudent_Report[".reportPrintPartitionType"] = 0;	
$tdataStudent_Report[".reportPrintGroupsPerPage"] = 3;	
$tdataStudent_Report[".lowGroup"] = 0;

$tdataStudent_Report[".pageSize"] = 20;	


$tdataStudent_Report[".isExistTotalFields"] = true;




$tdataStudent_Report[".repShowDet"] = true;

$tdataStudent_Report[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataStudent_Report[".strOrderBy"] = $tstrOrderBy;

$tdataStudent_Report[".orderindexes"] = array();

$tdataStudent_Report[".sqlHead"] = "SELECT school_name AS `School Name`,  cresh AS Cresh,  grade_r AS `Grade R`,  grade_0 AS `Grade 0`,  grade_1 AS `Grade 1`,  grade_2 AS `Grade 2`,  grade_3 AS `Grade 3`,  grade_4 AS `Grade 4`,  grade_5 AS `Grade 5`,  grade_6 AS `Grade 6`,  grade_7 AS `Grade 7`,  grade_8 AS `Grade 8`,  grade_9 AS `Grade 9`,  grade_10 AS `Grade 10`,  grade_11 AS `Grade 11`,  grade_12 AS `Grade 12`,  total_students AS `Total Students`";
$tdataStudent_Report[".sqlFrom"] = "FROM school";
$tdataStudent_Report[".sqlWhereExpr"] = "";
$tdataStudent_Report[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataStudent_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataStudent_Report[".arrGroupsPerPage"] = $arrGPP;

$tdataStudent_Report[".highlightSearchResults"] = true;

$tableKeysStudent_Report = array();
$tdataStudent_Report[".Keys"] = $tableKeysStudent_Report;

$tdataStudent_Report[".listFields"] = array();
$tdataStudent_Report[".listFields"][] = "School Name";
$tdataStudent_Report[".listFields"][] = "Cresh";
$tdataStudent_Report[".listFields"][] = "Grade R";
$tdataStudent_Report[".listFields"][] = "Grade 0";
$tdataStudent_Report[".listFields"][] = "Grade 1";
$tdataStudent_Report[".listFields"][] = "Grade 2";
$tdataStudent_Report[".listFields"][] = "Grade 3";
$tdataStudent_Report[".listFields"][] = "Grade 4";
$tdataStudent_Report[".listFields"][] = "Grade 5";
$tdataStudent_Report[".listFields"][] = "Grade 6";
$tdataStudent_Report[".listFields"][] = "Grade 7";
$tdataStudent_Report[".listFields"][] = "Grade 8";
$tdataStudent_Report[".listFields"][] = "Grade 9";
$tdataStudent_Report[".listFields"][] = "Grade 10";
$tdataStudent_Report[".listFields"][] = "Grade 11";
$tdataStudent_Report[".listFields"][] = "Grade 12";
$tdataStudent_Report[".listFields"][] = "Total Students";

$tdataStudent_Report[".hideMobileList"] = array();


$tdataStudent_Report[".viewFields"] = array();
$tdataStudent_Report[".viewFields"][] = "School Name";
$tdataStudent_Report[".viewFields"][] = "Cresh";
$tdataStudent_Report[".viewFields"][] = "Grade R";
$tdataStudent_Report[".viewFields"][] = "Grade 0";
$tdataStudent_Report[".viewFields"][] = "Grade 1";
$tdataStudent_Report[".viewFields"][] = "Grade 2";
$tdataStudent_Report[".viewFields"][] = "Grade 3";
$tdataStudent_Report[".viewFields"][] = "Grade 4";
$tdataStudent_Report[".viewFields"][] = "Grade 5";
$tdataStudent_Report[".viewFields"][] = "Grade 6";
$tdataStudent_Report[".viewFields"][] = "Grade 7";
$tdataStudent_Report[".viewFields"][] = "Grade 8";
$tdataStudent_Report[".viewFields"][] = "Grade 9";
$tdataStudent_Report[".viewFields"][] = "Grade 10";
$tdataStudent_Report[".viewFields"][] = "Grade 11";
$tdataStudent_Report[".viewFields"][] = "Grade 12";
$tdataStudent_Report[".viewFields"][] = "Total Students";

$tdataStudent_Report[".addFields"] = array();

$tdataStudent_Report[".inlineAddFields"] = array();

$tdataStudent_Report[".editFields"] = array();
$tdataStudent_Report[".editFields"][] = "Cresh";

$tdataStudent_Report[".inlineEditFields"] = array();
$tdataStudent_Report[".inlineEditFields"][] = "Cresh";

$tdataStudent_Report[".exportFields"] = array();
$tdataStudent_Report[".exportFields"][] = "School Name";
$tdataStudent_Report[".exportFields"][] = "Cresh";
$tdataStudent_Report[".exportFields"][] = "Grade R";
$tdataStudent_Report[".exportFields"][] = "Grade 0";
$tdataStudent_Report[".exportFields"][] = "Grade 1";
$tdataStudent_Report[".exportFields"][] = "Grade 2";
$tdataStudent_Report[".exportFields"][] = "Grade 3";
$tdataStudent_Report[".exportFields"][] = "Grade 4";
$tdataStudent_Report[".exportFields"][] = "Grade 5";
$tdataStudent_Report[".exportFields"][] = "Grade 6";
$tdataStudent_Report[".exportFields"][] = "Grade 7";
$tdataStudent_Report[".exportFields"][] = "Grade 8";
$tdataStudent_Report[".exportFields"][] = "Grade 9";
$tdataStudent_Report[".exportFields"][] = "Grade 10";
$tdataStudent_Report[".exportFields"][] = "Grade 11";
$tdataStudent_Report[".exportFields"][] = "Grade 12";
$tdataStudent_Report[".exportFields"][] = "Total Students";

$tdataStudent_Report[".importFields"] = array();
$tdataStudent_Report[".importFields"][] = "School Name";
$tdataStudent_Report[".importFields"][] = "Cresh";
$tdataStudent_Report[".importFields"][] = "Grade R";
$tdataStudent_Report[".importFields"][] = "Grade 0";
$tdataStudent_Report[".importFields"][] = "Grade 1";
$tdataStudent_Report[".importFields"][] = "Grade 2";
$tdataStudent_Report[".importFields"][] = "Grade 3";
$tdataStudent_Report[".importFields"][] = "Grade 4";
$tdataStudent_Report[".importFields"][] = "Grade 5";
$tdataStudent_Report[".importFields"][] = "Grade 6";
$tdataStudent_Report[".importFields"][] = "Grade 7";
$tdataStudent_Report[".importFields"][] = "Grade 8";
$tdataStudent_Report[".importFields"][] = "Grade 9";
$tdataStudent_Report[".importFields"][] = "Grade 10";
$tdataStudent_Report[".importFields"][] = "Grade 11";
$tdataStudent_Report[".importFields"][] = "Grade 12";
$tdataStudent_Report[".importFields"][] = "Total Students";

$tdataStudent_Report[".printFields"] = array();
$tdataStudent_Report[".printFields"][] = "School Name";
$tdataStudent_Report[".printFields"][] = "Cresh";
$tdataStudent_Report[".printFields"][] = "Grade R";
$tdataStudent_Report[".printFields"][] = "Grade 0";
$tdataStudent_Report[".printFields"][] = "Grade 1";
$tdataStudent_Report[".printFields"][] = "Grade 2";
$tdataStudent_Report[".printFields"][] = "Grade 3";
$tdataStudent_Report[".printFields"][] = "Grade 4";
$tdataStudent_Report[".printFields"][] = "Grade 5";
$tdataStudent_Report[".printFields"][] = "Grade 6";
$tdataStudent_Report[".printFields"][] = "Grade 7";
$tdataStudent_Report[".printFields"][] = "Grade 8";
$tdataStudent_Report[".printFields"][] = "Grade 9";
$tdataStudent_Report[".printFields"][] = "Grade 10";
$tdataStudent_Report[".printFields"][] = "Grade 11";
$tdataStudent_Report[".printFields"][] = "Grade 12";
$tdataStudent_Report[".printFields"][] = "Total Students";

//	School Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "School Name";
	$fdata["GoodName"] = "School_Name";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","School_Name"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "school_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "school_name";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataStudent_Report["School Name"] = $fdata;
//	Cresh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cresh";
	$fdata["GoodName"] = "Cresh";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Cresh"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cresh"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cresh";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
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
								
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Cresh"] = $fdata;
//	Grade R
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Grade R";
	$fdata["GoodName"] = "Grade_R";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Grade_R"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade_r"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_r";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Grade R"] = $fdata;
//	Grade 0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Grade 0";
	$fdata["GoodName"] = "Grade_0";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Grade_0"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade_0"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_0";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Grade 0"] = $fdata;
//	Grade 1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Grade 1";
	$fdata["GoodName"] = "Grade_1";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Grade_1"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade_1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_1";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Grade 1"] = $fdata;
//	Grade 2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Grade 2";
	$fdata["GoodName"] = "Grade_2";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Grade_2"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade_2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_2";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Grade 2"] = $fdata;
//	Grade 3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Grade 3";
	$fdata["GoodName"] = "Grade_3";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Grade_3"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade_3"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_3";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Grade 3"] = $fdata;
//	Grade 4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Grade 4";
	$fdata["GoodName"] = "Grade_4";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Grade_4"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade_4"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_4";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Grade 4"] = $fdata;
//	Grade 5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Grade 5";
	$fdata["GoodName"] = "Grade_5";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Grade_5"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade_5"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_5";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Grade 5"] = $fdata;
//	Grade 6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Grade 6";
	$fdata["GoodName"] = "Grade_6";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Grade_6"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade_6"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_6";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Grade 6"] = $fdata;
//	Grade 7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Grade 7";
	$fdata["GoodName"] = "Grade_7";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Grade_7"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade_7"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_7";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Grade 7"] = $fdata;
//	Grade 8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Grade 8";
	$fdata["GoodName"] = "Grade_8";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Grade_8"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade_8"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_8";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Grade 8"] = $fdata;
//	Grade 9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Grade 9";
	$fdata["GoodName"] = "Grade_9";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Grade_9"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade_9"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_9";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Grade 9"] = $fdata;
//	Grade 10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Grade 10";
	$fdata["GoodName"] = "Grade_10";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Grade_10"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade_10"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_10";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Grade 10"] = $fdata;
//	Grade 11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Grade 11";
	$fdata["GoodName"] = "Grade_11";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Grade_11"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade_11"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_11";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Grade 11"] = $fdata;
//	Grade 12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Grade 12";
	$fdata["GoodName"] = "Grade_12";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Grade_12"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade_12"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_12";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataStudent_Report["Grade 12"] = $fdata;
//	Total Students
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Total Students";
	$fdata["GoodName"] = "Total_Students";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("Student_Report","Total_Students"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					$fdata["isTotalSum"] = true;	
	// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total_students"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_students";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	
//Filters settings
	$fdata["filterTotals"] = 1;	
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "Cresh";	
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdataStudent_Report["Total Students"] = $fdata;

	
$tables_data["Student Report"]=&$tdataStudent_Report;
$field_labels["Student_Report"] = &$fieldLabelsStudent_Report;
$fieldToolTips["Student Report"] = &$fieldToolTipsStudent_Report;
$page_titles["Student_Report"] = &$pageTitlesStudent_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Student Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Student Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Student_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "school_name AS `School Name`,  cresh AS Cresh,  grade_r AS `Grade R`,  grade_0 AS `Grade 0`,  grade_1 AS `Grade 1`,  grade_2 AS `Grade 2`,  grade_3 AS `Grade 3`,  grade_4 AS `Grade 4`,  grade_5 AS `Grade 5`,  grade_6 AS `Grade 6`,  grade_7 AS `Grade 7`,  grade_8 AS `Grade 8`,  grade_9 AS `Grade 9`,  grade_10 AS `Grade 10`,  grade_11 AS `Grade 11`,  grade_12 AS `Grade 12`,  total_students AS `Total Students`";
$proto0["m_strFrom"] = "FROM school";
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
	"m_strName" => "school_name",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto5["m_sql"] = "school_name";
$proto5["m_srcTableName"] = "Student Report";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "School Name";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cresh",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto7["m_sql"] = "cresh";
$proto7["m_srcTableName"] = "Student Report";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "Cresh";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_r",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto9["m_sql"] = "grade_r";
$proto9["m_srcTableName"] = "Student Report";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Grade R";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_0",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto11["m_sql"] = "grade_0";
$proto11["m_srcTableName"] = "Student Report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Grade 0";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_1",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto13["m_sql"] = "grade_1";
$proto13["m_srcTableName"] = "Student Report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "Grade 1";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_2",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto15["m_sql"] = "grade_2";
$proto15["m_srcTableName"] = "Student Report";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Grade 2";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_3",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto17["m_sql"] = "grade_3";
$proto17["m_srcTableName"] = "Student Report";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Grade 3";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_4",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto19["m_sql"] = "grade_4";
$proto19["m_srcTableName"] = "Student Report";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Grade 4";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_5",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto21["m_sql"] = "grade_5";
$proto21["m_srcTableName"] = "Student Report";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Grade 5";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_6",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto23["m_sql"] = "grade_6";
$proto23["m_srcTableName"] = "Student Report";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Grade 6";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_7",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto25["m_sql"] = "grade_7";
$proto25["m_srcTableName"] = "Student Report";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "Grade 7";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_8",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto27["m_sql"] = "grade_8";
$proto27["m_srcTableName"] = "Student Report";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "Grade 8";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_9",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto29["m_sql"] = "grade_9";
$proto29["m_srcTableName"] = "Student Report";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "Grade 9";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_10",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto31["m_sql"] = "grade_10";
$proto31["m_srcTableName"] = "Student Report";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "Grade 10";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_11",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto33["m_sql"] = "grade_11";
$proto33["m_srcTableName"] = "Student Report";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "Grade 11";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_12",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto35["m_sql"] = "grade_12";
$proto35["m_srcTableName"] = "Student Report";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "Grade 12";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "total_students",
	"m_strTable" => "school",
	"m_srcTableName" => "Student Report"
));

$proto37["m_sql"] = "total_students";
$proto37["m_srcTableName"] = "Student Report";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "Total Students";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "school";
$proto40["m_srcTableName"] = "Student Report";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "school_id";
$proto40["m_columns"][] = "rep_id";
$proto40["m_columns"][] = "school_name";
$proto40["m_columns"][] = "reg_number";
$proto40["m_columns"][] = "reg_date";
$proto40["m_columns"][] = "school_type";
$proto40["m_columns"][] = "londitude";
$proto40["m_columns"][] = "latitude";
$proto40["m_columns"][] = "administrator";
$proto40["m_columns"][] = "principal";
$proto40["m_columns"][] = "postbox";
$proto40["m_columns"][] = "address";
$proto40["m_columns"][] = "city";
$proto40["m_columns"][] = "province";
$proto40["m_columns"][] = "postalcode";
$proto40["m_columns"][] = "country";
$proto40["m_columns"][] = "email";
$proto40["m_columns"][] = "school_phone";
$proto40["m_columns"][] = "admin_cellphone";
$proto40["m_columns"][] = "cresh";
$proto40["m_columns"][] = "grade_r";
$proto40["m_columns"][] = "grade_0";
$proto40["m_columns"][] = "grade_1";
$proto40["m_columns"][] = "grade_2";
$proto40["m_columns"][] = "grade_3";
$proto40["m_columns"][] = "grade_4";
$proto40["m_columns"][] = "grade_5";
$proto40["m_columns"][] = "grade_6";
$proto40["m_columns"][] = "grade_7";
$proto40["m_columns"][] = "grade_8";
$proto40["m_columns"][] = "grade_9";
$proto40["m_columns"][] = "grade_10";
$proto40["m_columns"][] = "grade_11";
$proto40["m_columns"][] = "grade_12";
$proto40["m_columns"][] = "total_students";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "school";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "Student Report";
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Student Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Student_Report = createSqlQuery_Student_Report();


	
																	
	
$tdataStudent_Report[".sqlquery"] = $queryData_Student_Report;

$tableEvents["Student Report"] = new eventsBase;
$tdataStudent_Report[".hasEvents"] = false;

?>