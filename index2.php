<?php
$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

krsort($notas);
var_dump($notas);
/*function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);*/

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres'
];

foreach ($array as $numeral => $nomeNumero) {
    echo "<br> $numeral em português é: $nomeNumero";
}

echo "<br> Total: " . count($array);

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



$umaLista[]='quatro';

foreach ($nomes as $nomec => $nome   ) {
    echo $nomec ." Seu nome completo é " . $nome['nome'];
    echo " Com a idade de ". $nome['idade']."<br>";
}

$numeros = [0,25,50,63,90,10,3];

$nomes['Wellington'] = [
        'nome'=> 'Wellington Silva',
        'idade'=> 40 
];