<?php  
$conn = mysqli_connect('localhost', 'root', '', 'webtintuc') or die ('Không thể kết nối tới database');
// mysql_query("insert into user(username, password, email, gender, birthday)
// 						values('dat', '987', 'dattanh@gmail.com', '2', '2003/10/25')
// 	");	
// $sql = "INSERT INTO user(username, password, email, gender, birthday)
// 					VALUES('dat', '999','datanh@gmail.com', '2', '2003/10/25')";
// if(mysqli_query($conn,$sql)){
// 	echo "ket noi thanh cong";
// }

// mysqli_query($conn, "INSERT INTO user(username, password, email, gender, birthday)
// 					VALUES('mymy', 'asb','mymy@gmail.com', '1', '2003/10/25')");
// $sql = "DELETE FROM user WHERE userid='4'";

// $sql = "UPDATE user SET userid='4' WHERE userid='5'";
// mysqli_query($conn,$sql);
// $result = mysqli_query($conn, "SELECT *FROM  user");
// while($data = mysqli_fetch_assoc($result)){; //in ra cac hang trong bang user //dung vong while de in tat ca cac hang trong bang
// 	echo $data['userid'].'<br>'; //echo ra mang khong thu tu cac thuoc tinh cua bang user
// 	echo $data['password'].'<br>';
// 	echo $data['email'].'<br>';
// }

$result = mysqli_query($conn,"SELECT *FROM comment");
$row = mysqli_num_rows($result); //ham dem so dong cos trong bang
echo $row;

?>

