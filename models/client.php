<?php
class client {
private $nomc, $email, $mot2pass;
function __construct($nomc="", $email="", $mot2pass="") {
    $this->nomc = $nomc;
    $this->email = $email;
    $this->mot2pass = $mot2pass;
}

public function get_nomc(){
    return $this->nomc;
}

public function get_email(){
    return $this->email;
}

public function get_mot2pass(){
    return $this->mot2pass;
}

public function set_nomc($nomc){
    $this->nomc = $nomc;
}

public function set_email($email){
    $this->email = $email;
}

public function set_mot2pass($mot2pass){
    $this->mot2pass = $mot2pass;
}

}?>
