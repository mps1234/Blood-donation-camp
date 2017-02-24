<?php
  
       include('../includes/dbconnect.php');
            
            
            $qry = "SELECT * FROM slot_info";
            $res = mysqli_query($con,$qry);

          
            $qry2 = "SELECT * FROM doner_slot";
            $res2 = mysqli_query($con,$qry2);

            
            $qry3 = "SELECT * FROM sorted_data";
            $res3 = mysqli_query($con,$qry3);

            //For checking whether the details for the slots are entered or not
            if(mysqli_num_rows($res)==0){
              echo "Please enter slot details first";
              }

            //For checking that the slots are already alloted or not
            else if(mysqli_num_rows($res2)>0){
                  echo "Slots Already Alloted";  
                }

            //For checking that the data is sorted or not
            else if(mysqli_num_rows($res3)==0){
              echo "Please sort data first then allot slots";
            }

            //Now allot slots
            else{


$qry= "SELECT * FROM sorted_data, registration_data WHERE sorted_data.registration_id= registration_data.registration_id ORDER BY sort_id";

$res= mysqli_query($con,$qry);
$qry2= "SELECT * FROM slot_info";
$res2= mysqli_query($con,$qry2);
$row2= mysqli_fetch_array($res2);
//$list =array();
$slotallotted="Slot Given";
$slotnotallotted="Error";
$j = 1;
$i = 1;
$from_time =$row2['from_time'];
$to_time= $row2['to_time'];


$diff = $to_time - $from_time;
$diff_min= $diff * 60;
//echo $diff_min;
$slot_length_min= $diff_min/ $row2['no_of_slots'];
$time_to_allot="";

//header('kjhgf0');
if(mysqli_num_rows($res))
    {  
		$k=$slot_length_min;
        $hourincrease = (int)($k/60);
        $time_hrs= $from_time+$hourincrease;
        $minutes_to_allot = (int)($k%60);
        $hours_to_allot = $from_time + $hourincrease;
        $from_time_to_allot = $from_time.':00';
        $to_time_to_allot = $hours_to_allot.':'.$minutes_to_allot;
		
       while ($row=mysqli_fetch_array($res)) 
 		 
 		 {
 		 	
            $regid=$row['registration_id'];
            $sql = "INSERT INTO doner_slot(alloted_id, registration_id, slot, from_time, to_time) VALUES(NULL,'$regid', '$j', '$from_time_to_allot', '$to_time_to_allot')";
            $result = mysqli_query($con,$sql);
            if($i % $row2['no_of_beds']==0)
 		 	{
               $j++;
               $k=$j*$slot_length_min;
               $hourincrease = (int)($k/60);
               $time_hrs= $from_time+$hourincrease;
               $minutes_to_allot = (int)($k%60);
               $hours_to_allot = $from_time + $hourincrease;
               $from_time_to_allot = $to_time_to_allot;
               $to_time_to_allot = $hours_to_allot.':'.$minutes_to_allot;
            

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
 	}

  header("Refresh:3;url=http://localhost/BDC/admin/admin.php");
?>