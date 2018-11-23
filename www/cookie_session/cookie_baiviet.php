<?php 
	if(isset($_COOKIE["user"])){
		echo $_COOKIE["user"];
		echo "<br>";
		echo "day là trang bai viet";
		echo "<br>";
		echo "<a href='logout.php'>logout</a>";
	}
	else {
		echo "ban phai". " <a href='validate.php'>login</a>"." moi xem duoc noi dung bai viet";
	}
 ?>
