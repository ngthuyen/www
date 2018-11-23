<?php  
		require('template/header.php');
		$loi = array();
		$loi['title'] = $loi['image'] = $loi['intro'] = $loi['content'] = NULL;
		$cateid = $title = $image = $intro = $content = NULL;
		if(isset($_POST['ok'])){
			$cateid = $_POST['txtcate'];
			if(empty($_POST['title'])){
				$loi['title'] = "Vui lòng nhập vào tiêu đề";
			}
			else {
				$title = $_POST['title'];
			}
			if($_FILES['image']['error'] > 0){
				$loi['image'] = "Bạn chưa upload hình ảnh";
			}
			else {
				$image = $_FILES['image']['name'];
			}
			if(empty($_POST['intro'])){
				$loi['intro'] = " Ban chưa nhập mô tả";
			}
			else {
				$intro = $_POST['intro'];
			}
			if(empty($_POST['content'])){
				$loi['content'] = "Bạn chưa nhập vào nội dung";
			}
			else {
				$content = $_POST['content'];
			}
			if($title && $image && $intro && $content){
				require('../library/config.php');
				mysqli_query($conn, "INSERT INTO news(title, image, introduce, content, cateid)
												VALUES('$title', '$image', '$intro', '$content', $cateid)");
				mysqli_close($conn);
				move_uploaded_file($_FILES["image"]["tmp_name"], "../library/images/".$_FILES["image"]["name"]);
			}
		}
?>
	<div id="wraper_3">
		<fieldset style="width: 790px; margin: 20px auto 10px;">
			<legend style="margin-left: 10px;">Thêm bài viết</legend>
			<form action="add_article.php" method="post" enctype="multipart/form-data">
				<table style="margin: 20px;">
					<tr>
						<td>Chuyên mục</td>
						<td><select name="txtcate">
							<option value="15">Kinh tế</option>
							<option value="16">Chính trị</option>
							<option value="17">Thể thao</option>
						</select></td>
					</tr>
					<tr>
						<td>Tiêu đề</td>
						<td><input type="text" name="title" size="35"></td>
					</tr>
					<tr> 
						<td>Hình ảnh</td>
						<td>
							<input type="file" name="image" value="" placeholder="">
						</td>
					</tr>	
					<tr>
						<td>Mô tả</td>
						<td>
							<textarea name="intro" cols="60" rows="5"></textarea>
						</td>
					</tr>
					<tr>
						<td>Nội dung</td>
						<td><textarea name="content" cols="60" rows="8"></textarea></td>
					</tr>
					<tr>
						<script>
                			CKEDITOR.replace( 'content',{
	                				filebrowserBrowseUrl: 'http://localhost/www/webtintuc/library/ckeditor/ckfinder/ckfinder.html',
	      							filebrowserImageBrowseUrl: 'http://localhost/www/webtintuc/library/ckeditor/ckfinder/ckfinder.html?type=Images',
							      filebrowserFlashBrowseUrl: 'http://localhost/www/webtintuc/library/ckeditor/ckfinder/ckfinder.html?type=Flash',
							      filebrowserUploadUrl: 'http://localhost/www/webtintuc/library/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
							      filebrowserImageUploadUrl: 'http://localhost/www/webtintuc/library/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							      filebrowserFlashUploadUrl: 'http://localhost/www/webtintuc/library/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                			});
            			</script>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="ok" value="Add"></td>
					</tr>
				</table>
			</form>
		</fieldset>
	</div>

	<div style="color: red; width: 270px; margin: 10px auto 10px;">
		<?php 
			echo $loi['title'].'<br>';
			echo $loi['image'].'<br>';
			echo $loi['intro'].'<br>';
			echo $loi['content'].'<br>';
			// echo $loi['title'].'<br>';
		 ?>
	</div>

<?php
		require('template/footer.php');
 ?>