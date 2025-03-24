<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "banco01";

$strcon = mysqli_connect ($servername, $username, $password, $database);

if (!$strcon) {
    die ("Falha na conexão: " . mysqli_connect_error());
}
echo "Sucesso na conexão";
?>