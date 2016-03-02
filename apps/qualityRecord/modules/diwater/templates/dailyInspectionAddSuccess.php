<?php use_helper('Validation', 'Javascript') ?>


<form name="FORMadd" id="IDFORMadd" action="<?php echo url_for('diwater/dailyInspectionAdd'). '?id=' . $sf_params->get('id');?>" method="post">
<table width="100%" class="FORMtable" border="0" cellpadding="4" cellspacing="0">

<tr>
		<td width="10%" class="FORMcell-right" nowrap>
	    <td width="100" class="FORMcell-left FORMlabel" nowrap>INSPECTION DATE</td>
	    <td width="10%" class="FORMcell-right" nowrap>
	    <?php
	    echo HTMLForm::DrawDateInput('inspection_date', $sf_params->get('inspection_date', date('Y-m-d')), XIDX::next(), XIDX::next(), ' size="12" '); ?>
	    <td colspan="3" class="FORMcell-right" nowrap></td>
</tr>


<?php
//echo $sf_params->get('TEMPERATURE') .'<--- TEMP';
//$info = InspectionFieldListPeer::GetFieldList();


$fCount = sizeof($info['field_name']); //field Count
$eCount = ($fCount / 2); //element Count
$lCount = intval($eCount) + (($eCount - intval($eCount)) ? 1 : 0);
for ($pos=0; $pos < $lCount; $pos++)
{
	$ypos = (( $lCount + $pos ) <= $fCount - 1)? $lCount + $pos  : $fCount - 1;
 
?>
	<tr>
		<td width="10%" class="FORMcell-right" nowrap>
	    <td width="100" class="FORMcell-left FORMlabel" nowrap><?php echo str_replace('_', ' ', $info['field_name'][$pos]) .' '. $info['remark'][$pos] ?></td>
	    <td width="100" class="FORMcell-right" nowrap>
	    <?php
	        echo HTMLForm::Error('field'.$info['id'][$pos]); 
			include_partial('diwater/gettagtype', array('fldId'=>$info['id'][$pos], 'fldType'=>$info['field_type'][$pos]) ); 
		?>    
	    <span class="negative">* &nbsp;&nbsp; </span>
	    </td>
	    
	    
	    <td width="100" class="FORMcell-left FORMlabel" nowrap><?php echo str_replace('_', ' ', $info['field_name'][$ypos]) .' '. $info['remark'][$ypos] ?></td>
	    <td width="100" class="FORMcell-right" nowrap>	    
	    <?php
			echo HTMLForm::Error('field'.$info['id'][$ypos]); 
			include_partial('diwater/gettagtype', array('fldId'=>$info['id'][$ypos], 'fldType'=>$info['field_type'][$ypos]) ); 
		?>    
	    <span class="negative">* &nbsp;&nbsp; </span>		
		<td width="100%" class="FORMcell-right" nowrap>
	</tr>
<?php
}
?>
<tr>
	<td width="10%" class="FORMcell-right" nowrap>
    <td width="100" class="FORMcell-left FORMlabel" nowrap>CHECKED BY:</td>
    <td width="100" class="FORMcell-right" nowrap>
    <?php
    $user = array( 'MEIZHEN'=>'MEIZHEN',
    			  'PARI'=>'PARI', 
				  'REYNAN'=>'REYNAN',
    			  'OTHERS'=>'OTHERS');
    echo HTMLForm::Error('checked_by'); 
    echo select_tag('checked_by', 
             options_for_select($user, 
             $sf_params->get('checked_by') ) );    
    ?>
    
    <td colspan="3" class="FORMcell-right" nowrap>
</tr>
<tr>
	<td width="10%" class="FORMcell-right" nowrap>
    <td width="100" class="alignCenter FORMcell-right" nowrap></td>
    <td width="100" class="FORMcell-right" nowrap>
    <input type="submit" name="save" value=" Save Info " class="submit-button">    
    </td>
    <td colspan="3" class="FORMcell-right" nowrap>
</tr>
</table>
</form>

<div class="grid-toolbar-2">
<table>
  <tr>
    <td width="10%" class="alignRight" nowrap>Record Sheet #029 Rev 002 </td>
  </tr>
  <tr>
    <td width="10%" class="alignRight" nowrap>ISO Refs: <?php echo link_to('WI006','http://sym.micronclean/isodoc/wi/Micronclean/WI006rev001_20011126_wash_and_decontamination.pdf')?></td>
  </tr>  
</table>
</div>
