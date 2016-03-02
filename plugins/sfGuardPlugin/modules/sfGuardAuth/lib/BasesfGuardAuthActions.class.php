<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: BasesfGuardAuthActions.class.php 5003 2007-09-08 08:42:27Z fabien $
 */
class BasesfGuardAuthActions extends sfActions
{
  public function executeSignin()
  {
    $user = $this->getUser();
    if ($this->getRequest()->getMethod() == sfRequest::POST)
    {
      $referer = $user->getAttribute('referer', $this->getRequest()->getReferer());
      $user->getAttributeHolder()->remove('referer');

      $signin_url = sfConfig::get('app_sf_guard_plugin_success_signin_url', $referer);

      $this->redirect('' != $signin_url ? $signin_url : '@homepage');
    }
    elseif ($user->isAuthenticated())
    {
      $this->redirect('@homepage');
    }
    else
    {
      if (!$user->hasAttribute('referer'))
      {
        $user->setAttribute('referer', $this->getRequest()->getReferer());
      }

      $module = sfConfig::get('sf_login_module');
      if ($this->getModuleName() != $module)
      {
        $this->redirect($module.'/'.sfConfig::get('sf_login_action'));
      }
    }
  }

  public function executeSignout()
  {
    $this->getUser()->signOut();

    $signout_url = sfConfig::get('app_sf_guard_plugin_success_signout_url', $this->getRequest()->getReferer());

    $this->redirect('' != $signout_url ? $signout_url : '@homepage');
  }

  public function executeSecure()
  {
  }

  public function executePassword()
  {
    throw new sfException('This method is not yet implemented.');
  }

  public function handleErrorSignin()
  {
    $user = $this->getUser();
    if (!$user->hasAttribute('referer'))
    {
      $user->setAttribute('referer', $this->getRequest()->getReferer());
    }

    $module = sfConfig::get('sf_login_module');
    if ($this->getModuleName() != $module)
    {
      $this->forward(sfConfig::get('sf_login_module'), sfConfig::get('sf_login_action'));
    }

    return sfView::SUCCESS;
  }
  
  
	public function executePasswordChange()
	{
  		if($this->getRequest()->getMethod() != sfRequest::POST)
  		{

  		}
 	  	if($this->getRequest()->getMethod() == sfRequest::POST):
		    $cpassword = $this->_G("cpass"); //current pword
		    $npassword = $this->_G("npass"); //new pword
		    $cnpassword = $this->_G("cnpass"); //commit pword
	
	    	
	     	$this_user = $this->getUser()->getGuardUser(); //sfGuardUser Object
		    // if the current password matches the password saved in the database
		    if($this_user->checkPassword($cpassword)){
		    // if the new password has been entered twice correctly
		      if($npassword==$cnpassword)
		      {
		        	// the new password should be inserted in the password field in db
					$this_user->setPassword($npassword); 
		        	$this_user->save(); //update db 
		       	 	// set feedback message
		       	 	//hangerLib::ChangePasswordMail($this->_U(), $npassword);
		       	 	$this->_S("cpass", "");
		 			$this->_S("npass", "");
		 			$this->_S("cnpass", "");
					$this->_SUC('The password has been updated successfully. <br>Email Sent!');

		        }else{
			    	$this->_S("cpass", "");
			      	$this->_ERR('Password Does not Match!');		        	
		        }
		    }else{
		    	$this->_S("cpass", "");
	 			$this->_S("npass", "");
	 			$this->_S("cnpass", "");
		      	$this->_ERR('Current Password Incorrect');
		    }//endif
	    endif;
	  }
  
}
