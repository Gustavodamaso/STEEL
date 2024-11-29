<?php
include('db_connect.php'); // Conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoria = $_POST['categoria'];
    $codigo = substr($_POST['codigo'], 0, 12); // Limita o código a 12 caracteres
    $bitola = number_format(floatval($_POST['bitola']), 2, ',', ''); // Formata bitola com duas casas decimais
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $status = $_POST['status'];
    $data = date('Y-m-d H:i:s');

    // Insere o material no estoque
    $stmt = $conn->prepare("INSERT INTO estoque (categoria, codigo, bitola, descricao, quantidade, status, data) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiss", $categoria, $codigo, $bitola, $descricao, $quantidade, $status, $data);
    $stmt->execute();
    $stmt->close();

    // Adiciona a descrição no histórico, se ainda não existir
    $stmt = $conn->prepare("INSERT IGNORE INTO descricao_historico (descricao) VALUES (?)");
    $stmt->bind_param("s", $descricao);
    $stmt->execute();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="stylesheet" href="ad_materiais?v=<?php echo time(); ?>">
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="img/Logo 1.png" type="image/x-icon">
    <title>ADICIONAR MATERIAIS - POLISTAMPO</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<button class="voltar" onclick="window.location.href='dashboard.php'">
    <i class="ri-arrow-left-s-line"></i>
        </button>

<h1>Adicionar ao Estoque</h1>

<!-- Formulário para adicionar material ao estoque -->
<form method="POST">
    <label>Categoria:</label>
    <select name="categoria" required>
        <option value="FINAS A QUENTE">FINAS A QUENTE</option>
        <option value="FINAS A FRIO">FINAS A FRIO</option>
        <option value="ZINCADAS">ZINCADAS</option>
    </select>
    
    <label for="codigo" class="input-label">Código:</label>
    
    <div class="input-box">
    <input type="text" id="codigo" name="codigo" maxlength="12" required class="input">
    <span class="input-helper">enter a valid email</span>
    </div>
   

    <label class="input-label">Bitola:</label>
    
    <div class="input-box">
    <input type="number" name="bitola" step="0.01" required class="input">
    <span class="input-helper">enter a valid email</span>
    </div>
 

    <label class="input-label">Descrição:</label>

    <div class="input-box">
    <input type="text" name="descricao" list="descricao-historico" required class="input">
    <span class="input-helper">enter a valid email</span>
    </div>

    <datalist id="descricao-historico">
        <?php
        // Consulta ao banco para obter o histórico de descrições
        $sql = "SELECT descricao FROM descricao_historico";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . htmlspecialchars($row['descricao']) . '">';
        }
        ?>
    </datalist>
    
    <label class="input-label">Quantidade:</label>
    
    <div class="input-box">
    <input type="number" name="quantidade" required class="input">
    <span class="input-helper">enter a valid email</span>
    </div>
   
    <label class="input-label">Status:</label>
    <select name="status" required class="input">
        <option value="disponível">Disponível</option>
        <option value="indisponível">Indisponível</option>
    </select>
    
    <button type="submit">Adicionar</button>
</form>

<p>_________________________________________________________________</p>
<!-- Formulário para atualizar o status de um material específico -->
<h2>Atualizar Status do Material</h2>
<form action="update_status.php" method="POST">
    <label for="codigo" class="input-label">Código do Material:</label>
    
    <div class="input-box">
    <input type="text" id="codigo" name="codigo" maxlength="12" required class="input">
    <span class="input-helper">enter a valid email</span>
    </div>
 
    <label for="status" class="input-label">Novo Status:</label>
    <select id="status" name="status" required class="input">
        <option value="disponível">Disponível</option>
        <option value="indisponível">Indisponível</option>
    </select>

    <button type="submit">Atualizar Status</button>
</form>

<p>_________________________________________________________________</p>
<!-- Formulário para remover um material específico -->
<h2>Remover Material do Estoque</h2>
<form action="remove_material.php" method="POST">
    <label for="codigo" class="input-label">Código do Material para Remover:</label>
    
    <div class="input-box">
    <input type="text" id="codigo" name="codigo" maxlength="12" required class="input">
    <span class="input-helper">enter a valid email</span>
    </div>

    <button type="submit">Remover Material</button>
</form>
<span class="box">
<a href="estoque.php">Visualizar Estoque</a>
</span>


<script>
        document.addEventListener('DOMContentLoaded', function() {
            document.body.style.display = 'block';
        });
    </script>

</body>
</html>
