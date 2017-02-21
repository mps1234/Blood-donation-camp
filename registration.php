<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<?php
include('includes/dbconnect.php');

		//Variables declaration
		$student_no = $name = $gender = $year = $blood_group = "";
		$email = $contact_no = $hosteller = "" ;


        $student_no = mysqli_real_escape_string($con,$_GET['student_no']);
		$name = mysqli_real_escape_string($con,$_GET['student_name']);
		$gender = mysqli_real_escape_string($con,$_GET['student_gender']);
		$year = mysqli_real_escape_string($con,$_GET['student_year']);
		$blood_group = mysqli_real_escape_string($con,$_GET['student_blood']);
		$email = mysqli_real_escape_string($con,$_GET['contact_email']);
		$contact_no = mysqli_real_escape_string($con,$_GET['contact_no']);
		$hosteller = mysqli_real_escape_string($con,$_GET['student_hosteller']);

		//Query to insert into database
		$sql = "INSERT INTO registration_data(registration_id,student_no,name,gender,year,blood_group,email,contact_no,hosteller)
			
				VALUES(NULL,'$student_no','$name','$gender','$year','$blood_group','$email','$contact_no','$hosteller')";

		//Execute the query
		$result = mysqli_query($con,$sql);

		if($result)
			{	
			//$msg = "alert klfdkl";
			echo 'Registration Successful';
			echo '<svg viewBox="0 0 76 76" class="success-message__icon icon-checkmark img-responsive text-center" width="20%" style="margin: 0 auto;">
        <circle cx="38" cy="38" r="36" fill="#f53753"/>
        <path fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M17.7,40.9l10.9,10.9l28.7-28.7"/>
    </svg>';
			}
		else
			{
			echo "Failure to register";
				}

				?>