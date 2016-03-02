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
				echo input_tag('name', $sf_params->get('name'), 'placeholder="enter templatename" size="20" onblur="javascript:{this.value = this.value.toUpperCase(); }"');
				echo input_tag('seq_no', 0, 'type="hidden" ');
			?>
			</div>
			</td>
		</tr>
		<tr>
			<td class="FORMcell-left FORMlabel">Company</td>
			<td class="FORMcell-right" nowrap>
			<div class="input-control select span4">
			<?php
			echo HTMLForm::Error('company');
			echo select_tag('company',
             options_for_select($companyList,
             $sf_params->get('company') ), 'placeholder="select company"' );
    		?> <span class="negative"></span></div>
			</td>
		</tr>
		<tr>
			<td class="FORMcell-left FORMlabel">Department/Floor</td>
			<td class="FORMcell-right" nowrap>
			<div class="input-control select span4">
			<?php
			echo HTMLForm::Error('department');
			echo select_tag('department',
             options_for_select($departmentList,
             $sf_params->get('department') ) );
			//echo input_tag('counter', 0);
    	?> <span class="negative"></span></div>
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
     <span class="icon-grid-view"></span>   COMPONENT
    </strong></blockquote>

<table cellspacing="2" cellpadding="4" border="0" style="width:100%; font-size: 11px"  id="AddTemplateTable" class="hovered striped bordered fg-color-blueDark">
	<col width=50>
	<col width=50>
	<?php
	
	$valueList = array('COMPONENT', 'LIST/DEFAULT VALUE', 'REMARKS','SORT');
	foreach ($valueList as $line=>$val) :
		echo '<col width=100>';
	endforeach; ?>
	<col width=50>

	<tr>
		<td class=" " nowrap><?php echo link_to('<span class="icon-plus fg-color-orangeDark"></span>', '#', 'onclick=AddRowTemplateDesignAdd(6)')?></td>
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
</table>


<?php 
// foreach():
// echo "<div id=''>";
// echo "</div>";
// endforeach();
?>

<div id="DIVDesignReminder">
<span class="label info">Component means the LABEL TITLE.<br>
List can be formatted as: S,M,L,XL,XXL,XXXL,3XL</span></div>
	

</form>

</div>

