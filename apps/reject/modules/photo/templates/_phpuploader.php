<?php
$PhpUploader_FSEncoding="ISO-8859-1//TRANSLIT";

$PhpUploader_InternalEncoding="utf-8";

error_reporting(E_ALL ^ E_NOTICE);

if(@$_GET["ContextValue"])
{
//	if(!@$_SESSION)
//	{
		session_id(@$_GET["ContextValue"]);
//	}
//	else
//	{
//		echo("Session has started already, unable to set the session id! Please include uploader before session_start().");
//		exit(200);
//	}
}

$phpuploader_logstart=false;
function PhpUploader_Log($message)
{
	$logfile="log.txt";
	
	return;
	
	//change the $logfile and comment the 'return;' for log
	
	$h=PhpUploader_FileOpen(__FILE__,__LINE__,$logfile,"a");
	
	global $phpuploader_logstart;
	if( ! $phpuploader_logstart )
	{
		PhpUploader_FileWrite(__FILE__,__LINE__,$h,"\r\n");
	}
	$phpuploader_logstart=true;
	
	PhpUploader_FileWrite(__FILE__,__LINE__,$h,$message);
	PhpUploader_FileWrite(__FILE__,__LINE__,$h,"\r\n");
	PhpUploader_FileClose(__FILE__,__LINE__,$h);
}



function PhpUploader_Unescape($str)
{ 
	global $PhpUploader_InternalEncoding;
	
    $str = rawurldecode($str); 
    //throw(new Exception( $str ));
    preg_match_all("/(%u[0-9A-Fa-f]{4}|%|[^%]+)/",$str,$r); 
    $ar = $r[0]; 
    foreach($ar as $k=>$v)
    {
        if(strlen($v) == 6 && substr($v,0,2) == "%u")
        {
			if(substr($v,0,4)=="%u00")
			{
				$ar[$k] = iconv("ISO-8859-1",$PhpUploader_InternalEncoding,pack("H2",substr($v,-2)));
			}
            else
            {
				$ar[$k] = iconv("UCS-2",$PhpUploader_InternalEncoding,pack("H4",substr($v,-4)));
            }
        }
    }
    //throw(new Exception( join("",$ar) ));
    return join("",$ar); 
} 

function PhpUploader_GetQSD($name)
{
    $val=@$_GET[$name];
    if(!$val)
        return null;
    $val=str_replace("\\'","'",$val);
    return PhpUploader_Unescape($val);
}

function PhpUploader_GetFileName($file)
{
	$str=PhpUploader_GetQSD("_VFN");
	if($str)
	{
		if(substr($str,0,1)==".")
			$str="uploadedfile"+$str;
		return $str;
	}
	return $file["name"];
}

function PhpUploader_GetBaseName($path)
{
	if(strpos($path,"\0"))throw (new Exception("Invalid path !!"));
	$path=str_replace("\\","/",$path);
	$p=strrpos($path,"/");
	if($p)
	{
		$path=substr($path,$p+1);
	}
	return $path;
}



function PhpUploader_MoveUploadedFile($_file,$_line,$src,$dst)
{
	global $PhpUploader_FSEncoding;
	global $PhpUploader_InternalEncoding;
	
	if(!PhpUploader_FileExists($src))
		throw(new Exception("File not exists : $src , at $_file line $_line"));
		
	$er=error_reporting(0);
	$re=move_uploaded_file(iconv($PhpUploader_InternalEncoding,$PhpUploader_FSEncoding,$src),iconv($PhpUploader_InternalEncoding,$PhpUploader_FSEncoding,$dst));
	error_reporting($er);
	if($re===false)
	{
		$le=error_get_last();
		throw(new Exception($le["message"] . " , failed to move $src to $dst' , at $_file line $_line"));
	}
	return $re;
}

