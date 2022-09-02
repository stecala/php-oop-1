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