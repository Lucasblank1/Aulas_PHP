<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Verificação de número par ou ímpar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 5 <p>-Verificação de número par ou ímpar</h2>

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero = $_POST['numero'];  
        }
      if ($numero % 2 == 0){
        echo "Número é par!";
      }else{
        echo "Número é ímpar!";
      }
    ?>
<br><br>
<a href="index.html"><button>🏠 Início</button></a>
<button onclick="history.back()">🔙 Voltar</button>

</body>
</html>
