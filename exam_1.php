<?php
session_start();
//error_reporting(0);
include("connect.php");
$user_profile = $_SESSION['useremail'];
if($user_profile==true)
{
	
}
else
{
	echo "<script type='text/javascript'>";
	echo "window.location.href='login.php';";
	echo "</script>";
}
$sql = "select * from tbl_studentmaster where Email='$user_profile'";
$cmd = mysqli_query($con,$sql);
$res = mysqli_fetch_assoc($cmd);

//for select question from table
 if (isset($_GET['pageno'])) {
	$pageno = $_GET['pageno'];
} else {
	$pageno = 1;
}
echo $no_of_records_per_page = 8;
echo $offset = ($pageno-1) * $no_of_records_per_page;

include"connect.php";

$total_pages_sql = "SELECT COUNT(*) FROM tbl_question";
$result = mysqli_query($con,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);


function randomGen($min,$max,$q)
{
	$num=range($min,$max);
	shuffle($num);
	return array_slice($num,0,$q);
}
$res1 = mysqli_query($con,"select max(QueId) from tbl_question");
$pid=0;
while($r1=mysqli_fetch_row($res1))
{
	$pid=$r1[0];
}
$pid;
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
	<!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
	<?php
	for($i=1;$i<=$pid;$i++)
	{		  
	?>
	$(function(){	
	  $('input[type="radio"]').click(function(){ 
		if ($('#a<?php echo $i; ?>').is(':checked'))
		{
			$("#<?php echo $i; ?>").css("color", "black");
			$("#b<?php echo $i; ?>").css("background-color", "skyblue");
			$("#<?php echo $i; ?>").animate({height: "300px"});
			//alert($(this).val());
		}
		if ($('#2a<?php echo $i; ?>').is(':checked'))
		{
			$("#<?php echo $i; ?>").css("color", "black");
			$("#b<?php echo $i; ?>").css("background-color", "skyblue");
			$("#<?php echo $i; ?>").animate({height: "300px"});
			//alert($(this).val());
		}
	  });
	});
	<?php
	}
	?>
	</script>
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-4 header-top-left">
						<a href="#" class="text-uppercase"><?php echo " hello ".$res['Username']; ?></a>
					</div>
					<div class="col-lg-6 col-sm-6 col-8 header-top-right">
						<!--<a href="#" class="text-uppercase"><?php echo " hello ".$res['Username']; ?></a>-->
						<a class="text-uppercase" href="user_index.php">Home</a>
						<a class="text-uppercase" href="test_enroll.php">Career Test</a>
						<a class="text-uppercase" href="logout.php">Logout</a>
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
							<!--<li class="nav-item"><a class="nav-link" href="user_index.php">Home</a></li>
							<li class="nav-item    active"><a class="nav-link" href="test_enroll.php">Career Test</a></li>
							<li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
							<li class="nav-item"><a class="nav-link" href="career_b.php">Career Booklet</a></li>
							<li class="nav-item"><a class="nav-link" href="user_give.php">Give response</a></li>-->
							
						</ul>

					</div>
				</div>
				<ul class="navbar-nav">
				<li class="nav-item d-none d-sm-inline-block">
				<?php
				
				for($i=1;$i<=$pid;$i++)
				{	
				?>
				
				<div id="b<?php echo $i; ?>" style="background:#F0FFFF;height:40px;width:40px;margin:4px;" class="btn btn-app">
				<i id="b<?php echo $i; ?>"  class="fas fa"><?php echo $i;?></i> 
				</div>
				<?php
				}
				?>
				</li>
				</ul>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<div id="contact">
  <div class="container">
    <div class="section-title text-center">
	<br>
      <h2>Career Test</h2>
      <hr>
    </div>
	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <!--<div class="card-header">
                <h3 class="card-title">Questions</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>-->
              <div class="card-body">
                
				
						<form name="form1" action="" method="post">
							<?php

								$res1 = mysqli_query($con,"select max(QueId) from tbl_question");
									$pid=0;
									while($r1=mysqli_fetch_row($res1))
									{
										$pid=$r1[0];
										$v=randomGen(1,$pid,$pid);
										foreach($v as $key=>$que_id)
										{
										$k=$key+1;
										$res2=mysqli_query($con,"select * from tbl_question where QueId='$que_id' LIMIT $offset, $no_of_records_per_page");
										while($r2=mysqli_fetch_assoc($res2))
										{
											//$k=$que_id;
											$que_text=$r2['QueText'];
											$que_ans=$r2['QueAnswer'];
											$category=$r2['C_id'];
											$stream=$r2['S_id'];
											$op1=$r2['op1'];
											$op2=$r2['op2'];
											
								?>
								<!--<div class="form-group col-md-6">-->
									<!--<input type="text" name="txtque<?php //echo $que_id?>" readonly="readonly" class="form-control" value="<?php //echo $k."    ".$que_text."   ".$que_ans;?>"/>-->
									<input type="text" name="txtque<?php echo $que_id?>" readonly="readonly" class="form-control" value="<?php echo $k."    ".$que_text;?>"/>
									<input type="hidden" name="hdn<?php echo $que_id?>" value="<?php echo $que_id;?>">
									<input type="hidden" name="hdna<?php echo $que_id?>" value="<?php echo $que_ans;?>"/>
									<input type="hidden" name="hdns<?php echo $que_id?>" value="<?php echo $stream;?>"/>
									<input type="hidden" name="hdnc<?php echo $que_id?>" value="<?php echo $category;?>"/>
									<table class="form-group col-md-10">
									<tr>
									<br>
									<td><input type="radio" name="a<?php echo $que_id; ?>" value="<?php echo $op1; ?>" id="a<?php echo $k; ?>"/>	<?php echo $op1; ?></td>
									<td><input type="radio" name="a<?php echo $que_id; ?>" value="<?php echo $op2; ?>" id="2a<?php echo $k; ?>"/>	<?php echo $op2; ?></td>
									</tr>
									</table>
								<!--</div>-->
								<?php
										}
									}
									}
									$pid;
							?>
							</div>
							</div>
							</div>
							</div>
							</div>
							<center>
							<div class="form-group">
				               <table class="form-group">
							   <?php
								//$pageno=$_GET['pageno'];
								//if($pageno==5)
								{
							   ?>
							   <tr>
							   <td><button type="submit" name="submit" class="btn btn-custom btn-lg page-scroll" onclick="return validation();">FINISH</button></td>
							   &nbsp;
							   <!--<td><button type="reset" class="btn btn-custom btn-lg page-scroll">Cancel</button></td>-->
								<!--</tr>
								<tr>
								<td>
								<ul class="pagination">
								<!--<li><a href="?pageno=1">First</a></li>
								<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
									<a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
								</li>
								&nbsp;
								<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
									<a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
								</li>
								<li><a href="?pageno=<?php //echo $total_pages; ?>">Last</a></li>
								</ul>
								</td>
								</tr>-->
								<?php
								}
								//else
								{
								?>
								
								<!--<tr>
								<td>
								<ul class="pagination">
								<li><a href="?pageno=1">First</a></li>
								<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
									<a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
								</li>
								&nbsp;
								<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
									<a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
								</li>
								<li><a href="?pageno=<?php //echo $total_pages; ?>">Last</a></li>
								</ul>
								</td>
								</tr>-->
								<?php
								}
								?>
								</table>
							</div>
						</form>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
	
