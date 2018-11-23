<?php 
	require('template/header.php');
	$id = $_GET["id"];
	if(isset($_POST['ok'])){
		if(empty($_POST['txtname'])){
			$loi['catename'] = 'ban chua nhap vao name';
		}
		else {
			$catename = $_POST['txtname'];
		}
		if($catename) {
			require('../library/config.php');
			mysqli_query($conn, "UPDATE category SET cate_title = '$catename' WHERE cateid = '$id'");
			mysqli_close($conn);
			header('location: list_category.php');
			exit();
		}
	}


	require('../library/config.php');
	$result = mysqli_query($conn, "SELECT cate_title FROM category WHERE cateid = '$id'");
	$data = mysqli_fetch_assoc($result);
		
?>
		<div id="wraper_2">
			<fieldset style="width: 270px; margin: 20px auto 10px; height: 100px;">
				<legend style="margin-left: 10px;">Chỉnh sửa chuyên mục</legend>
				<form action="edit_cate.php?id=<?php echo $id; ?>" method="post">
					<table style="margin: 10px;">
						<tr>
							<td>Name: </td>
							<td><input type="text" name="txtname" size="25" style="padding: 2px;" value="<?php echo $data['cate_title']; ?>"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="ok" value="Update" size="25" style="padding: 2px;"></td>
						</tr>
					</table>
				</form>
			</fieldset>
		</div>
		
<?php
		mysqli_close($conn);
		require('template/footer.php');
 ?>

