<?php
$scondb = new mysql('db403=mysql','root','p@sswOrd','northwind');
if($conn->connect_errno){
  die($conn->connect_errno);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>
<body>
  <table>
    <tr>
      <th>Product name</th>
      <th>Units in stock</th>
    </tr>
    <!-- add table rows hear ex.
    <tr>
      <td>Chai</td>
      <td>39</td>
    </tr>
    -->    
  </table>
</body>
</html>