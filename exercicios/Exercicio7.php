<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 - Comparação de valores A e B</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 7 <p>- Comparação de valores A e B</h2>

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero1 = $_POST['numero1'];  
        $numero2 = $_POST['numero2']; 
        }
        if ($numero1 > $numero2){
            echo "1º número maior que o 2º!";
        }else{
            echo "1º número menor que o 2º!";
        }
    ?>
<br><br>
<a href="index.html"><button>🏠 Início</button></a>
<button onclick="history.back()">🔙 Voltar</button>

</body>
</html>
