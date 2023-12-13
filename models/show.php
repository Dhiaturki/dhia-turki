<?php
class Show {
    private $id_show, $id_film, $id_salle, $start, $fin;

    function __construct( $id_film="", $id_salle="", $start="", $fin="") {
        $this->id_film = $id_film;
        $this->id_salle = $id_salle;
        $this->start = $start;
        $this->fin = $fin;
    }

    public function get_id_film(){
        return $this->id_film;
    }

    public function get_id_salle(){
        return $this->id_salle;
    }

    public function get_start(){
        return $this->start;
    }

    public function get_fin(){
        return $this->fin;
    }
    public function set_id_film($id_film){
        $this->id_film = $id_film;
    }

    public function set_id_salle($id_salle){
        $this->id_salle = $id_salle;
    }

    public function set_start($start){
        $this->start = $start;
    }

    public function set_fin($fin){
        $this->fin = $fin;
    }
}
?>
