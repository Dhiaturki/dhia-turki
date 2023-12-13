<?php include 'navbar.php'; ?>
<?php
require_once('../functions/favoritecontroller.php');
require_once('../models/favorite.php');
require_once('../functions/filmcontroller.php');
$idclient = $_GET['idclient'];
$filmctr = new filmcontroller();
$favoritectr=new favoritecontroller();
$favoriteliste=$favoritectr->get_favorites($idclient);
echo '<div class="card-deck">';
foreach ($favoriteliste as $favorite) {
  $idfilm = $favorite->film_id;
  $film = $filmctr->getfilm($idfilm);
  echo '<div class="card">';
        echo "<img class='card-img-top' src='img/{$film['img']}' alt='Card image cap' width='200' height='275'>";
        echo '<div class="card-body">';
        echo '<h2>'.$film['title'].'</h2>';
        echo "<p class='card-text'>Director : {$film['director']}</p>";
        echo "<p class='card-text'>Genre : {$film['genre']}</p>";
        echo "<p class='card-text'>Review : {$film['reviews']}</p>";
        echo "<p class='card-text'><small class='text-muted'>{$film['duree']}</small></p>";
        echo "<a href='Rfavorite.php?id=".$film['idfilm']."&idclient=".$idclient."' class='btn btn-danger'>Remove Favorite</a>";
        echo '</div>';
        echo '</div>';
}
echo '</div>';
?>
