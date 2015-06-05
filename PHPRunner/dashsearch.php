<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.##@ext##");
add_nocache_headers();

require_once("include/##@TABLE.strShortTableName s##_variables.##@ext##");
require_once("classes/searchcontrol.##@ext##");
require_once("classes/advancedsearchcontrol.##@ext##");
require_once("classes/panelsearchcontrol.##@ext##");
require_once("classes/searchclause.##@ext##");

##if @BUILDER.bCreateLoginPage##
if( !Security::processPageSecurity( $strtablename, 'S' ) )
	return;
##endif##

##layout "search" @TABLE.strDatasourceTable##

require_once('include/xtempl.##@ext##');
require_once('classes/searchpage_dash.##@ext##');
$xt = new Xtempl();

$id = postvalue("id");
if( !$id)
	$id = 1;
	
// for usual page show proccess
$mode = SEARCH_SIMPLE;
$templatefile = GetTemplateName("##@TABLE.strShortTableName##", "search");

// for ajax query, used when page buffers new control
if(postvalue("mode")=="dashsearch"){
	$mode = SEARCH_DASHBOARD;
}	


$params = array();
$params["id"] = $id;
$params["mode"] = $mode;
$params['xt'] = &$xt;
$params['templatefile'] = $templatefile;
$params['shortTableName'] = '##@TABLE.strShortTableName s##';
$params['origTName'] = $strOriginalTableName;
$params['sessionPrefix'] = $strTableName;
$params['tName'] = $strTableName;
$params['pageType'] = PAGE_SEARCH;
$params['searchControllerId'] = postvalue('searchControllerId') ? postvalue('searchControllerId') : $id;

$pageObject = new SearchPageDash($params);
$pageObject->init();
$pageObject->process();

?>
