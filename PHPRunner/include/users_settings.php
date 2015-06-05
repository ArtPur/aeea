<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausers = array();	
	$tdatausers[".truncateText"] = true;
	$tdatausers[".NumberOfChars"] = 80; 
	$tdatausers[".ShortName"] = "users";
	$tdatausers[".OwnerID"] = "Username";
	$tdatausers[".OriginalTable"] = "users";

//	field labels
$fieldLabelsusers = array();
$fieldToolTipsusers = array();
$pageTitlesusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusers["English"] = array();
	$fieldToolTipsusers["English"] = array();
	$pageTitlesusers["English"] = array();
	$fieldLabelsusers["English"]["Username"] = "Username";
	$fieldToolTipsusers["English"]["Username"] = "";
	$fieldLabelsusers["English"]["Password"] = "Password";
	$fieldToolTipsusers["English"]["Password"] = "";
	$fieldLabelsusers["English"]["Country"] = "Country";
	$fieldToolTipsusers["English"]["Country"] = "";
	$fieldLabelsusers["English"]["First_Name"] = "First Name";
	$fieldToolTipsusers["English"]["First Name"] = "";
	$fieldLabelsusers["English"]["Surname"] = "Surname";
	$fieldToolTipsusers["English"]["Surname"] = "";
	$fieldLabelsusers["English"]["E_mail"] = "E-mail";
	$fieldToolTipsusers["English"]["E-mail"] = "";
	$fieldLabelsusers["English"]["Date_Created"] = "Date Created";
	$fieldToolTipsusers["English"]["Date Created"] = "";
	$fieldLabelsusers["English"]["user_id"] = "User Id";
	$fieldToolTipsusers["English"]["user_id"] = "";
	$fieldLabelsusers["English"]["username"] = "Username";
	$fieldToolTipsusers["English"]["username"] = "";
	$fieldLabelsusers["English"]["password"] = "Password";
	$fieldToolTipsusers["English"]["password"] = "";
	$fieldLabelsusers["English"]["User_Group"] = "User Group";
	$fieldToolTipsusers["English"]["User Group"] = "";
	if (count($fieldToolTipsusers["English"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusers[""] = array();
	$fieldToolTipsusers[""] = array();
	$pageTitlesusers[""] = array();
	$fieldLabelsusers[""]["First_Name"] = "First Name";
	$fieldToolTipsusers[""]["First Name"] = "";
	$fieldLabelsusers[""]["Surname"] = "Surname";
	$fieldToolTipsusers[""]["Surname"] = "";
	$fieldLabelsusers[""]["E_mail"] = "E-mail";
	$fieldToolTipsusers[""]["E-mail"] = "";
	$fieldLabelsusers[""]["Date_Created"] = "Date Created";
	$fieldToolTipsusers[""]["Date Created"] = "";
	$fieldLabelsusers[""]["username"] = "Username";
	$fieldToolTipsusers[""]["username"] = "";
	$fieldLabelsusers[""]["password"] = "Password";
	$fieldToolTipsusers[""]["password"] = "";
	$fieldLabelsusers[""]["user_id"] = "User Id";
	$fieldToolTipsusers[""]["user_id"] = "";
	$fieldLabelsusers[""]["User_Group"] = "User Group";
	$fieldToolTipsusers[""]["User Group"] = "";
	if (count($fieldToolTipsusers[""]))
		$tdatausers[".isUseToolTips"] = true;
}
	
	
	$tdatausers[".NCSearch"] = true;


$tdatausers[".scrollGridBody"] = true;	

$tdatausers[".shortTableName"] = "users";
$tdatausers[".nSecOptions"] = 1;
$tdatausers[".recsPerRowList"] = 1;
$tdatausers[".mainTableOwnerID"] = "Username";
$tdatausers[".moveNext"] = 1;
$tdatausers[".nType"] = 0;

$tdatausers[".strOriginalTableName"] = "users";




$tdatausers[".showAddInPopup"] = false;

$tdatausers[".showEditInPopup"] = false;

$tdatausers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausers[".fieldsForRegister"] = array();

$tdatausers[".listAjax"] = false;

	$tdatausers[".audit"] = false;

	$tdatausers[".locking"] = false;

$tdatausers[".edit"] = true;

$tdatausers[".list"] = true;

$tdatausers[".inlineEdit"] = true;
$tdatausers[".inlineAdd"] = true;
$tdatausers[".copy"] = true;
$tdatausers[".view"] = true;

$tdatausers[".import"] = true;

$tdatausers[".exportTo"] = true;

$tdatausers[".printFriendly"] = true;

$tdatausers[".delete"] = true;

$tdatausers[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatausers[".searchSaving"] = false;
//

$tdatausers[".showSearchPanel"] = true;
		$tdatausers[".flexibleSearch"] = true;		

if (isMobile())
	$tdatausers[".isUseAjaxSuggest"] = false;
else 
	$tdatausers[".isUseAjaxSuggest"] = true;

$tdatausers[".rowHighlite"] = true;



$tdatausers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausers[".isUseTimeForSearch"] = false;





$tdatausers[".allSearchFields"] = array();
$tdatausers[".filterFields"] = array();
$tdatausers[".requiredSearchFields"] = array();

$tdatausers[".allSearchFields"][] = "User Group";
	$tdatausers[".allSearchFields"][] = "First Name";
	$tdatausers[".allSearchFields"][] = "Surname";
	$tdatausers[".allSearchFields"][] = "Username";
	$tdatausers[".allSearchFields"][] = "Password";
	$tdatausers[".allSearchFields"][] = "E-mail";
	$tdatausers[".allSearchFields"][] = "Country";
	$tdatausers[".allSearchFields"][] = "Date Created";
	

$tdatausers[".googleLikeFields"] = array();
$tdatausers[".googleLikeFields"][] = "First Name";
$tdatausers[".googleLikeFields"][] = "Surname";
$tdatausers[".googleLikeFields"][] = "Username";
$tdatausers[".googleLikeFields"][] = "Password";
$tdatausers[".googleLikeFields"][] = "E-mail";
$tdatausers[".googleLikeFields"][] = "Country";
$tdatausers[".googleLikeFields"][] = "Date Created";
$tdatausers[".googleLikeFields"][] = "user_id";
$tdatausers[".googleLikeFields"][] = "User Group";


$tdatausers[".advSearchFields"] = array();
$tdatausers[".advSearchFields"][] = "User Group";
$tdatausers[".advSearchFields"][] = "First Name";
$tdatausers[".advSearchFields"][] = "Surname";
$tdatausers[".advSearchFields"][] = "Username";
$tdatausers[".advSearchFields"][] = "Password";
$tdatausers[".advSearchFields"][] = "E-mail";
$tdatausers[".advSearchFields"][] = "Country";
$tdatausers[".advSearchFields"][] = "Date Created";

$tdatausers[".tableType"] = "list";

$tdatausers[".printerPageOrientation"] = 0;
$tdatausers[".nPrinterPageScale"] = 100;

$tdatausers[".nPrinterSplitRecords"] = 40;

$tdatausers[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatausers[".pageSize"] = 20;

$tdatausers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausers[".strOrderBy"] = $tstrOrderBy;

$tdatausers[".orderindexes"] = array();

$tdatausers[".sqlHead"] = "SELECT firstname AS `First Name`,  lastname AS Surname,  username AS Username,  password AS Password,  email AS `E-mail`,  country AS Country,  created AS `Date Created`,  user_id,  user_group AS `User Group`";
$tdatausers[".sqlFrom"] = "FROM users";
$tdatausers[".sqlWhereExpr"] = "";
$tdatausers[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausers[".arrGroupsPerPage"] = $arrGPP;

$tdatausers[".highlightSearchResults"] = true;

$tableKeysusers = array();
$tableKeysusers[] = "username";
$tableKeysusers[] = "password";
$tdatausers[".Keys"] = $tableKeysusers;

$tdatausers[".listFields"] = array();
$tdatausers[".listFields"][] = "First Name";
$tdatausers[".listFields"][] = "Surname";
$tdatausers[".listFields"][] = "Username";
$tdatausers[".listFields"][] = "Password";
$tdatausers[".listFields"][] = "E-mail";
$tdatausers[".listFields"][] = "Country";
$tdatausers[".listFields"][] = "Date Created";
$tdatausers[".listFields"][] = "User Group";

$tdatausers[".hideMobileList"] = array();


$tdatausers[".viewFields"] = array();
$tdatausers[".viewFields"][] = "First Name";
$tdatausers[".viewFields"][] = "Surname";
$tdatausers[".viewFields"][] = "Username";
$tdatausers[".viewFields"][] = "Password";
$tdatausers[".viewFields"][] = "E-mail";
$tdatausers[".viewFields"][] = "Country";
$tdatausers[".viewFields"][] = "Date Created";
$tdatausers[".viewFields"][] = "User Group";

$tdatausers[".addFields"] = array();
$tdatausers[".addFields"][] = "User Group";
$tdatausers[".addFields"][] = "First Name";
$tdatausers[".addFields"][] = "Surname";
$tdatausers[".addFields"][] = "Username";
$tdatausers[".addFields"][] = "Password";
$tdatausers[".addFields"][] = "E-mail";
$tdatausers[".addFields"][] = "Country";
$tdatausers[".addFields"][] = "Date Created";

$tdatausers[".inlineAddFields"] = array();
$tdatausers[".inlineAddFields"][] = "First Name";
$tdatausers[".inlineAddFields"][] = "Surname";
$tdatausers[".inlineAddFields"][] = "Username";
$tdatausers[".inlineAddFields"][] = "Password";
$tdatausers[".inlineAddFields"][] = "E-mail";
$tdatausers[".inlineAddFields"][] = "Country";
$tdatausers[".inlineAddFields"][] = "Date Created";
$tdatausers[".inlineAddFields"][] = "User Group";

$tdatausers[".editFields"] = array();
$tdatausers[".editFields"][] = "First Name";
$tdatausers[".editFields"][] = "Surname";
$tdatausers[".editFields"][] = "Username";
$tdatausers[".editFields"][] = "Password";
$tdatausers[".editFields"][] = "E-mail";
$tdatausers[".editFields"][] = "Country";
$tdatausers[".editFields"][] = "Date Created";
$tdatausers[".editFields"][] = "User Group";

$tdatausers[".inlineEditFields"] = array();
$tdatausers[".inlineEditFields"][] = "First Name";
$tdatausers[".inlineEditFields"][] = "Surname";
$tdatausers[".inlineEditFields"][] = "Username";
$tdatausers[".inlineEditFields"][] = "Password";
$tdatausers[".inlineEditFields"][] = "E-mail";
$tdatausers[".inlineEditFields"][] = "Country";
$tdatausers[".inlineEditFields"][] = "Date Created";
$tdatausers[".inlineEditFields"][] = "User Group";

$tdatausers[".exportFields"] = array();
$tdatausers[".exportFields"][] = "User Group";
$tdatausers[".exportFields"][] = "First Name";
$tdatausers[".exportFields"][] = "Surname";
$tdatausers[".exportFields"][] = "Username";
$tdatausers[".exportFields"][] = "Password";
$tdatausers[".exportFields"][] = "E-mail";
$tdatausers[".exportFields"][] = "Country";
$tdatausers[".exportFields"][] = "Date Created";

$tdatausers[".importFields"] = array();
$tdatausers[".importFields"][] = "First Name";
$tdatausers[".importFields"][] = "Surname";
$tdatausers[".importFields"][] = "Username";
$tdatausers[".importFields"][] = "Password";
$tdatausers[".importFields"][] = "E-mail";
$tdatausers[".importFields"][] = "Country";
$tdatausers[".importFields"][] = "Date Created";
$tdatausers[".importFields"][] = "User Group";

$tdatausers[".printFields"] = array();
$tdatausers[".printFields"][] = "User Group";
$tdatausers[".printFields"][] = "First Name";
$tdatausers[".printFields"][] = "Surname";
$tdatausers[".printFields"][] = "Username";
$tdatausers[".printFields"][] = "Password";
$tdatausers[".printFields"][] = "E-mail";
$tdatausers[".printFields"][] = "Country";
$tdatausers[".printFields"][] = "Date Created";

//	First Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "First Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","First_Name"); 
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

	

	
	$tdatausers["First Name"] = $fdata;
//	Surname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Surname";
	$fdata["GoodName"] = "Surname";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Surname"); 
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

	

	
	$tdatausers["Surname"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Username"); 
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

	

	
	$tdatausers["Username"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Password"); 
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

	

	
	$tdatausers["Password"] = $fdata;
//	E-mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "E-mail";
	$fdata["GoodName"] = "E_mail";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","E_mail"); 
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

	

	
	$tdatausers["E-mail"] = $fdata;
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Country"); 
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

	

	
	$tdatausers["Country"] = $fdata;
//	Date Created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Date Created";
	$fdata["GoodName"] = "Date_Created";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Date_Created"); 
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

	

	
	$tdatausers["Date Created"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","user_id"); 
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
	
	
	
	

	

	
	$tdatausers["user_id"] = $fdata;
//	User Group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "User Group";
	$fdata["GoodName"] = "User_Group";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","User_Group"); 
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

	

	
	$tdatausers["User Group"] = $fdata;

	
$tables_data["users"]=&$tdatausers;
$field_labels["users"] = &$fieldLabelsusers;
$fieldToolTips["users"] = &$fieldToolTipsusers;
$page_titles["users"] = &$pageTitlesusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["users"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_users()
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
	"m_srcTableName" => "users"
));

$proto5["m_sql"] = "firstname";
$proto5["m_srcTableName"] = "users";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "First Name";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "lastname",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto7["m_sql"] = "lastname";
$proto7["m_srcTableName"] = "users";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "Surname";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto9["m_sql"] = "username";
$proto9["m_srcTableName"] = "users";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Username";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto11["m_sql"] = "password";
$proto11["m_srcTableName"] = "users";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Password";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto13["m_sql"] = "email";
$proto13["m_srcTableName"] = "users";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "E-mail";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto15["m_sql"] = "country";
$proto15["m_srcTableName"] = "users";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Country";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto17["m_sql"] = "created";
$proto17["m_srcTableName"] = "users";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Date Created";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto19["m_sql"] = "user_id";
$proto19["m_srcTableName"] = "users";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "user_group",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto21["m_sql"] = "user_group";
$proto21["m_srcTableName"] = "users";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "User Group";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "users";
$proto24["m_srcTableName"] = "users";
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
$proto23["m_srcTableName"] = "users";
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
$proto0["m_srcTableName"]="users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_users = createSqlQuery_users();


	
									
	
$tdatausers[".sqlquery"] = $queryData_users;

include_once(getabspath("include/users_events.php"));
$tableEvents["users"] = new eventclass_users;
$tdatausers[".hasEvents"] = true;

?>