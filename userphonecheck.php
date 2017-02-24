<?php
include('includes/dbconnect.php');
$studentphone=$_POST['studentphone'];
$qry= "SELECT * FROM registration_data WHERE contact_no='$studentphone'";
$res= mysqli_query($con,$qry);
$list =array();
$name=$email=$contact_no="";
$phone_found="1";
$phone_not_found="2";

if(mysqli_num_rows($res))
{
 	$list =array('phone_return'=> $phone_found);
}
else
{
	$list =array('phone_return'=> $phone_not_found);

}
$return = json_encode($list);
echo $return;
?>