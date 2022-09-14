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
        $uid =  $_REQUEST['gid'];
        $uname = $_REQUEST['gname'];
        $uamount =  $_REQUEST['gprice'];
        $usign = $_REQUEST['gquantity'];
        $sql = "INSERT INTO grocery VALUES ('$uid',
            '$uname','$uamount','$usign')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$uid\n $uname\n "
                . "$uamount\n $usign");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>