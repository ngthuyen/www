<?php 
    require('template/header.php');
        $loi = array();
        $username = $password = $day = $month =$year = $gender = NULL;
        $loi['username'] = $loi['password'] = $loi['email'] = $loi['birthday'] = $loi['gender'] = $loi['register'] =  NULL;
    if(isset($_POST['ok'])){
        // $loi = array();
        // $username = $password = $day = $month =$year = NULL;
        // $loi['username'] = $loi['password'] = $loi['email'] = $loi['birthday'] =  NULL;
        if (empty($_POST['txtname'])) {
            $loi['username'] = "Vui long nhap vao username";
        }
        else {
            $username = $_POST['txtname']; 
        }
        if (empty($_POST['txtpass'])) {
            $loi['password'] = "vui long nhap vao password";
        }
        else{
            $password = md5($_POST['txtpass']);
        }
        if (empty($_POST['txtmail'])) {
            $loi['email'] = "vui long nhap vao email";
        }
        else{
            $email = $_POST['txtmail'];
        }
        if ($_POST['day'] == 'ngay' || $_POST['month']=='thang' || $_POST['year'] == 'nam') {
            $loi['birthday'] = "vui long nhap vao ngay";
        }
        else {
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
        }
        if (empty($_POST['gender'])) {
            $loi['gender'] = 'vui long chon gender';
        }
        else {
            $gender = $_POST['gender'];
        }
        if ($username && $password && $email && $day && $month && $year && $gender) {
            require("library/config.php");
            $result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");
            mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result) == 0){
                mysqli_query($conn, "INSERT INTO user(username, password, email, birthday, gender, level)
                                                VALUES('$username', '$password', '$email', '$year-$month-$day','$gender','1')");
                $loi['register'] = "dang ki thanh cong"."<a href='login.php'> login</a> de vao website";
            }
            else {
                $loi['register'] = "da ton tai username"."<a href='login.php'> login</a> de vao website";
            }
            mysqli_close($conn);
        }

    }
 ?>
        	<div id="login">
                <fieldset style="width: 290px; height: 170px; margin: 140px auto 0px;">
                    <legend style="margin-left: 10px">Register</legend>
                    <form action="register.php" method="post">
                        <table style="padding: 10px;">
                            <tr>
                                <td>Username</td>
                                <td><input type="text" size="25" name="txtname"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" value="" placeholder="" size="25" name="txtpass"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" value="" placeholder="" size="25" name="txtmail"></td>
                            </tr>
                            <tr>
                <td>Birthday</td>
                <td>
                    <select name="day">
                        <option value="ngay">Ngay</option>
                        <?php 
                        for($i=1;$i<=31;$i++){
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                <!-- </td>
                <td> -->
                    <select name="month">
                        <option value="thang">thang</option>
                        <?php 
                            $data = array(1=>"Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
                            foreach ($data as $key=>$tam) {
                                # code...
                                echo "<option value='$key'>$key</option>";
                            }
                        ?>
                    </select>
                <!-- </td>
                <td> -->
                    <select name="year">
                        <option value="nam">Nam</option>
                        <?php 
                        for($z=1945;$z<=date("Y");$z++){
                            echo "<option value='$z'>$z</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr> 
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="1" >FeMale
                    <input type="radio" name="gender" value="2" >Male
                </td>
            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="ok" value="Register"></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </div>

            <div style="color: red; margin: 10px auto; width: 290px; height: 170px; text-align: center;">
                <?php 
                    echo $loi['username']."<br>";
                    echo $loi['password']."<br>";
                    echo $loi['email']."<br>";
                    echo $loi['birthday']."<br>";
                    echo $loi['gender']."<br>";
                    echo $loi['register'];
                 ?>
            </div>
<?php 
    require("template/footer.php");
 ?>
