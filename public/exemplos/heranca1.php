<?php
class Veiculo{
    private $marca;
    private $modelo;
    private $ligado = false;// pra informar se o veículo está ligado
    protected $nomeClasse;// Somente as classes filhas poderão acessar esse atributo diretamente

    public function __construct($marca,$modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->nomeClasse  = get_class($this);// Pegando o nome da classe 
    }
    public function ligar(){
        $this->ligado = true;
        echo "O {$this->nomeClasse} modelo {$this->modelo} e marca {$this->marca} está ligado";
    }
    public function desligar(){
        $this->ligado = false;
        echo "O {$this->nomeClasse} modelo {$this->modelo} e marca {$this->marca} está desligado";
    }
    public function estaLigado(){
        echo ($this->ligado) ? "Está ligado" : "Está desligado";
        /*
        if($this->ligado){
            echo "Está ligado";
        }
        else{
            echo "Está desligado";
        }
        */
    }
}

// A classe carro está herdando todas as informações da classe Veículo
class Carro extends Veiculo{
    public function ligarParaBrisa(){
        echo "{$this->nomeClasse} ligou o para-brisa <br>";
    }
}

class Moto extends Veiculo{

    public function ativarAntena(){
        echo "{$this->nomeClasse} ativou a antena corta pipa";
    }
}