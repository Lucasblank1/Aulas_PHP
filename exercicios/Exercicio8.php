<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8 - Cálculo da média final de um aluno SGA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 8 <p>-Cálculo da média final de um aluno SGA</h2>

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nota1 = $_POST['nota1'];  
        $nota2 = $_POST['nota2']; 
        $nota3 = $_POST['nota3']; 
        }
        $media = (($nota1*2)+($nota2*2)+($nota3*1))/5;
        if ($media >=7){
            echo "A média do aluno foi $media<br><br>";
            echo "Aluno aprovado!";
        }else{
            echo "A média do aluno foi $media<br><br>";
            echo "Aluno reprovado!";
        }
     
    ?>
<br><br>
<a href="index.html"><button>🏠 Início</button></a>
<button onclick="history.back()">🔙 Voltar</button>

</body>
</html>
