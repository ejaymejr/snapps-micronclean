<?php
$deptList = QrDepartmentPeer::GetDepartmentList($cust);
$sf_params->set('department', $dept);
echo select_tag('department',
options_for_select($deptList,
$sf_params->get('department') )
) ;