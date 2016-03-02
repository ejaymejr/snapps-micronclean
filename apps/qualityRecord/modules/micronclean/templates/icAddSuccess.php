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
	action="<?php echo url_for('micronclean/icAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>IC DATA SHEET</H2></span></td></tr>
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
					    
					    if ($sf_params->get('department')){
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
				<td class="FORMcell-left FORMlabel" nowrap>SAMPLE</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('sample');
                echo input_tag('sample', $sf_params->get('sample'), 'size="25"')				?>
                </td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>Na</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('na', $sf_params->get('na'), 'size="25"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>Na SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('na_spec', $sf_params->get('na_spec'), 'size="25"')
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>NH4</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('nh', $sf_params->get('nh'), 'size="25"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>NH4 SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('nh_spec', $sf_params->get('nh_spec'), 'size="25"')
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>K</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('k', $sf_params->get('k'), 'size="25"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>K SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('k_spec', $sf_params->get('k_spec'), 'size="25"')
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>Ca</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('ca', $sf_params->get('ca'), 'size="25"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>Ca SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('ca_spec', $sf_params->get('ca_spec'), 'size="25"')
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>Mg</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('mg', $sf_params->get('mg'), 'size="25"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>Mg SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('mg_spec', $sf_params->get('mg_spec'), 'size="25"')
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>F</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('f', $sf_params->get('f'), 'size="25"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>F SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('f_spec', $sf_params->get('f_spec'), 'size="25"')
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>Cl</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('cl', $sf_params->get('cl'), 'size="25"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>Cl SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('cl_spec', $sf_params->get('cl_spec'), 'size="25"')
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>NO3</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('no', $sf_params->get('no'), 'size="25"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>NO3 SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('no_spec', $sf_params->get('no_spec'), 'size="25"')
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>PO4</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('po', $sf_params->get('po'), 'size="25"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>PO4 SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('po_spec', $sf_params->get('po_spec'), 'size="25"')
				?>
				</td>
			</tr>			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>SO4</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('so', $sf_params->get('so'), 'size="25"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>SO4 SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('so_spec', $sf_params->get('so_spec'), 'size="25"')
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
        <?php 
            echo '<b>'; 
            echo 'Record Sheet:</b> #015';
            echo '<br>';
            echo '<b>ISO Refs:</b> '   
            .' '. link_to('WI259rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI259rev001_20040601_IC_NVR_FTIR_garments.pdf');
                    ?>
	</div></td></tr>	
	
</table>
</div>
</form>
