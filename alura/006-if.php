<?php

// primeira opcao if...
$idade = 19;
if ($idade > 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}
echo PHP_EOL;

// outra opcao
$idade = 21;
echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;
if ($idade > 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}
echo PHP_EOL;

// outra opcao
$idade = 18;
echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;
if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}
echo PHP_EOL;
// outra opcao
$idade = 17;
$numeroDePessoas = 3;
if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}
echo PHP_EOL;
