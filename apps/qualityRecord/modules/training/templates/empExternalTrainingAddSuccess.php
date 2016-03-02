<?php use_helper('Validation', 'Javascript') ?>
<?php
    $empList = HrEmployeeMasterPeer::GetEmpList();
    $trList = HrTrainingPeer::GetTrainingList();
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('training/empExternalTrainingAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"	cellspacing="0">
	<tr><td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr><td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>EMPLOYEE EXTERNAL TRAINING DATA SHEET</H2></span></td></tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>EMPLOYEE</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('employee_no');
		        echo select_tag('employee_no',
				options_for_select($empList,
				$sf_params->get('employee_no') )   
				) ;
				?><span class="negative"> if employee not found on the list, click </span><input type="submit" name="rebuild"
					value=" Rebuild " class="submit-button"></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>TRAINING LIST</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				$qParams = "'trId=' + \$F('hr_training_id')";
                $ajaxOption = array(
                    'url'      => 'training/trainingInfo?id='.$sf_params->get('id'),
                	'with'     => $qParams,
                    'update'   => 'DIVtrainingInfo',
                    'script'   => true,
                    'loading'  => 'stop_remote_pager();',
                    'before'   => 'showLoader();',
                    'complete' => 'hideLoader();formatFormStyle();',
                    'type'     => 'synchronous',
                );				
                echo HTMLForm::Error('hr_training_id');
		        echo select_tag('hr_training_id',
				options_for_select($trList,
				$sf_params->get('hr_training_id') ), array('onchange'=>remote_function($ajaxOption) . ';clearField(this.form);return false; ')  
				) ;
								
				?>
			</tr>
			</table>
			<div id="DIVtrainingInfo">
				<?php
				   $id = $sf_params->get('id');
				   if ($id){
                        $rec = HrTrainingDevelopmentPeer::retrieveByPK($id);
                        $sf_params->set('description', $rec->getDescription());
                        $sf_params->set('description', $rec->getDescription());
                        $sf_params->set('place_held', $rec->getPlaceHeld());
                        $sf_params->set('date_from', $rec->getDateFrom());
                        $sf_params->set('date_to', $rec->getDateTo());
                        $sf_params->set('name_trainor', $rec->getNameTrainor());
                        $sf_params->set('license_no', $rec->getLicenseNo());
                        $sf_params->set('no_hrs', $rec->getNoHrs());
                        $sf_params->set('remarks', $rec->getRemarks());
                        
                        include_partial('training_data', array('id'=>$id));
				   }
				?>
			</div>
			
			<table width="100%" class="FORMtable" border="0" cellpadding="4"cellspacing="0">
			<tr>
				<td class="FORMcell-right" nowrap>
				<td class="alignCenter FORMcell-right" nowrap></td>
				<td class="FORMcell-right" nowrap><input type="submit" name="save"
					value=" Save Info " class="submit-button"></td>
				<td colspan="3" class="FORMcell-right" nowrap>
			</td>
			</tr>			
		</table>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>
	<div class="grid-toolbar-right alignRight" >
        <?php 
            echo '<b>'; 
            echo 'Record Sheet:</b> #062';
            echo '<br>';
            echo '<b>ISO Refs:</b>  WI030rev001   WI042rev002   WI250rev004';
        ?>
	</div></td></tr>	
</table>
</div>
</form>

