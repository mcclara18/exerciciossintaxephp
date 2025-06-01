<?php
$cor = "Roxo";

switch ($cor) {
    case "Vermelho":
    case "Azul":
    case "Verde":
        echo "Cor escolhida: $cor<br>";
    default:
        echo "Cor não disponível, sugerimos a cor azul";
}

