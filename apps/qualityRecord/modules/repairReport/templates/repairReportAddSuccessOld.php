<?php use_helper('Validation', 'Javascript') ?>

<?php
    //$customerList = CustomerAttrPeer::GetCustomerListName();
    $customerList = HrLib::GetMercuryCustomerList();
    $deptList = HrLib::GetMercuryDepartmentList();
    //$garmentList  = sfConfig::get('garment_type');
    $garmentList  = array(''=>' -SELECT GARMENT-',
    				'JUMPSUIT'=>'JUMPSUIT',
                    'BOOTIES'=>'BOOTIES',
                    'HOOD'=>'HOOD',
                    'SAFETY BOOTIES'=>'SAFETY BOOTIES',
    );
    $repairTypes  = RepairReportTypePeer::GetRepairListName();
    $unitList = array(''=>' -UNIT- ', 'PC(S)'=>'PC(S)', 'PAIR'=>'PAIR');
    $initialsList = array(''=>' - INITIALS - ', 'TERENCE'=>'TERENCE','SOOYEN'=>'SOOYEN', 'SINYIN'=>'SINYIN', 'OTHERS'=>'OTHERS');
?>
<OBJECT ID="serialControl"
CLASSID="CLSID:02F7A51C-11BC-4185-9BB8-DFCFA6E3162D"
CODEBASE="serialocx/SerialProj.CAB#version=1,0,0,0" style="height = 0; width: 0">
</OBJECT>
<script language="javascript" FOR="serialControl" EVENT="onComm">
	IDFORMadd.garmentCodeTxt.value = serialControl.chipContent;
