<?php use_helper('Validation', 'Javascript') ?>
<?php
    $customerList = QrDepartmentPeer::GetCustomerList();
    $garmentList  = QrTypePeer::GetGarmentList();
    $stat = array(
         'DETECTED'=>'DETECTED'
        ,'NOT DETECTED'=>'NOT DETECTED'
        ,'NA'=>'NA'
        
    );
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('micronclean/nvrFtirAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>NVR FTIR DATA SHEET</H2></span></td></tr>
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
				<td class="FORMcell-left FORMlabel" nowrap>LEFT SLEEVE BEFORE(g)</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('left_sleeve_before', $sf_params->get('left_sleeve_before'), 'size="25"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>LEFT SLEEVE AFTER(g)</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('left_sleeve_after', $sf_params->get('left_sleeve_after'), 'size="25"')
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>LEFT SLEEVE(ug)</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('left_sleeve', $sf_params->get('left_sleeve'), 'size="15" readonly="readonly"');
                ?>
                <span class="negative">* auto</span>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>LEFT SLEEVE SPEC(ug)</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('left_sleeve_spec', $sf_params->get('left_sleeve_spec'), 'size="25"')
				?>
				</td>
			</tr>
			
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>RIGHT SLEEVE BEFORE(g)</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('right_sleeve_before', $sf_params->get('right_sleeve_before'), 'size="25"');
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>RIGHT SLEEVE AFTER(g)</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('right_sleeve_after', $sf_params->get('right_sleeve_after'), 'size="25"');
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>RIGHT SLEEVE(ug)</td>
				<td class="FORMcell-right" nowrap><?php
				echo input_tag('right_sleeve', $sf_params->get('right_sleeve'), 'size="15" readonly="readonly"');
                ?>
                <span class="negative">* auto</span>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>RIGHT SLEEVE SPEC(ug)</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo input_tag('right_sleeve_spec', $sf_params->get('right_sleeve_spec'), 'size="25"')
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>SILICONE</td>
				<td class="FORMcell-right" nowrap><?php
		        echo select_tag('silicone',
				options_for_select($stat,
				$sf_params->get('silicone') )   
				) ;
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>SILICONE SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
		        echo select_tag('silicone_spec',
				options_for_select($stat,
				$sf_params->get('silicone_spec') )   
				) ;
				
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>AMIDE</td>
				<td class="FORMcell-right" nowrap><?php
		        echo select_tag('amide',
				options_for_select($stat,
				$sf_params->get('amide') )   
				) ;
				
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>AMIDE SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
		        echo select_tag('amide_spec',
				options_for_select($stat,
				$sf_params->get('amide_spec') )   
				) ;
				?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>DOP</td>
				<td class="FORMcell-right" nowrap><?php
		        echo select_tag('dop',
				options_for_select($stat,
				$sf_params->get('dop') )   
				) ;
				
                ?>
                </td>
				<td class="FORMcell-left FORMlabel" nowrap>DOP SPEC</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
		        echo select_tag('dop_spec',
				options_for_select($stat,
				$sf_params->get('dop_spec') )   
				) ;
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
            echo 'Record Sheet:</b> #014';
            echo '<br>';
            echo '<b>ISO Refs:</b> '   
            .' '. link_to('WI259rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI259rev001_20040601_IC_NVR_FTIR_garments.pdf');
                    ?>
	</div></td></tr>	
	
</table>
</div>
</form>



<?php

echo javascript_tag("
function getDateAndTime(){
	var date = new Date();
	var monthArray = new Array('Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct',
									'Nov', 'Dec');
																		
	return date.getDate() + ' ' + monthArray[date.getMonth()] + ' ' + date.getFullYear() + ' ' + date.getHours() + ':' + date.getMinutes();
}

function onLoad(date){
	if(date == ''){
		if(document.getElementById('addForm') != null){
			addForm.dateTxt.value = getDateAndTime();
		}
	}else{
		addForm.dateTxt.value = date;
	}
}

function validatePerText(text){
	text.value = getContentTrimmed(text.value);
	
	if(isNaN(text.value)){
		alert('Please enter a number.');
		text.value = 0;
	}
	if(text.value == ''){
		alert('Please enter a number.');
		text.value = 0;
	}
}

function validatePerSpecText(text){
	text.value = getContentTrimmed(text.value);
	
	if(text.value == ''){
		alert('Please enter a value.');
		text.value = 'Not Detected';
	}
}

function validatePerNVRSpecText(text){
	text.value = getContentTrimmed(text.value);
	
	if(text.value == ''){
		alert('Please enter a value.');
		text.value = 'TBD';
	}

}

function calculateRightSleeve(text){
	var diff = 0;
	var result = 0;
	if(text.value == ''){
		alert('Please enter a value');
		text.value = 0;
	}else if(isNaN(text.value)){
		alert('Please enter a number');
		text.value = 0;
	}else{
		diff = addForm.rightSleeveAfterTxt.value - addForm.rightSleeveBeforeTxt.value;
		result = Math.round(diff * 1000000) / 1000000;
		//alert(diff);
		addForm.rightSleeveTxt.value = result * 1000000;
	}
}

function calculateLeftSleeve(text){
	var diff = 0;
	var result = 0;
	if(text.value == ''){
		alert('Please enter a value');
		text.value = 0;
	}else if(isNaN(text.value)){
		alert('Please enter a number');
		text.value = 0;
	}else{
		diff = addForm.leftSleeveAfterTxt.value - addForm.leftSleeveBeforeTxt.value;
		result = Math.round(diff * 1000000) / 1000000;
		//alert(diff);
		addForm.leftSleeveTxt.value = result * 1000000;
	}
}

function onWeekChanged(ev, args) {
    
    obj = YAHOO.util.Event.getTarget(ev);
    team = trim(obj.options[obj.selectedIndex].value);
    //alert(team);
    if (team == 'Acro Solution'){
       showHideElement('acroTeamList');
    }
//    if (team == 'Micronclean'){
//       showHideElement('mcsTeamList');
//    }
    
}

function onChangeLeftSleeve(ev, args) {
    obj = YAHOO.util.Event.getTarget(ev);
    befsleeve = \$F('left_sleeve_before');
    aftsleeve = \$F('left_sleeve_after');
	
    diff = aftsleeve - befsleeve;
	result = Math.round(diff * 1000000) / 1000000;
    
	document.getElementById('left_sleeve').value = result * 1000000;
    //alert(aftsleeve);
}

function onChangeRightSleeve(ev, args) {
    //obj = YAHOO.util.Event.getTarget(ev);
    befsleeve = \$F('right_sleeve_before');
    aftsleeve = \$F('right_sleeve_after');
    diff = aftsleeve - befsleeve;
	result = Math.round(diff * 1000000) / 1000000;
	document.getElementById('right_sleeve').value = result * 1000000;
}

YAHOO.util.Event.addListener('left_sleeve_before', 'change', onChangeLeftSleeve);
YAHOO.util.Event.addListener('left_sleeve_after', 'change', onChangeLeftSleeve);
YAHOO.util.Event.addListener('right_sleeve_before', 'change', onChangeRightSleeve);
YAHOO.util.Event.addListener('right_sleeve_after', 'change', onChangeRightSleeve);
");
