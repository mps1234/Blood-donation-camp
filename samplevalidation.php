<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>
	<script src="script.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<h1>Create account</h1>
	<form id="registration_form" action="registration.php" method="POST">
		Choose Username : <input type="text" id="form_username"><span id="username_error_message"></span><br>
		
		<input type="submit" value="Submit">
	</form>
</body>
</html>