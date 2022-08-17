<?php
require("classeLogin/login.php");
require("apiLogin/login.php");

use classeLogin\Login;
use apiLogin\Login as apiLogin;// criando um apelido para o namespace

$meuLogin = new \classeLogin\Login();// 1ª forma de utilizar namespace
$meuLogin->verificaLogin();

$meuLogin2 = new Login();// 2ª forma de usar namespace

$meuLogin3 = new apiLogin();