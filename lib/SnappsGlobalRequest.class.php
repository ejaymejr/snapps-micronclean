<?php

class SnappsGlobalRequest extends sfWebRequest
{
    
    protected $errorMsg;
    protected $successMsg;
    protected $warningMsg;
    
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }
    public function getSuccessMsg()
    {
        return $this->successMsg;
    }
    public function getWarningMsg()
    {
        return $this->warningMsg;
    }
    
    public function SnappsGlobalRequest()
    {        
        $this->errorMsg = new MessageHandler();
        $this->successMsg = new MessageHandler();
        $this->warningMsg = new MessageHandler();
        
        sfConfig::set('http_intranet', 'http://orion.micronclean/');
//        sfConfig::set('http_intranet', 'http://app.micronclean/micronclean/');
//		sfConfig::set('app_upload_resource_include_uploader_file',
//			 'http://orion.micronclean/reject/uploader/phpuploader/include_phpuploader.php' 
//		);        
        //sfConfig::set('http_intranet', 'https://www.microncleansingapore.com/orion/');
        
        //sfConfig::set('htopt_company', snappsCompanyPeer::GetCompanyOptions());
        
//        $tmp = sfConfig::get('htopt_company');
//        if (array_key_exists('-1', $tmp)) {
//            $tmp["-1"] = '- Company -';
//            sfConfig::set('htopt_company_filter', $tmp);
//        }
        
        //sfConfig::set('company_nicknames', snappsCompanyPeer::GetCompanyNicknames());
        //sfConfig::set('company_initials', snappsCompanyPeer::GetCompanyInitials());
        
        
        //sfConfig::set('htopt_category', AccountCategoryPeer::GetCategoryOptions());
        
        //sfConfig::set('htopt_currency', snappsCurrencyPeer::GetCurrencyOptions());  
        
        
        sfConfig::set('htopt_user', UserTools::GetUserOptions());
        $tmp = sfConfig::get('htopt_user');
        if (array_key_exists('-1', $tmp)) {
            $tmp["-1"] = '- Creator -';
            sfConfig::set('htopt_user_filter', $tmp);
        }        
    }
    
    public function getModuleAction()
    {
        return $this->getParameter('module') . '/' .
                $this->getParameter('action');
                
    }
    
}