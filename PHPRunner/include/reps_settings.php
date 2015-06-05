<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareps = array();	
	$tdatareps[".truncateText"] = true;
	$tdatareps[".NumberOfChars"] = 80; 
	$tdatareps[".ShortName"] = "reps";
	$tdatareps[".OwnerID"] = "Country";
	$tdatareps[".OriginalTable"] = "reps";

//	field labels
$fieldLabelsreps = array();
$fieldToolTipsreps = array();
$pageTitlesreps = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreps["English"] = array();
	$fieldToolTipsreps["English"] = array();
	$pageTitlesreps["English"] = array();
	$fieldLabelsreps["English"]["Address"] = "Address";
	$fieldToolTipsreps["English"]["Address"] = "";
	$fieldLabelsreps["English"]["City"] = "City";
	$fieldToolTipsreps["English"]["City"] = "";
	$fieldLabelsreps["English"]["Country"] = "Country";
	$fieldToolTipsreps["English"]["Country"] = "";
	$fieldLabelsreps["English"]["Birthdate"] = "Birthdate";
	$fieldToolTipsreps["English"]["Birthdate"] = "Represetatives Birth Date";
	$fieldLabelsreps["English"]["Photo"] = "Photo";
	$fieldToolTipsreps["English"]["Photo"] = "Represetatives Photo";
	$fieldLabelsreps["English"]["First_Name"] = "First Name";
	$fieldToolTipsreps["English"]["First Name"] = "Represetatives  First Name";
	$fieldLabelsreps["English"]["Last_Name"] = "Last Name";
	$fieldToolTipsreps["English"]["Last Name"] = "Represetatives Surname";
	$fieldLabelsreps["English"]["Passport_Number"] = "Passport Number";
	$fieldToolTipsreps["English"]["Passport Number"] = "Represetatives Pasport number";
	$fieldLabelsreps["English"]["Home_Phone"] = "Home Phone";
	$fieldToolTipsreps["English"]["Home Phone"] = "";
	$fieldLabelsreps["English"]["Work_Phone"] = "Work Phone";
	$fieldToolTipsreps["English"]["Work Phone"] = "";
	$fieldLabelsreps["English"]["E_mail"] = "E-mail";
	$fieldToolTipsreps["English"]["E-mail"] = "Represetatives E-mail";
	$fieldLabelsreps["English"]["P__O__Box"] = "P. O. Box";
	$fieldToolTipsreps["English"]["P. O. Box"] = "";
	$fieldLabelsreps["English"]["Province"] = "Province";
	$fieldToolTipsreps["English"]["Province"] = "";
	$fieldLabelsreps["English"]["Postal_code"] = "Postal Code";
	$fieldToolTipsreps["English"]["Postal code"] = "";
	$fieldLabelsreps["English"]["Cell_Phone"] = "Cell Phone";
	$fieldToolTipsreps["English"]["Cell Phone"] = "";
	$fieldLabelsreps["English"]["Username"] = "Username";
	$fieldToolTipsreps["English"]["Username"] = "";
	$fieldLabelsreps["English"]["Password"] = "Password";
	$fieldToolTipsreps["English"]["Password"] = "";
	$fieldLabelsreps["English"]["Group"] = "Group";
	$fieldToolTipsreps["English"]["Group"] = "";
	$fieldLabelsreps["English"]["Date_Created"] = "Date Created";
	$fieldToolTipsreps["English"]["Date Created"] = "";
	$fieldLabelsreps["English"]["rep_id"] = "Rep Id";
	$fieldToolTipsreps["English"]["rep_id"] = "";
	if (count($fieldToolTipsreps["English"]))
		$tdatareps[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreps[""] = array();
	$fieldToolTipsreps[""] = array();
	$pageTitlesreps[""] = array();
	$fieldLabelsreps[""]["First_Name"] = "First Name";
	$fieldToolTipsreps[""]["First Name"] = "";
	$fieldLabelsreps[""]["Last_Name"] = "Last Name";
	$fieldToolTipsreps[""]["Last Name"] = "";
	$fieldLabelsreps[""]["Passport_Number"] = "Passport Number";
	$fieldToolTipsreps[""]["Passport Number"] = "";
	$fieldLabelsreps[""]["Home_Phone"] = "Home Phone";
	$fieldToolTipsreps[""]["Home Phone"] = "";
	$fieldLabelsreps[""]["Work_Phone"] = "Work Phone";
	$fieldToolTipsreps[""]["Work Phone"] = "";
	$fieldLabelsreps[""]["E_mail"] = "E-mail";
	$fieldToolTipsreps[""]["E-mail"] = "";
	$fieldLabelsreps[""]["P__O__Box"] = "P. O. Box";
	$fieldToolTipsreps[""]["P. O. Box"] = "";
	$fieldLabelsreps[""]["Province"] = "Province";
	$fieldToolTipsreps[""]["Province"] = "";
	$fieldLabelsreps[""]["Postal_code"] = "Postal Code";
	$fieldToolTipsreps[""]["Postal code"] = "";
	$fieldLabelsreps[""]["Cell_Phone"] = "Cell Phone";
	$fieldToolTipsreps[""]["Cell Phone"] = "";
	$fieldLabelsreps[""]["Username"] = "Username";
	$fieldToolTipsreps[""]["Username"] = "";
	$fieldLabelsreps[""]["Password"] = "Password";
	$fieldToolTipsreps[""]["Password"] = "";
	$fieldLabelsreps[""]["Group"] = "Group";
	$fieldToolTipsreps[""]["Group"] = "";
	$fieldLabelsreps[""]["Date_Created"] = "Date Created";
	$fieldToolTipsreps[""]["Date Created"] = "";
	$fieldLabelsreps[""]["rep_id"] = "Rep Id";
	$fieldToolTipsreps[""]["rep_id"] = "";
	if (count($fieldToolTipsreps[""]))
		$tdatareps[".isUseToolTips"] = true;
}
	
	
	$tdatareps[".NCSearch"] = true;


