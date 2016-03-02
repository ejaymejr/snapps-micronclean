<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td>&nbsp;</td>
    <td>
    <?php //echo input_tag('initiated_date', $sf_params->get('initiated_date'), 'size="15"') ?>
                 <?php echo HTMLForm::DrawDateInput('tos', $sf_params->get('tos'), XIDX::next(), XIDX::next(), 'size="11"');
           echo '&nbsp; to &nbsp;';
           echo HTMLForm::DrawDateInput('toe', $sf_params->get('toe'), XIDX::next(), XIDX::next(), 'size="11"') ;
     ?>
    </td>
    
    <td><?php echo input_tag('auditor', $sf_params->get('auditor'), 'size="20"') ?></td>
    <td><?php echo input_tag('corrective_preventive_action_report_no', $sf_params->get('corrective_preventive_action_report_no'), 'size="20"') ?></td>    
    <td><?php echo input_tag('area_audited', $sf_params->get('area_audited'), 'size="50"') ?></td>
    <td>&nbsp;</td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 

