<?php
include_once("conectar.php");

$nome = $_POST['nome'];
$sql = "DELETE FROM alunos WHERE nome = '$nome'";
$resultado = mysqli_query($strcon, $sql);

echo "Exclusão realizada com sucesso!";
mysqli_close($strcon);

?>