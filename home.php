<html>
<body>
    <center>
<?php 
function button(){
} 
$mysqli = new mysqli("localhost","root","","amazon"); 
$query = "SELECT * FROM mobiles";
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">S.no</font> </td> 
          <td> <font face="Arial">Product name</font> </td> 
          <td> <font face="Arial">Product price</font> </td> 
          <td> <font face="Arial">Product quantity</font> </td> 
          <td> <font face="Arial">Add to cart</font></td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["product_id"];
        $field2name = $row["product_name"];
        $field3name = $row["product_price"];
        $field4name = $row["product_quantity"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td>  
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td> <button href="./cart.php" >Add</button> </td>
              </tr>';
    }
    $result->free();
} 
?>
</center>
</body>
</html>