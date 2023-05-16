<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo 4 + 4 ;

    // echo "<br>";

    // $x = "dva";
    // $y = "cetiri";

    // if ($x > $y) {
    //     echo "X e pogolemo od Y";
    // }
    // else {
    //     echo "X e pomalo od Y";
    // }
    // echo "<br>";

    // $c=5;
    // echo ++$c;
    // echo "<br>";
    // echo $c++;
    // echo "<br>";
    // echo $c;
    // echo "<br>";
    // $c=5;
    // echo --$c;
    // echo "<br>";
    // echo $c;
    // echo "<br>";
    // echo $c--;
    // echo "<br>";
    // echo $c;

    // $eden= "sakam";
    // $dva = "chips";
    // echo "<br>";
    // echo $eden ." ". $dva;
    // echo "<br>";
    // echo $eden .= $dva;

    // $a = "dva";
    // $b = "tri";
    // echo "<br>";

    // $broj_na_bukvi = strlen($a);
    // echo $broj_na_bukvi;


    $zbor = "Emilija";
    $recenica = "Moze da se zeme Emilija";
    $position = strpos($recenica, $zbor);

    if ($position !== false) {
    echo "The substring was found at position: " . $position;
    } else {
    echo "The substring was not found.";
    }     

    echo "<br>";

    $ime = "Stojan";
    echo strrev($ime);
    

    // echo $a + $b;
    // echo "<br>";
    // echo $a - $b;
    // echo "<br>";
    // echo $a * $b;
    // echo "<br>";
    // echo $a / $b;
    // echo "<br>";
    // echo $a % $b;
    // echo "<br>";
    // echo $a ** $b;
    // echo "<br>";



    ?>
</body>
</html>