<?php
// $Source$
// $Id$

class Validation
{

    public static function IsValidEmailFormat($email) {

        if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
            return false;
        } else return true;
    }

    public static function IsValidUserName($username) {
        
        if(strlen($username) < 6) {
            return false;
        }

        if(preg_match("/([^_a-z0-9])/i", $username) || !preg_match("/([a-z0-9])/i", $username) ) {
            return false;
        } else return true;
    }
    
    public static function RemovePlus($text)
    {
        return str_replace('+', '', $text);
    }
    
    public static function IsValidContactNumber($text)
    {
        // return ctype_digit($text);
		return true;
    }

    public static function IsValidDate($date, $required = false)
    {
        $isValid = false;

        if ($date != '' && strlen($date) != 10) {
            $isValid = false;

        } else if ($date != '') {

            $start_year = substr($date, 0, 4);
            $start_month = substr($date, 5, 2);
            $start_day = substr($date, 8, 2);
            if (!is_numeric($start_year) || !is_numeric($start_month) || !is_numeric($start_day)
                    || !checkdate($start_month, $start_day, $start_year)) {
                
                $isValid = false;
            } else $isValid = true;
        }  

        if (!$required && $date == '') $isValid = true;
        
        return $isValid;
    }
    
    public static function IsDateOK($date)
    {
        return self::IsValidDate($date, true);
    }
}

?>
