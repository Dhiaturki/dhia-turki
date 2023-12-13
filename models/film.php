<?php
    class film {
        private $idfilm, $title, $director, $reviews, $genre, $img, $duree;
    
        function __construct($title="", $director="", $reviews="", $genre="", $img="", $duree="") {
            $this->title = $title;
            $this->director = $director;
            $this->reviews = $reviews;
            $this->genre = $genre;
            $this->img = $img;
            $this->duree = $duree;
        }
    
        public function get_duree(){
            return $this->duree;
        }
    
        public function set_duree($duree){
            $this->duree = $duree;
        }
    
    
    public function get_idfilm(){
        return $this->idfilm;
    }
    public function get_title(){
        return $this->title;
    }

    public function get_director(){
        return $this->director;
    }

    public function get_reviews(){
        return $this->reviews;
    }

    public function get_genre(){
        return $this->genre;
    }

    public function get_img(){
        return $this->img;
    }

    public function set_title($title){
        $this->title = $title;
    }

    public function set_director($director){
        $this->director = $director;
    }

    public function set_reviews($reviews){
        $this->reviews = $reviews;
    }

    public function set_genre($genre){
        $this->genre = $genre;
    }

    public function set_img($img){
        $this->img = $img;
    }
}
?>
