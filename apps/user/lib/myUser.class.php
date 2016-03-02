<?php

class myUser extends sfGuardSecurityUser
{
    function __toString()
    {        
        return $this->getGuardUser()->getProfile()->getFirstName() . ' ' .
            $this->getGuardUser()->getProfile()->getLastName();
    }
}
