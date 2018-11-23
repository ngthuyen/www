<?php 
	require('template/header.php');
 ?>
	<div id="wraper">
		<table>
			<tr>
				<td colspan="2"></td>
				<td colspan="2"><a href="add_category.php">Them chuyen muc</a></td>
			</tr>
			<tr style="background-color: #91e378; color: #fff;">
				<th style="width: 100px;">STT</th>
				<th>Chuyen muc</th>
				<th style="width: 100px;">Edit</th>
				<th style="width: 100px;">Delete</th>
			</tr>
		<?php 
			require('../library/config.php');
			$result = mysqli_query($conn, "SELECT *FROM category");
			$stt = '1';
			while($data = mysqli_fetch_assoc($result)){
				if(mysqli_num_rows($result) > 0){
					echo "<tr>";
						echo "<td>$stt</td>";
						echo "<td>$data[cate_title]</td>";
						echo "<td><a href='edit_cate.php?id=$data[cateid]'>Edit</a></td>";
						echo "<td ><a href='del_cate.php?id=$data[cateid]' onclick='return show_confirm();' style='color: red;'>Delete</a></td>";
					echo "</tr>";
		 }
		 $stt++;
			}
			mysqli_close($conn);
		?>
		</table>
	</div>
	<?php 
		require('template/footer.php');
	 ?>
