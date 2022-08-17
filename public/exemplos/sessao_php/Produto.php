<?php
session_start();

$nomeProduto = "Chinelo";
$preco = 99.99;
$quantidade = 2;

echo "{$_SESSION['nomeCliente']} decidiu comprar o produto {$nomeProduto} e custou R$ {$preco}, vai levar {$quantidade} unidades pagando com {$_SESSION['preferenciasCliente']['pagamento']}";

// CRIANDO VARIÁVEIS DE SESSÃO
$_SESSION['nomeProduto'] = $nomeProduto;
