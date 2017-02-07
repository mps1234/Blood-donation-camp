<?php
include('../includes/dbconnect.php');
$noofbeds=$_GET['no_of_beds'];
$noofslots=$_GET['no_of_slots'];
$sql = "INSERT INTO slot_info (no_of_slots, no_of_beds) VALUES('$noofslots','$noofbeds')";
$result = mysqli_query($con,$sql);

$list =array();
$slotdatanotsubmitted="Not Able to Submit";
$slotdatasubmitted="Data Submitted";
if($result)
			{	
				$list =array('slotdatasubmitted'=> $slotdatasubmitted);

			}
		else
			{
				$list =array('slotdatasubmitted'=> $slotdatanotsubmitted);

				}

$return = json_encode($list);
echo $return;
?>