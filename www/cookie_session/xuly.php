<?php 
	// echo "Username la: ".$_POST['username'];

$a = $_POST['a'];
$b = $_POST['b'];
if($a > $b){
	echo "a > b";
}
else if($a < $b ){
	echo "a < b";
}
else {
	echo "a=b";
}
?>
