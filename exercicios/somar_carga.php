<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somar Carga</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if (isset($_POST['matricula']) && isset($_POST['nova_carga']) && isset($_POST['curso_horas'])) {
    $matricula = $_POST['matricula'];
    $nova_carga = intval($_POST['nova_carga']);
    $curso_horas = trim($_POST['curso_horas']); // remove espaços extras

    $conexao = mysqli_connect("localhost", "root", "", "banco_alunos");
    if (!$conexao) {
        die("Erro de conexão com o Banco de Dados.");
    }

    // Busca a carga horária atual e os cursos já cadastrados
    $sqlBusca = "SELECT carga_horaria, curso_horas FROM alunos WHERE matricula = '$matricula'";
    $resultado = mysqli_query($conexao, $sqlBusca);

    if (mysqli_num_rows($resultado) > 0) {
        $dados = mysqli_fetch_assoc($resultado);
        $cargaAtual = intval($dados['carga_horaria']);
        $novaTotal = $cargaAtual + $nova_carga;

        $cursosAnteriores = $dados['curso_horas'];

        // Evita duplicações e concatena apenas se for diferente
        if (stripos($cursosAnteriores, $curso_horas) === false) {
            $novoCursoConcat = trim($cursosAnteriores . ', ' . $curso_horas, ', ');
        } else {
            $novoCursoConcat = $cursosAnteriores; // já existe, não adiciona
        }

        // Atualiza carga horária e cursos
        $sqlAtualiza = "UPDATE alunos 
                        SET carga_horaria = $novaTotal, curso_horas = '$novoCursoConcat' 
                        WHERE matricula = '$matricula'";

        if (mysqli_query($conexao, $sqlAtualiza)) {
            echo "<p>Carga horária atualizada com sucesso! Total: $novaTotal horas.</p>";
            echo "<p>Cursos atualizados: $novoCursoConcat</p>";
        } else {
            echo "<p>Erro ao atualizar os dados.</p>";
        }
    } else {
        echo "<p>Matrícula não encontrada.</p>";
    }

    mysqli_close($conexao);
} else {
    echo "<p>Preencha todos os campos!</p>";
}
?>
<div class="botoes">
    <a href="index.html" class="botao">🏠 Início</a>
    <button onclick="history.back()" class="botao">🔙 Voltar</button>
</div>
</body>
</html>
