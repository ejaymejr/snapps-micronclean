<?php

/**
 * user actions.
 *
 * @package    snapps
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class userActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
    $this->forward('sfGuardUser', 'index');
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
