<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 - Cadastro de Alunos e Carga Horária para Atividades Complementares</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 11 <p>-Cadastro de Alunos e Carga Horária para Atividades Complementares</h2>

    <?php
if (
    isset($_POST['nome']) && isset($_POST['matricula']) && isset($_POST['curso']) &&
    isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['endereco']) &&
    isset($_POST['cep']) && isset($_POST['cidade']) && isset($_POST['uf']) &&
    isset($_POST['curso_horas']) && isset($_POST['carga_horaria'])
) {
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $curso = $_POST['curso'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $curso_horas = $_POST['curso_horas'];
    $carga_horaria = $_POST['carga_horaria'];

    echo "<h1>Dados Recebidos:</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Matrícula:</strong> $matricula</p>";
    echo "<p><strong>Curso:</strong> $curso</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Telefone:</strong> $telefone</p>";
    echo "<p><strong>Endereço:</strong> $endereco</p>";
    echo "<p><strong>CEP:</strong> $cep</p>";
    echo "<p><strong>Cidade:</strong> $cidade</p>";
    echo "<p><strong>UF:</strong> $uf</p>";
    echo "<p><strong>Curso para Horas Complementares:</strong> $curso_horas</p>";
    echo "<p><strong>Carga Horária:</strong> $carga_horaria</p>";

    $conexao = mysqli_connect("localhost", "root", "", "banco_alunos");

    if (!$conexao) {
        die("Erro de conexão com o banco de dados: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO alunos (nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, curso_horas, carga_horaria)
            VALUES ('$nome', '$matricula', '$curso', '$email', '$telefone', '$endereco', '$cep', '$cidade', '$uf', '$curso_horas', '$carga_horaria')";

    if (mysqli_query($conexao, $sql)) {
        echo "<h3>Aluno cadastrado com sucesso!</h3>";
    } else {
        echo "<h3>Erro ao cadastrar aluno: " . mysqli_error($conexao) . "</h3>";
    }

    mysqli_close($conexao);
} else {
    echo "<h1>Erro: Todos os campos são obrigatórios!</h1>";
}
?>
<div class="botoes">
    <a href="index.html" class="botao">🏠 Início</a>
    <button onclick="history.back()" class="botao">🔙 Voltar</button>
</div>

</body>
</html>
