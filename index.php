<?php 

    class Movie {
        public $name;
        public $genre;
        public $year;

        function __construct($_name, $_genre, $_year) {
            $this->name = $_name;
            $this->genre = $_genre;
            $this->year = $_year;
        }
    }


?>