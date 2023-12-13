<?php
require_once('../functions/favoritecontroller.php');
$fav= new favorite($_GET['id'],$_GET['idclient']);
$req = new favoritecontroller();
$req->delete($fav);
header("Location:favoriteliste.php?idclient=".$_GET['idclient']);
?>
