<?php
require_once('../functions/filmcontroller.php');
require_once('../models/film.php');
include_once('../database/config.php');

    if(isset($_POST["submit"])){
        $idfilm = $_GET['id'];
        $idclient = $_GET['idclient'];
        $review=$_POST['rating'];
        $filmctr= new filmcontroller();
        $filmctr->review($idfilm,$review);
        header("Location:filmdetail.php?id=".$idfilm."&idclient=".$idclient);
    }
    

?>