<!DOCTYPE html>
<html>
<head>
    <title>Insert Page page</title>
</head>
<body>
    <center>
        <?php
        
        $conn = mysqli_connect("localhost", "root", "", "amazon");
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $uid =  $_REQUEST['uid'];
        $upassword = $_REQUEST['upassword'];
        if ($uid=='admin'){
            if ($upassword=='password'){
                header("Location: options.html");
                exit();
            }
        }
        $query = "SELECT * FROM users WHERE user_id = '$uid' and password='$upassword'";
        $result = mysqli_query($conn,$query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                header("Location: home.html");
                exit();
            } else {
                header("Location: signup.php");
                exit();
            }
        } else {
            echo 'Error: '.mysql_error();
        }
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>