<?php

require_once __DIR__ . '/Prodotto.php';
  
class Cuccia extends Prodotto {
    private $materiale;
  
    public function __construct($nome, $descrizione, $immagine, $categoria, $materiale,  $prezzo,) {
        parent::__construct( $nome, $descrizione, $immagine,  $categoria, $prezzo,);
        $this->materiale = $materiale;
    }

    public function getMateriale() {
        return $this->materiale;
    }

    public function setMateriale($materiale) {
        $this->materiale = $materiale;
    }
}
