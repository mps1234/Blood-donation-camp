<?php
include('includes/dbconnect.php');
header('lkjhgfgh');

$studentno=$_POST['studentno'];
$qry= "SELECT * FROM registration_data WHERE student_no='$studentno'";
$res= mysqli_query($con,$qry);
$list =array();
$name=$email=$contact_no="";
$recordsfound="Records Found";
$recordsnotfound="Records Not Found";

if(mysqli_num_rows($res))
{
 while($row=mysqli_fetch_array($res))
 {
 	$list =array('recordsfound'=> $recordsfound,'student_no_return'=> $row['student_no'], 'student_name_return'=> $row['name'], 'email_return'=> $row['email'], 'contact_no_return'=> $row['contact_no']);
 }
}
else
{
	$list =array('recordsfound'=> $recordsnotfound, 'student_no_return'=> $studentno, 'student_name_return'=> $name, 'email_return'=> $email, 'contact_no_return'=> $contact_no);

}
$return = json_encode($list);
echo $return;
?>