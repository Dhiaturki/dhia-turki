<?php
require_once('../functions/sallecontroller.php');
require_once('../models/salle.php');
$namesalle = $_POST['namesalle'];
$capaciti = $_POST['capaciti'];
$prix = $_POST['prix'];
$salle = new salle($namesalle, $capaciti, $prix);
$salleCtr = new sallecontroller();

$res = $salleCtr->insert($salle);

if($res == true){
    header('Location:indexsalle.php');
}
?>
