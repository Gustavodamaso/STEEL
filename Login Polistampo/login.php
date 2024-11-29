<?php
include('conexao.php'); // Certifique-se de que conexao.php inicializa a variável $mysqli

// Iniciar sessão no topo, caso ainda não tenha sido iniciada
if (!isset($_SESSION)) {
    session_start();
}

$erro_login = ''; // Variável para armazenar mensagem de erro

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST['usuario'])) {
        $erro_login = "Preencha seu nome de usuário";
    } else if (empty($_POST['codigo'])) {
        $erro_login = "Preencha seu Código";
    } else {

        // Escapando as entradas para evitar SQL Injection
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $codigo = $mysqli->real_escape_string($_POST['codigo']);

        // Consulta SQL para verificar o usuário e o código, e obter o tipo de usuário
        $sql_code = "SELECT id, tipo_usuario FROM usuarios WHERE usuario = ? AND codigo = ?";
        $stmt = $mysqli->prepare($sql_code);
        $stmt->bind_param("ss", $usuario, $codigo);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id, $tipo_usuario);
            $stmt->fetch();

            // Armazena o ID do usuário e o tipo na sessão
            $_SESSION['id'] = $user_id;
            $_SESSION['tipo_usuario'] = $tipo_usuario;

            // Redireciona com base no tipo de usuário
            switch ($tipo_usuario) {
                case 'estoque':
                    header("Location: dashboard.php");
                    break;
                case 'vendedor':
                    header("Location: estoque.php");
                    break;
                case 'cliente':
                    header("Location: index_cliente.php");
                    break;
                default:
                    header("Location: index_default.php");
                    break;
            }
            exit();
        } else {
            $erro_login = "Falha ao logar! Usuário ou Código incorretos.";
        }
        $stmt->close();
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="img/Logo 1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>POLISTAMPO STEEL</title>
</head>
<body>
    <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="" method="POST">
                <img src="img/Logo Login.png" alt="" width="150px" height="150px">
				<div class="login__field">
                    <i class="ri-user-2-fill"></i>
					<input type="text" class="login__input" name="usuario" placeholder="Usuário...">
				</div>
				<div class="login__field">
                    <i class="ri-key-2-fill"></i>
					<input type="password" class="login__input" name="codigo" placeholder="Código de Acesso...">
				</div>
                <!-- Exibe a mensagem de erro com transição suave, se houver --> 
                 <?php if ($erro_login): ?> <p class="error-message show"><?php echo $erro_login; ?></p> <?php else: ?> <p class="error-message"><?php echo $erro_login; ?></p> <?php endif; ?>
				<button class="button login__submit">
					<span class="button__text" type="submit">Entrar</span>
				</button>				
			</form>
			
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.body.style.display = 'block';
        });
    </script>
</body>
</html>
