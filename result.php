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
							<li class="nav-item  active"><a class="nav-link" href="user_result.php">Result</a></li>
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
	<section id="form"><!--form-->
		<div class="container">
	
		<center><!--<div class="col-sm-30">-->
			<div class="signup-form"><!--sign up form-->
			<form name="form1" action="" method="post">
				<!--<center><h2 class="title text-center">Create An Account</h2></center>-->
				<div class="form-group col-md-6">
					<input type="text" name="regname" class="form-control" required="required" value="<?php echo " ".$res['Email']; ?>" disabled/>
				</div>
							
			 <!-- AREA CHART 
			 <div class="col-md-6">-->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Area Chart</h3>   
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="areaChart" style="height:250px; min-height:250px"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!--</div>
            <!-- /.card -->

            <!-- DONUT CHART 
			<div class="col-md-6">-->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Donut Chart</h3>  
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="height:230px; min-height:230px"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!--</div>
            <!-- /.card -->

            <!-- PIE CHART 
			<div class="col-md-6">-->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Pie Chart</h3>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="height:230px; min-height:230px"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!--</div>
            <!-- /.card -->

          </div>
          <!-- /.col (LEFT) 
          <div class="col-md-6">-->
            <!-- LINE CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Line Chart</h3> 
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="lineChart" style="height:250px; min-height:250px"></canvas>
                </div>
              </div>
              
            </div>
            <!-- /.card -->

            <!-- BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Bar Chart</h3> 
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="height:230px; min-height:230px"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- STACKED BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Stacked Bar Chart</h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="stackedBarChart" style="height:230px; min-height:230px"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            <!--</div>
		<!-- /.card -->
			
			
			<div class="form-group col-md-20">
			   <table class="form-group col-md-2">
			   <tr>
			   <td><button type="submit" name="ok" class="btn btn-custom btn-lg page-scroll" onclick="return validation();">Ok</button></td>
			   <!--<td><button type="reset" class="btn btn-custom btn-lg page-scroll">Cancel</button></td>-->
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
<br><br><br><br>

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
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

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
          data                : [<?php echo $sci_l2;?>,<?php echo $com_l2;?>,<?php echo $arts_l2;?>,<?php echo $voca_l2;?>]
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
          data                : [<?php echo $sci_l1;?>,<?php echo $com_l1;?>,<?php echo $arts_l1;?>,<?php echo $voca_l1;?>]
        },
        
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, { 
      type: 'line',
      data: areaChartData, 
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
    var lineChartData = jQuery.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, { 
      type: 'line',
      data: lineChartData, 
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Science', 
          'Commerce',
          'Arts', 
          'Voactinal' 
      ],
      datasets: [
        {
          data: [<?php echo $sci_l1;?>,<?php echo $com_l1;?>,<?php echo $arts_l1;?>,<?php echo $voca_l1;?>],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })

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
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = jQuery.extend(true, {}, barChartData)

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

</body>

</html>
