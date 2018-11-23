<?php
//Dữ liệu trả về dạng json
$jsonData = file_get_contents("http://localhost/www/service/webservice.php?format=json");
$jsonArray = json_decode($jsonData, true);
 
//var_dump($jsonArray);
?>
<html>
	
<head></head>

<body>
	

</body>

</html>