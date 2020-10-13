<?php
include "connect.php";
$sql="select * from tbl_student where StudentId='1'";
$data=mysqli_query($con,$sql);
$row=array();

while($res=mysqli_fetch_assoc($data))
{
	$rows[]=$res;
}
//print json_encode($rows);
print "<pre>";
print_r($rows);
print "</pre>";
?>