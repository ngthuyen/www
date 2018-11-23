<?php 
	$fname = $_GET['filename'];
	//mo file 
	$file = fopen('filedown/'.$fname,"rb");

//bao cho trinh duyet kieu du lieu tra ve tu localhost
	header("Content-Type: application/octet-stream");

	header("Content-Disposition: attachment;filename=".$fname);
	//doc file va hien thi ra man hinh
	fpassthru($file);
	//dong file
	fclose($file);
?>