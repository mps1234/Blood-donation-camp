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
			}
		else
			{
			echo "Failure to register";
				}

				?>