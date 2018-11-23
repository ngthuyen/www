<?php 
	require('template/header.php');
 ?>
	<div id="wraper">
		<table>
			

			<tr style="background-color: #91e378; color: #fff;">
				<th>STT</th>
				<th>Username</th>
				<th>Email</th>
				<th>Level</th>
				<th>Delete</th>
			</tr>
			<?php 
				require('../library/config.php');
				$stt = '1';
				$result = mysqli_query($conn, "SELECT userid, username, email, level FROM user");
				while($data = mysqli_fetch_assoc($result)){; // xu dung vong while de lay het du lieu trong bang user
					echo "<tr>";
						echo"<td>$stt</td>";
						echo "<td>$data[username]</td>";
						echo "<td>$data[email]</td>";
						if($data['level'] == '1'){
							echo "<td>Thanh vien</td>";
						}
						else {
							echo "<td>Admin</td>";
						}
						echo "<td ><a href='del_user.php?id=$data[userid]' onclick='return show_confirm();' style='color: red;'>Delete</a></td>";		// dong tren de truyen vao duong dan gia tri cua userid 				
					echo "</tr>";
					$stt++;
			}
			mysqli_close($conn);
			?>
		</table>
	</div>
	<?php 
		require('template/footer.php');
	 ?>
