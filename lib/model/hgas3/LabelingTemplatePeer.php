<?php

/**
 * Subclass for performing query and update operations on the 'labeling_template' table.
 *
 * 
 *
 * @package lib.model.hgas3
 */ 
class LabelingTemplatePeer extends BaseLabelingTemplatePeer
{
    public static function GetPager($cd)
    {
        $startIndex = sfContext::getInstance()->getRequest()->getParameter('startIndex', 0);
        $rowsPerPage = sfContext::getInstance()->getRequest()->getParameter('results', 20);
        $page = (int) ( ($startIndex + 1) / $rowsPerPage);
        if (( ($startIndex + 1) % $rowsPerPage) != 0) {
            $page++;
        }

        $page = sfContext::getInstance()->getRequest()->getParameter('page', 1);

        $c = clone($cd);
        $pager = new sfPropelPager('LabelingTemplate', $rowsPerPage);

        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();
        return $pager;
    }	
    
    public static function GetTemplateList()
    {
    	$c = new Criteria();
    	//$c->addAscendingOrderByColumn(self::DESCRIPTION);
    	$rs = self::doSelect($c);
    	$list = array();
    	$list[] = ' - CHOOSE TEMPLATE - ';
    	foreach($rs as $r)
    	{
    		$desc = LabelDescriptionPeer::GetDescriptionId($r->getLabelDescriptionId());
    		$list[$r->getId()] = $desc;
    	}
    	return $list;
    }
    
    public static function GetTemplateListByFields($co, $field1=null, $field2=null, $field3=null )
    {
    	$c = new Criteria();
    	$c->add(self::LABEL_COMPANY_ID, $co);
    	//$c->addAscendingOrderByColumn(self::DESCRIPTION);
    	$rs = self::doSelect($c);
    	$list = array();
    	foreach($rs as $r)
    	{
    		$desc = LabelDescriptionPeer::GetDescriptionId($r->getLabelDescriptionId());
    		$list[$r->getId()] = $desc;
    	}
    	return $list;
    }    
    
    public static function GetFontList()
    {
    	$c = new Criteria();
    	$rs = self::doSelect($c);
    	$list = array();
    	foreach($rs as $r)
    	{
    		$list[$r->getL1Font()] = ' - '. $r->getL1Font().' - ';
    		$list[$r->getL2Font()] = ' - '. $r->getL2Font().' - ';
    		$list[$r->getL3Font()] = ' - '. $r->getL3Font().' - ';
    		$list[$r->getL4Font()] = ' - '. $r->getL4Font().' - ';
    	}
    	asort($list);
    	$list = array_unique($list);
    	$list[""] = ' - CHOOSE FONT - ';
    	return $list;
    } 
    
    public static function GetFontSizeList()
    {
    	$c = new Criteria();
    	$rs = self::doSelect($c);
    	$list = array();
    	foreach($rs as $r)
    	{
    		$list[$r->getL1FontSize()] = ' - '. $r->getL1FontSize().' - ';
    		$list[$r->getL2FontSize()] = ' - '. $r->getL2FontSize().' - ';
    		$list[$r->getL3FontSize()] = ' - '. $r->getL3FontSize().' - ';
    		$list[$r->getL4FontSize()] = ' - '. $r->getL4FontSize().' - ';
    	}
    	asort($list);
    	$list = array_unique($list);
    	$list[""] = ' - SIZE - ';
    	return $list;
    }     
        
    public static function GetColorList()
    {
    	$c = new Criteria();
    	$c->addAscendingOrderByColumn(self::COLOR);
    	$rs = self::doSelect($c);
    	$list = array();
    	$list[] = ' - CHOOSE COLOR - ';
    	foreach($rs as $r)
    	{
    		$list[$r->getColor()] = ' - '. $r->getColor().' - ';
    	}
    	return $list;
    }    
    
    public static function GetColorHexByColor($color)
    {
    	$c = new Criteria();
    	$c->add(self::COLOR, $color);
    	$c->add(self::COLOR_HEX, '', Criteria::NOT_EQUAL);
    	$rs = self::doSelectOne($c);
    	return $rs? $rs->getColorHex() : '';
    }
        
