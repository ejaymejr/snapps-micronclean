<?php

abstract class SnappsAction extends sfAction
{
    
    protected function _G($var, $default = null)
    {
        return $this->getRequestParameter($var, $default);
    }
    protected function _S($var, $val)
    {
        return $this->getRequest()->setParameter($var, $val);
    }
    protected function _ERR($text)
    {
        return $this->getRequest()->getErrorMsg()->addMsg($text);
    }
    protected function _ERF($text)
    {
        return $this->setFlash('errorMsg', $text);
    }
    protected function _SUC($text)
    {
        return $this->getRequest()->getSuccessMsg()->addMsg($text);
    }
    protected function _SUF($text)
    {
        return $this->setFlash('successMsg', $text);
    }
    protected function _WRN($text)
    {
        return $this->getRequest()->getWarningMsg()->addMsg($text);
    }
    protected function _WRF($text)
    {
        return $this->setFlash('warningMsg', $text);
    }
    
    protected function _U()
    {
        return $this->getUser()->getUsername();
    }
    protected function _UFN()
    {
        return $this->getUser()->getProfile()->getFirstName() . ' ' .
            $this->getUser()->getProfile()->getLastName();
    }
}