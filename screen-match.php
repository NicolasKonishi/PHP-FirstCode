<?php
// echo "Bem-vindo(a) ao screen match\n";

$nomeFilme = "Top Gun - Maverick"; //string
$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Se beber não case";
// $anoLancamento = 2020; //int
$anoLancamento = $argv[1] ?? 2022; //argumento para entrada de dados //?? op de coalescência nula (caso não exita x -> op=y)
$somaDeNotas =  8 + 3 + 2 + 2 +12;
$notaFilme = $somaDeNotas/5; // float
$planoPrime = true; //boolean

$incluidoPrime = $planoPrime || $anoLancamento < 2019;

echo "nome do filme: ". $nomeFilme . "\n";
echo "nota do filme:  $notaFilme\n ";
echo "ano do filme:  $anoLancamento\n ";

// trabalhando com decisões
if ($anoLancamento > 2024) {
    echo("esse filme é novo!\n");
}else if ($anoLancamento >2020 && $anoLancamento <= 2024){
    echo"esse filme ainda é novo\n";
}else{
    echo "esse filme não é um lançamento\n";
}

//Código omitido

$genero = match ($nomeFilme){
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-heroi",
    "Se beber não case" => "comédia",
    default => "genero desconhecido",
};
echo $genero;