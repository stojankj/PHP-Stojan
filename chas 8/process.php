<?php

    
    // $temp1 = $_POST["temp1"];
    // $temp2 = $_POST["temp2"];
    // $temp3 = $_POST["temp3"];
    // $temp4 = $_POST["temp4"];
    // $average = ($temp1 + $temp2 + $temp3 + $temp4) / 4;
    // echo $average;
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";

    // $ime = $_POST["name"];
    // $eposta = $_POST["email"];
    // $poraka = $_POST["message"];
    // $brojnakarakteri = strlen($poraka);

    // echo "Zdravo $ime";
    // echo "<br>";
    // echo "Tvojata email adresa e $eposta";
    // echo "<br>";
    // echo "Tvojata poraka e sledna $poraka";
    // echo "<br>";
    // echo "Tvojata poraka ima $brojnakarakteri karakteri";
    // echo "<br>";

    // $number1 = $_POST["number1"];
    // $number2 = $_POST["number2"];
    // $zbir = $number1 + $number2;
    // echo "Zbir od $number1 i $number2 e ednakov na $zbir";
    // echo "<br>";

    // $number3 = $_POST["number3"];
    // $number4 = $_POST["number4"];
    // $razlika = $number3 - $number4;
    // echo "Razlika od $number3 i $number4 e ednakov na $razlika";
    // echo "<br>";

    // $number5 = $_POST["number5"];
    // $number6 = $_POST["number6"];
    // $mnozenje = $number5 * $number6;
    // echo "Zbir od $number5 i $number6 e ednakov na $mnozenje";
    // echo "<br>";

    // $number7 = $_POST["number7"];
    // $number8 = $_POST["number8"];
    // $delenje = $number7 / $number8;
    // echo "Zbir od $number7 i $number8 e ednakov na $delenje";
    // echo "<br>";

//     $target_dir = "uploads/";
//     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 
//     $uploadOk = 1;
//     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// if (isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if ($check !== false) {
//         // Check if the file size is within the limit (1 megabyte)
//         if ($_FILES["fileToUpload"]["size"] > 1 * 1024 * 1024) {
//             echo "File size exceeds the limit of 1 megabyte.";
//             $uploadOk = 0;
//         } else {
//             echo "File is an image - " . $check["mime"] . ".";
//             $uploadOk = 1;
//         }
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }

// print_r($_FILES);

if(!empty($_FILES['uploaded_file'])){
    $path = 'uploads/';
    $path = $path . basename($_FILES['uploaded_file']['name']);

    if ($_FILES["uploaded_file"]["size"] > 1 * 1024 * 1024) {
        echo "Vashiot fajl e pogolem od 1mb";
    }
    else {
        if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {     
            echo "The file base ". basename($_FILES['uploaded_file']['size']). " has been uploaded";
        }  

        else {
            echo "error";
        }
    }

  
}

    
?>