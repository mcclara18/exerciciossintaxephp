<?php
function par($numero) {
    return $numero % 2 == 0;
}
$codigo = 7;
echo "código $codigo é " . (par($codigo) ? "par" : "ímpar");

