<?php
session_start();
error_reporting(0);
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

$sci_l1 = $_SESSION['leval1_sci'];
$com_l1 = $_SESSION['leval1_com'];
$arts_l1 = $_SESSION['leval1_arts'];
$voca_l1 = $_SESSION['leval1_voca'];

$sci_l2 = $_SESSION['leval2_sci'];
$com_l2 = $_SESSION['leval2_com'];
$arts_l2 = $_SESSION['leval2_arts'];
$voca_l2 = $_SESSION['leval2_voca'];
$stream="";
//total percentage from level1 and level2 submition ans its devided by 2 and variable is $sci,4com,$arts,$voca 
$sci=$com=$arts=$voca=$max=0;
$sci=($sci_l1+$sci_l2)/2;
//echo "<br>";
$com=($com_l1+$com_l2)/2;
//echo "<br>";
$arts=($arts_l1+$arts_l2)/2;
//echo "<br>";
$voca=($voca_l1+$voca_l2)/2;
if($sci>$com && $sci>$arts && $sci>$voca)
{
	$max=$sci;
	$stream='Science';
}
elseif($com>$sci && $com>$arts && $com>$voca)
{
	$max=$com;
	$stream='Commerce';
}
elseif($arts>$sci && $arts>$com && $arts>$voca)
{
	$max=$arts;
	$stream='Arts';
}
else
{
	$max=$voca;
	$stream='Vocational';
}


	if($stream=='Science')
	{
		$text='The primary subjects in science stream are Physics, Chemistry, Biology, Mathematics and Computer Science. Among other subjects, English is compulsory while the other language subject is left for choice. There are also practical labs along with theory, which calls for a lot of hard work for students in this stream.
Opting for science stream opens up both medical and non-medical career options, including medical science, engineering, and other interdisciplinary careers.
If interested in a medical field, you will have to include Biology along with Physics and Chemistry as your core subject combination, while for engineering, you will have to replace biology for mathematics or computer science as the core subject';
	}
	elseif($stream=='Commerce')
	{
		$text='Commerce as a stream of education can be defined as a study of trade and business activities such as the exchange of goods and services from producer to final consumer. The main subjects that are taught in the Commerce stream in Class 11 and 12 include Economics, Accountancy and Business Studies. Choose this field if you have a genuine interest in these subjects and have an affinity for numbers, the economy and business!';
	}
	elseif($stream=='Arts')
	{
		$text=' Arts stream offers numerous career options and opportunities to students. It is a very traditional stream. This is one of the main reasons why this stream still has got takers in India! This stream is made up of parts like humanities, visual arts, performing arts, literary arts etc.
As mentioned before, arts stream is very diverse. This fact is evident from the studies involved in this stream. It covers wide variety of studies such as- visual arts (painting, sculpting, drawing etc), performing arts (music, dance, drama etc), literary arts (languages, literature, philosophy etc), history, law, humanities subjects, geography, political science etc.';
	}
	elseif($stream=='Vocational')
	{
		$text='A vocational course, as the name suggests, aims to prepare students for a specific profession, vocation or trade. These courses are tailor made and quite direct in their purpose which is to make students completely job-ready. The term vocational means work-related
Vocational courses involve less of the traditional academic learning and more of hands-on training. Such courses focus on applying the skills learnt and are the ideal stepping stone from the world of education to a stable career.
Courses like Home science, Agriculture, Hospitality & tourism and etc.';
	}
	
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
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

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
						<a href="logout.php" class="text-uppercase"><?php echo " hello ".$res['Username']; ?></a>
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
							<li class="nav-item"><a class="nav-link" href="user_index.php">Home</a></li>
							<li class="nav-item  active"><a class="nav-link" href="result_chat.php">Result</a></li>
							<!--<li class="nav-item"><a class="nav-link" href="test_enroll.php">Career Test</a></li>
							<li class="nav-item "><a class="nav-link" href="feedback.php">Feedback</a></li>
							<li class="nav-item"><a class="nav-link" href="career_b.php">Career Booklet </a></li>
							<li class="nav-item"><a class="nav-link" href="user_give.php">Give response</a></li>-->
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<div id="contact">
  <!--<div class="container">-->
    <div class="section-title text-center">
      <h2>Result from test</h2>
      <hr>
    </div>
	<section id="form"><!--form
		<div class="container">-->
		<div class="center">
	
		<center><!--<div class="col-sm-30">-->
			<div class="signup-form"><!--sign up form-->
			<form method="post">
				<!--<center><h2 class="title text-center">Create An Account</h2></center>-->
				<div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <h4>Name :-<font color="red"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".$res['Username']; ?></font></h4>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <h4>Date :-<font color="red"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".date("Y-m-d"); ?></font></h4>
	                </div>
	            </div>
              </div>
				<div class="form-group col-md-6">
				
					<!--<input type="text" name="regname" class="form-control" required="required" value="<?php //echo " ".$res['Email']; ?>" disabled/>-->
					 
					<input type="hidden" value="<?php echo $res['StudentId'];?>" name="id"/>
					<input type="hidden" value="<?php echo $res['Email'];?>" name="email"/>
					<input type="hidden" value="<?php echo $res['StudentName'];?>" name="name"/>
					<input type="hidden" value="<?php echo $res['Mobile'];?>" name="mobile"/>
					<input type="hidden" value="<?php echo $max;?>" name="max"/>
					<input type="hidden" value="<?php echo $stream;?>" name="stream"/>
				</div>
				<div class="form-group col-md-12">
				<label><p><?php echo $text;?></p></label>
				</div>

            <!--
			<div class="form-group">
			<div class="form-group col-md-6">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Chart For Level 2 & Level 1 result</h3> 
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="height:230px; min-height:230px"></canvas>
                </div>
              </div>
            </div>
            </div>
           
			<div class="form-group col-md-6">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Chart for Overall result</h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="stackedBarChart" style="height:230px; min-height:230px"></canvas>
                </div>
              </div>
            </div>
            </div>-->
		
		<br><br>
		
			<div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
						<div class="card card-success">
						  <div class="card-header">
							<h3 class="card-title">Chart For Level 2 & Level 1 result in percentage</h3> 
						  </div>
						  <div class="card-body">
							<div class="chart">
							  <canvas id="barChart" style="height:230px; min-height:230px"></canvas>
							</div>
						  </div>
						  <!-- /.card-body -->
							<!--<h3 class="card-title">Hiiiiiii</h3>-->
						</div>
					</div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
						<div class="card card-success">
						  <div class="card-header">
							<h3 class="card-title">Chart for Overall result in percentage</h3>
						  </div>
						  <div class="card-body">
							<div class="chart">
							  <canvas id="stackedBarChart" style="height:230px; min-height:230px"></canvas>
							</div>
						  </div>
						 
						</div>
	                </div>
	            </div>
              </div>
			
			<div class="form-group col-md-20">
			   <table class="form-group col-md-2">
			   <tr>
			   <td><button type="submit" name="ok" class="btn btn-block btn-primary btn-lg">Ok</button></td>
			   <!--<td><button type="reset" class="btn btn-custom btn-lg page-scroll">Cancel</button></td>-->
				</tr>
				</table>
			</div>
			</div>
			
						</form>
					</div><!--/sign up form-->
				</div></center>
			</div>
		
	</section><!--/form-->
	<br><br>
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
	
	<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    //var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['Science','Commerce','Arts','Voactinal'],
      datasets: [
		{
          label               : 'Level 2',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?php echo $sci_l2|0;?>,<?php echo $com_l2|0;?>,<?php echo $arts_l2|0;?>,<?php echo $voca_l2|0;?>]
        },
        {
          label               : 'Level 1',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $sci_l1|0;?>,<?php echo $com_l1|0;?>,<?php echo $arts_l1|0;?>,<?php echo $voca_l1|0;?>]
        },
        
      ]
    }

    



    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[1]
    var temp1 = areaChartData.datasets[0]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
	var stackedBarChartData = {
      labels  : ['Science','Commerce','Arts','Voactinal'],
      datasets: [
		{
          label               : 'Level 2',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?php echo ($sci_l2)/2|0;?>,<?php echo ($com_l2)/2|0;?>,<?php echo ($arts_l2)/2|0;?>,<?php echo ($voca_l2)/2|0;?>]
        },
        {
          label               : 'Level 1',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo ($sci_l1)/2|0;?>,<?php echo ($com_l1)/2|0;?>,<?php echo ($arts_l1)/2|0;?>,<?php echo ($voca_l1)/2|0;?>]
        },
        
      ]
    }

	
	
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
   // var stackedBarChartData = jQuery.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar', 
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>
<script>
function myFunction() {
  window.print();
}
</script>

