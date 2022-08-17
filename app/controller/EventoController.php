<?php
session_start();// Iremos iniciar uma sessão no php
require_once("../classes/Evento.php");

$meuEvento = new Evento();

$_SESSION["mensagem"] = $meuEvento->inicio($_POST, $_FILES['banner']);
header("Location:../view/CadastroView.php");// Redirecionando o usuário para a página CadastroView.php
die();

/*
print_r($_POST);
echo"<hr>";
print_r($_FILES);
*/

