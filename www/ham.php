<?php  

if (isset($_POST['ok'])) {
	$so = $_POST['so'];
	// if($so == NULL){
	// 	echo "ban chua nhap so";
	// }
	// # code...
	// else{
	// 	if($so%2 == 0){
	// 		echo "$so la so chan";
	// 	}
	// 	else {
	// 		echo "$so la so le";
	// }
	// }

	function ktra($so){
		if($so%2 == 0){
			echo "$so la so chan";
		}
		else {
			echo "$so la so le";
		}	
	}

	ktra($so);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post" accept-charset="utf-8">
		Nhap so: 
		<input type="text" name="so" value="" placeholder="">
		<input type="submit" name="ok" value="Kiem tra">
	</form>	
</body>
</html>