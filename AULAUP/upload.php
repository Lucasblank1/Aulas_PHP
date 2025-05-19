<?php
include 'database.php'; // Inclui o arquivo de conexão com o banco de dados

if (isset($_FILES['file'])) { // Verifica se um arquivo foi enviado
    $fileName = basename($_FILES['file']['name']); // Nome do arquivo
    $fileTmpName = $_FILES['file']['tmp_name']; // Caminho temporário do arquivo
    $fileSize = $_FILES['file']['size']; // Tamanho do arquivo
    $fileError = $_FILES['file']['error']; // Erro no upload
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif']; // Tipos de arquivos permitidos
    $maxSize = 2 * 1024 * 1024; // Tamanho máximo de 2MB

    if ($fileError === 0) { // Verifica se não houve erro no upload
        // Verifica se o tipo e o tamanho do arquivo estão corretos
        if (in_array($_FILES['file']['type'], $allowedTypes) && $fileSize <= $maxSize) {
            $uniqueName = time() . '-' . $fileName; // Evita substituição de arquivos
            $destination = 'uploads/' . $uniqueName; // Define o destino do arquivo

            // Move o arquivo para a pasta de destino
            if (move_uploaded_file($fileTmpName, $destination)) {
                // Prepara e executa a consulta com prepared statement
                $stmt = $conn->prepare("INSERT INTO usuarios (file_name, file_path) VALUES (?, ?)");
                $stmt->bind_param("ss", $fileName, $destination);
                if ($stmt->execute()) {
                    echo "Upload realizado com sucesso!";
                } else {
                    echo "Erro ao inserir no banco de dados: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Falha ao mover o arquivo."; // Exibe erro se não conseguir mover o arquivo
            }
        } else {
            echo "Tipo ou tamanho de arquivo inválido. O arquivo precisa ser JPG, PNG ou GIF, com no máximo 2MB."; // Exibe erro se tipo ou tamanho não forem válidos
        }
    } else {
        echo "Erro no upload do arquivo!"; // Exibe erro no upload
    }
} else {
    echo "Nenhum arquivo enviado."; // Exibe mensagem se nenhum arquivo foi enviado
}


$conn->close(); // Fecha a conexão com o banco de dados
?>

<a href="index.html"><button>Voltar</button></a>