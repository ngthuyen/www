<?php 
	require('template/header.php');
	$id = $_GET['id'];
 ?>
	<div id="wraper">
		<table>
			<tr>
				<td colspan="3"></td>
				<td colspan="2"><a href="add_article.php">Them bai viet</a></td>
			</tr>
			<tr style="background-color: #91e378; color: #fff;">
				<th style="width: 100px;">STT</th>
				<th>Chuyen muc</th>
				<th>Tua de bai viet</th>
				<th style="width: 80px;">Edit</th>
				<th style="width: 80px;">Delete</th>
			</tr>
			<?php  
			require("../library/config.php");
			$stt =1;
			$result = mysqli_query($conn, "SELECT news.new_id, category.cate_title, news.title FROM category, news WHERE category.cateid = news.cateid");
			while($data = mysqli_fetch_assoc($result)){
			echo "<tr>";
				echo "<td>$stt</td>";
				echo "<td>$data[cate_title]</td>";
				echo "<td>$data[title]</td>";
				echo "<td><a href='edit_article.php?id=$data[new_id]'>Edit</a></td>";
				echo "<td ><a href='del_article.php?id=$data[new_id]' onclick='return show_confirm();' style='color: red;'>Delete</a></td>";
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
