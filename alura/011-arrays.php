<?php
//
$idadeList = [21, 23, 19, 25, 30, 41, 18];
for ($i = 0; $i < (sizeof($idadeList)); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}
echo PHP_EOL;
// Conta a list
for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}