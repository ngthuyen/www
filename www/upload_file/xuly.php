<?php
// if (isset($_POST['up']) && isset($_FILES['fileUpload'])) {
//     if ($_FILES['fileUpload']['error'] > 0)
//         echo "Upload lỗi rồi!";
//     else {
//         move_uploaded_file($_FILES['fileUpload']['tmp_name'], 'upload/' . $_FILES['fileUpload']['name']);
//         echo "upload thành công <br/>";
//         echo 'Dường dẫn: upload/' . $_FILES['fileUpload']['name'] . '<br>';
//         echo 'Loại file: ' . $_FILES['fileUpload']['type'] . '<br>';
//         echo 'Dung lượng: ' . ((int)$_FILES['fileUpload']['size'] / 1024) . 'KB';
//     }
// }
if ($_FILES["fileUpload"]["error"] > 0) {
	echo "Xin vui long chon file";
	# code...
}
else if($_FILES["fileUpload"]["size"] > 1*1024*1024){
	echo "ban chi dc upload file co dung luong < 1MB";
}
else if($_FILES["fileUpload"]["type"] != "image/png"){
	echo "ban phai nhap file png";
}
else{
	move_uploaded_file($_FILES["fileUpload"]["tmp_name"], "data/".$_FILES["fileUpload"]["name"]);
}
?>