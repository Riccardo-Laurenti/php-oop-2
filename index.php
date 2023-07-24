<?php
require_once __DIR__ . "/Ecommerce/Products.php";
require_once __DIR__ . "/Ecommerce/Food.php";
require_once __DIR__ . "/Ecommerce/Objects.php";
require_once __DIR__ . "/Ecommerce/Game.php";


$productfood = new Food('https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg', 'Royal Canin Mini Adult', 'Cane', 'Prezzo: € 43,99', 'Peso netto: 545g', 'Ingredienti: prosciutto, riso');

$producttwofood = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg0', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane', 'Prezzo: € 44,99', 'Peso netto: 600g', 'Ingredienti: manzo, cereali');

$productthirdfood = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Nature Cat Daily Lattina', 'Gatto', 'Prezzo: € 34,99', 'Peso netto: 400g', 'Ingredienti: tonno, pollo, prosciutto');

$productfourfood = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per Pesci Guppy in Fiocchi', 'Pesce', 'Prezzo: € 2,95', 'Peso netto: 30g', 'Ingredienti: Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');

$productobject = new Objects('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Voliera Wilma in Legno', 'Uccello', 'Prezzo: € 184,99', 'Mteriale: Legno', 'Dimensioni: M: L 83 x P 67 x H 153 cm');

$producttwoobject = new Objects('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Cartucce Filtranti per Filtro EasyCrystal', 'Pesce', 'Prezzo: € 2,29', 'Materiale: Mteriale espanso', 'Dimensioni: ND');

$productgame = new Game('https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Kong Classic', 'Cane', 'Prezzo: € 19,49', 'Caratteristiche: Gallegia e Rimbalza', 'Dimensioni: 8,5 cm x 10 cm');

$producttwogame = new Game('https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Topini di peluche Trixie', 'Gatto', 'Prezzo: € 4,99', 'Caratteristiche: Morbido con codina in corda', 'Dimensioni: 8,5 cm x 10 cm');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Php-oop-2</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-success text-center text-white rounded-1 mt-3 mb-4">
                <h4 class="fw-bold text-success">Boolshop</h4>
                <hr class="text-success">
            </div>
            <div class="card col-4">
                <img src="<?php echo $productfood->image ?>">
                <h4 class="fw-bold"><?php echo $productfood->name ?></h4>
                <h5><i class="fa-solid fa-dog"></i><?php echo $productfood->type ?></h5>
                <h5><?php echo $productfood->price ?></h5>
                <h5><?php echo $productfood->weight ?></h5>
                <h5><?php echo $productfood->ingredients ?></h5>
            </div>
            <div class="card col-4">
                <img src="<?php echo $producttwofood->image ?>">
                <h5 class="fw-bold"><?php echo $producttwofood->name ?></h5>
                <h5><i class="fa-solid fa-dog"></i><?php echo $producttwofood->type ?></h5>
                <h5><?php echo $producttwofood->price ?></h5>
                <h5><?php echo $producttwofood->weight ?></h5>
                <h5><?php echo $producttwofood->ingredients ?></h5>
            </div>
            <div class="card col-4">
                <img src="<?php echo $productthirdfood->image ?>">
                <h5 class="fw-bold"><?php echo $productthirdfood->name ?></h5>
                <h5><i class="fa-solid fa-cat"></i><?php echo $productthirdfood->type ?></h5>
                <h5><?php echo $productthirdfood->price ?></h5>
                <h5><?php echo $productthirdfood->weight ?></h5>
                <h5><?php echo $productthirdfood->ingredients ?></h5>
            </div>
            <div class="card col-4">
                <img src="<?php echo $productfourfood->image ?>">
                <h4 class="fw-bold"><?php echo $productfourfood->name ?></h4>
                <h5><i class="fa-solid fa-fish-fins"></i><?php echo $productfourfood->type ?></h5>
                <h5><?php echo $productfourfood->price ?></h5>
                <h5><?php echo $productfourfood->weight ?></h5>
                <h5><?php echo $productfourfood->ingredients ?></h5>
            </div>
            <div class="card col-4">
                <img src="<?php echo $productobject->image ?>">
                <h4 class="fw-bold"><?php echo $productobject->name ?></h4>
                <h5><i class="fa-solid fa-dove"></i><?php echo $productobject->type ?></h5>
                <h5><?php echo $productobject->price ?></h5>
                <h5><?php echo $productobject->materials ?></h5>
                <h5><?php echo $productobject->dimension ?></h5>
            </div>
            <div class="card col-4">
                <img src="<?php echo $producttwoobject->image ?>">
                <h4 class="fw-bold"><?php echo $producttwoobject->name ?></h4>
                <h5><i class="fa-solid fa-fish-fins"></i><?php echo $producttwoobject->type ?></h5>
                <h5><?php echo $producttwoobject->price ?></h5>
                <h5><?php echo $producttwoobject->materials ?></h5>
                <h5><?php echo $producttwoobject->dimension ?></h5>
            </div>
            <div class="card col-4">
                <img src="<?php echo $productgame->image ?>">
                <h4 class="fw-bold"><?php echo $productgame->name ?></h4>
                <h5><i class="fa-solid fa-dog"></i><?php echo $productgame->type ?></h5>
                <h5><?php echo $productgame->price ?></h5>
                <h5><?php echo $productgame->featurs ?></h5>
                <h5><?php echo $productgame->dimension ?></h5>
            </div>
            <div class="card col-4">
                <img src="<?php echo $producttwogame->image ?>">
                <h4 class="fw-bold"><?php echo $producttwogame->name ?></h4>
                <h5><i class="fa-solid fa-cat"></i><?php echo $producttwogame->type ?></h5>
                <h5><?php echo $producttwogame->price ?></h5>
                <h5><?php echo $producttwogame->featurs ?></h5>
                <h5><?php echo $producttwogame->dimension ?></h5>
            </div>
        </div>
    </div>
</body>

</html>