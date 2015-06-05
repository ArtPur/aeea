<?php
require_once(getabspath("classes/cipherer.php"));




$tdataschool = array();	
	$tdataschool[".truncateText"] = true;
	$tdataschool[".NumberOfChars"] = 80; 
	$tdataschool[".ShortName"] = "school";
	$tdataschool[".OwnerID"] = "Country";
	$tdataschool[".OriginalTable"] = "school";

//	field labels
$fieldLabelsschool = array();
$fieldToolTipsschool = array();
$pageTitlesschool = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsschool["English"] = array();
	$fieldToolTipsschool["English"] = array();
	$pageTitlesschool["English"] = array();
	$fieldLabelsschool["English"]["Administrator"] = "Administrator";
	$fieldToolTipsschool["English"]["Administrator"] = "";
	$fieldLabelsschool["English"]["Principal"] = "Principal";
	$fieldToolTipsschool["English"]["Principal"] = "";
	$fieldLabelsschool["English"]["Address"] = "Address";
	$fieldToolTipsschool["English"]["Address"] = "";
	$fieldLabelsschool["English"]["City"] = "City";
	$fieldToolTipsschool["English"]["City"] = "";
	$fieldLabelsschool["English"]["Country"] = "Country";
	$fieldToolTipsschool["English"]["Country"] = "";
	$fieldLabelsschool["English"]["School_Name"] = "School Name";
	$fieldToolTipsschool["English"]["School Name"] = "";
	$fieldLabelsschool["English"]["Registration_Number"] = "Registration Number";
	$fieldToolTipsschool["English"]["Registration Number"] = "";
	$fieldLabelsschool["English"]["Registration_Date"] = "Registration Date";
	$fieldToolTipsschool["English"]["Registration Date"] = "";
	$fieldLabelsschool["English"]["School_Type"] = "School Type";
	$fieldToolTipsschool["English"]["School Type"] = "";
	$fieldLabelsschool["English"]["E_mail"] = "E-mail";
	$fieldToolTipsschool["English"]["E-mail"] = "";
	$fieldLabelsschool["English"]["School_Phone"] = "School Phone";
	$fieldToolTipsschool["English"]["School Phone"] = "";
	$fieldLabelsschool["English"]["Admnistrators_Phone"] = "Admnistrators Phone";
	$fieldToolTipsschool["English"]["Admnistrators Phone"] = "";
	$fieldLabelsschool["English"]["TOTAL_Students"] = "Total Students";
	$fieldToolTipsschool["English"]["TOTAL Students"] = "";
	$fieldLabelsschool["English"]["Cresh"] = "Cresh";
	$fieldToolTipsschool["English"]["Cresh"] = "";
	$fieldLabelsschool["English"]["Grade_R"] = "Grade R";
	$fieldToolTipsschool["English"]["Grade R"] = "";
	$fieldLabelsschool["English"]["Grade_0"] = "Grade 0";
	$fieldToolTipsschool["English"]["Grade 0"] = "";
	$fieldLabelsschool["English"]["Grade_1"] = "Grade 1";
	$fieldToolTipsschool["English"]["Grade 1"] = "";
	$fieldLabelsschool["English"]["Grade_2"] = "Grade 2";
	$fieldToolTipsschool["English"]["Grade 2"] = "";
	$fieldLabelsschool["English"]["Grade_3"] = "Grade 3";
	$fieldToolTipsschool["English"]["Grade 3"] = "";
	$fieldLabelsschool["English"]["Grade_4"] = "Grade 4";
	$fieldToolTipsschool["English"]["Grade 4"] = "";
	$fieldLabelsschool["English"]["Grade_5"] = "Grade 5";
	$fieldToolTipsschool["English"]["Grade 5"] = "";
	$fieldLabelsschool["English"]["Grade_6"] = "Grade 6";
	$fieldToolTipsschool["English"]["Grade 6"] = "";
	$fieldLabelsschool["English"]["Grade_7"] = "Grade 7";
	$fieldToolTipsschool["English"]["Grade 7"] = "";
	$fieldLabelsschool["English"]["Grade_8"] = "Grade 8";
	$fieldToolTipsschool["English"]["Grade 8"] = "";
	$fieldLabelsschool["English"]["Grade_9"] = "Grade 9";
	$fieldToolTipsschool["English"]["Grade 9"] = "";
	$fieldLabelsschool["English"]["Grade_11"] = "Grade 11";
	$fieldToolTipsschool["English"]["Grade 11"] = "";
	$fieldLabelsschool["English"]["Grade_12"] = "Grade 12";
	$fieldToolTipsschool["English"]["Grade 12"] = "";
	$fieldLabelsschool["English"]["Grade_10"] = "Grade 10";
	$fieldToolTipsschool["English"]["Grade 10"] = "";
	$fieldLabelsschool["English"]["Longditude"] = "Longditude";
	$fieldToolTipsschool["English"]["Longditude"] = "";
	$fieldLabelsschool["English"]["Latitude"] = "Latitude";
	$fieldToolTipsschool["English"]["Latitude"] = "";
	$fieldLabelsschool["English"]["P__O__Box"] = "P. O. Box";
	$fieldToolTipsschool["English"]["P. O. Box"] = "";
	$fieldLabelsschool["English"]["Province"] = "Province";
	$fieldToolTipsschool["English"]["Province"] = "";
	$fieldLabelsschool["English"]["Postal_code"] = "Postal Code";
	$fieldToolTipsschool["English"]["Postal code"] = "";
	$fieldLabelsschool["English"]["school_id"] = "School Id";
	$fieldToolTipsschool["English"]["school_id"] = "";
	if (count($fieldToolTipsschool["English"]))
		$tdataschool[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsschool[""] = array();
	$fieldToolTipsschool[""] = array();
	$pageTitlesschool[""] = array();
	$fieldLabelsschool[""]["School_Name"] = "School Name";
	$fieldToolTipsschool[""]["School Name"] = "";
	$fieldLabelsschool[""]["Registration_Number"] = "Registration Number";
	$fieldToolTipsschool[""]["Registration Number"] = "";
	$fieldLabelsschool[""]["Registration_Date"] = "Registration Date";
	$fieldToolTipsschool[""]["Registration Date"] = "";
	$fieldLabelsschool[""]["School_Type"] = "School Type";
	$fieldToolTipsschool[""]["School Type"] = "";
	$fieldLabelsschool[""]["E_mail"] = "E-mail";
	$fieldToolTipsschool[""]["E-mail"] = "";
	$fieldLabelsschool[""]["School_Phone"] = "School Phone";
	$fieldToolTipsschool[""]["School Phone"] = "";
	$fieldLabelsschool[""]["Admnistrators_Phone"] = "Admnistrators Phone";
	$fieldToolTipsschool[""]["Admnistrators Phone"] = "";
	$fieldLabelsschool[""]["TOTAL_Students"] = "Total Students";
	$fieldToolTipsschool[""]["TOTAL Students"] = "";
	$fieldLabelsschool[""]["Cresh"] = "Cresh";
	$fieldToolTipsschool[""]["Cresh"] = "";
	$fieldLabelsschool[""]["Grade_R"] = "Grade R";
	$fieldToolTipsschool[""]["Grade R"] = "";
	$fieldLabelsschool[""]["Grade_0"] = "Grade 0";
	$fieldToolTipsschool[""]["Grade 0"] = "";
	$fieldLabelsschool[""]["Grade_1"] = "Grade 1";
	$fieldToolTipsschool[""]["Grade 1"] = "";
	$fieldLabelsschool[""]["Grade_2"] = "Grade 2";
	$fieldToolTipsschool[""]["Grade 2"] = "";
	$fieldLabelsschool[""]["Grade_3"] = "Grade 3";
	$fieldToolTipsschool[""]["Grade 3"] = "";
	$fieldLabelsschool[""]["Grade_4"] = "Grade 4";
	$fieldToolTipsschool[""]["Grade 4"] = "";
	$fieldLabelsschool[""]["Grade_5"] = "Grade 5";
	$fieldToolTipsschool[""]["Grade 5"] = "";
	$fieldLabelsschool[""]["Grade_6"] = "Grade 6";
	$fieldToolTipsschool[""]["Grade 6"] = "";
	$fieldLabelsschool[""]["Grade_7"] = "Grade 7";
	$fieldToolTipsschool[""]["Grade 7"] = "";
	$fieldLabelsschool[""]["Grade_8"] = "Grade 8";
	$fieldToolTipsschool[""]["Grade 8"] = "";
	$fieldLabelsschool[""]["Grade_9"] = "Grade 9";
	$fieldToolTipsschool[""]["Grade 9"] = "";
	$fieldLabelsschool[""]["Grade_11"] = "Grade 11";
	$fieldToolTipsschool[""]["Grade 11"] = "";
	$fieldLabelsschool[""]["Grade_12"] = "Grade 12";
	$fieldToolTipsschool[""]["Grade 12"] = "";
	$fieldLabelsschool[""]["Grade_10"] = "Grade 10";
	$fieldToolTipsschool[""]["Grade 10"] = "";
	$fieldLabelsschool[""]["Longditude"] = "Longditude";
	$fieldToolTipsschool[""]["Longditude"] = "";
	$fieldLabelsschool[""]["Latitude"] = "Latitude";
	$fieldToolTipsschool[""]["Latitude"] = "";
	$fieldLabelsschool[""]["P__O__Box"] = "P. O. Box";
	$fieldToolTipsschool[""]["P. O. Box"] = "";
	$fieldLabelsschool[""]["Province"] = "Province";
	$fieldToolTipsschool[""]["Province"] = "";
	$fieldLabelsschool[""]["Postal_code"] = "Postal Code";
	$fieldToolTipsschool[""]["Postal code"] = "";
	$fieldLabelsschool[""]["school_id"] = "School Id";
	$fieldToolTipsschool[""]["school_id"] = "";
	if (count($fieldToolTipsschool[""]))
		$tdataschool[".isUseToolTips"] = true;
}
	
	
	$tdataschool[".NCSearch"] = true;


