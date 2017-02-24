<?php
include('../includes/dbconnect.php');
$output = "";
if(isset($_POST['export_excel']))
{
	$sql = "SELECT * from registration_data order by registration_id";
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result)>0)
		{

			$output.= '
			<table border="1">
			<caption style="text-align:center;">Registration Details</caption>
				<tr>
							<th>Student No </th>
		 			  		<th>Name </th> 
		 			  		<th>Gender </th> 
		 			  		<th>Year </th>
		 			  		<th>Blood Group</th> 
		           			<th>Email</th>
		 			  		<th>Contact No </th>
		 		  	  		<th>Hosteller </th>
		 		  	  		<th>Date of registration</th>
		 		  	  		
				</tr>';

			while($row = mysqli_fetch_array($result))
			{
				if($row['hosteller']==1)
                $h= "Yes";
           		 else
            	$h= "No"; 

            	switch ($b = $row['blood_group']) {
            		case 'Ap':
            			$blood = 'A+';
            			break;
            		case 'An':
            			$blood = 'A-';
            			break;
            		case 'ABp':
            			$blood = 'AB+';
            			break;
            		case 'ABn':
            			$blood = 'AB-';
            			break;
            		case 'Bp':
            			$blood = 'B+';
            			break;
            		case 'Bn':
            			$blood = 'B-';
            			break;
            		case 'Op':
            			$blood = 'O+';
            			break;
            		case 'On':
            			$blood = 'O-';
            			break;
            		case 'NA':
            			$blood = 'NA';
            		default:
            			$blood = $row['blood_group'];
            			break;
            	}

				$output.= '
				<tr>
					<td>'.$row["student_no"].'</td>
					<td>'.$row["name"].'</td>
					<td>'.$row["gender"].'</td>	
					<td>'.$row["year"].'</td>
					<td>'.$blood.'</td>
					<td>'.$row["email"].'</td>
					<td>'.$row["contact_no"].'</td>
					<td>'.$h.'</td>
					<td>'.$row["now"].'</td>
                     

				</tr>
				';

			}
			$output.='</table>';
			header("Content-Type:application/vnd.ms-excel; charset=utf-8");
			header("Content-Disposition:attachment; filename=BDCregistration.xls");
			echo $output;


		}
}