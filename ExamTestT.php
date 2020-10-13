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


function randomGen($min,$max,$q)
{
	$num=range($min,$max);
	shuffle($num);
	return array_slice($num,0,$q);
}
$res1 = mysqli_query($con,"select count(C_id) from tbl_question where C_id=1");
$pid=0;
while($r1=mysqli_fetch_row($res1))
{
	$pid=$r1[0];
}
$pid;
// for count total perticular stream questions $total_sci,$total_com,$total_arts,$total_voca
/*$ress=mysqli_query($con,"select count(QueId) from tbl_question where C_id='1' and S_id='1'");
$total_sci=0;
while($rs=mysqli_fetch_row($ress))
{
	$total_sci=$rs[0];
}
echo $total_sci;

$resc=mysqli_query($con,"select count(QueId) from tbl_question where C_id='1' and S_id='2'");
$total_com=0;
while($rc=mysqli_fetch_row($resc))
{
	$total_com=$rc[0];
}
echo $total_com;

$resa=mysqli_query($con,"select count(QueId) from tbl_question where C_id='1' and S_id='3'");
$total_arts=0;
while($ra=mysqli_fetch_row($resa))
{
	$total_arts=$ra[0];
}
echo $total_arts;

$resv=mysqli_query($con,"select count(QueId) from tbl_question where C_id='1' and S_id='4'");
$total_voca=0;
while($rv=mysqli_fetch_row($resv))
{
	$total_voca=$rv[0];
}
echo $total_voca;*/
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

<!--<script>
$(function(){
  $('input[type="radio"]').click(function(){
    if ($('#a').is(':checked'))
    {
		//$("#p2").css("color", "red");
		$("#b").css("background-color", "skyblue");
		//alert($(this).val());
    }
	if ($('#2a').is(':checked'))
    {
		//$("#p2").css("color", "red");
		$("#b").css("background-color", "skyblue");
		//alert($(this).val());
    }
  });
});
</script>-->
<style>
html {
  scroll-behavior: smooth;
}
</style>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  width: 230px;
  position: fixed;
  z-index: 1;
  top: 125px;
  left: 20px;

  overflow-x: hidden;
  padding: 45px 0px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #2196F3;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}

