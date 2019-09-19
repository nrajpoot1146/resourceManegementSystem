
<?php
   include("config.php");
   session_start();
  $error=" ";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM adminlogin WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);		
      if($count == 1) {
         $_SESSION['login_user'] = $username;
         
         header("location: admindashboard.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body style="background-image: linear-gradient(to right, #bdc3c7, #2c3e50)">

    <div class="">
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
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="margin-top: 50px">
                        <div class="card" style="background-color: #d9edf7">
                            <div class="header">
                                <h4 class="title">Admin LogIn >></h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control border-input" placeholder="username" autofocus>
					
                                    </div>
                                    <div class="form-group ">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control border-input" placeholder="Password">

                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd" value="Login"><span class="text-danger">Log-in</span></button>
                                    </div>
					<div style = "font-size:11px; color:#cc0000; margin-top:10px">
					<?php echo $error; ?></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" style="background-color: #d9edf7">
                            <nav class="text-center">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <h5 class="text-danger">Rajkiya Engineering College, Banda</h5>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>


<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>


</html>
