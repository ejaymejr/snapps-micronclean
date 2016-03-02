<?php use_helper('Validation', 'Javascript') ?>

<form name="FORMadd" id="IDFORMadd" action="<?php echo url_for('leave/leaveCreditAdd'). '?id=' . $sf_params->get('id');?>" method="post">
<table width="100%" class="FORMtable" border="0" cellpadding="4" cellspacing="0">
<tr>
    <td class="FORMcell-left FORMlabel">&nbsp;</td>
    <td class="FORMcell-right" nowrap>
    </td>
</tr>
<tr>
    <td class="FORMcell-left FORMlabel">Employee No</td>
    <td class="FORMcell-right" nowrap>
    <?php
        echo HTMLForm::Error('employee_no'); 
        echo select_tag('employee_no', 
             options_for_select(HrEmployeePeer::GetEmployeeNameList(), 
             $sf_params->get('employee_no') ) );    
    ?>
    <span class="negative">*</span>
    </td>
</tr>

<tr>
<tr>
    <td class="FORMcell-left FORMlabel" nowrap></td>
    <td class="FORMcell-right" nowrap>
    <input type="submit" name="save" value=" Compute Leave Credits " class="submit-button">
    </td>
</tr>
</table>
</form>

