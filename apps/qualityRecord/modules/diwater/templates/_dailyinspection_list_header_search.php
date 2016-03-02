<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td>&nbsp;</td>
    <td class="alignCenter" >&nbsp;</td>
    <td width="300">&nbsp;</td>
    <td>
    <?php echo HTMLForm::DrawDateInput('tis', $sf_params->get('tos'), XIDX::next(), XIDX::next(), 'size="11"');
           echo '&nbsp; to &nbsp;';
           echo HTMLForm::DrawDateInput('tie', $sf_params->get('toe'), XIDX::next(), XIDX::next(), 'size="11"') ;
     ?>
    </td>
    <td class="alignCenter"><?php echo input_tag('checked_by', $sf_params->get('checked_by'), 'size="15"') ?></td>     
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 
