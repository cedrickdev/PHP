<?php
$notes = [1, 2, 3, 4, 5];
for ($i = 0; $i <= 4; ++$i) {
    echo "Notes : $notes[$i]\n ";
}

print_r($notes);

$classe = [
    [
        'nom' => 'cedrick',
        'prenom' => 'vanel',
        'notes' => [12, 13, 14]
    ],
    [
        'nom' => 'tchinda',
        'prenom' => 'feze',
        'notes' => [15, 20, 11]
    ],
];

echo $classe[0]['notes'][2];
