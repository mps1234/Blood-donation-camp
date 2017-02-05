<?php 
session_start();

if(!isset($_SESSION["sess_user"])){
  header("Location:http://localhost/BDC/admin/index.php");
}
else{

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<a href="http://localhost/BDC/admin/logout.php">logout</a>
	<form method="POST" action="http://localhost/BDC/admin/excel.php"><input type="submit" name="export_excel" value="Export to excel"></form>
	
	<?php

include('../includes/dbconnect.php');
$qry= "SELECT * FROM registration_data";
$res= mysqli_query($con,$qry);
 if(mysqli_num_rows($res))
	 {
	 	echo '<table>
       				<tr>
						<th>Student No</th>
						<th>Name</th>
						<th>Gender</th>
						<th>Year</th>
						<th>Blood Group</th>
						<th>Email</th>
						<th>Contact No</th>
						<th>Hosteller</th>
						<th>Date Of Registration</th>

					</tr>';

 	while ($row=mysqli_fetch_array($res)) 
 		{
 				if($row['hosteller']==1)
                $h= "Yes";
           		 else
            	$h= "No"; 
 				echo '
					<tr>
						<td>'.$row["student_no"].'</td>
						<td>'.$row["name"].'</td>
						<td>'.$row["gender"].'</td>
						<td>'.$row["year"].'</td>
						<td>'.$row["blood_group"].'</td>
						<td>'.$row["email"].'</td>
						<td>'.$row["contact_no"].'</td>
						<td>'.$h.'</td>
						<td>'.$row["now"].'</td>

					</tr>
				';
 	}echo '</table>';
 }
 else
 {
 	echo 'No Registrations';
 }

?>
</body>
</html>
<?php
}
?>

