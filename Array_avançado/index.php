<?php
    $notas = [
        'bruno'=> 10 , 
        'isa'=> 9,
        'aline'=>7

    ];

    $notas2 = [
        'aline'=>7,
        'bruno'=> 10 
    ];

    $alunos = [
        'bruno', 
        'isa',
        'aline'

    ];

    $alunos2 = [
        'aline',
        'bruno' 
    ];




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
    <?php var_dump(array_diff_assoc($notas,$notas2)) ;?><br>
    <?php var_dump(array_keys($notas)) ;?><br>
    <?php var_dump(array_values($notas)) ;?><br>
    <?php var_dump(array_merge($alunos,$alunos2)) ;?><br>
    <?php /*var_dump([...$alunos,'aluno inserido via descompactando',...$alunos2]) ;*/?>
   
    <?php 
    
     /*remover um elemento do inicio */ 
     var_dump($alunos);
     array_shift($alunos);
     echo "Removi um elemento do inicio <br>";
     foreach($alunos as $aluno){
         echo $aluno."<br>";
     }?><br>
    <?php 
     /*remover um elemento do final */
    array_pop($alunos);
    echo "Removi um elemento do final <br>";
     foreach($alunos as $aluno){
         echo $aluno."<br>";
     }
   
    array_push($alunos,'Thais','Thayna','Leticia');
    array_unshift($alunos,'Marina','Sara');
    $alunos[]= 'luiz';
     var_dump($alunos);?><br>

   <a href="novo.php">novo</a>  
    
</body>
</html>