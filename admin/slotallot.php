<?php
include('../includes/dbconnect.php');
$qry= "SELECT * FROM sorted_data";
$res= mysqli_query($con,$qry);
$qry2= "SELECT * FROM slot_info";
$res2= mysqli_query($con,$qry2);
$row2= mysqli_fetch_array($res2);
//$list =array();
$slotallotted="Slot Given";
$slotnotallotted="Error";
$j = 1;
$i = 1;
//header('kjhgf0');
if(mysqli_num_rows($res))
    {  
		
		
       while ($row=mysqli_fetch_array($res)) 
 		 
 		 {
 		 	//echo $j.'<br>';
            $stuno=$row['student_no'];
            $sql = "INSERT INTO doner_slot(alloted_id, student_no, slot) VALUES(NULL,'$stuno', '$j')";
            $result = mysqli_query($con,$sql);
            if($i % $row2['no_of_beds']==0)
 		 	{
               $j++;
            }
            $i++;
        }
    }
            if($result)
			{	
				echo $slotallotted;
			}
		   else
			{
				echo $slotnotallotted;
			}
 	
?>