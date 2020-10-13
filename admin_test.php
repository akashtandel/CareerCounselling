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
            
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
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
                  <p>student Details</p>
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
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Entry FORM</h1>
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
	 <?php
		$resq= mysqli_query($con,"select max(QCId) from tbl_questioncategory");
		$qcid=0;
		while($r1=mysqli_fetch_row($resq))
		{
			$qcid=$r1[0];
		}
		$qcid++;  
	?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Question category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Id</label>
                    <input type="text"  name="cateid" class="form-control" id="exampleInputEmail1" value="<?php echo $qcid;?>" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category Type</label>
                    <input type="text" name="catetype" class="form-control" id="exampleInputPassword1" placeholder="Category type">
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="cate" class="btn btn-primary">Add Category</button>
                </div>
              </form>
			  <?php
			  if(isset($_POST['cate']))
			  {
				  $id=$_POST['cateid'];
				  $cate=$_POST['catetype'];
				  $status='yes';
				  
				  $res = mysqli_query($con,"select * from tbl_questioncategory where Qcate='$cate'");
					if(mysqli_num_rows($res)>0)
					{
						echo "<script type='text/javascript'>";
						echo "alert('category Already Exists');";
						echo "</script>";
					}
					else
					{						
						$res2 = mysqli_query($con,"insert into tbl_questioncategory values('$id','$cate','$status')");
						if($res2=="1")
						{
							echo "<script type='text/javascript'>";
							echo "alert('category added');";
							echo "window.location.href='admin_test.php';";
							echo "</script>";
						}
						else
						{
							echo "<script type='text/javascript'>";
							echo "alert('check details!!!');";
							echo "window.location.href='admin_test.php';";
							echo "</script>";
						}
					}
			  }
			  ?>
            </div>
			
			
			
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Question Stream</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stream Id</label>
					<?php
					$ress= mysqli_query($con,"select max(sid) from tbl_stream");
					$sid=0;
					while($rs=mysqli_fetch_row($ress))
					{
						$sid=$rs[0];
					}
					$sid++;  
					?>
                    <input type="text"  name="sid" class="form-control" id="exampleInputEmail1" value="<?php echo $sid;?>" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Stream Type</label>
                    <input type="text" name="stype" class="form-control" id="exampleInputPassword1" placeholder="Stream type">
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="stream" class="btn btn-primary">Add Stream</button>
                </div>
              </form>
			  <?php
			  if(isset($_POST['stream']))
			  {
				  $id=$_POST['sid'];
				  $stream=$_POST['stype'];
				  $status='1';
				  
				  $res = mysqli_query($con,"select * from tbl_stream where stream='$stream'");
					if(mysqli_num_rows($res)>0)
					{
						echo "<script type='text/javascript'>";
						echo "alert('Stream Already Exists');";
						echo "</script>";
					}
					else
					{						
						$res2 = mysqli_query($con,"insert into tbl_stream values('$id','$stream','$status')");
						if($res2=="1")
						{
							echo "<script type='text/javascript'>";
							echo "alert('Stream added');";
							echo "window.location.href='admin_test.php';";
							echo "</script>";
						}
						else
						{
							echo "<script type='text/javascript'>";
							echo "alert('check details!!!');";
							echo "window.location.href='admin_test.php';";
							echo "</script>";
						}
					}
			  }
			  ?>
            </div>
			
			
			
			
			
			
			
			
			
			
			
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
						<select class="form-control" name="category">
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
                    <input type="text" name="answer" class="form-control" id="exampleInputPassword1" placeholder="Answer">
                  </div>
                 <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Option 1</label>
                        <input type="text" name="op1" class="form-control" placeholder="Enter option 1">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Option 2</label>
                        <input type="text" name="op2" class="form-control" placeholder="Enter option 2">
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
						$resaq = mysqli_query($con,"insert into tbl_question values('$qid','$question','$answer','$status')");
						
						$resao = mysqli_query($con,"insert into tbl_options values('$qid','$qid','$op1','$op2')");
						
						if($resaq=="1" && $resao=="1")
						{
							echo "<script type='text/javascript'>";
							echo "alert('Question added');";
							echo "window.location.href='admin_test.php';";
							echo "</script>";
						}
						else
						{
							echo "<script type='text/javascript'>";
							echo "alert('check details!!!');";
							echo "window.location.href='admin_test.php';";
							echo "</script>";
						}
					}
			  }
			  ?>
            </div>
            <!-- /.card -->			
			
			
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Student Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Student Id</label>
                    <input type="queid" class="form-control" id="exampleInputEmail1" placeholder="Student id">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="queid" class="form-control" id="exampleInputEmail1" placeholder="Student Name">
                  </div>
				 
				 <div class="form-group">
                    <label for="exampleInputEmail1">Student Email</label>
                    <input type="queid" class="form-control" id="exampleInputEmail1" placeholder="Student Email">
                  </div>
				  <div class="col-sm-13">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Gender</label>
                        <select class="form-control">
                          <option value="---">---</option>
                          <option value="male">Male </option>
                          <option value="female">Female</option>

                        </select>
                      </div>
                    </div>
                 <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" placeholder="Enter Mobile">
                      </div>
                    </div>
					
                    <!-- Date dd/mm/yyyy -->
                <div class="col-sm-6">
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
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Student</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           

          </div>
          <!--/.col (left) -->
          <!-- right column -->
        <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Question Category Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th><font color="Blue">Update</font></th>
				  <th><font color="red">Delete</font></th>


                </tr>
                </thead>
                <tbody>
				<?php
				$sqlf=mysqli_query($con,"select * from tbl_feedback");
				while($resf=mysqli_fetch_assoc($sqlf))
				{
						$fid=$resf['fid'];
						$sid=$resf['StudentId'];
						$ftext=$resf['feedback'];
						$fans=$resf['answer'];
						$status=$resf['status'];
				$sql1=mysqli_query($con,"select * from tbl_studentmaster where StudentId='$sid'");
				while($res1=mysqli_fetch_assoc($sql1))
				{
					$sname=$res1['StudentName'];
					$semail=$res1['Email'];
					
				?>				
                <tr>
                  <td><?php echo $fid;?></td>
                  <td><?php echo $sname;?></td>

                  <td><a href='admin_view_marks.php?vid=<?php echo $sid;?>'><font color="blue"><u>Update</u></font></a></td>
                  <td><a href='admin_user_d.php?did=<?php echo $sid;?>'><font color="red"><u>Delete</u></font></a></td>
         

                </tr>
				<?php
				}}
				?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th><font color="blue">Update</font></th>
				  <th><font color="red">Delete</font></th>
                </tr>       
                </tfoot>
              </table>
	
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
</body>
</html>
