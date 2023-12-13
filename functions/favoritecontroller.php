<?php
include_once('../models/favorite.php');
include_once('../database/config.php');

class favoritecontroller extends connexion {
  function __construct() {
    parent::__construct();
  }

  function insert(favorite $f) {
    $query = "insert into favorite(idclient, id_film) values(?, ?)";
    $res = $this->pdo->prepare($query);
    $aryy = array($f->get_film_id(), $f->get_client_id());
    return $res->execute($aryy);
  }

  function delete(favorite $f) {
    $query = "delete from favorite where id_film = ? and idclient = ?";
    $res = $this->pdo->prepare($query);
    $aryy = array($f->get_film_id(), $f->get_client_id());
    return $res->execute($aryy);
  }

  function get_favorites($client_id) {
    $query = "select * from favorite where idclient = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($client_id));
    $array = array();
    while ($row = $res->fetch()) {
      $array[] = new favorite($row['id_film'], $row['idclient']);
    }
    return $array;
  }
}
?>
