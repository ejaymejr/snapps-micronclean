<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td >&nbsp;</td>
    <td><?php echo input_tag('report_no', $sf_params->get('report_no'), 'size="10"') ?></td>
    <td><?php echo input_tag('title', $sf_params->get('title'), 'size="60"') ?></td>
    <td><?php echo input_tag('reported_by', $sf_params->get('reported_by'), 'size="10"') ?></td>
    <td >
     <?php //echo input_tag('initiated_date', $sf_params->get('initiated_date'), 'size="15"') ?>
     <?php echo HTMLForm::DrawDateInput('tos', $sf_params->get('tos'), XIDX::next(), XIDX::next(), 'size="11"');
           echo '&nbsp; to &nbsp;';
           echo HTMLForm::DrawDateInput('toe', $sf_params->get('toe'), XIDX::next(), XIDX::next(), 'size="11"') ;
     ?>
    </td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
</tr> 
