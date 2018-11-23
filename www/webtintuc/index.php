<?php 
session_start();
    require('template/header.php');

 ?>
        	<div id="left">
                <?php 
                        require('library/config.php');
                        $result3 = mysqli_query($conn, "SELECT cateid, cate_title FROM category");
                        while($data3 = mysqli_fetch_assoc($result3)){
            	            echo "<div class='news'>";
                            echo "<div class='categories'>$data3[cate_title]</div>";
                            echo "<div class='article'>";
                            $result = mysqli_query($conn, "SELECT new_id, title, image, introduce FROM news WHERE cateid = $data3[cateid] ORDER BY new_id desc");
                            $data = mysqli_fetch_assoc($result);
                            	echo "<h3><a href='detail.php?id=$data[new_id]'>$data[title]</a></h3>";
                                echo "<img src='library/images/$data[image]' width='140px'/>";
                                echo "$data[introduce]";
                            echo "</div>";
                            echo "<div class='list-article'>";
                                echo "<ul>";
                                    require('library/config.php');
                                    $result2 = mysqli_query($conn, "SELECT new_id, title FROM news WHERE cateid = $data3[cateid] ORDER BY new_id desc LIMIT 1,3");
                                    // ORDER BY desc để sắp xếp thứ tự id giảm dần
                                    //LIMIT để giới hạn số lượng dòng dữ liệu lấy ra 
                                    while($data2 = mysqli_fetch_assoc($result2)){
                                        echo "<li><a href='detail.php?id=$data2[new_id]'>$data2[title]</a></li>";
                                    }
                                    
                               echo "</ul>";
                            echo "</div>";
                        echo "</div>";
                        echo "<div style='clear: left;'></div>";
                    }
                        mysqli_close($conn);
                ?>
            </div>
            
<?php 
    require("template/content_right.php");
    require("template/footer.php");
 ?>