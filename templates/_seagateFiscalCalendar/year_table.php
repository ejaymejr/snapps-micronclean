<table style="margin: auto">
<tr>
    <?php for($month = 1; $month <= 12; $month++){ ?>

        <td style="vertical-align: top">
            <?php
            $fmonthTable = new SeagateFiscalMonthTable($fyTable->fcal->months[$month - 1], $fyTable->dateURL, $fyTable->weekURL, $fyTable->dateMarks);
            
            /*
            $startDate = $fyTable->fcal->dateStart;            
            $startYYYY = substr($startDate, 0, 4);
            $startMM = substr($startDate, 5, 2);
            $startDD = substr($startDate, 8, 2);
            $monthName = date('F Y', mktime(1, 1, 1, $fyTable->fcal->monthStart + ($fyTable->fcal->months[$month - 1]->SN - 1), $startDD, $startYYYY));
            $quarterName = 'Q' . $fyTable->fcal->findQuarter($fyTable->fcal->months[$month - 1]);
            */
                        
            $virtualMonthSN = $fyTable->fcal->monthStart + ($fyTable->fcal->months[$month - 1]->SN - 1);
            $startDate = $fyTable->fcal->dateStart;            
            $startYYYY = substr($startDate, 0, 4);
            $startMM = substr($startDate, 5, 2);
            $startDD = substr($fyTable->fcal->months[$fyTable->fcal->months[$month - 1]->SN - 1]->weeks[2]->dateStart, 8, 2);
            $monthName = date('F Y', mktime(1, 1, 1, $virtualMonthSN, $startDD, $startYYYY));
            $quarterName = 'Q' . $fyTable->fcal->findQuarter($fyTable->fcal->months[$month - 1]);

            
            // echo $fyTable->fcal->months[$month - 1]->SN;
            echo '<h2 class="cal-month-name">' . $monthName . ' (' . $quarterName . ')</h2>';
                    
            
            $monthDetailLink = '';
            $monthTrendLink = '';
            if (sizeof($fyTable->monthURL) > 0 && $fyTable->monthURL[0] != '' 
                    && $fyTable->fcal->months[$month - 1]->dateEnd > sfConfig::get('app_inventory_cutoff_date')) {
                        
                $monthDetailURL = $fyTable->monthURL[0] . $fyTable->fcal->months[$month - 1]->SN;
                $monthDetailLink = link_to('View Detail', $monthDetailURL);                
            }
            if (sizeof($fyTable->monthURL) > 0 && $fyTable->monthURL[1] != '' 
                    && $fyTable->fcal->months[$month - 1]->dateEnd > sfConfig::get('app_inventory_cutoff_date')) {
                        
                $monthTrendURL = $fyTable->monthURL[1] . $fyTable->fcal->months[$month - 1]->SN;
                $monthTrendLink = link_to('Trend Chart', $monthTrendURL);                
            }
            if ($monthDetailLink != '' || $monthTrendLink != '') {
                echo '<div align="center">' . $monthDetailLink . ' | ' . $monthTrendLink . '</div>';
            }
            ?>
            <?php include_partial('global/seagateFiscalCalendar/month_table', array('fmonthTable' => $fmonthTable)); ?>
        </td>

        <?php if($month%3 == 0 and $month<12){ ?>

            </tr><tr>

        <?php } ?>

    <?php } ?>

</tr>

</table>