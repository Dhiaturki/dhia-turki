<?php
require_once('../functions/favoritecontroller.php');
require_once('../models/favorite.php');
$idclient = $_GET['idclient'];
$id = $_GET['id'];
$favorite = new favorite($idclient, $id);
$favoritectr = new favoritecontroller();

$res = $favoritectr->insert($favorite);

if($res == true){
    header('Location:filmdetail.php?id='.$id.'&idclient='.$idclient.'"');
}

?>
