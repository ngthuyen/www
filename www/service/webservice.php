    <?php
    $db_user = 'root'; //User đăng nhập MYSQL
    $db_pass = ''; // Pass đăng nhập MySQL
    $db_host = 'localhost'; //IP, Domain kết nối
    $db_name = 'test'; //Tên CSDL
    //Tạo biến kết nối với CSDL
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die('Kết nối thất bại');
     
    //Lấy kiểu định dạng muốn lấy của request
    $formatList = array('json', 'xml');
    if (isset($_GET['format'])) {
        $format = $_GET['format'];
    } else {
        $format = 'json';
    }
    if (!in_array($format, $formatList)) {
        $format = 'json';
    }
    //Truy vấn
    $query = mysqli_query($conn, 'SELECT * FROM students');
    //Tạo bảng lưu thông tin
    $students = array();
    //Trả về kiểu json
    if ($format == 'json') {
        header('Content-type: application/json');
        while($rs = mysqli_fetch_assoc($query)){
            $students[] = array('student'=>$rs);
            echo json_encode(array('students'=>$students));
            //var_dump($students);
            // echo "<br>";
        }
        
        
    }
    if ($format == 'xml') {
        header('Content-type: text/xml; charset=utf-8');
        echo '<users>';
        foreach ($students as $student) {
            echo '<user>';
            if (is_array($student)) {
                foreach ($student as $key => $value) {
                    echo  $key.$value.'<br>';
                    echo $key.$value.'<br>';
                }
            }
            echo '</user>';
        }
        echo '</users>';
    }
     
    mysqli_close($conn);
    ?>
