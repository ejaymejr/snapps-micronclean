<?php
// $Source$
// $Id$

define('HOUR_OFFSET', 8);

class DateUtils
{
    public static function GetMonthNiceName($m)
    {
        $date = mktime(1,1,1,$m);
        return date('M', $date);
    }
    
    public static function GetThisMonthStartDate()
    {
        return date('Y-m-') . '01';
    }
    
    public static function GetThisMonthEndDate()
    {
        return date('Y-m-t');
    }

    public static function DUFormat($format, $datetime)
    {
        if (strlen($datetime) <= 10) $datetime .= ' 01:01:01';
        if ($datetime == '' || strpos($datetime, '0000') !== false) {
            return '';
        }
        $tmp = explode(' ', $datetime);
        $tmp1 = explode('-', $tmp[0]);
        $tmp2 = explode(':', $tmp[1]);
        return date($format, mktime($tmp2[0], $tmp2[1], $tmp2[2], $tmp1[1], $tmp1[2], $tmp1[0]));
    }
    
    public static function DUFormatTime($format, $datetime)
    {
        if (strlen($datetime) == 10) $datetime .= ' 00:00:01';
        if ($datetime == '' || strpos($datetime, '0000') !== false) {
            return '';
        }
        $tmp = explode(' ', $datetime);
        $tmp1 = explode('-', $tmp[0]);
        $tmp2 = explode(':', $tmp[1]);
        return date($format, mktime($tmp2[0], $tmp2[1], $tmp2[2], $tmp1[1], $tmp1[2], $tmp1[0]));
    }    

    public static function ConvertToGMT($datetime)
    {

        if (strpos($datetime, '0000') !== false) {
            return '';
        }
        if ($datetime == '') return '';


        // offset from GMT
        if(!defined('HOUR_OFFSET')) define('HOUR_OFFSET', 0);
        if(!defined('MINUTE_OFFSET')) define('MINUTE_OFFSET', 0);

        // time offset is in seconds!
        if(!defined('TIME_OFFSET'))
        define('TIME_OFFSET', ((HOUR_OFFSET * 60) + MINUTE_OFFSET) * 60);

        return date('Y-m-d H:i:s', strtotime($datetime) - TIME_OFFSET);
    }


    public static function ConvertFromGMT($datetime)
    {

        if (strpos($datetime, '0000') !== false) {
            return '';
        }
        if ($datetime == '') return '';

        // offset from GMT
        if(!defined('HOUR_OFFSET')) define('HOUR_OFFSET', 0);
        if(!defined('MINUTE_OFFSET')) define('MINUTE_OFFSET', 0);

        // time offset is in seconds!
        if(!defined('TIME_OFFSET'))
        define('TIME_OFFSET', ((HOUR_OFFSET * 60) + MINUTE_OFFSET) * 60);

        return date('Y-m-d H:i:s', strtotime($datetime) + TIME_OFFSET);
    }

    // DUDate() simulate date(), but return time according to specified offset time
    public static function DUDate($format)
    {

        // offset from GMT
        if(!defined('HOUR_OFFSET')) define('HOUR_OFFSET', 0);
        if(!defined('MINUTE_OFFSET')) define('MINUTE_OFFSET', 0);

        // time offset is in seconds!
        if(!defined('TIME_OFFSET'))
        define('TIME_OFFSET', ((HOUR_OFFSET * 60) + MINUTE_OFFSET) * 60);


        return gmdate($format, mktime() + TIME_OFFSET);
    }

    // DUNow() simulates MySQL NOW(), returned time is according to offset time
    public static function DUNow()
    {

        // offset from GMT
        if(!defined('HOUR_OFFSET')) define('HOUR_OFFSET', 0);
        if(!defined('MINUTE_OFFSET')) define('MINUTE_OFFSET', 0);

        // time offset is in seconds!
        if(!defined('TIME_OFFSET'))
        define('TIME_OFFSET', ((HOUR_OFFSET * 60) + MINUTE_OFFSET) * 60);

        $y = date('Y');
        $m = date('m');
        $d = date('d');
        $H = date('H');
        $min = date('i');
        $s = date('s');
        $time = mktime($H, $min, $s + TIME_OFFSET, $m, $d, $y);

        return gmdate('Y-m-d H:i:s', $time);
    }

