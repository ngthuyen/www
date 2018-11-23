<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>form dang ky</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="xuly.php" method="post" accept-charset="utf-8">
		<table style="margin: auto; margin-top: 50px;"> 
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
				<!-- <td> a</td>
				<td> a</td> -->
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="" placeholder=""></td>
				<!-- <td></td>
				<td></td> -->
			</tr>
			<tr>
				<td>Birthday</td>
				<td>
					<select name="ngay">
						<option value="Ngay">Ngay</option>
						<?php 
						for($i=1;$i<=31;$i++){
							echo "<option>$i</option>";
						}
						?>
					</select>
				<!-- </td>
				<td> -->
					<select name="thang">
						<option value="Thang">thang</option>
						<?php 
						for($j=1;$j<=12;$j++){
							echo "<option>$j</option>";
						}
						?>
					</select>
				<!-- </td>
				<td> -->
					<select name="nam">
						<option value="Nam">Nam</option>
						<?php 
						for($z=1945;$z<=date("Y");$z++){
							echo "<option>$z</option>";
						}
						?>
					</select>
				</td>
			</tr>
			<tr> 
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="1" >Male
					<input type="radio" name="gender" value="2" >Female
				</td>
			</tr>
			<tr>
				<td>Information</td>
				<td>
					<textarea name="text" style="height: 80px; width:300px;"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="login" value="Register">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>