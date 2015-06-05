<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareps_Report = array();	
	$tdatareps_Report[".truncateText"] = true;
	$tdatareps_Report[".NumberOfChars"] = 80; 
	$tdatareps_Report[".ShortName"] = "reps_Report";
	$tdatareps_Report[".OwnerID"] = "Address";
	$tdatareps_Report[".OriginalTable"] = "reps";

//	field labels
$fieldLabelsreps_Report = array();
$fieldToolTipsreps_Report = array();
$pageTitlesreps_Report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreps_Report["English"] = array();
	$fieldToolTipsreps_Report["English"] = array();
	$pageTitlesreps_Report["English"] = array();
	$fieldLabelsreps_Report["English"]["Address"] = "Address";
	$fieldToolTipsreps_Report["English"]["Address"] = "";
	$fieldLabelsreps_Report["English"]["City"] = "City";
	$fieldToolTipsreps_Report["English"]["City"] = "";
	$fieldLabelsreps_Report["English"]["Country"] = "Country";
	$fieldToolTipsreps_Report["English"]["Country"] = "";
	$fieldLabelsreps_Report["English"]["Birthdate"] = "Birthdate";
	$fieldToolTipsreps_Report["English"]["Birthdate"] = "";
	$fieldLabelsreps_Report["English"]["Surname"] = "Surname";
	$fieldToolTipsreps_Report["English"]["Surname"] = "";
	$fieldLabelsreps_Report["English"]["Passport_Number"] = "Passport Number";
	$fieldToolTipsreps_Report["English"]["Passport Number"] = "";
	$fieldLabelsreps_Report["English"]["P_O_Box"] = "P.O.Box";
	$fieldToolTipsreps_Report["English"]["P.O.Box"] = "";
	$fieldLabelsreps_Report["English"]["Home_Phone"] = "Home Phone";
	$fieldToolTipsreps_Report["English"]["Home Phone"] = "";
	$fieldLabelsreps_Report["English"]["Work_Phone"] = "Work Phone";
	$fieldToolTipsreps_Report["English"]["Work Phone"] = "";
	$fieldLabelsreps_Report["English"]["Cellular_Phone"] = "Cellular Phone";
	$fieldToolTipsreps_Report["English"]["Cellular Phone"] = "";
	$fieldLabelsreps_Report["English"]["E_mail"] = "E-mail";
	$fieldToolTipsreps_Report["English"]["E-mail"] = "";
	$fieldLabelsreps_Report["English"]["Name"] = "Name";
	$fieldToolTipsreps_Report["English"]["Name"] = "";
	$fieldLabelsreps_Report["English"]["province"] = "Province";
	$fieldToolTipsreps_Report["English"]["province"] = "";
	$fieldLabelsreps_Report["English"]["Postal_Code"] = "Postal Code";
	$fieldToolTipsreps_Report["English"]["Postal Code"] = "";
	if (count($fieldToolTipsreps_Report["English"]))
		$tdatareps_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreps_Report[""] = array();
	$fieldToolTipsreps_Report[""] = array();
	$pageTitlesreps_Report[""] = array();
	$fieldLabelsreps_Report[""]["Address"] = "Address";
	$fieldToolTipsreps_Report[""]["Address"] = "";
	$fieldLabelsreps_Report[""]["City"] = "City";
	$fieldToolTipsreps_Report[""]["City"] = "";
	$fieldLabelsreps_Report[""]["Country"] = "Country";
	$fieldToolTipsreps_Report[""]["Country"] = "";
	$fieldLabelsreps_Report[""]["Birthdate"] = "Birthdate";
	$fieldToolTipsreps_Report[""]["Birthdate"] = "";
	$fieldLabelsreps_Report[""]["Surname"] = "Surname";
	$fieldToolTipsreps_Report[""]["Surname"] = "";
	$fieldLabelsreps_Report[""]["Passport_Number"] = "Passport Number";
	$fieldToolTipsreps_Report[""]["Passport Number"] = "";
	$fieldLabelsreps_Report[""]["P_O_Box"] = "P.O.Box";
	$fieldToolTipsreps_Report[""]["P.O.Box"] = "";
	$fieldLabelsreps_Report[""]["Home_Phone"] = "Home Phone";
	$fieldToolTipsreps_Report[""]["Home Phone"] = "";
	$fieldLabelsreps_Report[""]["Work_Phone"] = "Work Phone";
	$fieldToolTipsreps_Report[""]["Work Phone"] = "";
	$fieldLabelsreps_Report[""]["Cellular_Phone"] = "Cellular Phone";
	$fieldToolTipsreps_Report[""]["Cellular Phone"] = "";
	$fieldLabelsreps_Report[""]["E_mail"] = "E-mail";
	$fieldToolTipsreps_Report[""]["E-mail"] = "";
	$fieldLabelsreps_Report[""]["Name"] = "Name";
	$fieldToolTipsreps_Report[""]["Name"] = "";
	$fieldLabelsreps_Report[""]["province"] = "Province";
	$fieldToolTipsreps_Report[""]["province"] = "";
	$fieldLabelsreps_Report[""]["Postal_Code"] = "Postal Code";
	$fieldToolTipsreps_Report[""]["Postal Code"] = "";
	if (count($fieldToolTipsreps_Report[""]))
		$tdatareps_Report[".isUseToolTips"] = true;
}
	
	
	$tdatareps_Report[".NCSearch"] = true;



