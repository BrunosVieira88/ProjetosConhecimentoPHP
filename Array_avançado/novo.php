<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 
        $dados = ['Bruno',10, 33];
        $nomes =  [
            'Thayna'=> "Thayna Barrall", 
            'idade'=> 30
        ];
        ['Thayna' => $nomeT , 'idade' => $idade ] = $nomes; 

        foreach($nomes as $nome){
            echo $nome."<br>"; 
        }

        list($nome,$nota,$idade)= $dados;

        foreach($dados as $dado){
            echo $dado."<br>";
        }
        ?>

        fazer o index indexado virar uma variavel 
        <?php 
        extract($nomes);
        echo "<br>in extract <br>";
        var_dump($nome,$nota,$idade);
        echo "in echo ".$idade."<br>";
        
        var_dump(compact($nome,$nota,$idade));
        ?>
</body>
</html>