<!-- 
<tr class="dataGridTableHeaderColumn">
    <td colspan="5">Record <?php echo $pager->getFirstIndice() ?> to <?php echo $pager->getLastIndice() ?>
    </td>
</tr>
-->
<?php include_partial('pager_list', array('pager' => $pager)) ?>