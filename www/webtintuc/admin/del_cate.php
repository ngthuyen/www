<?php 
	$id = $_GET['id'];
	require('../library/config.php');
	mysqli_query($conn, "DELETE FROM category WHERE cateid = '$id'");
	mysqli_close($conn);
	header('location: list_category.php');
	exit();
 ?>