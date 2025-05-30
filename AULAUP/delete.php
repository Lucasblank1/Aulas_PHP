<?php
include 'database.php'; // Inclui o arquivo de conexão com o banco de dados

if (isset($_GET['id'])) { // Verifica se um ID foi passado pela URL
    $id = $_GET['id']; // Obtém o ID
    // Recupera o caminho da foto do banco de dados
    $result = $conn->query("SELECT file_path FROM usuarios WHERE id = $id");
    $row = $result->fetch_assoc();
    
    $fotoPerfil = $row['file_path']; // Caminho da foto
    // Tenta deletar o arquivo do servidor
    if (unlink($fotoPerfil)) {
        $conn->query("DELETE FROM usuarios WHERE id = $id"); // Remove o registro do banco de dados
        echo "Usuário e foto deletados com sucesso."; // Mensagem de sucesso
    } else {
        echo "Erro ao deletar o arquivo."; // Mensagem de erro ao deletar o arquivo
    }
}

$conn->close(); // Fecha a conexão com o banco de dados
?>

<!-- Botão de Voltar -->
<br>
<a href="view.php"><button>Voltar</button></a>
