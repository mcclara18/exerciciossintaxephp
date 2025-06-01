<?php
function media($notas) {
    $soma = array_sum($notas);
    return $soma / count($notas);
}
$media = media([7.5, 8.0, 9.0]);
echo "Média: $media<br>";
