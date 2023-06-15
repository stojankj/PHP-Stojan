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

   if ($_SESSION['username'] == "Stojan" && $_SESSION["password"] == "Stojan") {
    echo "Ova e mojata stranica i samo jas mozam da ja vidam";
   } else {
    echo "Ne ste avtorizirani";
   }

    ?>



</body>
</html>