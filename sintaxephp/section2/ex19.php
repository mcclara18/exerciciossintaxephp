<?php
$cargo = "Designer";
switch ($cargo) {
    case "Desenvolvedor":
        $salario = 10000;
    case "Designer":
        $salario =2000;
    case "Gerente":
        $salario = 8000;
    default:
        $salario = 2500; 
}
echo "Salário para $cargo: R$ $salario";