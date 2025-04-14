<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$conexao = mysqli_connect("localhost", "root", "", "banco_alunos");
if (!$conexao) {
    die("Erro ao conectar com o banco de dados.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Se for confirmação de exclusão
    if (isset($_POST['confirmar']) && isset($_POST['id_aluno'])) {
        $id = intval($_POST['id_aluno']);

        $sqlDelete = "DELETE FROM alunos WHERE id = $id";
        if (mysqli_query($conexao, $sqlDelete)) {
            echo "<p>Registro excluído com sucesso.</p>";
        } else {
            echo "<p>Erro ao excluir o registro.</p>";
        }
        mysqli_close($conexao);
        exit;
    }

    // Se for pesquisa inicial
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $matricula = mysqli_real_escape_string($conexao, $_POST['matricula']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);

    $sql = "SELECT * FROM alunos WHERE nome = '$nome' AND matricula = '$matricula' AND email = '$email'";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $aluno = mysqli_fetch_assoc($resultado);

        echo "<h3>Aluno Encontrado:</h3>";
        echo "<ul>";
        echo "<li><strong>Nome:</strong> {$aluno['nome']}</li>";
        echo "<li><strong>Matrícula:</strong> {$aluno['matricula']}</li>";
        echo "<li><strong>Email:</strong> {$aluno['email']}</li>";
        echo "<li><strong>Curso:</strong> {$aluno['curso']}</li>";
        echo "<li><strong>Carga Horária:</strong> {$aluno['carga_horaria']}</li>";
        echo "</ul>";

        echo '<form method="post" action="excluir_aluno.php">';
        echo '<input type="hidden" name="id_aluno" value="' . $aluno['id'] . '">';
        echo '<input type="hidden" name="confirmar" value="1">';
        echo '<input type="submit" value="Confirmar Exclusão" onclick="return confirm(\'Tem certeza que deseja excluir este aluno?\')">';
        echo '</form>';
    } else {
        echo "<p>Aluno não encontrado com os dados fornecidos.</p>";
    }
}

mysqli_close($conexao);
?>
<div class="botoes">
    <a href="index.html" class="botao">🏠 Início</a>
    <button onclick="history.back()" class="botao">🔙 Voltar</button>
</div>
</body>
</html>