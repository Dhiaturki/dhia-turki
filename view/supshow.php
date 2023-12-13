<?php
require_once('../functions/showcontroller.php');
$film = new ShowController();
$film->delete($_GET['id']);
header('Location:indexshow.php');



?>