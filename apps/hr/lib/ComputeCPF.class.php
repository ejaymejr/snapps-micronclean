<?php

class ComputeCPF
{

    function __construct()
    {
    }

    function __destruct()
    {
    }

    public function GetCPF($dt, $net, $age, $cpfyear)
    {
//    	$age += 1;
//    	var_dump($dt);
//    	var_dump($net);
//    	var_dump($age);
//    	$age = 34;
//    	var_dump(floatval($age));
//    	var_dump($cpfyear);
//    	exit();
//    	echo '<br>';
// 		var_dump($age);
// 		exit();
        $mess = '';
        $cpfRule = CpfGovtRulePeer::GetAllData($dt, $net, $age, $cpfyear);
//        var_dump($cpfRule);
//        exit();
        if (!$cpfRule)
        {
            return;
        }
        $net       = ($net > 5000)? 5000 : $net;
        $tcpf      = 0;
        $emcpf     = 0;
        $mess      = $mess . $cpfRule->getDescription();
        $erformula = ($cpfRule->getErFormula()) ? $cpfRule->getErFormula() : 0;
        $emformula = ($cpfRule->getEmFormula()) ? $cpfRule->getEmFormula() : 0;
        eval("\$tcpf  = $erformula;");
        eval("\$emcpf = $emformula;");
        $mess = array('total'=>round($tcpf), 'em_share'=>intval($emcpf), 'er_share'=>round($tcpf) - intval($emcpf), 'desc'=>$cpfRule->getDescription(), 'cpfyear'=>$cpfRule->getCpfYear());
//        var_dump($mess);
//        exit();
        return $mess;
    }
    






















} //class ends here