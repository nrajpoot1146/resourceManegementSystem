<?php

include("config.php");
session_start();
$sysname = "";
$status    = "";
$errors = array(); 
if (isset($_POST['submit'])) {
  $sysname = mysqli_real_escape_string($db, $_POST['sysno']);
  $status = mysqli_real_escape_string($db, $_POST['status']);
  }
        $sql = "UPDATE systeminfo SET status='$status' WHERE sysname='$sysname'";
      if(mysqli_query($db, $sql)){ 
    echo "Record was updated successfully."; 
    header("location: admindashboard.html");
}
 else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($db); 
 header("location: admindashboard.html");
}  
 ?>


  


