<?php 
	$conn = mysqli_connect('localhost','root','','webtintuc') or die("ket noi ko thanh cong");

	$sql = 'SELECT*FROM user';
	$result = mysqli_query($conn,$sql);
	$data = mysqli_fetch_assoc($result);
	echo $data['userid'].'<br>';
	echo $data['username'].'<br>';
	$sql2 = "SELECT username FROM user WHERE username LIKE '%a%'";
	$result2 = mysqli_query($conn,$sql2);
	while ($data2 = mysqli_fetch_assoc($result2)){
		echo $data2['username']."<br>";
	}
	mysqli_close($conn);
?>