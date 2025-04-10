<?php
include_once("conectar.php");
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Pesquisa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resultado da Pesquisa</h2>
    <table border="1" style="width: 100%">
        <tr>
            <th>NOME</th>
            <th>Matrícula</th>
            <th>Curso</th>
            <th>E-mail Institucional</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>Curso para Horas Complementares</th>
            <th>Carga Horária</th>
        </tr>

        <?php
        $sql = "SELECT * FROM alunos WHERE nome = '$nome' AND matricula = '$matricula' AND email = '$email'";
        $resultado = mysqli_query($strcon, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($registro = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td>" . $registro['nome'] . "</td>";
                echo "<td>" . $registro['matricula'] . "</td>";
                echo "<td>" . $registro['curso'] . "</td>";
                echo "<td>" . $registro['email'] . "</td>";
                echo "<td>" . $registro['telefone'] . "</td>";
                echo "<td>" . $registro['endereco'] . "</td>";
                echo "<td>" . $registro['cep'] . "</td>";
                echo "<td>" . $registro['cidade'] . "</td>";
                echo "<td>" . $registro['uf'] . "</td>";
                echo "<td>" . $registro['curso_horas'] . "</td>";
                echo "<td>" . $registro['carga_horaria'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='11'>Nenhum aluno encontrado com os dados informados.</td></tr>";
        }

        mysqli_close($strcon);
        ?>
    </table>
<div class="botoes">
    <a href="index.html" class="botao">🏠 Início</a>
    <button onclick="history.back()" class="botao">🔙 Voltar</button>
</div>   
</body>
</html>
