<?php
include_once('../models/show.php');
include_once('../database/config.php');

class ShowController extends connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(Show $s) {
        $query = "insert into showw(id_film, id_salle, start, fin) values(?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);
        $aryy = array($s->get_id_film(), $s->get_id_salle(), $s->get_start(), $s->get_fin());
        return $res->execute($aryy);
    }
    

    function get_film_Show($id_film) {
        $query = "select * from showw where id_film = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id_film));
        $array = $res->fetchAll();
        return $array;
    }
    
    function get_salle_Show($salle_id) {
        $query = "select * from showw where id_salle = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($salle_id));
        $array = $res->fetchAll();
        return $array;
    }
    


    function delete($id_show) {
        $query = "delete from showw where id_show = ?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($id_show));
    }

    function liste() {
        $query = "select * from showw";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function modifier_show(Show $s) {
        $sql = "update showw set id_film = ?, id_salle = ?, start = ?, fin = ? where id_show = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($s->get_id_film(), $s->get_id_salle(), $s->get_start(), $s->get_fin(), $s->get_id_show()));
    }
    function add_attendecne($nbticket,$id_show) {
        $query = "update showw set nb_client = nb_client + ? where id_show = ?";
        $res = $this->pdo->prepare($query);
        $review = intval($review);
        return $res->execute(array($nbticket,$id_show));
    }
}
?>
