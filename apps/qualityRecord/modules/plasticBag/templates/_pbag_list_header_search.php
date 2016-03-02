<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td>&nbsp;</td>
    <td>
    <?php //echo input_tag('date', $sf_params->get('date'), 'size="15"') ?>
                     <?php echo HTMLForm::DrawDateInput('tos', $sf_params->get('tos'), XIDX::next(), XIDX::next(), 'size="11"');
           echo '&nbsp; to &nbsp;';
           echo HTMLForm::DrawDateInput('toe', $sf_params->get('toe'), XIDX::next(), XIDX::next(), 'size="11"') ;
     ?>
    </td>
    
    <td><?php echo input_tag('type_of_plastic', $sf_params->get('type_of_plastic'), 'size="15"') ?></td>
    <td><?php echo input_tag('by_who', $sf_params->get('by_who'), 'size="20"') ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo input_tag('status', $sf_params->get('status'), 'size="15"') ?></td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 
