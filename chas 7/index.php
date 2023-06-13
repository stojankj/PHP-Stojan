<?php //declare(strict_types=1) ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chas 7</title>
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
         
        $string = "Profesorot saka da pie voda.";
        $string = trim($string , 'Profesorot');
        echo $string;
   
        echo "<br>";
        $string = substr("Profesorot saka da pie voda.", 10, 8);
        echo $string;

        echo "<br>";    
        $string = "Profesorot saka da pie voda.";
        $string = str_replace("saka da", "", $string);
        $string = trim($string);
        echo $string;

        echo "<br>"; 
        echo strlen($string);

        echo "<br>";

        $array = array('blue', 'red', 4, 'green');
        echo $array[1];
        $array[] = 'violet';
        $array[] = 'orange';

        echo "<br>";
        var_dump($array);
        echo "<br>";
        echo "<hr>";
        print_r($array);


        
        echo "<hr>";
        $boi = array(
            "boja1" => "blue",
            "boja2" => "green",
            "broj" => 4,
            "boja3" => "red",
            "boja4" => "violet"
        );
        
        $values = array_values($boi);
        $arr_c = count($values);
        sort($values);
        for ($i = 0; $i < $arr_c; $i++) { 
            echo $values[$i] . '<br>';
        }

        // sort($boi);

        // foreach ($boi as $key => $val) {
        //     echo "boi[" . $key . "] = " . $val . "\n";
        // }



        echo "<br>";
        echo "<hr>";
        $boi = array(
            "boja1" => "blue",
            "boja2" => "green",
            "broj" => 4,
            "boja3" => "red",
            "boja4" => "violet"
        );
        var_dump($boi);

        echo "<hr>";
        echo count($boi);
        echo "<hr>";

        foreach($boi as $key => $val){
            echo $key . ": ";
            echo $val. "<br>";
        }
        // arsort($boi);
        // foreach ($boi as $key => $val) {
        //     echo "$key = $val\n";
        // }

        asort($boi);
            foreach ($boi as $key => $val) {
             echo "$key = $val\n <br>";
        }

        $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
        asort($ceu);
            foreach ($ceu as $key => $val) {
             echo "The capitol of $key is $val\n <br>";
        }

        echo "<br>";
        echo "<hr>";

        $temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 73, 68, 73, 72, 65, 74, 65, 68, 73, 75, 79, 73];
            sort($temp);
            for ($i = 0; $i < 5; $i++) { 
                echo $temp[$i] . ',';
            }   
        
        
        echo "<hr>";

        $temperatura = [78, 60, 62, 68, 71, 68, 73, 85, 66, 76, 63, 75, 76, 73, 68, 73, 72, 65, 74, 65, 68, 73, 75, 79, 73];
        arsort($temperatura);
        $values = array_values($temperatura);
        print_r($temperatura);
        for ($x = 0; $x < 5; $x++) { 
            echo $values[$x] . ',';
        }  
       
    ?>


</body>
</html>