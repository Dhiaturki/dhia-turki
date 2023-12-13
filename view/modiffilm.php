<?php
require_once('../functions/filmcontroller.php');
$filmctr = new filmcontroller();
$res = $filmctr->getfilm($_GET['id']);
?>
<form name='f1' method='post' action='modification_film.php'>
<table border='1'>
    <tr>
        <td>ID</td>
        <td><input type='text' name='id' readonly='readonly' value='<?php echo $res['idfilm'] ?>'/></td>
    </tr>
    <tr>
        <td>Title</td>
        <td><input type='text' name='title' value='<?php echo $res['title'] ?>'/></td>
    </tr>
    <tr>
        <td>Director</td>
        <td><input type='text' name='director' value='<?php echo $res['director'] ?>'/></td>
    </tr>
    <tr>
        <td>Reviews</td>
        <td><input type='text' name='reviews' value='<?php echo $res['reviews'] ?>'/></td>
    </tr>
    <tr>
        <td>Genre</td>
        <td><input type='text' name='genre' value='<?php echo $res['genre'] ?>'/></td>
    </tr>
    <tr>
        <td><input type='submit' value='Modify' name='mod'/></td>
    </tr>
</table>
</form>
