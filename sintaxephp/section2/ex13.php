<?php
$nota1 = 9.0;
$nota2 = 7.0;
$media = ($nota1 + $nota2) / 2;

if ($media >= 7) {
    echo "Aprovado<br>";
} elseif ($media >= 5 && $media < 7) {
    echo "Recuperação<br>";
} else {
    echo "Reprovado<br>";
}