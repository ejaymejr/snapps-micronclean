<?php use_helper('Validation', 'Javascript') ?>
<?php
    $user = array('JAYAKUMAR'=>'JAYAKUMAR',
    			  'MEIZHEN'=>'MEIZHEN',
    			  'PARI'=>'PARI', 
    			  'GOPAL'=>'GOPAL',
                  'MELVIN'=>'MELVIN',
    			  'TERENCE'=>'TERENCE'); 
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('micronclean/oocAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>OUT OF CONTROL DATA SHEET</H2></span></td></tr>
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
				<td class="FORMcell-left FORMlabel" nowrap>OBSERVATION</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('observation', $sf_params->get('observation'), 'size=75x6')
				?></td>
			</tr>	
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>INVESTIGATED BY</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
					echo select_tag('investigate_by',
					options_for_select($user,
					$sf_params->get('investigate_by') ) );				
				//echo input_tag('investigated_by', $sf_params->get('investigated_by'), 'size="25" ');
				?></td>
			</tr>					
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>ACTION</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo textarea_tag('prop_action', $sf_params->get('prop_action'), 'size=75x6')
				?></td>
			</tr>	
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>REVIEWED BY</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
					echo select_tag('review_by',
					options_for_select($user,
					$sf_params->get('review_by') ) );					
				//echo input_tag('reviewed_by', $sf_params->get('reviewed_by'), 'size="25" ');
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
    echo 'Record Sheet:</b> #049';
    echo '<br>';
    echo '<b>ISO Refs:</b>  WI004rev001   WI016rev001   WI020rev003   WI024rev001   WI256rev001   MCS-QP-OPS-03rev001   ASWISEA010rev007   ASWISEA044rev001   ASWISEA101rev009   WISEAPC041rev001   ASWISEA040rev009   MCS-QP-OPS-02rev001   MCS-QP-OPS-03rev001';
?>
</div></td></tr>	
</table>
</div>
</form>

