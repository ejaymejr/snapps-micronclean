<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td>&nbsp;</td>
    <td><?php echo input_tag('number', $sf_params->get('number'), 'size="20"') ?></td>
    <td><?php echo input_tag('name', $sf_params->get('name'), 'size="40"') ?></td>
    <td><?php echo input_tag('job_title', $sf_params->get('job_title'), 'size="30"') ?></td>
    <td><?php echo input_tag('email', $sf_params->get('email'), 'size="20"') ?></td>    
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 
