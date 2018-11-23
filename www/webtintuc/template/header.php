<?php 
    // session_start();

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
        
        <link rel="stylesheet" type="text/css" href="template/style.css" />
        
    </head>
    
    <body>
        <div id="top">
            <?php 
                if (isset($_SESSION['username'])) {
                    echo $_SESSION['username']."<a href='logout.php'> Logout</a>";
                    # code...
                }
                else {
                   echo '<a href="login.php">Login</a>';
                    echo '<a href="register.php">Register</a>';
                }
             ?>
            
        </div>
    	<div id="top">Banner</div>
        <div id="menu">
        	<ul>
                <li><a href="index.php">Trang chủ</a></li>
                <?php 
                    require('library/config.php');
                    $result = mysqli_query($conn, "SELECT cateid, cate_title FROM category ");
                    while($data = mysqli_fetch_assoc($result)){    
                        echo "<li><a href='category.php?id=$data[cateid]'>$data[cate_title]</a></li>";
                    }
                ?>
            </ul>
        </div>
        <div id="wrapper">