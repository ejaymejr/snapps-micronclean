<?php use_helper('Validation', 'Javascript') ?>
<?php
$mList = array();
$pList = array();
$aList = array();

$mList = $memList? $memList : array();
$pList = $preList? $preList : array();
$aList = $absList? $absList : array();

$list  = ManagementReviewUserPeer::getMembersList('label');
$cpList  = array_merge(array(''=>' -SELECT CHAIRPERSON-'), $list);
$secList = array_merge(array(''=>' -SELECT SECRETARY-'), $list);
$revList = array_merge(array(''=>' -SELECT REVIEW BY-'), $list);
$verList = array_merge(array(''=>' -SELECT VERIFY-'), $list);
$cpList1  = ManagementReviewMembersPeer::getMembersList();
$cpList1 = $list;
$venueList = ManagementReviewVenueAttrPeer::GetVenueList();
$departmentList     = array(''=>' -SELECT DEPARTMENT- ', 'ACRO SOLUTION'=>'ACRO SOLUTION', 'MICRONCLEAN'=>'MICRONCLEAN', 'NANOCLEAN'=>'NANOCLEAN', 'TC KHOO'=>'TC KHOO');
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('mgtReview/reviewAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"
	cellspacing="0">
	<tr>
		<td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"
			cellspacing="0">
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('date', $sf_params->get('date', date('Y-m-d')), 'date', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="20%" class="FORMcell-left FORMlabel" nowrap>VENUE</td>
				<td width="100%" class="FORMcell-right" nowrap><?php
				echo select_tag('venue',
				options_for_select($venueList,
				$sf_params->get('venue') ) );
				?></td>
			</tr>

			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>CHAIR-PERSON</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo select_tag('chair_person',
				options_for_select($cpList,
				$sf_params->get('chair_person') ) );
				?></td>
				<td width="20%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>


			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>AGENDA</td>
				<td colspan="3" class="FORMcell-right" nowrap><span
					class="radioButtonText"> 1. Quality objective performance<br>
				2. Internal/External audit results<br>
				3. Customer feedback<br>
				4. Process performance and product conformity<br>
				5. Status of preventive and corrective actions<br>
				6. Recommendation for improvement<br>
				7. Resources requirement </span></td>
			</tr>
		</table>
		<br>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"
			cellspacing="0">
			<tr>
				<td height="28" width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>MEMBERS</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>PRESENTEES</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>ABSENTEES</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
				    foreach($cpList1 as $ke=>$name){
				        $mem = 'mem_'.$name;
				        echo '<span class="radioButtonText">' .checkbox_tag($mem, $name, in_array($name, $mList)) . '&nbsp;&nbsp;'.$name.'</span><br>';
				    }
				?></td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
					foreach($cpList1 as $ke=>$name){
				        $mem = 'pre_'.$name;
				        echo '<span class="radioButtonText">' .checkbox_tag($mem, $name, in_array($name, $pList)) . '&nbsp;&nbsp;'.$name.'</span><br>';
				    }				
				?></td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
					foreach($cpList1 as $ke=>$name){
				        $mem = 'abs_'.$name;
				        echo '<span class="radioButtonText">' .checkbox_tag($mem, $name, in_array($name, $aList)) . '&nbsp;&nbsp;'.$name.'</span><br>';
				    }				
				?></td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td height="28" width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>DISCUSSION</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>ACTION</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>ACTION DATE</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>			
			
			<tr>
				<td width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
                    echo textarea_tag('discussion', $sf_params->get('discussion'), 'size=33x15')		
				?></td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
                    echo textarea_tag('prop_action', $sf_params->get('prop_action'), 'size=33x15')				
                ?></td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
				    echo textarea_tag('action_date', $sf_params->get('action_date'), 'size=33x15')
				?></td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>			
		</table>
		<br>
		<table width="100%" class="FORMtable" border="0" cellpadding="4" cellspacing="0">
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>SECRETARY</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo select_tag('secretary',
				options_for_select($secList,
				$sf_params->get('secretary') ) );
				?></td>
				<td width="20%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>REVIEW</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo select_tag('review_by',
				options_for_select($revList,
				$sf_params->get('review_by') ) );
				?></td>
				<td width="20%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>		
					
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>VERIFY</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo select_tag('verify_by',
				options_for_select($verList,
				$sf_params->get('verify_by') ) );
				?></td>
				<td width="20%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>		
					
			<tr>
				<td class="FORMcell-right" nowrap>
				<td class="alignCenter FORMcell-right" nowrap></td>
				<td class="FORMcell-right" nowrap><input type="submit" name="save"
					value=" Save Info " class="submit-button"></td>
				<td colspan="3" class="FORMcell-right" nowrap></td>

			</tr>
		</table>
	
	</tr>
</table>
</div>
</form>

<div class="grid-toolbar-2">
<table>
	<tr>
		<td class="alignRight" nowrap>Record Sheet: #010</td>
	</tr>
	<tr>
		<td class="alignRight" nowrap><?php echo 'ISO Refs: MCS-QP-SYS-05' ?></td>
	</tr>
</table>
</div>


