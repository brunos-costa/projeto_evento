<?php
session_start();

$nome = "José";
$idade = 25;
$preferencias = [
    "tipo" => "Calçados",
    "preco" => "Mais Baratos",
    "pagamento" => "Cartão de Crédito"
];

// CRIANDO VARIÁVEIS DE SESSÃO
$_SESSION["nomeCliente"] = $nome;
$_SESSION["idadeCliente"] = $idade;
$_SESSION["preferenciasCliente"] = $preferencias;

echo "{$nome} tem {$idade} anos e gosta de pagar {$_SESSION['nomeProduto']} com a forma de pagamento {$preferencias['pagamento']}";