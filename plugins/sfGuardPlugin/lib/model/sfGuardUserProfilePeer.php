<?php

/**
 * Subclass for performing query and update operations on the 'sf_guard_user_profile' table.
 *
 * 
 *
 * @package plugins.sfGuardPlugin.lib.model
 */ 
class sfGuardUserProfilePeer extends BasesfGuardUserProfilePeer
{
	public static function GetEmailList($co = null)
	{
		$c = new Criteria();
		if ($co):
			$c->add(self::COMPANY, $co, Criteria::LIKE);
		endif;
		$c->addAscendingOrderByColumn(self::EMAIL);
		$rs = self::doSelect($c);
		$list = array(''=>' -Select Email- ', 'ejaymejr@gmail.com'=>'ejaymejr@gmail.com');
		foreach($rs as $r):
			$list[$r->getEmail()] = $r->getEmail();
		endforeach;
		return $list;
	}
}
