<?php
$total = 0;

for ($i = 1; $i <= 100; $i++) {
    $venda = rand(5000, 500000) /100;
    $total += $venda;
    echo "Dia $i: R$ " . number_format($venda, 2, ',', '.') . "<br>";
}
echo "<strong>Total do mês: R$ " . number_format($total, 2, ',', '.') . "</strong><br>";
?>