    // simulates MySQL NOW(), returned time is in GMT
    public static function GMNow()
    {
        return gmdate('Y-m-d H:i:s');
    }

    public static function GMTimeStamp()
    {
        $gmt = gmdate('Y-m-d H:i:s');
        // echo $gmt;
        $gmts = strtotime($gmt);
        // echo $gmts;


        return $gmts;
    }

    public static function AddDate($date, $days)
    {
        $yyyy = substr($date, 0, 4);
        $mm = substr($date, 5, 2);
        $dd = substr($date, 8, 2);

        $mktime = mktime(1,1,1,$mm,$dd+$days,$yyyy);
        return date('Y-m-d', $mktime);
    }

    public static function AddSecondstoTime($date, $sec)
    {
        $yyyy   = substr($date, 0, 4);
        $mm     = substr($date, 5, 2);
        $dd     = substr($date, 8, 2);
        
        $hh    = substr($date, 11, 2);
        $ii    = substr($date, 14, 2);                
        $ss    = substr($date, 17, 2);

        //echo intval($ss)+$sec . '<br>';
        $mktime = mktime($hh, $ii, $ss, $mm, $dd,$yyyy);
        $mktime = ($mktime + $sec );
//        echo (time($mktime) + $sec);
//        echo $date .'<br>';
//        echo $hh .' - '. $ii .' - '. $ss . '<br>';
//        echo Date('Y:m:d H:i:s',$mktime);
//        echo $yyyy .' - '. $mm .' - '. $dd . '<br>';
//        echo Date('Y:m:d',$mktime);        
//        exit(); 
        return date('Y-m-d H:i:s', $mktime);
    }
    
    
    public static function DateDiff($interval,$dateTimeBegin,$dateTimeEnd)
    {

        if (strlen($dateTimeBegin) == 10) $dateTimeBegin .= ' 01:01:01';
        if (strlen($dateTimeEnd) == 10) $dateTimeEnd .= ' 01:01:01';

        //Parse about any English textual datetime
        //$dateTimeBegin, $dateTimeEnd
        $dateTimeBegin=strtotime($dateTimeBegin);
        if($dateTimeBegin === -1) {
            return("..begin date Invalid");
        }
        $dateTimeEnd=strtotime($dateTimeEnd);
        if($dateTimeEnd === -1) {
            return("..end date Invalid");
        }
        $dif=$dateTimeEnd - $dateTimeBegin;
        switch($interval) {
            case "s"://seconds
                return($dif);
            case "n"://minutes
                return(floor($dif/60)); //60s=1m
            case "h"://hours
                return(floor($dif/3600)); //3600s=1h
            case "d"://days
                return(floor($dif/86400)); //86400s=1d
            case "ww"://Week
                return(floor($dif/604800)); //604800s=1week=1semana
            case "m": //similar result "m" dateDiff Microsoft
                $monthBegin=(date("Y",$dateTimeBegin)*12)+
                date("n",$dateTimeBegin);
                $monthEnd=(date("Y",$dateTimeEnd)*12)+
                date("n",$dateTimeEnd);
                $monthDiff=$monthEnd-$monthBegin;
                return($monthDiff);
            case "yyyy": //similar result "yyyy" dateDiff Microsoft
                return(date("Y",$dateTimeEnd) - date("Y",$dateTimeBegin));
            default:
                return(floor($dif/86400)); //86400s=1d
        }
    }



    public static function IsValidDate($selectDate)
    {
        $start_year = substr($selectDate, 0, 4);
        $start_month = substr($selectDate, 5, 2);
        $start_day = substr($selectDate, 8, 2);
        if (!is_numeric($start_year) || !is_numeric($start_month) || !is_numeric($start_day)
        || !checkdate($start_month, $start_day, $start_year)) {

            return false;
        } else {
            return true;
        }
    }

