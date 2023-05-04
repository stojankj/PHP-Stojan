<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ova e naslov</h1>
    <h1><?php
    
    $text = "Ova e naslov na vest";
    $x = 5;
    $y = 30;
    $zbir = $x + $y;    
    $t = 101.5;
    echo $text; 
    
    
    ?></h1>
    <?php echo "<h1>Ova e naslov 2</h1>";?>

    <p>
        <?php echo $x + $y ; ?> e isto sto i <?php echo $zbir; ?>
    </p>

    <?php echo "<p>". $x + $y ; ?> e isto sto i <?php echo $zbir."</p>"; ?>

    <?php echo "<h1>".$text."</h1>" ?>

</body>
</html>


