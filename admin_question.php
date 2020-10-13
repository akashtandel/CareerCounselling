<?php
include("connect.php");
error_reporting(0);

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
$uid=$_GET['uid'];
$sqlq=mysqli_query($con,"select C_id,Qcate,S_id,stream,QueText,QueAnswer,op1,op2 from tbl_stream s,tbl_questioncategory c,tbl_question q where q.C_id=c.QCId and q.S_id=s.sid and q.QueId='$uid'");
while($resq=mysqli_fetch_assoc($sqlq))
{
	$cid=$resq['C_id'];
	$category=$resq['Qcate'];
	$stream=$resq['stream'];
	$sid=$resq['S_id'];
	$qtext=$resq['QueText'];
	$qans=$resq['QueAnswer'];
	$op1=$resq['op1'];
	$op2=$resq['op2'];
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
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

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
  </nav>
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
          <a href="#" class="d-block"><?php echo $Aname; ?></a>
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
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="admin_index.php">Home</a></li>
            
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!--<div class="col-lg-3 col-6">
            <!-- small box -->
            <!--<div class="small-box bg-info">
              <div class="inner">
                <h3>15</h3>

                <p>Total Response</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>-->
          <!-- ./col -->


	
			<?php
			
				$resqq= mysqli_query($con,"select max(QueId) from tbl_question");
				$queid=0;
				while($r2=mysqli_fetch_row($resqq))
				{
				$queid=$r2[0];
				}
				$queid++;
			
			
			?>
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Question</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			  <?php
			  if($uid==true)
			  {
			  ?>
			  
			  <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Question Id</label>
                    <input name="queid" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $uid;?>" readonly="readonly">
					<input type="hidden" name="hdn_qid" value="<?php echo $uid;?>">
                  </div>
				  <div class="col-sm-13">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Category</label>
						<select class="form-control" name="category">
							<option value="<?php echo $cid;?>"><?php echo $category;?></option>
						<?php
						$sqlc=mysqli_query($con,"select * from tbl_questioncategory");
						while($r3=mysqli_fetch_assoc($sqlc))
						{
							$cid=$r3['QCId'];
							$category=$r3['Qcate'];
                        
                          echo "<option value='$cid'>$category</option>";
						}
						 ?>
                        </select>
                      </div>
                    </div>
					<div class="form-group">
                        <label>Select Stream</label>
						<select class="form-control" name="stream">
							<option value="<?php echo $sid;?>"><?php echo $stream;?></option>
						<?php
						$sqls=mysqli_query($con,"select * from tbl_stream");
						while($rs=mysqli_fetch_assoc($sqls))
						{
							$sid=$rs['sid'];
							$stream=$rs['stream'];
                        
                          echo "<option value='$sid'>$stream</option>";
						}
						 ?>
                        </select>
                      </div>
					<div class="col-sm-13">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Question</label>
                        <input type="text" name="question" class="form-control" rows="3" placeholder="Enter Question" value="<?php echo $qtext;?>">
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Answer of Question</label>
                    <input type="text" name="answer" class="form-control" id="exampleInputPassword1" placeholder="Answer" value="<?php echo $qans;?>">
                  </div>
                 <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Option 1</label>
                        <input type="text" name="op1" class="form-control" placeholder="Enter option 1" value="<?php echo $op1;?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Option 2</label>
                        <input type="text" name="op2" class="form-control" placeholder="Enter option 2" value="<?php echo $op2;?>">
                      </div>
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update" class="btn btn-primary">Update Question</button>
                </div>
              </form>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  <?php
			  }
			  else
			  {
				  ?>
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Question Id</label>
                    <input name="queid" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $queid;?>" readonly="readonly">
                  </div>
				  <div class="col-sm-13">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Category</label>
						<select class="form-control" name="category">
						<?php
						$sqlc=mysqli_query($con,"select * from tbl_questioncategory");
						while($r3=mysqli_fetch_assoc($sqlc))
						{
							$cid=$r3['QCId'];
							$category=$r3['Qcate'];
                        
                          echo "<option value='$cid'>$category</option>";
						}
						 ?>
                        </select>
                      </div>
                    </div>
					<div class="form-group">
                        <label>Select Stream</label>
						<select class="form-control" name="stream">
						<?php
						$sqls=mysqli_query($con,"select * from tbl_stream");
						while($rs=mysqli_fetch_assoc($sqls))
						{
							$sid=$rs['sid'];
							$stream=$rs['stream'];
                        
                          echo "<option value='$sid'>$stream</option>";
						}
						 ?>
                        </select>
                      </div>
					<div class="col-sm-13">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Question</label>
                        <textarea name="question" class="form-control" rows="3" placeholder="Enter Question"></textarea>
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Answer of Question</label>
                    <input type="text" name="answer" class="form-control" id="exampleInputPassword1" placeholder="Answer" value="1">
                  </div>
                 <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Option 1</label>
                        <input type="text" name="op1" class="form-control" placeholder="Enter option 1" value="Intrested">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Option 2</label>
                        <input type="text" name="op2" class="form-control" placeholder="Enter option 2" value="Not Intrested">
                      </div>
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="que" class="btn btn-primary">Add Question</button>
                </div>
              </form>
			  <?php
			  }
			  if(isset($_POST['que']))
			  {
				  $qid=$_POST['queid'];
				  $cid=$_POST['category'];
				  $sid=$_POST['stream'];
				  $question=$_POST['question'];
				  $answer=$_POST['answer'];
				  $op1=$_POST['op1'];
				  $op2=$_POST['op2'];
				 
				  $status='1';
				  
				  $resq= mysqli_query($con,"select * from tbl_question where QueText='$question");
					if(mysqli_num_rows($resq)>0)
					{
						echo "<script type='text/javascript'>";
						echo "alert('Question Already Exists');";
						echo "</script>";
					}
					else
					{						
						$resaq = mysqli_query($con,"insert into tbl_question values('$qid','$cid','$sid','$question','$answer','$op1','$op2','$status')");
						
						
						if($resaq=="1")
						{
							echo "<script type='text/javascript'>";
							echo "alert('Question added');";
							echo "window.location.href='admin_question.php';";
							echo "</script>";
						}
						else
						{
							echo "<script type='text/javascript'>";
							echo "alert('check details!!!');";
							echo "window.location.href='admin_question.php';";
							echo "</script>";
						}
					}
			  }
			  ?>
            </div>
            <!-- /.card -->			

    <div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Table For Questions</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <!--<th>Cate.Id</th>-->
                  <th>Text</th>
                  <th>Answer</th>
                  <!--<th>Option1</th>
                  <th>Option2</th>
                  <th>Option3</th>
                  <th>Option4</th>
                  <th><font color="blue">Update</font></th>
                  <th><font color="red">Delete</font></th>-->
                </tr>
                </thead>
                <tbody>
				<?php
				$sqlq=mysqli_query($con,"select * from tbl_question");
				while($resq=mysqli_fetch_assoc($sqlq))
				{
					$qid=$resq['QueId'];
					$qtext=$resq['QueText'];
					$qans=$resq['QueAnswer'];
				?>				
                <tr>
                  <td><?php echo $qid;?></td>
                  <!--<td><?php //echo "cate";?></td>-->
                  <td><?php echo $qtext;?></td>
                  <td><?php echo $qans;?></td>
                 <!-- <td><?php //echo $op1;?></td>
                  <td><?php //echo $op2;?></td>
                  <td><?php //echo $op3;?></td>
                  <td><?php //echo $op4;?></td>
                  <td><a href='admin_question_d.php?uid=<?php //echo $qid;?>'><u>Update</u></a></td>
                  <td><a href='admin_question_d.php?did=<?php //echo $qid;?>'><font color="red"><u>Delete</u></font></a></td>-->
                </tr>
				<?php
				}
				
				?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <!--<th>Cate.Id</th>-->
                  <th>Text</th>
                  <th>Answer</th>
                  <!--<th>Option1</th>
                  <th>Option2</th>
                  <th>Option3</th>
                  <th>Option4</th>
                  <th><font color="blue">Update</font></th>
                  <th><font color="red">Delete</font></th>-->
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
    </div>
      <!-- /.row -->


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0
    </div>
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
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php
if(isset($_POST['update']))
{
	
	$uid=$_POST['hdn_qid'];
	
	$cid=$_POST['category'];
	$sid=$_POST['stream'];
	$question=$_POST['question'];
	$answer=$_POST['answer'];
	$op1=$_POST['op1'];
	$op2=$_POST['op2'];

	$status='1';
	$res1 = mysqli_query($con,"update tbl_question set C_id='$cid',S_id='$sid',QueText='$question',QueAnswer='$answer',op1='$op1',op2='$op2' where QueId='$uid'");
	echo $res1;
	if($res1=="1")
	{
		echo "<script type='text/javascript'>";
		echo "alert('Question  updated');";
		echo "window.location.href='admin_question_d.php';";
		echo "</script>";
	}
	else
	{
		echo "<script type='text/javascript'>";
		echo "alert('check details!!!');";
		echo "window.location.href='admin_question.php';";
		echo "</script>";
	}
	mysqli_close($con);
	
	
}
?>
			