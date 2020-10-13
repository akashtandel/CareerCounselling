<?php
include("connect.php");
$sql1=mysqli_query($con,"select * from tbl_student");
while($res1=mysqli_fetch_assoc($sql1))
{
	echo $sid=$res1['StId'];
	echo $stid=$res1['StudentId'];
	echo $sclass=$res1['Class'];
	echo $sboard=$res1['Board'];
	echo $smm=$res1['MathsM'];
	echo $ssm=$res1['ScienceM'];
	echo $sem=$res1['EnglishM'];
	echo $sssm=$res1['SSM'];
	echo $som=$res1['OverallM'];
	echo $spy=$res1['PassingYear'];

	echo "<br>";
}
?>