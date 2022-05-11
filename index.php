<?php

/*
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.

    L'e-commerce vende prodotti per gli animali.

    I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

    L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.

    Il pagamento avviene con la carta di credito, che non deve essere scaduta.

    BONUS:
    Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
*/

include_once __DIR__ . '/Class/children/ClassChild.php';
include_once __DIR__ . '/Class/UserClass.php';


// istanze per gli utenti
$utente1 = new User("Simone Luca", "Zaino", "simone@email.it", true, "2025-10-3");

$utente2 = new User("Mario", "Rossi", "mario@email.it", true, "2021-03-15");

$utente3 = new User("Michele", "Porta", "michele@email.it", false, "2027-12-9");

$utente4 = new User("Federica", "Lopari", "federica@email.it", false, "2020-10-22");

// istanze per il cibo
$crunchyDog = new Food ("Monge", "Crocchette ", 38, "cane", "Pollo, riso e granturco", "secco");

$wetForCat = new Food ("Amanova", "Umido", 27, "gatto", "Pollo e formaggio", "umido");

// istanze per i giochi
$ropeBone = new Toys ("Trixie", "Corda a forma di osso", 7, "cane", "Cotone", "Colori assortiti", 700);

$electronicRaptor = new Toys ("Ferplast", "Gioco Raptor Elettronico", 30, "gatto", "Plastica e Poliestere", "Blu", 5000);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style.css">
    <title>Pet Service Shop</title>
</head>
<body>
    <header>
        <div class="header-info">
            <p>Iscriviti per usufruire del 20% di sconto su tutti gli articoli!</p>
        </div>
        <div class="pseudo-logo">
            <h1>Pet Service Shop</h1>
        </div>
    </header>

    <main>
        <div class="container">

            <h2>
                CIBO PER ANIMALI DOMESTICI
            </h2>
            
            <div class="products-wrapper">
                <div class="single-product">
                    <div class="img-product flex-center">
                        <img src="./asset/img/crunchyDog.jpg" alt="Monge crunchy for dogs">
                    </div>
                    <div class="price-name-product">
                        <h4>
                            <?php echo $crunchyDog -> getDescription() . " " . $crunchyDog -> getBrand() ?> 
                        </h4>

                        <h4>
                        <?php echo $crunchyDog -> getPrice() ?> 
                            €
                        </h4>
                    </div>

                    <p>
                        <strong>Ingredienti: </strong>
                        <?php echo $crunchyDog -> getIngredients() ?> 
                    </p>

                    <p>
                        <strong>Tipologia cibo: </strong>
                        <?php echo $crunchyDog -> getFoodTypology() ?> 
                    </p>

                    <h6>
                        Se sei iscritto puoi acquistarlo a <br>
                        <?php echo $crunchyDog -> getPrice() * 0.8 ?>
                        €
                    </h6>
                
                </div>
                <div class="single-product">
                    <div class="img-product flex-center">
                        <img src="./asset/img/wetForCat.jpg" alt="Amanova wet for cats">
                    </div>
                    <div  class="price-name-product">
                        <h4>
                            <?php echo $wetForCat -> getDescription() . " " . $wetForCat -> getBrand() ?> 
                        </h4>

                        <h4>
                        <?php echo $wetForCat -> getPrice() ?> 
                            €
                        </h4>
                    </div>

                    <p>
                        <strong>Ingredienti: </strong>
                        <?php echo $wetForCat -> getIngredients() ?> 
                    </p>

                    <p>
                        <strong>Tipologia cibo: </strong>
                        <?php echo $wetForCat -> getFoodTypology() ?> 
                    </p>

                    <h6>
                        Se sei iscritto puoi acquistarlo a <br>
                        <?php echo $wetForCat -> getPrice() * 0.8 ?>
                        €
                    </h6>
                </div>
            </div>

            <h2>
                GIOCHI PER ANIMALI DOMESTICI
            </h2>
            
            <div class="products-wrapper">
                <div class="single-product">
                    <div class="img-product flex-center">
                        <img src="./asset/img/ropeBone.jpg" alt="Rope bone for dogs">
                    </div>
                    <div  class="price-name-product">
                        <h4>
                            <?php echo $ropeBone -> getDescription() . " " . $ropeBone -> getBrand() ?> 
                        </h4>

                        <h4>
                        <?php echo $ropeBone -> getPrice() ?> 
                            €
                        </h4>
                    </div>

                    <p>
                        <strong>Materiale: </strong>
                        <?php echo $ropeBone -> getMaterial() ?> 
                    </p>

                    <p>
                        <strong>Colore: </strong>
                        <?php echo $ropeBone -> getColor() ?> 
                    </p>

                    <p>
                        <strong>Peso: </strong>
                        <?php echo $ropeBone -> getWeightGr() ?>
                         gr 
                    </p>

                    <h6>
                        Se sei iscritto puoi acquistarlo a <br>
                        <?php echo $ropeBone -> getPrice() * 0.8 ?>
                        €
                    </h6>
                
                </div>
                <div class="single-product">
                    <div class="img-product flex-center">
                        <img src="./asset/img/electronicRaptor.jpg" alt="Electronic raptor for cats">
                    </div>
                    <div  class="price-name-product">
                        <h4>
                            <?php echo $electronicRaptor -> getDescription() . " " . $electronicRaptor -> getBrand() ?> 
                        </h4>

                        <h4>
                        <?php echo $electronicRaptor -> getPrice() ?> 
                            €
                        </h4>
                    </div>

                    <p>
                        <strong>Materiale: </strong>
                        <?php echo $electronicRaptor -> getMaterial() ?> 
                    </p>

                    <p>
                        <strong>Colore: </strong>
                        <?php echo $electronicRaptor -> getColor() ?> 
                    </p>

                    <p>
                        <strong>Peso: </strong>
                        <?php echo $electronicRaptor -> getWeightGr() ?>
                         gr 
                    </p>

                    <h6>
                        Se sei iscritto puoi acquistarlo a <br>
                        <?php echo $electronicRaptor -> getPrice() * 0.8 ?>
                        €
                    </h6>
                </div>
            </div>

            <h2>UTENTI</h2>
            <div>
                <p class="user-status">
                    <?php 
                        echo $utente1 -> getName() . " " . $utente1 -> getLastName() . " " . $utente1 -> getcardValidThru() . " e " . $utente1 -> getSiteMember() . "." 
                    ?>
                </p>
                <?php var_dump($utente1); ?>
            </div>
            <div>
                <p class="user-status">
                    <?php 
                        echo $utente2 -> getName() . " " . $utente2 -> getLastName() . " " . $utente2 -> getcardValidThru() . " ma " . $utente2 -> getSiteMember() . "." 
                    ?>
                </p>
                <?php var_dump($utente2); ?>
            </div>
            <div>
                <p class="user-status">
                    <?php 
                        echo $utente3 -> getName() . " " . $utente3 -> getLastName() . " " . $utente3 -> getcardValidThru() . " ma " . $utente3 -> getSiteMember() . "." 
                    ?>
                </p>
                <?php var_dump($utente3); ?>
            </div>
            <div>
                <p class="user-status">
                    <?php 
                        echo $utente4 -> getName() . " " . $utente4 -> getLastName() . " " . $utente4 -> getcardValidThru() . " e " . $utente4 -> getSiteMember() . "." 
                    ?>
                </p>
                <?php var_dump($utente4); ?>
            </div>

        </div>
    </main>
</body>
</html>
