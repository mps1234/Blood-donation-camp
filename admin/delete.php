<?php

include('../includes/dbconnect.php');

	
	if(isset($_POST['deletesorted'])){

		//For deleting the sorted data
		$qry = "TRUNCATE TABLE sorted_data";
		$res = mysqli_query($con,$qry);
			if($res)
				echo "Sorted data deleted, now you can again sort data";
			
		}

	else if(isset($_POST['deleteslots'])){

		//For deleting the donor slots
		$qry = "TRUNCATE TABLE doner_slot";
		$res = mysqli_query($con,$qry);
			if($res){
				echo "Alloted slots deleted, now you can again allot slots";
			}
		}

	else if(isset($_POST['deleteinfo'])){
		$qry = "TRUNCATE TABLE slot_info";
		$res = mysqli_query($con,$qry);
			if($res){
				echo "Slot info deleted, kindly again enter slot info";
			}
	}

	 header('Refresh:2;url=/BDCayush/admin/admin.php');
?>