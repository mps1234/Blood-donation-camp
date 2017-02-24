<?php
include('../includes/dbconnect.php');


          


$qry= "SELECT * FROM registration_data WHERE gender= 'female' AND hosteller='0' ORDER BY registration_id";
$res= mysqli_query($con,$qry);
 if($row=mysqli_num_rows($res))
 {//echo '';
 	while ($row=mysqli_fetch_array($res)) 
 	{   $registration_id=$row['registration_id'];
 		$sql = "INSERT INTO sorted_data(registration_id) VALUES('$registration_id')";
		//Execute the query
		$result = mysqli_query($con,$sql);
 		
 	}
 }


$qry2= "SELECT * FROM registration_data WHERE gender= 'female' AND hosteller='1' ORDER BY registration_id";
$res2= mysqli_query($con,$qry2);
 if($row2=mysqli_num_rows($res2))
 {//echo '';
 	while ($row2=mysqli_fetch_array($res2)) 
 	{   $registration_id2=$row2['registration_id'];
 		$sql2 = "INSERT INTO sorted_data(registration_id) VALUES('$registration_id2')";
		//Execute the query
		$result2 = mysqli_query($con,$sql2);
 		
 	}
 }

 $qry3= "SELECT * FROM registration_data WHERE gender= 'male' AND hosteller='0' ORDER BY registration_id";
$res3= mysqli_query($con,$qry3);
 if($row3=mysqli_num_rows($res3))
 {//echo '';
 	while ($row3=mysqli_fetch_array($res3)) 
 	{   $registration_id3=$row3['registration_id'];
 		$sql3 = "INSERT INTO sorted_data(registration_id) VALUES('$registration_id3')";
		//Execute the query
		$result3 = mysqli_query($con,$sql3);
 		
 	}
 }

 $qry4= "SELECT * FROM registration_data WHERE gender= 'male' AND hosteller='1' ORDER BY registration_id";
$res4= mysqli_query($con,$qry4);
 if($row4=mysqli_num_rows($res4))
 {//echo '';
 	while ($row4=mysqli_fetch_array($res4)) 
 	{   $registration_id4=$row4['registration_id'];
 		$sql4 = "INSERT INTO sorted_data(registration_id) VALUES('$registration_id4')";
		//Execute the query
		$result4 = mysqli_query($con,$sql4);
 		
 	}
 }

 header('Refresh:2;url="http://localhost/BDC/admin/admin.php"');

?>