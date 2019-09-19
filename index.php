<?php
require_once("inc/class/config.php");
require_once("inc/class/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resource management System</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>
<body background="blur.jpg">
<div>
    <nav class="navbar navbar-default ">
        <div class="container-fluid bg-info">
            <div class="navbar-header">

                <a class="navbar-brand" href="#">Resource Management System</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://localhost/ht">
                            <i class="ti-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ti-id-badge"></i>
                            <p>Contact-Us</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="login.php" >
                            <i class="ti-user"></i>
                            <p> login</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 5%" >
        <div class="row text-center">
            <div style="color: white">
                <h3 style="background-color: #a6e1ec; border-radius:5px"> About RMS :</h3>
                <p class="text-justify" style="margin-top: 5%">It is a  web portal that is use to check the availability and allotment of resources.</p>
                <p class="text-justify">This web portal gives the time wise availability of resources and also display for particular date & time the  availability of hall and system in Computer Center. The objective of the resource management system is efficient utilization and management of available resources.</p
            </div>
        </div>
        <div class="row text-center margin-top" style="margin-top: 5%">
            <div class=""></div>
            <div class="card col-md-6" style="border-right: double 5px blue">
                <table class="table-responsive table">
                    <tr>
                        <th style="font-size: large">Notice: </th>
                    </tr>
                </table>
                <p class="text-justify"><?php
					$sql = "SELECT * FROM ". tbBooking ." WHERE privacy=0;";
					$res = DB::execute($sql);
					while($row = $res->fetch_assoc()){
						echo("<center><h5>".$row['resid']."</h5></center>");
						echo($row['description']."<br><br>");
					}
					?></p>

            </div>
            <div class="card col-md-6">
                <table class="table table-responsive">
                    <tr>
                        <th style="font-size: large">System Status: </th>
                    </tr>
                </table>
                <a href="dashboard2.php"> <p class="text-justify">Status</p></a>
                <a href="adminlogin.php"> <p class="text-justify">Admin</p></a>
                <a href="computerlab1.html"> <p class="text-justify">Computer Lab 1</p></a> 
            </div>
        </div>
    </div>
</div>
</body>
</html>
