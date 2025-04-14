<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Calculadora com switch</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 4 <p>-Calculadora com switch</h2>

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero1 = $_POST['numero1'];  
        $numero2 = $_POST['numero2']; 
        $operacao = $_POST['operacao'];
        $resultado = 0;
        }
        switch ($operacao){
            case "soma";
            $resultado = $numero1 + $numero2;
            echo "A soma dos números é: $resultado";
            break;

            case "subtracao";
            $resultado = $numero1 - $numero2;
            echo "A subtraçao dos números é: $resultado";
            break;

            case "multi";
            $resultado = $numero1 * $numero2;
            echo "A multiplicação dos números é: $resultado";
            break;

            case "divisao";
            if ($numero2 == 0){
                echo "Impossível dividir por 0!";
            }else{
            $resultado = $numero1 / $numero2;
            echo "A divisão dos números é: $resultado";
            break;
            }
            }
    ?>
<br><br>
<a href="index.html"><button>🏠 Início</button></a>
<button onclick="history.back()"> 🔙 Voltar</button>

</body>
</html>
