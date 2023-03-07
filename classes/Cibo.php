
<?php
require_once __DIR__ . '/Prodotto.php';

// Classe ProdottoCibo
class Cibo extends Prodotto {
    public $tipo;
  
    public function __construct(string $nome, string $descrizione, string $immagine, string $categoria, string $tipo,  float $prezzo, ) {
        parent::__construct( $nome, $descrizione,  $immagine, $categoria,$prezzo,);
        $this->tipo = $tipo;
    }
}
?>
