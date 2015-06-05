<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_members = array();	
	$tdataadmin_members[".truncateText"] = true;
	$tdataadmin_members[".NumberOfChars"] = 80; 
	$tdataadmin_members[".ShortName"] = "admin_members";
	$tdataadmin_members[".OwnerID"] = "Username";
	$tdataadmin_members[".OriginalTable"] = "users";

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"] = array();
	$fieldToolTipsadmin_members["English"] = array();
	$pageTitlesadmin_members["English"] = array();
	$fieldLabelsadmin_members["English"]["Username"] = "Username";
	$fieldToolTipsadmin_members["English"]["Username"] = "";
	$fieldLabelsadmin_members["English"]["Password"] = "Password";
	$fieldToolTipsadmin_members["English"]["Password"] = "";
	$fieldLabelsadmin_members["English"]["Country"] = "Country";
	$fieldToolTipsadmin_members["English"]["Country"] = "";
	$fieldLabelsadmin_members["English"]["First_Name"] = "First Name";
	$fieldToolTipsadmin_members["English"]["First Name"] = "";
	$fieldLabelsadmin_members["English"]["Surname"] = "Surname";
	$fieldToolTipsadmin_members["English"]["Surname"] = "";
	$fieldLabelsadmin_members["English"]["E_mail"] = "E-mail";
	$fieldToolTipsadmin_members["English"]["E-mail"] = "";
	$fieldLabelsadmin_members["English"]["Date_Created"] = "Date Created";
	$fieldToolTipsadmin_members["English"]["Date Created"] = "";
	$fieldLabelsadmin_members["English"]["user_id"] = "User Id";
	$fieldToolTipsadmin_members["English"]["user_id"] = "";
	$fieldLabelsadmin_members["English"]["username"] = "Username";
	$fieldToolTipsadmin_members["English"]["username"] = "";
	$fieldLabelsadmin_members["English"]["password"] = "Password";
	$fieldToolTipsadmin_members["English"]["password"] = "";
	$fieldLabelsadmin_members["English"]["User_Group"] = "User Group";
	$fieldToolTipsadmin_members["English"]["User Group"] = "";
	if (count($fieldToolTipsadmin_members["English"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_members[""] = array();
	$fieldToolTipsadmin_members[""] = array();
	$pageTitlesadmin_members[""] = array();
	$fieldLabelsadmin_members[""]["First_Name"] = "First Name";
	$fieldToolTipsadmin_members[""]["First Name"] = "";
	$fieldLabelsadmin_members[""]["Surname"] = "Surname";
	$fieldToolTipsadmin_members[""]["Surname"] = "";
	$fieldLabelsadmin_members[""]["E_mail"] = "E-mail";
	$fieldToolTipsadmin_members[""]["E-mail"] = "";
	$fieldLabelsadmin_members[""]["Date_Created"] = "Date Created";
	$fieldToolTipsadmin_members[""]["Date Created"] = "";
	$fieldLabelsadmin_members[""]["username"] = "Username";
	$fieldToolTipsadmin_members[""]["username"] = "";
	$fieldLabelsadmin_members[""]["password"] = "Password";
	$fieldToolTipsadmin_members[""]["password"] = "";
	$fieldLabelsadmin_members[""]["user_id"] = "User Id";
	$fieldToolTipsadmin_members[""]["user_id"] = "";
	$fieldLabelsadmin_members[""]["User_Group"] = "User Group";
	$fieldToolTipsadmin_members[""]["User Group"] = "";
	if (count($fieldToolTipsadmin_members[""]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
	
	
	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 1;
$tdataadmin_members[".recsPerRowList"] = 1;
$tdataadmin_members[".mainTableOwnerID"] = "Username";
$tdataadmin_members[".moveNext"] = 1;
$tdataadmin_members[".nType"] = 1;

$tdataadmin_members[".strOriginalTableName"] = "users";




$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_members[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_members[".fieldsForRegister"] = array();

$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = false;

	$tdataadmin_members[".locking"] = false;








$tdataadmin_members[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataadmin_members[".searchSaving"] = false;
//

$tdataadmin_members[".showSearchPanel"] = true;
		$tdataadmin_members[".flexibleSearch"] = true;		

if (isMobile())
	$tdataadmin_members[".isUseAjaxSuggest"] = false;
else 
	$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;



$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;





$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();

$tdataadmin_members[".allSearchFields"][] = "User Group";
	$tdataadmin_members[".allSearchFields"][] = "First Name";
	$tdataadmin_members[".allSearchFields"][] = "Surname";
	$tdataadmin_members[".allSearchFields"][] = "Username";
	$tdataadmin_members[".allSearchFields"][] = "Password";
	$tdataadmin_members[".allSearchFields"][] = "E-mail";
	$tdataadmin_members[".allSearchFields"][] = "Country";
	$tdataadmin_members[".allSearchFields"][] = "Date Created";
	

$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "First Name";
$tdataadmin_members[".googleLikeFields"][] = "Surname";
$tdataadmin_members[".googleLikeFields"][] = "Username";
$tdataadmin_members[".googleLikeFields"][] = "Password";
$tdataadmin_members[".googleLikeFields"][] = "E-mail";
$tdataadmin_members[".googleLikeFields"][] = "Country";
$tdataadmin_members[".googleLikeFields"][] = "Date Created";
$tdataadmin_members[".googleLikeFields"][] = "user_id";
$tdataadmin_members[".googleLikeFields"][] = "User Group";


$tdataadmin_members[".advSearchFields"] = array();
$tdataadmin_members[".advSearchFields"][] = "User Group";
$tdataadmin_members[".advSearchFields"][] = "First Name";
$tdataadmin_members[".advSearchFields"][] = "Surname";
$tdataadmin_members[".advSearchFields"][] = "Username";
$tdataadmin_members[".advSearchFields"][] = "Password";
$tdataadmin_members[".advSearchFields"][] = "E-mail";
$tdataadmin_members[".advSearchFields"][] = "Country";
$tdataadmin_members[".advSearchFields"][] = "Date Created";

$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT firstname AS `First Name`,  lastname AS Surname,  username AS Username,  password AS Password,  email AS `E-mail`,  country AS Country,  created AS `Date Created`,  user_id,  user_group AS `User Group`";
$tdataadmin_members[".sqlFrom"] = "FROM users";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "username";
$tableKeysadmin_members[] = "password";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;

$tdataadmin_members[".listFields"] = array();
$tdataadmin_members[".listFields"][] = "First Name";
$tdataadmin_members[".listFields"][] = "Surname";
$tdataadmin_members[".listFields"][] = "Username";
$tdataadmin_members[".listFields"][] = "Password";
$tdataadmin_members[".listFields"][] = "E-mail";
$tdataadmin_members[".listFields"][] = "Country";
$tdataadmin_members[".listFields"][] = "Date Created";
$tdataadmin_members[".listFields"][] = "User Group";

$tdataadmin_members[".hideMobileList"] = array();


$tdataadmin_members[".viewFields"] = array();
$tdataadmin_members[".viewFields"][] = "First Name";
$tdataadmin_members[".viewFields"][] = "Surname";
$tdataadmin_members[".viewFields"][] = "Username";
$tdataadmin_members[".viewFields"][] = "Password";
$tdataadmin_members[".viewFields"][] = "E-mail";
$tdataadmin_members[".viewFields"][] = "Country";
$tdataadmin_members[".viewFields"][] = "Date Created";
$tdataadmin_members[".viewFields"][] = "User Group";

$tdataadmin_members[".addFields"] = array();
$tdataadmin_members[".addFields"][] = "User Group";
$tdataadmin_members[".addFields"][] = "First Name";
$tdataadmin_members[".addFields"][] = "Surname";
$tdataadmin_members[".addFields"][] = "Username";
$tdataadmin_members[".addFields"][] = "Password";
$tdataadmin_members[".addFields"][] = "E-mail";
$tdataadmin_members[".addFields"][] = "Country";
$tdataadmin_members[".addFields"][] = "Date Created";

$tdataadmin_members[".inlineAddFields"] = array();
$tdataadmin_members[".inlineAddFields"][] = "First Name";
$tdataadmin_members[".inlineAddFields"][] = "Surname";
$tdataadmin_members[".inlineAddFields"][] = "Username";
$tdataadmin_members[".inlineAddFields"][] = "Password";
$tdataadmin_members[".inlineAddFields"][] = "E-mail";
$tdataadmin_members[".inlineAddFields"][] = "Country";
$tdataadmin_members[".inlineAddFields"][] = "Date Created";
$tdataadmin_members[".inlineAddFields"][] = "User Group";

$tdataadmin_members[".editFields"] = array();
$tdataadmin_members[".editFields"][] = "First Name";
$tdataadmin_members[".editFields"][] = "Surname";
$tdataadmin_members[".editFields"][] = "Username";
$tdataadmin_members[".editFields"][] = "Password";
$tdataadmin_members[".editFields"][] = "E-mail";
$tdataadmin_members[".editFields"][] = "Country";
$tdataadmin_members[".editFields"][] = "Date Created";
$tdataadmin_members[".editFields"][] = "User Group";

$tdataadmin_members[".inlineEditFields"] = array();
$tdataadmin_members[".inlineEditFields"][] = "First Name";
$tdataadmin_members[".inlineEditFields"][] = "Surname";
$tdataadmin_members[".inlineEditFields"][] = "Username";
$tdataadmin_members[".inlineEditFields"][] = "Password";
$tdataadmin_members[".inlineEditFields"][] = "E-mail";
$tdataadmin_members[".inlineEditFields"][] = "Country";
$tdataadmin_members[".inlineEditFields"][] = "Date Created";
$tdataadmin_members[".inlineEditFields"][] = "User Group";

$tdataadmin_members[".exportFields"] = array();
$tdataadmin_members[".exportFields"][] = "User Group";
$tdataadmin_members[".exportFields"][] = "First Name";
$tdataadmin_members[".exportFields"][] = "Surname";
$tdataadmin_members[".exportFields"][] = "Username";
$tdataadmin_members[".exportFields"][] = "Password";
$tdataadmin_members[".exportFields"][] = "E-mail";
$tdataadmin_members[".exportFields"][] = "Country";
$tdataadmin_members[".exportFields"][] = "Date Created";

$tdataadmin_members[".importFields"] = array();
$tdataadmin_members[".importFields"][] = "First Name";
$tdataadmin_members[".importFields"][] = "Surname";
$tdataadmin_members[".importFields"][] = "Username";
$tdataadmin_members[".importFields"][] = "Password";
$tdataadmin_members[".importFields"][] = "E-mail";
$tdataadmin_members[".importFields"][] = "Country";
$tdataadmin_members[".importFields"][] = "Date Created";
$tdataadmin_members[".importFields"][] = "User Group";

$tdataadmin_members[".printFields"] = array();
$tdataadmin_members[".printFields"][] = "User Group";
$tdataadmin_members[".printFields"][] = "First Name";
$tdataadmin_members[".printFields"][] = "Surname";
$tdataadmin_members[".printFields"][] = "Username";
$tdataadmin_members[".printFields"][] = "Password";
$tdataadmin_members[".printFields"][] = "E-mail";
$tdataadmin_members[".printFields"][] = "Country";
$tdataadmin_members[".printFields"][] = "Date Created";

//	First Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "First Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","First_Name"); 
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
	
		$fdata["strField"] = "firstname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "firstname";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataadmin_members["First Name"] = $fdata;
//	Surname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Surname";
	$fdata["GoodName"] = "Surname";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Surname"); 
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
	
		$fdata["strField"] = "lastname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastname";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataadmin_members["Surname"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Username"); 
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
	
		$fdata["strField"] = "username"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=16";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";	
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");
	
		
	//	End validation
	
		
				
		
		$edata["denyDuplicates"] = true;	

		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataadmin_members["Username"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Password"); 
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
	
		$fdata["strField"] = "password"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";
	
		
		
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
	
	$edata = array("EditFormat" => "Password");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=64";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Password");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataadmin_members["Password"] = $fdata;
//	E-mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "E-mail";
	$fdata["GoodName"] = "E_mail";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","E_mail"); 
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
	
		$fdata["strField"] = "email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";	
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");
	
		
	//	End validation
	
		
				
		
		$edata["denyDuplicates"] = true;	

		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataadmin_members["E-mail"] = $fdata;
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Country"); 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "country";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "Country";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Country";
	
		
	$edata["LookupOrderBy"] = "Country";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataadmin_members["Country"] = $fdata;
//	Date Created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Date Created";
	$fdata["GoodName"] = "Date_Created";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Date_Created"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "created"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 5; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataadmin_members["Date Created"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","user_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "user_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";
	
		
		
				
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
	
	
	
	

	

	
	$tdataadmin_members["user_id"] = $fdata;
//	User Group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "User Group";
	$fdata["GoodName"] = "User_Group";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","User_Group"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "user_group"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_group";
	
		
		
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

	

	
	$tdataadmin_members["User Group"] = $fdata;

	
$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "firstname AS `First Name`,  lastname AS Surname,  username AS Username,  password AS Password,  email AS `E-mail`,  country AS Country,  created AS `Date Created`,  user_id,  user_group AS `User Group`";
$proto0["m_strFrom"] = "FROM users";
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
	"m_strName" => "firstname",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto5["m_sql"] = "firstname";
$proto5["m_srcTableName"] = "admin_members";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "First Name";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "lastname",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto7["m_sql"] = "lastname";
$proto7["m_srcTableName"] = "admin_members";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "Surname";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto9["m_sql"] = "username";
$proto9["m_srcTableName"] = "admin_members";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Username";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto11["m_sql"] = "password";
$proto11["m_srcTableName"] = "admin_members";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Password";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto13["m_sql"] = "email";
$proto13["m_srcTableName"] = "admin_members";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "E-mail";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto15["m_sql"] = "country";
$proto15["m_srcTableName"] = "admin_members";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Country";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto17["m_sql"] = "created";
$proto17["m_srcTableName"] = "admin_members";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Date Created";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto19["m_sql"] = "user_id";
$proto19["m_srcTableName"] = "admin_members";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto21["m_sql"] = "user_group";
$proto21["m_srcTableName"] = "admin_members";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "User Group";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "users";
$proto24["m_srcTableName"] = "admin_members";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "user_id";
$proto24["m_columns"][] = "firstname";
$proto24["m_columns"][] = "lastname";
$proto24["m_columns"][] = "username";
$proto24["m_columns"][] = "password";
$proto24["m_columns"][] = "password_salt";
$proto24["m_columns"][] = "email";
$proto24["m_columns"][] = "country";
$proto24["m_columns"][] = "created";
$proto24["m_columns"][] = "user_group";
$proto24["m_columns"][] = "attempt";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "users";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "admin_members";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
									
	
$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

include_once(getabspath("include/admin_members_events.php"));
$tableEvents["admin_members"] = new eventclass_admin_members;
$tdataadmin_members[".hasEvents"] = true;

?>