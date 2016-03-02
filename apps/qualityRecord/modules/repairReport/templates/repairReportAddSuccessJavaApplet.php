<?php use_helper('Validation', 'Javascript') ?>
        <script src="deployJava.js"></script>
		<script> 
			var attributes = { code:'JSSerial.class', archive:'JSSerial.jar',  width:100, height:100, id:'JSSerial'}; 
			var parameters = {jnlp_href: 'jsserial-applet.jnlp'}; 
			deployJava.runApplet(attributes, parameters, '1.5');  //1.5
		</script>
		<script type="text/javascript">
			
			//alert("JavaScript is enabled, that is good");
				//for (var start = 1; start < 2000; start++); 
				// delay added to allow complete loading of the applet first
				var serialPortList = document.JSSerial.listPorts();
				var aSerialPortList = String(serialPortList).split(',');
				document.JSSerial.startSerial(aSerialPortList[0]);
				//alert(document.JSSerial.startSerial());
			
			function fromJava(someText)
			{
				//alert(someText);
			}

			// Call this to list the ports available.
			function listPorts()
			{
				var serialPortList = document.JSSerial.listPorts();
				var aSerialPortList = String(serialPortList).split(',');
				var outputDiv = document.getElementById("listportsoutput");

				var outputString = "";
				for (i = 0; i < aSerialPortList.length; i++)
				{
					outputString += i + ":" + aSerialPortList[i] + '<br />';
				}
				outputDiv.innerHTML = outputString;
			}
			
			function startSerial()
			{
				
				document.JSSerialConnect.startSerial();
			}
			
			function openPort()
			{
				
				//var serialPortList = document.JSSerial.listPorts();
				//var aSerialPortList = String(serialPortList).split(',');
				//document.JSSerial.startSerial(aSerialPortList[0]);
				//document.getElementById("outputdivtimer").innerHTML = document.JSSerial.readString();
				
			}
			
			function serialEvent(data)
			{
				var serialEventData = document.getElementById("serialeventdata");
				serialEventData.innerHTML = data;
			}
			
			var timer;
			function startTimer()
			{
				timer = setInterval(function(){timerran()},100);
			}
			
			function timerran()
			{

				var outputdivtimer = document.getElementById("outputdivtimer");
				
				serialPortString = document.JSSerial.readString();
				if (!serialPortString){
					serialPortString = '';
				}
				garmentCodes = document.getElementById("garmentCodeTxt").value;
				outputdivtimer.innerHTML = garmentCodes + serialPortString;
				document.getElementById("garmentCodeTxt").value = garmentCodes + serialPortString;
			}

		</script>
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
    $tempPressure = $sf_params->get('repair_type') <> 'HEAT PATCH'? 'style="display: none"' : '';
    ?>


<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('repairReport/repairReportAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<table width="100%" class="FORMtable" border="0" cellpadding="1"
		cellspacing="0">
		<tr>
			<td width="90%">
				<table width="100%" class="FORMtable" border="0" cellpadding="4"
					cellspacing="0">
					<tr>
						<td width="100px" class="FORMcell-right" nowrap>&nbsp;</td>
						<td width="100px" class="FORMcell-left FORMlabel" nowrap>DATE OF
							REPAIR</td>
						<td width="600px" class="FORMcell-right" nowrap><?php
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
						?>
						</td>
					</tr>
					<tr>
						<td class="FORMcell-right" nowrap></td>
						<td class="FORMcell-left FORMlabel" nowrap><B>GARMENT CODE</B></td>
						<td class="FORMcell-right" nowrap><?php 
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
							echo '&nbsp;&nbsp'.link_to('download java files','serialport.zip');
							?>
						</td>
					</tr>
					<tr>
						<td class="FORMcell-right" nowrap></td>
						<td class="FORMcell-left FORMlabel" nowrap>GARMENT TYPE</td>
						<td class="FORMcell-right" nowrap><div id="DIVGarmentType">
								<?php
								echo $sf_params->get('garment_type');?>
							</div> <?php
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
						?> <?php //echo link_to( '(show/hide extra)', '', array('onclick'=>'showHideElement("tempPressure"); return false;') )?>

						</td>
					</tr>
				</table>
				<div id="tempPressure" <?php echo $tempPressure ?>>
					<table width="100%" class="FORMtable" border="0" cellpadding="4"
						cellspacing="0">
						<tr>
							<td width="100px" class="FORMcell-right" nowrap></td>
							<td width="100px" class="FORMcell-left FORMlabel" nowrap>TEMPERATURE</td>
							<td width="600px" class="FORMcell-right" nowrap><?php
							echo input_tag('temperature', $sf_params->get('temperature'), 'size="15"');
							?> <span class="negative">Greater Than 190&deg;C and Less Than
									210&deg;C</span></td>
						</tr>
						<tr>
							<td width="100px" class="FORMcell-right" nowrap></td>
							<td width="100px" class="FORMcell-left FORMlabel" nowrap>PRESSURE</td>
							<td width="600px" class="FORMcell-right" nowrap><?php
							echo input_tag('pressure', $sf_params->get('pressure'), 'size="15"');
							?> <span class="negative">135 to 155 psi</span></td>
						</tr>
					</table>
				</div>
				<table width="100%" class="FORMtable" border="0" cellpadding="4"
					cellspacing="0">
					<tr>
						<td width="100px" class="FORMcell-right" nowrap></td>
						<td width="100px" class="FORMcell-left FORMlabel" nowrap>QUANTITY</td>
						<td width="600px" class="FORMcell-right" nowrap><?php
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
						<td class="FORMcell-right" nowrap><?php 
						echo submit_tag('Save') ;
						if (sfContext::getInstance()->getUser()->getUsername() == 'emmanuel'):
						echo "&nbsp;&nbsp;&nbsp;" . submit_tag('Verify Data','name="verify_data"') ;
						endif;
						?>
						</td>

					</tr>
				</table>
			</td>
			<td><div id="DIVGarmentInformation"></div>
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
			<td class="alignRight" nowrap>ISO Refs:</td>
		</tr>
	</table>
</div>
<?php
echo javascript_tag("
	function onRepairTypeChanged(ev, args) {
		if (document.getElementById('repair_type').value == 'HEAT PATCH')
			//showHideElement('tempPressure');
			document.getElementById('tempPressure').style.display = 'block';
		else
			document.getElementById('tempPressure').style.display = 'none';
		endif;
}
	YAHOO.util.Event.addListener('repair_type', 'change', onRepairTypeChanged);
	");


?>
<?php
//	if ($ieAlert):
////		echo javascript_tag("
////			alert('Must Use Internet Explorer to Run this program');
////		");
//	endif;
 ?>
