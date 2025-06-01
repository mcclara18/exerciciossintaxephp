<?php
$estadoCivil = "D";

switch ($estadoCivil) {
    case "C":
        echo "Casado(a)";
        break;
    case "S":
        echo "Solteiro(a)";
        break;
    case "D":
        echo "Divorciado(a)";
        break;
    case "O":
        echo "Outro";
        break;
    default:
        echo "Registro inválido";
}
?>
