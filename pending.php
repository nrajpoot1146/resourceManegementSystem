<?php
require_once("../inc/class/booked.php");
require_once("../inc/class/config.php");
require_once("../inc/class/db.php");
$sql = "SELECT * FROM ". tbBooking ." WHERE status = 0";
$res = DB::execute($sql);
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
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-default ">
    <div class="container-fluid bg-info">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"> Allotment </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="http://localhost/ht" class="dropdown-toggle" data-toggle="dropdown">
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
    <table class="table table-bordered text-center">
        <thead class="">
        <tr>
            <th scope="col"> Sr.No.</th>
            <th scope="col"> Name</th>
            <th scope="col"> Designation</th>
            <th scope="col"> From date</th>
            <th scope="col"> From time</th>
            <th scope="col"> To date</th>
            <th scope="col"> To time</th>
            <th scope="col"> Purpose</th>
            <th scope="col"> Discription</th>
            <th  class="text-center" scope="col"> Action</th>
        </tr>
        </thead>
        <tbody>
			<?php
			if($res->num_rows>0){
				$i=0;
				while($row=$res->fetch_assoc()){
					$i++;
					$book= new Booked($row);
					
					$sql = "SELECT * FROM ". tbUser ." WHERE uname = '".$row['userid']."';";
					$resuser = DB::execute($sql);
					$rowuser = $resuser->fetch_assoc();
					
					$sql = "SELECT * FROM ". tbResource ." WHERE resid = '".$row['resid']."'";
					$resresource = DB::execute($sql);
					$rowresource = $resresource->fetch_assoc();
					
					echo('<tr>');
					echo('<th scope="row">'.$i.'</th>');
					echo('<td>'.$rowresource['resname'].'</td>');
						echo('<td>'.$rowuser['deg'].'</td>');
						echo('<td>'.$book->fromdate.'</td>');
						echo('<td>'.$book->fromtime.'</td>');
						echo('<td>'.$book->todate.'</td>');
						echo('<td>'.$book->todate.'</td>');
						echo('<td>'.$book->purpose.'</td>');
						echo('<td>'.$book->description.'</td>');
						echo('<td>');
							echo('<div class="row">');
								echo('<div class="col-md-6">');
									echo('<a href="index.php?q=req&req=cnf&id='.$book->bookingid.'"><input type="button" class="btn btn-success" value="Accept"></a>');
								echo('</div>');
								echo('<div class="col-md-6">');
									echo('<a href="index.php?q=req&req=cnl&id='.$book->bookingid.'"><input type="button" class="btn btn-danger" value="Reject"></a>');
								echo('</div>');
							echo('</div>');
						echo('</td>');
					echo('</tr>');
				}
			}else{
				echo("<center><h1>no data.</h1></center>");
			}
			?>
        </tbody>
    </table>
</div>
</body>
</html>