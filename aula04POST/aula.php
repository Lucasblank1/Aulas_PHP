<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de cadastro</title>
</head>
<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    if (empty($nome) || empty ($email)){
        header("Location:falha.php");
        exit;
    }else {
        header("Location:sucesso.php");
        exit;
    }
} else {
    header("Location:agradecimento.php");
    exit;
}   
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $curso = $_POST['curso'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $cursoHC = $_POST['cursoHC'];
    $cargahoraria = $_POST['cargahoraria'];


    echo "<h1>Dados Recebidos:</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Endereço:</strong> $endereco</p>";
    echo "<p><strong>Cidade:</strong> $cidade</p>";

    ?>
</body>
</html>