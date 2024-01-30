<?php 

    class Movie {
        public $name;
        public $genre;
        public $year;
        public $discount = 0;

        function __construct($_name, $_genre, $_year) {
            $this->name = $_name;
            $this->genre = $_genre;
            $this->year = $_year;
        }

        public function setDiscount($age){
            if($age  >= 25 && $age <= 65){
                $this->discount = 10;
            } elseif ($age > 65) {
                $this->discount = 25;
            }
        }

        public function getDiscount() {
            return $this->discount;
        }
    }

    $firstMovie = new Movie("Avengers:Endgame", "Azione", 2019);
    $firstMovie -> setDiscount(37);

    $secondMovie = new Movie("Tutti tranne te", "Commedia", 2024);
    $secondMovie -> setDiscount(24);

    $thirdMovie = new Movie ("Alla ricerca della felicità", "Drammatico", 2006);
    $thirdMovie -> setDiscount(67);

    $arr_movies = [
        $firstMovie,
        $secondMovie,
        $thirdMovie
    ];

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            foreach($arr_movies as $movie){
                echo $movie->name." è un film del genere ".$movie->genre.", uscito nel ". $movie->year. ". <br> Lo sconto per te è del ".$movie->getDiscount()."%";
                echo "<br>";
                echo "<br>";
            }
        ?>
    </div>
</body>
</html>