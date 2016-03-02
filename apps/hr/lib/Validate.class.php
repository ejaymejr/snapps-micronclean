<?php

class Validate
{

    function __construct()
    {
    }

    function __destruct()
    {
    }

    public function GetCPF($dt, $net, $age, $cpfyear)
    {
        //echo $dt .' ** '. $net .' ** '. $age .'<br>';
        //$net = 502.5; 
        $mess = '';
        $cpfRule = CpfGovtRulePeer::GetAllData($dt, $net, $age, $cpfyear);
        if (!$cpfRule)
        {
            return;
        }
        $net       = ($net > 4500)? 4500 : $net;
        $tcpf      = 0;
        $emcpf     = 0;
        $mess      = $mess . $cpfRule->getDescription();
        $erformula = ($cpfRule->getErFormula()) ? $cpfRule->getErFormula() : 0;
        $emformula = ($cpfRule->getEmFormula()) ? $cpfRule->getEmFormula() : 0;
        eval("\$tcpf  = $erformula;");
        eval("\$emcpf = $emformula;");
        $mess = array('total'=>round($tcpf), 'em_share'=>intval($emcpf), 'er_share'=>round($tcpf) - intval($emcpf), 'desc'=>$cpfRule->getDescription(), 'cpfyear'=>$cpfRule->getCpfYear());

        return $mess;
    }
    






















} //class ends here