</body>

</html>
<?php
if(isset($_POST['ok']))
{
	$id=$_POST['id'];
	//$email="tndlaksh@gmail.com";
	$email=$_POST['email'];
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$max=$_POST['max'];
	$stream=$_POST['stream'];
		
		
	$sci_l1 = $_SESSION['leval1_sci'];
	$com_l1 = $_SESSION['leval1_com'];
	$arts_l1 = $_SESSION['leval1_arts'];
	$voca_l1 = $_SESSION['leval1_voca'];

	$sci_l2 = $_SESSION['leval2_sci'];
	$com_l2 = $_SESSION['leval2_com'];
	$arts_l2 = $_SESSION['leval2_arts'];
	$voca_l2 = $_SESSION['leval2_voca'];
	
	$sci=$com=$arts=$voca=$max=0;
	$sci=$sci_l1+$sci_l2;
	$com=$com_l1+$com_l2;
	$arts=$arts_l1+$arts_l2;
	$voca=$voca_l1+$voca_l2;
	$date=date("Y-m-d");
	$res1 = mysqli_query($con,"select max(r_id) from tbl_result");
	$r_id=0;
	while($r1=mysqli_fetch_row($res1))
	{
		$r_id=$r1[0];
	}
	echo $r_id=$r_id+1;
	
	$text="";
	//echo $r_id.$date.$id.$sci_l1.$com_l1.$arts_l1.$voca_l1.$sci_l2.$com_l2.$arts_l2.$voca_l2.$stream."yes";

	if($stream=='Science')
	{
		$text='The primary subjects in science stream are Physics, Chemistry, Biology, Mathematics and Computer Science. Among other subjects, English is compulsory while the other language subject is left for choice. There are also practical labs along with theory, which calls for a lot of hard work for students in this stream.
Opting for science stream opens up both medical and non-medical career options, including medical science, engineering, and other interdisciplinary careers.
If interested in a medical field, you will have to include Biology along with Physics and Chemistry as your core subject combination, while for engineering, you will have to replace biology for mathematics or computer science as the core subject';
	}
	elseif($stream=='Commerce')
	{
		$text='Commerce as a stream of education can be defined as a study of trade and business activities such as the exchange of goods and services from producer to final consumer. The main subjects that are taught in the Commerce stream in Class 11 and 12 include Economics, Accountancy and Business Studies. Choose this field if you have a genuine interest in these subjects and have an affinity for numbers, the economy and business!';
	}
	elseif($stream=='Arts')
	{
		$text=' Arts stream offers numerous career options and opportunities to students. It is a very traditional stream. This is one of the main reasons why this stream still has got takers in India! This stream is made up of parts like humanities, visual arts, performing arts, literary arts etc.
As mentioned before, arts stream is very diverse. This fact is evident from the studies involved in this stream. It covers wide variety of studies such as- visual arts (painting, sculpting, drawing etc), performing arts (music, dance, drama etc), literary arts (languages, literature, philosophy etc), history, law, humanities subjects, geography, political science etc.';
	}
	elseif($stream=='Vocational')
	{
		$text='A vocational course, as the name suggests, aims to prepare students for a specific profession, vocation or trade. These courses are tailor made and quite direct in their purpose which is to make students completely job-ready. The term vocational means work-related
Vocational courses involve less of the traditional academic learning and more of hands-on training. Such courses focus on applying the skills learnt and are the ideal stepping stone from the world of education to a stable career.
Courses like Home science, Agriculture, Hospitality & tourism and etc.';
	}
	
	include("PHPMailer-master/class.phpmailer.php");
	
	$message = ("<h1>Career Guidance</h1><center><h2><font color='orange'> RESULT </font></h2></center>
				<center><table class='table table-condensed'> 
				<tr>
					<td class='cart_description'><h4>Result Id:- <font color='red'>&nbsp;&nbsp;&nbsp;&nbsp;".$r_id."</font></h4></td>
					<td class='cart_description'><h4>Date :-<font color='red'>&nbsp;&nbsp;&nbsp;&nbsp;".$date."</font></h4></td>
				</tr>
				<tr>
					<td class='cart_description'><h4>Name :-<font color='red'>&nbsp;&nbsp;&nbsp;&nbsp;".$name."</font></h4>
					</td>
					<td class='cart_description'><h4>Mobile No :-<font color='red'>&nbsp;&nbsp;&nbsp;&nbsp;".$mobile."</font></h4>
					</td>
				</tr>
				<tr>
					<td class='size' colspan=2><h4>".$text."</h4></td>
				</tr>

				<tr>
					<td><font color='red' colspan=2><center><br><h4> THANK YOU......</h4></center></font></td>
				</tr>
				</table></center>");
	
		
	//$date=date("Y-m-d");
	$res2 = mysqli_query($con,"insert into tbl_result values('$r_id','$date','$id','$sci_l1','$com_l1','$arts_l1','$voca_l1','$sci_l2','$com_l2','$arts_l2','$voca_l2','$stream','yes')");
	if($res2=="1")
	{
			$mail=new PHPMailer;
			$mail->isSMTp();
			$mail->Host="smtp.gmail.com";
			$mail->Port=587;
			$mail->SMTPAuth=true;
			$mail->SMTPSecure="tls";
			$mail->Username="tandelakash90@gmail.com";
			$mail->Password="akash9574122890";
			$mail->setFrom("tandelakash90@gmail.com","RESULT");
			$mail->addAddress($email);
			$mail->addReplyTo($email);

			$mail->isHTML(true);
			$mail->Subject="RESULT";
			$mail->Body=$message;
			//$mail->Body="<h1 align=center>spartant</h1><h4 align=center>Thank you <b>$m_name</b> for Registration on spartant Gym.</h4>";
						
			if(!$mail->send())
			{

			echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		echo "<script type='text/javascript'>";
		echo "alert('Exam given');";
		echo "window.location.href='user_index.php';";
		echo "</script>";
	}
	else
	{
		echo "<script type='text/javascript'>";
		echo "alert('check details!!!');";
		echo "window.location.href='result_chat.php';";
		echo "</script>";
	}
}
?>
