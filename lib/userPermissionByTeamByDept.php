<?php

class userPermissionByTeamByDept
{
    var $userDept = array();
    var $userTeam = array();

    function __construct($userID){
    	$permission = UserToDepartmentTeamPeer::GetUserPermission($userID);
    	$userDept = $permission["dept"];
    	$userDept = $permission["team"];
    }
    
    public static function isAllowed($dept, $team)
    {
    	$conf = false;
    	if (in_array($dept, $userDept) && in_array($dept, $userTeam)) {
    		$conf = true;
    	}
    	return $conf;
    }
    
    public static function showDept()
    {
    	var_dump($userDept);
    }
}
?>