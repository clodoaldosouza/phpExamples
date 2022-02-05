<?php
$idade = 21;
$idadeDaqui10Anos = $idade + 10;
$idadeHa5Anos = $idade - 5;

$soma = 2 + 2;
$subtracao = 2 - 2;
$multiplicacao = 2 * 2;
$divisao = 2 / 2;

echo "2 + 2 = " . $soma . PHP_EOL;
echo "2 - 2 = " . $subtracao . PHP_EOL;
echo "2 * 2 = " . $multiplicacao . PHP_EOL;
echo "2 / 2 = " . $divisao . PHP_EOL;

$doisAoCubo = 2 ** 3;
echo "2 ao cubo = 2 ** 3 = " . $doisAoCubo . PHP_EOL;
$doisAoCubo = 2 * 2 * 2;
echo "2 ao cubo = 2 * 2 * 2 = " . $doisAoCubo . PHP_EOL;

$restoDaDivisao = 10 % 3;
echo "Resto da divisao de 10/3 = " . $restoDaDivisao . PHP_EOL;

echo "Idade atual subtraida 5 anos = " . $idadeHa5Anos . PHP_EOL;
echo "Idade atual somada 10 anos = " . $idadeDaqui10Anos . PHP_EOL;
