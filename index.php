<?php
    require_once __DIR__.'/db.php';
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP OOP 2</title>
</head>
<body>
  <header>

  </header>
  <main>
  <div class="container w-100  d-flex justify-content-around">
    <div class="row w-100">
      <?php foreach ($prodotti as $index => $prodotto) { ?>
        <div class="col">
         <div class="card" style="width: 15rem;">
           <img src="<?= $prodotto->immagine ?>" class="card-img-top" alt="<?= $prodotto->nome ?>">
           <div class="card-body">
            <h5 class="card-title"><?= $prodotto->nome ?></h5>
            <p class="card-text"> <?= $prodotto->descrizione ?></p>
            <p class="card-text"> <?= $prodotto->categoria ?></p>
            <p class="card-text"> <?= $prodotto->prezzo ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
         </div>
        </div>
      <?php } ?>
    </div>
  </div>
</main>

  <footer>

  </footer>

   
     