function PhpUploader_FileExists($path)
{
	global $PhpUploader_FSEncoding;
	global $PhpUploader_InternalEncoding;
	
	return file_exists(iconv($PhpUploader_InternalEncoding,$PhpUploader_FSEncoding,$path));
}
function PhpUploader_GetFiles($_file,$_line,$pattern)
{
	global $PhpUploader_FSEncoding;
	global $PhpUploader_InternalEncoding;
	
	$er=error_reporting(0);
	$re=glob(iconv($PhpUploader_InternalEncoding,$PhpUploader_FSEncoding,$pattern));
	error_reporting($er);
	if(!$re)
		return array();
	$l=count($re);
	for($i=0;$i<$l;$i++)
	{
		$re[$i]=iconv($PhpUploader_FSEncoding,$PhpUploader_InternalEncoding,$re[$i]);
	}
	return $re;
}
function PhpUploader_MakeDir($_file,$_line,$dir,$flag)
{
	global $PhpUploader_FSEncoding;
	global $PhpUploader_InternalEncoding;
	
	$dir=iconv($PhpUploader_InternalEncoding,$PhpUploader_FSEncoding,$dir);
	$er=error_reporting(0);
	$re=mkdir($dir,$flag);
	error_reporting($er);
	if($re===false)
	{
		$le=error_get_last();
		throw(new Exception($le["message"] . " , failed to make dir '$dir' , at $_file line $_line"));
	}
	return $re;
}
function PhpUploader_Copy($_file,$_line,$src,$dst)
{
	global $PhpUploader_FSEncoding;
	global $PhpUploader_InternalEncoding;
	
	$er=error_reporting(0);
	$re=copy(iconv($PhpUploader_InternalEncoding,$PhpUploader_FSEncoding,$src),iconv($PhpUploader_InternalEncoding,$PhpUploader_FSEncoding,$dst));
	error_reporting($er);
	if($re===false)
	{
		$le=error_get_last();
		throw(new Exception($le["message"] . " , failed to copy $src to $dst' , at $_file line $_line"));
	}
	return $re;
}
function PhpUploader_Move($_file,$_line,$src,$dst)
{
	global $PhpUploader_FSEncoding;
	global $PhpUploader_InternalEncoding;
	
	PhpUploader_Log("Move From $src");
	PhpUploader_Log("Move To $dst");
	$er=error_reporting(0);
	$re=rename(iconv($PhpUploader_InternalEncoding,$PhpUploader_FSEncoding,$src),iconv($PhpUploader_InternalEncoding,$PhpUploader_FSEncoding,$dst));
	error_reporting($er);
	if($re===false)
	{
		$le=error_get_last();
		throw(new Exception($le["message"] . " , failed to move $src to $dst' , at $_file line $_line"));
	}
	return $re;
}
function PhpUploader_FileTime($_file,$_line,$file)
{
	global $PhpUploader_FSEncoding;
	global $PhpUploader_InternalEncoding;
	
	return filemtime(iconv($PhpUploader_InternalEncoding,$PhpUploader_FSEncoding,$file));
}
function PhpUploader_Delete($_file,$_line,$file)
{
	global $PhpUploader_FSEncoding;
	global $PhpUploader_InternalEncoding;
	
	$er=error_reporting(0);
	$re=unlink(iconv($PhpUploader_InternalEncoding,$PhpUploader_FSEncoding,$file));
	error_reporting($er);
	if($re===false)
	{
		$le=error_get_last();
		throw(new Exception($le["message"] . " , failed to delete $file' , at $_file line $_line"));
	}
	return $re;
}
function PhpUploader_FileOpen($_file,$_line,$filepath,$flag)
{
	global $PhpUploader_FSEncoding;
	global $PhpUploader_InternalEncoding;
	
	$er=error_reporting(0);
	$re=fopen(iconv($PhpUploader_InternalEncoding,$PhpUploader_FSEncoding,$filepath),$flag);
	error_reporting($er);
	if($re===false)
	{
		$le=error_get_last();
		throw(new Exception($le["message"] . " , failed to open $filepath' , at $_file line $_line"));
	}
	return $re;
}
function PhpUploader_FileRead($_file,$_line,$handle,$len)
{
	return fread($handle,$len);
}
function PhpUploader_FileWrite($_file,$_line,$handle,$data)
{
	return fwrite($handle,$data);
}
function PhpUploader_FileClose($_file,$_line,$handle)
{
	return fclose($handle);
}




function PhpUploader_JSEncode($str)
{
	$str=str_replace("\\","\\\\",$str);
	$str=str_replace("'","\\x27",$str);
	$str=str_replace("\"","\\\"",$str);
	$str=str_replace("\r","\\\r",$str);
	$str=str_replace("\n","\\\n",$str);
	return $str;
}
function PhpUploader_GetGuid($str)
{
	if(!preg_match("/^[0-9A-F]{8}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{4}-[0-9A-F]{12}$/i",$str))
		throw(new Exception("Invalid Guid : " . $str));
	return $str;
}
function PhpUploader_CreateGuid()
{
	//this is windows only?
	//return PhpUploader_GetGuid(substr(com_create_guid(),1,36));
	return preg_replace_callback("/X/",create_function("",'return substr("0123456789ABCDEF",rand(0,15),1);'),"XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX");
}

function PhpUploader_ParseByteSetting($val) { 
	$val = trim($val); 
	$last = strtolower($val[strlen($val)-1]); 
	switch($last) { 
		// The 'G' modifier is available since PHP 5.1.0 
		case 'g': 
		$val *= 1024; 
		case 'm': 
			$val *= 1024; 
		case 'k': 
			$val *= 1024; 
	} 

	return $val; 
}

function PhpUploader_GetSystemTempFolder()
{
	$str=ini_get('upload_tmp_dir');
	if($str==null||strlen($str)==0)
	{
		$str="/tmp";
		if(!is_dir($str))
		{
			$str=dirname(__FILE__);
		}
	}
	else
	{
		if(!is_dir($str))
		{
			$result= PhpUploader_MakeDir(__FILE__,__LINE__,$str,0777);
			if(!$result)
			{
				throw(new Exception("The folder $str does not exist.  Please check the permission or specify a temp folder using TempDirectory property."));
			}
		}
	}
	
	if (substr($str,strlen($str)-(1))!="/")
		$str=$str."/";
	$str=$str."uploadertemp";
	
	if (!is_dir($str))
	{
		$result= PhpUploader_MakeDir(__FILE__,__LINE__,$str,0777);
		if(!$result)
		{
			throw(new Exception("Unable to create temp folder: $str  Please check the permission or specify a temp folder using TempDirectory property."));
		}
	}
	
	return $str;
}


?>