<?php
$entradas = [1, 2, 3, 0]; 
$index = 0;

do {
    $valor = $entradas[$index];
    echo "$valor<br>";
    $index++;
} while ($valor != 0);
