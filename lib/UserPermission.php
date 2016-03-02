<?php

class UserPermission
{
	//supervisor = supervisor
	//storemanager = can perform anything except mcs function
	//admin = can perform anything
		
    var $data = array();
    var $sql = "";
    var $conn = "";
    var $result;
    var $dbname;
    var $datacount;

	function _construct()
	{
	}
    

    function __destruct(){
        unset($this->conn);
        unset($this->sql);
        unset($this->dbname);
        unset($this->data);
        unset($this->result);
    }

	public static function DoSQL($db, $sql)
	{
		$con = Propel::getConnection($db);
		$stmt = $con->PrepareStatement($sql);
		$rs = $stmt->executeQuery(ResultSet::FETCHMODE_ASSOC);
		return $rs;
	}
	
	public static function GetPermission($userID)
	{
		//obsolete donot use this
		$rs = self::DoSQL("sfguard",
			"select * from sf_guard_permission a, sf_guard_user_permission b
			 where a.id = b.permission_id 
			 and b.user_id = ".$userID."
			 and (a.name like '%philipsHanger%' or a.name = 'admin' )
			 
			" 
		);		
		while ($rs->next() ) {
			return $rs->get('name');
		}		
	}

	public static function IsPhilipsHangerStoreManager($userID = null)
	{
		$userID = sfContext::getInstance()->getUser()->getProfile()->getUserId();
	
		$rs = self::DoSQL("sfguard",
			"select * from sf_guard_permission a, sf_guard_user_permission b
			 where a.id = b.permission_id 
			 and b.user_id = ".$userID."
			 and a.name like '%philipsHangerStoreManager%'
			" 
		);		
		while ($rs->next() ) {
			return $rs->get('name');
		}		
	}	
	
	public static function IsPhilipsHangerAdmin($userID = null)
	{
		if (!$userID):
			$userID = sfContext::getInstance()->getUser()->getProfile()->getUserId();
		endif;
		$rs = self::DoSQL("sfguard",
			"select * from sf_guard_permission a, sf_guard_user_permission b
			 where a.id = b.permission_id 
			 and b.user_id = ".$userID."
			 and a.name like '%philipsHangerAdmin%'
			" 
		);		
		while ($rs->next() ) {
			return $rs->get('name');
		}		
	}	
	
	public static function IsPhilipsHangerSupervisor($userID = null)
	{
		$userID = sfContext::getInstance()->getUser()->getProfile()->getUserId();
		$rs = self::DoSQL("sfguard",
			"select * from sf_guard_permission a, sf_guard_user_permission b
			 where a.id = b.permission_id 
			 and b.user_id = ".$userID."
			 and (a.name like '%philipsHangerSupervisor%' or a.name = 'admin')
			" 
		);		
		while ($rs->next() ) {
			return $rs->get('name');
		}		
	}	
	
	public static function GetPhilipsHangerUsers()
	{
		//$userID = sfContext::getInstance()->getUser()->getProfile()->getUserId();
		$rs = self::DoSQL("sfguard",
			"select * from sf_guard_user where is_super_admin = 0" 
		);		
		$list = array();
		while ($rs->next() ) {
			$list[ $rs->get('id')] = $rs->get('username');
		}		
		return $list;
	}
	
	public static function GetUserEmail()
	{
		$userID = sfContext::getInstance()->getUser()->getProfile()->getUserId();
		$rs = self::DoSQL("sfguard",
			"select * from sf_guard_user_profile a, sf_guard_user b
			 where a.user_id = ".$userID."
			 limit 1;
			" 
		);		
		while ($rs->next() ) {
			return $rs->get('email');
		}		
	}	
}   //------------------- class ends here



