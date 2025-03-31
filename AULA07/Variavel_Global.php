<?php
$variavelGlobal = 100;

function exibirVariavelGlobal(){
    global $variavelGlobal;
    echo "Variável Global: " . $variavelGlobal;
}

exibirVariavelGlobal();
?>