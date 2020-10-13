<?php
session_start();
//include("connect.php");
error_reporting(0);


?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Career Guidance</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
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

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-4 header-top-left">
						<a class="navbar-brand logo_h" href="index.html"><h3><font color="white">Career Guidance</font></h3></a>
					</div>
					<div class="col-lg-6 col-sm-6 col-8 header-top-right">
						<!--<a href="login.php" class="text-uppercase">Login</a>
						<a href="registration.php" class="text-uppercase">registration </a>-->
						<a href="career_b_without.php" class="text-uppercase">Career booklet </a>
					</div>
				</div>
			</div>
		</div>

		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between" method="" action="">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<!--<a class="navbar-brand logo_h" href="index.html"><h3>Career Guidance</h3></a>-->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<body>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<!--<div class="row">
					<div class="col-lg-6">-->
						<div class="banner_content">
						<div class="row">
							<div class="col-lg-8">
							<br><br><br><br>
							<br><br><br><br>
							<h2>
							
								We provide Career Guidance <br>
								for student on the Web
							</h2>
							<!--<p>
								In the history of modern astronomy, there is probably no one greater leap forward than the building and launch
								of
								the space telescope known as the Hubble.
							</p>-->
								</div>
							<div class="col-md-4">
							
							
							
							
							
							
							
							<div class="limiter">
		<div>
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
	
	
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							</div>
							<div class="search_course_wrap">
								<!--<form action="" class="form_box d-flex justify-content-between w-100">
									<input type="text" placeholder="Search Courses" class="form-control" name="username" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Search Courses'">
									<button type="submit" class="btn search_course_btn">Search</button>
								</form>-->
							</div>
						</div>
						</div>
					</div>
				<!--</div>
			</div>-->
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Feature Area =================-->
	
	<!--================ End Registration Area =================-->

	<!--================ Start Events Area =================-
	<!--================ End Events Area =================-->


	<!--================ Start footer Area  =================-->
	<footer class="footer-area">
		<div>
			<center><div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-4 footer-text m-0 text-white">Copyright © 2019 All rights reserved </p>
			</div></center>
		</div>
	</footer>
	<!--================ End footer Area  =================-->
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
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/countdown.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
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