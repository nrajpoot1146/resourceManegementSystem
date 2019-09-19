<?php
require_once("../inc/class/booked.php");
require_once("../inc/class/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resource management System</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="http://localhost/ht/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="http://localhost/ht/assets/css/paper-dashboard.css" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet" type="text/css">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default ">
    <div class="container-fluid bg-info">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Resource Management System</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="http://localhost/ht/" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-home"></i>
                        <p>About-Us</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="ti-id-badge"></i>
                        <p>Contact-Us</p>
                    </a>
                </li>
                <li class="dropdown">
                    <?php 
					if(isset($_SESSION['username'])) 
						echo('<a href="'.LOGOUT.'" class="dropdown-toggle" data-toggle="dropdown">
						<i class="ti-user"></i>
                        <p>Logout</p>
						</a>');
					else{
						echo('<a href="'.HOST.'" class="dropdown-toggle" data-toggle="dropdown">
						<i class="ti-user"></i>
                        <p>Login</p>
						</a>');
					}
					?>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div>
    <br>
    <br>
    <br>
    <br>
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <div>
            <div class="header">
                <h4 class="title">Booking Form: </h4>
            </div>
            <div class="">
                <form action="index.php" method="post">
					<input name="q" value="booking" style="display: none;">
					<div class="row">
						
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Resource id</label>
                                <input type="type" class="form-control border-input" name="resid" value="<?php echo($_GET['resid'])?>">
                            </div>
                        </div>

                    </div>
					<div class="row">
						
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Resource name</label>
                                <input type="type" class="form-control border-input" name="resname" value="<?php echo($_GET['resname'])?>" disabled>
                            </div>
                        </div>

                    </div>
                    <div class="row">
						
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>From Date</label>
                                <input type="datetime-local" class="form-control border-input" placeholder="UserName" name="fdate">
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>To date </label>
                                <input type="datetime-local" class="form-control border-input" placeholder="To Date" name="todate">
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Privacy</label>
                                <select class="form-control border-input" name='privacy'>
                                    <option value="0">Public</option>
                                    <option value="1">Private</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Purpose </label>
                                <input type="text" class="form-control border-input" placeholder="purpose" name="purpose">
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Discription</label>
                                <textarea class="form-control border-input" placeholder="Write Your Discription Here..." name="description"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info btn-fill"> Submit</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
    </div>
</div>
</body>
</html>