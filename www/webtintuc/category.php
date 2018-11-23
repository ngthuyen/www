<?php 
session_start();
    require('template/header.php');
    $id = $_GET["id"];

 ?>
        	<div id="left">
            <?php 
            require('library/config.php');
            $result = mysqli_query($conn, "SELECT cate_title FROM category WHERE cateid = $id");
            $data = mysqli_fetch_assoc($result);
                 echo "<h2 style='border-bottom: 1px solid #ccc; margin:0px 10px 0px 10px;'>$data[cate_title]</h2>";
            	   echo "<div class='news'>";
                  $result2 = mysqli_query($conn, "SELECT title, image, introduce FROM news WHERE cateid = $id ORDER BY new_id desc");
                  while($data2 = mysqli_fetch_assoc($result2)){
                     echo	"<h3><a href='detail.php'>$data2[title]</a></h3>";
                     echo  "<img src='library/images/$data2[image]' width='140px' height='90px'/>";
                     echo "<p>$data2[introduce] </p>";
                     echo "<div style='clear:left;'></div>";
                    }
                     echo "</div>";

              ?>
                  <div class="pagination">
                      <ul>
                          <li>
                              <a href="#">1</a>
                          </li>
                          <li>
                              <a href="#">2</a>
                          </li>
                          <li>
                              <a href="#">3</a>
                          </li>
                          <li>
                              <a href="#">Next</a>
                          </li>
                          <li>
                              <a href="#">Last</a>
                          </li>
                      </ul>
                  </div>  
                </div>
                
            <!-- </div> -->
           
<?php 
    require("template/content_right.php");
    require("template/footer.php");
 ?>
