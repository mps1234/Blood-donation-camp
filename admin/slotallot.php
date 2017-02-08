<?php

include('../includes/dbconnect.php');

$qry= "SELECT * FROM registration_data";
$res= mysqli_query($con,$qry);

$qry2= "SELECT * FROM slot_info";
$res2= mysqli_query($con,$qry2);
$row2= mysqli_num_rows($res2);


//$list =array();
$slotallotted="Slot Given";
$slotnotallotted="Error";

//header('kjhgf0');
if(mysqli_num_rows($res))
    {  
		$i = 0;
		$j = 1;
       while ($row=mysqli_fetch_array($res)) 
 		 
 		 {
 		 	$i++;
 		 	if($i % $row2['no_of_beds']==0)
 		 	{
               $j++;
            }
            $stuno=$row['student_no'];
            $sql = "INSERT INTO  (alloted_id, student_no, slot) VALUES(NULL,'$stuno', '$j')";
            $result = mysqli_query($con,$sql);
            if($result)
			{	
				echo $slotallotted;

			}
		   else
			{
				echo $slotnotallotted;

				}


 		}
    
    }

?>
