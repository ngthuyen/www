<?php 
session_start();
    require('template/header.php');
    $id = $_GET['id'];

 ?>
        	<div id="left">
            	<div id="list-detail">
                    <?php  
                    require('library/config.php');
                    $result = mysqli_query($conn, "SELECT title, introduce, image, content, cateid FROM news WHERE new_id = $id");
                    $data = mysqli_fetch_assoc($result);
                        echo "<h2>$data[title]</h2>";
                        echo "<p>$data[introduce] </p>";
                        echo "<img src='library/images/$data[image]'>";
                        echo "<p>$data[content]</p>";
                        mysqli_close($conn);
                    ?>
                </div>
                <div id="other-article">
                     
                    <?php 
                    require('library/config.php');
                    $result2 = mysqli_query($conn, "SELECT new_id, title FROM news WHERE cateid= $data[cateid] AND new_id < $id ORDER BY new_id desc limit 3");
                    if(mysqli_num_rows($result2) != 0){
                        echo "<p>Bài viết khác</p>";
                        while($data2 = mysqli_fetch_assoc($result2)){

                            echo "<ul>";
                                echo "<li><a href='detail.php?id=$data2[new_id]'>$data2[title]</a></li>";
                                // echo "<li><a href='#'>Canh sat bien vung vang bao ve to quoc</a></li>";
                                // echo "<li><a href='#''>Gia xang lai tiep tuc tang</a></li>";
                            echo "</ul>";
                        }
                        mysqli_close($conn);
                    }
                    ?>

                </div>
                <div id="comment">
                    <fieldset>
                        <legend>Comment</legend>
                        <form>
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="" size="25"></td>
                                </tr>
                                <tr>
                                    <td>Mess</td>
                                    <td><textarea name="" cols="60" rows="5"></textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="" value="Submit"></td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                </div>
                <div id="show-comment">
                    <div class="comm">
                        <img src="picture.jpg" width="60px"/>
                        <div class="content">
                            <p style="color: blue;">Mac Ta <span style="color: #ccc;">8/3/2018</span></p>
                            <p>Noi dung comment</p>
                        </div>
                        <div style="clear:left;"></div>
                    </div>
                    <div class="comm">
                        <img src="picture.jpg" width="60px"/>
                        <div class="content">
                            <p style="color: blue;">Mac Ta <span style="color: #ccc;">8/3/2018</span></p>
                            <p>Noi dung comment</p>
                        </div>
                        <div style="clear:left;"></div>
                    </div>
                    <div class="comm">
                        <img src="picture.jpg" width="60px"/>
                        <div class="content">
                            <p style="color: blue;">Mac Ta <span style="color: #ccc;">8/3/2018</span></p>
                            <p>Noi dung comment</p>
                        </div>
                        <div style="clear:left;"></div>
                    </div>
                </div>
            </div>
            
<?php 
    require("template/content_right.php");
    require("template/footer.php");
 ?>
