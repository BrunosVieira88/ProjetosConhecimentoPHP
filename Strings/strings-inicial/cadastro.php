<?php 
require 'autoload.php';

$contato = new App\Classes\Contato($_POST['email'],$_POST['endereco'],$_POST['cep'],$_POST['telefone']); 
$nome = new App\Classes\Usuario($_POST['nome'],'' ,$_POST['senha']); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Curso Strings</title>
</head>

<body>

<div class="mx-5 my-5">
<h1>Cadastro feito com sucesso.</h1>
<p>Seguem os dados de sua conta:</p>
<ul class="list-group">
    <li class="list-group-item nome" >Primeiro nome: <span id="nome"><?php echo $nome->getNome()[0];?></span> </li>
    <li class="list-group-item">Sobrenome: <span id="sobrenome"><?php   
    for ($i=1; $i < $nome->getTamanho() ; $i++) { 
        echo $nome->getNome()[$i]." ";
    }
    ?></span></li>
    <li class="list-group-item">Usuário: <span><?php echo $contato->getUsuario(); ?></span> </li>
    <li class="list-group-item">Senha:<?php echo $nome->getSenha();?> </li>
    <li class="list-group-item">Telefone: <span><?php echo $contato->getTelefone();?></span> </li>
    <li class="list-group-item">Email: <span><?php echo $contato->getEmail();?></span> </li>
    <li class="list-group-item">Endereço: <?php echo $contato->getEndereco();?></span</li>
</ul>
</div>
<button onclick="volta()" class="btn btn-primary">Voltar</button>
</body>
</html>
<script>

    let nome = document.getElementById('nome').textContent;
    let div = document.getElementById('nome');
    if (nome == "") {
        texto = "Digite um nome!";
        div.innerText = texto;
    }

    let sobrenome = document.getElementById('nome').textContent;
    let div2 = document.getElementById('sobrenome');
    if (nome == "") {
        texto = "Digite um sobrenome!";
        div2.innerText = texto;
    }

    function volta(){
        window.location.href = "form_cadastrar.php";
    }
   
/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('telefone').onkeyup = function(){
		mascara( this, mtel );
	}
}
</script>
