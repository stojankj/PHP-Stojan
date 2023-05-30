<?php //declare(strict_types=1) ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chas 6</title>
    <?php
        $currentTime = date('H');
        $date = date("F j, Y, g:i a");
        if ($currentTime >= 6 && $currentTime < 20) {
            echo '<link rel="stylesheet" href="light.css">';
        } else {
            echo '<link rel="stylesheet" href="dark.css">';
        }
        echo $date;
        echo "<br>";
    ?>
</head>
<body>

    <?php 
        
    echo "<hr>";
    echo "while example";
    echo "<hr>";

    $a = 0;
    while ($a <= 10) {
        echo "$a <br>";
        $a++;
    }

    echo "<hr>";
    echo "do while example";
    echo "<hr>";

    $a = 0;
    do {
        echo "$a <br>";
        $a++;
    } while ($a <= 10);

    echo "<hr>";
    echo "for example";
    echo "<hr>";

    for ($x=10; $x > 0 ; $x--) { 
        echo "$x <br>";
    }

    echo "<hr>";
    echo "foreach example";
    echo "<hr>";

    $brojki = array('eden', 'dva', 'tri', 'cetiri', 'pet');

    foreach ($brojki as $val => $value) {
        echo "$val : $value <br>";
    }

    // for ($i=0; $i <= 100; $i+=2) { 
    //     echo "$i <br>";
    // }

    // for ($i=1; $i <= 100; $i+=2) { 
    //     echo "$i <br>";
    // }

    


    echo "<hr>";
    echo "function example";
    echo "<hr>";

    function parniBroevi(){
        for ($i=0; $i <= 100; $i+=2) { 
            echo "$i , ";
        }
    }

    parniBroevi();


    echo "<hr>";
    echo "function argument example";
    echo "<hr>";

    function parniBroeviDo(int $until){
        for ($i=0; $i <= $until; $i+=2) { 
            echo "$i , ";
        }
    }

    parniBroeviDo(50);
    // parniBroeviDo('sto');

    echo "<hr>";
    echo "proizvod example";
    echo "<hr>";

    function proizvodNaDvaBroja($n1, $n2){
        return $n1 * $n2;       
    }

    echo proizvodNaDvaBroja(2,5);
    echo "<hr>";
    echo proizvodNaDvaBroja(5,98);
    echo "<hr>";
    echo proizvodNaDvaBroja(3,12);
    echo "<hr>";
    echo proizvodNaDvaBroja(4,7);

    function zbir($a, $b){
        echo $a + $b. "<br>";       
    }

    function zbir_i(int $a,int $b){
        echo $a + $b. "<br>";       
    }
    echo "<hr>";
    zbir(6,6);
    // zbir(6, "6 sest")
    echo "<hr>";
    zbir_i(7,7);
    // zbir_i(6, "6 sest");

    ?>


</body>
</html>