<style>
    .card-deck {
  padding-top: 75px;
}

    </style>
<?php
require_once('../functions/filmcontroller.php');
$us = new filmcontroller();
$res = $us->liste();
if (isset($_GET['idclient']) && $_GET['idclient'] != 0) {
    $idclient = $_GET['idclient'];
  }
  
echo '<div class="card-deck">';
if (is_array($res) || is_object($res)){
    foreach ($res as $row) {
        echo '<div class="card">';
        echo "<img class='card-img-top' src='img/{$row['img']}' alt='Card image cap' width='200' height='275'>";
        echo '<div class="card-body">';
        if (isset($_GET['idclient']) && $_GET['idclient'] != 0) {
            echo '<a href="filmdetail.php?id='.$row['idfilm'].'&idclient='.$idclient.'">'.$row['title'].'</a>';
          }else{
            echo '<a href="filmdetail.php?id='.$row['idfilm'].'">'.$row['title'].'</a>';
          }
          
        echo "<p class='card-text'>Director : {$row['director']}</p>";
        echo "<p class='card-text'>Genre : {$row['genre']}</p>";
        echo "<p class='card-text'>Review : {$row['reviews']}</p>";
       echo "<p class='card-text'><small class='text-muted'>{$row['duree']}</small></p>";

        echo '</div>';
        echo '</div>';
    }
}
echo '</div>';
?>