    public static function GetValueInfo($id)
    {
    	$record = self::retrieveByPK($id);
    	$list = array();
    	if ($record)
    	{
    		if ($record->getLine1Col1()) $list["line1_col1"] = $record->getLine1Col1();
    		if ($record->getLine1Col2()) $list["line1_col2"] = $record->getLine1Col2();
    		if ($record->getLine2Col1()) $list["line2_col1"] = $record->getLine2Col1();
    		if ($record->getLine2Col2()) $list["line2_col2"] = $record->getLine2Col2();
    		if ($record->getLine3Col1()) $list["line3_col1"] = $record->getLine3Col1();
    		if ($record->getLine3Col2()) $list["line3_col2"] = $record->getLine3Col2();
    		if ($record->getLine4Col1()) $list["line4_col1"] = $record->getLine4Col1();
    		if ($record->getLine4Col2()) $list["line4_col2"] = $record->getLine4Col2();
    	}
    	return $list;
    }
    
    
   public static function GetLineText($lineNo, $template, $mess=null, $cnt = null)
   {
   	$cnt = $cnt? $cnt : 0;
   	switch($lineNo)
   	{
   		case 1:
			$italic = (strtolower($template->getL1FontStyle()) == 'italic' || strtolower($template->getL1FontStyle()) == 'bolditalic') ? 'italic' : ''; 
			$bold   = (strtolower($template->getL1FontStyle()) == 'bold' || strtolower($template->getL1FontStyle()) == 'bolditalic') ? 'bold' : '';
			$sep    = is_null($template->getL1Separator())? '' : ' ';
			$mess   = $mess? $mess : $template->getLine1Col1() .' '.$sep.' '.$template->getLine1Col2();
		   	return '<span id="SPANline1_'.$cnt.'" style="
					font-size: '.$template->getL1FontSize() * 1.3333 .'px; 
					font-family: '.$template->getL1Font() .';
					font-style: '.$italic .';
					font-weight:'.$bold .';
					"><center>'.$mess .'
					</center></span>'
		   	;
		   	
   			break;
   		case 2:
			$italic = (strtolower($template->getL2FontStyle()) == 'italic' || strtolower($template->getL2FontStyle()) == 'bolditalic') ? 'italic' : ''; 
			$bold = (strtolower($template->getL2FontStyle()) == 'bold' || strtolower($template->getL2FontStyle()) == 'bolditalic') ? 'bold' : '';
			$sep    = is_null($template->getL2Separator())? '' : ' ';
			$mess   = $mess? $mess : $template->getLine2Col1() .' '.$sep.' '.$template->getLine2Col2();
		   	return '<span id="SPANline2_'.$cnt.'" style="
					font-size: '.$template->getL2FontSize()* 1.3333  .'px; 
					font-family: '.$template->getL2Font() .';
					font-style: '.$italic .';
					font-weight:'.$bold .';
					"><center>'.$mess .'</center></span>';
			
   			break;
   		case 3:
			$italic = (strtolower($template->getL3FontStyle()) == 'italic' || strtolower($template->getL3FontStyle()) == 'bolditalic') ? 'italic' : ''; 
			$bold = (strtolower($template->getL3FontStyle()) == 'bold' || strtolower($template->getL3FontStyle()) == 'bolditalic') ? 'bold' : '';
			$sep    = is_null($template->getL3Separator())? '' : ' ';
			$mess   = $mess? $mess : $template->getLine3Col1() .' '.$sep.' '.$template->getLine3Col2();
		   	return '<span id="SPANline3_'.$cnt.'" style="
					font-size: '.$template->getL3FontSize()* 1.3333  .'px; 
					font-family: '.$template->getL3Font() .';
					font-style: '.$italic .';
					font-weight:'.$bold .';
					"><center>'.$mess .'</center></span>';
			
   			break;
   		case 4:
			$italic = (strtolower($template->getL4FontStyle()) == 'italic' || strtolower($template->getL4FontStyle()) == 'bolditalic') ? 'italic' : ''; 
			$bold = (strtolower($template->getL4FontStyle()) == 'bold' || strtolower($template->getL4FontStyle()) == 'bolditalic') ? 'bold' : '';
			$sep    = is_null($template->getL4Separator())? '' : ' ';
			$mess   = $mess? $mess : $template->getLine4Col1() .' '.$sep.' '.$template->getLine4Col2();
		   	return '<span id="SPANline4_'.$cnt.'" style="
					font-size: '.$template->getL4FontSize()* 1.3333  .'px; 
					font-family: '.$template->getL4Font() .';
					font-style: '.$italic .';
					font-weight:'.$bold .';
					"><center>'.$mess .'</center></span>';
			
   			break;
   	}
//   	var_dump($template);
//   	exit();
//   	return $mess;
   }
   
