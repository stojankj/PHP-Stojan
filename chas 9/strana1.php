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

// if (isset($_POST["color"])) {
//     $color = $_POST["color"];

//     $_SESSION["selectedColor"] = $color;
// }

// echo '<h1>Site 1</h1>';

// if (isset($_SESSION["selectedColor"]) && ($_SESSION["selectedColor"] === "red" || $_SESSION["selectedColor"] === "yellow")) {
//     echo '<style>body { background-color: ' . $_SESSION["selectedColor"] . '; }</style>';
// }



?>

<form method="post" action="strana2.php">
    <label for="colorSelect">Select a color:</label>
    <select id="colorSelect" name="color">
        <option value="red" name="red">Red</option>
        <option value="yellow" name="yellow">Yellow</option>
    </select>
    <input type="submit" value="Submit">
</form>





</body>
</html>