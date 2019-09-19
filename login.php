<?php
//home page
require_once("inc/class/config.php");
require_once("inc/class/session.php");
require_once("inc/class/db.php");
if(isset($_POST['q']) && $_POST['q']=="login"){
	if(isset($_POST['username']) && isset($_POST['password'])){
		$sql = "SELECT * FROM ". tbUser ." WHERE uname = ? AND password = ? ;";
		$conn = DB::getDbConnection();
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss",$_POST['username'],$_POST['password']);
		if($stmt->execute()){
			$res = $stmt->get_result();
			if($res->num_rows===1){
				$row = $res->fetch_assoc();
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['admin'] = $row['admin'];
				if($_SESSION['admin']==1){
					header("location: http://localhost/ht/admin");
				}
				header("location: http://localhost/ht/user");
				exit();
			}else{
				echo("Wrong username or password.");
			}
		}
		
	}
}else{
	require_once("loginform.php");
}
?>