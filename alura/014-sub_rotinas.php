<?php

$teste = 12;
if ($teste == 12){
    funcaoSemRetornoDeValor();
    $calculadora = funcaoComRetornoDeValor(5.2,5.8);
    echo "Funcao que soma dois valores (5.2 + 5.8) = $calculadora." . PHP_EOL;
}

function funcaoSemRetornoDeValor(): void{
    echo "Chamou a funcao sem parametros." . PHP_EOL;
}

function funcaoComRetornoDeValor($valor1, $valor2):float{
    return $valor1 +$valor2;
}
