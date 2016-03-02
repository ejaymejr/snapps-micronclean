<?php use_helper('Validation', 'Javascript') ?>
<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('training/trainingAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"
	cellspacing="0">
	<tr>
		<td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"
			cellspacing="0">
			<tr>
				<td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span
					style="color: #FFF">
				<H2>TRAINING DATA SHEET</H2>
				</span></td>
			</tr>
			<tr>
				<td width="1" class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>DESCRIPTION</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('description');
				echo input_tag('description', $sf_params->get('description'), 'size="45" ');
				?></td>
			</tr>
			<tr>
				<td width="1" class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>PLACE HELD</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('place_held');
				echo input_tag('place_held', $sf_params->get('place_held'), 'size="50"')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>DATE FROM</td>
				<td colspan="3" width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('date_from');
				echo HTMLForm::DrawDateInput('date_from', $sf_params->get('date_from', date('Y-m-d')), 'date_from', XIDX::next(), ' size="12" ');
				echo ' to ';
				echo HTMLForm::DrawDateInput('date_to', $sf_params->get('date_to', date('Y-m-d')), 'date_to', XIDX::next(), ' size="12" ');
				?>
			
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>TRAINER</td>
				<td class="FORMcell-right" width="10" nowrap><?php
				echo HTMLForm::Error('name_trainor');
				echo input_tag('name_trainor', $sf_params->get('name_trainor'), 'size="35"');
				?></td>
				<td class="FORMcell-left FORMlabel" width="10" nowrap>LICENSE NO</td>
				<td class="FORMcell-right FORMlabel" nowrap><?php
				echo HTMLForm::Error('license_no');
				echo input_tag('license_no', $sf_params->get('license_no'), 'size="25"')
				?></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>TOTAL HOURS</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('no_hrs');
				echo input_tag('no_hrs', $sf_params->get('no_hrs'), 'size="25"');
				?></td>
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
				<td colspan="3" class="FORMcell-right" nowrap></td>
		
		</table>
	
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>
		<div class="grid-toolbar-right alignRight"><?php 
		echo '<b>';
		echo 'Record Sheet:</b> #006';
		echo '<br>';
		echo '<b>ISO Refs:</b>  WI030rev001   WI042rev002   WI250rev004';
		?></div>
		</td>
	</tr>
</table>
</div>
</form>

