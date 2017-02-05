<?php 
session_start();
include('../includes/dbconnect.php');
if(isset($_SESSION["sess_user"])){
  header("Location:http://localhost/BDC/admin/admin.php");
}
else{

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
<h2>Admin Login</h2>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

			<div>
				<label for="user_id">User Name:</label>
				<input type="text" id="user_id" name="username"></input>
			</div>
			
			<div>
				<label for="user_password">Password:</label>
				<input type="password" id="user_password" name="userpassword"></input>
			</div>

			<div>
				<input type="submit" name="submit" value="Submit">
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
</body>
</html>
<?php
}
?>