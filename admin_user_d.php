<?php
include("connect.php");


$res1 = mysqli_query($con,"select max(StudentId) from tbl_studentmaster");
$stid=0;
while($r1=mysqli_fetch_row($res1))
{
	$stid=$r1[0];
}
$stid; 

$res2 = mysqli_query($con,"select max(ResId) from tbl_response");
$reid=0;
while($r2=mysqli_fetch_row($res2))
{
	$reid=$r2[0];
}
$resr = mysqli_query($con,"select * from tbl_response");
while($r3=mysqli_fetch_assoc($resr))
{
	$reid=$r3['ResId'];
	$srid=$r3['StudentId'];
	$response=$r3['Response'];
}
$resa= mysqli_query($con,"select * from tbl_admin");
while($ra=mysqli_fetch_assoc($resa))
{
	$Aname=$ra['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
      
       <!-- <div class="account-dropdown__footer">-->
            <a href="logout.php" class="d-block"><img src="./images/icons/icon.png" height="40" width="40"/>LOGOUT</a>
        <!--</div>-->
      </li>
    </ul>
  </nav><!-- /.navbar -->

   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin_index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="admin_index.php" class="d-block"><?php echo $Aname; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="admin_index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!--<i class="right fas fa-angle-left"></i>-->
              </p>
            </a>
            
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
			<li class="nav-item">
                <a href="./admin_user_d.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Details</p>
                </a>
              </li>
				<li class="nav-item">
                <a href="./admin_question_d.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Question Details</p>
                </a>
              </li>
			<li class="nav-item">
                <a href="./admin_feedback.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Feedbacks</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="./admin_question.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Question</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="./admin_category.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Category</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="./admin_stream.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Stream</p>
                </a>
              </li>
              </ul>
			 </li>
			 <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
			<li class="nav-item">
                <a href="./admin_total_user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students/Users</p>
                </a>
            </li>
			<li class="nav-item">
                <a href="./admin_exam.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exam </p>
                </a>
            </li>
			<!--<li class="nav-item">
                <a href="./admin_user_d.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Feedback Of Question</p>
                </a>
            </li>-->
			
			<li class="nav-item">
                <a href="./admin_month_exam.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monthly Exam</p>
                </a>
            </li>
			<li class="nav-item">
                <a href="./admin_suggestion.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suggestions</p>
                </a>
            </li>
			<li class="nav-item">
                <a href="./admin_test_en.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Test Enrolled Students</p>
                </a>
            </li>
			
			
              </ul>
			</li>
			
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_index.php">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Table For Student Information</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Gender</th>
                  <th>Dob</th>
                  <th>Mobile</th>
                  <th><font color="green">View marks</font></th>
                  <th><font color="blue">View Result</font></th>
                  <!--<th><font color="blue">Update</font></th>
                  <th><font color="red">Block</font></th>-->
                </tr>
                </thead>
                <tbody>
				<?php
				$sql1=mysqli_query($con,"select * from tbl_studentmaster");
				while($res1=mysqli_fetch_assoc($sql1))
				{
					$sid=$res1['StudentId'];
					$sname=$res1['StudentName'];
					$semail=$res1['Email'];
					$sgender=$res1['Gender'];
					$sdob=$res1['DOB'];
					$suname=$res1['Username'];
					$smobile=$res1['Mobile'];
				?>				
                <tr>
                  <td><?php echo $sid;?></td>
                  <td><?php echo $sname;?></td>
                  <td><?php echo $semail;?></td>
                  <td><?php echo $sgender;?></td>
                  <td><?php echo $sdob;?></td>
                  <td><?php echo $smobile;?></td>
                  <td><a href='admin_view_marks.php?vid=<?php echo $sid;?>&&name=<?php echo $sname;?>'><font color="green"><u>View Marks</u></font></a></td>
                  <td><a href='admin_view_result.php?rid=<?php echo $sid;?>'><font color="blue"><u>View Result</u></font></a></td>
                 <!-- <td><a href='admin_user_d.php?uid=<?php //echo $sid;?>'><u>Update</u></a></td>
                  <td><a href='admin_user_d.php?did=<?php //echo $sid;?>'><font color="red"><u>Delete</u></font></a></td>-->
                </tr>
				<?php
				}
				?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Gender</th>
                  <th>Dob</th>
                  <th>Mobile</th>
				  <th><font color="green">View marks</font></th>
				  <th><font color="blue">View Result</font></th>
                  <!--<th><font color="blue">Update</font></th>
                  <th><font color="red">Block</font></th>-->
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">

    </div>
    <strong>Copyright &copy; 2014-2019 Admin.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes --><script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
