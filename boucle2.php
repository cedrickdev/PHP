<?php
/*
On veut demander à l'utilisateur de rentrer les horaires d'ouverture d'un magasin
On demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert
*/

// On demande à l'utilisateur de rentrer un creneaux
// On demande l'heure de début
// On demande l'heure de fin
// On vérifie que l'heure de début ‹ l'heure de fin
// On demande si on veut rajouter un nouveau creneaux (o/n)
// On demande à l'utilisateur de rentrer une heure
// On affiche l'état d'ouverture du magasin

$timeslot = [];
while (true) {
    $begin = (int) readline("Enter the first timeslot : ");
    $end = (int) readline("Enter the last timeslot : ");
    if ($begin >= $end) {
        echo "Sorry the opening time cannot be higher than closing time \n";
    } else {
        $timeslot[] = [$begin, $end];
        $action = readline("Do you want to enter new timeslot ? [y/n] : ");
        if ($action == 'n') {
            break;
        }
    }
}


echo "The store is open from ";
 foreach ($timeslot as $key => $slot) {
    if ($key > 0) {
        echo " and from";
    }

    echo " {$slot[0]} to {$slot[1]}";

 }

 echo "\n";

/* $time = (int) readline("At which time will you want to visit the store ? : ");
$timeslotFound = false;

foreach ($timeslot as $slot) {
    if ($slot >= $timeslot[0] && $slot <= $timeslot[1]) {
        $timeslotFound = true;
        break;
    }
}

if ($timeslotFound) {
    echo "The store is open \n";
} else {
    echo "Sorry, the store is closed a that time \n";
}

print_r($timeslot); */


