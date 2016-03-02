<?php
class HrEmployeeNoBrowser
{
    //$act    = module/action
    //$nRows  = no of rows to display
    //$scrx   = coordinates to display the browser
    //$scry   = coordinates to display the browser  
	function __construct($act=null, $nRows=null)
	{
	    $this->rows = ($nRows? $nRows : 20) ;
	    $this->action = ($act? $act : '');
	    $this->BrowseClass = 'empnobrowser';
	    $this->myPager = array();
	}

	function __destruct()
	{
	}

    public function GetEmployeeNo($page=null, $scrx=null, $scry=null)
    {
        $this->page = ($page? $page : 1);
        $text = '';
        $text = $text . input_tag('employee_no', '', 'size="25" id="empno"');
        $text = $text . self::GetBrowseImage($scrx, $scry);
        $text = $text . self::DivJavascript();
        return $text;
    }
    
    public function GetBrowseImage()
    {
        return '&nbsp;&nbsp;'. image_tag('conveyor/browse.jpg', "onclick=showHideElement('".$this->BrowseClass."'); style='cursor:pointer'; ");
    }

    public function DivJavascript($x=null, $y=null)
    {
        $mx = '500px;';
        $my = '200px;';  
        //echo 'igit'.'-'.javascript_tag('window.event.clientY');
        $text = "
        	<style type='text/css'>
        	.DIVEmpBrowse {
            	position:absolute;
            	height: auto;
            	width: auto;
    			left:".$mx."
    			top: ".$my."            	
            	border-top-style: normal;
            	border-right-style: solid;
            	border-bottom-style: solid;
            	border-right-color: #CCCCCC;
            	border-bottom-color: #CCCCCC;
            	border-left-color: #0000FF;
            }
            </style>
        ";
            	//border-top-color: #999999;
        $text = $text .
        		"<div id='".$this->BrowseClass."' class='DIVEmpBrowse conveyorbg' style='display:none'>
                	<table border='0' cellspace='4' cellpadding='4' width='100%' bordercolor='EEE' bgcolor='#EEE'>
                	<tr height='25' bgcolor='#00ccff'>
                		<td colspan='6' class='gridHeaderFont alignCenter'>Employee Master List</td>
                	</tr>
                	<tr height='21'>
                	 	<td width='20'  class='gridButton'>&nbsp</td>
                		<td width='20'  class='gridButton'>Seq</td>
                		<td width='40%' class='gridButton'>Employee_no</td>
                		<td width='40%' class='gridButton'>Name</td>
                		<td width='10%' class='gridButton'>Company</td>
                		<td width='10%' class='gridButton'>&nbsp;</td>
                	</tr>
                	
                	";
        self::GetEmployeeList();
        echo "
        <div id='empRowListing'>
        ";
        //------------------------------------ show rows
        $pg = sfContext::getInstance()->getRequest()->getParameter('page', 1);
        $text = $text . self::showRows($pg);
        echo "
        </div>
        ";
        
        $text = $text . "
        		    <tr>
                		<td colspan='3'>Total: ".sizeof($this->myPager['id']). ' - ' . input_tag('page', $pg, 'size="5"'). "</td>
                		<td colspan='3'>
                			".
                            self::PagerNavigate($this->myPager)
                            //self::NextPrev($this->pager, $this->action, array('query_string' => $_SERVER['QUERY_STRING']))
                            //$remoteOptions = array('url'=>$this->action);
                            //pager_navigation_remote($this->pager, $remoteOptions)
                            ."
                		</td>
                	</tr>
                	</table>
                </div>
                ";
        $text = $text .
            javascript_tag("
                function ShowEmployeeName(id) {
                	ename = 'name_' + id ;
                	eno   = 'empno_' + id ;
                    document.getElementById('empno').value=document.getElementById(ename).innerHTML;
                    document.getElementById('empno').name= document.getElementById(eno).innerHTML;
                    showHideElement('empnobrowser');
                }");
                            
//        $text = $text .
//            javascript_tag("
//                function onClicked(ev, args) {
//                    obj = YAHOO.util.Event.getTarget(ev);
//                    alert(\$F(employee_no));
//                }
//                
//                YAHOO.util.Event.addListener('employee_no', 'click', onClicked);
//                "
//            ); 
        
        return $text;
    }

    public function showRows($page)
    {
        $seq = 1;
        
        $lLimit = 0;
        $uLimit = 0;
        
        $lLimit = ($page - 1) *  $this->rows  ;
        $uLimit = (($page - 1) *  $this->rows ) + $this->rows;
        
//        var_dump($page);
//        echo '<br>';
//        var_dump($lLimit);
//        echo '<br>';
//        var_dump($uLimit);
//        
        $pos = 1;
        $text = '';
        
        foreach($this->myPager['empNo'] as $ke=>$rec)
        {
            if ($pos >= $lLimit and $pos <= $uLimit)
            { 
                $rowClass = (($seq % 2) == 0) ? "dataGridRowOdd" : "dataGridRowEven";
                $rowID = 'sq_' . $this->myPager['id'][$pos];  
                $text = $text . "
                <tr class='".$rowClass."'
                    id='".$rowID."'
                    onMouseOver=\"rowHovered('".$rowID."');\"
                    onMouseOut=\"rowUnhovered('".$rowID."');\"
                    onMouseDown=\"ShowEmployeeName('".$rowID."')\"
                    height='21'>        
                    <td >&nbsp;&nbsp;</td>                
                	<td >".$seq++."</td>
                	<td ><div id='empno_".$rowID."'>".$this->myPager['empNo'][$pos]."</span></td>
                	<td ><div id='name_".$rowID."'>".$this->myPager['name'][$pos]."</span></td>
                	<td >&nbsp;</td>
                	<td >&nbsp;</td>
    			</tr>            	
                ";
            }
            $pos++;
        }
        return $text;
        
    }
    
    public function GetEmployeeList()
    {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(HrEmployeePeer::NAME);
        //$c->addJoin(HrEmployeePeer::HR_COMPANY_ID, HrCompanyPeer::ID);
        //$c->add(HrCompanyPeer::COMP_NAME);
        $rs = HrEmployeePeer::doSelect($c);
        $empList = array('id'=>array(), 'empNo'=>array(), 'name'=>array(), 'company'=>array());
        foreach($rs as $r)
        {
            $empList['id'][]     = $r->getId();
            $empList['empNo'][]  = $r->getEmployeeNo();
            $empList['name'][]   = $r->getName();
            //$empList['company'][]= $r->getCompName();
        }
        $this->myPager = $empList;
        return;
        //$pager = new sfPropelPager('HrEmployee', $this->rows);
        //$pager->setCriteria($c);
        //$pager->setPage($this->page);
        //$pager->init();
        //$this->pager = $pager;
    }
    

      
      public function PagerNavigate($pager)
      {
            $jsQueryString = "'action=" . $this->page + 1;
             
              $ajaxOptions =     
              array('url' => '/ajaxUpdateEmpPager', 
                    'with' => $jsQueryString,
                    'update' => 'empRowListing',
                    'script'    => true,
                    'loading'   => 'stop_remote_pager();',
                    'before'   => 'showLoader();',
                    'complete'  => 'hideLoader();formatFormStyle();',
                    'type'      => 'synchronous',
                    );
          $navigation = '';
          $navigation .= image_tag('icons/first.gif', 'align=absmiddle') . '&nbsp;' ;
          $navigation .= image_tag('icons/previous.gif', 'align=absmiddle') 
          . '&nbsp;';
          
//          foreach ($pager->getLinks() as $page)
//          {
//              $navigation .= link_to($page, $ajaxOptions) . '&nbsp;&nbsp;';
//          }
          
          $navigation .= link_to_remote(image_tag('icons/next.gif', 'align=absmiddle'), $ajaxOptions)
          . '&nbsp;';
          
          $navigation .= link_to_function(image_tag('icons/last.gif', 'align=absmiddle'), "onclick=showHideElement('".$this->BrowseClass."'); style='cursor:pointer'; ") 
          . '&nbsp;';
          return $navigation;
      }

      
    public function AjaxUpdateEmpPager()
    {
        $this->setLayout(false);
        //echo self::showRows($pg);
        echo 'ehre';
        sfVIew::NONE;
    }
    
    function NextPrev($pager, $uri, $options)
    {
      $navigation = '';
     
      if ($pager->haveToPaginate())
      {  
        $uri .= (preg_match('/\?/', $uri) ? '&' : '?').'page=';
     
        // First and previous page
        if ($pager->getPage() != 1)
        {
          $navigation .= link_to(image_tag('icons/first.gif', 'align=absmiddle'), $uri.'1',$options).'&nbsp;';
          $navigation .= link_to(image_tag('icons/previous.gif', 'align=absmiddle'), $uri.$pager->getPreviousPage(),$options).'&nbsp;';
        } else {
          $navigation .= image_tag('icons/first-disabled.gif', 'align=absmiddle').'&nbsp;';
          $navigation .= image_tag('icons/previous-disabled.gif', 'align=absmiddle').'&nbsp;';
        }
     
        // Pages one by one
        $links = array();
        foreach ($pager->getLinks() as $page)
        {
          $links[] = link_to_unless($page == $pager->getPage(), $page, $uri.$page,$options);
        }
        $navigation .= join('&nbsp;&nbsp;', $links);
     
        // Next and last page
        if ($pager->getPage() != $pager->getLastPage())
        {
          $navigation .= '&nbsp;'.link_to(image_tag('icons/next.gif', 'align=absmiddle'), 
          $uri.$pager->getNextPage(),$options);
          $navigation .= '&nbsp;'.link_to(image_tag('icons/last.gif', 'align=absmiddle'), $uri.$pager->getLastPage(),$options);
        } else {
          $navigation .= '&nbsp;'.image_tag('icons/next-disabled.gif', 'align=absmiddle');
          $navigation .= '&nbsp;'.image_tag('icons/last-disabled.gif', 'align=absmiddle');
        }
     
      }
      return $navigation;
    }      
 
    
}
