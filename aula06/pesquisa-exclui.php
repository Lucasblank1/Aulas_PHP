<?php
include_once("conectar.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Alunos</title>
</head>
<body>
    <table border="1" style="width:50%">
        <tr>
            <th>NOME</th>
            <th>ENDEREÇO</th>
            <th>CIDADE</th>       
        </tr>
   <?php
   $sql = "SELECT * FROM alunos";
   $resultado = mysqli_query($strcon, $sql);

   while ($registro = mysqli_fetch_array($resultado))
   {
    $nome = $registro['nome'];
    $endereco = $registro['endereco'];
    $cidade = $registro['cidade'];
    echo "<tr>";
    echo "<td>" . $nome . "</td>";
    echo "<td>" . $endereco . "</td>";
    echo "<td>" . $cidade . "</td>";
    echo "</tr>";
   }
   mysqli_close($strcon);
   echo "</table>";
   ?>
   <form name=exclui action="excluir.php" method="post">
        <p>Digite o nome que deseja excluir: 
            <input type="text" name="nome"/></p>
            <input type="submit" name="botao" value="Enviar"/>
   </form>
</body>
</html>