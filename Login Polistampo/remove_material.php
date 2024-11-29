<?php
include 'db_connect.php';

$codigo = $_POST['codigo'];

$sql = "DELETE FROM estoque WHERE codigo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $codigo);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Material removido com sucesso!";
} else {
    echo "Material não encontrado.";
}
$stmt->close();
?>