    public static function GetTemplateListByCompany($co)
    {
    	$co = LabelCompanyPeer::GetByCompany($co);
    	$c = new Criteria();
    	$c->add(self::LABEL_COMPANY_ID, $co->getId());
    	$rs = self::doSelect($c);
    	$list = array();
    	//$list[] = ' - CHOOSE TEMPLATE - '; //cannot use this on add labeling template
    	foreach($rs as $r)
    	{
    		$list[$r->getId()] = LabelDescriptionPeer::GetDescriptionId($r->getLabelDescriptionId());
    		//$list[$r->getId()] = LabelField1Peer::GetListByCompanyId($co);
    	}
    	return $list;
    }   
    
    public static function GetTemplateListByField1($co)
    {
    	$c = new Criteria();
    	$c->addJoin(self::LABEL_COMPANY_ID, LabelCompanyPeer::ID);
    	$c->add(LabelCompanyPeer::COMPANY, $co);
    	$c->addGroupByColumn(self::LABEL_FIELD1_ID);
    	$c->add(self::LABEL_FIELD1_ID, '', Criteria::NOT_EQUAL);
    	$rs = self::doSelect($c);
    	$list = array();
    	foreach($rs as $r)
    	{
    		$list[$r->getId()] = LabelField1Peer::GetNameById($r->getLabelField1Id());
    		//$list[$r->getId()] = LabelField1Peer::GetListByCompanyId($co);
    	}
    	return $list;
    }   

    public static function GetTemplateListByField2($f1ID)
    {
    	$f1 = self::retrieveByPK($f1ID);
    	$c = new Criteria();
    	$c->add(self::LABEL_FIELD1_ID, $f1->getLabelField1Id());
    	$c->addGroupByColumn(self::LABEL_FIELD2_ID);
    	
//    	$c = new Criteria();
//    	$c->addJoin(self::LABEL_COMPANY_ID, LabelCompanyPeer::ID);
//    	$c->add(LabelCompanyPeer::COMPANY, $co);
//    	$c->add(self::LABEL_FIELD2_ID, '', Criteria::NOT_EQUAL);
//    	//$c->addGroupByColumn(self::LABEL_FIELD2_ID);
//    	$c->addAscendingOrderByColumn(self::LABEL_FIELD1_ID);    	
    	$rs = self::doSelect($c);
    	$list = array();
    	foreach($rs as $r)
    	{
    		$list[$r->getId()] = LabelField2Peer::GetNameById($r->getLabelField2Id());
    		//$list[$r->getId()] = LabelField1Peer::GetListByCompanyId($co);
    	}
    	return $list;
    }    

