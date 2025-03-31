<?php
function calcularSoma($numero1, $numero2) {
    $soma = $numero1 + $numero2;
    return $soma;
}

$valor1 = 10;
$valor2 = 5;

$resultado = calcularSoma($valor1, $valor2);

echo "A soma é: " . $resultado; 
echo "A soma é: " . $soma; //Isso causaria um erro, $soma não é acessível aqui.

?>