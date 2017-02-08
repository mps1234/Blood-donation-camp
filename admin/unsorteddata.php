<?php
include('../includes/dbconnect.php');

$qry= "SELECT * FROM registration_data";
$res= mysqli_query($con,$qry);
 if(mysqli_num_rows($res))
 {echo '<table>
       <tr>
						<th>Student NO</th>
					
					
						<th>Name</th>
					

						<th>Gender</th>
					
					
						<th>Year</th>
					
	
						<th>Blodd Group</th>
					
					
						<th>Email</th>
					
					
						<th>Contact No</th>
						<th>Hosteller</th>

						<th>Date Of Registration</th>

					</tr>';
 	while ($row=mysqli_fetch_array($res)) 
 	{
 		echo '
					<tr>
						<td>'.$row["student_no"].'</td>
					
					
						<td>'.$row["name"].'</td>
					

						<td>'.$row["gender"].'</td>
					
					
						<td>'.$row["year"].'</td>
					
	
						<td>'.$row["blood_group"].'</td>
					
					
						<td>'.$row["email"].'</td>
					
					
						<td>'.$row["contact_no"].'</td>
						<td>'.$row["hosteller"].'</td>

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
