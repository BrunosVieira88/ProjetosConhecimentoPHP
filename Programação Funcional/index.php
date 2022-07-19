<?php 

$dados = require("dados.php");
function qualquer($funcao){

    echo "ola mundo!"; 
    echo $funcao();
}

function Umpaiz($pais):bool
{

    return strpos($pais['pais'], "z") == false; 

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

    <h1>Numero de medalhas</h1>
    
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

            $dado['pais'] =  mb_convert_case($dado['pais'],MB_CASE_UPPER);

            echo " ".$dado['pais']."<br>";
           
        }
        $klr= array_filter($dados , 'Umpaiz');
       var_dump($klr);

       echo "<br>".json_encode($klr)."<br>";

    ?></p>
 

</body>
</html>