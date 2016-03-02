<?php
class hrPager
{
	public static function LeaveSearch($pager)
	{
		$editDel = "";
		$data = array();
		$seq = 0;
		foreach ($pager as $record):
			$seq ++ ;
			$editUrl  = link_to('Edit', '?id='. $record->getId());
			$delUrl   = link_to('Delete', '?id='. $record->getId(),
                    	array('confirm' => 'Sure to delete this record?')); 
			$editDel = $editUrl . ' | ' . $delUrl ;
			$data[] = array(
					  'seq'=>'<small>'.$seq.'</small>'
					, 'name'=>'<small>'.$record->getName().'</small>'
					, 'leave'=> '<small>'.$record->getLeaveType().'</small>'
					, 'from'=> '<small>'.$record->getInclusiveDateFrom().'</small>'
					, 'to'=> '<small>'. $record->getInclusiveDateTo() .'</small>'
					, 'no_days'=> '<small>'. $record->getNoDays().'</small>'
					, 'is_verified'=> '<small>'. $record->getVerifiedBy().'</small>'
					, 'is_approved'=> '<small>'. $record->getApprovedBy().'</small>'
					
			);
		endforeach;
		return $data;
	}
	
	public static function LeaveApproval($pager)
	{
		$editDel = "";
		$data = array();
		$seq = 0;
		foreach ($pager as $record):
			$seq ++ ;
			$screenIcon =  '<div class="alignCenter"><i class="icon-screen on-right on-left bg-green"
							style="color: white;
							padding: 10px;
							border-radius: 50%"></i></div>';
			
			$pencilIcon =  '<div class="alignCenter"><i class="icon-pencil on-right on-left bg-orange"
							style="color: white;
							padding: 10px;
							border-radius: 50%"></i></div>';
			$approval = $approveUrl  = link_to($screenIcon, 'leave/leaveApplyDatePrint?id='. $record->getId());
			$verify = $approveUrl  = link_to($screenIcon, 'leave/leaveApplyDatePrintVerify?id='. $record->getId());
//			$delUrl   = link_to('Delete', 'airparticle/microncleanParticleDelete?id='. $record->getId(),
//                    	array('confirm' => 'Sure to delete this record?')); 
//			$editDel = $editUrl . ' | ' . $delUrl ;
			$chkboxID = 'chkbox_' . $record->getId();
			$chkbox = '';
			if (! HrEmployeeLeaveSignaturePeer::IsApprovalSigned($record->getId())):
				//$chkbox = HTMLLib::CreateCheckBox($chkboxID, '');
				$approval =  link_to($pencilIcon, 'leave/leaveApplyDatePrint?id='. $record->getId());
			endif;
			if (! HrEmployeeLeaveSignaturePeer::IsVerifiedSigned($record->getId())):
				$verify =  link_to($pencilIcon, 'leave/leaveApplyDatePrintVerify?id='. $record->getId());
			endif;
			
			$data[] = array(
					  'seq'=>'<small>'.$seq.'</small>'
					, 'sign'=>'<small>'.$chkbox.'</small>'
					, 'name'=>'<small>'.$record->getName().'</small>'
					, 'leave'=> '<small>'.$record->getLeaveType().'</small>'
					, 'from'=> '<small>'.$record->getInclusiveDateFrom().'</small>'
					, 'to'=> '<small>'. $record->getInclusiveDateTo() .'</small>'
					, 'no_days'=> '<small>'. $record->getNoDays().'</small>'
					, 'is_verified'=> '<small>'. $verify.'</small>'
					, 'is_approved'=> '<small>'. $approval.'</small>'
					
			);
		endforeach;
		return $data;
	}
}