</div></div><br><br><br><br><br><br><br>
	<div class="row">
		<div class="col-lg-8 border border-danger">
		</div>
		<div class="col-md-4 border border-primary"></div>
	</div>
	<!--================ End Registration Area =================-->
	<!--================ Start Events Area =================-
	<!--================ End Events Area =================-->


	<!--================ Start footer Area  =================-->
	<!--<footer class="footer-area">
		<div>
			<center><div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-4 footer-text m-0 text-white">Copyright © 2019 All rights reserved </p>
			</div></center>
		</div>
	</footer>-->
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
if(isset($_POST['submit']))
{
	$sci=0;
	$com=0;
	$arts=0;
	$voca=0;
	$total=0;
	foreach($v as $key=>$que_id)
	{
		
		//echo $q=$_POST["txtque$que_id"];
		//echo "que==".$hid=$_POST["hdn$que_id"];
		$hid=$_POST["hdn$que_id"];
		//echo "stream==".$stream=$_POST["hdns$que_id"];
		$stream=$_POST["hdns$que_id"];
		//echo "categoty==".$category=$_POST["hdnc$que_id"];
		$category=$_POST["hdnc$que_id"];
		
		//echo $hians=$_POST["hdna$que_id"];
		//echo "ans==".$sanswer=$_POST["a$que_id"];
		$sanswer=$_POST["a$que_id"];
		echo "<br>";
		if($stream==1 && $sanswer=="Intrested")
		{
			echo "<br>";
			$sci=$sci+1;
		}
		else if($stream==2 && $sanswer=="Intrested")
		{
			echo "<br>";
			$com=$com+1;
		}
		else if($stream==3 && $sanswer=="Intrested")
		{
			echo "<br>";
			$arts=$arts+1;
		}
		else if($stream==4 && $sanswer=="Intrested")
		{
			echo "<br>";
			$voca=$voca+1;
		}
		
	}
	echo "you have answer of science stream is".$sci."<br>";
	echo "you have answer of commerce stream is".$com."<br>";
	echo "you have answer of Arts stream is".$arts."<br>";
	echo "you have answer of vocational stream is".$voca."<br>";
}
?>
