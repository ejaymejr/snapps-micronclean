<?php
// $Source$
// $Id$


class SQLUtils 
{
    
    public static function ComposeGetterFromFieldName($name) {
        
        $keys = explode('_', $name);
        $tmp = array();
        foreach ($keys as $k) {
            $tmp[] = ucfirst($k);
        }
        $method = 'get' . implode('', $tmp);
        
        return $method;
    }

    public static function ComposeSetterFromFieldName($name) {
        
        $keys = explode('_', $name);
        $tmp = array();
        foreach ($keys as $k) {
            $tmp[] = ucfirst($k);
        }
        $method = 'set' . implode('', $tmp);
        
        return $method;
    }
    
    public static function FormatValue($text) {
        
        $subst = array("'" => '\\\'',
                        '"' => '\"',
                        '\\' => '\\\\'
        );
        return strtr($text, $subst);
    }
}

?>