<?php 

namespace App\Classes;

use function PHPSTORM_META\type;

class Usuario {

    private $nome; 
    private $sobrenome;

    public function __construct(string $nome, string $sobrenome, string $senha){

        $umvalor = explode(" ",$nome);

        $this->nome = $umvalor;
       
        $sobrenome = count($umvalor);

        
        $this->sobrenome = $sobrenome; 

        $this->validaSenha(trim($senha))? $this->senha = $senha: $this->senha= "Senha tem que ser maior que 4 digitos" ;
        
    }
   
    public function getNome(){
       
        return $this->nome;
    }

    public function getTamanho(){
        
        
        return $this->sobrenome;
    }

    public function getSenha(){
        
        
        return $this->senha;
    }

    public function ValidaSenha($senha){

       return strlen($senha)<= 4 ? false : true; 

        
    }




}



?>