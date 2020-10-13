<?php
include("connect.php");
$sql1=mysqli_query($con,"select * from tbl_response");
while($res1=mysqli_fetch_assoc($sql1))
{
	echo $rid=$res1['ResId'];
	echo $stid=$res1['StudentId'];
	$sqls=mysqli_query($con,"select * from tbl_studentmaster where StudentId='$stid'");
	while($ress=mysqli_fetch_assoc($sqls))
	{
		echo $sname=$ress['StudentName'];
		//echo $smm=$ress['MathsM'];
	}
	echo $sres=$res1['Response'];
	echo "<br>";
}
?>