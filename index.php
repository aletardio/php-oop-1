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


?>