    public static function GetTemplateListByField3($f1ID, $f2ID)
    {
    	$f1 = self::retrieveByPK($f1ID);
    	$f2 = self::retrieveByPK($f2ID);
    	$c = new Criteria();
    	$c->add(self::LABEL_FIELD1_ID, $f1->getLabelField1Id());
    	$c->add(self::LABEL_FIELD2_ID, $f2->getLabelField2Id());
//    	$c->addGroupByColumn(self::LABEL_FIELD2_ID);
//    	$c = new Criteria();
//    	$c->addJoin(self::LABEL_COMPANY_ID, LabelCompanyPeer::ID);
//    	$c->add(LabelCompanyPeer::COMPANY, $co);
//    	$c->add(self::LABEL_FIELD2_ID, '', Criteria::NOT_EQUAL);
//    	//$c->addGroupByColumn(self::LABEL_FIELD2_ID);
//    	$c->addAscendingOrderByColumn(self::LABEL_FIELD1_ID);    	
    	$rs = self::doSelect($c);
    	$list = array();
    	foreach($rs as $r)
    	{
    		$list[$r->getId()] = LabelField3Peer::GetNameById($r->getLabelField3Id());
    	}
    	return $list;
    	    }    
    public static function GetTemplateListByField($id, $fld)
    {
    	$tempData = self::retrieveByPK($id);
    	$list = array();
    	switch($fld){
    		case '1':
    			$field = new Criteria();
    			$field->add(self::LABEL_FIELD1_ID, $tempData->getLabelField1Id());
    			$rs = self::doSelect($field);
    			foreach($rs as $r)
    			{
    				//$list[$r->getId()] = LabelField1Peer::GetNameById($r->getLabelField1Id());
    				$list[$r->getId()] =  LabelField1Peer::GetNameById($r->getLabelField1Id()) .' || '. LabelField2Peer::GetNameById($r->getLabelField2Id()) .' || '. LabelField3Peer::GetNameById($r->getLabelField3Id());
    			}
    			return $list;
    			break;
    		case '2':
    			$field = new Criteria();
    			$field->add(self::LABEL_FIELD1_ID, $tempData->getLabelField1Id());
    			$field->add(self::LABEL_FIELD2_ID, $tempData->getLabelField2Id());
    			$rs = self::doSelect($field);
    			foreach($rs as $r)
    			{
    				$list[$r->getId()] =  LabelField1Peer::GetNameById($r->getLabelField1Id()) .' || '. LabelField2Peer::GetNameById($r->getLabelField2Id());
    				//$list[$r->getId()] =  LabelField1Peer::GetNameById($r->getLabelField1Id()) .' || '. LabelField2Peer::GetNameById($r->getLabelField2Id()) .' || '. LabelField3Peer::GetNameById($r->getLabelField3Id());
    			}
    			return $list;
    			break;    			
        	case '3':
    			$field = new Criteria();
    			$field->add(self::LABEL_FIELD1_ID, $tempData->getLabelField1Id());
    			$field->add(self::LABEL_FIELD2_ID, $tempData->getLabelField2Id());
    			$field->add(self::LABEL_FIELD3_ID, $tempData->getLabelField3Id());
    			$rs = self::doSelect($field);
    			foreach($rs as $r)
    			{
    				$list[$r->getId()] =  LabelField1Peer::GetNameById($r->getLabelField1Id()) .' || '. LabelField2Peer::GetNameById($r->getLabelField2Id()) .' || '. LabelField3Peer::GetNameById($r->getLabelField3Id());
    			}
    			return $list;
    			break;    			
    	}    	
    	
    }    
    
    public static function FormatInstantPreview($getLineCol1, $getLSeparator, $getLineCol2, $font, $fontsize, $fontstyle){
    	$mess = '';
    	$getLSeparator = $getLSeparator == '1'? '' : $getLSeparator;
    	$getLSeparator = $getLSeparator == '2'? '&nbsp;' : $getLSeparator;
    	$getLSeparator = $getLSeparator == '3'? '&nbsp;&nbsp;' : $getLSeparator; 
		$mess = $getLineCol1 .' '.$getLSeparator.' '. $getLineCol2;
    	$font = $font? $font : 'arial';
		$fontsize = $fontsize? $fontsize * 1.3333 : 18;
		switch($fontstyle)
		{
			case 'BOLD':
				return '<tr><td class="alignCenter"><span style="font-family:'.$font.'; font-size:'.$fontsize.'px"><b>'.$mess.'</b></span></td></tr>';
			case 'ITALIC':
				return '<tr><td class="alignCenter"><span style="font-family:'.$font.'; font-size:'.$fontsize.'px"><em>'.$mess.'</em></span></td></tr>';
			case 'BOLDITALIC':
				return '<tr><td class="alignCenter"><span style="font-family:'.$font.'; font-size:'.$fontsize.'px"><b><em>'.$mess.'</em></b></span></td></tr>';
			default:
				return '<tr><td class="alignCenter"><span style="font-family:'.$font.'; font-size:'.$fontsize.'px">'.$mess.'</span></td></tr>';
				//return '<tr><td>'.$mess.'</td></tr>';
		}
		    	
    }
    
