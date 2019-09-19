<?php
define("START_HTML","<html>");
define("END_HTML","</html>");
define("START_HEAD","<head>");
define("END_HEAD","</head>");
class html{
	static $br = "<br>";
	static function start_script(){
		echo("<script>");
	}
	static function end_script(){
		echo("</script>");
	}
}

class js{
	static function alert($msg){
		html::start_script();
		echo("alert('$msg');");
		html::end_script();
	}
}
?>