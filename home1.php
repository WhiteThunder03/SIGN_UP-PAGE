<html>
<body>
    <center>
<?php  
$mysqli = new mysqli("localhost","root","","amazon"); 
$query = "SELECT * FROM grocery";
echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">id</font> </td> 
          <td> <font face="Arial">Grocery name</font> </td> 
          <td> <font face="Arial">Grocery price</font> </td> 
          <td> <font face="Arial">Grocery quantity</font> </td> 
          <td> <font face="Arial">Add to cart</font></td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["grocery_id"];
        $field2name = $row["grocery_name"];
        $field3name = $row["grocery_price"];
        $field4name = $row["grocery_quantity"]; 

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