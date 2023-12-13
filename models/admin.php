<?php

class admin {
private $name, $email, $mot2pass;

function __construct($name="", $email="", $mot2pass="") {
    $this->name = $name;
    $this->email = $email;
    $this->mot2pass = $mot2pass;
}

public function get_name(){
    return $this->name;
}

public function get_email(){
    return $this->email;
}

public function get_mot2pass(){
    return $this->mot2pass;
}

public function set_name($name){
    $this->name = $name;
}

public function set_email($email){
    $this->email = $email;
}

public function set_mot2pass($mot2pass){
    $this->mot2pass = $mot2pass;
}

}?>
