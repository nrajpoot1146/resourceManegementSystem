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
    <div class="row">
        <div class="col-md-4"></div>
		<form action="index.php" method="post">
			<div class="col-md-4">
				<input type="date" class="btn btn-info" placeholder="Date" name="date" required>
			</div>
			<div class="col-md-4"><input type="submit" value="submit" class="btn btn-info btn-fill"></div>
		</form>
    </div>
    <br>
    <br>
    <table class="table table-bordered">
        <thead class="">
            <tr>
                <th scope="col">Sr.No.</th>
                <th scope="col">Resource Name</th>
                <th scope="col">Time</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
			<?php
			$i=0;
			while($resourcerow = $resource->fetch_assoc()){
				$i++;
				$sql = "SELECT * FROM ". tbBooking ." WHERE resid = '".$resourcerow['resid']."' AND fromdate = ?";
				$conn = DB::getDbConnection();
				$stmt = $conn->prepare($sql);
				if(isset($_POST['date'])){
					$stmt->bind_param("s",$_POST['date']);
				}
				else{
					$date = date("Y-m-d");
					$stmt->bind_param("s",$date);
				}
				$stmt->execute();
				$res = $stmt->get_result();
				
				echo('<tr>
				<th scope="row">'.$i.'</th>
				<td>'.$resourcerow['resname'].'</td>');
				if($res->num_rows>0){
					echo("<td>");
					while($row = $res->fetch_assoc()){
						$book = new Booked($row);
						echo($book->fromdate.' '.$book->fromtime.'  -  '.$book->todate.' '.$book->totime.'  status= '.$book->getStatus().'<br>');
					}
					echo("</td>");
				}else{
					echo('<td>nill</td>');
				}
				
				echo('<td><a href="index.php?resid='.$resourcerow['resid'].'&resname='.$resourcerow['resname'].'" type="submit" class="btn btn-info btn-fill">Book</a></td>
				</tr>');	
			}
			?>
        </tbody>
    </table>
</div>


</body>
</html>