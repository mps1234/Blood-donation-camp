<?php
include('includes/dbconnect.php');

		//Variables declaration
		$student_no = $name = $gender = $year = $blood_group = "";
		$email = $contact_no = $hosteller = "" ;



	if(isset($_POST['submit']))
		{
            $student_no = mysqli_real_escape_string($con,$_POST['studentno']);
			$name = mysqli_real_escape_string($con,$_POST['name']);
			$gender = mysqli_real_escape_string($con,$_POST['gender']);
			$year = mysqli_real_escape_string($con,$_POST['year']);
			$blood_group = mysqli_real_escape_string($con,$_POST['bloodgroup']);
			$email = mysqli_real_escape_string($con,$_POST['email']);
			$contact_no = mysqli_real_escape_string($con,$_POST['contactno']);
			$hosteller = mysqli_real_escape_string($con,$_POST['hosteller']);

		}

		//Query to insert into database
		$sql = "INSERT INTO registration_data(student_no,name,gender,year,blood_group,email,contact_no,hosteller)
			
				VALUES('$student_no','$name','$gender','$year','$blood_group','$email','$contact_no','$hosteller')";

		//Execute the query
		$result = mysqli_query($con,$sql);

		if($result)
			{	
			echo "Registered Successfully";
				}
		else
			{
			echo "Failure to register";
				}