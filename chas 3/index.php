<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php echo "<h1>Data Types</h1>";

    $string = "Ova e string";
    echo "<h3>". $string . "</h3>";

    var_dump($string);

    $integer = -444;
    echo "<h3>". $integer . "</h3>";
    
    var_dump($integer);

    $float = 3.54;
    echo "<h3>". $float . "</h3>";
    
    var_dump($float);

    $t = true;
    $n = false;
    echo "<h3>". $t . "</h3>";
    var_dump($t);
    echo "<h3>". $n . "</h3>";
    var_dump($n);

    echo "<h3>Niza</h3>";
    $array = array("kuce", "mace", "kokoshka", 4, true);
    var_dump($array);

    echo "<h3>Object</h3>";
    
    class Book {
        public $ime;
        public $avtor;

        public function __construct($ime, $avtor) {
            $this->ime = $ime;
            $this->avtor = $avtor;
        }

        public function printajkniga() {
            return $this->ime. " e napisana od". $this->avtor;
        }

    }

   $kniga1 = new Book("Zlostorstvo i kazna", " Tolstoj");
    //var_dump($kniga1)
   echo $kniga1 -> printajkniga();
   echo "<br>";
   echo "<br>";

   $kniga2 = new Book("Alhemicarot", " Koeljo");
   echo $kniga2 -> printajkniga();

   $null = NULL;
   echo "<br>";
   echo "<br>";
   var_dump($null);
   echo "<br>";
   echo "<br>";
   define ("DB_USERNAME_CONFIG", "stojankj");
   echo DB_USERNAME_CONFIG;
   echo "<br>";
   echo "<br>";
   
   function konstanti(){
    echo "Od funkcijata ";
    echo "<br>";
    echo DB_USERNAME_CONFIG;
   }
   konstanti();

    ?>

</body>
</html>