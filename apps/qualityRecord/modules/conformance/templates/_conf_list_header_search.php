<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td>&nbsp;</td>
    <td width="250">
    <?php //echo input_tag('date', $sf_params->get('date'), 'size="15"') ?>
     <?php echo HTMLForm::DrawDateInput('tos', $sf_params->get('tos'), XIDX::next(), XIDX::next(), 'size="11"');
           echo '&nbsp; to &nbsp;';
           echo HTMLForm::DrawDateInput('toe', $sf_params->get('toe'), XIDX::next(), XIDX::next(), 'size="11"') ;
     ?>
    </td>
    <td><?php echo input_tag('customer', $sf_params->get('customer'), 'size="20"') ?></td>
    <td><?php echo input_tag('company', $sf_params->get('company'), 'size="20"') ?></td>
    <td><?php echo input_tag('product_type', $sf_params->get('product_type'), 'size="20"') ?></td>
    <td><?php echo input_tag('quantity', $sf_params->get('quantity'), 'size="10"') ?></td>
    <td><?php echo input_tag('cost', $sf_params->get('cost'), 'size="10"') ?></td>
    <td><?php echo input_tag('vpc', $sf_params->get('vpc'), 'size="10"') ?></td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 
