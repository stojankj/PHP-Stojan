<?php 
    session_start();
?>

<?php //declare(strict_types=1) ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chas 9</title>
   
</head>
<body>


<form method="post" action="login_set.php">
  <label for="nameInput">Name:</label>
  <input type="text" id="nameInput" name="name" placeholder="Username" required>

  <label for="colorSelect">Password:</label>
  <input type="password" name="password" placeholder="Password" required>

  <input type="submit" value="Submit">
</form>


</body>
</html>