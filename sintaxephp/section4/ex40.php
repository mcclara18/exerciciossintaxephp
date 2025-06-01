<?php
function evento($mensagem) {
    $timestamp = date("Y-m-d H:i:s");
    echo "[$timestamp] $mensagem";
}
evento("Login efetuado");

?>