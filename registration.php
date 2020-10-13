<?php
	
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
	<script>
function showHint(str) 
{
    if (str.length == 0) 
	{
        document.getElementById("txtHint").innerHTML = "*Enter Name";
        return;
    }
	else 
	{
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
}
</script>
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-4 header-top-left">
					
					</div>
					<div class="col-lg-6 col-sm-6 col-8 header-top-right">
						<a href="login.php" class="text-uppercase">Login</a>
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
					<a class="navbar-brand logo_h" href="index.html"><h3>Career Guidance</h3></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<div id="contact">
  <div class="container">
    <div class="section-title text-center">
      <h2>Registration</h2>
      <hr>
    </div>
	<section id="form"><!--form-->
		<div class="container">
			
				<center><div class="col-sm-12">
					<div class="signup-form"><!--sign up form-->
						<form name="form1" action="" method="post">
							<!--<center><h2 class="title text-center">Create An Account</h2></center>-->
							<div class="form-group col-md-6">
				                <input type="text" name="regname" class="form-control" required="required" onkeyup="showHint(this.value)" placeholder="Name" pattern="[A-Za-z]+$"><font color="red"><span id="txtHint"></span></font>
							</div>
							<div class="form-group col-md-6">
				                <input type="text" name="regemail" class="form-control" required="required"  placeholder="E-mail" pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"/>
								<p><font color="red"><span id="txtHint"></span></font></p>
							</div>
							<div class="form-group col-md-6">
				                <input type="password" name="regpass" class="form-control" required="required" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
							</div>
							<div class="form-group col-md-6">
				                <input type="password" name="regrepass" class="form-control" required="required" placeholder="re-enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
							</div>
							<div class="form-group col-md-6">
				                <input type="text" name="regmobile" class="form-control" required="required" placeholder="Enter Mobile" pattern="[0-9]{10}"/>
							</div>
							<div class="form-group col-md-6">
				                <input type="text" name="regusername" class="form-control" required="required" placeholder="Enter User name" pattern="[A-Za-z]+$"/>
							</div>

							
							<div class="form-group col-md-20">
				               <table class="form-group col-md-5">
							   <tr>
							   <td>D.O.B</td>
							   <td><input type="date" id="birthday" name="dob"  class="form-control" required></td>
								</tr>
								</table>
								 <!--<div class="form-group">
								  <label>Date masks:</label>

								  <div class="input-group">
									<div class="input-group-prepend">
									  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
									</div>
									<input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
								  </div>
								  <!-- /.input group -->
								</div>
								
								
								
							</div>
							<div class="form-group col-md-20">
				               <table class="form-group col-md-5">
							   <tr>
							   <td>Gender :</td>
							   <td><input type="radio" name="gender" value="male" />   Male</td>
							   <td><input type="radio" name="gender" value="female" />  Female</td>
								</tr>
								</table>
							</div>
							<div class="form-group col-md-20">
				               <table class="form-group col-md-3">
							   <tr>
							   <td><button type="submit" name="regsignup" class="btn btn-custom btn-lg page-scroll" onclick="return validation();">Signup</button></td>
							   <td><button type="reset" class="btn btn-custom btn-lg page-scroll">Cancel</button></td>
								</tr>
								</table>
							</div>
							
						</form>
					</div><!--/sign up form-->
				</div></center>
			</div>
		</div>
	</section><!--/form-->
</div></div>

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
	
	<script>
  $(function () {
   

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

   
   
  })
</script>
</body>

</html>
<?php
if(isset($_POST['regsignup']))
{
	include("connect.php");
	include("enc.php");

	$rname = $_POST['regname'];
	$remail = $_POST['regemail'];
	$rpwd = $_POST['regpass'];
	$repwd = $_POST['regrepass'];
	$rmobile = $_POST['regmobile'];
	$uname = $_POST['regusername'];

	$dateOfBirth = $_POST['dob'];
	$rgender = $_POST['gender'];
	$rstatus = "yes";
	//$encrypted = encrypt($string, ENCRYPTION_KEY);
	$encpass = md5($rpwd);
	
	
	
	if($rpwd!=$repwd)
	{
		//echo "heyy password not match";
		echo "<script type='text/javascript'>";
		echo "alert('Password did not match');";
		echo "</script>";
	}
	else
	{
			
		$res = mysqli_query($con,"select * from tbl_studentmaster where Email='$remail'");
		if(mysqli_num_rows($res)>0)
		{
			echo "<script type='text/javascript'>";
			echo "alert('Email Id Already Exists');";
			echo "</script>";
		}
		else
		{
			$res1 = mysqli_query($con,"select max(StudentId) from tbl_studentmaster");
			$pid=0;
			while($r1=mysqli_fetch_row($res1))
			{
				$pid=$r1[0];
			}
			$pid++;
			$res2 = mysqli_query($con,"insert into tbl_studentmaster values('$pid','$rname','$remail','$rgender','$dateOfBirth','$uname','$encpass','$rmobile','$rstatus')");
			if($res2=="1")
			{
				echo "<script type='text/javascript'>";
				echo "alert('Registration Done');";
				echo "window.location.href='index.php';";
				echo "</script>";
			}
			else
			{
				echo "<script type='text/javascript'>";
				echo "alert('check details!!!');";
				echo "window.location.href='registration.php';";
				echo "</script>";
			}
		}
	}
	mysqli_close($con);
}
?>

