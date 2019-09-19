<?php
require_once("db.php");
require_once("config.php");
class Resource{
	public $hallNo = "";
	public $status = false;
	public function isAlloted(){
		return($status);
	}
	public function getBookingStatus(){
		$sql = "SELECT * FROM ". tbResource ." WHERE fromdate = ?";
		$conn = DB::getDbConnection();
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s",$date);
		if($stmt->execute()){
			$res = $stmt->get_result();
			return($res);
		}
		
	}
	public function getBookingStatus($date,$Time){
		
	}
	public function getBookingStatus($fromDate,$fromTime,$toDate,$toTime){
		
	}
}
?>