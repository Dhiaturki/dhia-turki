<?php
require_once('../functions/filmcontroller.php');
$film = new filmcontroller();
$film->delete($_GET['id']);
header('Location:indexfilm.php');



?>