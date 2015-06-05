<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSchool_Report = array();	
	$tdataSchool_Report[".truncateText"] = true;
	$tdataSchool_Report[".NumberOfChars"] = 80; 
	$tdataSchool_Report[".ShortName"] = "School_Report";
	$tdataSchool_Report[".OwnerID"] = "Country";
	$tdataSchool_Report[".OriginalTable"] = "school";

//	field labels
$fieldLabelsSchool_Report = array();
$fieldToolTipsSchool_Report = array();
$pageTitlesSchool_Report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSchool_Report["English"] = array();
	$fieldToolTipsSchool_Report["English"] = array();
	$pageTitlesSchool_Report["English"] = array();
	$fieldLabelsSchool_Report["English"]["Administrator"] = "Administrator";
	$fieldToolTipsSchool_Report["English"]["Administrator"] = "";
	$fieldLabelsSchool_Report["English"]["Principal"] = "Principal";
	$fieldToolTipsSchool_Report["English"]["Principal"] = "";
	$fieldLabelsSchool_Report["English"]["Address"] = "Address";
	$fieldToolTipsSchool_Report["English"]["Address"] = "";
	$fieldLabelsSchool_Report["English"]["City"] = "City";
	$fieldToolTipsSchool_Report["English"]["City"] = "";
	$fieldLabelsSchool_Report["English"]["Country"] = "Country";
	$fieldToolTipsSchool_Report["English"]["Country"] = "";
	$fieldLabelsSchool_Report["English"]["Representative"] = "Representative";
	$fieldToolTipsSchool_Report["English"]["Representative"] = "";
	$fieldLabelsSchool_Report["English"]["School_Name"] = "School Name";
	$fieldToolTipsSchool_Report["English"]["School Name"] = "";
	$fieldLabelsSchool_Report["English"]["Registration_Number"] = "Registration Number";
	$fieldToolTipsSchool_Report["English"]["Registration Number"] = "";
	$fieldLabelsSchool_Report["English"]["Registration_Date"] = "Registration Date";
	$fieldToolTipsSchool_Report["English"]["Registration Date"] = "";
	$fieldLabelsSchool_Report["English"]["School_Type"] = "School Type";
	$fieldToolTipsSchool_Report["English"]["School Type"] = "";
	$fieldLabelsSchool_Report["English"]["P_O_Box"] = "P.O.Box";
	$fieldToolTipsSchool_Report["English"]["P.O.Box"] = "";
	$fieldLabelsSchool_Report["English"]["E_mail"] = "E-mail";
	$fieldToolTipsSchool_Report["English"]["E-mail"] = "";
	$fieldLabelsSchool_Report["English"]["School_Phone"] = "School Phone";
	$fieldToolTipsSchool_Report["English"]["School Phone"] = "";
	$fieldLabelsSchool_Report["English"]["Administrator_Cell"] = "Administrator Cell";
	$fieldToolTipsSchool_Report["English"]["Administrator Cell"] = "";
	$fieldLabelsSchool_Report["English"]["Total_Students"] = "Total Students";
	$fieldToolTipsSchool_Report["English"]["Total Students"] = "";
	$fieldLabelsSchool_Report["English"]["Longditude"] = "Longditude";
	$fieldToolTipsSchool_Report["English"]["Longditude"] = "";
	$fieldLabelsSchool_Report["English"]["Latitude"] = "Latitude";
	$fieldToolTipsSchool_Report["English"]["Latitude"] = "";
	$fieldLabelsSchool_Report["English"]["province"] = "Province";
	$fieldToolTipsSchool_Report["English"]["province"] = "";
	$fieldLabelsSchool_Report["English"]["Postal_code"] = "Postal Code";
	$fieldToolTipsSchool_Report["English"]["Postal code"] = "";
	if (count($fieldToolTipsSchool_Report["English"]))
		$tdataSchool_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSchool_Report[""] = array();
	$fieldToolTipsSchool_Report[""] = array();
	$pageTitlesSchool_Report[""] = array();
	$fieldLabelsSchool_Report[""]["Representative"] = "Representative";
	$fieldToolTipsSchool_Report[""]["Representative"] = "";
	$fieldLabelsSchool_Report[""]["School_Name"] = "School Name";
	$fieldToolTipsSchool_Report[""]["School Name"] = "";
	$fieldLabelsSchool_Report[""]["Registration_Number"] = "Registration Number";
	$fieldToolTipsSchool_Report[""]["Registration Number"] = "";
	$fieldLabelsSchool_Report[""]["Registration_Date"] = "Registration Date";
	$fieldToolTipsSchool_Report[""]["Registration Date"] = "";
	$fieldLabelsSchool_Report[""]["School_Type"] = "School Type";
	$fieldToolTipsSchool_Report[""]["School Type"] = "";
	$fieldLabelsSchool_Report[""]["P_O_Box"] = "P.O.Box";
	$fieldToolTipsSchool_Report[""]["P.O.Box"] = "";
	$fieldLabelsSchool_Report[""]["E_mail"] = "E-mail";
	$fieldToolTipsSchool_Report[""]["E-mail"] = "";
	$fieldLabelsSchool_Report[""]["School_Phone"] = "School Phone";
	$fieldToolTipsSchool_Report[""]["School Phone"] = "";
	$fieldLabelsSchool_Report[""]["Administrator_Cell"] = "Administrator Cell";
	$fieldToolTipsSchool_Report[""]["Administrator Cell"] = "";
	$fieldLabelsSchool_Report[""]["Total_Students"] = "Total Students";
	$fieldToolTipsSchool_Report[""]["Total Students"] = "";
	$fieldLabelsSchool_Report[""]["Longditude"] = "Longditude";
	$fieldToolTipsSchool_Report[""]["Longditude"] = "";
	$fieldLabelsSchool_Report[""]["Latitude"] = "Latitude";
	$fieldToolTipsSchool_Report[""]["Latitude"] = "";
	$fieldLabelsSchool_Report[""]["province"] = "Province";
	$fieldToolTipsSchool_Report[""]["province"] = "";
	$fieldLabelsSchool_Report[""]["Postal_code"] = "Postal Code";
	$fieldToolTipsSchool_Report[""]["Postal code"] = "";
	if (count($fieldToolTipsSchool_Report[""]))
		$tdataSchool_Report[".isUseToolTips"] = true;
}
	
	
	$tdataSchool_Report[".NCSearch"] = true;



