<!DOCTYPE html>
<html>
<head>
	<title>BDC</title>
	<!-- jQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- jQuery validation Script -->
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
    
   
	</script>
</head>
<body>
    <div id="recordsfound" style="color:red;">Type In Your Student No:</div>
	<form id="registration_form" method="POST" action="registration.php">
			<!-- Student No -->
			<div>
				<label for="student_no">Student No:</label>
				<input type="number" id="student_no" name="studentno"></input>
				<span id="student_no_error"></span>
			</div>
			<!-- Name -->
			<div>
				<label for="student_name">Name:</label>
				<input type="text" id="student_name" name="name"></input>
				<span id="student_name_error"></span>				
			</div>	
			<!--Gender -->
			<div>
				<label for="student_gender">Gender:</label>
				<input type="radio" id="student_gender" name="gender" checked value="male">Male</input>
				<input type="radio" id="student_gender" name="gender" value="female">Female</input>
				<span class="error"></span>				
			</div>
			<!--Year -->
			<div>
			<label for="student_year">Year:</label>
			 <select name="year" id="student_year">
 				<option value="1">1</option>
 				<option value="2">2</option>
  				<option value="3">3</option>
  				<option value="4">4</option>
			</select>
			</div>
			<!-- Blood Group -->
			<div>
				<label for="student_blood">Blood Group:</label>
				 <select name="bloodgroup" id="bloodgroup">
	 				<option value="A+">A+</option>
	 				<option value="A-">A-</option>
	  				<option value="AB+">AB+</option>
	  				<option value="AB-">AB-</option>
	  				<option value="B+">B+</option>
	  				<option value="B-">B-</option>
	  				<option value="O+">O+</option>
	  				<option value="O-">O-</option>
				</select>
			</div>
			<!-- Email -->
			<div>
				<label for="contact_email">Email:</label>
				<input type="email" id="contact_email" name="email"></input>
				<span id="contact_email_error"></span>				
			</div>	
			<!-- Contact No. -->
			<div>
				<label for="contact_no">Contact No:</label>
				<input type="number" id="contact_no" name="contactno" maxlength="11"></input>
				<span id="contact_no_error"></span>				
			</div>	
			<!-- Hosteller -->
			<div>
				<input type="radio" id="student_hosteller" name="hosteller" checked value="1">Hosteller</input>
				<input type="radio" id="student_hosteller" name="hosteller" value="0">Day Scholar</input>
				<span id="hosteller_error"></span>
			</div>
			<!-- Submit Button -->
			<div id="contact_submit">				
				<input type="submit" name="submit" value="Submit">
			</div>
			</form>

</body>
</html>