<?php use_helper('Validation', 'Javascript') ?>
<?php
    $customerList = QrDepartmentPeer::GetCustomerList();
    $garmentList  = QrTypePeer::GetGarmentList();
    $sgarment     = array(
        '10'=>'Seagate class 10',
    	'100'=>'Seagate class 100'
    );
    $compute      = QrOhmPeer::GetOhms();
    $stat = array(
         'DETECTED'=>'DETECTED'
        ,'NOT DETECTED'=>'NOT DETECTED'
        ,'NA'=>'NA'
        
    );
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('micronclean/spcGraph'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>HELMKE DRUM DATA SHEET</H2></span></td></tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td colspan="3" width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('date_from', $sf_params->get('date_from', date('Y-m-d')), 'date_from', XIDX::next(), ' size="12" ');
				echo '&nbsp;&nbsp;to&nbsp;&nbsp;'; 
				echo HTMLForm::DrawDateInput('date_to', $sf_params->get('date_to', date('Y-m-d')), 'date_to', XIDX::next(), ' size="12" '); 
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>CUSTOMER</td>
				<td colspan="3" class="FORMcell-right" nowrap>
				<?php
                $qParams = "'customer=' + \$F('customer')";

                $ajaxOption = array(
                    'url'      => 'micronclean/ajaxDeptList?id='.$sf_params->get('id'),
                    'with'     => $qParams,
                    'update'   => 'DIVdeptList',
                    'script'   => true,
                    'loading'  => 'stop_remote_pager();',
                    'before'   => 'showLoader();',
                    'complete' => 'hideLoader();formatFormStyle();',
                    'type'     => 'synchronous',
                );				
                
		        echo select_tag('customer',
				options_for_select($customerList,
				$sf_params->get('customer') ), array('onchange'=>remote_function($ajaxOption) . ';clearField(this.form);return false; ')  
				) ;
				?>
                
                </td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>DEPARTMENT</td>
				<td colspan="3" class="FORMcell-right" nowrap>
				<div id="DIVdeptList">
					<?php
					    if ($sf_params->get('customer')){
					        include_partial('deptlist', array('cust'=>$sf_params->get('customer'), 'dept'=>$sf_params->get('department')));   
					    }else{
					        echo '<span class="negative">Choose Customer First</span>';
					    }
					?>
				</div>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>GARMENT TYPE</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
		        echo select_tag('garment_code',
				options_for_select($sgarment,
				$sf_params->get('garment_code') )   
				) ;
				?></td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap>
				<td class="alignCenter FORMcell-right" nowrap></td>
				<td class="FORMcell-right" nowrap><input type="submit" name="save"
					value=" Show Graph " class="submit-button"></td>
				<td colspan="3" class="FORMcell-right" nowrap>
			</td>
			</tr>			
		</table>
	</tr>
</table>
</div>
</form>


<?php
//    $lab = array('label 1', 'label 2', 'label 3');
//    $plot = array();
//    $data = array(1.5, 2.5, 2);
//    include_partial('amline', 
//            array(
//            'Xs'            => $lab,
//            'plots'    => $plot,
//            'statsData' => $data, 
//            'chartTitle' => 'Test'));

if (isset($showgraph))
	{
	$sdt   = $sf_params->get('date_from');
	$edt   = $sf_params->get('date_to');
	$cust  = $sf_params->get('customer');
	$dept  = $sf_params->get('department');
	$gcode  = $sf_params->get('garment_code');

    $part = ParticleDataPeer::GetDataByDate($sdt, $edt, $cust, $dept, $gcode);
    $botLabel  = array();
    $leftLabel = array();
    $data      = array();
    $data1      = array();
    foreach ($part as $rec){
        $botLabel[]  = DateUtils::DUFormat('M-d-y', $rec->getDateTime());
        $leftLabel[] = $rec->getType(); 
        $data[] = $rec->getPoint5(); 
        $data1[] = $rec->getPoint3();
    }
    $title = $cust . ' - ' . ( $dept? $dept : 'All Department' ) ; 
    include_partial('amline', 
            array(
            'Xs'        => $botLabel,
            'plots'     => $leftLabel, //not important can be defined as array()
            'statsData' => $data, 
            'left_title' => 'PARTICLE',
            'chartTitle' => $title));
//    var_dump($part);
//    include_partial('amline_multiple', 
//        array(
//        'Xs'        => $botLabel,
//        'plots'     => array('garment_3', 'garment_4'),
//        'statsData' => array('particle'=>array('Garment_1'=>$data, 'Garment_2'=>$data1)),
//        'chartTitle' => $cust));
//	

	
	}	
	
            
            
    