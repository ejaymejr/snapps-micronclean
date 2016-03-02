<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td>&nbsp;</td>
    <td>
    <?php //echo input_tag('date_time', $sf_params->get('date_time'), 'size="15"') ?>
             <?php echo HTMLForm::DrawDateInput('tos', $sf_params->get('tos'), XIDX::next(), XIDX::next(), 'size="11"');
           echo '&nbsp; to &nbsp;';
           echo HTMLForm::DrawDateInput('toe', $sf_params->get('toe'), XIDX::next(), XIDX::next(), 'size="11"') ;
     ?>
    </td>
    <td><?php echo input_tag('dryer_no', $sf_params->get('dryer_no'), 'size="50"') ?></td>
    <td><?php echo input_tag('particle_count', $sf_params->get('particle_count'), 'size="80"') ?></td>
    <td><?php echo input_tag('name', $sf_params->get('name'), 'size="50"') ?></td>
    <td><?php echo input_tag('temperature', $sf_params->get('temperature'), 'size="50"') ?></td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 
