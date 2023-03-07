<?php

// Classe Prodotto
class Prodotto {
  public $nome;
  public $descrizione;
  public $immagine;
  public $categoria;
  public $prezzo;

  public function __construct( string $nome, string $descrizione,  string $immagine, string $categoria, float $prezzo,) {
      $this->nome = $nome;
      $this->descrizione = $descrizione;
      $this->immagine = $immagine;
      $this->categoria = $categoria;
      $this->prezzo = $prezzo;
  }


  public function getNome() {
      return $this->nome;
  }

  public function getDescrizione() {
      return $this->descrizione;
  }

  public function getImmagine() {
      return $this->immagine;
  }

  public function getCategoria() {
      return $this->categoria;
  }

  public function getPrezzo() {
    return $this->prezzo;
}

}

