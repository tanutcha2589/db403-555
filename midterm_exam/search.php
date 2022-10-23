<?php
    while ($fetch = mysql_fetch_assoc($result)){
    }
    else {
     echo 'User not found.';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
</head>
<body>
  <header>
    <form action="product.php" method="get">
      <label for="category">
        <select name="category" id="category">
        
        </select>
      </label>
      <input type="submit" value="Search" name="submit">
    </form>
  </header>
</body>
</html>