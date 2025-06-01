<?php
function preco($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}
