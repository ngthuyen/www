<?php  
session_start();
	if (isset($_SESSION['user'])) {
		# code...
		echo $_SESSION['user'];
		echo "<br>";
		echo "Day la trang bai viet";
		echo "<a href='session_logout.php'>Logout</a>";
	}
	else {
		echo "ban phai "."<a href='validate.php'>login</a>"."moi xem dc bai viet";
	}

?>