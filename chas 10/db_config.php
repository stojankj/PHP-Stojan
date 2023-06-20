<?php 

    $host = 'localhost';
    $db = 'db_stojan';
    $username = 'root';
    $password = '';
    
    try {
        $conn = new PDO("mysql:host=$host; dbname=$db", $username, $password);
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "konekcijata e uspeshna";
    } catch (PDOException $e) {
        echo "konekcijata ne e uspeshna";
    }

?>