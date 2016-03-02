<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td>&nbsp;</td>
    <td><?php echo input_tag('employee_no', $sf_params->get('employee_no'), 'size="15"') ?></td>
    <td><?php echo input_tag('name', $sf_params->get('name'), 'size="30"') ?></td>
    <td><?php
//    echo HTMLForm::DrawDateInput('tis', $sf_params->get('tis', date(sfConfig::get('fiscal_year').'-01-01')), XIDX::next(), XIDX::next(), ' size="12" ');
//    echo '<br>to<br>';
//    echo HTMLForm::DrawDateInput('tie', $sf_params->get('tie', date(sfConfig::get('fiscal_year').'-12-31')), XIDX::next(), XIDX::next(), ' size="12" ');
     ?>
    </td>
    <td><?php echo input_tag('leave_type', $sf_params->get('leave_type'), 'size="15"') ?></td>
    
    <td><?php //echo input_tag('status', $sf_params->get('status'), 'size="30"') ?></td>
    <td><?php //echo input_tag('status', $sf_params->get('status'), 'size="30"') ?></td>    
    <td><?php //echo input_tag('remarks', $sf_params->get('remarks'), 'size="30"') ?></td>    
    <td><?php echo input_tag('entitled', $sf_params->get('entitled'), 'size="15"') ?></td>    
	<td>&nbsp;</td>
	<td>&nbsp;</td>        
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 
