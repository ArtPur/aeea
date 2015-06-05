<?php

class ListPage_DPDashboard extends ListPage_Embed
{
	/**
	*	name of the dashboard the List is displayed on
	*/
	var $dashboardName;
	
	/**
      * Constructor, set initial params
      *
      * @param array $params
      */
	function ListPage_Dashboard(&$params)
	{
		// call parent constructor. always at the first line!!!
		parent::ListPage_Embed($params);
		// init params

		$this->formBricks["header"] = array("newrecord_controls_block", "record_controls_block");	
		$this->formBricks["footer"] = array("pagination_block");	
	}

	protected function assingSessionPrefix() 
	{
		$this->sessionPrefix = $this->tName."_dpdashboard_".$this->dashboardName;	
	}
	

	/**
	 * Checks if need to display grid
	 */
	function isDispGrid() 
	{
		return $this->permis[$this->tName]['search'];
	}
	
	/**
	 * Fills info in array about grid.
	 * For new add row
	 * @param array $rowInfoArr array with total info, that assignes grid
	 */
	function fillGridShowInfo(&$rowInfoArr)
	{
		$rowInfoArr["data"]= array();
		$editlink = "";
		$copylink = "";
		//	add inline add row
		{
			$row = array();
			$row["rowclass"] = "gridRowAdd ".$this->makeClassName("hiddenelem");
			$row["rsclass"] = "gridRowSepAdd ".$this->makeClassName("hiddenelem");
			if($this->listGridLayout == gltVERTICAL)
				$row["rowattrs"] .= "vertical=\"1\"";
			
			$record = array();
			$record["edit_link"]= true;
			$record["inlineedit_link"]= true;
			$record["view_link"]= true;
			$record["copy_link"]= true;
			$record["checkbox"]= true;
			$record["checkbox"]= true;
			$record["editlink_attrs"]= "id=\"editLink_add".$this->id."\"";
			
			
			$record["copylink_attrs"]= "id=\"copyLink_add".$this->id."\" name=\"copyLink_add".$this->id."\"";
			$record["viewlink_attrs"]= "id=\"viewLink_add".$this->id."\" name=\"viewLink_add".$this->id."\"";
			$record["checkbox_attrs"]= "id=\"check_add".$this->id."\" name=\"selection[]\"";
			
			//	add container for inline add controls
			$addedInlineAddContainer = false;
			if($this->permis[$this->tName]['edit']&& $this->isUseInlineEdit)
			{
				$record["inlineeditlink_attrs"]= "id=\"inlineEdit_add".$this->id."\" ";
				$addedInlineAddContainer = true;
			}
			
			
			$this->addSpansForGridCells('add', $record);
			for($i = 0; $i < count($this->listFields); $i ++) 
			{
				$field = $this->listFields[$i]['fName'];
				$gFieldName = GoodFieldName( $field );				
				if(!$addedInlineAddContainer)
				{
					if($i==0 && !($this->permis[$this->tName]['edit'] && $this->isUseInlineEdit))
						$record[$gFieldName."_value"].= "<span id=\"inlineEdit_add".$this->id."\"></span>";
				}
				$record[$gFieldName."_class"].= $this->fieldClass($field);
				
				if( isset( $this->hiddenColumnClasses[$field] ) )
				{
					$record[ $gFieldName."_class" ] .= " " . $this->hiddenColumnClasses[$field];
					
					if( $this->listGridLayout != gltHORIZONTAL )
						$record[ $gFieldName."_label_class" ] = $this->hiddenColumnClasses[$field];
				}				
			}
			
			if($this->colsOnPage > 1)
				$record["endrecord_block"]= true;
			
			$record["grid_recordheader"]= true;
			$record["grid_vrecord"]= true;
			$row["grid_record"]= array("data" => array());
			//set the $row["grid_record"] value
			$this->setRowsGridRecord($row, $record);
			
			for($i = 1; $i < $this->colsOnPage; $i ++) 
			{
				$rec = array();
				if($i < $this->colsOnPage - 1)
					$rec["endrecord_block"]= true;
				if($row["grid_record"]["data"])
				{				
					$row["grid_record"]["data"][]= $rec;
				}
			}
			
			$row["grid_rowspace"]= true;
			$row["grid_recordspace"]= array("data" => array());
			for($i = 0; $i < $this->colsOnPage * 2 - 1; $i ++)
				$row["grid_recordspace"]["data"][]= true;
			$rowInfoArr["data"][]= $row;
			
		}
	}
	
	
	function addCommonJs()
	{
		$this->addControlsJSAndCSS();
		$this->addButtonHandlers();
	}
	
	
	function buildSearchPanel() 
	{
	}
	
