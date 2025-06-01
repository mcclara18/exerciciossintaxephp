<?php
function total($preco, $quantidade) {
    return $preco * $quantidade;
}
$custo = total(9.5, 10);
echo "custo total: R$ $custo<br>";