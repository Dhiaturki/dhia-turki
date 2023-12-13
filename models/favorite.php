<?php

class favorite {

  public $film_id;
  public $client_id;


  function __construct($film_id, $client_id) {
    $this->film_id = $film_id;
    $this->client_id = $client_id;
  }

  public function get_film_id() {
    return $this->film_id;
  }

  public function get_client_id() {
    return $this->client_id;
  }

  public function set_film_id($film_id) {
    $this->film_id = $film_id;
  }

  public function set_client_id($client_id) {
    $this->client_id = $client_id;
  }
}
?>
