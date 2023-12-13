<?php
include_once('../models/salle.php');
include_once('../database/config.php');

class sallecontroller extends connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(salle $s) {
        $query = "insert into salle(namesalle, capaciti, prix) values(?, ?, ?)";
        $res = $this->pdo->prepare($query);
        $aryy = array($s->get_namesalle(), $s->get_capaciti(), $s->get_prix());
        return $res->execute($aryy);
    }

    function getsalle($idsalle) {
        $query = "select * from salle where idsalle = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idsalle));
        $array = $res->fetch();
        return $array;
    }

    function delete($idsalle) {
        $query = "delete from salle where idsalle = ?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idsalle));
    }

    function liste() {
        $query = "select * from salle";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function modifier_salle(salle $s) {
        $sql = "update salle set namesalle = ?, capaciti = ?, prix = ? where idsalle = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($s->get_namesalle(), $s->get_capaciti(), $s->get_prix(), $s->get_idsalle()));
    }
}
?>
