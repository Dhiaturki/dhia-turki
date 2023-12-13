<?php
require_once('../functions/clientcontroller.php');
require_once('../models/client.php');
$name=$_POST['nomc'];
$email=$_POST['email'];
$pswd=$_POST['mot2pass'];
$client=new client($name,$email,$pswd);
$clientCtr=new clientcontroller();


$res=$clientCtr->insert($client);

if($res==true){
	header('Location:home.html');
}


?>