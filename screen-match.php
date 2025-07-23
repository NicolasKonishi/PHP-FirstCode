<?php
// echo "Bem-vindo(a) ao screen match\n";

$nomeFilme = "Top Gun"; //string
// $anoLancamento = 2020; //int
$anoLancamento = $argv[1] ?? 2022; //argumento para entrada de dados //?? op de coalescência nula (caso não exita x -> op=y)
$somaDeNotas =  8 + 3 + 2 + 2 +12;
$notaFilme = $somaDeNotas/5; // float
$planoPrime = true; //boolean

$incluidoPrime = $planoPrime || $anoLancamento < 2019;

echo "nome do filme: ". $nomeFilme . "\n";
echo "nota do filme:  $notaFilme\n ";
echo "ano do filme:  $anoLancamento\n ";