</script>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('repairReport/repairReportAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<table width="100%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
		<tr>
			<td width="30%">
				<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
					<tr>
						<td width="5%" class="FORMcell-right" nowrap></td>
						<td width="100px" class="FORMcell-left FORMlabel" nowrap>DATE OF REPAIR</td>
						<td width="100" class="FORMcell-right" nowrap><?php
						echo HTMLForm::DrawDateInput('repair_date', $sf_params->get('repair_date', date('Y-m-d')), 'repair_date', XIDX::next(), ' size="12" '); ?>
						</td>
					</tr>
					<tr>
						<td class="FORMcell-right" nowrap></td>
						<td class="FORMcell-left FORMlabel" nowrap><B>CUSTOMER</B></td>
						<td class="FORMcell-right" nowrap><?php
//							$jsGarmentInformation = 
//								 "'garment_code=' + \$F('garmentCodeTxt')  +"
//								."'&customer=' + \$F('customer')  "
//				            ;
//							$ajaxGarmentInformation = array(
//									'url'		=>'repairReport/ajaxGarmentInformation',
//						            'update' 	=> 'DIVGarmentInformation',
//									'with'		=> $jsGarmentInformation,
//						            'script'    => true,
//						            'loading'   => 'stop_remote_pager();',
//						            'before'   	=> 'showLoader();',
//						            'complete'  => 'hideLoader();formatFormStyle();',
//						            'type'      => 'synchronous',			
//							); 
						echo select_tag('customer',
						options_for_select($customerList,
						$sf_params->get('customer') ) );
						?></td>
					</tr>
					<tr>
						<td class="FORMcell-right" nowrap></td>
						<td class="FORMcell-left FORMlabel" nowrap><B>GARMENT CODE</B></td>
						<td class="FORMcell-right" nowrap>        
						<?php 
							$id = $sf_params->get('id')? $sf_params->get('id') : 0 ;
				            $jsGarmentInformation = 
								 "'garment_code=' + \$F('garmentCodeTxt')  "
								."+ '&customer=' + \$F('customer')  "
								."+ '&repair_date=' + \$F('repair_date')  "
								."+ '&garment_type=' + \$F('garment_type')  "
								."+ '&department=' + \$F('department')  "
								."+ '&repair_type=' + \$F('repair_type')  "
								."+ '&quantity=' + \$F('quantity')  "
								."+ '&pcs_or_pairs=' + \$F('pcs_or_pairs')  "
								."+ '&initials=' + \$F('initials')  "
								."+ '&remarks=' + \$F('remarks')  "
								."+ '&id=' + ".$id."  "
				            ;
							$ajaxGarmentInformation = array(
									'url'		=>'repairReport/ajaxGarmentInformation',
						            'update' 	=> 'DIVGarmentInformation',
									'with'		=> $jsGarmentInformation,
						            'script'    => true,
						            'loading'   => 'stop_remote_pager();',
						            'before'   	=> 'showLoader();',
						            'complete'  => 'hideLoader();formatFormStyle();',
						            'type'      => 'synchronous',			
							); 
							if ($sf_params->get('batch_id')):
								echo $sf_params->get('garmentCodeTxt');
								echo input_tag('garmentCodeTxt', $sf_params->get('garmentCodeTxt'), 'size=25, type=hidden'); 
							else:
								echo input_tag('garmentCodeTxt', $sf_params->get('garmentCodeTxt'), 'size=25'); 
				        		//echo input_tag('garmentCodeTxt', $sf_params->get('garmentCodeTxt'),array('onclick'=> remote_function($ajaxGarmentInformation) . ';return false;', 'size'=> 25, 'class'=>"dataEntryInputElement", 'onfocus'=>"this.select()")); 
				        	endif;
				        	echo '&nbsp;&nbsp;&nbsp;';
				        	echo submit_tag("Get Garment Information",array('onclick'=> remote_function($ajaxGarmentInformation) . ';return false;') );
				        ?>
		        	</td>
					</tr>			
					<tr>
						<td class="FORMcell-right" nowrap></td>
						<td class="FORMcell-left FORMlabel" nowrap>GARMENT TYPE</td>
						<td class="FORMcell-right" nowrap><div id="DIVGarmentType">
						<?php
						echo $sf_params->get('garment_type');?></div>
						<?php
						echo input_tag('garment_type', $sf_params->get('garment_type'), 'type=hidden'); 
//						echo select_tag('garment_type',
//						options_for_select($garmentList,
//						$sf_params->get('garment_type') ) );
						?></td>
					</tr>
					<tr>
						<td class="FORMcell-right" nowrap></td>
						<td class="FORMcell-left FORMlabel" nowrap>DEPARTMENT</td>
						<td class="FORMcell-right" nowrap><?php

						echo select_tag('department',
						options_for_select($deptList,
						$sf_params->get('department') ) );
						?></td>
					</tr>
					<tr>
						<td class="FORMcell-right" nowrap></td>
						<td class="FORMcell-left FORMlabel" nowrap>REPAIR TYPE</td>
						<td class="FORMcell-right" nowrap><?php
						echo select_tag('repair_type',
						options_for_select($repairTypes,
						$sf_params->get('repair_type') ) );
						?></td>
					</tr>
					<tr>
						<td class="FORMcell-right" nowrap></td>
						<td class="FORMcell-left FORMlabel" nowrap>QUANTITY</td>
						<td class="FORMcell-right" nowrap><?php
						echo input_tag('quantity', $sf_params->get('quantity'), 'size="15"');
						echo '&nbsp;&nbsp;&nbsp;';
						echo select_tag('pcs_or_pairs',
						options_for_select($unitList,
						$sf_params->get('pcs_or_pairs') ) );
						?></td>
					</tr>
					<tr>
						<td class="FORMcell-right" nowrap></td>
						<td class="FORMcell-left FORMlabel" nowrap>INITIALS</td>
						<td class="FORMcell-right" nowrap><?php
						echo select_tag('initials',
						options_for_select($initialsList,
						$sf_params->get('initials') ) );
						?></td>
					</tr>
					<tr>
						<td class="FORMcell-right" nowrap></td>
						<td class="FORMcell-left FORMlabel" nowrap>REMARKS</td>
						<td class="FORMcell-right" nowrap><?php
						echo textarea_tag('remarks', $sf_params->get('remarks'), 'size=50x5')
						?></td>
					</tr>
					<tr>
						<td class="FORMcell-right" nowrap></td>
						<td class="alignCenter FORMcell-right" nowrap></td>
						<td class="FORMcell-right" nowrap><input type="submit" name="save"></td>
						
					</tr>
				</table>		
			</td>
		<td ><div id="DIVGarmentInformation"></div>
		</td>
		</tr>

</table>
</form>
	
<div class="grid-toolbar-2">
<table>
	<tr>
		<td class="alignRight" nowrap>Record Sheet: #027</td>
	</tr>
	<tr>
		<td class="alignRight" nowrap>ISO Refs: </td>
	</tr>
</table>
</div>
<?php
	echo javascript_tag("
	function onBasicChanged(ev, args) {
		".remote_function($ajaxGarmentInformation)."
	}
	YAHOO.util.Event.addListener('garmentCodeTxt', 'change', onBasicChanged);	
	");

	
?>
<?php
//	if ($ieAlert):
////		echo javascript_tag("
////			alert('Must Use Internet Explorer to Run this program');
////		");
//	endif;
 ?>