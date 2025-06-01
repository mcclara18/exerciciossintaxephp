<?php
for ($i = 1; $i <= 100; $i++) {
    echo "$i<br>";
    if ($i == 50) {
        echo "processamento interrompido.";
        break;
    }
}
?>
