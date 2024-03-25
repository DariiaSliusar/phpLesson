<?php
//Simple Array
$numbers = [1,44,55,22];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers);
// echo $fruits[0];

//Associative Array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];
// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];
// echo $hex['blue'];

$person = [
    'first_name' => 'Dariia',
    'last_name' => 'Sliusar',
    'email' => 'darriasliusar@icloud.com'
];

// echo $person['first_name'];

$people = [
    [
        'first_name' => 'Dariia',
        'last_name' => 'Sliusar',
        'email' => 'darriasliusar@icloud.com'
    ],
    [
        'first_name' => 'Mikhailo',
        'last_name' => 'Hahoshkin',
        'email' => 'hahoshkin@icloud.com'
    ],
    [
        'first_name' => 'Iryna',
        'last_name' => 'Sliusar',
        'email' => 'sliusar@icloud.com'
    ]
    ];

    // echo $people[1]['email'];
    var_dump(json_encode($people));

