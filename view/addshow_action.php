<?php
require_once('../functions/filmcontroller.php');
require_once('../functions/sallecontroller.php');
require_once('../functions/showcontroller.php');
require_once('../models/film.php');
require_once('../models/show.php');
include_once('../database/config.php');

$id_film = $_POST['film'];
$id_salle = $_POST['salle'];
$start = $_POST['t1'];
$date = $_POST['date'];

list($hours, $minutes) = explode(':', $start);
$fin = $hours * 60 + $minutes;

$film_res = new filmcontroller();

$film = $film_res->getfilm($id_film);
$duree = $film['duree'];

$duree = str_replace('m', '', $duree); 
$duree = (int)$duree; 
$fin = $fin + $duree;


$hours = floor($fin / 60);
$minutes = ($fin % 60);

$fin = sprintf('%02d:%02d', $hours, $minutes); 


$show_res = new ShowController();

$datestart = $date . ' ' . $start;
$datefin = $date . ' ' . $fin;

$shows = $show_res->get_salle_Show($id_salle);
foreach ($shows as $show) {
    $show_start = strtotime($show['start']);
    $show_end = strtotime($show['fin']);


    $start_timestamp = strtotime($datestart);
    $end_timestamp = strtotime($datefin);

    if (($show_start <= $end_timestamp) && ($show_end >= $start_timestamp)) {
        echo "There is already a show scheduled in the selected salle at the requested time.";
        exit;
    }
}


$show = new Show($id_film, $id_salle, $datestart, $datefin);
$addshow = new ShowController();
$res = $addshow->insert($show);
if($res == true){
    header('Location:indexshow.php');
}
?>
