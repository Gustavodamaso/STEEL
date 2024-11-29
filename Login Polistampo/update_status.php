<?php
include 'db_connect.php';

$codigo = $_POST['codigo'];
$status = $_POST['status'];

$sql = "UPDATE estoque SET status = ? WHERE codigo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $status, $codigo);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Status atualizado com sucesso!";
} else {
    echo "Material não encontrado.";
}
$stmt->close();
?>