    public static function Sec2Min($sec)
    {
        return ($sec / 60);
    }

    public static function Sec2Hr($sec)
    {
        return ($sec / 60 / 60);
    }

    public static function Min2Hr($min)
    {
        return ($min/60);
    }

    public static function Hr2Min($hr)
    {
        return ($hr * 60);
    }

    public static function Hr2Sec($hr)
    {
        return ($hr * 60 * 60);
    }

    public static function Min2Sec($min)
    {
        return ($min * 60);
    }

    public static function GetNextMonthsEndDate($nmonth)
    {
        return DateUtils::DUFormat("Y-m-t", DateUtils::AddDate(Date("Y-m-d"), ($nmonth * 30)));
    }
    
    public static function GetPrevMonthsEndDate($nmonth)
    {
        //nmonth number of months backward 1 = 1 month ago, 2 = 2 months ago
        return DateUtils::DUFormat("Y-m-", DateUtils::AddDate(Date("Y-m-d"), -($nmonth * 31))).'01';
    }

    public static function GetPrevMonthStartDate()
    {
        $datetime = Date('Y-m-d H:i:s');
        $tmp = explode(' ', $datetime);
        $tmp1 = explode('-', $tmp[0]);
        $tmp2 = explode(':', $tmp[1]);
        $tmp1[2] = 1;
        return date('Y-m-d', mktime($tmp2[0], $tmp2[1], $tmp2[2], ($tmp1[1] - 1), $tmp1[2], $tmp1[0]));
    }

    public static function GetPrevMonthEndDate()
    {
        return self::DUFormat('Y-m-t', self::GetPrevMonthStartDate());
    }
    

    public static function GetMonthEndDate($cdate)
    {
        //cdate = Y-m-d
        return DateUtils::AddDate(DateUtils::DUFormat('Y-m-01', DateUtils::AddDate(DateUtils::DUFormat('Y-m-d', $cdate), 36)),-1);
    }
    
    public static function GetNow()
    {
        return Date('Y-m-d H:i:s');
    }
    
    public static function GetWeeksOfYear($aYear)
    {
      $arrWeek    = array();
      $ts        = mktime(0,0,0,12,31,$aYear);
      $ts2        = mktime(0,0,0,12,24,$aYear);
      $lastkw    = date ("W", $ts);
      $lastyear  = date ("Y", $ts);
      $lastkw2    = date ("W", $ts2);
      $lastyear2  = date ("Y", $ts2);
    
      if ($lastkw == "1") $lastyear = $lastyear+1;
    
      for($i=1;$i<=$lastkw2;$i++)
      {
         $arrWeek[$i] = ' - Week ' . $i . '- ';
         //$arrWeek[$i-1]['kw']    = $i;
         //$arrWeek[$i-1]['year']  = $lastyear2;
      }
      //$arrWeek[$i]['kw']        = $lastkw;
      //$arrWeek[$i]['year']      = $lastyear;
    
      return $arrWeek;
    }
    
    public static function GetLastDate($cDate)
    {
    	return self::DUFormat('Y-m-'. (self::DUFormat('t', $cDate)) , $cDate);
    }

    public static function GetFirstDateofWeekNo($wkno, $year)
    {
    	$ndate = $year . '-01-01';
    	for($x=0; $x <= 365; $x++)
    	{	
    		$cdate = self::AddDate(self::DUFormat('Y-m-d', $ndate), $x);
    		if (  self::DUFormatTime('W', $cdate) == $wkno )
    		{
    			return $cdate;
    		}
    	}
    	return null;
    }
    
    
    public static function GetWeekStartDate($yyyyww, $sFormat = 'Y-m-d')
    {
        $iYear = substr($yyyyww, 0, 4);
        $iWeekNumber = substr($yyyyww, 5, 2);
         
        if ( is_null($iYear) ) $iYear = date('Y');
        $iTime = strtotime($iYear.'W'.$iWeekNumber);
        return date($sFormat, $iTime);
    }    
}
?>