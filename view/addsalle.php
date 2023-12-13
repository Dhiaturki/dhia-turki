<!DOCTYPE html>
<html>
<head>
    <title>Add a salle</title>
</head>
<body>
<?php include 'admin_nav.php'; ?>
    <form action="addsalle_action.php" method="post">
        <label for="namesalle">namesalle:</label><br>
        <input type="text" id="namesalle" name="namesalle" required><br>
        <label for="capaciti">capaciti:</label><br>
        <input type="text" id="capaciti" name="capaciti" required><br>
        <label for="prix">prix:</label><br>
        <input type="text" id="prix" name="prix" required><br>
        <input type="submit" value="Add salle">
    </form>
</body>
</html>
