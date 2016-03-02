<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td>&nbsp;</td>
    <td><?php echo input_tag('name', $sf_params->get('name'), 'size="10"') ?></td>
    <td><?php echo input_tag('leave_type', $sf_params->get('leave_type'), 'size="10"') ?></td>  
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>  
    
</tr> 
