<?php
// Calcular IMC
$peso = 80;
$altura = 1.75;
$imc = $peso / $altura ** 2;
echo "Valor do IMC " . number_format((float)$imc, 2, '.', '') . PHP_EOL;
echo "Você está com o IMC ";
if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}
echo " do recomendado!" . PHP_EOL;
