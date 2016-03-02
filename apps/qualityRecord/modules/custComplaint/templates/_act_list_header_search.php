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
    <td><?php echo input_tag('case_action', $sf_params->get('case_action'), 'size="50"') ?></td>
    <td><?php echo input_tag('reviewed_by', $sf_params->get('reviewed_by'), 'size="80"') ?></td>
    <td><?php echo input_tag('review_date', $sf_params->get('review_date'), 'size="50"') ?></td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 
