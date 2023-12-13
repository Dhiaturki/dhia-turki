<?php
require_once('../functions/showcontroller.php');
$us = new ShowController();
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
<br>
<br>
<table class="table" border="5">
    <thead>
        <tr>
            <th>ID show</th>
            <th>ID salle</th>
            <th>ID Film</th>
            <th>Date start Show</th>
            <th>Date Fin Show</th>
            <th>Attendence</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once('../functions/filmcontroller.php');
        $filmctr = new filmcontroller();
        if (is_array($res) || is_object($res)){
            foreach ($res as $row) {
                $film=$filmctr->getfilm($row['id_film']);
                
                echo "<tr>";
                echo "<td>{$row['id_show']}</td>";
                echo "<td>{$row['id_salle']}</td>";
                echo "<td><a href=\"#\" class=\"tooltip-test\" title='".$film['title']."'>{$row['id_film']}</a></td>";
                echo "<td>{$row['start']}</td>";
                echo "<td>{$row['fin']}</td>";
                echo "<td>{$row['nb_client']}</td>";
                echo "<th><a href='supshow.php?id={$row['id_show']}' class='btn btn-danger'>Delete</a></th>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>

<a href="addshow.php" class="btn btn-primary">Add show</a>