$tdatareps_Report[".shortTableName"] = "reps_Report";
$tdatareps_Report[".nSecOptions"] = 1;
$tdatareps_Report[".recsPerRowList"] = 1;
$tdatareps_Report[".mainTableOwnerID"] = "Address";
$tdatareps_Report[".moveNext"] = 1;
$tdatareps_Report[".nType"] = 2;

$tdatareps_Report[".strOriginalTableName"] = "reps";




$tdatareps_Report[".showAddInPopup"] = false;

$tdatareps_Report[".showEditInPopup"] = false;

$tdatareps_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatareps_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareps_Report[".fieldsForRegister"] = array();

$tdatareps_Report[".listAjax"] = false;

	$tdatareps_Report[".audit"] = false;

	$tdatareps_Report[".locking"] = false;


$tdatareps_Report[".list"] = true;

$tdatareps_Report[".inlineAdd"] = true;


$tdatareps_Report[".exportTo"] = true;

$tdatareps_Report[".printFriendly"] = true;


$tdatareps_Report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatareps_Report[".searchSaving"] = false;
//

$tdatareps_Report[".showSearchPanel"] = true;
		$tdatareps_Report[".flexibleSearch"] = true;		

if (isMobile())
	$tdatareps_Report[".isUseAjaxSuggest"] = false;
else 
	$tdatareps_Report[".isUseAjaxSuggest"] = true;




$tdatareps_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareps_Report[".isUseTimeForSearch"] = false;





$tdatareps_Report[".allSearchFields"] = array();
$tdatareps_Report[".filterFields"] = array();
$tdatareps_Report[".requiredSearchFields"] = array();

$tdatareps_Report[".allSearchFields"][] = "Name";
	$tdatareps_Report[".allSearchFields"][] = "Surname";
	$tdatareps_Report[".allSearchFields"][] = "Passport Number";
	$tdatareps_Report[".allSearchFields"][] = "P.O.Box";
	$tdatareps_Report[".allSearchFields"][] = "Address";
	$tdatareps_Report[".allSearchFields"][] = "City";
	$tdatareps_Report[".allSearchFields"][] = "Home Phone";
	$tdatareps_Report[".allSearchFields"][] = "Work Phone";
	$tdatareps_Report[".allSearchFields"][] = "Cellular Phone";
	$tdatareps_Report[".allSearchFields"][] = "E-mail";
	$tdatareps_Report[".allSearchFields"][] = "Birthdate";
	$tdatareps_Report[".allSearchFields"][] = "Country";
	$tdatareps_Report[".allSearchFields"][] = "province";
	$tdatareps_Report[".allSearchFields"][] = "Postal Code";
	

