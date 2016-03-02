<?php

class snappsFilter extends sfFilter
{
    
    public function execute ($filterChain)
    {                
        if ($this->isFirstCall())
        {
            $request = $this->getContext()->getRequest();
            $user = $this->getContext()->getUser();
            
            $defaultCumulative = $user->getAttribute('cumulative', 0);
            $cumulative = $request->getParameter('cumulative', $defaultCumulative);
            $user->setAttribute('cumulative', $cumulative); 

            
            
        } 
            
        $filterChain->execute();
    
    
        // remove all prototype js
        $proto = sfConfig::get('sf_prototype_web_dir').'/js';
        $response = $this->getContext()->getResponse();
        $js = $response->getParameterHolder()->getAll('helper/asset/auto/javascript');
        foreach ($js as $j => $value) {
            if (strpos($j, $proto) !== false) {
                $response->getParameterHolder()->remove($j, 'helper/asset/auto/javascript');
            }
        }        
        
        
        // remove all prototype css
        $proto = sfConfig::get('sf_prototype_web_dir').'/css';
        $response = $this->getContext()->getResponse();
        $css = $response->getParameterHolder()->getAll('helper/asset/auto/stylesheet');
        foreach ($css as $c => $value) {
            if (strpos($c, $proto) !== false) {
                $response->getParameterHolder()->remove($c, 'helper/asset/auto/stylesheet');
            }
        }        
    }
}