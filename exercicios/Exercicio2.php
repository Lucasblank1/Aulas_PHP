<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Exibição da tabuada de um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 2 <p>- Exibição da tabuada de um número</h2>

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero = $_POST['numero'];  
        }
        $numero = $_POST['numero'];
        
        echo "<h1>Numero recebido:</h1>";
        echo "<p><strong>$numero x 1: " . $numero * 1 ."</strong></p>";
        echo "<p><strong>$numero x 2: " . $numero * 2 ."</strong></p>";
        echo "<p><strong>$numero x 3: " . $numero * 3 ."</strong></p>";
        echo "<p><strong>$numero x 4: " . $numero * 4 ."</strong></p>";
        echo "<p><strong>$numero x 5: " . $numero * 5 ."</strong></p>";
        echo "<p><strong>$numero x 6: " . $numero * 6 ."</strong></p>";
        echo "<p><strong>$numero x 7: " . $numero * 7 ."</strong></p>";
        echo "<p><strong>$numero x 8: " . $numero * 8 ."</strong></p>";
        echo "<p><strong>$numero x 9: " . $numero * 9 ."</strong></p>";
        echo "<p><strong>$numero x 10: " . $numero * 10 ."</strong></p>";

    
    ?>
</body>
</html>