$tdatareps_Report[".googleLikeFields"] = array();
$tdatareps_Report[".googleLikeFields"][] = "Name";
$tdatareps_Report[".googleLikeFields"][] = "Surname";
$tdatareps_Report[".googleLikeFields"][] = "Passport Number";
$tdatareps_Report[".googleLikeFields"][] = "P.O.Box";
$tdatareps_Report[".googleLikeFields"][] = "Address";
$tdatareps_Report[".googleLikeFields"][] = "City";
$tdatareps_Report[".googleLikeFields"][] = "Home Phone";
$tdatareps_Report[".googleLikeFields"][] = "Work Phone";
$tdatareps_Report[".googleLikeFields"][] = "Cellular Phone";
$tdatareps_Report[".googleLikeFields"][] = "E-mail";
$tdatareps_Report[".googleLikeFields"][] = "Birthdate";
$tdatareps_Report[".googleLikeFields"][] = "Country";
$tdatareps_Report[".googleLikeFields"][] = "province";
$tdatareps_Report[".googleLikeFields"][] = "Postal Code";


$tdatareps_Report[".advSearchFields"] = array();
$tdatareps_Report[".advSearchFields"][] = "Name";
$tdatareps_Report[".advSearchFields"][] = "Surname";
$tdatareps_Report[".advSearchFields"][] = "Passport Number";
$tdatareps_Report[".advSearchFields"][] = "P.O.Box";
$tdatareps_Report[".advSearchFields"][] = "Address";
$tdatareps_Report[".advSearchFields"][] = "City";
$tdatareps_Report[".advSearchFields"][] = "Home Phone";
$tdatareps_Report[".advSearchFields"][] = "Work Phone";
$tdatareps_Report[".advSearchFields"][] = "Cellular Phone";
$tdatareps_Report[".advSearchFields"][] = "E-mail";
$tdatareps_Report[".advSearchFields"][] = "Birthdate";
$tdatareps_Report[".advSearchFields"][] = "Country";
$tdatareps_Report[".advSearchFields"][] = "province";
$tdatareps_Report[".advSearchFields"][] = "Postal Code";

$tdatareps_Report[".tableType"] = "report";

$tdatareps_Report[".printerPageOrientation"] = 0;
$tdatareps_Report[".nPrinterPageScale"] = 100;

$tdatareps_Report[".nPrinterSplitRecords"] = 40;

$tdatareps_Report[".nPrinterPDFSplitRecords"] = 40;


//report settings
$tdatareps_Report[".printReportLayout"] = 6;	
$tdatareps_Report[".reportPrintPartitionType"] = 0;	
$tdatareps_Report[".reportPrintGroupsPerPage"] = 3;	
$tdatareps_Report[".lowGroup"] = 0;

$tdatareps_Report[".pageSize"] = 20;	






$tdatareps_Report[".repShowDet"] = true;

$tdatareps_Report[".reportLayout"] = 6;

//end of report settings



	





// view page pdf

