<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resource management System</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-user"></i>
                        <p> login</p>
                    </a>
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
			<br>
			<br>
			<br>


            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            <div>
            <div class="header">
                <h4 class="title">Login: </h4>
            </div>
            <div class="">
                <form action="login.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>User Name</label>
								<input name="q" value="login" style="display: none;">
                                <input type="text" class="form-control border-input" placeholder="UserName" name="username">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control border-input" placeholder="Password" name="password">
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>

                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill ti-user"> Log-In</button>
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