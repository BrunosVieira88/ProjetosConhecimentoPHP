<?php 
    require('index2.php');
    $umaLista = ['um','dois','tres'];
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
    <h1><?php echo $nomes['bruno']['nome'] ?></h1>


   
<?php for ($i=0; $i < count($umaLista); $i++) { ?>
   <p><?php echo $umaLista[$i]; ?></p>
<?php } ?>

<span>---------------------------------------------------------------------</span><br>
desordenado
<?php foreach ($numeros as $numero ){ ?>
    
    <?php echo $numero; ?>
<?php } 
$numerosOrdenados = $numeros;
?>
<br>
ordenado
<?php 
 
sort($numerosOrdenados);
foreach ($numerosOrdenados as $numero ){ ?>
   
    <?php echo $numero; ?>
<?php } ?>
</body>
</html>