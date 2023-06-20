<?php 

require('db_config.php');

$sql = 'SELECT * FROM `prisutstvo`';

$statement = $conn->query($sql);

$redovnost = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "<br>";
// print_r($redovnost);

foreach ($redovnost as $record) {
    echo $record['id'];
    echo " ";
    echo $record['fname'];
    echo " ";
    echo $record['lname'];
    echo " ";
    if ($record['Attendance'] == 1){
        echo "prisuten";
    } else {
        echo "ne e prisuten";
    };
    echo " ";
    echo $record['date'];
    echo " ";
    echo "<br>";
}

?>