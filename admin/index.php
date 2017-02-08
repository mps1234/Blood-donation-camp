<?php 
session_start();
include('../includes/dbconnect.php');
if(isset($_SESSION["sess_user"])){
  header("Location:http://localhost/mylearning/bdc/admin/admin.php");
}
else{

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
		 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div class="container">
		<div class="wrapper">
	
			<h2 style="text-align: center;text-decoration: underline;">BLOOD DONATION CAMP - 2017</h2><br><br>

	<form method="POST" class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<h3 class="form-signin-heading" style="text-decoration: underline;">Admin Login</h3><br>

			<div>
				<label for="user_id">User Name:</label>
				<input type="text" id="user_id" name="username" class="form-control"></input>
			</div>
			
			<div>
				<label for="user_password">Password:</label>
				<input type="password" id="user_password" name="userpassword" class="form-control"></input>
			</div>

			<div>
				<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary btn-block">
			</div>


			
			<?php 
				
				if(isset($_POST["submit"])){

					if(!empty($_POST['username']) && !empty($_POST['userpassword'])) {
						$user=$_POST['username'];
						$pass=md5($_POST['userpassword']);
				
				$query=mysqli_query($con,"SELECT * FROM admin WHERE username='".$user."' AND password='".$pass."'");

				$numrows=mysqli_num_rows($query);
				if($numrows!=0)
					{
						while($row=mysqli_fetch_assoc($query))
							{
								$dbusername=$row['username'];
								$dbpassword=$row['password'];
								$Name="admin";
							}

				if($user == $dbusername && $pass == $dbpassword)
					{
						session_start();
						$_SESSION['sess_user']=$Name;

						/* Redirect browser */
						header("Location: http://localhost/BDC/admin/admin.php");
					}
					} else {
				echo "Invalid username or password!";
					}

				} else {
				echo  "All fields are required!";
						}
				}
			?>
	</form>
	</div>
</div>

</body>
</html>
<?php
}
?>