
<?php include 'navbar.php'; ?>
<?php
require_once('../functions/filmcontroller.php');
require_once('../models/film.php');
include_once('../database/config.php');

?>
<form>
<select id="genre" name="genre" class="form-control" required>
                   <option value="">Select a genre</option>
                    <option value="Action">Action</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Drama">Drama</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Horror">Horror</option>
                    <option value="Mystery">Mystery</option>
                    <option value="Romance">Romance</option>
                    <option value="Thriller">Thriller</option>
    </select>
    <input type="submit" name="submit" value="chercher" class="btn btn-primary" style="display: block; margin: auto;">

</form>
<?php

if (isset($_GET['genre'])) {
    $filmctr=new filmcontroller();
  $genre = $_GET['genre'];
  $result = $filmctr->cher_genre($genre);
  echo "Films of genre $genre:<br>";
$films = $result->fetchAll(PDO::FETCH_ASSOC);
echo '<div class="card-deck">';
foreach ($films as $film) {
    echo '<div class="card">';
    echo "<img  src='img/{$film['img']}' alt='Card image cap' width='200' height='275'>";
    echo '<div class="card-body">';
    echo '<h2>'.$film['title'].'</h2>';
    echo "<p class='card-text'>Director : {$film['director']}</p>";
    echo "<p class='card-text'>Genre : {$film['genre']}</p>";
    echo "<p class='card-text'>Review : {$film['reviews']}</p>";
    echo "<p class='card-text'><small class='text-muted'>{$film['duree']}</small></p>";
    echo '</div>';
    echo '</div>';
}
echo '</div>';

} else {
  echo " select a genre.";
}
?>

