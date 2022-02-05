<?php
require_once 'Conta.php';

$primeiraConta = new Conta(
    '222.333.444-55',
    'Fulano de Oliveira',
    500
);

$segundaConta = new Conta(
    '333.333.333-33',
    'Beltrano Gomes de Sa',
    2580.10
);

$terceiraConta = new Conta(
    '444.555.666-77',
    'Ciclano Mendes',
    3350
);

echo $primeiraConta->toString();
echo $segundaConta->toString();
echo $terceiraConta->toString();
