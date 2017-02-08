<?php
include('../includes/dbconnect.php');

$qry= "SELECT * FROM registration_data WHERE gender= 'female' AND hosteller='0' ORDER BY now";
$res= mysqli_query($con,$qry);
 if($row=mysqli_num_rows($res))
 {//echo '';
 	while ($row=mysqli_fetch_array($res)) 
 	{   $student_no=$row['student_no'];
 		$sql = "INSERT INTO sorted_data(student_no) VALUES('$student_no')";
		//Execute the query
		$result = mysqli_query($con,$sql);
 		
 	}
 }


$qry2= "SELECT * FROM registration_data WHERE gender= 'female' AND hosteller='1' ORDER BY now";
$res2= mysqli_query($con,$qry2);
 if($row2=mysqli_num_rows($res2))
 {//echo '';
 	while ($row2=mysqli_fetch_array($res2)) 
 	{   $student_no2=$row2['student_no'];
 		$sql2 = "INSERT INTO sorted_data(student_no) VALUES('$student_no2')";
		//Execute the query
		$result2 = mysqli_query($con,$sql2);
 		
 	}
 }

 $qry3= "SELECT * FROM registration_data WHERE gender= 'male' AND hosteller='0' ORDER BY now";
$res3= mysqli_query($con,$qry3);
 if($row3=mysqli_num_rows($res3))
 {//echo '';
 	while ($row3=mysqli_fetch_array($res3)) 
 	{   $student_no3=$row3['student_no'];
 		$sql3 = "INSERT INTO sorted_data(student_no) VALUES('$student_no3')";
		//Execute the query
		$result3 = mysqli_query($con,$sql3);
 		
 	}
 }

 $qry4= "SELECT * FROM registration_data WHERE gender= 'male' AND hosteller='1' ORDER BY now";
$res4= mysqli_query($con,$qry4);
 if($row4=mysqli_num_rows($res4))
 {//echo '';
 	while ($row4=mysqli_fetch_array($res4)) 
 	{   $student_no4=$row4['student_no'];
 		$sql4 = "INSERT INTO sorted_data(student_no) VALUES('$student_no4')";
		//Execute the query
		$result4 = mysqli_query($con,$sql4);
 		
 	}
 }


/*
if(mysqli_num_rows($res5))
{
 while($row5=mysqli_fetch_array($res5))
 {
 	$list2 =array('recordsfound'=> $recordsfound,'student_no_return'=> $row['student_no'], 'student_name_return'=> $row['name'], 'email_return'=> $row['email'], 'contact_no_return'=> $row['contact_no']);
 }
}
else
{
	$list2 =array('recordsfound'=> $recordsnotfound, 'student_no_return'=> $studentno, 'student_name_return'=> $name, 'email_return'=> $email, 'contact_no_return'=> $contact_no);

}
$return = json_encode($list);
echo $return;*/
?>