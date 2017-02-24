<?php
include('includes/dbconnect.php');
$studentemail=$_POST['studentemail'];
$qry= "SELECT * FROM registration_data WHERE email='$studentemail'";
$res= mysqli_query($con,$qry);
$list =array();
$name=$email=$contact_no="";
$email_found=1;
$email_not_found=2;

if(mysqli_num_rows($res))
{
 	$list =array('email_return'=> $email_found);
}
else
{
	$list =array('email_return'=> $email_not_found);

}
$return = json_encode($list);
echo $return;
?>