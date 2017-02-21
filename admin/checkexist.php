<?php 
include('../includes/dbconnect.php');

	$sno=$_GET['sno'];
	$checkdata="SELECT * FROM registration_data WHERE student_no='$sno'";
	$query=mysqli_query($con,$checkdata);
	
	
	$result=mysqli_num_rows($query);
	
	if($result>0)
	{
		echo 'Student No. Already Exist';
	}
	else
	{
		echo 'OK';
	}


?>