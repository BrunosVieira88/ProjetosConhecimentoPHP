<?php 

$dados = require("dados.php");
function qualquer($funcao){

    echo "ola mundo!"; 
    echo $funcao();
}

$umafuncao = function (){
    return "<p>uma outra função</p>";
}

/*Closure é uma função anonima!*/ 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $nome = "Bruno Santos Vieira"; ?>


    <h1> Aqui tem um <?= $nome ?> </h1>

    <p>nao precisa repetir <?= $nome ?></p>
    <p><?php  qualquer($umafuncao)?> </p>

    <h3>Numero de paises</h3>
    <p><?php 
        $contador =0;

        $contador = count($dados);
      
    
        echo $contador;

        foreach($dados as $dado){

            echo $dado['pais'];

        }
    
    ?></p>
 

</body>
</html>