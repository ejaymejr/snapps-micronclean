<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td>&nbsp;</td>
    <td>
    <?php //echo input_tag('repair_date', $sf_params->get('repair_date'), 'size="15"') ?>
    <?php echo HTMLForm::DrawDateInput('tos', $sf_params->get('tos'), XIDX::next(), XIDX::next(), 'size="11"');
           echo '&nbsp; to &nbsp;';
           echo HTMLForm::DrawDateInput('toe', $sf_params->get('toe'), XIDX::next(), XIDX::next(), 'size="11"') ;
     ?>
    </td>
    <td><?php echo input_tag('customer', $sf_params->get('customer'), 'size="15"') ?></td>
    <td><?php echo input_tag('department', $sf_params->get('department'), 'size="15"') ?></td>
    <td><?php echo input_tag('garment', $sf_params->get('garment'), 'size="15"') ?></td>
    <td><?php echo input_tag('repair_type', $sf_params->get('repair_type'), 'size="15"') ?></td>
    <td><?php echo input_tag('remarks', $sf_params->get('remarks'), 'size="15"') ?></td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 