    public static function GetSeparator($sep)
    {
    	switch($sep)
    	{
    		case '1':
    			return '&nbsp;';
    		case 'S':
    			return '&nbsp;';
    		case '2':
    			return '&nbsp;&nbsp;';
    		case '3':
    			return '&nbsp;&nbsp;&nbsp;';
    		default:
    			return '&nbsp;'.$sep.'&nbsp;';	
    	}
    }
    
    public static function GetCompanyList()
    {
    	$c = new Criteria();
    	$c->addJoin(self::LABEL_COMPANY_ID, LabelCompanyPeer::ID, Criteria::LEFT_JOIN);
    	$c->addGroupByColumn(self::LABEL_COMPANY_ID);
    	$c->addAscendingOrderByColumn(LabelCompanyPeer::COMPANY);
    	$rs = self::doSelect($c);
    	$list = array(''=>' - SELECT COMPANY -');
	   	foreach($rs as $r) {
    		$co = LabelCompanyPeer::GetCompanyNameById( $r->getLabelCompanyId() ); 
    		$list[$co] = $co ;
    		
    	}
    	return $list;
    	
    }
   
    public static function GetField1ListByCompany($co)
    {
    	$c = new Criteria();
    	$c->addJoin(LabelCompanyPeer::ID, self::LABEL_COMPANY_ID);
    	$c->addJoin(LabelField1Peer::ID, self::LABEL_FIELD1_ID);
    	$c->add(LabelCompanyPeer::COMPANY, $co);
    	$c->addAscendingOrderByColumn(LabelField1Peer::NAME);
    	$rs = self::doSelect($c);
    	$list = array();
    	$def = array();
    	foreach($rs as $r) {
    		$list[$r->getLabelField1Id()] = '- '. LabelField1Peer::GetNameById($r->getLabelField1Id()) . ' - ';
    		$def[] = $r->getLabelField1Id();
    	}
    	$list[] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ';
    	return array('list'=>$list, 'default'=>$def);
    }

    public static function GetField2ListByCompany($co)
    {
    	$c = new Criteria();
    	$c->addJoin(LabelCompanyPeer::ID, self::LABEL_COMPANY_ID);
    	$c->addJoin(LabelField2Peer::ID, self::LABEL_FIELD2_ID);
    	$c->add(LabelCompanyPeer::COMPANY, $co);
    	$c->addAscendingOrderByColumn(LabelField2Peer::NAME);
    	$rs = self::doSelect($c);
    	$list = array();
    	$def = array();
    	foreach($rs as $r) {
    		$list[$r->getLabelField2Id()] = '- '. LabelField2Peer::GetNameById($r->getLabelField2Id()) . ' - ';
    		$def[] = $r->getLabelField2Id();
    	}
    	$list[] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ';
    	return array('list'=>$list, 'default'=>$def);
    }
    
    public static function GetField3ListByCompany($co)
    {
    	$c = new Criteria();
    	$c->addJoin(LabelCompanyPeer::ID, self::LABEL_COMPANY_ID);
    	$c->addJoin(LabelField3Peer::ID, self::LABEL_FIELD3_ID);
    	$c->add(LabelCompanyPeer::COMPANY, $co);
    	$c->addAscendingOrderByColumn(LabelField3Peer::NAME);
    	$rs = self::doSelect($c);
    	$list = array();
    	$def = array();
    	foreach($rs as $r) {
    		$list[$r->getLabelField3Id()] = '- '. LabelField3Peer::GetNameById($r->getLabelField3Id()) . ' - ';
    		$def[] = $r->getLabelField3Id();
    	}
    	$list[] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ';
    	return array('list'=>$list, 'default'=>$def);
    }

    public static function GetListByCompanyByFields($cID, $f1, $f2, $f3)
    {
    	$c = new Criteria();
    	$c->add(self::LABEL_COMPANY_ID, $cID);
   		$c1 = $c->getNewCriterion(self::LABEL_FIELD1_ID, $f1, Criteria::IN);
   		$c2 = $c->getNewCriterion(self::LABEL_FIELD2_ID, $f2, Criteria::IN);
   		$c3 = $c->getNewCriterion(self::LABEL_FIELD3_ID, $f3, Criteria::IN);
    	$c1->addOr($c2);
    	$c1->addOr($c3);
    	$c->add($c1);
    	$rs = self::doSelect($c);
    	return $rs;
    	
    }
}

