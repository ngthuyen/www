<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style.css">
	<script src="../library/ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
		function show_confirm(){
			if(confirm("Bạn chắc chắn muốn xóa")){
				return true;
			}
			else {
				return false;
			}
		}
	</script>
</head>
<body>
	<div id="top">
		<h3 style="">Welcome to Admin (<a href="../logout.php" style="color: #fff;">Logout</a>)</h3>
	</div>
	<div id="menu">
		<ul>
			<li><a href="list_user.php">Quan ly thanh vien</a></li>
			<li><a href="list_category.php">Quan ly chuyen muc</a></li>
			<li><a href="list_article.php">Quan ly Bai viet</a></li>
			<li><a href="list_comment.php">Quan ly Binh luan</a></li>
		</ul>
	</div>	
	<div style="clear: left;"></div>