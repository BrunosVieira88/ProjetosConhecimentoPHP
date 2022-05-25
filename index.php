<?php

echo phpinfo();

$nomes = [
    'bruno' => [
        'nome'=> 'Bruno Santos Vieira',
        'idade'=> 33 
    ],
    'victor' => [
        'nome'=> 'victor',
        'idade'=> 22
    ],
    'khalil' => [
        'nome'=> 'khalil',
        'idade'=> 19 
    ]

];

$umaLista = ['um','dois','tres'];
for ($i=0; $i < count($umaLista); $i++) { 
   echo $umaLista[$i].PHP_EOL;
}

$umaLista[]='quatro';

foreach ($nomes as $nomec => $nome   ) {
    echo $nomec ." Seu nome completo é " . $nome['nome'];
    echo " Com a idade de ". $nome['idade'].PHP_EOL;
}

$nomes['Wellington'] = [
        'nome'=> 'Wellington Silva',
        'idade'=> 40 
];