$tdatareps[".scrollGridBody"] = true;	

$tdatareps[".shortTableName"] = "reps";
$tdatareps[".nSecOptions"] = 1;
$tdatareps[".recsPerRowList"] = 1;
$tdatareps[".mainTableOwnerID"] = "Country";
$tdatareps[".moveNext"] = 1;
$tdatareps[".nType"] = 0;

$tdatareps[".strOriginalTableName"] = "reps";




$tdatareps[".showAddInPopup"] = false;

$tdatareps[".showEditInPopup"] = false;

$tdatareps[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatareps[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareps[".fieldsForRegister"] = array();

$tdatareps[".listAjax"] = false;

	$tdatareps[".audit"] = false;

	$tdatareps[".locking"] = false;

$tdatareps[".edit"] = true;

$tdatareps[".list"] = true;

$tdatareps[".inlineEdit"] = true;
$tdatareps[".inlineAdd"] = true;
$tdatareps[".view"] = true;

$tdatareps[".import"] = true;

$tdatareps[".exportTo"] = true;

$tdatareps[".printFriendly"] = true;

$tdatareps[".delete"] = true;

$tdatareps[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatareps[".searchSaving"] = false;
//

$tdatareps[".showSearchPanel"] = true;
		$tdatareps[".flexibleSearch"] = true;		

if (isMobile())
	$tdatareps[".isUseAjaxSuggest"] = false;
else 
	$tdatareps[".isUseAjaxSuggest"] = true;

$tdatareps[".rowHighlite"] = true;



$tdatareps[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareps[".isUseTimeForSearch"] = false;





$tdatareps[".allSearchFields"] = array();
$tdatareps[".filterFields"] = array();
$tdatareps[".requiredSearchFields"] = array();

$tdatareps[".allSearchFields"][] = "First Name";
	$tdatareps[".allSearchFields"][] = "Last Name";
	$tdatareps[".allSearchFields"][] = "Passport Number";
	$tdatareps[".allSearchFields"][] = "P. O. Box";
	$tdatareps[".allSearchFields"][] = "Address";
	$tdatareps[".allSearchFields"][] = "City";
	$tdatareps[".allSearchFields"][] = "Province";
	$tdatareps[".allSearchFields"][] = "Country";
	$tdatareps[".allSearchFields"][] = "Postal code";
	$tdatareps[".allSearchFields"][] = "Home Phone";
	$tdatareps[".allSearchFields"][] = "Work Phone";
	$tdatareps[".allSearchFields"][] = "Cell Phone";
	$tdatareps[".allSearchFields"][] = "E-mail";
	$tdatareps[".allSearchFields"][] = "Birthdate";
	$tdatareps[".allSearchFields"][] = "Photo";
	$tdatareps[".allSearchFields"][] = "Username";
	$tdatareps[".allSearchFields"][] = "Password";
	$tdatareps[".allSearchFields"][] = "Group";
	$tdatareps[".allSearchFields"][] = "Date Created";
	$tdatareps[".allSearchFields"][] = "rep_id";
	

$tdatareps[".googleLikeFields"] = array();
$tdatareps[".googleLikeFields"][] = "First Name";
$tdatareps[".googleLikeFields"][] = "Last Name";
$tdatareps[".googleLikeFields"][] = "Passport Number";
$tdatareps[".googleLikeFields"][] = "P. O. Box";
$tdatareps[".googleLikeFields"][] = "Address";
$tdatareps[".googleLikeFields"][] = "City";
$tdatareps[".googleLikeFields"][] = "Province";
$tdatareps[".googleLikeFields"][] = "Country";
$tdatareps[".googleLikeFields"][] = "Postal code";
$tdatareps[".googleLikeFields"][] = "Home Phone";
$tdatareps[".googleLikeFields"][] = "Work Phone";
$tdatareps[".googleLikeFields"][] = "Cell Phone";
$tdatareps[".googleLikeFields"][] = "E-mail";
$tdatareps[".googleLikeFields"][] = "Birthdate";
$tdatareps[".googleLikeFields"][] = "Photo";
$tdatareps[".googleLikeFields"][] = "Username";
$tdatareps[".googleLikeFields"][] = "Password";
$tdatareps[".googleLikeFields"][] = "Group";
$tdatareps[".googleLikeFields"][] = "Date Created";
$tdatareps[".googleLikeFields"][] = "rep_id";


$tdatareps[".advSearchFields"] = array();
$tdatareps[".advSearchFields"][] = "First Name";
$tdatareps[".advSearchFields"][] = "Last Name";
$tdatareps[".advSearchFields"][] = "Passport Number";
$tdatareps[".advSearchFields"][] = "P. O. Box";
$tdatareps[".advSearchFields"][] = "Address";
$tdatareps[".advSearchFields"][] = "City";
$tdatareps[".advSearchFields"][] = "Province";
$tdatareps[".advSearchFields"][] = "Country";
$tdatareps[".advSearchFields"][] = "Postal code";
$tdatareps[".advSearchFields"][] = "Home Phone";
$tdatareps[".advSearchFields"][] = "Work Phone";
$tdatareps[".advSearchFields"][] = "Cell Phone";
$tdatareps[".advSearchFields"][] = "E-mail";
$tdatareps[".advSearchFields"][] = "Birthdate";
$tdatareps[".advSearchFields"][] = "Photo";
$tdatareps[".advSearchFields"][] = "Username";
$tdatareps[".advSearchFields"][] = "Password";
$tdatareps[".advSearchFields"][] = "Group";
$tdatareps[".advSearchFields"][] = "Date Created";
$tdatareps[".advSearchFields"][] = "rep_id";

$tdatareps[".tableType"] = "list";

$tdatareps[".printerPageOrientation"] = 0;
$tdatareps[".nPrinterPageScale"] = 100;

$tdatareps[".nPrinterSplitRecords"] = 40;

$tdatareps[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatareps[".pageSize"] = 20;

$tdatareps[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareps[".strOrderBy"] = $tstrOrderBy;

$tdatareps[".orderindexes"] = array();

$tdatareps[".sqlHead"] = "SELECT firstname AS `First Name`,  lastname AS `Last Name`,  passport AS `Passport Number`,  postbox AS `P. O. Box`,  address AS Address,  city AS City,  province AS Province,  country AS Country,  postalcode AS `Postal code`,  homephone AS `Home Phone`,  workphone AS `Work Phone`,  cellphone AS `Cell Phone`,  email AS `E-mail`,  birthdate AS Birthdate,  photo AS Photo,  username AS Username,  password AS Password,  `group` AS `Group`,  created AS `Date Created`,  rep_id";
$tdatareps[".sqlFrom"] = "FROM reps";
$tdatareps[".sqlWhereExpr"] = "";
$tdatareps[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareps[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareps[".arrGroupsPerPage"] = $arrGPP;

$tdatareps[".highlightSearchResults"] = true;

$tableKeysreps = array();
$tableKeysreps[] = "rep_id";
$tdatareps[".Keys"] = $tableKeysreps;

$tdatareps[".listFields"] = array();
$tdatareps[".listFields"][] = "rep_id";
$tdatareps[".listFields"][] = "First Name";
$tdatareps[".listFields"][] = "Last Name";
$tdatareps[".listFields"][] = "Passport Number";
$tdatareps[".listFields"][] = "P. O. Box";
$tdatareps[".listFields"][] = "Address";
$tdatareps[".listFields"][] = "City";
$tdatareps[".listFields"][] = "Province";
$tdatareps[".listFields"][] = "Postal code";
$tdatareps[".listFields"][] = "Country";
$tdatareps[".listFields"][] = "Home Phone";
$tdatareps[".listFields"][] = "Work Phone";
$tdatareps[".listFields"][] = "Cell Phone";
$tdatareps[".listFields"][] = "E-mail";
$tdatareps[".listFields"][] = "Birthdate";
$tdatareps[".listFields"][] = "Photo";
$tdatareps[".listFields"][] = "Username";
$tdatareps[".listFields"][] = "Password";
$tdatareps[".listFields"][] = "Group";
$tdatareps[".listFields"][] = "Date Created";

$tdatareps[".hideMobileList"] = array();


$tdatareps[".viewFields"] = array();
$tdatareps[".viewFields"][] = "First Name";
$tdatareps[".viewFields"][] = "Last Name";
$tdatareps[".viewFields"][] = "Passport Number";
$tdatareps[".viewFields"][] = "P. O. Box";
$tdatareps[".viewFields"][] = "Address";
$tdatareps[".viewFields"][] = "City";
$tdatareps[".viewFields"][] = "Province";
$tdatareps[".viewFields"][] = "Country";
$tdatareps[".viewFields"][] = "Postal code";
$tdatareps[".viewFields"][] = "Home Phone";
$tdatareps[".viewFields"][] = "Work Phone";
$tdatareps[".viewFields"][] = "Cell Phone";
$tdatareps[".viewFields"][] = "E-mail";
$tdatareps[".viewFields"][] = "Birthdate";
$tdatareps[".viewFields"][] = "Photo";
$tdatareps[".viewFields"][] = "Username";
$tdatareps[".viewFields"][] = "Password";
$tdatareps[".viewFields"][] = "Group";
$tdatareps[".viewFields"][] = "Date Created";
$tdatareps[".viewFields"][] = "rep_id";

$tdatareps[".addFields"] = array();
$tdatareps[".addFields"][] = "Password";
$tdatareps[".addFields"][] = "Username";
$tdatareps[".addFields"][] = "P. O. Box";
$tdatareps[".addFields"][] = "Cell Phone";
$tdatareps[".addFields"][] = "Postal code";
$tdatareps[".addFields"][] = "Province";
$tdatareps[".addFields"][] = "Group";
$tdatareps[".addFields"][] = "First Name";
$tdatareps[".addFields"][] = "Last Name";
$tdatareps[".addFields"][] = "Passport Number";
$tdatareps[".addFields"][] = "Address";
$tdatareps[".addFields"][] = "City";
$tdatareps[".addFields"][] = "Country";
$tdatareps[".addFields"][] = "Home Phone";
$tdatareps[".addFields"][] = "Work Phone";
$tdatareps[".addFields"][] = "E-mail";
$tdatareps[".addFields"][] = "Birthdate";
$tdatareps[".addFields"][] = "Photo";

$tdatareps[".inlineAddFields"] = array();
$tdatareps[".inlineAddFields"][] = "First Name";
$tdatareps[".inlineAddFields"][] = "Last Name";
$tdatareps[".inlineAddFields"][] = "Passport Number";
$tdatareps[".inlineAddFields"][] = "P. O. Box";
$tdatareps[".inlineAddFields"][] = "Address";
$tdatareps[".inlineAddFields"][] = "City";
$tdatareps[".inlineAddFields"][] = "Province";
$tdatareps[".inlineAddFields"][] = "Postal code";
$tdatareps[".inlineAddFields"][] = "Country";
$tdatareps[".inlineAddFields"][] = "Home Phone";
$tdatareps[".inlineAddFields"][] = "Work Phone";
$tdatareps[".inlineAddFields"][] = "Cell Phone";
$tdatareps[".inlineAddFields"][] = "E-mail";
$tdatareps[".inlineAddFields"][] = "Birthdate";
$tdatareps[".inlineAddFields"][] = "Photo";
$tdatareps[".inlineAddFields"][] = "Username";
$tdatareps[".inlineAddFields"][] = "Password";
$tdatareps[".inlineAddFields"][] = "Group";

$tdatareps[".editFields"] = array();
$tdatareps[".editFields"][] = "First Name";
$tdatareps[".editFields"][] = "Last Name";
$tdatareps[".editFields"][] = "Passport Number";
$tdatareps[".editFields"][] = "P. O. Box";
$tdatareps[".editFields"][] = "Address";
$tdatareps[".editFields"][] = "City";
$tdatareps[".editFields"][] = "Province";
$tdatareps[".editFields"][] = "Country";
$tdatareps[".editFields"][] = "Postal code";
$tdatareps[".editFields"][] = "Home Phone";
$tdatareps[".editFields"][] = "Work Phone";
$tdatareps[".editFields"][] = "Cell Phone";
$tdatareps[".editFields"][] = "E-mail";
$tdatareps[".editFields"][] = "Birthdate";
$tdatareps[".editFields"][] = "Photo";
$tdatareps[".editFields"][] = "Username";
$tdatareps[".editFields"][] = "Password";
$tdatareps[".editFields"][] = "Group";

$tdatareps[".inlineEditFields"] = array();
$tdatareps[".inlineEditFields"][] = "First Name";
$tdatareps[".inlineEditFields"][] = "Last Name";
$tdatareps[".inlineEditFields"][] = "Passport Number";
$tdatareps[".inlineEditFields"][] = "P. O. Box";
$tdatareps[".inlineEditFields"][] = "Address";
$tdatareps[".inlineEditFields"][] = "City";
$tdatareps[".inlineEditFields"][] = "Province";
$tdatareps[".inlineEditFields"][] = "Postal code";
$tdatareps[".inlineEditFields"][] = "Country";
$tdatareps[".inlineEditFields"][] = "Home Phone";
$tdatareps[".inlineEditFields"][] = "Work Phone";
$tdatareps[".inlineEditFields"][] = "Cell Phone";
$tdatareps[".inlineEditFields"][] = "E-mail";
$tdatareps[".inlineEditFields"][] = "Birthdate";
$tdatareps[".inlineEditFields"][] = "Photo";
$tdatareps[".inlineEditFields"][] = "Username";
$tdatareps[".inlineEditFields"][] = "Password";
$tdatareps[".inlineEditFields"][] = "Group";

$tdatareps[".exportFields"] = array();
$tdatareps[".exportFields"][] = "First Name";
$tdatareps[".exportFields"][] = "Last Name";
$tdatareps[".exportFields"][] = "Passport Number";
$tdatareps[".exportFields"][] = "P. O. Box";
$tdatareps[".exportFields"][] = "Address";
$tdatareps[".exportFields"][] = "City";
$tdatareps[".exportFields"][] = "Province";
$tdatareps[".exportFields"][] = "Country";
$tdatareps[".exportFields"][] = "Postal code";
$tdatareps[".exportFields"][] = "Home Phone";
$tdatareps[".exportFields"][] = "Work Phone";
$tdatareps[".exportFields"][] = "Cell Phone";
$tdatareps[".exportFields"][] = "E-mail";
$tdatareps[".exportFields"][] = "Birthdate";
$tdatareps[".exportFields"][] = "Photo";
$tdatareps[".exportFields"][] = "Username";
$tdatareps[".exportFields"][] = "Password";
$tdatareps[".exportFields"][] = "Group";
$tdatareps[".exportFields"][] = "Date Created";
$tdatareps[".exportFields"][] = "rep_id";

$tdatareps[".importFields"] = array();
$tdatareps[".importFields"][] = "First Name";
$tdatareps[".importFields"][] = "Last Name";
$tdatareps[".importFields"][] = "Passport Number";
$tdatareps[".importFields"][] = "P. O. Box";
$tdatareps[".importFields"][] = "Address";
$tdatareps[".importFields"][] = "City";
$tdatareps[".importFields"][] = "Province";
$tdatareps[".importFields"][] = "Country";
$tdatareps[".importFields"][] = "Postal code";
$tdatareps[".importFields"][] = "Home Phone";
$tdatareps[".importFields"][] = "Work Phone";
$tdatareps[".importFields"][] = "Cell Phone";
$tdatareps[".importFields"][] = "E-mail";
$tdatareps[".importFields"][] = "Birthdate";
$tdatareps[".importFields"][] = "Photo";
$tdatareps[".importFields"][] = "Username";
$tdatareps[".importFields"][] = "Password";
$tdatareps[".importFields"][] = "Group";
$tdatareps[".importFields"][] = "Date Created";
$tdatareps[".importFields"][] = "rep_id";

$tdatareps[".printFields"] = array();
$tdatareps[".printFields"][] = "First Name";
$tdatareps[".printFields"][] = "Last Name";
$tdatareps[".printFields"][] = "Passport Number";
$tdatareps[".printFields"][] = "P. O. Box";
$tdatareps[".printFields"][] = "Address";
$tdatareps[".printFields"][] = "City";
$tdatareps[".printFields"][] = "Province";
$tdatareps[".printFields"][] = "Country";
$tdatareps[".printFields"][] = "Postal code";
$tdatareps[".printFields"][] = "Home Phone";
$tdatareps[".printFields"][] = "Work Phone";
$tdatareps[".printFields"][] = "Cell Phone";
$tdatareps[".printFields"][] = "E-mail";
$tdatareps[".printFields"][] = "Birthdate";
$tdatareps[".printFields"][] = "Photo";
$tdatareps[".printFields"][] = "Username";
$tdatareps[".printFields"][] = "Password";
$tdatareps[".printFields"][] = "Group";
$tdatareps[".printFields"][] = "Date Created";
$tdatareps[".printFields"][] = "rep_id";

//	First Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "First Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","First_Name"); 
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

	

	
	$tdatareps["First Name"] = $fdata;
//	Last Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Last Name";
	$fdata["GoodName"] = "Last_Name";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Last_Name"); 
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

	

	
	$tdatareps["Last Name"] = $fdata;
//	Passport Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Passport Number";
	$fdata["GoodName"] = "Passport_Number";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Passport_Number"); 
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
	
		$fdata["strField"] = "passport"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "passport";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
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

	

	
	$tdatareps["Passport Number"] = $fdata;
//	P. O. Box
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "P. O. Box";
	$fdata["GoodName"] = "P__O__Box";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","P__O__Box"); 
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
	
		$fdata["strField"] = "postbox"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "postbox";
	
		
		
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

	

	
	$tdatareps["P. O. Box"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Address"); 
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
	
		$fdata["strField"] = "address"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address";
	
		
		
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

	

	
	$tdatareps["Address"] = $fdata;
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","City"); 
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
	
		$fdata["strField"] = "city"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city";
	
		
		
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

	

	
	$tdatareps["City"] = $fdata;
//	Province
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Province";
	$fdata["GoodName"] = "Province";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Province"); 
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

	

	
	$tdatareps["Province"] = $fdata;
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Country"); 
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

	

	
	$tdatareps["Country"] = $fdata;
//	Postal code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Postal code";
	$fdata["GoodName"] = "Postal_code";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Postal_code"); 
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
	
		$fdata["strField"] = "postalcode"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "postalcode";
	
		
		
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

	

	
	$tdatareps["Postal code"] = $fdata;
//	Home Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Home Phone";
	$fdata["GoodName"] = "Home_Phone";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Home_Phone"); 
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
	
		$fdata["strField"] = "homephone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "homephone";
	
		
		
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

	

	
	$tdatareps["Home Phone"] = $fdata;
//	Work Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Work Phone";
	$fdata["GoodName"] = "Work_Phone";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Work_Phone"); 
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
	
		$fdata["strField"] = "workphone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "workphone";
	
		
		
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

	

	
	$tdatareps["Work Phone"] = $fdata;
//	Cell Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Cell Phone";
	$fdata["GoodName"] = "Cell_Phone";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Cell_Phone"); 
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
	
		$fdata["strField"] = "cellphone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cellphone";
	
		
		
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

	

	
	$tdatareps["Cell Phone"] = $fdata;
//	E-mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "E-mail";
	$fdata["GoodName"] = "E_mail";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","E_mail"); 
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

	

	
	$tdatareps["E-mail"] = $fdata;
//	Birthdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Birthdate";
	$fdata["GoodName"] = "Birthdate";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Birthdate"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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

	

	
	$tdatareps["Birthdate"] = $fdata;
//	Photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Photo";
	$fdata["GoodName"] = "Photo";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Photo"); 
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
	
		$fdata["strField"] = "photo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "photo";
	
		
		
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
			$edata["EditParams"].= " maxlength=30";
	
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

	

	
	$tdatareps["Photo"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Username"); 
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

	

	
	$tdatareps["Username"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Password"); 
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

	

	
	$tdatareps["Password"] = $fdata;
//	Group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Group";
	$fdata["GoodName"] = "Group";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Group"); 
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
	
		$fdata["strField"] = "group"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`";
	
		
		
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

	

	
	$tdatareps["Group"] = $fdata;
//	Date Created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Date Created";
	$fdata["GoodName"] = "Date_Created";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","Date_Created"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatareps["Date Created"] = $fdata;
//	rep_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "rep_id";
	$fdata["GoodName"] = "rep_id";
	$fdata["ownerTable"] = "reps";
	$fdata["Label"] = GetFieldLabel("reps","rep_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
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

	

	
	$tdatareps["rep_id"] = $fdata;

	
$tables_data["reps"]=&$tdatareps;
$field_labels["reps"] = &$fieldLabelsreps;
$fieldToolTips["reps"] = &$fieldToolTipsreps;
$page_titles["reps"] = &$pageTitlesreps;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["reps"] = array();
//	school
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="school";
		$detailsParam["dOriginalTable"] = "school";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "school";
	$detailsParam["dCaptionTable"] = GetTableCaption("school");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 2;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 1;
			
	$detailsTablesData["reps"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["reps"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["reps"][$dIndex]["masterKeys"][]="rep_id";

				$detailsTablesData["reps"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["reps"][$dIndex]["detailKeys"][]="rep_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["reps"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_reps()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "firstname AS `First Name`,  lastname AS `Last Name`,  passport AS `Passport Number`,  postbox AS `P. O. Box`,  address AS Address,  city AS City,  province AS Province,  country AS Country,  postalcode AS `Postal code`,  homephone AS `Home Phone`,  workphone AS `Work Phone`,  cellphone AS `Cell Phone`,  email AS `E-mail`,  birthdate AS Birthdate,  photo AS Photo,  username AS Username,  password AS Password,  `group` AS `Group`,  created AS `Date Created`,  rep_id";
$proto0["m_strFrom"] = "FROM reps";
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
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto5["m_sql"] = "firstname";
$proto5["m_srcTableName"] = "reps";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "First Name";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "lastname",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto7["m_sql"] = "lastname";
$proto7["m_srcTableName"] = "reps";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "Last Name";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "passport",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto9["m_sql"] = "passport";
$proto9["m_srcTableName"] = "reps";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Passport Number";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "postbox",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto11["m_sql"] = "postbox";
$proto11["m_srcTableName"] = "reps";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "P. O. Box";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto13["m_sql"] = "address";
$proto13["m_srcTableName"] = "reps";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "Address";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto15["m_sql"] = "city";
$proto15["m_srcTableName"] = "reps";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "City";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "province",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto17["m_sql"] = "province";
$proto17["m_srcTableName"] = "reps";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Province";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto19["m_sql"] = "country";
$proto19["m_srcTableName"] = "reps";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Country";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "postalcode",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto21["m_sql"] = "postalcode";
$proto21["m_srcTableName"] = "reps";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Postal code";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "homephone",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto23["m_sql"] = "homephone";
$proto23["m_srcTableName"] = "reps";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Home Phone";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "workphone",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto25["m_sql"] = "workphone";
$proto25["m_srcTableName"] = "reps";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "Work Phone";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "cellphone",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto27["m_sql"] = "cellphone";
$proto27["m_srcTableName"] = "reps";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "Cell Phone";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto29["m_sql"] = "email";
$proto29["m_srcTableName"] = "reps";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "E-mail";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "birthdate",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto31["m_sql"] = "birthdate";
$proto31["m_srcTableName"] = "reps";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "Birthdate";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "photo",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto33["m_sql"] = "photo";
$proto33["m_srcTableName"] = "reps";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "Photo";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto35["m_sql"] = "username";
$proto35["m_srcTableName"] = "reps";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "Username";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto37["m_sql"] = "password";
$proto37["m_srcTableName"] = "reps";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "Password";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto39["m_sql"] = "`group`";
$proto39["m_srcTableName"] = "reps";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "Group";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto41["m_sql"] = "created";
$proto41["m_srcTableName"] = "reps";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "Date Created";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "rep_id",
	"m_strTable" => "reps",
	"m_srcTableName" => "reps"
));

$proto43["m_sql"] = "rep_id";
$proto43["m_srcTableName"] = "reps";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto45=array();
$proto45["m_link"] = "SQLL_MAIN";
			$proto46=array();
$proto46["m_strName"] = "reps";
$proto46["m_srcTableName"] = "reps";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "rep_id";
$proto46["m_columns"][] = "firstname";
$proto46["m_columns"][] = "lastname";
$proto46["m_columns"][] = "passport";
$proto46["m_columns"][] = "postbox";
$proto46["m_columns"][] = "address";
$proto46["m_columns"][] = "city";
$proto46["m_columns"][] = "province";
$proto46["m_columns"][] = "country";
$proto46["m_columns"][] = "postalcode";
$proto46["m_columns"][] = "homephone";
$proto46["m_columns"][] = "workphone";
$proto46["m_columns"][] = "cellphone";
$proto46["m_columns"][] = "email";
$proto46["m_columns"][] = "birthdate";
$proto46["m_columns"][] = "photo";
$proto46["m_columns"][] = "username";
$proto46["m_columns"][] = "password";
$proto46["m_columns"][] = "pwsalt";
$proto46["m_columns"][] = "group";
$proto46["m_columns"][] = "created";
$proto46["m_columns"][] = "attempt";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "reps";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "reps";
$proto47=array();
$proto47["m_sql"] = "";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="reps";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reps = createSqlQuery_reps();


	
																				
	
$tdatareps[".sqlquery"] = $queryData_reps;

include_once(getabspath("include/reps_events.php"));
$tableEvents["reps"] = new eventclass_reps;
$tdatareps[".hasEvents"] = true;

?>