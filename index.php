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
// var_dump($utente1);

$utente2 = new User("Mario", "Rossi", "mario@email.it", true, "2021-03-15");
// var_dump($utente2);

$utente3 = new User("Michele", "Porta", "michele@email.it", false, "2027-12-9");
// var_dump($utente3);

$utente4 = new User("Federica", "Lopari", "federica@email.it", false, "2020-10-22");
// var_dump($utente4);

// istanze per il cibo
$crunchyDog = new Food ("Monge", "Crocchette ", 38, "cane", "Pollo, riso e granturco", "dry");
// var_dump($crunchyDog);

$wetForCat = new Food ("Amanova", "Umido", 27, "gatto", "Pollo e formaggio", "wet");
// var_dump($wetForCat);

// istanze per i giochi
$ropeBone = new Toys ("Trixie", "Corda a forma di osso", 7, "cane", "Cotone", "Colori assortiti", 700);
// var_dump($ropeBone);

$ropeBone = new Toys ("Ferplast", "Gioco Raptor Elettronico", 30, "gatto", "Plastica e Poliestere", "Blu", 5000);
// var_dump($ropeBone);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Service Shop</title>
</head>
<body>

</body>
</html>
