<?php
require_once('../functions/filmcontroller.php');
require_once('../functions/sallecontroller.php');
require_once('../models/film.php');
include_once('../database/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'admin_nav.php'; ?>
<form action="addshow_action.php" method="post">
<div class="form-group">

    <label for="film">Film:</label>
    <select id="film" name="film" class="form-control" required>
        <?php
        $res = new filmcontroller();
        $films=$res->liste();

        foreach ($films as $film) {
            echo "<option value='{$film['idfilm']}'>{$film['title']}</option>";
        }
        ?>
    </select>
</div>
<div class="form-group">
    <label for="salle">Salle:</label>
    <select id="salle" name="salle" class="form-control" required>
        <?php
        $res =new sallecontroller();
        $salles=$res->liste();

        foreach ($salles as $salle) {
            echo "<option value='{$salle['idsalle']}'>{$salle['namesalle']}</option>";
        }
        ?>
    </select>
</div>
        
        <label for="time">Date:</label><br>
        <input type="date" id="date" name="date" required><br>
        <label for="time">Time Start:</label><br>
        <input type="text" id="t1" name="t1" required><br>
    <input type="submit" value="Add Show">
    </form>
</body>
</html>
