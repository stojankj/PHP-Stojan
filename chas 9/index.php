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

    <?php 

   
     if(isset($_COOKIE["ime_i_prezime"])){
        echo "kolacheto e setirano";
        echo "<br>";
        echo $_COOKIE["ime_i_prezime"];
     } else {
        echo "kolacheto ne e setirano";
     }
     echo "<br>";
     var_dump($_COOKIE);
       
    ?>



</body>
</html>