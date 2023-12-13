<?php
include_once('../models/admin.php');
include_once('../database/config.php');

class admincontroller extends connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(admin $a) {
        $query = "insert into admin(name, email, mot2pass) values(?, ?, ?)";
        $res = $this->pdo->prepare($query);
        $aryy = array($a->get_name(), $a->get_email(), $a->get_mot2pass());
        return $res->execute($aryy);
    }

    function getadmin($email, $mot2pass) {
        $query = "select * from admin where email = ? and mot2pass = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($email, $mot2pass));
        $array = $res->fetch();
        return $array;
    }
    

    function delete($idadmin) {
        $query = "delete from admin where idadmin = ?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idadmin));
    }

    function liste() {
        $query = "select * from admin";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function modifier_user(admin $a) {
        $sql = "update admin set name = ?, email = ?, mot2pass = ? where idadmin = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($a->get_name(), $a->get_email(), $a->get_mot2pass(), $a->get_idadmin()));
    }
}
?>
