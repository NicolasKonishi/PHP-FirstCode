<?php

require __DIR__ . "/src/funcoes.php"; //trás as funções que estão em outro arquivo para esse

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anolancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime , $anolancamento) ;

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anolancamento\n";

exibeMensagemLancamento($anolancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = criaFilme(
    nome: "Thor: Ragnarok", 
    anolancamento: 2021, 
    nota: 7.8,
    genero: "super-herói" );


echo $filme["ano"];

// manipulações de arrays = 
// var_dump($notas);
// sort($notas);
// var_dump($notas);
// echo min($notas); 

// var_dump($filme ['nome']);
$posicaoDoisPontos = strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos); //position de um caracter dentro de uma string

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));


var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}'));

$filmeComoStringJson = json_encode($filme);

file_put_contents(__DIR__. '/filme.json', $filmeComoStringJson); 

