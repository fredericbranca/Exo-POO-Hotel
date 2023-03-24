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
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

//Instanciation des Hotels//
$hotel1 = new Hotel("Hôtel **** Strasbourg", "10 route de la Gare 67000 STRASBOURG");
$hotel2 = new Hotel("Hôtel Hilton **** Strasbourg", "1 Avenue Herrenschmidt 67000 STRASBOURG");
$hotel3 = new Hotel("Hôtel Regent **** Paris", "61 rue Dauphine 75006 PARIS");

//Instanciation des Chambres//
$chambre1 = new Chambre(1, 120, False, $hotel1);
$chambre2 = new Chambre(2, 120, False, $hotel1);
$chambre3 = new Chambre(3, 120, False, $hotel1);
$chambre4 = new Chambre(4, 120, False, $hotel1);
$chambre5 = new Chambre(5, 120, False, $hotel1);
$chambre6 = new Chambre(6, 120, False, $hotel1);
$chambre7 = new Chambre(7, 120, False, $hotel1);
$chambre8 = new Chambre(8, 120, False, $hotel1);
$chambre9 = new Chambre(9, 120, False, $hotel1);
$chambre10 = new Chambre(10, 120, False, $hotel1);
$chambre11 = new Chambre(11, 120, False, $hotel1);
$chambre12 = new Chambre(12, 120, False, $hotel1);
$chambre13 = new Chambre(13, 120, False, $hotel1);
$chambre14 = new Chambre(14, 120, False, $hotel1);
$chambre15 = new Chambre(15, 120, False, $hotel1);
$chambre16 = new Chambre(16, 300, True, $hotel1);
$chambre17 = new Chambre(17, 300, True, $hotel1);
$chambre18 = new Chambre(18, 300, True, $hotel1);
$chambre19 = new Chambre(19, 300, True, $hotel1);
$chambre20 = new Chambre(20, 300, True, $hotel1);
$chambre21 = new Chambre(21, 300, True, $hotel1);
$chambre22 = new Chambre(22, 300, True, $hotel1);
$chambre23 = new Chambre(23, 300, True, $hotel1);
$chambre24 = new Chambre(24, 300, True, $hotel1);
$chambre25 = new Chambre(25, 300, True, $hotel1);
$chambre26 = new Chambre(26, 300, True, $hotel1);
$chambre27 = new Chambre(27, 300, True, $hotel1);
$chambre28 = new Chambre(28, 300, True, $hotel1);
$chambre29 = new Chambre(29, 300, True, $hotel1);
$chambre30 = new Chambre(30, 300, True, $hotel1);
$chambre31 = new Chambre(1, 150, False, $hotel2);
$chambre32 = new Chambre(2, 150, False, $hotel2);
$chambre33 = new Chambre(3, 190, True, $hotel2);
$chambre34 = new Chambre(4, 190, True, $hotel2);
$chambre35 = new Chambre(1, 180, False, $hotel3);
$chambre36 = new Chambre(2, 180, False, $hotel3);
$chambre37 = new Chambre(3, 200, True, $hotel3);
$chambre38 = new Chambre(4, 200, True, $hotel3);


echo $hotel2->afficherChambres();
echo $hotel1->afficherChambres();
?>

</body>
</html>