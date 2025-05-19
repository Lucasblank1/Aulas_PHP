<?php
include 'database.php'; // Inclui o arquivo de conexão com o banco de dados

$result = $conn->query("SELECT * FROM documentos"); // Recupera todos os registros da tabela documentos

echo "<h1>Arquivos Enviados</h1>";
if ($result && $result->num_rows > 0) { // Verifica se há resultados
    while ($row = $result->fetch_assoc()) { // Itera sobre os resultados
        echo "<p>{$row['nome']}</p>"; // Exibe o nome do usuário
        echo "<a href='{$row['caminho']}' target='_blank'>Ver PDF</a>"; // Link para visualizar o arquivo PDF
        echo " | <a href='delete.php?id={$row['id']}'>Deletar</a>"; // Link para deletar o arquivo
        echo "<br>"; // Quebra de linha para melhor apresentação
    }
} else {
    echo "<p>Nenhum arquivo enviado.</p>"; // Mensagem se não houver registros
}
$conn->close(); // Fecha a conexão com o banco de dados
?>
