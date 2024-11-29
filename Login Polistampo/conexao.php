<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

// Corrigindo a ordem dos parâmetros: host, username, password, database
$mysqli = new mysqli($host, $usuario, $senha, $database);

// Verificando se houve erro na conexão
if ($mysqli->connect_error) {
    die("Falha ao Conectar com o Sistema Polistampo, Consulte o Administrador: " . $mysqli->connect_error);
}

?>
