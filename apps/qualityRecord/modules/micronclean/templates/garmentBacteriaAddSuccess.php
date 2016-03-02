<?php use_helper('Validation', 'Javascript') ?>
<?php
    $customerList = QrDepartmentPeer::GetCustomerList();
    $garmentList  = QrTypePeer::GetGarmentList();
    $compute      = QrOhmPeer::GetOhms();
    $stat = array(
         'DETECTED'=>'DETECTED'
        ,'NOT DETECTED'=>'NOT DETECTED'
        ,'NA'=>'NA'
        
    );
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('micronclean/garmentBacteriaAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>GARMENT BACTERIA COUNT DATA SHEET</H2></span></td></tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('date_time');
				echo HTMLForm::DrawDateInput('date_time', $sf_params->get('date_time', date('Y-m-d')), 'date_time', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="10%" class="FORMcell-right" nowrap><input type="submit" name="save"
					value=" Save Info " class="submit-button"></td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
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
                echo HTMLForm::Error('customer');
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
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('garment_code');
		        echo select_tag('garment_code',
				options_for_select($garmentList,
				$sf_params->get('garment_code') )   
				) ;
				?></td>
				<td class="FORMcell-left FORMlabel" nowrap>TESTER</td>
				<td class="FORMcell-right FORMlabel" nowrap><span class="positive"><?php
				echo $sf_params->get('tester');
				echo input_tag('tester', $sf_params->get('tester'), 'size="25" type="hidden"');				
				?>
				</span>
				</td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>WASHER BATCH NO</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('washer');
                echo input_tag('washer', $sf_params->get('washer'), 'size="25"')				?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>DRYER BATCH NO</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo HTMLForm::Error('dryer');
				echo input_tag('dryer', $sf_params->get('dryer'), 'size="25"')
				?>
				</td>
			</tr>		
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>BACTERIA COUNT</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('bacteria_count');
                echo input_tag('bacteria_count', $sf_params->get('bacteria_count'), 'size="20"')				?>
                </td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>TIMES WASHED</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('no_of_times_wash');
				echo input_tag('no_of_times_wash', $sf_params->get('no_of_times_wash'), 'size="15"');
                ?>
                </td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>REMARKS</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('remarks', $sf_params->get('remarks'), 'size=75x6')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap>
				<td class="alignCenter FORMcell-right" nowrap></td>
				<td class="FORMcell-right" nowrap><input type="submit" name="save"
					value=" Save Info " class="submit-button"></td>
				<td colspan="3" class="FORMcell-right" nowrap>
			</td>
			</tr>			
		</table>
	</tr>
		<tr><td>&nbsp;</td></tr>
	<tr><td>
	<div class="grid-toolbar-right alignRight" >
	Record Sheet: #063
<?php 
//    echo '<b>'; 
//    echo 'Record Sheet:</b> #008';
//    echo '<br>';
//    echo '<b>ISO Refs:</b>'   
//    .' '. link_to('WI020Brev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI020Brev001_20010420_HK_specification_of_certain_customers.pdf')
//    .' ,  '. link_to('WI020rev003', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI020rev003_20050721_helmke_drum_test.pdf')
//    .' ,  '. link_to('WI105rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI105rev001_19990210_helmke_drum_training.pdf')
//    .' ,  '. link_to('WI250rev005', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI250rev005_20080718_statistical_process_calculation.pdf');
//    
//    
?>
</div></td></tr>
	
</table>
</div>
</form>



