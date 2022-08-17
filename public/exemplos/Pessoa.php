<?php
class Pessoa{
    private $nome;
    private $idade;
    private $peso;

    // O método construtor irá inicializar os atributos com valors dinâmicos 
    function __construct($nome, $idade, $peso){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
    }
    
    function falar($texto){
        echo $texto;
    }
    function __get($atributo){
        return $this->$atributo;
    }
    function __set($atributo, $valor){
        if($atributo == "nome"){
            $this->$atributo = strtoupper($valor);
        }
        else{
            $this->$atributo = $valor;
        }
        
    }
    /*
    function getNome(){
        return strtoupper($this->nome);// Retorna o nome maiúsculo
    
    }
    function setNome($valor){
        $this->nome = $valor;
    }
*/
}

$pessoa1 = new Pessoa("Bruno", 18, 70);
//$pessoa1->setNome("Juliana");
$pessoa1->nome = "jose";
$pessoa1->idade = 23;
echo "{$pessoa1->nome} tem {$pessoa1->idade} e pesa {$pessoa1->peso}";
/*
$pessoa1->falar("Fazendo aquele curso maroto");// acessando o método falar da classe
echo "<br>";
$pessoa1->nome = "Neymar";

echo "Meu nome é {$pessoa1->nome} minha idade é {$pessoa1->idade} <hr>";

$pessoa2 = new Pessoa("Maria", 23, 65.5);

echo "Olá me chamo {$pessoa2->nome} e meu peso é {$pessoa2->peso}";
*/



$pessoa1->salario = 3000;
echo "<br> seu salário é {$pessoa1->salario}";