$tdataschool[".scrollGridBody"] = true;	

$tdataschool[".shortTableName"] = "school";
$tdataschool[".nSecOptions"] = 1;
$tdataschool[".recsPerRowList"] = 1;
$tdataschool[".mainTableOwnerID"] = "Country";
$tdataschool[".moveNext"] = 1;
$tdataschool[".nType"] = 0;

$tdataschool[".strOriginalTableName"] = "school";




$tdataschool[".showAddInPopup"] = false;

$tdataschool[".showEditInPopup"] = false;

$tdataschool[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataschool[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataschool[".fieldsForRegister"] = array();

$tdataschool[".listAjax"] = false;

	$tdataschool[".audit"] = false;

	$tdataschool[".locking"] = false;

$tdataschool[".edit"] = true;

$tdataschool[".list"] = true;

$tdataschool[".inlineEdit"] = true;
$tdataschool[".inlineAdd"] = true;
$tdataschool[".view"] = true;

$tdataschool[".import"] = true;

$tdataschool[".exportTo"] = true;

$tdataschool[".printFriendly"] = true;

$tdataschool[".delete"] = true;

$tdataschool[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataschool[".searchSaving"] = false;
//

$tdataschool[".showSearchPanel"] = true;
		$tdataschool[".flexibleSearch"] = true;		

if (isMobile())
	$tdataschool[".isUseAjaxSuggest"] = false;
else 
	$tdataschool[".isUseAjaxSuggest"] = true;

$tdataschool[".rowHighlite"] = true;



$tdataschool[".addPageEvents"] = false;

// use timepicker for search panel
$tdataschool[".isUseTimeForSearch"] = false;





$tdataschool[".allSearchFields"] = array();
$tdataschool[".filterFields"] = array();
$tdataschool[".requiredSearchFields"] = array();

$tdataschool[".allSearchFields"][] = "P. O. Box";
	$tdataschool[".allSearchFields"][] = "Postal code";
	$tdataschool[".allSearchFields"][] = "Province";
	$tdataschool[".allSearchFields"][] = "school_id";
	$tdataschool[".allSearchFields"][] = "School Name";
	$tdataschool[".allSearchFields"][] = "Registration Number";
	$tdataschool[".allSearchFields"][] = "Registration Date";
	$tdataschool[".allSearchFields"][] = "School Type";
	$tdataschool[".allSearchFields"][] = "Latitude";
	$tdataschool[".allSearchFields"][] = "Longditude";
	$tdataschool[".allSearchFields"][] = "Administrator";
	$tdataschool[".allSearchFields"][] = "Principal";
	$tdataschool[".allSearchFields"][] = "Address";
	$tdataschool[".allSearchFields"][] = "City";
	$tdataschool[".allSearchFields"][] = "Country";
	$tdataschool[".allSearchFields"][] = "E-mail";
	$tdataschool[".allSearchFields"][] = "School Phone";
	$tdataschool[".allSearchFields"][] = "Admnistrators Phone";
	$tdataschool[".allSearchFields"][] = "Cresh";
	$tdataschool[".allSearchFields"][] = "Grade R";
	$tdataschool[".allSearchFields"][] = "Grade 0";
	$tdataschool[".allSearchFields"][] = "Grade 1";
	$tdataschool[".allSearchFields"][] = "Grade 2";
	$tdataschool[".allSearchFields"][] = "Grade 3";
	$tdataschool[".allSearchFields"][] = "Grade 4";
	$tdataschool[".allSearchFields"][] = "Grade 5";
	$tdataschool[".allSearchFields"][] = "Grade 6";
	$tdataschool[".allSearchFields"][] = "Grade 7";
	$tdataschool[".allSearchFields"][] = "Grade 8";
	$tdataschool[".allSearchFields"][] = "Grade 9";
	$tdataschool[".allSearchFields"][] = "Grade 10";
	$tdataschool[".allSearchFields"][] = "Grade 11";
	$tdataschool[".allSearchFields"][] = "Grade 12";
	$tdataschool[".allSearchFields"][] = "TOTAL Students";
	

$tdataschool[".googleLikeFields"] = array();
$tdataschool[".googleLikeFields"][] = "School Name";
$tdataschool[".googleLikeFields"][] = "Registration Number";
$tdataschool[".googleLikeFields"][] = "Registration Date";
$tdataschool[".googleLikeFields"][] = "School Type";
$tdataschool[".googleLikeFields"][] = "Longditude";
$tdataschool[".googleLikeFields"][] = "Latitude";
$tdataschool[".googleLikeFields"][] = "Administrator";
$tdataschool[".googleLikeFields"][] = "Principal";
$tdataschool[".googleLikeFields"][] = "P. O. Box";
$tdataschool[".googleLikeFields"][] = "Address";
$tdataschool[".googleLikeFields"][] = "City";
$tdataschool[".googleLikeFields"][] = "Province";
$tdataschool[".googleLikeFields"][] = "Postal code";
$tdataschool[".googleLikeFields"][] = "Country";
$tdataschool[".googleLikeFields"][] = "E-mail";
$tdataschool[".googleLikeFields"][] = "School Phone";
$tdataschool[".googleLikeFields"][] = "Admnistrators Phone";
$tdataschool[".googleLikeFields"][] = "Cresh";
$tdataschool[".googleLikeFields"][] = "Grade R";
$tdataschool[".googleLikeFields"][] = "Grade 0";
$tdataschool[".googleLikeFields"][] = "Grade 1";
$tdataschool[".googleLikeFields"][] = "Grade 2";
$tdataschool[".googleLikeFields"][] = "Grade 3";
$tdataschool[".googleLikeFields"][] = "Grade 4";
$tdataschool[".googleLikeFields"][] = "Grade 5";
$tdataschool[".googleLikeFields"][] = "Grade 6";
$tdataschool[".googleLikeFields"][] = "Grade 7";
$tdataschool[".googleLikeFields"][] = "Grade 8";
$tdataschool[".googleLikeFields"][] = "Grade 9";
$tdataschool[".googleLikeFields"][] = "Grade 10";
$tdataschool[".googleLikeFields"][] = "Grade 11";
$tdataschool[".googleLikeFields"][] = "Grade 12";
$tdataschool[".googleLikeFields"][] = "TOTAL Students";
$tdataschool[".googleLikeFields"][] = "school_id";


$tdataschool[".advSearchFields"] = array();
$tdataschool[".advSearchFields"][] = "P. O. Box";
$tdataschool[".advSearchFields"][] = "Postal code";
$tdataschool[".advSearchFields"][] = "Province";
$tdataschool[".advSearchFields"][] = "school_id";
$tdataschool[".advSearchFields"][] = "School Name";
$tdataschool[".advSearchFields"][] = "Registration Number";
$tdataschool[".advSearchFields"][] = "Registration Date";
$tdataschool[".advSearchFields"][] = "School Type";
$tdataschool[".advSearchFields"][] = "Latitude";
$tdataschool[".advSearchFields"][] = "Longditude";
$tdataschool[".advSearchFields"][] = "Administrator";
$tdataschool[".advSearchFields"][] = "Principal";
$tdataschool[".advSearchFields"][] = "Address";
$tdataschool[".advSearchFields"][] = "City";
$tdataschool[".advSearchFields"][] = "Country";
$tdataschool[".advSearchFields"][] = "E-mail";
$tdataschool[".advSearchFields"][] = "School Phone";
$tdataschool[".advSearchFields"][] = "Admnistrators Phone";
$tdataschool[".advSearchFields"][] = "Cresh";
$tdataschool[".advSearchFields"][] = "Grade R";
$tdataschool[".advSearchFields"][] = "Grade 0";
$tdataschool[".advSearchFields"][] = "Grade 1";
$tdataschool[".advSearchFields"][] = "Grade 2";
$tdataschool[".advSearchFields"][] = "Grade 3";
$tdataschool[".advSearchFields"][] = "Grade 4";
$tdataschool[".advSearchFields"][] = "Grade 5";
$tdataschool[".advSearchFields"][] = "Grade 6";
$tdataschool[".advSearchFields"][] = "Grade 7";
$tdataschool[".advSearchFields"][] = "Grade 8";
$tdataschool[".advSearchFields"][] = "Grade 9";
$tdataschool[".advSearchFields"][] = "Grade 10";
$tdataschool[".advSearchFields"][] = "Grade 11";
$tdataschool[".advSearchFields"][] = "Grade 12";
$tdataschool[".advSearchFields"][] = "TOTAL Students";

$tdataschool[".tableType"] = "list";

$tdataschool[".printerPageOrientation"] = 0;
$tdataschool[".nPrinterPageScale"] = 100;

$tdataschool[".nPrinterSplitRecords"] = 40;

$tdataschool[".nPrinterPDFSplitRecords"] = 40;





	


$tdataschool[".isResizeColumns"] = true;



// view page pdf

// print page pdf

$tdataschool[".totalsFields"] = array();
$tdataschool[".totalsFields"][] = array(
	"fName" => "TOTAL Students", 
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => '');

$tdataschool[".pageSize"] = 20;

$tdataschool[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataschool[".strOrderBy"] = $tstrOrderBy;

$tdataschool[".orderindexes"] = array();

$tdataschool[".sqlHead"] = "SELECT school_name AS `School Name`,  reg_number AS `Registration Number`,  reg_date AS `Registration Date`,  school_type AS `School Type`,  londitude AS Longditude,  latitude AS Latitude,  administrator AS Administrator,  principal AS Principal,  postbox AS `P. O. Box`,  address AS Address,  city AS City,  province AS Province,  postalcode AS `Postal code`,  country AS Country,  email AS `E-mail`,  school_phone AS `School Phone`,  admin_cellphone AS `Admnistrators Phone`,  cresh AS Cresh,  grade_r AS `Grade R`,  grade_0 AS `Grade 0`,  grade_1 AS `Grade 1`,  grade_2 AS `Grade 2`,  grade_3 AS `Grade 3`,  grade_4 AS `Grade 4`,  grade_5 AS `Grade 5`,  grade_6 AS `Grade 6`,  grade_7 AS `Grade 7`,  grade_8 AS `Grade 8`,  grade_9 AS `Grade 9`,  grade_10 AS `Grade 10`,  grade_11 AS `Grade 11`,  grade_12 AS `Grade 12`,  total_students AS `TOTAL Students`,  school_id";
$tdataschool[".sqlFrom"] = "FROM school";
$tdataschool[".sqlWhereExpr"] = "";
$tdataschool[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataschool[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataschool[".arrGroupsPerPage"] = $arrGPP;

$tdataschool[".highlightSearchResults"] = true;

$tableKeysschool = array();
$tableKeysschool[] = "school_id";
$tdataschool[".Keys"] = $tableKeysschool;

$tdataschool[".listFields"] = array();
$tdataschool[".listFields"][] = "school_id";
$tdataschool[".listFields"][] = "Postal code";
$tdataschool[".listFields"][] = "P. O. Box";
$tdataschool[".listFields"][] = "Province";
$tdataschool[".listFields"][] = "School Name";
$tdataschool[".listFields"][] = "Registration Number";
$tdataschool[".listFields"][] = "Registration Date";
$tdataschool[".listFields"][] = "School Type";
$tdataschool[".listFields"][] = "Latitude";
$tdataschool[".listFields"][] = "Longditude";
$tdataschool[".listFields"][] = "Administrator";
$tdataschool[".listFields"][] = "Principal";
$tdataschool[".listFields"][] = "Address";
$tdataschool[".listFields"][] = "City";
$tdataschool[".listFields"][] = "Country";
$tdataschool[".listFields"][] = "E-mail";
$tdataschool[".listFields"][] = "School Phone";
$tdataschool[".listFields"][] = "Admnistrators Phone";
$tdataschool[".listFields"][] = "Cresh";
$tdataschool[".listFields"][] = "Grade R";
$tdataschool[".listFields"][] = "Grade 0";
$tdataschool[".listFields"][] = "Grade 1";
$tdataschool[".listFields"][] = "Grade 2";
$tdataschool[".listFields"][] = "Grade 3";
$tdataschool[".listFields"][] = "Grade 4";
$tdataschool[".listFields"][] = "Grade 5";
$tdataschool[".listFields"][] = "Grade 6";
$tdataschool[".listFields"][] = "Grade 7";
$tdataschool[".listFields"][] = "Grade 8";
$tdataschool[".listFields"][] = "Grade 9";
$tdataschool[".listFields"][] = "Grade 10";
$tdataschool[".listFields"][] = "Grade 11";
$tdataschool[".listFields"][] = "Grade 12";
$tdataschool[".listFields"][] = "TOTAL Students";

$tdataschool[".hideMobileList"] = array();


$tdataschool[".viewFields"] = array();
$tdataschool[".viewFields"][] = "P. O. Box";
$tdataschool[".viewFields"][] = "Postal code";
$tdataschool[".viewFields"][] = "Province";
$tdataschool[".viewFields"][] = "school_id";
$tdataschool[".viewFields"][] = "School Name";
$tdataschool[".viewFields"][] = "Registration Number";
$tdataschool[".viewFields"][] = "Registration Date";
$tdataschool[".viewFields"][] = "School Type";
$tdataschool[".viewFields"][] = "Latitude";
$tdataschool[".viewFields"][] = "Longditude";
$tdataschool[".viewFields"][] = "Administrator";
$tdataschool[".viewFields"][] = "Principal";
$tdataschool[".viewFields"][] = "Address";
$tdataschool[".viewFields"][] = "City";
$tdataschool[".viewFields"][] = "Country";
$tdataschool[".viewFields"][] = "E-mail";
$tdataschool[".viewFields"][] = "School Phone";
$tdataschool[".viewFields"][] = "Admnistrators Phone";
$tdataschool[".viewFields"][] = "Cresh";
$tdataschool[".viewFields"][] = "Grade R";
$tdataschool[".viewFields"][] = "Grade 0";
$tdataschool[".viewFields"][] = "Grade 1";
$tdataschool[".viewFields"][] = "Grade 2";
$tdataschool[".viewFields"][] = "Grade 3";
$tdataschool[".viewFields"][] = "Grade 4";
$tdataschool[".viewFields"][] = "Grade 5";
$tdataschool[".viewFields"][] = "Grade 6";
$tdataschool[".viewFields"][] = "Grade 7";
$tdataschool[".viewFields"][] = "Grade 8";
$tdataschool[".viewFields"][] = "Grade 9";
$tdataschool[".viewFields"][] = "Grade 10";
$tdataschool[".viewFields"][] = "Grade 11";
$tdataschool[".viewFields"][] = "Grade 12";
$tdataschool[".viewFields"][] = "TOTAL Students";

$tdataschool[".addFields"] = array();
$tdataschool[".addFields"][] = "Postal code";
$tdataschool[".addFields"][] = "Province";
$tdataschool[".addFields"][] = "P. O. Box";
$tdataschool[".addFields"][] = "School Name";
$tdataschool[".addFields"][] = "Registration Number";
$tdataschool[".addFields"][] = "Registration Date";
$tdataschool[".addFields"][] = "School Type";
$tdataschool[".addFields"][] = "Latitude";
$tdataschool[".addFields"][] = "Longditude";
$tdataschool[".addFields"][] = "Administrator";
$tdataschool[".addFields"][] = "Principal";
$tdataschool[".addFields"][] = "Address";
$tdataschool[".addFields"][] = "City";
$tdataschool[".addFields"][] = "Country";
$tdataschool[".addFields"][] = "E-mail";
$tdataschool[".addFields"][] = "School Phone";
$tdataschool[".addFields"][] = "Admnistrators Phone";
$tdataschool[".addFields"][] = "Cresh";
$tdataschool[".addFields"][] = "Grade R";
$tdataschool[".addFields"][] = "Grade 0";
$tdataschool[".addFields"][] = "Grade 1";
$tdataschool[".addFields"][] = "Grade 2";
$tdataschool[".addFields"][] = "Grade 3";
$tdataschool[".addFields"][] = "Grade 4";
$tdataschool[".addFields"][] = "Grade 5";
$tdataschool[".addFields"][] = "Grade 6";
$tdataschool[".addFields"][] = "Grade 7";
$tdataschool[".addFields"][] = "Grade 8";
$tdataschool[".addFields"][] = "Grade 9";
$tdataschool[".addFields"][] = "Grade 10";
$tdataschool[".addFields"][] = "Grade 11";
$tdataschool[".addFields"][] = "Grade 12";
$tdataschool[".addFields"][] = "TOTAL Students";

$tdataschool[".inlineAddFields"] = array();
$tdataschool[".inlineAddFields"][] = "Postal code";
$tdataschool[".inlineAddFields"][] = "P. O. Box";
$tdataschool[".inlineAddFields"][] = "Province";
$tdataschool[".inlineAddFields"][] = "School Name";
$tdataschool[".inlineAddFields"][] = "Registration Number";
$tdataschool[".inlineAddFields"][] = "Registration Date";
$tdataschool[".inlineAddFields"][] = "School Type";
$tdataschool[".inlineAddFields"][] = "Latitude";
$tdataschool[".inlineAddFields"][] = "Longditude";
$tdataschool[".inlineAddFields"][] = "Administrator";
$tdataschool[".inlineAddFields"][] = "Principal";
$tdataschool[".inlineAddFields"][] = "Address";
$tdataschool[".inlineAddFields"][] = "City";
$tdataschool[".inlineAddFields"][] = "Country";
$tdataschool[".inlineAddFields"][] = "E-mail";
$tdataschool[".inlineAddFields"][] = "School Phone";
$tdataschool[".inlineAddFields"][] = "Admnistrators Phone";
$tdataschool[".inlineAddFields"][] = "Cresh";
$tdataschool[".inlineAddFields"][] = "Grade R";
$tdataschool[".inlineAddFields"][] = "Grade 0";
$tdataschool[".inlineAddFields"][] = "Grade 1";
$tdataschool[".inlineAddFields"][] = "Grade 2";
$tdataschool[".inlineAddFields"][] = "Grade 3";
$tdataschool[".inlineAddFields"][] = "Grade 4";
$tdataschool[".inlineAddFields"][] = "Grade 5";
$tdataschool[".inlineAddFields"][] = "Grade 6";
$tdataschool[".inlineAddFields"][] = "Grade 7";
$tdataschool[".inlineAddFields"][] = "Grade 8";
$tdataschool[".inlineAddFields"][] = "Grade 9";
$tdataschool[".inlineAddFields"][] = "Grade 10";
$tdataschool[".inlineAddFields"][] = "Grade 11";
$tdataschool[".inlineAddFields"][] = "Grade 12";
$tdataschool[".inlineAddFields"][] = "TOTAL Students";

$tdataschool[".editFields"] = array();
$tdataschool[".editFields"][] = "Postal code";
$tdataschool[".editFields"][] = "Province";
$tdataschool[".editFields"][] = "P. O. Box";
$tdataschool[".editFields"][] = "School Name";
$tdataschool[".editFields"][] = "Registration Number";
$tdataschool[".editFields"][] = "Registration Date";
$tdataschool[".editFields"][] = "School Type";
$tdataschool[".editFields"][] = "Latitude";
$tdataschool[".editFields"][] = "Longditude";
$tdataschool[".editFields"][] = "Administrator";
$tdataschool[".editFields"][] = "Principal";
$tdataschool[".editFields"][] = "Address";
$tdataschool[".editFields"][] = "City";
$tdataschool[".editFields"][] = "Country";
$tdataschool[".editFields"][] = "E-mail";
$tdataschool[".editFields"][] = "School Phone";
$tdataschool[".editFields"][] = "Admnistrators Phone";
$tdataschool[".editFields"][] = "Cresh";
$tdataschool[".editFields"][] = "Grade R";
$tdataschool[".editFields"][] = "Grade 0";
$tdataschool[".editFields"][] = "Grade 1";
$tdataschool[".editFields"][] = "Grade 2";
$tdataschool[".editFields"][] = "Grade 3";
$tdataschool[".editFields"][] = "Grade 4";
$tdataschool[".editFields"][] = "Grade 5";
$tdataschool[".editFields"][] = "Grade 6";
$tdataschool[".editFields"][] = "Grade 7";
$tdataschool[".editFields"][] = "Grade 8";
$tdataschool[".editFields"][] = "Grade 9";
$tdataschool[".editFields"][] = "Grade 10";
$tdataschool[".editFields"][] = "Grade 11";
$tdataschool[".editFields"][] = "Grade 12";
$tdataschool[".editFields"][] = "TOTAL Students";

$tdataschool[".inlineEditFields"] = array();
$tdataschool[".inlineEditFields"][] = "Postal code";
$tdataschool[".inlineEditFields"][] = "P. O. Box";
$tdataschool[".inlineEditFields"][] = "Province";
$tdataschool[".inlineEditFields"][] = "School Name";
$tdataschool[".inlineEditFields"][] = "Registration Number";
$tdataschool[".inlineEditFields"][] = "Registration Date";
$tdataschool[".inlineEditFields"][] = "School Type";
$tdataschool[".inlineEditFields"][] = "Latitude";
$tdataschool[".inlineEditFields"][] = "Longditude";
$tdataschool[".inlineEditFields"][] = "Administrator";
$tdataschool[".inlineEditFields"][] = "Principal";
$tdataschool[".inlineEditFields"][] = "Address";
$tdataschool[".inlineEditFields"][] = "City";
$tdataschool[".inlineEditFields"][] = "Country";
$tdataschool[".inlineEditFields"][] = "E-mail";
$tdataschool[".inlineEditFields"][] = "School Phone";
$tdataschool[".inlineEditFields"][] = "Admnistrators Phone";
$tdataschool[".inlineEditFields"][] = "Cresh";
$tdataschool[".inlineEditFields"][] = "Grade R";
$tdataschool[".inlineEditFields"][] = "Grade 0";
$tdataschool[".inlineEditFields"][] = "Grade 1";
$tdataschool[".inlineEditFields"][] = "Grade 2";
$tdataschool[".inlineEditFields"][] = "Grade 3";
$tdataschool[".inlineEditFields"][] = "Grade 4";
$tdataschool[".inlineEditFields"][] = "Grade 5";
$tdataschool[".inlineEditFields"][] = "Grade 6";
$tdataschool[".inlineEditFields"][] = "Grade 7";
$tdataschool[".inlineEditFields"][] = "Grade 8";
$tdataschool[".inlineEditFields"][] = "Grade 9";
$tdataschool[".inlineEditFields"][] = "Grade 10";
$tdataschool[".inlineEditFields"][] = "Grade 11";
$tdataschool[".inlineEditFields"][] = "Grade 12";
$tdataschool[".inlineEditFields"][] = "TOTAL Students";

$tdataschool[".exportFields"] = array();
$tdataschool[".exportFields"][] = "P. O. Box";
$tdataschool[".exportFields"][] = "Postal code";
$tdataschool[".exportFields"][] = "Province";
$tdataschool[".exportFields"][] = "school_id";
$tdataschool[".exportFields"][] = "School Name";
$tdataschool[".exportFields"][] = "Registration Number";
$tdataschool[".exportFields"][] = "Registration Date";
$tdataschool[".exportFields"][] = "School Type";
$tdataschool[".exportFields"][] = "Latitude";
$tdataschool[".exportFields"][] = "Longditude";
$tdataschool[".exportFields"][] = "Administrator";
$tdataschool[".exportFields"][] = "Principal";
$tdataschool[".exportFields"][] = "Address";
$tdataschool[".exportFields"][] = "City";
$tdataschool[".exportFields"][] = "Country";
$tdataschool[".exportFields"][] = "E-mail";
$tdataschool[".exportFields"][] = "School Phone";
$tdataschool[".exportFields"][] = "Admnistrators Phone";
$tdataschool[".exportFields"][] = "Cresh";
$tdataschool[".exportFields"][] = "Grade R";
$tdataschool[".exportFields"][] = "Grade 0";
$tdataschool[".exportFields"][] = "Grade 1";
$tdataschool[".exportFields"][] = "Grade 2";
$tdataschool[".exportFields"][] = "Grade 3";
$tdataschool[".exportFields"][] = "Grade 4";
$tdataschool[".exportFields"][] = "Grade 5";
$tdataschool[".exportFields"][] = "Grade 6";
$tdataschool[".exportFields"][] = "Grade 7";
$tdataschool[".exportFields"][] = "Grade 8";
$tdataschool[".exportFields"][] = "Grade 9";
$tdataschool[".exportFields"][] = "Grade 10";
$tdataschool[".exportFields"][] = "Grade 11";
$tdataschool[".exportFields"][] = "Grade 12";
$tdataschool[".exportFields"][] = "TOTAL Students";

$tdataschool[".importFields"] = array();
$tdataschool[".importFields"][] = "School Name";
$tdataschool[".importFields"][] = "Registration Number";
$tdataschool[".importFields"][] = "Registration Date";
$tdataschool[".importFields"][] = "School Type";
$tdataschool[".importFields"][] = "Longditude";
$tdataschool[".importFields"][] = "Latitude";
$tdataschool[".importFields"][] = "Administrator";
$tdataschool[".importFields"][] = "Principal";
$tdataschool[".importFields"][] = "P. O. Box";
$tdataschool[".importFields"][] = "Address";
$tdataschool[".importFields"][] = "City";
$tdataschool[".importFields"][] = "Province";
$tdataschool[".importFields"][] = "Postal code";
$tdataschool[".importFields"][] = "Country";
$tdataschool[".importFields"][] = "E-mail";
$tdataschool[".importFields"][] = "School Phone";
$tdataschool[".importFields"][] = "Admnistrators Phone";
$tdataschool[".importFields"][] = "Cresh";
$tdataschool[".importFields"][] = "Grade R";
$tdataschool[".importFields"][] = "Grade 0";
$tdataschool[".importFields"][] = "Grade 1";
$tdataschool[".importFields"][] = "Grade 2";
$tdataschool[".importFields"][] = "Grade 3";
$tdataschool[".importFields"][] = "Grade 4";
$tdataschool[".importFields"][] = "Grade 5";
$tdataschool[".importFields"][] = "Grade 6";
$tdataschool[".importFields"][] = "Grade 7";
$tdataschool[".importFields"][] = "Grade 8";
$tdataschool[".importFields"][] = "Grade 9";
$tdataschool[".importFields"][] = "Grade 10";
$tdataschool[".importFields"][] = "Grade 11";
$tdataschool[".importFields"][] = "Grade 12";
$tdataschool[".importFields"][] = "TOTAL Students";
$tdataschool[".importFields"][] = "school_id";

$tdataschool[".printFields"] = array();
$tdataschool[".printFields"][] = "P. O. Box";
$tdataschool[".printFields"][] = "Postal code";
$tdataschool[".printFields"][] = "Province";
$tdataschool[".printFields"][] = "school_id";
$tdataschool[".printFields"][] = "School Name";
$tdataschool[".printFields"][] = "Registration Number";
$tdataschool[".printFields"][] = "Registration Date";
$tdataschool[".printFields"][] = "School Type";
$tdataschool[".printFields"][] = "Latitude";
$tdataschool[".printFields"][] = "Longditude";
$tdataschool[".printFields"][] = "Administrator";
$tdataschool[".printFields"][] = "Principal";
$tdataschool[".printFields"][] = "Address";
$tdataschool[".printFields"][] = "City";
$tdataschool[".printFields"][] = "Country";
$tdataschool[".printFields"][] = "E-mail";
$tdataschool[".printFields"][] = "School Phone";
$tdataschool[".printFields"][] = "Admnistrators Phone";
$tdataschool[".printFields"][] = "Cresh";
$tdataschool[".printFields"][] = "Grade R";
$tdataschool[".printFields"][] = "Grade 0";
$tdataschool[".printFields"][] = "Grade 1";
$tdataschool[".printFields"][] = "Grade 2";
$tdataschool[".printFields"][] = "Grade 3";
$tdataschool[".printFields"][] = "Grade 4";
$tdataschool[".printFields"][] = "Grade 5";
$tdataschool[".printFields"][] = "Grade 6";
$tdataschool[".printFields"][] = "Grade 7";
$tdataschool[".printFields"][] = "Grade 8";
$tdataschool[".printFields"][] = "Grade 9";
$tdataschool[".printFields"][] = "Grade 10";
$tdataschool[".printFields"][] = "Grade 11";
$tdataschool[".printFields"][] = "Grade 12";
$tdataschool[".printFields"][] = "TOTAL Students";

//	School Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "School Name";
	$fdata["GoodName"] = "School_Name";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","School_Name"); 
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
	
		$fdata["strField"] = "school_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "school_name";
	
		
		
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

	

	
	$tdataschool["School Name"] = $fdata;
//	Registration Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Registration Number";
	$fdata["GoodName"] = "Registration_Number";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Registration_Number"); 
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
	
		$fdata["strField"] = "reg_number"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reg_number";
	
		
		
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

	

	
	$tdataschool["Registration Number"] = $fdata;
//	Registration Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Registration Date";
	$fdata["GoodName"] = "Registration_Date";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Registration_Date"); 
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
	
		$fdata["strField"] = "reg_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reg_date";
	
		
		
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

	

	
	$tdataschool["Registration Date"] = $fdata;
//	School Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "School Type";
	$fdata["GoodName"] = "School_Type";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","School_Type"); 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "school_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "School Type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "School Type";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
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

	

	
	$tdataschool["School Type"] = $fdata;
//	Longditude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Longditude";
	$fdata["GoodName"] = "Longditude";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Longditude"); 
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
	
		$fdata["strField"] = "londitude"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "londitude";
	
		
		
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

	

	
	$tdataschool["Longditude"] = $fdata;
//	Latitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Latitude";
	$fdata["GoodName"] = "Latitude";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Latitude"); 
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
	
		$fdata["strField"] = "latitude"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "latitude";
	
		
		
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
			$edata["EditParams"].= " maxlength=16";
	
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

	

	
	$tdataschool["Latitude"] = $fdata;
//	Administrator
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Administrator";
	$fdata["GoodName"] = "Administrator";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Administrator"); 
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
	
		$fdata["strField"] = "administrator"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "administrator";
	
		
		
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

	

	
	$tdataschool["Administrator"] = $fdata;
//	Principal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Principal";
	$fdata["GoodName"] = "Principal";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Principal"); 
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
	
		$fdata["strField"] = "principal"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "principal";
	
		
		
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

	

	
	$tdataschool["Principal"] = $fdata;
//	P. O. Box
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "P. O. Box";
	$fdata["GoodName"] = "P__O__Box";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","P__O__Box"); 
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

	

	
	$tdataschool["P. O. Box"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Address"); 
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

	

	
	$tdataschool["Address"] = $fdata;
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","City"); 
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

	

	
	$tdataschool["City"] = $fdata;
//	Province
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Province";
	$fdata["GoodName"] = "Province";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Province"); 
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

	

	
	$tdataschool["Province"] = $fdata;
//	Postal code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Postal code";
	$fdata["GoodName"] = "Postal_code";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Postal_code"); 
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

	

	
	$tdataschool["Postal code"] = $fdata;
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Country"); 
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

	

	
	$tdataschool["Country"] = $fdata;
//	E-mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "E-mail";
	$fdata["GoodName"] = "E_mail";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","E_mail"); 
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
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataschool["E-mail"] = $fdata;
//	School Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "School Phone";
	$fdata["GoodName"] = "School_Phone";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","School_Phone"); 
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
	
		$fdata["strField"] = "school_phone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "school_phone";
	
		
		
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

	

	
	$tdataschool["School Phone"] = $fdata;
//	Admnistrators Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Admnistrators Phone";
	$fdata["GoodName"] = "Admnistrators_Phone";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Admnistrators_Phone"); 
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
	
		$fdata["strField"] = "admin_cellphone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "admin_cellphone";
	
		
		
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

	

	
	$tdataschool["Admnistrators Phone"] = $fdata;
//	Cresh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Cresh";
	$fdata["GoodName"] = "Cresh";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Cresh"); 
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
	
		$fdata["strField"] = "cresh"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cresh";
	
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataschool["Cresh"] = $fdata;
//	Grade R
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Grade R";
	$fdata["GoodName"] = "Grade_R";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Grade_R"); 
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
	
		$fdata["strField"] = "grade_r"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_r";
	
		
		
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

	

	
	$tdataschool["Grade R"] = $fdata;
//	Grade 0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Grade 0";
	$fdata["GoodName"] = "Grade_0";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Grade_0"); 
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
	
		$fdata["strField"] = "grade_0"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_0";
	
		
		
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

	

	
	$tdataschool["Grade 0"] = $fdata;
//	Grade 1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Grade 1";
	$fdata["GoodName"] = "Grade_1";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Grade_1"); 
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
	
		$fdata["strField"] = "grade_1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_1";
	
		
		
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

	

	
	$tdataschool["Grade 1"] = $fdata;
//	Grade 2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Grade 2";
	$fdata["GoodName"] = "Grade_2";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Grade_2"); 
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
	
		$fdata["strField"] = "grade_2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_2";
	
		
		
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

	

	
	$tdataschool["Grade 2"] = $fdata;
//	Grade 3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Grade 3";
	$fdata["GoodName"] = "Grade_3";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Grade_3"); 
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
	
		$fdata["strField"] = "grade_3"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_3";
	
		
		
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

	

	
	$tdataschool["Grade 3"] = $fdata;
//	Grade 4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Grade 4";
	$fdata["GoodName"] = "Grade_4";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Grade_4"); 
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
	
		$fdata["strField"] = "grade_4"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_4";
	
		
		
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

	

	
	$tdataschool["Grade 4"] = $fdata;
//	Grade 5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Grade 5";
	$fdata["GoodName"] = "Grade_5";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Grade_5"); 
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
	
		$fdata["strField"] = "grade_5"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_5";
	
		
		
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

	

	
	$tdataschool["Grade 5"] = $fdata;
//	Grade 6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Grade 6";
	$fdata["GoodName"] = "Grade_6";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Grade_6"); 
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
	
		$fdata["strField"] = "grade_6"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_6";
	
		
		
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

	

	
	$tdataschool["Grade 6"] = $fdata;
//	Grade 7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Grade 7";
	$fdata["GoodName"] = "Grade_7";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Grade_7"); 
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
	
		$fdata["strField"] = "grade_7"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_7";
	
		
		
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

	

	
	$tdataschool["Grade 7"] = $fdata;
//	Grade 8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Grade 8";
	$fdata["GoodName"] = "Grade_8";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Grade_8"); 
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
	
		$fdata["strField"] = "grade_8"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_8";
	
		
		
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

	

	
	$tdataschool["Grade 8"] = $fdata;
//	Grade 9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Grade 9";
	$fdata["GoodName"] = "Grade_9";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Grade_9"); 
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
	
		$fdata["strField"] = "grade_9"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_9";
	
		
		
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

	

	
	$tdataschool["Grade 9"] = $fdata;
//	Grade 10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Grade 10";
	$fdata["GoodName"] = "Grade_10";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Grade_10"); 
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
	
		$fdata["strField"] = "grade_10"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_10";
	
		
		
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

	

	
	$tdataschool["Grade 10"] = $fdata;
//	Grade 11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Grade 11";
	$fdata["GoodName"] = "Grade_11";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Grade_11"); 
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
	
		$fdata["strField"] = "grade_11"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_11";
	
		
		
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

	

	
	$tdataschool["Grade 11"] = $fdata;
//	Grade 12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Grade 12";
	$fdata["GoodName"] = "Grade_12";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","Grade_12"); 
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
	
		$fdata["strField"] = "grade_12"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grade_12";
	
		
		
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

	

	
	$tdataschool["Grade 12"] = $fdata;
//	TOTAL Students
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "TOTAL Students";
	$fdata["GoodName"] = "TOTAL_Students";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","TOTAL_Students"); 
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
	
		$fdata["strField"] = "total_students"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_students";
	
		
		
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

	

	
	$tdataschool["TOTAL Students"] = $fdata;
//	school_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "school_id";
	$fdata["GoodName"] = "school_id";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("school","school_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "school_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "school_id";
	
		
		
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

	

	
	$tdataschool["school_id"] = $fdata;

	
$tables_data["school"]=&$tdataschool;
$field_labels["school"] = &$fieldLabelsschool;
$fieldToolTips["school"] = &$fieldToolTipsschool;
$page_titles["school"] = &$pageTitlesschool;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["school"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["school"] = array();


	
				$strOriginalDetailsTable="reps";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="reps";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reps";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["school"][0] = $masterParams;	
				$masterTablesData["school"][0]["masterKeys"] = array();
	$masterTablesData["school"][0]["masterKeys"][]="rep_id";
				$masterTablesData["school"][0]["detailKeys"] = array();
	$masterTablesData["school"][0]["detailKeys"][]="rep_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_school()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "school_name AS `School Name`,  reg_number AS `Registration Number`,  reg_date AS `Registration Date`,  school_type AS `School Type`,  londitude AS Longditude,  latitude AS Latitude,  administrator AS Administrator,  principal AS Principal,  postbox AS `P. O. Box`,  address AS Address,  city AS City,  province AS Province,  postalcode AS `Postal code`,  country AS Country,  email AS `E-mail`,  school_phone AS `School Phone`,  admin_cellphone AS `Admnistrators Phone`,  cresh AS Cresh,  grade_r AS `Grade R`,  grade_0 AS `Grade 0`,  grade_1 AS `Grade 1`,  grade_2 AS `Grade 2`,  grade_3 AS `Grade 3`,  grade_4 AS `Grade 4`,  grade_5 AS `Grade 5`,  grade_6 AS `Grade 6`,  grade_7 AS `Grade 7`,  grade_8 AS `Grade 8`,  grade_9 AS `Grade 9`,  grade_10 AS `Grade 10`,  grade_11 AS `Grade 11`,  grade_12 AS `Grade 12`,  total_students AS `TOTAL Students`,  school_id";
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
	"m_srcTableName" => "school"
));

$proto5["m_sql"] = "school_name";
$proto5["m_srcTableName"] = "school";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "School Name";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "reg_number",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto7["m_sql"] = "reg_number";
$proto7["m_srcTableName"] = "school";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "Registration Number";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "reg_date",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto9["m_sql"] = "reg_date";
$proto9["m_srcTableName"] = "school";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Registration Date";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "school_type",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto11["m_sql"] = "school_type";
$proto11["m_srcTableName"] = "school";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "School Type";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "londitude",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto13["m_sql"] = "londitude";
$proto13["m_srcTableName"] = "school";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "Longditude";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "latitude",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto15["m_sql"] = "latitude";
$proto15["m_srcTableName"] = "school";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Latitude";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "administrator",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto17["m_sql"] = "administrator";
$proto17["m_srcTableName"] = "school";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Administrator";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "principal",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto19["m_sql"] = "principal";
$proto19["m_srcTableName"] = "school";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Principal";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "postbox",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto21["m_sql"] = "postbox";
$proto21["m_srcTableName"] = "school";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "P. O. Box";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto23["m_sql"] = "address";
$proto23["m_srcTableName"] = "school";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Address";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto25["m_sql"] = "city";
$proto25["m_srcTableName"] = "school";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "City";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "province",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto27["m_sql"] = "province";
$proto27["m_srcTableName"] = "school";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "Province";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "postalcode",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto29["m_sql"] = "postalcode";
$proto29["m_srcTableName"] = "school";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "Postal code";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto31["m_sql"] = "country";
$proto31["m_srcTableName"] = "school";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "Country";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto33["m_sql"] = "email";
$proto33["m_srcTableName"] = "school";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "E-mail";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "school_phone",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto35["m_sql"] = "school_phone";
$proto35["m_srcTableName"] = "school";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "School Phone";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "admin_cellphone",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto37["m_sql"] = "admin_cellphone";
$proto37["m_srcTableName"] = "school";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "Admnistrators Phone";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "cresh",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto39["m_sql"] = "cresh";
$proto39["m_srcTableName"] = "school";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "Cresh";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_r",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto41["m_sql"] = "grade_r";
$proto41["m_srcTableName"] = "school";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "Grade R";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_0",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto43["m_sql"] = "grade_0";
$proto43["m_srcTableName"] = "school";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "Grade 0";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_1",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto45["m_sql"] = "grade_1";
$proto45["m_srcTableName"] = "school";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "Grade 1";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_2",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto47["m_sql"] = "grade_2";
$proto47["m_srcTableName"] = "school";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "Grade 2";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_3",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto49["m_sql"] = "grade_3";
$proto49["m_srcTableName"] = "school";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "Grade 3";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_4",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto51["m_sql"] = "grade_4";
$proto51["m_srcTableName"] = "school";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "Grade 4";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_5",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto53["m_sql"] = "grade_5";
$proto53["m_srcTableName"] = "school";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "Grade 5";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_6",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto55["m_sql"] = "grade_6";
$proto55["m_srcTableName"] = "school";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "Grade 6";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_7",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto57["m_sql"] = "grade_7";
$proto57["m_srcTableName"] = "school";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "Grade 7";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_8",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto59["m_sql"] = "grade_8";
$proto59["m_srcTableName"] = "school";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "Grade 8";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_9",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto61["m_sql"] = "grade_9";
$proto61["m_srcTableName"] = "school";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "Grade 9";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_10",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto63["m_sql"] = "grade_10";
$proto63["m_srcTableName"] = "school";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "Grade 10";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_11",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto65["m_sql"] = "grade_11";
$proto65["m_srcTableName"] = "school";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "Grade 11";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "grade_12",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto67["m_sql"] = "grade_12";
$proto67["m_srcTableName"] = "school";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "Grade 12";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "total_students",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto69["m_sql"] = "total_students";
$proto69["m_srcTableName"] = "school";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "TOTAL Students";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "school_id",
	"m_strTable" => "school",
	"m_srcTableName" => "school"
));

$proto71["m_sql"] = "school_id";
$proto71["m_srcTableName"] = "school";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto73=array();
$proto73["m_link"] = "SQLL_MAIN";
			$proto74=array();
$proto74["m_strName"] = "school";
$proto74["m_srcTableName"] = "school";
$proto74["m_columns"] = array();
$proto74["m_columns"][] = "school_id";
$proto74["m_columns"][] = "rep_id";
$proto74["m_columns"][] = "school_name";
$proto74["m_columns"][] = "reg_number";
$proto74["m_columns"][] = "reg_date";
$proto74["m_columns"][] = "school_type";
$proto74["m_columns"][] = "londitude";
$proto74["m_columns"][] = "latitude";
$proto74["m_columns"][] = "administrator";
$proto74["m_columns"][] = "principal";
$proto74["m_columns"][] = "postbox";
$proto74["m_columns"][] = "address";
$proto74["m_columns"][] = "city";
$proto74["m_columns"][] = "province";
$proto74["m_columns"][] = "postalcode";
$proto74["m_columns"][] = "country";
$proto74["m_columns"][] = "email";
$proto74["m_columns"][] = "school_phone";
$proto74["m_columns"][] = "admin_cellphone";
$proto74["m_columns"][] = "cresh";
$proto74["m_columns"][] = "grade_r";
$proto74["m_columns"][] = "grade_0";
$proto74["m_columns"][] = "grade_1";
$proto74["m_columns"][] = "grade_2";
$proto74["m_columns"][] = "grade_3";
$proto74["m_columns"][] = "grade_4";
$proto74["m_columns"][] = "grade_5";
$proto74["m_columns"][] = "grade_6";
$proto74["m_columns"][] = "grade_7";
$proto74["m_columns"][] = "grade_8";
$proto74["m_columns"][] = "grade_9";
$proto74["m_columns"][] = "grade_10";
$proto74["m_columns"][] = "grade_11";
$proto74["m_columns"][] = "grade_12";
$proto74["m_columns"][] = "total_students";
$obj = new SQLTable($proto74);

$proto73["m_table"] = $obj;
$proto73["m_sql"] = "school";
$proto73["m_alias"] = "";
$proto73["m_srcTableName"] = "school";
$proto75=array();
$proto75["m_sql"] = "";
$proto75["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto75["m_column"]=$obj;
$proto75["m_contained"] = array();
$proto75["m_strCase"] = "";
$proto75["m_havingmode"] = false;
$proto75["m_inBrackets"] = false;
$proto75["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto75);

$proto73["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto73);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="school";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_school = createSqlQuery_school();


	
																																		
	
$tdataschool[".sqlquery"] = $queryData_school;

include_once(getabspath("include/school_events.php"));
$tableEvents["school"] = new eventclass_school;
$tdataschool[".hasEvents"] = true;

?>