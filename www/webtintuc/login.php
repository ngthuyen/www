<?php 
    session_start();
    require('template/header.php');
    $loi = array();
    $loi['username'] = $loi['password'] = $loi['login'] = NULL;
    $username = $password = NULL;
    if(isset($_POST['ok'])){
        if(empty($_POST['txtname'])){
            $loi['username'] = 'vui long nhap vao username';
        }
        else {
            $username = $_POST['txtname'];
        }
        if (empty($_POST['txtpass'])) {
            $loi['password'] = 'vui long nhap vao password';
        }
        else {
            $password = md5($_POST['txtpass']);
        }
        if($username && $password){
            require("library/config.php");
            $result = mysqli_query($conn,"SELECT *FROM user WHERE username = '$username' AND password='$password'");
            if(mysqli_num_rows($result) == 1){
                $data = mysqli_fetch_assoc($result);
                $_SESSION['level'] = $data['level'];
                if($_SESSION['level'] == '2'){
                    header('location: admin/admin.php');  //tai khoan admin 12345
                    exit();
                }
                else {
                    $_SESSION['username'] = $username;
                    header('location: index.php');
                    exit();
                }
            }
            else {
                $loi['login'] = 'ban nhap sai username hoac password';
            }
        }

    }
 ?>
        	<div id="login">
                <fieldset style="width: 290px; height: 100px; margin: 140px auto 0px;">
                    <legend style="margin-left: 5px;">Login</legend>
                    <form action="login.php" method="post">
                        <table style="padding:10px;">
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="txtname" size="25"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="txtpass" value="" placeholder="" size="25"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="ok" value="Login"></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </div>
            <div style="color: red; margin: 10px auto; width: 290px; height: 170px; text-align: center;">
                <?php 
                    echo $loi['username'].'<br>';
                    echo $loi['password'].'<br>';
                    echo $loi['login'];
                 ?>
            </div>
<?php 
    require("template/footer.php");
 ?>
