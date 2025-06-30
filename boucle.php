<?php
/* 
Demande a l'utilisateur de rentrer une note ou de taper "fin"
chaque note est sauvegardée dans un tableau $notes (pensez notes[])
à la fin on affiche le tableau de note sous forme de liste
*/

$notes = [];

while(true){
    echo "Enter a note : ";
    $note = readline();
    if($note === "fin"){
        break;
    }else{
        $notes[] = (int)$note;
    }
}

 foreach ($notes as $res){
    echo "- $res \n";
 }
