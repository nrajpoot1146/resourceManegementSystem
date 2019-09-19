<?php
require_once("../inc/class/session.php");
require_once("../inc/class/config.php");
require_once("../inc/class/html.php");
require_once("../inc/class/db.php");
if(isset($_GET['q'])){
	$cmd = $_GET['q'];
	if($cmd=="pd"){
		require_once('../pending.php');
	}elseif($cmd=="req"){
		if(isset($_GET['req'])&&isset($_GET['id'])){
			$sql="";
			if($_GET['req']=='cnf'){
				$sql = "UPDATE ". tbBooking ." SET status = 1 WHERE bookingid='".$_GET['id']."'";
				DB::execute($sql);
				if(DB::execute($sql)){
					js::alert("successfully accepted.");
				}
			}elseif($_GET['req']=='cnl'){
				$sql = "UPDATE ". tbBooking ." SET status = -1 WHERE bookingid='".$_GET['id']."'";
				DB::execute($sql);
				if(DB::execute($sql)){
					js::alert("successfully Rejected.");
				}
			}
			
			require_once('../pending.php');
		}
	}
	exit();
}
require_once("../administration.php");
?>