	/**
	 * Display blocks after loaded template of page
	 *
	 */
	function displayAfterLoadTempl() 
	{
		$this->addControlsJSAndCSS();
		$this->fillSetCntrlMaps();
		$returnJSON = array();
		$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;
		$returnJSON['settings'] = $this->jsSettings;
		$this->xt->assign("header",false);
		$this->xt->assign("footer",false);
		
		$this->assignFormFooterAndHeaderBricks(false);
		$this->xt->prepareContainers();
		$returnJSON["html"] = parent::displayAfterLoadTempl().$this->xt->fetch_loaded("body");

		$this->assignFormFooterAndHeaderBricks(true);
		$this->xt->prepareContainers();
		if( $this->formBricks["header"] )
			$returnJSON['headerCont'] = $this->fetchBrickList( $this->formBricks["header"] );					
		
		if( $this->formBricks["footer"] )
			$returnJSON['footerCont'] = $this->fetchBrickList( $this->formBricks["footer"] );
		
		$returnJSON['idStartFrom'] = $this->flyId;
		$returnJSON['success'] = true;
		
		$returnJSON["additionalJS"] = $this->grabAllJsFiles();
		$returnJSON["CSSFiles"] = $this->grabAllCSSFiles();

		echo printJSON($returnJSON);
	}
	
	
	function prepareForBuildPage()
	{	
		// build column hiding CSS
		$this->buildMobileCssRules();
		
		//Sorting fields
		$this->orderClause->buildOrderParams();
		
		// delete record
		$this->deleteRecords();
		
		// build sql query
		$this->buildSQL();
		
		// build pagination block
		$this->buildPagination();
		
		// seek page must be executed after build pagination
		$this->seekPageInRecSet($this->querySQL);
		
		$this->setGoogleMapsParams($this->listFields);
		
		// fill grid data
		$this->fillGridData();
		
		// add common js code
		$this->addCommonJs();
		
		// add common html code
		$this->addCommonHtml();
		
		// Set common assign
		$this->commonAssign();
		
		// Add cells' custom css
		$this->addCustomCss();
	}
	
	
	function showPage() 
	{
		$this->BeforeShowList();
		
		if (isMobile())
		{
			$this->xt->assign("cancelbutton_block",true);
			$this->xt->assign("searchform_block", true);
			$this->xt->assign("searchform_showall", true);
			$bricksExcept = array("grid_mobile", "pagination", "vmsearch2", "cancelbutton_mobile");
		}
		else 
		{
			$bricksExcept = array("grid", "pagination", "vsearch1", "vsearch2", "search");
			$mainPSet = $this->pSet->getTable($this->mainTable);
			if($mainPSet->isAllowToAdd($this->mainField))
				$bricksExcept[] = "recordcontrols_new";
		}
		
		$this->xt->hideAllBricksExcept($bricksExcept);
//		$this->xt->prepare_template($this->templatefile);
		$this->displayAfterLoadTempl();
	}
	
	function buildTotals(&$totals)
	{
	}
	
	/**
	 * Returns where clause for active master-detail relationship
	 * @return string
	 */
	function getMasterTableSQLClause()
	{
		return "";
	}	
	function assignListIconsColumn($editPermis = 1, $addPermis = 1, $searchPermis = 1)
	{	
		//	do nothing, don't display listIcons_column column
	}
	

}
?>