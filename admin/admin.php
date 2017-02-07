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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="../js/searchscript.js"></script>
	<style> 
		#panel, #flip {
		    padding: 5px;
		    text-align: center;
		    background-color: #e5eecc;
		    border: solid 1px #c3c3c3;
		}

		#panel {
		    padding: 10px;
		    display: none;
		}

	</style>
	<script type="text/javascript">
	
	function submitslotdatafunc() 
    {
      
     // alert('ghjkl');
    
     
      var no_of_beds, no_of_slots;
      no_of_beds = $("#no_beds").val();
      no_of_slots = $("#no_slots").val();
       //no_beds = document.getElementById("no_beds");
      //no_slots = document.getElementById("no_slots");
      alert(no_of_slots);
      $.ajax({
          type:"GET",
          url: "submitslotdata.php",
          data : {
                   no_of_slots : no_of_slots ,
                   no_of_beds : no_of_beds // will be accessible in $_POST['data1']
                  },
          datatype: "json",
          success: function(msg){
                                  var y =JSON.parse(msg);
                                  $('#slotdatasubmitted').html(y.slotdatasubmitted);
                                }

              
            });
  }
    </script>
</head>
<body>
	<a href="http://localhost/BDC/admin/logout.php">logout</a>

	<!-- For exporting data into excel file -->
	<form method="POST" action="http://localhost/BDC/admin/excel.php"><input type="submit" name="export_excel" value="Export to excel"></form>


	<!-- For taking the input from admin -->
	<div id="slotinfoform">
			<div>
				<label for="no_beds">No of beds:</label>
				<input type="number" id="no_beds" name="beds" required></input>
				
			</div>

			<div>
				<label for="no_slots">No of slots:</label>
				<input type="number" id="no_slots" name="slots" required></input>
				
			</div>

			<div id="slotdatasubmitted">
				<input type="submit" name="submit" value="Submit" id="submitslotdatabtn" onclick="submitslotdatafunc();">
			</div>
	</div>
	<!-- for searching data -->
	<div id="flip">Search registration data</div>
	
			<div id="panel">
				<input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search by Student no..'>
				<input type='text' id='myInput1' onkeyup='myFunction2()' placeholder='Search by Student name..'>
			</div>



	<?php

include('../includes/dbconnect.php');
$qry= "SELECT * FROM registration_data";
$res= mysqli_query($con,$qry);
 if(mysqli_num_rows($res))
	 {
	 	echo '<table id="myTable">
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