$tdataSchool_Report[".shortTableName"] = "School_Report";
$tdataSchool_Report[".nSecOptions"] = 1;
$tdataSchool_Report[".recsPerRowList"] = 1;
$tdataSchool_Report[".mainTableOwnerID"] = "Country";
$tdataSchool_Report[".moveNext"] = 1;
$tdataSchool_Report[".nType"] = 2;

$tdataSchool_Report[".strOriginalTableName"] = "school";




$tdataSchool_Report[".showAddInPopup"] = false;

$tdataSchool_Report[".showEditInPopup"] = false;

$tdataSchool_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSchool_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSchool_Report[".fieldsForRegister"] = array();

$tdataSchool_Report[".listAjax"] = false;

	$tdataSchool_Report[".audit"] = false;

	$tdataSchool_Report[".locking"] = false;


$tdataSchool_Report[".list"] = true;

$tdataSchool_Report[".inlineAdd"] = true;


$tdataSchool_Report[".exportTo"] = true;

$tdataSchool_Report[".printFriendly"] = true;


$tdataSchool_Report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataSchool_Report[".searchSaving"] = false;
//

$tdataSchool_Report[".showSearchPanel"] = true;
		$tdataSchool_Report[".flexibleSearch"] = true;		

if (isMobile())
	$tdataSchool_Report[".isUseAjaxSuggest"] = false;
else 
	$tdataSchool_Report[".isUseAjaxSuggest"] = true;




$tdataSchool_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSchool_Report[".isUseTimeForSearch"] = false;





$tdataSchool_Report[".allSearchFields"] = array();
$tdataSchool_Report[".filterFields"] = array();
$tdataSchool_Report[".requiredSearchFields"] = array();

