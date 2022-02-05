<?php

// Primeira contagem
for ($contador = 1; $contador <= 15; $contador++) {
    echo "#$contador" . PHP_EOL;
}
echo PHP_EOL;

// Nao exibir o 13...
for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
        continue;
    }
    echo "#$contador" . PHP_EOL;
}
echo PHP_EOL;
