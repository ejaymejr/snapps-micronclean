<?php

$tmp = '';

$tmp .= "\n";
$tmp .= '<table class="fiscal-month" cellspacing="0">';
$tmp .= "\n";

$tmp .= '<tr class="fiscal-month-header">';   
$tmp .= "\n";     
$tmp .= '<td>WW</td>';
$tmp .= "\n";
$tmp .= '<td>S</td>';
$tmp .= "\n";
$tmp .= '<td>S</td>';
$tmp .= "\n";
$tmp .= '<td>M</td>';
$tmp .= "\n";
$tmp .= '<td>T</td>';
$tmp .= "\n";
$tmp .= '<td>W</td>';
$tmp .= "\n";
$tmp .= '<td>T</td>';
$tmp .= "\n";
$tmp .= '<td>F</td>';
$tmp .= "\n";

if (sizeof($fmonthTable->weekURL) > 1 && $fmonthTable->weekURL[1] != '') {  
    $tmp .= '<td>WW</td>';
    $tmp .= "\n";            
}
            
$tmp .= '</tr>';
$tmp .= "\n";

foreach ($fmonthTable->month->weeks as $week) {
    
    if (sizeof($fmonthTable->weekURL) > 0 && $fmonthTable->weekURL[0] != '' 
            && $week->dateEnd > sfConfig::get('app_inventory_cutoff_date')) {
                       
        $weekURL = $fmonthTable->weekURL[0] . $week->SN;
        $weekLink = link_to($week->SN, $weekURL, array('onclick' => 'return false;'));   
        //$weekLink = link_to($week->SN, $weekURL); 
        
        $onClickJS = ' onMouseDown="window.location=\'' . url_for($weekURL) . '\';" '; 
        $onHoverClass = ' calendar-cell-hoverable ';  
        
        $tmp .= '<tr class="fiscal-month-week">';   
        $tmp .= "\n"; 
        $tmp .= '<td class="week-sn' . 
                    $onHoverClass . '" ' . 
                    $onClickJS . '>' . 
                        $weekLink . '</td>';
        $tmp .= "\n"; 
    } else {
        $tmp .= '<tr class="fiscal-month-week">';   
        $tmp .= "\n"; 
        $tmp .= '<td class="week-sn">' . $week->SN. '</td>';
        $tmp .= "\n";                
    }
                
    foreach ($week->dates as $date) {                
        
        $dateNumber = $fmonthTable->formatDateNumber(substr($date, 8));
        
        $tdID = 'TDID' . str_replace('-', '', $date);
        
        $dateLink = $dateNumber;                
        
        $markClass = $fmonthTable->findMarkClass($date);
        
        $onClickJS = '';
        $onHoverClass = '';
        
        
        if ($date > sfConfig::get('app_inventory_cutoff_date') && $fmonthTable->dateURL != '') {
            
            $dateURL = $fmonthTable->dateURL . '&date=' . $date;
            $dateLink = link_to($dateNumber, $dateURL, array('onclick' => 'return false;'));    
            //$dateLink = $dateNumber;  
            
            $onClickJS = ' onMouseDown="window.location=\'' . url_for($dateURL). '\';" '; 
            $onHoverClass = ' calendar-cell-hoverable ';   
             
        }
        
        $tmp .= '<td 
                    class="' . $markClass . $onHoverClass . '" 
                    id="' . $tdID . '"' . 
                    $onClickJS . '>' . 
                    $dateLink . '</td>';
        $tmp .= "\n"; 
    }           
    
        
    if (sizeof($fmonthTable->weekURL) > 1 && $fmonthTable->weekURL[1] != '') {  

        if ($week->dateEnd > sfConfig::get('app_inventory_cutoff_date')) {
                           
            $weekURL = $fmonthTable->weekURL[1] . $week->SN;
            
            $chartIcon = image_tag('icons/barchart20x15-2.jpg');
            
            $weekLink = link_to($chartIcon, $weekURL, array('onclick' => 'return false;'));  
            //$weekLink = $chartIcon;  
            
            $onClickJS = ' onMouseDown="window.location=\'' . url_for($weekURL) . '\';" '; 
            $onHoverClass = ' calendar-cell-hoverable ';  
            
            $tmp .= '<td class="week-sn chart-icon-cell' . 
                        $onHoverClass . '" ' . 
                        $onClickJS . '>' . 
                            $weekLink . '</td>';
            $tmp .= "\n"; 
        } else {
            $tmp .= '<td class="week-sn">' . $week->SN. '</td>';
            $tmp .= "\n";                
        }           
    }
 
    $tmp .= '</tr>';
    $tmp .= "\n";
}

$totalWeeks = sizeof($fmonthTable->month->weeks);
if ($totalWeeks < $fmonthTable->maxWeeks) {
    for ($w =  $totalWeeks + 1; $w <= $fmonthTable->maxWeeks; $w++) {
        
        $tmp .= '<tr class="fiscal-month-week">';   
        $tmp .= "\n"; 
        $tmp .= '<td class="week-sn">&nbsp;</td>';
        $tmp .= "\n"; 
                    
        for ($d = 1; $d <= 7; $d++) {
            $tmp .= '<td>&nbsp;</td>';
            $tmp .= "\n"; 
        }                          
        if (sizeof($fmonthTable->weekURL) > 1 && $fmonthTable->weekURL[1] != '') {  
     
            $tmp .= '<td class="week-sn">&nbsp;</td>';
            $tmp .= "\n"; 
        }
        $tmp .= '</tr>';
        $tmp .= "\n";  
             
    }
}
$tmp .= '</table>';
$tmp .= "\n";

echo $tmp;