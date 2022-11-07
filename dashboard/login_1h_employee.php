<?php include('h1_employee.php') ?>
<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
				
				
				
                    <form action="login_1h_employee.php" method = "post">
                         <?php include('error.php'); ?>
						<div class="account-logo">
                            <img src="assets/img/logo-dark.png" alt="">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                          <input type="text" name= "username" autofocus="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password"  class="form-control">
                        </div>
                        
						
                        <div class="form-group text-center">
						     <a href="preview_employee_1h.php">
                               <button type="submit" class="btn btn-primary account-btn" value="Login" name="login_btn">Login</button>
							 </a>
                        </div>
						
                        
                    </form>
					
					
					
                </div>
			</div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- login23:12-->
</html>