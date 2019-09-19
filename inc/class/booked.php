<?php
require_once("db.php");
require_once("config.php");
class Booked{
	public $bookingid;
	public $userid;
	public $resid;
	public $fromdate;
	public $fromtime;
	public $todate;
	public $totime;
	public $purpose;
	public $privacy;
	public $description;
	public $status;
	
	public function Booked($_data){
		if(isset($_data['bookingid'])){
			$this->bookingid = $_data['bookingid'];
		}else{
			$this->bookingid = $this->generateID();
		}
		$this->userid = $_data['userid'];
		$this->resid = $_data['resid'];
		$this->fromdate = $_data['fromdate'];
		$this->fromtime = $_data['fromtime'];
		$this->todate = $_data['todate'];
		$this->totime = $_data['totime'];
		$this->purpose = $_data['purpose'];
		$this->privacy = $_data['privacy'];
		$this->description = $_data['description'];
		$this->status = $_data['status'];
	}
	
	public function getStatus(){
		if($this->status==0){
			return("pending");
		}
		elseif($this->status==-1){
			return("cancel");
		}
		elseif($this->status==1){
			return("confirm");
		}
	}
	
	private function generateID(){
		$sql = "SELECT MAX(srn) FROM ". tbBooking .";";
		$res = db::execute($sql);
		$row = $res->fetch_row();
		$num_rows=$row[0];
		$num_rows++;
		$id = "B";
		if($num_rows<10){
			$num_rows = "000".$num_rows;
		}elseif($num_rows<100){
			$num_rows = "00".$num_rows;
		}elseif($num_rows<1000){
			$num_rows = "0".$num_rows;
		}
		$id = $id.$num_rows;
		return($id);
	}
	
	public function insert(){
		$sql = "INSERT INTO ". tbBooking ." (bookingid,userid,resid,fromdate,fromtime,todate,totime,purpose,description,status,privacy) VALUES (?,?,?,?,?,?,?,?,?,0,?);";
		$conn = DB::getDbConnection();
		$stmt = $conn->prepare($sql);
		echo($conn->error);
		$stmt->bind_param("ssssssssss",$this->bookingid,$this->userid,$this->resid,$this->fromdate,$this->fromtime,$this->todate,$this->totime,$this->purpose,$this->description,$this->privacy);
		if($stmt->execute()){
			return("inserted");
		}
	}
}
?>