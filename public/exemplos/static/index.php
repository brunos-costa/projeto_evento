<?php 
require ("funcionario.php");

//$f1 = new Funcionario();

//$f1->relatorio("Zé Gotinha", 200);

Funcionario::relatorio("Fulano",1000);
Funcionario::setSalario(3000);
echo "<br>".Funcionario::getSalario();