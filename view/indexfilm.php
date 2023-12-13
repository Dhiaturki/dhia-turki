<?php
require_once('../functions/filmcontroller.php');
$us = new filmcontroller();
$res = $us->liste();
?>

<style>
    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    .table tbody + tbody {
        border-top: 2px solid #dee2e6;
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn:hover {
        color: #212529;
        text-decoration: none;
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>
<!-- Any page of your project -->
<?php include 'admin_nav.php'; ?>
<!-- Rest of your HTML code -->

<table class="table" border="3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Director</th>
            <th>Reviews</th>
            <th>Genre</th>
            <th>duree</th>
            <th>Image</th>
            <th>Modify</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (is_array($res) || is_object($res)){
            foreach ($res as $row) {
                echo "<tr>";
                echo "<td>{$row['idfilm']}</td>";
                echo "<td>{$row['title']}</td>";
                echo "<td>{$row['director']}</td>";
                echo "<td>{$row['reviews']}</td>";
                echo "<td>{$row['genre']}</td>";
                echo "<td>{$row['duree']}</td>";
                echo "<td><img src='img/{$row['img']}' alt='' width='100' height='100'></td>";
                echo "<td><a href='modiffilm.php?id={$row['idfilm']}' class='btn btn-primary'>Modify</a></td>";
                echo "<td><a href='supfilm.php?id={$row['idfilm']}' class='btn btn-danger'>Delete</a></td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>

<a href="addfilm.php" class="btn btn-primary">Add Film</a>
