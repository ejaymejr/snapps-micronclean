<?php
// $Source$
// $Id$

class FileUtils
{
    
    function FileUtils()
    {

    }

    function IsImage($type)
    {
        $VALID_IMAGE_TYPES = array (
            'image/jpg',
            'image/jpeg',
            'image/pjpeg',
            'image/gif',
            'image/png'
        );
        
        if(sizeof($VALID_IMAGE_TYPES)) {
            if(in_array($type, $VALID_IMAGE_TYPES)) return true;
            else return false;
        } else return true;
    }

    function IsFlash($type)
    {
        $VALID_FLASH_TYPES = array (
            'application/x-shockwave-flash'
        );
        
        if(sizeof($VALID_FLASH_TYPES)) {
            if(in_array($type, $VALID_FLASH_TYPES)) return true;
            else return false;
        } else return true;
    }
        
    function FilterFolderName($name)
    {
        // shorten more than one whitespace to a single space only
        $name = preg_replace('/(\s+)/i', ' ', $name);

        $pattern = '/[^' . VALID_FILENAME_CHARS . ']/i';
        // now replace the unallowable characters with default substitute
        $name = preg_replace($pattern, FILENAME_CHAR_SUB, $name);

        return $name;
    }


    public static function FilterFileName($name)
    {
        // shorten more than one whitespace to a single space only
        $name = preg_replace('/(\s+)/i', ' ', $name);

        $pattern = '/[^' . VALID_FILENAME_CHARS . ']/i';
        // now replace the unallowable characters with default substitute
        $name = preg_replace($pattern, FILENAME_CHAR_SUB, $name);

        return $name;
    }


    function AddTrailingSlash($text)
    {
        // first we strip the trailing slash
        $hasTrailingSlash = ('/' == substr($text, -1));
        while($hasTrailingSlash) {
            $text = substr($text, 0, strlen($text) - 1);
            $hasTrailingSlash = ('/' == substr($text, -1));
        }

        // return with one trailing slash   
        return $text . '/';
    }



    // return file name, without path
    function MakeFileNameUnique($folder, $fileName)
    {

        // debug
        // echo 'Trying to make unique.';
        $filePath = FileUtils::AddTrailingSlash($folder) . "/$fileName";

        // check filename and extension
        $lastPeriod = strrpos($fileName, '.');
        if($lastPeriod === false) {
            $name = $fileName;
            $ext = '';
        }
        else {
            $name = substr($fileName, 0, $lastPeriod);
            $ext = substr($fileName, $lastPeriod);
        }

        for($i = 1; ; $i++) {
            // debug:
            // echo "FilePath: $filePath.";

            if(file_exists($filePath)) {
                $fileName = $name . '_' . $i . $ext;
                $filePath = FileUtils::AddTrailingSlash($folder) . "/$fileName";
            }
            else {
                break;
            }
        }

        return $fileName;
    }
    
    function FormatSize($bytes)
    {
        if ($bytes >= MB_TO_BYTE) {
            return number_format($bytes / MB_TO_BYTE, 2) . ' MB';
        } else if ($bytes >= KB_TO_BYTE) {
            return number_format($bytes / KB_TO_BYTE, 2) . ' KB';
        } else {
            return $bytes . ' Bytes';
        }
    }
    
    public static function MaskFileNameNice($name)
    {
        $name = str_replace('_', ' ', $name);
        
        $words = explode(' ', $name);
        for ($i = 0; $i < sizeof($words); $i++) {
            // only capitalize words if the word not entirely capital
            if (strtoupper($words[$i]) !== $words[$i]) {
                $words[$i] = ucfirst($words[$i]);
            }
        }
        
        $name = implode(' ', $words);
        
        return $name;
    }
    


    public static function ForceDownload ($data, $name, $mimetype='', $filesize=false) {
        // File size not set?
        if ($filesize == false OR !is_numeric($filesize)) {
            $filesize = strlen($data);
        }

        // Mimetype not set?
        if (empty($mimetype)) {
            $mimetype = 'application/octet-stream';
        }

        // Make sure there's not anything else left
        self::ob_clean_all();

        // Start sending headers
        header("Pragma: public"); // required
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private",false); // required for certain browsers
        header("Content-Transfer-Encoding: binary");
        header("Content-Type: " . $mimetype);
        header("Content-Length: " . $filesize);
        header("Content-Disposition: attachment; filename=\"" . $name . "\";" );

        // Send data
        echo $data;
        die();
    }

    public static function ob_clean_all() {
        $ob_active = ob_get_length () !== false;
        while($ob_active) {
            ob_end_clean();
            $ob_active = ob_get_length () !== false;
        }

        return true;
    }
}

?>