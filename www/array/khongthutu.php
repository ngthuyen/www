<?php 

	$thong_tin = array('name' => "Huyen" , 'tuoi' => '23', 'diachi' => 'Ha Noi' );
	//in ra dia chi 
	echo $thong_tin['diachi']."<br>";
	//in thong tin ca mang
	foreach ($thong_tin as $key => $value) {
		# code...
		echo $key."=>".$value."<br>";
	}
?>