// print page pdf
$tdatareps_Report[".isPrinterPagePDF"] = true;
$tdatareps_Report[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "ORDER BY country";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareps_Report[".strOrderBy"] = $tstrOrderBy;

$tdatareps_Report[".orderindexes"] = array();
$tdatareps_Report[".orderindexes"][] = array(9, (1 ? "ASC" : "DESC"), "country");

$tdatareps_Report[".sqlHead"] = "SELECT firstname AS `Name`,  lastname AS Surname,  passport AS `Passport Number`,  postbox AS `P.O.Box`,  address AS `Address`,  city AS `City`,  province AS `Province`,  postalcode AS `Postal Code`,  country AS `Country`,  homephone AS `Home Phone`,  workphone AS `Work Phone`,  cellphone AS `Cellular Phone`,  email AS `E-mail`,  birthdate AS Birthdate";
$tdatareps_Report[".sqlFrom"] = "FROM reps";
$tdatareps_Report[".sqlWhereExpr"] = "";
$tdatareps_Report[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareps_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareps_Report[".arrGroupsPerPage"] = $arrGPP;

$tdatareps_Report[".highlightSearchResults"] = true;

$tableKeysreps_Report = array();
$tdatareps_Report[".Keys"] = $tableKeysreps_Report;

$tdatareps_Report[".listFields"] = array();
$tdatareps_Report[".listFields"][] = "Name";
$tdatareps_Report[".listFields"][] = "Surname";
$tdatareps_Report[".listFields"][] = "Passport Number";
$tdatareps_Report[".listFields"][] = "P.O.Box";
$tdatareps_Report[".listFields"][] = "Address";
$tdatareps_Report[".listFields"][] = "City";
$tdatareps_Report[".listFields"][] = "Home Phone";
$tdatareps_Report[".listFields"][] = "Work Phone";
$tdatareps_Report[".listFields"][] = "Cellular Phone";
$tdatareps_Report[".listFields"][] = "E-mail";
$tdatareps_Report[".listFields"][] = "Birthdate";
$tdatareps_Report[".listFields"][] = "Country";
$tdatareps_Report[".listFields"][] = "province";
$tdatareps_Report[".listFields"][] = "Postal Code";

$tdatareps_Report[".hideMobileList"] = array();


$tdatareps_Report[".viewFields"] = array();
$tdatareps_Report[".viewFields"][] = "Name";
$tdatareps_Report[".viewFields"][] = "Surname";
$tdatareps_Report[".viewFields"][] = "Passport Number";
$tdatareps_Report[".viewFields"][] = "P.O.Box";
$tdatareps_Report[".viewFields"][] = "Address";
$tdatareps_Report[".viewFields"][] = "City";
$tdatareps_Report[".viewFields"][] = "Home Phone";
$tdatareps_Report[".viewFields"][] = "Work Phone";
$tdatareps_Report[".viewFields"][] = "Cellular Phone";
$tdatareps_Report[".viewFields"][] = "E-mail";
$tdatareps_Report[".viewFields"][] = "Birthdate";
$tdatareps_Report[".viewFields"][] = "Country";
$tdatareps_Report[".viewFields"][] = "province";
$tdatareps_Report[".viewFields"][] = "Postal Code";

$tdatareps_Report[".addFields"] = array();
$tdatareps_Report[".addFields"][] = "City";
$tdatareps_Report[".addFields"][] = "Birthdate";
$tdatareps_Report[".addFields"][] = "Country";
$tdatareps_Report[".addFields"][] = "province";

$tdatareps_Report[".inlineAddFields"] = array();
$tdatareps_Report[".inlineAddFields"][] = "City";
$tdatareps_Report[".inlineAddFields"][] = "Birthdate";
$tdatareps_Report[".inlineAddFields"][] = "Country";
$tdatareps_Report[".inlineAddFields"][] = "province";

$tdatareps_Report[".editFields"] = array();
$tdatareps_Report[".editFields"][] = "Address";
$tdatareps_Report[".editFields"][] = "City";
$tdatareps_Report[".editFields"][] = "Birthdate";
$tdatareps_Report[".editFields"][] = "Country";
$tdatareps_Report[".editFields"][] = "province";

$tdatareps_Report[".inlineEditFields"] = array();
$tdatareps_Report[".inlineEditFields"][] = "Address";
$tdatareps_Report[".inlineEditFields"][] = "City";
$tdatareps_Report[".inlineEditFields"][] = "Birthdate";
$tdatareps_Report[".inlineEditFields"][] = "Country";
$tdatareps_Report[".inlineEditFields"][] = "province";

$tdatareps_Report[".exportFields"] = array();
$tdatareps_Report[".exportFields"][] = "Name";
$tdatareps_Report[".exportFields"][] = "Surname";
$tdatareps_Report[".exportFields"][] = "Passport Number";
$tdatareps_Report[".exportFields"][] = "P.O.Box";
$tdatareps_Report[".exportFields"][] = "Address";
$tdatareps_Report[".exportFields"][] = "City";
$tdatareps_Report[".exportFields"][] = "Home Phone";
$tdatareps_Report[".exportFields"][] = "Work Phone";
$tdatareps_Report[".exportFields"][] = "Cellular Phone";
$tdatareps_Report[".exportFields"][] = "E-mail";
$tdatareps_Report[".exportFields"][] = "Birthdate";
$tdatareps_Report[".exportFields"][] = "Country";
$tdatareps_Report[".exportFields"][] = "province";
$tdatareps_Report[".exportFields"][] = "Postal Code";

$tdatareps_Report[".importFields"] = array();
$tdatareps_Report[".importFields"][] = "Name";
$tdatareps_Report[".importFields"][] = "Surname";
$tdatareps_Report[".importFields"][] = "Passport Number";
$tdatareps_Report[".importFields"][] = "P.O.Box";
$tdatareps_Report[".importFields"][] = "Address";
$tdatareps_Report[".importFields"][] = "City";
$tdatareps_Report[".importFields"][] = "Home Phone";
$tdatareps_Report[".importFields"][] = "Work Phone";
$tdatareps_Report[".importFields"][] = "Cellular Phone";
$tdatareps_Report[".importFields"][] = "E-mail";
$tdatareps_Report[".importFields"][] = "Birthdate";
$tdatareps_Report[".importFields"][] = "Country";
$tdatareps_Report[".importFields"][] = "province";
$tdatareps_Report[".importFields"][] = "Postal Code";

$tdatareps_Report[".printFields"] = array();
$tdatareps_Report[".printFields"][] = "Name";
$tdatareps_Report[".printFields"][] = "Surname";
$tdatareps_Report[".printFields"][] = "Passport Number";
$tdatareps_Report[".printFields"][] = "P.O.Box";
$tdatareps_Report[".printFields"][] = "Address";
$tdatareps_Report[".printFields"][] = "City";
$tdatareps_Report[".printFields"][] = "Home Phone";
$tdatareps_Report[".printFields"][] = "Work Phone";
$tdatareps_Report[".printFields"][] = "Cellular Phone";
$tdatareps_Report[".printFields"][] = "E-mail";
$tdatareps_Report[".printFields"][] = "Birthdate";
$tdatareps_Report[".printFields"][] = "Country";
$tdatareps_Report[".printFields"][] = "province";
$tdatareps_Report[".printFields"][] = "Postal Code";

//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps_Report","Name"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "firstname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "firstname";
	
		
		
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

	

	
	$tdatareps_Report["Name"] = $fdata;
//	Surname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Surname";
	$fdata["GoodName"] = "Surname";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps_Report","Surname"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "lastname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastname";
	
		
		
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

	

	
	$tdatareps_Report["Surname"] = $fdata;
//	Passport Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Passport Number";
	$fdata["GoodName"] = "Passport_Number";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps_Report","Passport_Number"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "passport"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "passport";
	
		
		
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

	

	
	$tdatareps_Report["Passport Number"] = $fdata;
//	P.O.Box
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "P.O.Box";
	$fdata["GoodName"] = "P_O_Box";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps_Report","P_O_Box"); 
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

	

	
	$tdatareps_Report["P.O.Box"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps_Report","Address"); 
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

	

	
	$tdatareps_Report["Address"] = $fdata;
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps_Report","City"); 
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

	

	
	$tdatareps_Report["City"] = $fdata;
//	Home Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Home Phone";
	$fdata["GoodName"] = "Home_Phone";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps_Report","Home_Phone"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatareps_Report["Home Phone"] = $fdata;
//	Work Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Work Phone";
	$fdata["GoodName"] = "Work_Phone";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps_Report","Work_Phone"); 
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

	

	
	$tdatareps_Report["Work Phone"] = $fdata;
//	Cellular Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cellular Phone";
	$fdata["GoodName"] = "Cellular_Phone";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps_Report","Cellular_Phone"); 
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

	

	
	$tdatareps_Report["Cellular Phone"] = $fdata;
//	E-mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "E-mail";
	$fdata["GoodName"] = "E_mail";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps_Report","E_mail"); 
	$fdata["FieldType"] = 200;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "homephone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "homephone";
	
		
		
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

	

	
	$tdatareps_Report["E-mail"] = $fdata;
//	Birthdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Birthdate";
	$fdata["GoodName"] = "Birthdate";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps_Report","Birthdate"); 
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
	
		$fdata["strField"] = "workphone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "workphone";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatareps_Report["Birthdate"] = $fdata;
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps_Report","Country"); 
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
	
		$fdata["strField"] = "cellphone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cellphone";
	
		
		
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

	

	
	$tdatareps_Report["Country"] = $fdata;
//	province
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "province";
	$fdata["GoodName"] = "province";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps_Report","province"); 
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

	

	
	$tdatareps_Report["province"] = $fdata;
//	Postal Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Postal Code";
	$fdata["GoodName"] = "Postal_Code";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps_Report","Postal_Code"); 
	$fdata["FieldType"] = 7;
	
		// report field settings
					// end of report field settings
	
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "birthdate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "birthdate";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatareps_Report["Postal Code"] = $fdata;

	
$tables_data["reps Report"]=&$tdatareps_Report;
$field_labels["reps_Report"] = &$fieldLabelsreps_Report;
$fieldToolTips["reps Report"] = &$fieldToolTipsreps_Report;
$page_titles["reps_Report"] = &$pageTitlesreps_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["reps Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["reps Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_reps_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "firstname AS `Name`,  lastname AS Surname,  passport AS `Passport Number`,  postbox AS `P.O.Box`,  address AS `Address`,  city AS `City`,  province AS `Province`,  postalcode AS `Postal Code`,  country AS `Country`,  homephone AS `Home Phone`,  workphone AS `Work Phone`,  cellphone AS `Cellular Phone`,  email AS `E-mail`,  birthdate AS Birthdate";
$proto0["m_strFrom"] = "FROM reps";
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
	"m_strName" => "firstname",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto5["m_sql"] = "firstname";
$proto5["m_srcTableName"] = "reps Report";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Name";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "lastname",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto7["m_sql"] = "lastname";
$proto7["m_srcTableName"] = "reps Report";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "Surname";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "passport",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto9["m_sql"] = "passport";
$proto9["m_srcTableName"] = "reps Report";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Passport Number";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "postbox",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto11["m_sql"] = "postbox";
$proto11["m_srcTableName"] = "reps Report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "P.O.Box";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto13["m_sql"] = "address";
$proto13["m_srcTableName"] = "reps Report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "Address";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto15["m_sql"] = "city";
$proto15["m_srcTableName"] = "reps Report";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "City";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "province",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto17["m_sql"] = "province";
$proto17["m_srcTableName"] = "reps Report";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Province";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "postalcode",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto19["m_sql"] = "postalcode";
$proto19["m_srcTableName"] = "reps Report";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Postal Code";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto21["m_sql"] = "country";
$proto21["m_srcTableName"] = "reps Report";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Country";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "homephone",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto23["m_sql"] = "homephone";
$proto23["m_srcTableName"] = "reps Report";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Home Phone";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "workphone",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto25["m_sql"] = "workphone";
$proto25["m_srcTableName"] = "reps Report";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "Work Phone";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "cellphone",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto27["m_sql"] = "cellphone";
$proto27["m_srcTableName"] = "reps Report";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "Cellular Phone";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto29["m_sql"] = "email";
$proto29["m_srcTableName"] = "reps Report";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "E-mail";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "birthdate",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto31["m_sql"] = "birthdate";
$proto31["m_srcTableName"] = "reps Report";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "Birthdate";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "reps";
$proto34["m_srcTableName"] = "reps Report";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "rep_id";
$proto34["m_columns"][] = "firstname";
$proto34["m_columns"][] = "lastname";
$proto34["m_columns"][] = "passport";
$proto34["m_columns"][] = "postbox";
$proto34["m_columns"][] = "address";
$proto34["m_columns"][] = "city";
$proto34["m_columns"][] = "province";
$proto34["m_columns"][] = "country";
$proto34["m_columns"][] = "postalcode";
$proto34["m_columns"][] = "homephone";
$proto34["m_columns"][] = "workphone";
$proto34["m_columns"][] = "cellphone";
$proto34["m_columns"][] = "email";
$proto34["m_columns"][] = "birthdate";
$proto34["m_columns"][] = "photo";
$proto34["m_columns"][] = "username";
$proto34["m_columns"][] = "password";
$proto34["m_columns"][] = "pwsalt";
$proto34["m_columns"][] = "group";
$proto34["m_columns"][] = "created";
$proto34["m_columns"][] = "attempt";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "reps";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "reps Report";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps Report"
));

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 1;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="reps Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reps_Report = createSqlQuery_reps_Report();


	
														
	
$tdatareps_Report[".sqlquery"] = $queryData_reps_Report;

$tableEvents["reps Report"] = new eventsBase;
$tdatareps_Report[".hasEvents"] = false;

?>