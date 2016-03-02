<?php use_helper('Validation', 'Javascript') ?>
<?php
    $chList1 = array('F', 'Cl', 'NO2', 'NO3', 'PO4', 'SO4', 'Br');
    $chList2 = array('Li', 'Na', 'NH4', 'K', 'Mg', 'Ca' );
    $chCnt = sizeof($chList1);
    //var_dump($chCnt);
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('micronclean/icCalibrationAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>IC CALIBRATION LOG</H2></span></td></tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE RECORDED</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('trans_date', $sf_params->get('trans_date', date('Y-m-d')), 'trans_date', XIDX::next(), ' size="12" '); ?>
				&nbsp;<input type="submit" name="save" value=" Save Info " class="submit-button">
				</td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				//echo HTMLForm::DrawDateInput('due_date', $sf_params->get('due_date', date('Y-m-d')), 'due_date', XIDX::next(), ' size="12" '); ?>
				</td>				
			</tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>CALIBRATED BY</td>
				<td width="100" class="FORMcell-right" nowrap><?php
					echo input_tag('checked_by', $sf_params->get('checked_by'), 'size="25" '); ?>
				</td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>VERIFIED BY</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo input_tag('verified_by', $sf_params->get('verified_by'), 'size="25" '); ?>
				</td>				
			</tr>
			
		</table>
		<div class="grid-toolbar-2"></div>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
		<tr><td height="25" colspan="7" align="alignLeft" bgcolor="#F9DAA3" nowrap><span style="color: #000"><H3>&nbsp;&nbsp;&nbsp;Pipette 100ul of the element standards into 100ml of DI water </H3></span></td></tr>
			<tr>
				<td bgcolor="#D8F781" width="15%" class="FORMcell-right alignCenter" nowrap></td>
				<td width="5%" bgcolor="#FAFAFA" class="FORMcell-right alignCenter" nowrap>Seq #</td>
				<td width="20%" bgcolor="#E0ECF8" colspan="2" class="FORMcell-right alignCenter" nowrap>Anion (7)</td>
				<td width="20%" bgcolor="#F7F8E0" colspan="2" class="FORMcell-right alignCenter" nowrap>Cation(6)</td>
				<td bgcolor="#D8F781" width="40%" class="FORMcell-right alignCenter" nowrap></td>
			</tr>
			<?php 
				$prefix = 'std0';
				foreach($chList1 as $pos=>$list):
			?>
			<tr>
				<td bgcolor="#D8F781" class="FORMcell-right alignCenter" nowrap></td>
				<td bgcolor="#FAFAFA" class="FORMcell-right alignCenter" nowrap><?php echo $pos+1; ?></td>
				<td bgcolor="#E0ECF8" class="FORMcell-right alignRight" nowrap><?php echo isset($chList1[$pos])? checkbox_tag($prefix.$chList1[$pos], '1', $sf_params->get($prefix.$chList1[$pos]) )  : '' ?></td>
				<td bgcolor="#E0ECF8" class="FORMcell-right alignLeft" nowrap><?php echo isset($chList1[$pos])? $chList1[$pos]  : '' ?></td>
				<td bgcolor="#F7F8E0" class="FORMcell-right alignRight" nowrap><?php echo isset($chList2[$pos])? checkbox_tag($prefix.$chList2[$pos], '1', $sf_params->get($prefix.$chList2[$pos]) )  : '' ?></td>
				<td bgcolor="#F7F8E0" class="FORMcell-right alignLeft" nowrap><?php echo isset($chList2[$pos])? $chList2[$pos]  : '' ?></td>
				<td bgcolor="#D8F781" class="FORMcell-right alignCenter" nowrap><?php //echo input_tag('point_2_lot_no', $sf_params->get('point_2_lot_no'), 'size="25" '); ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
		&nbsp;

		<div class="grid-toolbar-2"></div>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
		<tr>
			<td height="25" colspan="6" align="alignLeft" bgcolor="#F9DAA3" nowrap><span style="color: #000"><H3>&nbsp;&nbsp;&nbsp;Std 1 Prep: 50ul (pipette) from 100ml into Std1 100ml prep</H3></span></td>
			<td height="25" colspan="4" align="alignLeft" bgcolor="#F5D0A9" nowrap><span style="color: #000"><H3>&nbsp;&nbsp;&nbsp;Inject into IC and Check Peaks for Std 1 = 0.05ppb</H3></span></td>
		</tr>
		
			<tr>
				<td width="15%" bgcolor="#D8F781" class="FORMcell-right alignCenter" nowrap></td>
				<td width="5%" bgcolor="#FAFAFA" class="FORMcell-right alignCenter" nowrap>Seq #</td>
				<td width="20%" bgcolor="#E0ECF8" colspan="2" class="FORMcell-right alignCenter" nowrap>Anion (7)</td>
				<td width="20%" bgcolor="#F7F8E0" colspan="2" class="FORMcell-right alignCenter" nowrap>Cation(6)</td>
				<td width="20%" bgcolor="#E6E6E6" colspan="2" class="FORMcell-right alignCenter" nowrap>Anion (7)</td>
				<td width="20%" bgcolor="#E6E6E6" colspan="2" class="FORMcell-right alignCenter" nowrap>Cation(6)</td>

			</tr>
			<?php 
				$prefix = 'std1';
				$suffix = 'x';
				foreach($chList1 as $pos=>$list):
			?>
			<tr>
				<td bgcolor="#D8F781" class="FORMcell-right alignCenter" nowrap></td>
				<td bgcolor="#FAFAFA" class="FORMcell-right alignCenter" nowrap><?php echo $pos+1; ?></td>
				<td bgcolor="#E0ECF8" class="FORMcell-right alignRight" nowrap><?php echo isset($chList1[$pos])? checkbox_tag($prefix.$chList1[$pos], '1', $sf_params->get($prefix.$chList1[$pos]) )  : '' ?></td>
				<td bgcolor="#E0ECF8" class="FORMcell-right alignLeft" nowrap><?php echo isset($chList1[$pos])? $chList1[$pos]  : '' ?></td>
				<td bgcolor="#F7F8E0" class="FORMcell-right alignRight" nowrap><?php echo isset($chList2[$pos])? checkbox_tag($prefix.$chList2[$pos], '1', $sf_params->get($prefix.$chList2[$pos]) )  : '' ?></td>
				<td bgcolor="#F7F8E0" class="FORMcell-right alignLeft" nowrap><?php echo isset($chList2[$pos])? $chList2[$pos]  : '' ?></td>

				<td bgcolor="#E6E6E6" class="FORMcell-right alignRight" nowrap><?php echo isset($chList1[$pos])? checkbox_tag($prefix.$chList1[$pos].$suffix, '1', $sf_params->get($prefix.$chList1[$pos]) )  : '' ?></td>
				<td bgcolor="#E6E6E6" class="FORMcell-right alignLeft" nowrap><?php echo isset($chList1[$pos])? $chList1[$pos]  : '' ?></td>
				<td bgcolor="#E6E6E6" class="FORMcell-right alignRight" nowrap><?php echo isset($chList2[$pos])? checkbox_tag($prefix.$chList2[$pos].$suffix, '1', $sf_params->get($prefix.$chList2[$pos]) )  : '' ?></td>
				<td bgcolor="#E6E6E6" class="FORMcell-right alignLeft" nowrap><?php echo isset($chList2[$pos])? $chList2[$pos]  : '' ?></td>

			</tr>
			<?php endforeach; ?>
			<tr>
				<td bgcolor="#EFF2FB" colspan="6" class="FORMcell-right alignCenter" nowrap></td>
				<td bgcolor="#EFF2FB" colspan="2" class="FORMcell-right alignCenter" nowrap><?php echo checkbox_tag($prefix.'x7peak', '1', $sf_params->get('x7peak')) ?> Check/Uncheck All Anion</td>
				<td bgcolor="#EFF2FB" colspan="2" class="FORMcell-right alignCenter" nowrap><?php echo checkbox_tag($prefix.'x6peak', '1', $sf_params->get('x6peak')) ?> Check/Uncheck All Cation</td>
			</tr>
		</table>
		&nbsp;		

		<div class="grid-toolbar-2"></div>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
		<tr>
			<td height="25" colspan="6" align="alignLeft" bgcolor="#F9DAA3" nowrap><span style="color: #000"><H3>&nbsp;&nbsp;&nbsp;Std 2 Prep: 500ul (pipette) from 100ml into Std2 100ml prep</H3></span></td>
			<td height="25" colspan="4" align="alignLeft" bgcolor="#F5D0A9" nowrap><span style="color: #000"><H3>&nbsp;&nbsp;&nbsp;Inject into IC and Check Peaks for Std 2 = 5ppb</H3></span></td>
		</tr>
		
			<tr>
				<td width="15%" bgcolor="#D8F781" class="FORMcell-right alignCenter" nowrap></td>
				<td width="5%" bgcolor="#FAFAFA" class="FORMcell-right alignCenter" nowrap>Seq #</td>
				<td width="20%" bgcolor="#E0ECF8" colspan="2" class="FORMcell-right alignCenter" nowrap>Anion (7)</td>
				<td width="20%" bgcolor="#F7F8E0" colspan="2" class="FORMcell-right alignCenter" nowrap>Cation(6)</td>
				<td width="20%" bgcolor="#E6E6E6" colspan="2" class="FORMcell-right alignCenter" nowrap>Anion (7)</td>
				<td width="20%" bgcolor="#E6E6E6" colspan="2" class="FORMcell-right alignCenter" nowrap>Cation(6)</td>

			</tr>
			<?php 
				$prefix = 'std2';
				$suffix = 'x';
				foreach($chList1 as $pos=>$list):
			?>
			<tr>
				<td bgcolor="#D8F781" class="FORMcell-right alignCenter" nowrap></td>
				<td bgcolor="#FAFAFA" class="FORMcell-right alignCenter" nowrap><?php echo $pos+1; ?></td>
				<td bgcolor="#E0ECF8" class="FORMcell-right alignRight" nowrap><?php echo isset($chList1[$pos])? checkbox_tag($prefix.$chList1[$pos], '1', $sf_params->get($prefix.$chList1[$pos]) )  : '' ?></td>
				<td bgcolor="#E0ECF8" class="FORMcell-right alignLeft" nowrap><?php echo isset($chList1[$pos])? $chList1[$pos]  : '' ?></td>
				<td bgcolor="#F7F8E0" class="FORMcell-right alignRight" nowrap><?php echo isset($chList2[$pos])? checkbox_tag($prefix.$chList2[$pos], '1', $sf_params->get($prefix.$chList2[$pos]) )  : '' ?></td>
				<td bgcolor="#F7F8E0" class="FORMcell-right alignLeft" nowrap><?php echo isset($chList2[$pos])? $chList2[$pos]  : '' ?></td>

				<td bgcolor="#E6E6E6" class="FORMcell-right alignRight" nowrap><?php echo isset($chList1[$pos])? checkbox_tag($prefix.$chList1[$pos].$suffix, '1', $sf_params->get($prefix.$chList1[$pos]) )  : '' ?></td>
				<td bgcolor="#E6E6E6" class="FORMcell-right alignLeft" nowrap><?php echo isset($chList1[$pos])? $chList1[$pos]  : '' ?></td>
				<td bgcolor="#E6E6E6" class="FORMcell-right alignRight" nowrap><?php echo isset($chList2[$pos])? checkbox_tag($prefix.$chList2[$pos].$suffix, '1', $sf_params->get($prefix.$chList2[$pos]) )  : '' ?></td>
				<td bgcolor="#E6E6E6" class="FORMcell-right alignLeft" nowrap><?php echo isset($chList2[$pos])? $chList2[$pos]  : '' ?></td>

			</tr>
			<?php endforeach; ?>
			<tr>
				<td bgcolor="#EFF2FB" colspan="6" class="FORMcell-right alignCenter" nowrap></td>
				<td bgcolor="#EFF2FB" colspan="2" class="FORMcell-right alignCenter" nowrap><?php echo checkbox_tag($prefix.'x7peak', '1', $sf_params->get('x7peak')) ?> Check/Uncheck All Anion</td>
				<td bgcolor="#EFF2FB" colspan="2" class="FORMcell-right alignCenter" nowrap><?php echo checkbox_tag($prefix.'x6peak', '1', $sf_params->get('x6peak')) ?> Check/Uncheck All Cation</td>
			</tr>
		</table>
		&nbsp;
		
		
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>REMARKS</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('remark', $sf_params->get('remark'), 'size=100x6')
				?></td>
			</tr>		
			<tr><td class="FORMcell-right alignRight"  nowrap colspan="5" ><input type="submit" name="save"
									value=" Save Info " class="submit-button"></td>
			</tr>
		</table>					

	<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">	
	<tr><td>&nbsp;</td></tr>
	<tr><td>
	<div class="grid-toolbar-right alignRight" >
        <?php 
//            echo '<b>'; 
//            echo 'Record Sheet:</b> #115';
//            echo '<br>';
//            echo '<b>ISO Refs: MCWI202</b> '   
//            . link_to('WI028rev001', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI028rev001_19980112_microscopic_analysis_of_garments.pdf')
//            .' ,  '. link_to('WI106rev005', 'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean/WI106rev005_20060901_DI_water_spec.pdf');

        
        ?>
	</div></td></tr>	
</table>
</div>
</form>
<?php
echo javascript_tag("
	function std1X7Update(ev, args) {
		check = document.getElementById('std1x7peak').checked;
		document.getElementById('std1F').checked = check;
		document.getElementById('std1Cl').checked = check;
		document.getElementById('std1NO2').checked = check;
		document.getElementById('std1NO3').checked = check;
		document.getElementById('std1PO4').checked = check;
		document.getElementById('std1SO4').checked = check;
		document.getElementById('std1Br').checked = check;
		
		document.getElementById('std1Fx').checked = check;
		document.getElementById('std1Clx').checked = check;
		document.getElementById('std1NO2x').checked = check;
		document.getElementById('std1NO3x').checked = check;
		document.getElementById('std1PO4x').checked = check;
		document.getElementById('std1SO4x').checked = check;
		document.getElementById('std1Brx').checked = check;		
	}
	
	function std1X6Update(ev, args) {
		check = document.getElementById('std1x6peak').checked;
		document.getElementById('std1Li').checked = check;
		document.getElementById('std1Na').checked = check;
		document.getElementById('std1NH4').checked = check;
		document.getElementById('std1K').checked = check;
		document.getElementById('std1Mg').checked = check;
		document.getElementById('std1Ca').checked = check;
		
		document.getElementById('std1Lix').checked = check;
		document.getElementById('std1Nax').checked = check;
		document.getElementById('std1NH4x').checked = check;
		document.getElementById('std1Kx').checked = check;
		document.getElementById('std1Mgx').checked = check;
		document.getElementById('std1Cax').checked = check;		
	
	}
		
	
	function std2X7Update(ev, args) {
		check = document.getElementById('std2x7peak').checked;
		document.getElementById('std2F').checked = check;
		document.getElementById('std2Cl').checked = check;
		document.getElementById('std2NO2').checked = check;
		document.getElementById('std2NO3').checked = check;
		document.getElementById('std2PO4').checked = check;
		document.getElementById('std2SO4').checked = check;
		document.getElementById('std2Br').checked = check;
		
		document.getElementById('std2Fx').checked = check;
		document.getElementById('std2Clx').checked = check;
		document.getElementById('std2NO2x').checked = check;
		document.getElementById('std2NO3x').checked = check;
		document.getElementById('std2PO4x').checked = check;
		document.getElementById('std2SO4x').checked = check;
		document.getElementById('std2Brx').checked = check;		
	}	
	
	function std2X6Update(ev, args) {
		check = document.getElementById('std2x6peak').checked;
		document.getElementById('std2Li').checked = check;
		document.getElementById('std2Na').checked = check;
		document.getElementById('std2NH4').checked = check;
		document.getElementById('std2K').checked = check;
		document.getElementById('std2Mg').checked = check;
		document.getElementById('std2Ca').checked = check;
		
		document.getElementById('std2Lix').checked = check;
		document.getElementById('std2Nax').checked = check;
		document.getElementById('std2NH4x').checked = check;
		document.getElementById('std2Kx').checked = check;
		document.getElementById('std2Mgx').checked = check;
		document.getElementById('std2Cax').checked = check;		
	
	}	
	
	
	YAHOO.util.Event.addListener('std1x7peak', 'click', std1X7Update);	
	YAHOO.util.Event.addListener('std1x6peak', 'click', std1X6Update);
	
	YAHOO.util.Event.addListener('std2x7peak', 'click', std2X7Update);
	YAHOO.util.Event.addListener('std2x6peak', 'click', std2X6Update);
	
	");