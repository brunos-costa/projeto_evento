<?php 
require ("heranca2.php");

$p1 = new Pessoa("Lambigó", 20);
$p1->relatorio();
echo "<hr>";

$a1 = new Aluno("Enzo", 10, 123);
$a1->relatorio();