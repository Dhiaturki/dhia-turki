<?php
include_once('../models/client.php');
include_once('../database/config.php');

class clientcontroller extends connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(client $c) {
        $query = "insert into client(nomc, email, mot2pass) values(?, ?, ?)";
        $res = $this->pdo->prepare($query);
        $aryy = array($c->get_nomc(), $c->get_email(), $c->get_mot2pass());
        return $res->execute($aryy);
    }

    function getclient($email, $mot2pass) {
        $query = "select * from client where email = ? and mot2pass = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($email, $mot2pass));
        $array = $res->fetch();
        return $array;
    }    

    function delete($idclient) {
        $query = "delete from client where idclient = ?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idclient));
    }

    function liste() {
        $query = "select * from client";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function modifier_user(client $c) {
        $sql = "update client set nomc = ?, email = ?, mot2pass = ? where idclient = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($c->get_nomc(), $c->get_email(), $c->get_mot2pass(), $c->get_idclient()));
    }
}
?>
