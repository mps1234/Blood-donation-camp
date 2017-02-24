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
		$email = $_GET['contact_email'];
		$contact_no = mysqli_real_escape_string($con,$_GET['contact_no']);
		$hosteller = mysqli_real_escape_string($con,$_GET['student_hosteller']);

		//Query to insert into database
		$sql = "INSERT INTO registration_data(registration_id,student_no,name,gender,year,blood_group,email,contact_no,hosteller)
			
				VALUES(NULL,'$student_no','$name','$gender','$year','$blood_group','$email','$contact_no','$hosteller')";

		//Execute the query
		$result = mysqli_query($con,$sql);
		
			//mail
		 
	       $query=mysqli_query($con,"SELECT email,name FROM registration_data WHERE email='".$email."'");
	
	
	
        if(mysqli_num_rows($query)>=1)
          {
            while($row=mysqli_fetch_array($query))
            {
             
        	  $email=$row['email'];
              $username = $row['name'];
            }

    
    
    
        require 'PHPmail/PHPMailerAutoload.php';
		require 'PHPmail/class.phpmailer.php'; // path to the PHPMailer class
		require 'PHPmail/class.smtp.php';

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;    

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'Smtp.sendgrid.net';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'apikey';                 // SMTP username
		$mail->Password = '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';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;      
        $message = file_get_contents('bdc.html');
        $message = str_replace("%username%", $username,$message);

		$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );                     // TCP port to connect to

		$mail->setFrom('bdc17@silive.in', 'Blood Donation Camp');    // Add a recipient
		$mail->addAddress($email);  
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Blood Donation Camp - 2017';
		$mail->Body    = $message;
		$mail->AltBody = 'Blood Donation Camp';

		

}


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
			echo "Registration Failed";
				}


	if(!$mail->send())
			{
			 echo " ";
    }
			else 
			{

				echo " ";
			
			
			}
			

			



				



?>