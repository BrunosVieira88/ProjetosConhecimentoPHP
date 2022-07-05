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
</body>
</html>