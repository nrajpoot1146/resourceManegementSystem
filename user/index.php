<?php
//booking page
require_once("../inc/class/session.php");
require_once("../inc/class/config.php");
require_once("../inc/class/booked.php");
require_once("../inc/class/html.php");
require_once("../inc/class/db.php");
$res=null;
$sql = "SELECT * FROM ". tbResource;
$resource = DB::execute($sql);
if(isset($_GET['resid'])){
	require_once("../bookingform.php");
	exit();
}
elseif(isset($_POST['q'])){
	$cmd = $_POST['q'];
	if($cmd=='booking'){
			if(isset($_POST['fdate'])&&isset($_POST['todate'])&&isset($_POST['privacy'])&&isset($_POST['purpose'])&&isset($_POST['description'])){
				$fromdate = substr($_POST['fdate'],0,10);
				$fromtime = substr($_POST['fdate'],11);
				$todate = substr($_POST['todate'],0,10);
				$totime = substr($_POST['todate'],11);
				
				$data = $_POST;
				$_POST['resid'];
				$data['userid'] = $_SESSION['username'];
				$data['fromdate'] = $fromdate;
				$data['fromtime'] = $fromtime;
				$data['todate'] = $todate;
				$data['totime'] = $totime;
				$data['status'] = 0;
				
				$book = new Booked($data);
				require_once('../allotted.php');
				js::alert($book->insert());
		}
	}
	exit();
}
require_once('../allotted.php');
?>