<?php
function calcularFatorial($n) {
    if ($n <=1){
        return 1; 
    }else{
        return $n * calcularFatorial ($n -1);
    }
}

$num = 5;
$resultado = calcularFatorial($num);
echo "O fatorial de $num é $resultado";

?>