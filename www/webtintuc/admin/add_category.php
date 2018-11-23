<?php  
		require('template/header.php');
		$loi = array();
		$loi['name'] = NULL;
		$catename = NULL;
		if(isset($_POST['ok'])){
			if(empty($_POST['txtname'])){
				$loi['name'] = 'ban chua nhap ten chuyen muc moi';
			}
			else {
				$catename = $_POST['txtname'];
			}
			if($catename){
				require('../library/config.php');
				mysqli_query($conn, "INSERT INTO category(cate_title)
												 VALUES('$catename')");
				mysqli_close($conn);
				
			}
		}
?>
		<div id="wraper_2">
			<fieldset style="width: 270px; margin: 20px auto 10px; height: 100px;">
				<legend style="margin-left: 10px;">Them chuyen muc</legend>
				<form action="add_category.php" method="post">
					<table style="margin: 10px;">
						<tr>
							<td>Name: </td>
							<td><input type="text" name="txtname" size="25" style="padding: 2px;"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="ok" value="Add" size="25" style="padding: 2px;"></td>
						</tr>
					</table>
				</form>
			</fieldset>
		</div>
		<div style="width: 270px; color: red; margin: 10px auto 10px;">
			<?php 
				echo $loi['name'];

			 ?>
		</div>
<?php
		require('template/footer.php');
 ?>