<?php use_helper('Validation', 'Javascript') ?>
<?php 
// $companyList = HrLib::GetMercuryCustomerList();
// $departmentList = HrLib::GetMercuryDepartmentList();
// $garmentList = HrLib::GetMercuryGarmentList($companyList);

?>
<div id="DIVLabelMain" >  
<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('issuance/templateDesignAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<table width="100%" class="bordered " border="0" cellpadding="4"
		cellspacing="0" margin="5px">
		<tr>
			<td width="200px" class="FORMcell-left FORMlabel">Template Name</td>
			<td class="FORMcell-right" nowrap>
			<div class="input-control text span3">
			<?php 
				echo input_tag('test', $sf_params->get('name'), array('disabled'=>' ') );
				echo input_tag('name', $sf_params->get('name'), array('type'=>'hidden') ); 
				echo input_tag('seq_no', 0, 'type="hidden" ');
			?>
			</div>
			</td>
		</tr>
		<tr>
			<td class="FORMcell-left FORMlabel">Company</td>
			<td class="FORMcell-right" nowrap>
				<div class="input-control span4 text disabled">
                     <?php
                     echo input_tag('test', $sf_params->get('company'), array('disabled'=>' ') );
                     echo input_tag('company', $sf_params->get('company'), array('type'=>'hidden') ); ?>
                </div>
				 <span class="negative"></span>
			</td>
		</tr>
		<tr>
			<td class="FORMcell-left FORMlabel">Department/Floor</td>
			<td class="FORMcell-right" nowrap>
				<div class="input-control span4 text disabled">
                     <?php echo input_tag('test', $sf_params->get('department'), array('disabled'=>' ') );
                     echo input_tag('department', $sf_params->get('department'), array('type'=>'hidden') );?>
                </div>
				 <span class="negative"></span>
			</td>
		</tr>
		<tr>
			<td class="FORMcell-left FORMlabel" nowrap></td>
			<td class="FORMcell-right" nowrap>
			<input type="submit" name="save" value=" Save This Template " >
			</td>
		</tr>		


	</table>
	
	

	 <blockquote class="bg-color-orangeDark fg-color-white "><strong>
      <span class="icon-grid-view"></span>   TEMPLATE MANAGEMENT
    </strong></blockquote>

<table cellspacing="2" cellpadding="4" border="0" style="width:100%; font-size: 11px"  id="AddTemplateTable" class="hovered striped bordered fg-color-blueDark">
	<col width=50>
	<col width=50>
	<?php
	
	$valueList = array('GARMENT', 'COMPONENT/COLOR', 'LIST/DEFAULT VALUE', 'REMARKS','SORT');
	foreach ($valueList as $line=>$val) :
		echo '<col width=100>';
	endforeach; ?>
	<col width=50>

	<tr class="SearchHeaderBg">
		<td class="  " nowrap><?php echo link_to('<span class="icon-plus fg-color-green"></span>', '#', 'onclick=AddRowTemplateDesignAdd(7)')?></td>
		<td class=" " nowrap>SEQ</td>
		<?php
		foreach ($valueList as $line=>$val) :
			$helpList = '';
			if ($val == 'LIST/DEFAULT VALUE') $helpList = '&nbsp;&nbsp;&nbsp;<small><abbr title="List can be formatted as: S,M,L,XL,XXL,XXXL,3XL"><span class="icon-help"></span></abbr></small>';
		?>
			<td class=" " nowrap><?php echo strtoupper($val) . $helpList ?></td>
		<?php endforeach; ?>
		<td class=" " nowrap></td>
	</tr>
	<?php 
		$seq = 0;
		$tDetail = TicketDesignDetailPeer::GetDataByHeaderID($sf_params->get('id'));
		foreach($tDetail as $detail): $seq++; ?>
	<tr>
		<td class=" " nowrap><?php echo link_to('<span class="icon-minus fg-color-redLight"></span>', '#', 'onclick=TemplateDesignDeleteRowByID('.$seq.')')?></td>
		<td class=" " nowrap><?php echo $seq ?></td>
		<td class=" " nowrap>
			
			<?php 
				echo input_tag('gar_' . $seq , $detail->getGarment() ); 
				echo input_tag('rec_' . $seq , $detail->getId(), 'type="hidden"' );
			?>
			
		</td>
		<td class=" " nowrap>
			
			<?php echo input_tag('com_' . $seq , $detail->getComponent() ); ?>
			
		</td>
		<td class=" " nowrap>
			
			<?php echo input_tag('lis_' . $seq , $detail->getValue() ); ?>
			</td>
		<td class=" " nowrap>
			
			<?php echo input_tag('rem_' . $seq , $detail->getRemark() ); ?>
			</td>
		<td class=" " nowrap>
			<?php echo input_tag('seq_' . $seq , $detail->getSequence() ); ?>
			</td>
		<td class=" " nowrap></td>
	</tr>
	<?php 		
		endforeach;
		echo javascript_tag("document.getElementById('seq_no').value = ". $seq );
	?>
</table>

<div id="DIVDesignReminder">
<span class="label info">Component means the LABEL TITLE.<br>
List can be formatted as: S,M,L,XL,XXL,XXXL,3XL</span></div>
</form>

</div>

