<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V5</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>
	<nav class="navbar navbar-inverse" style="height:10%">
  <div class="container-fluid">
    <div class="navbar-header">
      <h3 style="color:white">EXAMPORTAL</h3>
    </div>
    <ul class="nav navbar-nav navbar-right" style="margin-left:900px">
      <li><a href="http://localhost/index.php">HOME</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://localhost/project/exam/faclogin/faclogin/login.php">BACK</a></li>
    </ul>
  </div>
</nav>
</div>
	<div class="limiter">

		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">

			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" action="" method="POST">
					<span class="login100-form-title p-b-53">
						UPDATE PASSWORD
					</span>

					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							FACULTY ID:
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="Username" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Old Password:
						</span>

						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="Password1" >
						<span class="focus-input100"></span>
					</div>
					<br>
					<br>
					<br>
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							 New Password:
						</span>

						
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="Password2" >
						<span class="focus-input100"></span>
					</div>
                      <br>
					<br>
					<br>   
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="login">
							Sign In
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"exam");
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
if(isset($_POST['login']))
{
   $un = $_POST['Username'];
   $pw = $_POST['Password1'];
   $pw1 = $_POST['Password2'];
$sql1="UPDATE login SET password='$pw1' WHERE teacherid='$un' AND password='$pw'";
if (mysqli_query($conn, $sql1)) {
            	?>
            	<script>
                alert("password changed successfully"); 
                </script>
                <?php         
                 }else {
        	?>
        	<script>
            alert("Failed to change password.please check username or password");
            </script>
            <?php
        }

        } 


?>	
</html>