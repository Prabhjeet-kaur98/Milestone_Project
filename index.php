 <?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<?php include($proj_root . "index");

$proj_root = $_SERVER['DOCUMENT_ROOT'] . "proj_root";
?>