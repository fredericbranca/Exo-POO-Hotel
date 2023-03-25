<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice POO Hotel</title>
</head>
<body>

<?php

//Chargement des classes//

// use LDAP\Result;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

//Instanciation//
$client1 = new Client("Baptiste", "Trabelsi");
$client2 = new Client("Jani", "Pallara");
$client3 = new Client("Raph", "Bojo");
$client4 = new Client("Antho", "Lulu");

//Instanciation des Hotels//
$hotel1 = new Hotel("Hôtel **** Strasbourg", "10 route de la Gare 67000 STRASBOURG");
$hotel2 = new Hotel("Hôtel Hilton **** Strasbourg", "1 Avenue Herrenschmidt 67000 STRASBOURG");
$hotel3 = new Hotel("Hôtel Regent **** Paris", "61 rue Dauphine 75006 PARIS");

//Instanciation des Chambres//
$chambre1 = new Chambre(1, 90, False, 1, $hotel1);
$chambre2 = new Chambre(2, 90, False, 1, $hotel1);
$chambre3 = new Chambre(3, 90, False, 1, $hotel1);
$chambre4 = new Chambre(4, 90, False, 1, $hotel1);
$chambre5 = new Chambre(5, 90, False, 1, $hotel1);
$chambre6 = new Chambre(6, 90, False, 1, $hotel1);
$chambre7 = new Chambre(7, 90, False, 1, $hotel1);
$chambre8 = new Chambre(8, 120, False, 1, $hotel1);
$chambre9 = new Chambre(9, 120, False, 2, $hotel1);
$chambre10 = new Chambre(10, 120, False, 2, $hotel1);
$chambre11 = new Chambre(11, 120, False, 2, $hotel1);
$chambre12 = new Chambre(12, 120, False, 2, $hotel1);
$chambre13 = new Chambre(13, 120, False, 2, $hotel1);
$chambre14 = new Chambre(14, 120, False, 2, $hotel1);
$chambre15 = new Chambre(15, 120, False, 2, $hotel1);
$chambre16 = new Chambre(16, 300, True, 4, $hotel1);
$chambre17 = new Chambre(17, 300, True, 4, $hotel1);
$chambre18 = new Chambre(18, 300, True, 4, $hotel1);
$chambre19 = new Chambre(19, 300, True, 4, $hotel1);
$chambre20 = new Chambre(20, 300, True, 4, $hotel1);
$chambre21 = new Chambre(21, 300, True, 4, $hotel1);
$chambre22 = new Chambre(22, 300, True, 4, $hotel1);
$chambre23 = new Chambre(23, 300, True, 4, $hotel1);
$chambre24 = new Chambre(24, 300, True, 4, $hotel1);
$chambre25 = new Chambre(25, 300, True, 4, $hotel1);
$chambre26 = new Chambre(26, 300, True, 4, $hotel1);
$chambre27 = new Chambre(27, 300, True, 4, $hotel1);
$chambre28 = new Chambre(28, 300, True, 4, $hotel1);
$chambre29 = new Chambre(29, 300, True, 4, $hotel1);
$chambre30 = new Chambre(30, 300, True, 4, $hotel1);
$chambre31 = new Chambre(1, 150, False, 2, $hotel2);
$chambre32 = new Chambre(2, 150, False, 2, $hotel2);
$chambre33 = new Chambre(3, 190, True, 2, $hotel2);
$chambre34 = new Chambre(4, 190, True, 2, $hotel2);
$chambre35 = new Chambre(1, 180, False, 2, $hotel3);
$chambre36 = new Chambre(2, 180, False, 2, $hotel3);
$chambre37 = new Chambre(3, 200, True, 2, $hotel3);
$chambre38 = new Chambre(4, 200, True, 2, $hotel3);

//Instanciation des Réservations//
$reservation1 = new Reservation($chambre1, $client1, "25-03-2023", "30-03-2023");
$reservation2 = new Reservation($chambre36, $client2, "01-04-2023", "02-04-2023");
$reservation3 = new Reservation($chambre4, $client3, "22-03-2023", "08-04-2023");
$reservation4 = new Reservation($chambre32, $client4, "24-03-2023", "26-03-2023");
$reservation5 = new Reservation($chambre21, $client1, "01-04-2023", "08-04-2023");

//Affichage//

echo $hotel1->afficherReservation();
echo $hotel2->afficherReservation();
echo $hotel3->afficherReservation();
// echo $client1->resaCLient();
// echo $client2->resaCLient();
// echo $client3->resaCLient();
// echo $client4->resaCLient();

echo $hotel2->afficherChambres();
echo $hotel3->afficherChambres();
echo $hotel1->afficherChambres();


?>

</body>
</html>