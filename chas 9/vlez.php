<?php 
    setcookie('ime_i_prezime', "Stojan Kjushkovski", time() + 60 * 60 * 24 * 1, "/", "", 0);
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


<form method="post" action="register.php">
  <label for="nameInput">Name:</label>
  <input type="text" id="nameInput" name="name" placeholder="Enter your name" required>

  <label for="colorSelect">Color:</label>
  <select id="colorSelect" name="color">
    <option value="red">Red</option>
    <option value="green">Green</option>
    <option value="blue">Blue</option>
  </select>

  <input type="submit" value="Submit">
</form>


</body>
</html>