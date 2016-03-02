<?php
// $Source$
// $Id$

class HTMLText
{
    
    function HTMLText()
    {

    }


    function URLize($text)
    {
        //$tmp = '<a href="' . $text . '" target="_blank">' . $text . '</a>';
        $tmp = $text;
        
        if(strpos(strtolower($text), 'http://') === 0 && strlen($text) > 8) {
            $tmp = '<a href="' . $text . '" target="_blank">' . $text . '</a>';
        } else if(strpos(strtolower($text), 'http://') === false && strpos($text, '.') !== false) {

            $tmp = '<a href="http://' . $text . '" target="_blank">' . $text . '</a>';        
        }

        return $tmp;
        

        /*
        $text = eregi_replace('(((f|ht){1}tp://)[-a-zA-Z0-9@:%_\+.~#?&//=]+)',
                                '<a target="_blank" href="\\1">\\1</a>', $text);
        $text = eregi_replace('([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&//=]+)',
                                '\\1<a target="_blank" href="http://\\2">\\2</a>', $text);
        $text = eregi_replace('([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})',
                            '<a href="mailto:\\1">\\1</a>', $text);  
        return $text;
        */
    }



    function NormalizeWordLength($text, $wordMaxLength)
    {
        $newText = '';

        $temp = explode(' ', $text);
        if(sizeof($temp) > 0) {
            foreach($temp as $word) {
                if(strlen($word) <= $wordMaxLength) {
                    $newText .= ' ' . $word;
                } else {
                    $newText .= ' ' . substr($word, 0, $wordMaxLength);
                    $newText .= ' ' . HTMLText::NormalizeWordLength(substr($word, $wordMaxLength), $wordMaxLength);
                }
            }
        }
        return trim($newText);
    }

        
    function NormalizeImageDimension($imageInfo, $maxWidth, $maxHeight)
    {
        if(sizeof($imageInfo) < 1) return false;

        $tempArray = $imageInfo;
        
        $width = $origWidth = $tempArray[0];
        $height = $origHeight = $tempArray[1];
        if($width && $maxWidth && $width > $maxWidth) {
            $width = $maxWidth;
            $height = ($width/$origWidth) * $origHeight;

            if($height && $maxHeight && $height > $maxHeight) {
                $temp = $height;
                $height = $maxHeight;
                $width = ($height/$temp) * $width;
            }
        } else if($height && $maxHeight && $height > $maxHeight) {
            $height = $maxHeight;
            $width = ($height/$origHeight) * $origWidth;

            if($width && $maxWidth && $width > $maxWidth) {
                $temp = $width;
                $width = $maxWidth;
                $height = ($width/$temp) * $height;
            }
        }

        $tempArray[0] = $width;
        $tempArray[1] = $height;
        $tempArray[3] = 'width="' . $width . '" height="' . $height . '"';

        return $tempArray;    
    }



    function FormatHTMLTags($text)
    {
        // global vars are BAD BAD BAD
        global $HTMLTAGS_TRANSLATIONS;
        global $HTMLTAGS_CLOSINGS;
        
        $tmp = strtr($text, $HTMLTAGS_TRANSLATIONS);
        foreach($HTMLTAGS_CLOSINGS as $closing) {
            $tmp .= ' ' . $closing;
        }

        return $tmp;
    }
    function FormatHTMLTagsForum($text)
    {
        // global vars are BAD BAD BAD
        global $HTMLTAGS_TRANSLATIONS;
        global $HTMLTAGS_CLOSINGS;
        
        $trans = array(
            '&lt;blockquote&gt;' => '<blockquote>',
            '&lt;/blockquote&gt;' => '</blockquote>',
            '&lt;quote&gt;' => '<blockquote>',
            '&lt;/quote&gt;' => '</blockquote>'
        );
    
        $tmp = strtr($text, $HTMLTAGS_TRANSLATIONS);
        $tmp = strtr($tmp, $trans);
        
        foreach($HTMLTAGS_CLOSINGS as $closing) {
            $tmp .= ' ' . $closing;
        }
        // $tmp .= '</blockquote>';

        return $tmp;
    }

    function FormatStandardTextList($text)
    {
        $formatted = '';
        $formatted .= "<ul>\n";    
        $tmp = explode("\n", $text);
        foreach ($tmp as $line) {
            $line = trim($line);
            if ($line != '' && $line != '&nbsp;') {
                $formatted .= '<li>' . $line . '</li>' . "\n";
            }
        }
        $formatted .= "</ul>\n";
        return $formatted;
    }

    function CondenseNewLine($text)
    {
        $txt = str_replace("\r\n", " ", $text);
        $txt = str_replace("\n", " ", $txt);

        return $txt;
    }
 
    public static function FormatCellNumber($number)
    {
        $text = $number;
        //$text = intval($number);
        if ($number == 0) {
            $text = '<span class="zero-qty">0</span>';   
        }
        else if ($number < 0) {
            $text = '<span class="negative">' . $number . '</span>';   
        }
        return $text;    
    } 

    function FormatMoney($number)
    {
        $anchor = number_format($number, 2);

        $text = $anchor;
        //$text = intval($number);
        if ($number < 0) {
            $text = '<span class="negative-money">' . $anchor . '</span>';   
        }
        return $text;    
    } 

    public static function DateNice($datetime, $emptyDefault = '', $eta = '')
    {        
        if (strlen($datetime) == 10) $datetime .= ' 01:01:01';

        $tmp = DateUtils::DuFormat('j M Y', $datetime);

        if ($tmp == '') $tmp = $emptyDefault;
        else if ($eta != '') {
            
            $diff = DateUtils::DateDiff('d',  $eta, $datetime);
            if ($diff > sfConfig::get('app_purchase_eta_threshold', 360)) {
                $tmp = '<span class="negative">' . $tmp . ' (' . $diff . ' day' . ($diff > 1 ? 's' : '') . ' late)</span>';
            }
        }
        return $tmp != '' ? $tmp : $emptyDefault;
    }
    public static function DateNice2($datetime, $emptyDefault = '', $eta = '')
    {        
        if (strlen($datetime) == 10) $datetime .= ' 01:01:01';

        $tmp = DateUtils::DuFormat('j M y', $datetime);

        if ($tmp == '') $tmp = $emptyDefault;
        else if ($eta != '') {
            
            $diff = DateUtils::DateDiff('d',  $eta, $datetime);
            if ($diff > sfConfig::get('app_purchase_eta_threshold', 360)) {
                $tmp = '<span class="negative">' . $tmp . ' (' . $diff . ' day' . ($diff > 1 ? 's' : '') . ' late)</span>';
            }
        }
        return $tmp != '' ? $tmp : $emptyDefault;
    }
    
    public static function Quantifier($num, $sz = false, $so = false, $sp = false)
    {
        $str = '';
        if ($num == 0) {
            $str = $sz ? $sz : 'None';
        } else if ($num == 1) {
            $str = $num . ($so ? ' ' . $so : '');
        } else if ($num > 1) {
            $str = $num . ($sp ? ' ' . $sp : '');
        } else {
            $str = $num;
        }
        return $str;        
    }
}

?>