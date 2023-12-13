<?php
class salle {
    private $namesalle, $capaciti, $prix;

    function __construct($namesalle="", $capaciti="", $prix="") {
        $this->namesalle = $namesalle;
        $this->capaciti = $capaciti;
        $this->prix = $prix;
    }

    public function get_namesalle(){
        return $this->namesalle;
    }

    public function get_capaciti(){
        return $this->capaciti;
    }

    public function get_prix(){
        return $this->prix;
    }

    public function set_namesalle($namesalle){
        $this->namesalle = $namesalle;
    }

    public function set_capaciti($capaciti){
        $this->capaciti = $capaciti;
    }

    public function set_prix($prix){
        $this->prix = $prix;
    }
}
?>
