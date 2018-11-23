<?php 
session_start();
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$login = $_POST['login'];
if(isset($_POST['login'])){
	if($username == "huyen" && $pass == "1234"){
		// setcookie("user","huyen",time()+3600);
		// echo $_COOKIE[]
		$_SESSION['user'] = 'huyen';
		header("location:session_baiviet.php");
		exit();
		// echo "chao mung admin";
	}
	else if($username == NULL && $pass == NULL){
		echo "moi ban nhap username vaf password";
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