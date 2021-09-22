<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
 Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
 Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php

$class = [

    [
        'name' => 'Carlo',
        'last_name' => 'Durand',
        'grades' => [7,6,5]
    ],
    [
        'name' => 'Gigi',
        'last_name' => 'Rossi',
        'grades' => [9,3,6]
    ],
    [
        'name' => 'Luca',
        'last_name' => 'Neri',
        'grades' => [5,4,3]
    ],
    [
        'name' => 'Mario',
        'last_name' => 'Super',
        'grades' => [9,5,10]
    ]

    ];

for($x = 0; $x < count($class); $x++ ) {

    $average = array_sum($class[$x]['grades']) / count($class[$x]['grades']);  // grades average

    echo "Name: {$class[$x]['name']} <br> LastName: {$class[$x]['last_name']} <br> Grades Average: {$average} <br> <hr> ";
};