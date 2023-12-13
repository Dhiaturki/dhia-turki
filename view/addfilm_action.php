<?php
require_once('../functions/filmcontroller.php');
require_once('../models/film.php');
include_once('../database/config.php');

if(isset($_POST["submit"]) && isset($_FILES["img"])){
    $title = $_POST['title'];
    $director = $_POST['director'];
    $reviews = $_POST['reviews'];
    $genre = $_POST['genre'];
    $duree = $_POST['duree'];

    if($_FILES["img"]["error"] === 4){
        echo "<script> alert ('Image does not exist');</script>";
    }
    else {
        $filename = $_FILES['img']['name'];
        $filesize = $_FILES['img']['size'];
        $tmpname = $_FILES['img']['tmp_name'];
        $validimg = ['jpg', 'jpeg', 'png'];
        $imgextention = explode ('.', $filename);
        $imgextention = strtolower(end($imgextention));
        if(!in_array($imgextention, $validimg)){
            echo "<script> alert ('Invalid image extension');</script>";
        }
        else if ($filesize > 10000000000)
        {
            echo "<script> alert ('Image size too large');</script>";
        }
        else{
            $newimagename = uniqid();
            $newimagename .= '.' . $imgextention;
            move_uploaded_file($tmpname, 'img/'. $newimagename);

            $film = new film($title, $director, $reviews, $genre, $newimagename,$duree);
            $filmCtr = new filmcontroller();

            $res = $filmCtr->insert($film);
            if($res == true){
                header('Location:indexfilm.php');
            }
        }
    }
}

?>
