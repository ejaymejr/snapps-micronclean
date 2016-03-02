
<table width="100%" class="FORMtable" border="0" cellpadding="4"
	cellspacing="0">
	<tr>
		<td width="1" class="FORMcell-right" nowrap></td>
		<td class="FORMcell-left FORMlabel" nowrap>PLACE HELD</td>
		<td colspan="3" class="FORMcell-right" nowrap><?php
		echo HTMLForm::Error('place_held');
		echo input_tag('description', $sf_params->get('description'), 'size="35" type="hidden"');
		echo input_tag('place_held', $sf_params->get('place_held'), 'size="35"')
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
</table>
