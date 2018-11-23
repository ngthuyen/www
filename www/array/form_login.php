<?php 
	$error = array();
	if(isset($_POST['ok'])){
	$username = $_POST['username'];
	$pass = $_POST['password'];
	if($username == "huyen" && $pass == "1234"){
		echo "chao mung admin";
	}
	else if($username == NULL && $pass == NULL){
		echo "moi ban nhap username va password";
	}
	else if($username == NULL && $pass!=NULL || $username !=NULL && $pass == NULL){
		echo "ban chua nhap username hoac password";
	}
	// else if()
	else if($username == "huyen" && $pass != "1234"){
		echo "ban nhap sai password";
	}
	else if($username != "huyen" && $pass == "1234"){
		echo "Ban nhap sai username";
	}
	else if($username != "huyen" && $pass != "1234"){
		echo "moi ban nhap lai thong tin";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>validate form</title>
</head>
<body>
	<form action="" method="post">
		Username <input type="text" name="username"> 
		<br>
		PassWord <input type="password" name="password"> 
		<br>
		<input type="submit" name="ok" value="Login">

		
	</form>

</body>
</html>


