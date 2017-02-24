<?php
include('includes/dbconnect.php');
$studentemail=$_POST['studentnocheck'];
$qry= "SELECT * FROM registration_data WHERE student_no='$studentemail'";
$res= mysqli_query($con,$qry);
$list =array();
$name=$email=$contact_no="";
$email_found=1;
$email_not_found=2;

if(mysqli_num_rows($res))
{
 	$list =array('no_return'=> $email_found);
}
else
{
	$list =array('no_return'=> $email_not_found);

}
$return = json_encode($list);
echo $return;
?>