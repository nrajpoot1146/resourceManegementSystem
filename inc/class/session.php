<?php
//session file
require_once("config.php");
session_start();
if(isset($_SESSION['username'])){
	if($_SESSION['admin']==0){
		if($_SERVER["REQUEST_URI"]!="/ht/user/index.php" && substr($_SERVER["REQUEST_URI"],0,9)!="/ht/user/"){
			header("location: http://localhost/ht/user");
			exit();
		}
	}elseif($_SESSION['admin']==1){
		if($_SERVER["REQUEST_URI"]!="/ht/admin/login.php" && substr($_SERVER["REQUEST_URI"],0,10)!="/ht/admin/"){
			header("location: http://localhost/ht/admin");
			exit();
		}
	}
	
}elseif($_SERVER["REQUEST_URI"]!=HOME && $_SERVER["REQUEST_URI"]!="/ht"){
	header("location: ". HOST . HOME);
}
?>