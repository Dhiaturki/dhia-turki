<?php
include_once('../models/film.php');
include_once('../database/config.php');

class filmcontroller extends connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(film $f) {
        $query = "insert into film(title, director, reviews, genre, img, duree) values(?, ?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);
        $aryy = array($f->get_title(), $f->get_director(), $f->get_reviews(), $f->get_genre(), $f->get_img(), $f->get_duree());
        return $res->execute($aryy);
    }

    function getfilm($idfilm) {
        $query = "select * from film where idfilm = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(array($idfilm));
        $film = $stmt->fetch(PDO::FETCH_ASSOC);
        return $film;
    }

    function delete($idfilm) {
        $query = "delete from film where idfilm = ?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idfilm));
    }

    function liste() {
        $query = "select * from film";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function cher_genre($genre) {
        $query = "select * from film where genre='$genre'";
        $res=$this->pdo->prepare($query); 
        $res->execute();
        return $res;
      }
      
    function modifier_film(film $f) {
        $sql = "update film set title = ?, director = ?, reviews = ?, genre = ?, img = ?, duree = ? where idfilm = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($f->get_title(), $f->get_director(), $f->get_reviews(), $f->get_genre(), $f->get_img(), $f->get_duree(), $f->get_idfilm()));
    }
    function review($idfilm, $review) {
        $query = "update film set reviews = (reviews + ?)/2 where idfilm = ?";
        $res = $this->pdo->prepare($query);
        $review = intval($review);
        return $res->execute(array($review, $idfilm));
      }
      
      
}
?>