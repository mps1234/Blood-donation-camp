<!DOCTYPE html>
<html>
<head>
	<title>Sort</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- jQuery validation Script -->
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
<div id="unsorted_entries">
	

</div>
<div id="registrationdata">
<?php
include_once('unsorteddata.php');
?>
</div>


<div>
<input type="button" id="sortbutton" name="sort_button" value="Sort">
</div>
</body>
</html>