<?php 
$id = $_GET["id"];
require('../library/config.php');
mysqli_query($conn, "DELETE FROM news WHERE new_id = $id");
header('location: list_article.php');
exit();
mysqli_close($conn);
 ?>