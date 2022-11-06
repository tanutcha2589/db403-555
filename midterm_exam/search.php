<?php
$conn = new mysqli('db403-mysql', 'root', 'P@sswOrd', 'northwind');
if ($conn->connect_errno){
    die($con->connect_errno);
}
?>
<?php
$sql ="SELECT * FROM select CategoryID, CategoryName from categories";
$result = $connect->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<tbody>
<?php while($row = $result->fetch_assoc()): ?>
  <tr>
   <td><?php echo $row['ID']; ?></td>
   <td class="name">
    <?php echo $row['name']; ?>
   </td>
   <td><?php echo $row['prices']; ?></td>
   </tr>
</tbody>
</body>
</html>