<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Impressão de valores em ordem crescente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 5 <p>-Impressão de valores em ordem crescente</h2>

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero1 = $_POST['numero1'];  
        $numero2 = $_POST['numero2']; 
        }
        if ($numero1 > $numero2){
            echo "$numero1<br>$numero2";
        }else{
            echo "$numero2<br>$numero1";
        }
    ?>
<br><br>
<a href="index.html"><button>🏠 Início</button></a>
<button onclick="history.back()">🔙 Voltar</button>

</body>
</html>
