<?php

/**
 * Subclass for representing a row from the 'sf_guard_user_profile' table.
 *
 * 
 *
 * @package plugins.sfGuardPlugin.lib.model
 */ 
class sfGuardUserProfile extends BasesfGuardUserProfile
{
    
    public function getSigninDestination()
    {
//        $id = $this->getHomepage();  
//        
//        $b = snappsBookmarkPeer::retrieveByPK($id);
//        
//        if (!$b) {
//            return '';
//        }
//        
//        $h = $b->getPath();
//        
//        if (strpos($h, '@') === 0) {
//            return $h;
//        }
//        
//        $url = sfConfig::get('http_intranet');
//        
//        return $url . $h;
    }
}
