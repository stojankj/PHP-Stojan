<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $color = $_POST["color"];
  $nameColor = $name . " " . $color;
  
  setcookie("name", $nameColor, time() + (86400 * 30), "/");
//   setcookie("favoriteColor", $color, time() + (86400 * 30), "/"); 
}

if(isset($_COOKIE["name"])){
    echo $_COOKIE["name"];
    echo "<br>";
} else {
    echo "Error: Cookies not set.";
}
?>