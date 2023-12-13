<?php
session_start();

require_once('../functions/clientcontroller.php');
require_once('../functions/admincontroller.php');
require_once('../models/client.php');
$email = $_POST['email'];
$pswd = $_POST['pswd'];
$us1 = new admincontroller();
$us2 = new clientcontroller();
$res1 = $us1->getadmin($email, $pswd);
$res2 = $us2->getclient($email, $pswd);
 
if ($res1) {
    header('Location: home_admin.php');
    } elseif ($res2) {
        
        header('Location: home.php?idclient='.$_SESSION["idclient"] = $res2["idclient"]);
    } else
    {
        header('Location: sign.html?1');
    }
?>