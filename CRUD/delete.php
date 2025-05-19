<?php
include 'database.php'; // Inclui o arquivo de conexão com o banco de dados

if (isset($_GET['id'])) { // Verifica se um ID foi passado pela URL
    $id = $_GET['id']; // Obtém o ID
    // Recupera o caminho do PDF do banco de dados
    $result = $conn->query("SELECT caminho FROM documentos WHERE id = $id");
    $row = $result->fetch_assoc();
    
    $caminhoArquivo = $row['caminho']; // Caminho do PDF
    // Tenta deletar o arquivo do servidor
    if (unlink($caminhoArquivo)) {
        $conn->query("DELETE FROM documentos WHERE id = $id"); // Remove o registro do banco de dados
        echo "Documento deletado com sucesso."; // Mensagem de sucesso
    } else {
        echo "Erro ao deletar o arquivo."; // Mensagem de erro ao deletar o arquivo
    }
}

$conn->close(); // Fecha a conexão com o banco de dados
?>
