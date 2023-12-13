<?php
require_once('../functions/filmcontroller.php');
require_once('../models/film.php');
$filmCtr = new filmcontroller();
$film = new film();

$film->set_title($_POST['title']);
$film->set_director($_POST['director']);
$film->set_reviews($_POST['reviews']);
$film->set_genre($_POST['genre']);
$filmCtr->modifier_film($film);
header('Location:indexfilm.php');
?>
