<?php

class SnappsRequest extends SnappsGlobalRequest
{
    function __construct()
    {
        parent::SnappsGlobalRequest();
        sfConfig::set('fiscal_year', HrFiscalYearPeer::getFiscalYear());
        if (!sfConfig::get('fiscal_year')){
        	$this->getWarningMsg()->addMsg('Fiscal Year Not Set...');
        	
        }
        sfconfig::set('monthlyCalendar', self::MonthlyCalendar(sfConfig::get('fiscal_year')));
        sfconfig::set('race', array('CHINESE'=>'CHINESE', 'INDIAN'=>'INDIAN', 'MALAY'=>'MALAY', 'OTHERS'=>'OTHERS' ));
        sfconfig::set('compGroup', array('Acro Solution', 'Micronclean', 'NanoClean', 'T.C. Khoo') );
        sfconfig::set('companies', array('Acro Solution'=>'Acro Solution', 'Micronclean'=>'Micronclean', 
        			                     'NanoClean'=>'NanoClean', 'T.C. Khoo'=>'T.C. Khoo') );
        sfconfig::set('MCSTeam', array(
        				'js'=>'Jumpsuit', 'jw'=>'jw', 'jpc'=>'jpc', 'jpn'=>'jpn', 'jl'=>'jl', 'jsew'=>'bs',
        				'bw'=>'bw', 'bp'=>'bp'	
        			 ));
        //sfconfig::set('years', array('2008'=>'2008', '2009'=>'2009', '2010'=>'2010', '2011'=>'2011'));
        sfConfig::set('years', HrFiscalYearPeer::GetFiscalYearList());        
    }
    
    private function MonthlyCalendar($year)
    {
        return array(
        date('Y-m-d', mktime(1,1,1,1,1,$year))=>date('F', mktime(1,1,1,1,1,$year)),
        date('Y-m-d', mktime(1,1,1,2,1,$year))=>date('F', mktime(1,1,1,2,1,$year)),
        date('Y-m-d', mktime(1,1,1,3,1,$year))=>date('F', mktime(1,1,1,3,1,$year)),
        date('Y-m-d', mktime(1,1,1,4,1,$year))=>date('F', mktime(1,1,1,4,1,$year)),
        date('Y-m-d', mktime(1,1,1,5,1,$year))=>date('F', mktime(1,1,1,5,1,$year)),
        date('Y-m-d', mktime(1,1,1,6,1,$year))=>date('F', mktime(1,1,1,6,1,$year)),
        date('Y-m-d', mktime(1,1,1,7,1,$year))=>date('F', mktime(1,1,1,7,1,$year)),
        date('Y-m-d', mktime(1,1,1,8,1,$year))=>date('F', mktime(1,1,1,8,1,$year)),
        date('Y-m-d', mktime(1,1,1,9,1,$year))=>date('F', mktime(1,1,1,9,1,$year)),
        date('Y-m-d', mktime(1,1,1,10,1,$year))=>date('F', mktime(1,1,1,10,1,$year)),
        date('Y-m-d', mktime(1,1,1,11,1,$year))=>date('F', mktime(1,1,1,11,1,$year)),
        date('Y-m-d', mktime(1,1,1,12,1,$year))=>date('F', mktime(1,1,1,12,1,$year))
        );
    }
    


    
}

