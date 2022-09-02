<?php
    class Movie {
        private $title;
        private $genre;
        private $length;
        
        function __construct($_title , $_genre , $_length)
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->length = $_length;
        }

        public function getTitle(){
           return $this->title;
        }
        public function getGenre(){
            return $this->genre;
         }
         public function getLength(){
            return $this->length;
         }
    }

    $firstMovie = new Movie('Inception' , 'Azione' , '2.28h');
    $secondMovie = new Movie('Nightmare Before Christmas','Animazione','1.16h');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>