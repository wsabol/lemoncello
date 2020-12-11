<?php

ini_set("display_errors", 0);

class Sweet {
  private $max = 206;
  private $min = 130;
  private $std = 172;
  public function max() { return $this->max; }
  public function min() { return $this->min; }
  public function std() { return $this->std; }
}

$sweet = new Sweet();

function isCommandLineInterface()
{
  if( defined('STDIN') )
	{
		return true;
	}

  if( isset($_SERVER) )
  {
  	if( empty(@$_SERVER['REMOTE_ADDR']) and !isset($_SERVER['HTTP_USER_AGENT']) and count(@$_SERVER['argv']) > 0)
  	{
  		return true;
  	}
  }

	return false;
}

function generateToken() {
	/* 40 char random security token */
	return sha1(md5(mt_rand()));
}

function wl($sstring) {//Debug the string to the screen with trailing br
	echo($sstring . "<br/>" . "\n");
}
function dbpc($sstring) {
	print $sstring . "\n";
}
function wla($aArray) {//Debug the string to the screen with trailing br
	echo(str_replace(chr(10), chr(10) . "<br>", str_replace(chr(9), "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . chr(9) , print_r($aArray, 1) )) . chr(13) . chr(10));
}

/**
*  Given a file, i.e. /css/base.css, replaces it with a string containing the
*  file's mtime, i.e. /css/base.1221534296.css. In production, it will return
*  the minified file's name, i.e. /css/base.min.1221534296.css, if the file exists.
*
*  @param $file  The file to be loaded. Must be an relative to the document
*                root in a httpd env. Leading slash will be trimmed if present.
*  @return string
*
*/
function auto_version($file) {
  $root = strval(@$_SERVER['DOCUMENT_ROOT']);
  if ($root != "") $root .= "/";

  $_file = $file;
  if (strpos($_file, "/") === 0) $_file = substr($_file, 1);

  if (!file_exists($root . $_file)) return $file;

  $mtime = filemtime($root . $_file);
  return "/".preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $_file);
}
