<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
	<link rel="stylesheet" href="css.css">
</head>
<body>
    <?php
require_once('../functions/filmcontroller.php');
$us = new filmcontroller();
$res = $us->liste();
$res = $res->fetchAll();
?>
<div class="container">
<?php 
if (is_array($res) || is_object($res)){
    $i = 0;
    while ($i < count($res)) {
        $row = $res[$i];
        ?>
        <div class="card">
        <img  src='img/<?php echo $row['img']; ?>' alt="Card image cap">
        <div class="intro">
         <h2><?php echo $row['title']; ?></h2>
         <p><small class='text-muted'>Director : <?php echo $row['director']; ?></small></p>
         <p><small class='text-muted'>Genre :  <?php echo $row['genre']; ?></small></p>
        <p><small class='text-muted'>Duree :  <?php echo $row['duree']; ?></small></p>
        </div>
        </div>
        <?php $i++;}}?>
</div>
</div>
</body>
</html>