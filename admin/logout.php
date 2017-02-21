<?php 
session_start();
if(isset($_SESSION["sess_user"]))
{
unset($_SESSION['sess_user']);
session_destroy();
}

header("Location:http://www.akgec.in/bdc17/admin/index.php");
?>
