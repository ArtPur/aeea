<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_users = array();	
	$tdataadmin_users[".truncateText"] = true;
	$tdataadmin_users[".NumberOfChars"] = 80; 
	$tdataadmin_users[".ShortName"] = "admin_users";
	$tdataadmin_users[".OwnerID"] = "Username";
	$tdataadmin_users[".OriginalTable"] = "users";

//	field labels
$fieldLabelsadmin_users = array();
$fieldToolTipsadmin_users = array();
$pageTitlesadmin_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_users["English"] = array();
	$fieldToolTipsadmin_users["English"] = array();
	$pageTitlesadmin_users["English"] = array();
	$fieldLabelsadmin_users["English"]["Username"] = "Username";
	$fieldToolTipsadmin_users["English"]["Username"] = "";
	$fieldLabelsadmin_users["English"]["Password"] = "Password";
	$fieldToolTipsadmin_users["English"]["Password"] = "";
	$fieldLabelsadmin_users["English"]["Country"] = "Country";
	$fieldToolTipsadmin_users["English"]["Country"] = "";
	$fieldLabelsadmin_users["English"]["First_Name"] = "First Name";
	$fieldToolTipsadmin_users["English"]["First Name"] = "";
	$fieldLabelsadmin_users["English"]["Surname"] = "Surname";
	$fieldToolTipsadmin_users["English"]["Surname"] = "";
	$fieldLabelsadmin_users["English"]["E_mail"] = "E-mail";
	$fieldToolTipsadmin_users["English"]["E-mail"] = "";
	$fieldLabelsadmin_users["English"]["Date_Created"] = "Date Created";
	$fieldToolTipsadmin_users["English"]["Date Created"] = "";
	$fieldLabelsadmin_users["English"]["user_id"] = "User Id";
	$fieldToolTipsadmin_users["English"]["user_id"] = "";
	$fieldLabelsadmin_users["English"]["username"] = "Username";
	$fieldToolTipsadmin_users["English"]["username"] = "";
	$fieldLabelsadmin_users["English"]["password"] = "Password";
	$fieldToolTipsadmin_users["English"]["password"] = "";
	$fieldLabelsadmin_users["English"]["User_Group"] = "User Group";
	$fieldToolTipsadmin_users["English"]["User Group"] = "";
	if (count($fieldToolTipsadmin_users["English"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_users[""] = array();
	$fieldToolTipsadmin_users[""] = array();
	$pageTitlesadmin_users[""] = array();
	$fieldLabelsadmin_users[""]["First_Name"] = "First Name";
	$fieldToolTipsadmin_users[""]["First Name"] = "";
	$fieldLabelsadmin_users[""]["Surname"] = "Surname";
	$fieldToolTipsadmin_users[""]["Surname"] = "";
	$fieldLabelsadmin_users[""]["E_mail"] = "E-mail";
	$fieldToolTipsadmin_users[""]["E-mail"] = "";
	$fieldLabelsadmin_users[""]["Date_Created"] = "Date Created";
	$fieldToolTipsadmin_users[""]["Date Created"] = "";
	$fieldLabelsadmin_users[""]["username"] = "Username";
	$fieldToolTipsadmin_users[""]["username"] = "";
	$fieldLabelsadmin_users[""]["password"] = "Password";
	$fieldToolTipsadmin_users[""]["password"] = "";
	$fieldLabelsadmin_users[""]["user_id"] = "User Id";
	$fieldToolTipsadmin_users[""]["user_id"] = "";
	$fieldLabelsadmin_users[""]["User_Group"] = "User Group";
	$fieldToolTipsadmin_users[""]["User Group"] = "";
	if (count($fieldToolTipsadmin_users[""]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
	
	
	$tdataadmin_users[".NCSearch"] = true;



$tdataadmin_users[".shortTableName"] = "admin_users";
$tdataadmin_users[".nSecOptions"] = 1;
$tdataadmin_users[".recsPerRowList"] = 1;
$tdataadmin_users[".mainTableOwnerID"] = "Username";
$tdataadmin_users[".moveNext"] = 1;
$tdataadmin_users[".nType"] = 1;

$tdataadmin_users[".strOriginalTableName"] = "users";




$tdataadmin_users[".showAddInPopup"] = false;

$tdataadmin_users[".showEditInPopup"] = false;

$tdataadmin_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_users[".fieldsForRegister"] = array();

$tdataadmin_users[".listAjax"] = false;

	$tdataadmin_users[".audit"] = false;

	$tdataadmin_users[".locking"] = false;


$tdataadmin_users[".list"] = true;

$tdataadmin_users[".inlineEdit"] = true;
$tdataadmin_users[".inlineAdd"] = true;


$tdataadmin_users[".exportTo"] = true;

$tdataadmin_users[".printFriendly"] = true;

$tdataadmin_users[".delete"] = true;

$tdataadmin_users[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataadmin_users[".searchSaving"] = false;
//

$tdataadmin_users[".showSearchPanel"] = true;
		$tdataadmin_users[".flexibleSearch"] = true;		

if (isMobile())
	$tdataadmin_users[".isUseAjaxSuggest"] = false;
else 
	$tdataadmin_users[".isUseAjaxSuggest"] = true;

$tdataadmin_users[".rowHighlite"] = true;



$tdataadmin_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_users[".isUseTimeForSearch"] = false;





$tdataadmin_users[".allSearchFields"] = array();
$tdataadmin_users[".filterFields"] = array();
$tdataadmin_users[".requiredSearchFields"] = array();

$tdataadmin_users[".allSearchFields"][] = "User Group";
	$tdataadmin_users[".allSearchFields"][] = "First Name";
	$tdataadmin_users[".allSearchFields"][] = "Surname";
	$tdataadmin_users[".allSearchFields"][] = "Username";
	$tdataadmin_users[".allSearchFields"][] = "Password";
	$tdataadmin_users[".allSearchFields"][] = "E-mail";
	$tdataadmin_users[".allSearchFields"][] = "Country";
	$tdataadmin_users[".allSearchFields"][] = "Date Created";
	

$tdataadmin_users[".googleLikeFields"] = array();
$tdataadmin_users[".googleLikeFields"][] = "First Name";
$tdataadmin_users[".googleLikeFields"][] = "Surname";
$tdataadmin_users[".googleLikeFields"][] = "Username";
$tdataadmin_users[".googleLikeFields"][] = "Password";
$tdataadmin_users[".googleLikeFields"][] = "E-mail";
$tdataadmin_users[".googleLikeFields"][] = "Country";
$tdataadmin_users[".googleLikeFields"][] = "Date Created";
$tdataadmin_users[".googleLikeFields"][] = "user_id";
$tdataadmin_users[".googleLikeFields"][] = "User Group";


$tdataadmin_users[".advSearchFields"] = array();
$tdataadmin_users[".advSearchFields"][] = "User Group";
$tdataadmin_users[".advSearchFields"][] = "First Name";
$tdataadmin_users[".advSearchFields"][] = "Surname";
$tdataadmin_users[".advSearchFields"][] = "Username";
$tdataadmin_users[".advSearchFields"][] = "Password";
$tdataadmin_users[".advSearchFields"][] = "E-mail";
$tdataadmin_users[".advSearchFields"][] = "Country";
$tdataadmin_users[".advSearchFields"][] = "Date Created";

$tdataadmin_users[".tableType"] = "list";

$tdataadmin_users[".printerPageOrientation"] = 0;
$tdataadmin_users[".nPrinterPageScale"] = 100;

$tdataadmin_users[".nPrinterSplitRecords"] = 40;

$tdataadmin_users[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataadmin_users[".pageSize"] = 20;

$tdataadmin_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_users[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_users[".orderindexes"] = array();

$tdataadmin_users[".sqlHead"] = "SELECT firstname AS `First Name`,  lastname AS Surname,  username AS Username,  password AS Password,  email AS `E-mail`,  country AS Country,  created AS `Date Created`,  user_id,  user_group AS `User Group`";
$tdataadmin_users[".sqlFrom"] = "FROM users";
$tdataadmin_users[".sqlWhereExpr"] = "";
$tdataadmin_users[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_users[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_users[".highlightSearchResults"] = true;

$tableKeysadmin_users = array();
$tableKeysadmin_users[] = "username";
$tableKeysadmin_users[] = "password";
$tdataadmin_users[".Keys"] = $tableKeysadmin_users;

$tdataadmin_users[".listFields"] = array();
$tdataadmin_users[".listFields"][] = "First Name";
$tdataadmin_users[".listFields"][] = "Surname";
$tdataadmin_users[".listFields"][] = "Username";
$tdataadmin_users[".listFields"][] = "Password";
$tdataadmin_users[".listFields"][] = "E-mail";
$tdataadmin_users[".listFields"][] = "Country";
$tdataadmin_users[".listFields"][] = "Date Created";
$tdataadmin_users[".listFields"][] = "User Group";

$tdataadmin_users[".hideMobileList"] = array();


$tdataadmin_users[".viewFields"] = array();
$tdataadmin_users[".viewFields"][] = "First Name";
$tdataadmin_users[".viewFields"][] = "Surname";
$tdataadmin_users[".viewFields"][] = "Username";
$tdataadmin_users[".viewFields"][] = "Password";
$tdataadmin_users[".viewFields"][] = "E-mail";
$tdataadmin_users[".viewFields"][] = "Country";
$tdataadmin_users[".viewFields"][] = "Date Created";
$tdataadmin_users[".viewFields"][] = "User Group";

$tdataadmin_users[".addFields"] = array();
$tdataadmin_users[".addFields"][] = "User Group";
$tdataadmin_users[".addFields"][] = "First Name";
$tdataadmin_users[".addFields"][] = "Surname";
$tdataadmin_users[".addFields"][] = "Username";
$tdataadmin_users[".addFields"][] = "Password";
$tdataadmin_users[".addFields"][] = "E-mail";
$tdataadmin_users[".addFields"][] = "Country";
$tdataadmin_users[".addFields"][] = "Date Created";

$tdataadmin_users[".inlineAddFields"] = array();
$tdataadmin_users[".inlineAddFields"][] = "First Name";
$tdataadmin_users[".inlineAddFields"][] = "Surname";
$tdataadmin_users[".inlineAddFields"][] = "Username";
$tdataadmin_users[".inlineAddFields"][] = "Password";
$tdataadmin_users[".inlineAddFields"][] = "E-mail";
$tdataadmin_users[".inlineAddFields"][] = "Country";
$tdataadmin_users[".inlineAddFields"][] = "Date Created";
$tdataadmin_users[".inlineAddFields"][] = "User Group";

$tdataadmin_users[".editFields"] = array();
$tdataadmin_users[".editFields"][] = "First Name";
$tdataadmin_users[".editFields"][] = "Surname";
$tdataadmin_users[".editFields"][] = "Username";
$tdataadmin_users[".editFields"][] = "Password";
$tdataadmin_users[".editFields"][] = "E-mail";
$tdataadmin_users[".editFields"][] = "Country";
$tdataadmin_users[".editFields"][] = "Date Created";
$tdataadmin_users[".editFields"][] = "User Group";

$tdataadmin_users[".inlineEditFields"] = array();
$tdataadmin_users[".inlineEditFields"][] = "First Name";
$tdataadmin_users[".inlineEditFields"][] = "Surname";
$tdataadmin_users[".inlineEditFields"][] = "Username";
$tdataadmin_users[".inlineEditFields"][] = "Password";
$tdataadmin_users[".inlineEditFields"][] = "E-mail";
$tdataadmin_users[".inlineEditFields"][] = "Country";
$tdataadmin_users[".inlineEditFields"][] = "Date Created";
$tdataadmin_users[".inlineEditFields"][] = "User Group";

$tdataadmin_users[".exportFields"] = array();
$tdataadmin_users[".exportFields"][] = "User Group";
$tdataadmin_users[".exportFields"][] = "First Name";
$tdataadmin_users[".exportFields"][] = "Surname";
$tdataadmin_users[".exportFields"][] = "Username";
$tdataadmin_users[".exportFields"][] = "Password";
$tdataadmin_users[".exportFields"][] = "E-mail";
$tdataadmin_users[".exportFields"][] = "Country";
$tdataadmin_users[".exportFields"][] = "Date Created";

$tdataadmin_users[".importFields"] = array();
$tdataadmin_users[".importFields"][] = "First Name";
$tdataadmin_users[".importFields"][] = "Surname";
$tdataadmin_users[".importFields"][] = "Username";
$tdataadmin_users[".importFields"][] = "Password";
$tdataadmin_users[".importFields"][] = "E-mail";
$tdataadmin_users[".importFields"][] = "Country";
$tdataadmin_users[".importFields"][] = "Date Created";
$tdataadmin_users[".importFields"][] = "User Group";

$tdataadmin_users[".printFields"] = array();
$tdataadmin_users[".printFields"][] = "User Group";
$tdataadmin_users[".printFields"][] = "First Name";
$tdataadmin_users[".printFields"][] = "Surname";
$tdataadmin_users[".printFields"][] = "Username";
$tdataadmin_users[".printFields"][] = "Password";
$tdataadmin_users[".printFields"][] = "E-mail";
$tdataadmin_users[".printFields"][] = "Country";
$tdataadmin_users[".printFields"][] = "Date Created";

//	First Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "First Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","First_Name"); 
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

	

	
	$tdataadmin_users["First Name"] = $fdata;
//	Surname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Surname";
	$fdata["GoodName"] = "Surname";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","Surname"); 
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

	

	
	$tdataadmin_users["Surname"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","Username"); 
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

	

	
	$tdataadmin_users["Username"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","Password"); 
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

	

	
	$tdataadmin_users["Password"] = $fdata;
//	E-mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "E-mail";
	$fdata["GoodName"] = "E_mail";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","E_mail"); 
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

	

	
	$tdataadmin_users["E-mail"] = $fdata;
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","Country"); 
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

	

	
	$tdataadmin_users["Country"] = $fdata;
//	Date Created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Date Created";
	$fdata["GoodName"] = "Date_Created";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","Date_Created"); 
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

	

	
	$tdataadmin_users["Date Created"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","user_id"); 
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
	
	
	
	

	

	
	$tdataadmin_users["user_id"] = $fdata;
//	User Group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "User Group";
	$fdata["GoodName"] = "User_Group";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","User_Group"); 
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

	

	
	$tdataadmin_users["User Group"] = $fdata;

	
$tables_data["admin_users"]=&$tdataadmin_users;
$field_labels["admin_users"] = &$fieldLabelsadmin_users;
$fieldToolTips["admin_users"] = &$fieldToolTipsadmin_users;
$page_titles["admin_users"] = &$pageTitlesadmin_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_users"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["admin_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_users()
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
	"m_srcTableName" => "admin_users"
));

$proto5["m_sql"] = "firstname";
$proto5["m_srcTableName"] = "admin_users";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "First Name";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "lastname",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto7["m_sql"] = "lastname";
$proto7["m_srcTableName"] = "admin_users";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "Surname";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto9["m_sql"] = "username";
$proto9["m_srcTableName"] = "admin_users";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Username";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto11["m_sql"] = "password";
$proto11["m_srcTableName"] = "admin_users";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Password";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto13["m_sql"] = "email";
$proto13["m_srcTableName"] = "admin_users";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "E-mail";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto15["m_sql"] = "country";
$proto15["m_srcTableName"] = "admin_users";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Country";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto17["m_sql"] = "created";
$proto17["m_srcTableName"] = "admin_users";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Date Created";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto19["m_sql"] = "user_id";
$proto19["m_srcTableName"] = "admin_users";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto21["m_sql"] = "user_group";
$proto21["m_srcTableName"] = "admin_users";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "User Group";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "users";
$proto24["m_srcTableName"] = "admin_users";
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
$proto23["m_srcTableName"] = "admin_users";
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
$proto0["m_srcTableName"]="admin_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_users = createSqlQuery_admin_users();


	
																											
	
$tdataadmin_users[".sqlquery"] = $queryData_admin_users;

include_once(getabspath("include/admin_users_events.php"));
$tableEvents["admin_users"] = new eventclass_admin_users;
$tdataadmin_users[".hasEvents"] = true;

?>