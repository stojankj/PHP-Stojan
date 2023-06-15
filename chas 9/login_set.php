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

    <?php 

    $username = $_POST['name'];
    $password = $_POST['password'];

    echo "Vnesovte username " . $username . " i password " . $password;

    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;

    ?>

    <a href="avtorizirana-stranica.php">Link do mojata avtorizirana stranica</a>

    
</body>
</html>