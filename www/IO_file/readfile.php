<?php
$fp = @fopen('vd.php', "r");
   
if (!$fp) {
    echo 'File not found';
}
else
{
$data = fread($fp, filesize('vd.php'));
echo $data;
fclose($fp);
}
?>