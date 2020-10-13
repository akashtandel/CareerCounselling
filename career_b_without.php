<?php
session_start();
//error_reporting(0);
include("connect.php");

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
						<a href="logout.php" class="text-uppercase"></a>
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
					<a class="navbar-brand logo_h" href="user_index.php"><h3>Career Guidance</h3></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
							
							<li class="nav-item  active"><a class="nav-link" href="career_b_without.php">Career Booklet</a></li>
							
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
      <h2>Career Booklet</h2>
      <hr>
    </div>
	<section id="form"><!--form-->
		<div class="container">
			
				<center><div class="col-sm-12">
					<div class="signup-form"><!--sign up form-->
						<form name="form1" action="" method="post">
							<!--<center><h2 class="title text-center">Create An Account</h2></center>-->
							<!--<div class="form-group col-md-6">
				                <input type="text" name="regname" class="form-control" required="required" value="<?php echo " ".$res['Email']; ?>" disabled/>
							</div>-->
							<div class="form-group">
							<i>
									A career choice should never be influenced by peers or relatives. 
									Medicine and engineering are no longer the only career options for students today.
									With the availability of better quality education, awareness, technology and the ever increasing and varied industry requirements,
									an individual can now choose the exact career path he wants to pursue based on his personal
									profile and interests. A career choice should be made after carefully considering every 
									minute detail, situation, interest and scope. 
									Unfortunately, most students fail to get this right at the right time and end up in courses 
									and professions that neither satisfy their passion nor keep them motivated.
							</i>
							</div>
							<div class="form-group col-md-20">
							<li class="nav-item"><a class="nav-link" href="./images/CareerBooklet.docx">View  or Download Career Booklet</a></li>
				            </div>
							<div class="form-group col-md-20">
				               <table class="form-group col-md-1">
							   <tr>
							   <!--<td><button type="submit" name="regsignup" class="btn btn-custom btn-lg page-scroll" onclick="return validation();">Send Mail</button></td>
							<!--   <td><button type="reset" class="btn btn-custom btn-lg page-scroll">Cancel</button></td>-->
								</tr>
								</table>
							</div>
							
						</form>
					</div><!--/sign up form-->
				</div></center>
			</div>
		</div>
	</section><!--/form-->
</div></div><br><br><br><br>

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
</body>

</html>
<?php
if(isset($_POST['regsignup']))
{
	include("connect.php");

}
?>