$tdataSchool_Report[".allSearchFields"][] = "Representative";
	$tdataSchool_Report[".allSearchFields"][] = "School Name";
	$tdataSchool_Report[".allSearchFields"][] = "Registration Number";
	$tdataSchool_Report[".allSearchFields"][] = "Registration Date";
	$tdataSchool_Report[".allSearchFields"][] = "School Type";
	$tdataSchool_Report[".allSearchFields"][] = "Administrator";
	$tdataSchool_Report[".allSearchFields"][] = "Principal";
	$tdataSchool_Report[".allSearchFields"][] = "P.O.Box";
	$tdataSchool_Report[".allSearchFields"][] = "Address";
	$tdataSchool_Report[".allSearchFields"][] = "City";
	$tdataSchool_Report[".allSearchFields"][] = "Country";
	$tdataSchool_Report[".allSearchFields"][] = "E-mail";
	$tdataSchool_Report[".allSearchFields"][] = "School Phone";
	$tdataSchool_Report[".allSearchFields"][] = "Administrator Cell";
	$tdataSchool_Report[".allSearchFields"][] = "Total Students";
	$tdataSchool_Report[".allSearchFields"][] = "Longditude";
	$tdataSchool_Report[".allSearchFields"][] = "Latitude";
	$tdataSchool_Report[".allSearchFields"][] = "province";
	$tdataSchool_Report[".allSearchFields"][] = "Postal code";
	
$tdataSchool_Report[".filterFields"][] = "Total Students";	

$tdataSchool_Report[".googleLikeFields"] = array();
$tdataSchool_Report[".googleLikeFields"][] = "Representative";
$tdataSchool_Report[".googleLikeFields"][] = "School Name";
$tdataSchool_Report[".googleLikeFields"][] = "Registration Number";
$tdataSchool_Report[".googleLikeFields"][] = "Registration Date";
$tdataSchool_Report[".googleLikeFields"][] = "School Type";
$tdataSchool_Report[".googleLikeFields"][] = "Administrator";
$tdataSchool_Report[".googleLikeFields"][] = "Principal";
$tdataSchool_Report[".googleLikeFields"][] = "P.O.Box";
$tdataSchool_Report[".googleLikeFields"][] = "Address";
$tdataSchool_Report[".googleLikeFields"][] = "City";
$tdataSchool_Report[".googleLikeFields"][] = "Country";
$tdataSchool_Report[".googleLikeFields"][] = "E-mail";
$tdataSchool_Report[".googleLikeFields"][] = "School Phone";
$tdataSchool_Report[".googleLikeFields"][] = "Administrator Cell";
$tdataSchool_Report[".googleLikeFields"][] = "Total Students";
$tdataSchool_Report[".googleLikeFields"][] = "Longditude";
$tdataSchool_Report[".googleLikeFields"][] = "Latitude";
$tdataSchool_Report[".googleLikeFields"][] = "province";
$tdataSchool_Report[".googleLikeFields"][] = "Postal code";


$tdataSchool_Report[".advSearchFields"] = array();
$tdataSchool_Report[".advSearchFields"][] = "Representative";
$tdataSchool_Report[".advSearchFields"][] = "School Name";
$tdataSchool_Report[".advSearchFields"][] = "Registration Number";
$tdataSchool_Report[".advSearchFields"][] = "Registration Date";
$tdataSchool_Report[".advSearchFields"][] = "School Type";
$tdataSchool_Report[".advSearchFields"][] = "Administrator";
$tdataSchool_Report[".advSearchFields"][] = "Principal";
$tdataSchool_Report[".advSearchFields"][] = "P.O.Box";
$tdataSchool_Report[".advSearchFields"][] = "Address";
$tdataSchool_Report[".advSearchFields"][] = "City";
$tdataSchool_Report[".advSearchFields"][] = "Country";
$tdataSchool_Report[".advSearchFields"][] = "E-mail";
$tdataSchool_Report[".advSearchFields"][] = "School Phone";
$tdataSchool_Report[".advSearchFields"][] = "Administrator Cell";
$tdataSchool_Report[".advSearchFields"][] = "Total Students";
$tdataSchool_Report[".advSearchFields"][] = "Longditude";
$tdataSchool_Report[".advSearchFields"][] = "Latitude";
$tdataSchool_Report[".advSearchFields"][] = "province";
$tdataSchool_Report[".advSearchFields"][] = "Postal code";

