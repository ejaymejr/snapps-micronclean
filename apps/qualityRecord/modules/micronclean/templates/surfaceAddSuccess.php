<?php use_helper('Validation', 'Javascript') ?>
<?php
    $customerList = QrDepartmentPeer::GetCustomerList();
    $garmentList  = QrTypePeer::GetGarmentList();
    $compute      = QrOhmPeer::GetOhms();
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('micronclean/surfaceAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>SURFACE RESISTIVITY DATA SHEET</H2></span></td></tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
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
                echo input_tag('washer', $sf_params->get('washer'), 'size="25"')				?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>DRYER BATCH NO</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('dryer', $sf_params->get('dryer'), 'size="25"')
				?>
				</td>
			</tr>			
						
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>SLEEVE TO SLEEVE (X1)</td>
				<td class="FORMcell-right" nowrap><?php
		        echo select_tag('sleeve_x1',
				options_for_select($compute,
				$sf_params->get('sleeve_x1') )   
				) ;
				echo ' OR ';
				echo input_tag('sleeve_x11', $sf_params->get('sleeve_x11'), 'size="5"');
				echo ' X 10 ^ ';
				echo input_tag('sleeve_x12', $sf_params->get('sleeve_x12'), 'size="5"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>SLEEVE TO SLEEVE (X1)</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('sleeve_x1_spec', $sf_params->get('sleeve_x1_spec'), 'size="25"')
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>SLEEVE TO SLEEVE (X2)</td>
				<td class="FORMcell-right" nowrap><?php
		        echo select_tag('sleeve_x2',
				options_for_select($compute,
				$sf_params->get('sleeve_x2') )   
				) ;
				echo ' OR ';
				echo input_tag('sleeve_x21', $sf_params->get('sleeve_x21'), 'size="5"');
				echo ' X 10 ^ ';
				echo input_tag('sleeve_x22', $sf_params->get('sleeve_x22'), 'size="5"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>SLEEVE TO SLEEVE (X2)</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('sleeve_x2_spec', $sf_params->get('sleeve_x2_spec'), 'size="25"')
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>SHOE (LEFT SIDE)</td>
				<td class="FORMcell-right" nowrap><?php
		        echo select_tag('shoe_left',
				options_for_select($compute,
				$sf_params->get('shoe_left') )   
				) ;
				echo ' OR ';
				echo input_tag('shoe_left1', $sf_params->get('shoe_left1'), 'size="5"');
				echo ' X 10 ^ ';
				echo input_tag('shoe_left2', $sf_params->get('shoe_left2'), 'size="5"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>SHOE (LEFT SIDE) SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('shoe_left_spec', $sf_params->get('shoe_left_spec'), 'size="25"')
				?>
				</td>
			</tr>									
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>SHOE (RIGHT SIDE)</td>
				<td class="FORMcell-right" nowrap><?php
		        echo select_tag('shoe_right',
				options_for_select($compute,
				$sf_params->get('shoe_right') )   
				) ;
				echo ' OR ';
				echo input_tag('shoe_right1', $sf_params->get('shoe_right1'), 'size="5"');
				echo ' X 10 ^ ';
				echo input_tag('shoe_right2', $sf_params->get('shoe_right2'), 'size="5"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>SHOE (RIGHT SIDE) SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('shoe_right_spec', $sf_params->get('shoe_right_spec'), 'size="25"')
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
            echo 'Record Sheet:</b> #140';
            echo '<br>';
            echo '<b>ISO Refs:</b>'   
            .' '. link_to('WI043rev002', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI043rev002_20020205_esd_test_for_garments.pdf');
            
        ?>
	</div></td></tr>	
</table>
</div>
</form>
