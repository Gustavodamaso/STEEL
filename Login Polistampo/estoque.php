<?php
include('protect.php');

include('db_connect.php');
// Função para formatar os valores
function formatarData($data) {
    return date('d/m/Y', strtotime($data));
}

function formatarCodigo($codigo) {
    return str_pad($codigo, 15, '0', STR_PAD_LEFT); // Preenche com zeros à esquerda
}

function formatarBitola($bitola) {
    return number_format($bitola, 2, ',', '');
}

function formatarQuantidade($quantidade) {
    return number_format($quantidade, 0, '', '.') . 'kg';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estoque.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/Logo 1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTOQUE - POLISTAMPO</title>
</head>
<body>
 

    <div id="content">
        <button class="voltar" onclick="window.location.href='logout.php'">
        <i class="ri-logout-box-line"></i>
        </button>

        <header>
            <h1>ESTOQUE</h1> 

            <div class="logout" id="logout">
                <a href="login.html" class="logout-link"><i class="ri-logout-circle-line"></i></a>
            </div>
        </header>

        <button class="buscar">
            Filtrar <i class="ri-search-2-line"></i>
        </button>

        <div class="container">
            <div class="card">
                <div class="card-content">FINAS A QUENTE</div>
                <button class="consulta-btn">Consultar</button>
            </div>
            <div class="card">
                <div class="card-content">FINAS A FRIO</div>
                <button class="consulta-btn">Consultar</button>
            </div>
            <div class="card">
                <div class="card-content">ZINCADAS</div>
                <button class="consulta-btn">Consultar</button>
            </div>
        </div>

        <div class="chapas-card">
            <div class="card-estoque"><p>FINAS A QUENTE</p></div>
            <button class="refresh-button" onclick="location.reload()">Atualizar</button>
            <button class="voltar-button" onclick="window.location.href='estoque.php'">Voltar</button>

            <table id="chapa-table" border="1">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Código</th>
                        <th>Bitola</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            $result = $conn->query("SELECT * FROM estoque WHERE categoria = 'FINAS A QUENTE' ORDER BY data DESC");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['data']}</td>
                        <td>{$row['codigo']}</td>
                        <td>{$row['bitola']}</td>
                        <td>{$row['descricao']}</td>
                        <td>{$row['quantidade']}</td>
                        <td>{$row['status']}</td>
                      </tr>";
            }
            ?>
                </tbody>
            </table>
        </div>

        <div class="chapas-card2">
            <div class="card-estoque">
                <p>FINAS A FRIO</p>
            </div>
            <button class="refresh-button" onclick="location.reload()">Atualizar</button>
            <button class="voltar-button" onclick="window.location.href='estoque.php'">Voltar</button>
            
            <table id="bobina-table" border="1">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Código</th>
                        <th>Bitola</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            $result = $conn->query("SELECT * FROM estoque WHERE categoria = 'FINAS A FRIO' ORDER BY data DESC");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['data']}</td>
                        <td>{$row['codigo']}</td>
                        <td>{$row['bitola']}</td>
                        <td>{$row['descricao']}</td>
                        <td>{$row['quantidade']}</td>
                        <td>{$row['status']}</td>
                      </tr>";
            }
            ?>
                </tbody>
            </table>
        </div>

        <div class="chapas-card3">
            <div class="card-estoque"><p>ZINCADAS</p></div>
            <button class="refresh-button" onclick="location.reload()">Atualizar</button>
            <button class="voltar-button" onclick="window.location.href='estoque.php'">Voltar</button>

            <table id="blank-table" border="1">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Código</th>
                        <th>Bitola</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            $result = $conn->query("SELECT * FROM estoque WHERE categoria = 'ZINCADAS' ORDER BY data DESC");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['data']}</td>
                        <td>{$row['codigo']}</td>
                        <td>{$row['bitola']}</td>
                        <td>{$row['descricao']}</td>
                        <td>{$row['quantidade']}</td>
                        <td>{$row['status']}</td>
                      </tr>";
            }
            ?>
                </tbody>
            </table>
        </div>


        <script>
           
            window.onload = function() {
                setTimeout(function() {
                    // Remove o loader
                    document.querySelector('.loader-overlay').style.display = 'none';

                    // Adiciona a classe 'loaded' ao body para mostrar o conteúdo
                    document.body.classList.remove('loading');
                    document.body.classList.add('loaded');

                    loadMaterials(); // Carrega os materiais após o carregamento
                }, 3000); // 3000ms = 3 segundos
            };
        </script>

        <script>
            document.querySelectorAll('.consulta-btn').forEach((button, index) => {
                button.addEventListener('click', function() {
                    // Remove o blur e overlay anteriores, se houver
                    document.querySelectorAll('.chapas-card, .chapas-card2, .chapas-card3, .chapas-card4').forEach(card => {
                        card.classList.remove('show');
                    });

                    // Exibe o card correspondente baseado no índice do botão
                    switch (index) {
                        case 0:
                            document.querySelector('.chapas-card').classList.add('show');
                            break;
                        case 1:
                            document.querySelector('.chapas-card2').classList.add('show');
                            break;
                        case 2:
                            document.querySelector('.chapas-card3').classList.add('show');
                            break;
                        case 3:
                            document.querySelector('.chapas-card4').classList.add('show');
                            break;
                    }

                    // Adiciona efeito de desfoque ao fundo
                    const overlay = document.createElement('div');
                    overlay.classList.add('overlay');
                    document.body.appendChild(overlay);
                    document.body.classList.add('blur-background');
                });
            });
        </script>
        
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.body.style.display = 'block';
        });
    </script>

</body>
</html>

    
