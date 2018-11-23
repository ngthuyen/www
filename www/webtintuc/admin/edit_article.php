<?php 
	require('template/header.php');
	$id = $_GET["id"];
	require('../library/config.php');
	$result = mysqli_query($conn, "SELECT cateid, title, image, introduce, content FROM news WHERE new_id = $id");
	$data = mysqli_fetch_assoc($result);
 ?>
 <div id="wraper_3">
		<fieldset style="width: 790px; margin: 20px auto 10px;">
			<legend style="margin-left: 10px;">Chỉnh sửa bài viết</legend>
			<form action="add_article.php" method="post" enctype="multipart/form-data">
				<table style="margin: 20px;">
					<tr>
						<td>Chuyên mục</td>
						<td><select name="txtcate">
							<option value="15" <?php if($data['cateid'] == 15) echo "selected='selected'"; ?>>Kinh tế</option>
							<option value="16" <?php if($data['cateid'] == 16) echo "selected='selected'"; ?>>Chính trị</option>
							<option value="17" <?php if($data['cateid'] == 17) echo "selected='selected'"; ?>>Thể thao</option>
							<option value="18" <?php if($data['cateid'] == 18) echo "selected='selected'"; ?>>Van hoa</option>
						</select></td>
					</tr>
					<tr>
						<td>Tiêu đề</td>
						<td><input type="text" name="title" size="35" value="<?php echo "$data[title]" ?>"></td>
					</tr>
					<tr> 
						<td>Hình ảnh cũ</td>
						<td>
							<img src="<?php echo "../library/images/$data[image]" ?>" width="150px" alt="">
						</td>
					</tr>
					<tr>
						<td>Hình ảnh mới</td>
						<td>
							<input type="file" name="" value="" placeholder="" size="25">
						</td>
					</tr>	
					<tr>
						<td>Mô tả</td>
						<td>
							<textarea name="intro" cols="60" rows="5" ><?php echo "$data[introduce]"; ?></textarea>
						</td>
					</tr>
					<tr>
						<td>Nội dung</td>
						<td><textarea name="content" cols="60" rows="8" ><?php echo "$data[content]"; ?></textarea></td>
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
						<td><input type="submit" name="ok" value="Update"></td>
					</tr>
				</table>
			</form>
		</fieldset>
	</div>

<?php 
	require('template/footer.php');
 ?>