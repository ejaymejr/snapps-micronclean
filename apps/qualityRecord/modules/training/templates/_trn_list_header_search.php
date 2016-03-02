<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td width="5" >&nbsp;</td>
	<td width="120" >
     <?php echo HTMLForm::DrawDateInput('frst', $sf_params->get('frst'), XIDX::next(), XIDX::next(), 'size="11"');
           echo '&nbsp; to &nbsp;';
           echo HTMLForm::DrawDateInput('fren', $sf_params->get('fren'), XIDX::next(), XIDX::next(), 'size="11"') ;
     ?>
    </td>
    
	<td width="120">
     <?php echo HTMLForm::DrawDateInput('tost', $sf_params->get('tost'), XIDX::next(), XIDX::next(), 'size="11"');
           echo '&nbsp; to &nbsp;';
           echo HTMLForm::DrawDateInput('toen', $sf_params->get('toen'), XIDX::next(), XIDX::next(), 'size="11"') ;
     ?>
    </td>

    
    <td><?php echo input_tag('description', $sf_params->get('description'), 'size="20"') ?></td>
    <td><?php echo input_tag('place_held', $sf_params->get('place_held'), 'size="25"') ?></td>
    <td><?php echo input_tag('name_trainor', $sf_params->get('name_trainor'), 'size="50"') ?></td>
    <td><?php echo input_tag('no_hrs', $sf_params->get('no_hrs'), 'size="10"') ?></td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 

