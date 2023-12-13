<?php
require_once('../functions/sallecontroller.php');
$film = new sallecontroller();
$film->delete($_GET['id']);
header('Location:indexsalle.php');



?>