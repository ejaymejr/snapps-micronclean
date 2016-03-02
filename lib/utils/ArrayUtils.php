<?php
// $Source$
// $Id$


class ArrayUtils
{
    
    // actually, this is not a merge, it's a "REPLACE", really
    public static function MergeKey($arr1, $arr2)
    {
        $arr = array();
        foreach ($arr1 as $key => $var) {            
            $arr[$key] = $var;   
        }
        foreach ($arr2 as $key => $var) {            
            $arr[$key] = $var;   
        }
        
        return $arr;
    }
}