$tdataSchool_Report[".tableType"] = "report";

$tdataSchool_Report[".printerPageOrientation"] = 0;
$tdataSchool_Report[".nPrinterPageScale"] = 100;

$tdataSchool_Report[".nPrinterSplitRecords"] = 40;

$tdataSchool_Report[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdataSchool_Report[".printReportLayout"] = 6;	
$tdataSchool_Report[".reportPrintPartitionType"] = 0;	
$tdataSchool_Report[".reportPrintGroupsPerPage"] = 3;	
$tdataSchool_Report[".lowGroup"] = 0;

$tdataSchool_Report[".pageSize"] = 20;	






$tdataSchool_Report[".repShowDet"] = true;

$tdataSchool_Report[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY rep_id DESC, country";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSchool_Report[".strOrderBy"] = $tstrOrderBy;

$tdataSchool_Report[".orderindexes"] = array();
$tdataSchool_Report[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "rep_id");
$tdataSchool_Report[".orderindexes"][] = array(13, (1 ? "ASC" : "DESC"), "country");

$tdataSchool_Report[".sqlHead"] = "SELECT rep_id AS Representative,  school_name AS `School Name`,  reg_number AS `Registration Number`,  reg_date AS `Registration Date`,  school_type AS `School Type`,  administrator AS Administrator,  principal AS Principal,  postbox AS `P.O.Box`,  address AS Address,  city AS City,  province AS Province,  postalcode AS `Postal code`,  country AS Country,  email AS `E-mail`,  school_phone AS `School Phone`,  admin_cellphone AS `Administrator Cell`,  total_students AS `Total Students`,  londitude AS Longditude,  latitude AS Latitude";
$tdataSchool_Report[".sqlFrom"] = "FROM school";
$tdataSchool_Report[".sqlWhereExpr"] = "";
$tdataSchool_Report[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSchool_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSchool_Report[".arrGroupsPerPage"] = $arrGPP;

$tdataSchool_Report[".highlightSearchResults"] = true;

$tableKeysSchool_Report = array();
$tdataSchool_Report[".Keys"] = $tableKeysSchool_Report;

$tdataSchool_Report[".listFields"] = array();
$tdataSchool_Report[".listFields"][] = "Representative";
$tdataSchool_Report[".listFields"][] = "School Name";
$tdataSchool_Report[".listFields"][] = "Registration Number";
$tdataSchool_Report[".listFields"][] = "Registration Date";
$tdataSchool_Report[".listFields"][] = "School Type";
$tdataSchool_Report[".listFields"][] = "Administrator";
$tdataSchool_Report[".listFields"][] = "Principal";
$tdataSchool_Report[".listFields"][] = "P.O.Box";
$tdataSchool_Report[".listFields"][] = "Address";
$tdataSchool_Report[".listFields"][] = "City";
$tdataSchool_Report[".listFields"][] = "Country";
$tdataSchool_Report[".listFields"][] = "E-mail";
$tdataSchool_Report[".listFields"][] = "School Phone";
$tdataSchool_Report[".listFields"][] = "Administrator Cell";
$tdataSchool_Report[".listFields"][] = "Total Students";
$tdataSchool_Report[".listFields"][] = "Longditude";
$tdataSchool_Report[".listFields"][] = "Latitude";
$tdataSchool_Report[".listFields"][] = "province";
$tdataSchool_Report[".listFields"][] = "Postal code";

$tdataSchool_Report[".hideMobileList"] = array();


$tdataSchool_Report[".viewFields"] = array();
$tdataSchool_Report[".viewFields"][] = "Representative";
$tdataSchool_Report[".viewFields"][] = "School Name";
$tdataSchool_Report[".viewFields"][] = "Registration Number";
$tdataSchool_Report[".viewFields"][] = "Registration Date";
$tdataSchool_Report[".viewFields"][] = "School Type";
$tdataSchool_Report[".viewFields"][] = "Administrator";
$tdataSchool_Report[".viewFields"][] = "Principal";
$tdataSchool_Report[".viewFields"][] = "P.O.Box";
$tdataSchool_Report[".viewFields"][] = "Address";
$tdataSchool_Report[".viewFields"][] = "City";
$tdataSchool_Report[".viewFields"][] = "Country";
$tdataSchool_Report[".viewFields"][] = "E-mail";
$tdataSchool_Report[".viewFields"][] = "School Phone";
$tdataSchool_Report[".viewFields"][] = "Administrator Cell";
$tdataSchool_Report[".viewFields"][] = "Total Students";
$tdataSchool_Report[".viewFields"][] = "Longditude";
$tdataSchool_Report[".viewFields"][] = "Latitude";
$tdataSchool_Report[".viewFields"][] = "province";
$tdataSchool_Report[".viewFields"][] = "Postal code";

$tdataSchool_Report[".addFields"] = array();
$tdataSchool_Report[".addFields"][] = "Administrator";
$tdataSchool_Report[".addFields"][] = "Principal";
$tdataSchool_Report[".addFields"][] = "Address";
$tdataSchool_Report[".addFields"][] = "City";
$tdataSchool_Report[".addFields"][] = "Latitude";
$tdataSchool_Report[".addFields"][] = "province";

$tdataSchool_Report[".inlineAddFields"] = array();
$tdataSchool_Report[".inlineAddFields"][] = "Administrator";
$tdataSchool_Report[".inlineAddFields"][] = "Principal";
$tdataSchool_Report[".inlineAddFields"][] = "Address";
$tdataSchool_Report[".inlineAddFields"][] = "City";
$tdataSchool_Report[".inlineAddFields"][] = "Latitude";
$tdataSchool_Report[".inlineAddFields"][] = "province";

$tdataSchool_Report[".editFields"] = array();
$tdataSchool_Report[".editFields"][] = "Administrator";
$tdataSchool_Report[".editFields"][] = "Principal";
$tdataSchool_Report[".editFields"][] = "Address";
$tdataSchool_Report[".editFields"][] = "City";
$tdataSchool_Report[".editFields"][] = "Country";
$tdataSchool_Report[".editFields"][] = "Latitude";
$tdataSchool_Report[".editFields"][] = "province";

$tdataSchool_Report[".inlineEditFields"] = array();
$tdataSchool_Report[".inlineEditFields"][] = "Administrator";
$tdataSchool_Report[".inlineEditFields"][] = "Principal";
$tdataSchool_Report[".inlineEditFields"][] = "Address";
$tdataSchool_Report[".inlineEditFields"][] = "City";
$tdataSchool_Report[".inlineEditFields"][] = "Country";
$tdataSchool_Report[".inlineEditFields"][] = "Latitude";
$tdataSchool_Report[".inlineEditFields"][] = "province";

$tdataSchool_Report[".exportFields"] = array();
$tdataSchool_Report[".exportFields"][] = "Representative";
$tdataSchool_Report[".exportFields"][] = "School Name";
$tdataSchool_Report[".exportFields"][] = "Registration Number";
$tdataSchool_Report[".exportFields"][] = "Registration Date";
$tdataSchool_Report[".exportFields"][] = "School Type";
$tdataSchool_Report[".exportFields"][] = "Administrator";
$tdataSchool_Report[".exportFields"][] = "Principal";
$tdataSchool_Report[".exportFields"][] = "P.O.Box";
$tdataSchool_Report[".exportFields"][] = "Address";
$tdataSchool_Report[".exportFields"][] = "City";
$tdataSchool_Report[".exportFields"][] = "Country";
$tdataSchool_Report[".exportFields"][] = "E-mail";
$tdataSchool_Report[".exportFields"][] = "School Phone";
$tdataSchool_Report[".exportFields"][] = "Administrator Cell";
$tdataSchool_Report[".exportFields"][] = "Total Students";
$tdataSchool_Report[".exportFields"][] = "Longditude";
$tdataSchool_Report[".exportFields"][] = "Latitude";
$tdataSchool_Report[".exportFields"][] = "province";
$tdataSchool_Report[".exportFields"][] = "Postal code";

$tdataSchool_Report[".importFields"] = array();
$tdataSchool_Report[".importFields"][] = "Representative";
$tdataSchool_Report[".importFields"][] = "School Name";
$tdataSchool_Report[".importFields"][] = "Registration Number";
$tdataSchool_Report[".importFields"][] = "Registration Date";
$tdataSchool_Report[".importFields"][] = "School Type";
$tdataSchool_Report[".importFields"][] = "Administrator";
$tdataSchool_Report[".importFields"][] = "Principal";
$tdataSchool_Report[".importFields"][] = "P.O.Box";
$tdataSchool_Report[".importFields"][] = "Address";
$tdataSchool_Report[".importFields"][] = "City";
$tdataSchool_Report[".importFields"][] = "Country";
$tdataSchool_Report[".importFields"][] = "E-mail";
$tdataSchool_Report[".importFields"][] = "School Phone";
$tdataSchool_Report[".importFields"][] = "Administrator Cell";
$tdataSchool_Report[".importFields"][] = "Total Students";
$tdataSchool_Report[".importFields"][] = "Longditude";
$tdataSchool_Report[".importFields"][] = "Latitude";
$tdataSchool_Report[".importFields"][] = "province";
$tdataSchool_Report[".importFields"][] = "Postal code";

$tdataSchool_Report[".printFields"] = array();
$tdataSchool_Report[".printFields"][] = "Representative";
$tdataSchool_Report[".printFields"][] = "School Name";
$tdataSchool_Report[".printFields"][] = "Registration Number";
$tdataSchool_Report[".printFields"][] = "Registration Date";
$tdataSchool_Report[".printFields"][] = "School Type";
$tdataSchool_Report[".printFields"][] = "Administrator";
$tdataSchool_Report[".printFields"][] = "Principal";
$tdataSchool_Report[".printFields"][] = "P.O.Box";
$tdataSchool_Report[".printFields"][] = "Address";
$tdataSchool_Report[".printFields"][] = "City";
$tdataSchool_Report[".printFields"][] = "Country";
$tdataSchool_Report[".printFields"][] = "E-mail";
$tdataSchool_Report[".printFields"][] = "School Phone";
$tdataSchool_Report[".printFields"][] = "Administrator Cell";
$tdataSchool_Report[".printFields"][] = "Total Students";
$tdataSchool_Report[".printFields"][] = "Longditude";
$tdataSchool_Report[".printFields"][] = "Latitude";
$tdataSchool_Report[".printFields"][] = "province";
$tdataSchool_Report[".printFields"][] = "Postal code";

//	Representative
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Representative";
	$fdata["GoodName"] = "Representative";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","Representative"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rep_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rep_id";
	
		
		
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

	

	
	$tdataSchool_Report["Representative"] = $fdata;
//	School Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "School Name";
	$fdata["GoodName"] = "School_Name";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","School_Name"); 
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

	

	
	$tdataSchool_Report["School Name"] = $fdata;
//	Registration Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Registration Number";
	$fdata["GoodName"] = "Registration_Number";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","Registration_Number"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reg_number"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reg_number";
	
		
		
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

	

	
	$tdataSchool_Report["Registration Number"] = $fdata;
//	Registration Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Registration Date";
	$fdata["GoodName"] = "Registration_Date";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","Registration_Date"); 
	$fdata["FieldType"] = 7;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reg_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reg_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataSchool_Report["Registration Date"] = $fdata;
//	School Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "School Type";
	$fdata["GoodName"] = "School_Type";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","School_Type"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataSchool_Report["School Type"] = $fdata;
//	Administrator
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Administrator";
	$fdata["GoodName"] = "Administrator";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","Administrator"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "administrator"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "administrator";
	
		
		
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
			$edata["EditParams"].= " maxlength=54";
	
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

	

	
	$tdataSchool_Report["Administrator"] = $fdata;
//	Principal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Principal";
	$fdata["GoodName"] = "Principal";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","Principal"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "principal"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "principal";
	
		
		
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
			$edata["EditParams"].= " maxlength=54";
	
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

	

	
	$tdataSchool_Report["Principal"] = $fdata;
//	P.O.Box
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "P.O.Box";
	$fdata["GoodName"] = "P_O_Box";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","P_O_Box"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "postbox"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "postbox";
	
		
		
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

	

	
	$tdataSchool_Report["P.O.Box"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","Address"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "address"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address";
	
		
		
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
			$edata["EditParams"].= " maxlength=32";
	
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

	

	
	$tdataSchool_Report["Address"] = $fdata;
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","City"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "city"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city";
	
		
		
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
			$edata["EditParams"].= " maxlength=32";
	
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

	

	
	$tdataSchool_Report["City"] = $fdata;
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","Country"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=8";
	
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

	

	
	$tdataSchool_Report["Country"] = $fdata;
//	E-mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "E-mail";
	$fdata["GoodName"] = "E_mail";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","E_mail"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "postalcode"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "postalcode";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Email Hyperlink");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdataSchool_Report["E-mail"] = $fdata;
//	School Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "School Phone";
	$fdata["GoodName"] = "School_Phone";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","School_Phone"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataSchool_Report["School Phone"] = $fdata;
//	Administrator Cell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Administrator Cell";
	$fdata["GoodName"] = "Administrator_Cell";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","Administrator_Cell"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";
	
		
		
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

	

	
	$tdataSchool_Report["Administrator Cell"] = $fdata;
//	Total Students
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Total Students";
	$fdata["GoodName"] = "Total_Students";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","Total_Students"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "school_phone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "school_phone";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	
//Filters settings
	$fdata["filterTotals"] = 1;	
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "Representative";	
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdataSchool_Report["Total Students"] = $fdata;
//	Longditude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Longditude";
	$fdata["GoodName"] = "Longditude";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","Longditude"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "admin_cellphone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "admin_cellphone";
	
		
		
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

	

	
	$tdataSchool_Report["Longditude"] = $fdata;
//	Latitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Latitude";
	$fdata["GoodName"] = "Latitude";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","Latitude"); 
	$fdata["FieldType"] = 3;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
			$edata["EditParams"].= " maxlength=16";
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataSchool_Report["Latitude"] = $fdata;
//	province
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "province";
	$fdata["GoodName"] = "province";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","province"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "londitude"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "londitude";
	
		
		
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
			$edata["EditParams"].= " maxlength=32";
	
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

	

	
	$tdataSchool_Report["province"] = $fdata;
//	Postal code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Postal code";
	$fdata["GoodName"] = "Postal_code";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("School_Report","Postal_code"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "latitude"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "latitude";
	
		
		
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

	

	
	$tdataSchool_Report["Postal code"] = $fdata;

	
$tables_data["School Report"]=&$tdataSchool_Report;
$field_labels["School_Report"] = &$fieldLabelsSchool_Report;
$fieldToolTips["School Report"] = &$fieldToolTipsSchool_Report;
$page_titles["School_Report"] = &$pageTitlesSchool_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["School Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["School Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_School_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rep_id AS Representative,  school_name AS `School Name`,  reg_number AS `Registration Number`,  reg_date AS `Registration Date`,  school_type AS `School Type`,  administrator AS Administrator,  principal AS Principal,  postbox AS `P.O.Box`,  address AS Address,  city AS City,  province AS Province,  postalcode AS `Postal code`,  country AS Country,  email AS `E-mail`,  school_phone AS `School Phone`,  admin_cellphone AS `Administrator Cell`,  total_students AS `Total Students`,  londitude AS Longditude,  latitude AS Latitude";
$proto0["m_strFrom"] = "FROM school";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY rep_id DESC, country";
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
	"m_strName" => "rep_id",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto5["m_sql"] = "rep_id";
$proto5["m_srcTableName"] = "School Report";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Representative";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "school_name",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto7["m_sql"] = "school_name";
$proto7["m_srcTableName"] = "School Report";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "School Name";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "reg_number",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto9["m_sql"] = "reg_number";
$proto9["m_srcTableName"] = "School Report";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Registration Number";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "reg_date",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto11["m_sql"] = "reg_date";
$proto11["m_srcTableName"] = "School Report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Registration Date";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "school_type",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto13["m_sql"] = "school_type";
$proto13["m_srcTableName"] = "School Report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "School Type";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "administrator",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto15["m_sql"] = "administrator";
$proto15["m_srcTableName"] = "School Report";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Administrator";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "principal",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto17["m_sql"] = "principal";
$proto17["m_srcTableName"] = "School Report";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Principal";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "postbox",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto19["m_sql"] = "postbox";
$proto19["m_srcTableName"] = "School Report";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "P.O.Box";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto21["m_sql"] = "address";
$proto21["m_srcTableName"] = "School Report";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Address";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto23["m_sql"] = "city";
$proto23["m_srcTableName"] = "School Report";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "City";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "province",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto25["m_sql"] = "province";
$proto25["m_srcTableName"] = "School Report";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "Province";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "postalcode",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto27["m_sql"] = "postalcode";
$proto27["m_srcTableName"] = "School Report";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "Postal code";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto29["m_sql"] = "country";
$proto29["m_srcTableName"] = "School Report";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "Country";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto31["m_sql"] = "email";
$proto31["m_srcTableName"] = "School Report";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "E-mail";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "school_phone",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto33["m_sql"] = "school_phone";
$proto33["m_srcTableName"] = "School Report";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "School Phone";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "admin_cellphone",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto35["m_sql"] = "admin_cellphone";
$proto35["m_srcTableName"] = "School Report";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "Administrator Cell";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "total_students",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto37["m_sql"] = "total_students";
$proto37["m_srcTableName"] = "School Report";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "Total Students";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "londitude",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto39["m_sql"] = "londitude";
$proto39["m_srcTableName"] = "School Report";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "Longditude";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "latitude",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto41["m_sql"] = "latitude";
$proto41["m_srcTableName"] = "School Report";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "Latitude";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "school";
$proto44["m_srcTableName"] = "School Report";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "school_id";
$proto44["m_columns"][] = "rep_id";
$proto44["m_columns"][] = "school_name";
$proto44["m_columns"][] = "reg_number";
$proto44["m_columns"][] = "reg_date";
$proto44["m_columns"][] = "school_type";
$proto44["m_columns"][] = "londitude";
$proto44["m_columns"][] = "latitude";
$proto44["m_columns"][] = "administrator";
$proto44["m_columns"][] = "principal";
$proto44["m_columns"][] = "postbox";
$proto44["m_columns"][] = "address";
$proto44["m_columns"][] = "city";
$proto44["m_columns"][] = "province";
$proto44["m_columns"][] = "postalcode";
$proto44["m_columns"][] = "country";
$proto44["m_columns"][] = "email";
$proto44["m_columns"][] = "school_phone";
$proto44["m_columns"][] = "admin_cellphone";
$proto44["m_columns"][] = "cresh";
$proto44["m_columns"][] = "grade_r";
$proto44["m_columns"][] = "grade_0";
$proto44["m_columns"][] = "grade_1";
$proto44["m_columns"][] = "grade_2";
$proto44["m_columns"][] = "grade_3";
$proto44["m_columns"][] = "grade_4";
$proto44["m_columns"][] = "grade_5";
$proto44["m_columns"][] = "grade_6";
$proto44["m_columns"][] = "grade_7";
$proto44["m_columns"][] = "grade_8";
$proto44["m_columns"][] = "grade_9";
$proto44["m_columns"][] = "grade_10";
$proto44["m_columns"][] = "grade_11";
$proto44["m_columns"][] = "grade_12";
$proto44["m_columns"][] = "total_students";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "school";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "School Report";
$proto45=array();
$proto45["m_sql"] = "";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "rep_id",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto47["m_column"]=$obj;
$proto47["m_bAsc"] = 0;
$proto47["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto47);

$proto0["m_orderby"][]=$obj;					
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "school",
	"m_srcTableName" => "School Report"
));

$proto49["m_column"]=$obj;
$proto49["m_bAsc"] = 1;
$proto49["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto49);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="School Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_School_Report = createSqlQuery_School_Report();


	
																			
	
$tdataSchool_Report[".sqlquery"] = $queryData_School_Report;

$tableEvents["School Report"] = new eventsBase;
$tdataSchool_Report[".hasEvents"] = false;

?>