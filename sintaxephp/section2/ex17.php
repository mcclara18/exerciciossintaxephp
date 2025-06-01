<?php
$temp = 10;
if ($temp < 0) {
    echo "Alerta de Gelo!";
} elseif ($temp>= 0 && $temp< 15) {
    echo "Clima Ameno";
} elseif ($temp >= 15 && $temp <= 25) {
    echo "Clima Agradável";
} else {
    echo "Atenção: Calor Extremo!";
}
