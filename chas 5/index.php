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
    
    $zbor = "Maja";
    $recenica = "Elena vozi velosiped";

    if (strpos($recenica, $zbor) !== false){
        echo "Da Maja ima velosiped";
    }

    if (strpos($recenica, $zbor) !== false){
        echo "Da Maja ima velosiped";
    } else {
        echo "Maja nema velosiped";
    }

    echo "<br>";

    $ime = "Stoja";

    // if (strlen($ime) > 5 ){
    //     echo "Imeto " .$ime. " ima poveke od 5 karakteri";
    // } else {
    //     echo "Imeto " .$ime. " ima pomalku od 5 karakteri";
    // }

    echo "<br>";

    if (strlen($ime) > 5 ) {
        echo "Imeto " .$ime. " ima poveke od 5 karakteri";
    } elseif (strlen($ime) == 5 ) {
        echo "Imeto " .$ime. " ima 5 karakteri";
    } else {
        echo "Imeto " .$ime. " ima pomalku od 5 karakteri";
    }

    echo "<br>";
    echo "<br>";

    $brzinaNaVozenje = 100;
    if ($brzinaNaVozenje < 60 ) {
        echo "Vozite so dozvolena brzina";
    } elseif ($brzinaNaVozenje > 60 && $brzinaNaVozenje < 100) {
        echo "Ve molime namalete";
    } else {
        echo "Kazna 500 evra";
    }

    echo "<br>";
    echo "<br>";

    $today = date("l");

    switch ($today) {
        case 'Monday':
            echo "Denes e ponedelnik";
            break;
        case 'Tuesday':
            echo "Denes e vtornik";
            break;
        case 'Wednesday':
            echo "Denes e sreda";
            break;
        case 'Thursday':
            echo "Denes e cetvrtok";
            break;
        case 'Friday':
            echo "Denes e petok";
            break;
        case 'Saturday':
            echo "Denes e sabota";
            break;
        case 'Sundey':
            echo "Denes e nedela";
            break;
    }

    echo "<br>";
    echo "<br>";

    $hour = 14;

if ($hour > 6 && $hour < 11) {
    echo "Dobro Utro";
} elseif ($hour > 11 && $hour < 18) {
    echo "Dobar Den";
} else {
    echo "Dobro Vecer";
}


    

    
    // $today = date("d");  
    
    // echo "<br>";
    // echo $today;

    // $today = date("l");  
    
    // echo "<br>";
    // echo $today;


    ?>
</body>
</html>