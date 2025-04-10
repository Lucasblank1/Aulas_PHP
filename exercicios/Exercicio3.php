<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Cálculo do fatorial de um número - RECURSIVO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 3 <p>-Cálculo do fatorial de um número - RECURSIVO</h2>

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero = $_POST['numero'];  
        }
        if ($numero <= 0){
            echo "Número inválido!";
        }else{
            $fatorial = 1;
            $i = $numero;
            while ($i > 0){
                if ($i > 1) {
                    echo "$i x ";
                } else {
                    echo "$i: $fatorial ";
                }
                $fatorial *= $i;
                $i--;
            }
           
        }
        $numero = $_POST['numero'];
        
    
    ?>
<br><br>
<a href="index.html"><button>🏠 Início</button></a>
<button onclick="history.back()">🔙 Voltar</button>

</body>
</html>
