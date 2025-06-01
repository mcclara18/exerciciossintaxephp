<?php
function logica($idade) {
    return $idade >= 18 ? "Acesso Liberado" : "Acesso Negado";
}
echo logica(17) ;