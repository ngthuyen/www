<?php 
	$username = $_POST['username'];
	$password = $_POST['password'];
	$ngay = $_POST['ngay'];
	$thang = $_POST['thang'];
	$nam = $_POST['nam'];
	$gender = $_POST['gender'];
	$text = $_POST['text'];
if(isset($_POST['login'])){
	if($username == NULL && $password == NULL && $ngay ==NULL && $thang == NULL && $nam == NULL){
		echo "xin vui long nhap thong tin";
	}
	else if($username != NULL && $password !=NULL){
		if($ngay == "Ngay") echo "Moi ban nhap ngay sinh";
		else if($thang == "Thang") {
			echo "Moi ban nhap thang sinh";
		}
		else if($nam == "Nam") echo "Moi ban nhap nam sih";
		else if($gender == '') echo "chon gioi tinh";
		else if($ngay != "Ngay" && $thang != "Thang" && $nam != "Nam" && $gender != NULL){
			echo "Username: $username"."<br>";
			echo "password: $password"."<br>";
			echo "Birthday: $ngay/$thang/$nam"."<br>";
			if($gender == 1){
				echo "Gender: Male";
			}
			else if($gender == 2){
				echo "Gender: female";
			}
			
		}
	}
}
	// else {
	// 	echo "Username: $username"."<br>";
	// 	echo "password: $password"."<br>";
	// 	echo "Birthday: $ngay/$thang/$nam"."<br>";
	// 	// echo "Gioi tinh: $gender";
	// 	echo "Information: $text";
	// }

?>