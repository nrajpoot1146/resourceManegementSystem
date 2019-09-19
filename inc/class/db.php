<?php
//databse connectivity file
class DB{
	private static $dbHost = "localhost"; //dattabese host
	private static $dbUser = "root";	//database user
	private static $dbPass = "";	//databse password
	private static $dbName = "rms";	//databse name
	private static $conn = null;	//databae connection instance variable
	
	public static function execute($query){	//function to execuute query
		DB::$conn = new mysqli(DB::$dbHost,DB::$dbUser,DB::$dbPass,DB::$dbName);
		$res = DB::$conn->query($query);
		DB::$conn->close();
		return($res);
	}
	public static function prepare($query){	//function to prepare statement
		DB::$conn = new mysqli(DB::$dbHost,DB::$dbUser,DB::$dbPass,DB::$dbName);
		$stmt = DB::$conn->prepare($query);
		return($stmt);
	}
	public static function getDbConnection(){ //function to get database connection
		if(DB::$conn==null)
			DB::$conn = new mysqli(DB::$dbHost,DB::$dbUser,DB::$dbPass,DB::$dbName);
		else{
			DB::$conn = null;
			DB::$conn = new mysqli(DB::$dbHost,DB::$dbUser,DB::$dbPass,DB::$dbName);
		}
		return(DB::$conn);
	}
	public static function close(){	//function to close database connection
		if(DB::$conn!=null){
			DB::$conn->close();
			DB::$conn = null;
		}
	}
	
}
?>