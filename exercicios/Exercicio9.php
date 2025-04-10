<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 - Verificação de maioridade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 9 <p>-Verificação de maioridade</h2>

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];  
        $idade = $_POST['idade'];
        }
        if ($idade < 18){
            echo "Olá, $nome. Você é menor de idade pois tem $idade anos.";
        }else{
            echo "Olá, $nome. Você é maior de idade pois tem $idade anos";
        }
       
    ?>
<br><br>
<a href="index.html"><button>🏠 Início</button></a>
<button onclick="history.back()">🔙 Voltar</button>

</body>
</html>
