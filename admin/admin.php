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
	<script src="../js/script.js"></script>
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
	  $(document).ready(function()
    {
     document.getElementById("max_efficiency").disabled = true;
    });
    
	
	function submitslotdatafunc() 
    {
      var no_of_beds, no_of_slots;
      no_of_beds = $("#no_beds").val();
      no_of_slots = $("#no_slots").val();
      from_time = $("#from_time").val();
      to_time = $("#to_time").val();
       //no_beds = document.getElementById("no_beds");
      //no_slots = document.getElementById("no_slots");
      
      $.ajax({
          type:"GET",
          url: "submitslotdata.php",
          data : {
                   no_of_slots : no_of_slots ,
                   no_of_beds : no_of_beds ,
                   from_time: from_time,
                   to_time : to_time
                  },
          datatype: "json",
          success: function(msg){
                                  var y =JSON.parse(msg);
                                  $('#slotdatasubmitted').html(y.slotdatasubmitted);
                                }

              
            });
  }



      function calculate_efficiency()
    {
    //var effieciency= $('#max_efficiency').val();
     var beds= $('#no_beds').val();
     var slots= $('#no_slots').val();
     
     var efficiency = beds*slots;
      $('#no_slots').val(slots);
      $('#no_beds').val(beds);
      if(beds!=null && slots!=null)
      {
      $('#max_efficiency').val(efficiency);
      }
     	
      
   }
    </script>
</head>
<body>

	<div class="container">
		<div class="well">
		<div class="row">
			<h3 style="text-align: center;text-decoration: underline;">BLOOD DONATION CAMP - 2017</h3>
		<h4 style="text-align: center;text-decoration: underline;"> Admin Panel </h4>
		</div>
		</div>
			
	<!-- For taking the input from admin -->
<div class="row">
	<div class="col-md-8 col-sm-8">
<h4>Enter the following details to allot slots :</h4>
	</div>
	<div class="col-md-3 col-sm-3"><form method="POST" action="http://localhost/BDC/admin/excel.php"><input type="submit" name="export_excel" value="Export Registration Data to Excel" class="btn btn-primary btn-lg"></form></div>
	<div class="col-md-3 col-sm-3"><form method="POST" action="http://localhost/BDC/admin/excelslot.php"><input type="submit" name="export_excel_slot" value="Export SLot Data to Excel" class="btn btn-primary btn-lg"></form></div>
	<div class="col-md-1 col-sm-1"><a href="http://localhost/BDC/admin/logout.php" class="btn btn-danger">Logout</a></div>
</div>
	<div id="slotinfoform">
			<div>
				<label for="no_beds">No of beds:</label>
				<input type="number" id="no_beds" name="beds" onblur ="calculate_efficiency();" required></input>
				
			</div>

			<div>
				<label for="no_slots">No of slots:</label>
				<input type="number" id="no_slots" name="slots" onblur ="calculate_efficiency();"  required></input>
				
			</div>

			<div>
				<label for="efficiency">Max Efficiency:</label>
				<input type="number" id="max_efficiency" name="efficiency" required></input>
				
			</div>

			<div id="timefromto">

			    				
				<label> From:</label>
				<select name="timestart" id="from_time">
                <option value="08">08 am </option>
				<option value="09">09 am</option>
				<option value="10">10 am</option>
				<option value="11">11 am</option>
				<option value="12">12 pm</option>
                </select>
				
				<label> To:</label>
				<select name="timestop" id="to_time">
			    <option value="12">12 pm</option>
				<option value="13">1 pm</option>
				<option value="14">2 pm </option>
				<option value="15">3 pm </option>
				<option value="16">4 pm</option>
			    </select>
				
			</div>

			<div id="slotdatasubmitted">
				<input type="submit" name="submit" value="Submit" id="submitslotdatabtn" class="btn btn-success" onclick="submitslotdatafunc();">
			</div>
	</div><br>
	
<div class="row">
	<div class="col-md-3">
<input type="button" id="sortbutton" name="sort_button" class="btn btn-primary" value="Sort Data as per the conditions"></div>
	<div class="col-md-3"></div>

	<div class="col-md-9">
		<a href="http://localhost/BDC/admin/slotallot.php" class="btn btn-primary">Allot Slots</a>
	</div>
</div><br>

	<!-- for searching data -->
	<div id="flip">Search registration data</div>
	
			<div id="panel">
				<input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search by Student no..'>
				<input type='text' id='myInput1' onkeyup='myFunction2()' placeholder='Search by Student name..'>
			</div>



	<?php

include('../includes/dbconnect.php');
$qry= "SELECT * FROM registration_data order by registration_id";
$res= mysqli_query($con,$qry);
$blood_group="";
 if(mysqli_num_rows($res))
	 {
	 	
	 	echo '<table id="myTable" class="table table-striped" style="display: block;overflow-x: scroll;">
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
 			    $blood_group="";
 				if($row['hosteller']==1)
                $h= "Yes";
           		 else
            	$h= "No"; 

                if($row['blood_group']=='Ap')
            	{
                  $blood_group='A+';
            	} 
            	elseif ($row['blood_group']=='An') 
            	{
            		$blood_group='A-';
            	}
 				elseif ($row['blood_group']=='ABp') 
 				{
            	    $blood_group='AB+';	
            	}
 				elseif ($row['blood_group']=='ABn') 
 				{
            		$blood_group='AB-';
            	}
 				elseif ($row['blood_group']=='Bp') 
 				{
            	    $blood_group='B+';	
            	}
 				elseif ($row['blood_group']=='Bn') 
 				{
            	    $blood_group='B-';	
            	}
 				elseif ($row['blood_group']=='Op') 
 				{
            	    $blood_group='O+';	
            	}
 				elseif ($row['blood_group']=='O-') 
 				{
            	    $blood_group='O-';	
            	}
 				echo '
					<tr>
						<td>'.$row["student_no"].'</td>
						<td>'.$row["name"].'</td>
						<td>'.$row["gender"].'</td>
						<td>'.$row["year"].'</td>
						<td>'.$blood_group.'</td>
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
</div>
</body>
</html>
<?php
}
?>

