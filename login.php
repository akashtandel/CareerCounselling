<?php
session_start();
error_reporting(0);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					User Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post">

				
					
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input type="email" name="loginemail" placeholder="Enter username" class="input100" />
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input type="password" name="loginpassword" placeholder="Password" class="input100" />
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" name="login_sub" class="login100-form-btn">Login</button>
					</div>
					
					<div class="container-login100-form-btn m-t-32">					
					<a class="nav-link" href="registration.php">New register here !!</a>
					</div>
					
				
							

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>


<?php
if(isset($_POST['login_sub']))
{
	include("connect.php");
	
	$email = $_POST['loginemail'];
	$pass = $_POST['loginpassword'];
	$passs= md5($pass);
	
	$sql = mysqli_query($con,"select * from tbl_admin where Email='$email' and Password='$pass'");
	if(mysqli_num_rows($sql)>0)
	{
		$_SESSION['adminemail']=$email;
		echo "<script type='text/javascript'>";
		//echo "alert('Admin Login Succesfull');";
		echo "window.location.href='admin_index.php';";
		echo "</script>";
		//header("loation:admin_index.html");
	}
	else
	{
		$sql = mysqli_query($con,"select * from tbl_studentmaster where Email='$email' and Password='$passs'");
		
		if(mysqli_num_rows($sql)>0)
		{
			$_SESSION['useremail']=$email;
			echo "<script type='text/javascript'>";
			//echo "alert('Admin Login Succesfull');";
			echo "window.location.href='user_index.php';";
			echo "</script>";
			//header("loation:admin_index.html");

		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('invalid EMAIL And Password');";
			echo "</script>";
			session_unset();
		}
	}
	
	mysql_close($con);
}
?>