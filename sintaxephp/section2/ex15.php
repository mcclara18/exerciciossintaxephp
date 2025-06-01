<?php
$bebida = "café";
switch ($bebida) {
    case "café":
    case "chá":
    case "suco":
        echo "sua escolha foi $bebida";
        break;
    default:
        echo "esta bebida não disponível";
}