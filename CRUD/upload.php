<?php
include 'database.php'; // Inclui o arquivo de conexão com o banco de dados

if (isset($_FILES['file'])) { // Verifica se um arquivo foi enviado
    $fileName = $_FILES['file']['name']; // Nome do arquivo
    $fileTmpName = $_FILES['file']['tmp_name']; // Caminho temporário do arquivo
    $fileSize = $_FILES['file']['size']; // Tamanho do arquivo
    $fileError = $_FILES['file']['error']; // Erro no upload
    $allowedTypes = ['application/pdf']; // Tipos de arquivos permitidos (apenas PDF)
    $maxSize = 5 * 1024 * 1024; // Tamanho máximo de 5MB

    if ($fileError === 0) { // Verifica se não houve erro no upload
        // Verifica se o tipo e o tamanho do arquivo estão corretos
        if (in_array($_FILES['file']['type'], $allowedTypes) && $fileSize <= $maxSize) {
            $destination = 'uploads/' . basename($fileName); // Define o destino do arquivo com basename para evitar problemas

            // Move o arquivo para a pasta de destino
            if (move_uploaded_file($fileTmpName, $destination)) {
                $nomeUsuario = 'João'; // Nome do usuário (pode ser dinâmico)

                // Insere o caminho do arquivo no banco de dados
                $sql = "INSERT INTO documentos (nome, caminho) VALUES ('$nomeUsuario', '$destination')";

                // Executa a consulta e verifica se foi bem-sucedida
                if ($conn->query($sql) === TRUE) {
                    echo "Upload realizado com sucesso!";
                } else {
                    echo "Erro ao inserir no banco: " . $conn->error; // Exibe erro se houver
                }
            } else {
                echo "Falha ao mover o arquivo."; // Exibe erro se não conseguir mover o arquivo
            }
        } else {
            echo "Tipo ou tamanho de arquivo inválido. O arquivo precisa ser extensão pdf"; // Exibe erro se tipo ou tamanho não forem válidos
        }
    } else {
        echo "Erro no upload do arquivo!"; // Exibe erro no upload
    }
} else {
    echo "Nenhum arquivo enviado."; // Exibe mensagem se nenhum arquivo foi enviado
}

$conn->close(); // Fecha a conexão com o banco de dados
?>
