<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td>&nbsp;</td>
    <td><?php echo input_tag('customer', $sf_params->get('customer'), 'size="15"') ?></td>
    <td><?php echo input_tag('contract_no', $sf_params->get('contract_no'), 'size="50"') ?></td>
    <td><?php echo input_tag('remarks', $sf_params->get('remarks'), 'size="80"') ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 
