<!DOCTYPE html>
<html>
<head>
	<title>vong lap php</title>
</head>
<body>
	<form>
		Ngay sinh
		<select>
			<?php 
				for($i=1; $i <= 31; $i++){
					echo "<option>$i</option>";
				}
			 ?>
		</select>
	</form>
</body>
</html>