<?php  
	$id = $_GET["id"];
	require('../library/config.php');
	mysqli_query($conn, "DELETE FROM user WHERE userid = $id");
	mysqli_close($conn);
	header('location: list_user.php');
	
?>