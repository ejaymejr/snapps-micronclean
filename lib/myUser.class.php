<?php

class myUser extends sfGuardSecurityUser
{
    function __toString()
    {        
        return $this->getGuardUser()->getProfile()->getFirstName() . ' ' .
            $this->getGuardUser()->getProfile()->getLastName();
    }
    
    public function signIn($user, $remember = false, $con = null)
    {       
        parent::signIn($user, $remember, $con);
        sfConfig::set('app_sf_guard_plugin_success_signin_url', 
            $this->getGuardUser()->getProfile()->getSigninDestination());

    }
}
