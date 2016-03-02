<?php

class snappsGlobalHTMLPathFilter extends sfFilter
{
    
    public function execute ($filterChain)
    {                
        if ($this->isFirstCall())
        {        
            
        } 
            
        $filterChain->execute();
    
        $response = $this->getContext()->getResponse();        
        
        $content = $response->getContent();
        
        $globalPaths = array('css', 'js', 'images');
        
        
        $root = sfConfig::get('http_intranet');
        $roots = explode('http://', $root);
        
        //$roots = explode('https://', $root);
        //var_dump($roots);
        
        $firstSlash = strpos($roots[1], '/');
        //var_dump($roots);
        $root = substr($roots[1], $firstSlash);
        //echo $root;
        $root = str_replace('/', '\/', $root);
            
        foreach ($globalPaths as $p) {
            
            $patterns = array ('/(' . $root . ')(' . SF_APP . ')\/(' . $p . '\/)/');
            //echo $patterns[0];
            $replace = array ('\1\3');
            $content =  preg_replace($patterns, $replace, $content);

            $response->setContent($content);            
        }
    }
}