.main {
  margin-left: 0px; /* Same width as the sidebar + left position in px */
  padding: 0px 0px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

<?php
for($i=1;$i<=$pid;$i++)
{	
?>
<script>
$(function(){
  $('input[type="radio"]').click(function(){
    if ($('#a<?php echo $i; ?>').is(':checked'))
    {
		//$("#p2").css("color", "red");
		$("#b<?php echo $i; ?>").css("background-color", "skyblue");
		//alert($(this).val());
    }
	if ($('#2a<?php echo $i; ?>').is(':checked'))
    {
		//$("#p2").css("color", "red");
		$("#b<?php echo $i; ?>").css("background-color", "skyblue");
		//alert($(this).val());
    }
  });
});
</script>
<?php
}
?>
</head>

<body>

<!--<div id="b" style="background:#F0FFFF;height:40px;width:40px;margin:4px;" class="btn btn-app">
				<i id="b"  class="fas fa"></i> 
</div>
				<input type="radio" name="a" value="" id="a"/>
				<input type="radio" name="a" value="" id="2a"/>-->



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
				
						</ul>

					</div>
				</div>
				
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<!--<div id="contact">
  <div class="container">-->
    <div class="section-title text-center">
      <h2>Test Level 1</h2>
      <hr>
    </div>
	
	
	<div class="row">
	<div class="col-md-3">
		<ul class="navbar-nav  sidenav">
				<li class="nav-item d-none d-sm-inline-block">
				<?php
				
				for($i=1;$i<=$pid;$i++)
				{	
				?>
				
				<div id="b<?php echo $i; ?>" style="background:#F0FFFF;height:40px;width:40px;margin:6px;" class="btn btn-app">
				<i id="b<?php echo $i;?>"  class="fas fa" ><a href="#<?php echo $i;?>"><font size="4px"><?php echo $i;?></font></a></i> 
				</div>
				<?php
				}
				?>
				</li>
		</ul>
	</div>
		<div class="col-lg-9">
		              <div class="card-body main">
                
				
						<form name="form1" action="" method="post">
							<?php

								$res1 = mysqli_query($con,"select count(QueId) from tbl_question where C_id=1");
									$pid=0;
									while($r1=mysqli_fetch_row($res1))
									{
										$pid=$r1[0];
										$v=randomGen(1,$pid,$pid);
										foreach($v as $key=>$que_id)
										{
										$k=$key+1;
										$res2=mysqli_query($con,"select * from tbl_question where QueId='$que_id' and C_id=1");
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
									<!--<p><b><?php //echo $k."    ".$que_text;?></b></p>-->
									<div id="<?php echo $k+1;?>">
									<input type="text" name="txtque<?php echo $que_id?>" readonly="readonly" class="form-control" value="<?php echo $k."    ".$que_text;?>"/>
									<!--hidden fields for question_id,question_answer,stream,category-->
									<input type="hidden" name="hdn<?php echo $que_id?>" value="<?php echo $que_id;?>">
									<input type="hidden" name="hdna<?php echo $que_id?>" value="<?php echo $que_ans;?>"/>
									<input type="hidden" name="hdns<?php echo $que_id?>" value="<?php echo $stream;?>"/>
									<input type="hidden" name="hdnc<?php echo $que_id?>" value="<?php echo $category;?>"/>
									<table class="form-group col-md-10">
									<tr>
									<br>
									<td><input type="radio" name="a<?php echo $que_id; ?>" value="<?php echo $op1; ?>" id="a<?php echo $k; ?>"  required/>	<?php echo $op1; ?></td>
									<td><input type="radio" name="a<?php echo $que_id; ?>" value="<?php echo $op2; ?>" id="2a<?php echo $k; ?>"/>	<?php echo $op2; ?></td>
									</tr>
									</table>
									</div>
								<!--</div>-->
								<?php
										}
									}
									}
								
							?>
							
							</div>
							<div class="form-group center">
				               <table class="form-group">
							   
							   <tr>
							   <center>
							   <td><button type="submit" name="submit" class="btn btn-custom btn-lg page-scroll" onclick="return validation();">GO FOR LEVEL 2</button></td>
								</center>
								</tr>
								</table>
							</div>
						</form>
		</div>
		
	</div>
	
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
	// $sci ,$com,$arts,$voca is local variable to set global  variable of level 1 and store here in session 
	$sci=0;
	$com=0;
	$arts=0;
	$voca=0;
	$total=0;
	
	//percantage answered question
	$per_sci=0;
	$per_com=0;
	$per_arts=0;
	$per_voca=0;
	
	//variables $total_sci,$total_arts,$total_com,$total_voca for total questions of perticular stream
	// for count total perticular stream questions $total_sci,$total_com,$total_arts,$total_voca
	$ress=mysqli_query($con,"select count(QueId) from tbl_question where C_id='1' and S_id='1'");
	$total_sci=0;
	while($rs=mysqli_fetch_row($ress))
	{
		$total_sci=$rs[0];
	}
	//echo $total_sci;

	$resc=mysqli_query($con,"select count(QueId) from tbl_question where C_id='1' and S_id='2'");
	$total_com=0;
	while($rc=mysqli_fetch_row($resc))
	{
		$total_com=$rc[0];
	}
	//echo $total_com;

	$resa=mysqli_query($con,"select count(QueId) from tbl_question where C_id='1' and S_id='3'");
	$total_arts=0;
	while($ra=mysqli_fetch_row($resa))
	{
		$total_arts=$ra[0];
	}
	//echo $total_arts;

	$resv=mysqli_query($con,"select count(QueId) from tbl_question where C_id='1' and S_id='4'");
	$total_voca=0;
	while($rv=mysqli_fetch_row($resv))
	{
		$total_voca=$rv[0];
	}
	//echo $total_voca;

	foreach($v as $key=>$que_id)
	{
		
		//echo $q=$_POST["txtque$que_id"];
		//echo "que==".$hid=$_POST["hdn$que_id"];
		//hidden id catch
		$hid=$_POST["hdn$que_id"];
		//echo "stream==".$stream=$_POST["hdns$que_id"];
		//hidden stream
		$stream=$_POST["hdns$que_id"];
		//echo "categoty==".$category=$_POST["hdnc$que_id"];
		//catch hidden category 
		$category=$_POST["hdnc$que_id"];
		
		//echo $hians=$_POST["hdna$que_id"];
		//echo "ans==".$sanswer=$_POST["a$que_id"];
		//catch hidden answer 
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
		/*if($sanswer=="Intrested")
		{
			echo "u can select any stream";
		}*/
		
	}
			
	/*echo "you have answer of science stream is".$sci."<br>";
	echo "you have answer of commerce stream is".$com."<br>";
	echo "you have answer of Arts stream is".$arts."<br>";
	echo "you have answer of vocational stream is".$voca."<br>";*/
	
	$per_sci=($sci*100)/$total_sci;
	$per_com=($com*100)/$total_com;
	$per_arts=($arts*100)/$total_arts;
	$per_voca=($voca*100)/$total_voca;
	
	$per_sci=number_format((float)$per_sci, 2, '.', '')."<br>";
	$per_com=number_format((float)$per_com, 2, '.', '')."<br>";
	$per_arts=number_format((float)$per_arts, 2, '.', '')."<br>";
	$per_voca=number_format((float)$per_voca, 2, '.', '')."<br>";
	
	
	/*total percentage of perticular streams question answered*/
	
	$_SESSION['leval1_sci']=$per_sci;
	$_SESSION['leval1_com']=$per_com;
	$_SESSION['leval1_arts']=$per_arts;
	$_SESSION['leval1_voca']=$per_voca;
	
	echo "<script type='text/javascript'>";
	//echo "alert('level 1');";
	//echo "window.location.href='level2_confirmation.php';";
	echo "window.location.href='level2.php';";
	echo "</script>";
}
?>
