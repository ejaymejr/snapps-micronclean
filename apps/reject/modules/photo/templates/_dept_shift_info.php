<?php use_helper('Validation', 'Javascript') ?>
<?php 
$deptList = $deptList? $deptList : array();
$shiftList = $shiftList ? $shiftList : array();
$whatever = 0;
/* reinitialize all the variables */
foreach($deptList as $deptinit => $whatever):
	foreach($shiftList as $shiftinit  => $whatever):
		$shiftVar = 'shift_'.$deptinit . '_' .$shiftinit; 
		$sf_params->set($shiftVar, false);
	endforeach;
endforeach;

$emailToDept = EmailToDeptPeer::GetDataByEmailByCompany($sf_params->get('cemail_address'), $sf_params->get('customer'));
foreach($emailToDept as $r):
	$dept = RejectDepartmentAttrPeer::GetIdByName($r->getCompany(), $r->getDepartment());
	$shift = RejectShiftAttrPeer::GetIdByName($r->getCompany(), $r->getShift());
	//echo $r->getCompany() .' | ' .  $r->getDepartment() .'<br>';
	
	$shiftVar = 'shift_'.$dept . '_' .$shift; 
	$sf_params->set($shiftVar, true);
	$emailContact = EmailContactPeer::GetDataByEmail($sf_params->get('cemail_address'));
	$isAllShift = EmailContactPeer::IsAllShift($emailContact->getName(), $r->getEmailAddress(), $r->getDepartment() );
	$sf_params->set('all_shift_'.$dept, $isAllShift);
 endforeach;

?>
<div class="panel" data-role="panel">
<div class="panel-header bg-darkOrange fg-white">
DEPARTMENT SHIFT 
</div>
	<div class="panel-content">
	<div id="nestedList">
	   <ol>
	   	  <?php foreach($deptList as $dept=>$deptName):?>
		   	  <li><?php echo $deptName?>
		         <ol>
		         	<?php foreach($shiftList as $shift=>$shiftName):?>
		         	<?php $shiftVar = 'shift_'.$dept . '_' .$shift; ?>
		            <li><?php echo checkbox_tag($shiftVar, 1, $sf_params->get($shiftVar) ).' '. $shiftName ?>
			            <?php 
			            $extraparm = 'shift='.$shift .'&dept='.$dept;
			            echo AjaxLib::AjaxScript($shiftVar, 'photo/ajaxUpdateEmail', 'customer,cemail_address,cname,cwebsite,'.$shiftVar,$extraparm,'deptShiftPermission') ?>
			        </li>
		            <?php endforeach;?>
		             <li><?php 
		             	$extraparm = 'shift=ALL' .'&dept='.$dept;
		            	echo AjaxLib::AjaxScript('all_shift_'.$dept, 'photo/ajaxUpdateEmail', 'customer,cemail_address,cname,cwebsite',$extraparm,'deptShiftPermission');
		             	echo checkbox_tag('all_shift_'.$dept, 1 , $sf_params->get('all_shift_'.$dept) ); ?> 
		             	ALL SHIFT</li>
		         </ol>
		      </li>
	   	  <?php endforeach;?>
	   </ol>
	</div>			
<!--	<button type="submit" class="default"><i class="icon-floppy"></i> Save Email Information</button>-->
	</div>
</div>
</div>