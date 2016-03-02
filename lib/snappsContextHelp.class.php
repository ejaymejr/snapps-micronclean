<?php

class snappsContextHelp
{
    private $count;
    
    private function __construct()
    {
        $this->count = 0;
    }
    public static function title()
    {
        return 'User Guide';
    }
    public static function content()
    {
        $helpDir = SF_ROOT_DIR . '/doc/context/';
        
        $req = sfContext::getInstance()->getRequest();
        $app = SF_APP;
        $module = $req->getParameter('module');
        $action = $req->getParameter('action');
        
        $content = 'Documentation not found.';
        
        $filePath1 = $helpDir . $app . '_' . $module . '_' . $action . '.html';
        $filePath2 = $helpDir . $app . '_' . $module . '.html';
        $filePath3 = $helpDir . $app . '.html';
        
        //echo $filePath1 . $filePath2 . $filePath3;
        
        if (file_exists($filePath1) && !is_dir($filePath1)) {            
            $content =  file_get_contents($filePath1);            
        } else if (file_exists($filePath2) && !is_dir($filePath2)) {            
            $content =  file_get_contents($filePath2);            
        } else if (file_exists($filePath3) && !is_dir($filePath3)) {            
            $content =  file_get_contents($filePath3);            
        }      
        return $content;
    }
}