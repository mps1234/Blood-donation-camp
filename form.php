<!DOCTYPE html>
<html>
<head>
	<title>BDC</title>
</head>
<body>

	<form id="registration" method="post" action="">
			<!-- Student No -->
			<div>
				<label for="student_no">Student No:</label>
				<input type="number" id="student_no" name="studentno"></input>
				<span class="error"></span>
			</div>
			<!-- Name -->
			<div>
				<label for="student_name">Name:</label>
				<input type="email" id="student_name" name="name"></input>
				<span class="error"></span>				
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
 				<option value="1">First</option>
 				<option value="2">Second</option>
  				<option value="3">Third</option>
  				<option value="4">Fourth</option>
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
				<span class="error"></span>				
			</div>	
			<!-- Contact No. -->
			<div>
				<label for="contact_no">Contact No:</label>
				<input type="number" id="contact_no" name="contactno"></input>
				<span class="error"></span>				
			</div>	
			<!-- Hosteller -->
			<div>
			<input type="checkbox" name="hosteller" value="Hosteller">Hosteller<br>
			</div>
			<!-- Submit Button -->
			<div id="contact_submit">				
				<button type="submit">Submit</button>
			</div>
	</form>

</body>
</html>