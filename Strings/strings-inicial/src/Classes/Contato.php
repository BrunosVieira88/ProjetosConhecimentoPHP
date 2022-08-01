<?php


namespace App\Classes;

class Contato{


    private $email; 
    private $endereco;
    private $cep;

    public function __construct(string $email , string $endereco , string $cep)
    {
        $this->validaEmail($email) ? $this->email = $email :$this->email =" E-mail invalido!";
        $this->endereco = $endereco;
        $this->cep = $cep;
        
    }

    public function getUsuario(){
        $posicaoArroba = strpos($this->email,"@");
        return substr($this->email,0,$posicaoArroba);
    }
    public function getEndereco(){
        return implode(" ",[$this->endereco,$this->cep]);
   }
   
    public function getEmail(){
        return $this->email;
    }

    public function validaEmail(string $email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}