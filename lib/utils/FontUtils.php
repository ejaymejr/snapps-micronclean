<?php

class FontUtils
{
    
    public static function ReplaceFunnyChars($txt)
    {
        return str_replace('€', chr(128), $txt);
    }
}