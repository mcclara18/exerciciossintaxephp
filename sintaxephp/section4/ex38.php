<?php
function preco($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}
echo "Preço: " . preco(1234.56) ;
