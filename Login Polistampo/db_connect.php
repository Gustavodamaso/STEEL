<?php
$servername = "localhost";  // Ou o endereço do seu servidor de banco de dados
$username = "root";
$password = "";
$dbname = "estoque_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
