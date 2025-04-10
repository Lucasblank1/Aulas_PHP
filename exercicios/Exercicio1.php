<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Verificação de Número Positivo, Negativo ou Zero</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 1 <p>- Verificação de Número Positivo, Negativo ou Zero</h2>

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero = $_POST['numero'];  
        if ($numero > 0){
            echo "Número positivo";
        }elseif ($numero <0){
            echo "Número negativo";
        }else{
            echo "Número Zero";
        }  
        }
        $numero = $_POST['numero'];
        
        echo "<h1>Dados Recebidos:</h1>";
        echo "<p><strong>Número: </strong>$numero</p>";
    
    ?>
<br><br>
<a href="index.html"><button>🏠 Início</button></a>

<button onclick="history.back()">
    🔙 Voltar
</button>

</body>
</html>
