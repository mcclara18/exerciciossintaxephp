<?php
$producao = [];
$i = 0;

while (count($producao) < 5) {
    $i++;
    $producao[] = "$i";
    echo "produto $i<br>";
}
?>
