<?php

class UserTools
{
    public static function GetFullName($username)
    {
        $fullname = $username;
        $c = new Criteria();
        $c->add(sfGuardUserPeer::USERNAME, $username);
        $user = sfGuardUserPeer::doSelectOne($c);
        if ($user) {            
            $profile = $user->getProfile();            
            if ($profile) {
                $fullname =  $profile->getFirstName() . ' ' .
                                $profile->getLastName();
            }
        }
        return $fullname;
    }
    
    
    public static function GetUserOptions()
    {
        $tmplist = array();
        $connection = Propel::getConnection("sfguard");
        $query = "
            SELECT DISTINCT(a.username)
            FROM sf_guard_user a ";
        $statement = $connection->prepareStatement($query);
        $resultset = $statement->executeQuery();

        while ($resultset->next()) {
            $tmplist[] = $resultset->getString('username');
        }

        $list = array();
        $list['-1'] = '- Select -';
        if (sizeof($tmplist)) {
            foreach ($tmplist as $tmp) {
                $list[$tmp] = $tmp;
            }
        }
        return $list;
    }


    
}