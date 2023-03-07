<?php
//prendo le classi
require_once __DIR__.'/classes/Prodotto.php';
require_once __DIR__.'/classes/Cibo.php';
require_once __DIR__.'/classes/Giocattolo.php';
require_once __DIR__.'/classes/Cuccia.php';
require_once __DIR__.'/classes/Categoria.php';

$prodotti = [];

$prodotti[] =  new Cibo (
                  "Farmina N&D Grain Free Pumpkin Adult Mini Agnello, Mirtilli, Zucca per cani", 
                  "Crocchette di alta qualità per cani adulti di tg piccola Farmina N&D Pumpkin Adult Mini con agnello, mirtilli e zucca, gustosissime, senza cereali né conservanti artificiali, ricche proteine animali.",
                  "https://shop-cdn-m.mediazs.com/bilder/farmina/nd/grain/free/pumpkin/adult/mini/agnello/mirtilli/zucca/per/cani/8/400/106209_pla_farmina_ndpumpkin_canine_lambblueberry_adultmini_7kg_hs_01_8.jpg", 
                  "Cani",
                  "Secco",
                  76.99, 
                  );
                  
$prodotti[] =  new Cibo (
                    "Monge All Breeds Adult Salmone e Riso", 
                    "Le crocchette di Monge Salmone e Riso All Breeds Adult sono un alimento completo per cani adulti di tutte le taglie formulato con un'unica fonte proteica: il salmone. Il cibo secco Monge Superpremium Salmone è stato sviluppato pensando al benessere del tuo amico a quattro zampe, grazie alla presenza di sostanze nutritive di qualità frutto della ricerca Made in Italy.",
                  
                    "https://www.monge.it/wp-content/uploads/2016/04/monge_cane_secco_all_breeds_adult_monoprotein_salmone_con_riso-270x500.jpg", 
                    "Cani",
                    "Secco",
                    59.99, 
                    );

$prodotti[] =  new Cibo (
                      "Acana Pacifica", 
                      "Acana Pacifica crocchette per cani adulti di tutte le razze a base di pesce. Ricetta ricca di aringa pescata in natura, sgombro, passera del Pacifico, nasello atlantico e scorfano. Alimento privo di cereali.",
                      "https://arcaplanet.vtexassets.com/arquivos/ids/275555/acana-dog-wild-coast.jpg?v=1764512187", 
                      "Cani",
                      "Secco",
                      106.99, 
                      );


$prodotti[] =  new Cibo (
   "Virtus Cat Adult Natural Lattina 150G", 
   "Trancetti per gatti adulti Virtus Nature Deep Sea Formula Tonno con Gamberetti. Fonte di acidi grassi...",
   "https://arcaplanet.vtexassets.com/arquivos/ids/272326/virtus-cat-ground-formula-multipack-24x150g.jpg?v=1764608096", 
   "Gatti",
   "Umido",
   2.99, 
   );

   $prodotti[] =  new Cibo (
      "Natural Trainer Gatto Sterilised Salmone", 
      "Cibo secco per gatti Trainer Natural Adult Sterilised con Salmone. Alimento completo per gatti con almeno un..",
      "https://arcaplanet.vtexassets.com/arquivos/ids/263982/8059149247618_124050_AFF_TRA33_21_Sterilized_Salmon_10Kg_AAFF_3D.jpg?v=1764602088", 
      "Gatti",
      "Secco",
      76.99, 
      );

      $prodotti[] =  new Giocattolo (
         "Gioco per Cane Corda Osso", 
         "Trixie ha studiato una linea di giochi ideali non solo a far divertire il tuo cane, ma anche utilissimi per aiutare il tuo pet a mantenere la sua igiene.",
         "https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=1764602569", 
         "Cani",
         "Stoffa",
         10.99, 
         );

         $prodotti[] =  new Giocattolo (
            "Tiragraffi Federico Grigio", 
            "Il Tiragraffi Federico di Trixie, con soffice fodera in peluche e robusti tronchetti rivestiti in juta, diventerà il",
            "https://arcaplanet.vtexassets.com/arquivos/ids/265811/185001_PHO_PRO_CAT_CLIP_44428-1.jpg?v=1764551593", 
            "Gatti",
            "Stoffa e Legno",
             269.99, 
            );
      
            $prodotti[] =  new Cuccia (
               "Cuccia con Orecchie 50CM", 
               "Morbida cuccia da interno per il riposo del tuo cane di piccola taglia o per il tuo gatto. Disponibile nel colore Azzurro e Nocciola. Diametro di 50CM",
               "https://arcaplanet.vtexassets.com/arquivos/ids/277287/luna-e-teo-cuccia-orecchie-nocciola-50cm.jpg?v=1764465566", 
               "Cani",
               "Stoffa",
                23.99, 
               );

               $prodotti[] =  new Cuccia(
                  "Cuccia per Gatti Louna Talpa", 
                  "Cuccia per gatti colore Talpa donerà al tuo felino di casa dolcissimi momenti di relax. Dimensioni del prodotto: 48,5",
                  "https://arcaplanet.vtexassets.com/arquivos/ids/277806/zolux-cuccia-gatti-louna-talpa.jpg?v=1764170537", 
                  "Gatti",
                  "Stoffa",
                   40.70, 
                  );
            
         
   



                            
     
       
 