<?php
if (!isset($_SESSION)) {
    session_start();
}

// Verifica se o usuário está logado, baseado na variável de sessão 'id'
if (!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"login.php\">Entrar</a></p>");
}
?>
