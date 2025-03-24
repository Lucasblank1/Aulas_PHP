<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
<?php
if (isset($_POST['nome']) && isset($_POST['cidade']) && isset($_POST['endereco'])){
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];

    echo "<h1>Dados Recebidos:</h1>";
    echo "<p><strong>Nome:</strong>$nome</p>";
    echo "<p><strong>Cidade:</strong>$cidade</p>";
    echo "<p><strong>Endereço:</strong>$endereco</p>";
    
} else {
    echo "<h1>Erro: Todos os campos são obrigatórios!</h1>";
}

$conexao = mysqli_connect("localhost", "root", "", "banco01");

if (!$conexao) {
    die("Erro de conexao com o Banco de Dados");
}
$sql = "INSERT INTO alunos (nome, cidade, endereco) VALUES ('$nome', '$cidade', '$endereco')";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

?>
</body>
</html>