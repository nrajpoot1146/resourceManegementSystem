<?php
   include("config.php");
$sql="SELECT count(status) as total from systeminfo WHERE status=0";
$result=mysqli_query($db,$sql);
$data=mysqli_fetch_assoc($result);
header("refresh: 5");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Resource Management System</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />



    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">


    	<div class="sidebar-wrapper bg-info">
            <div class="logo">
                <a href="#" class="simple-text">
                    Resource Management System
                </a>
            </div>

            <ul class="nav">
                <li class="active card">
                    <a href="dashboard2.php">
                        <i class="ti-layout-media-center"></i>
                        <p>Computer Center</p>
                    </a>
                    <ul class="list-group-item"><strong>Operating Systems :</strong>
                        <li class=""> Window 8.1</li>
                        <li class=""> Ubuntu</li>
                    </ul>
                    <ul class="list-group-item"><strong>Softwares :</strong>
                        <li class=""> Visual Studio 13.0 </li>
                        <li class=""> Photoshop 19.0</li>
                        <li class="">CoralDraw 17.3</li>
                    </ul>
                    <ul class="list-group-item"><strong>Hardware Specifications :</strong>
                        <li class=""> Processor : core i3(2.4GH)</li>
                        <li class=""> RAM : 4GB</li>
                        <li class=""> Hard Drive : 1TB</li>
                    </ul>
                </li>
                <!--<li>
                    <a href="#">
                        <i class="ti-microsoft"></i>
                        <p>Computer Lab </p>
                    </a>
                </li>-->
                <li>
                    <a href="#">
                        <i class="ti-microsoft"></i>
                        <p>Digital Library</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default ">
            <div class="container-fluid bg-info">
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="#">Computer Center</a>
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
                    </ul>

                </div>
            </div>
            <br>
        </nav>
        <div class="container" style="margin-top: 5px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" style="background-color: #d9edf7; border-bottom: double 5px blue">
                        <div class="col-md-6">
                            <p>Lab Timing: <span class="text-danger"> 9:30am - 5:00pm(Monday to Saturday)</span></p>
				<br>
                            <p>Total No. of PC: 10</p>
                            
                        </div>
                        <div class="col-md-6">
                            <p>Lab In-charge:<span class="text-danger"> Mr. Yashwant Yadav</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content" style="background-image: image('lab.jpg')">
            <div class="container-fluid">
               <div class=" card col-md-4">
		</div>
                   <div class=" card col-md-4" style="background-color: #d9edf7; border-right: double 5px blue"><br>
                        <br>
			<br>
                     <div class="text-center">
                          <h3 >Free PC  : <?php echo $data['total']; ?><br>
			  Busy PC       : <?php echo 10-$data['total']; ?></h3>
                       
			<br>
			<br>
			<br>
			<br> 
                        <br>
			<br>  
                       </div>
                         </div>
			 <div class=" card col-md-4">
			</div>
                     
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="#">
                                Rajkiya Engineering College, Banda
                            </a>
                        </li>
                        <li>
                           <!-- <a href="#">
                               Blog
                            </a>-->
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </footer>

    </div>
</div>


</body>

    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>


</html>
