<?php
// conctar ao banco de dados usando BDO
$host = 'localhost';
$dbname = 'pedidos';
$username = 'root';
$password = '';
try {
    $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die ("Erro ao conectar ao banco de dados: " . $e -> getMessage());    
}

if (!isset($_GET['id'])) {
    header('location:index.php'); // obter dados do pedido
    exit();
}

$id = $_GET['id'];

// buscar os pedidos na base de dados

$sql = "SELECT * FROM pedidos WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt -> bindValue(':id', $id);
$stmt -> execute();
$pedido = $stmt -> fetch(); 
// verificar se os dados do pedido estão corretos
if (!$pedido) {
    header('location: index.php');
    exit();
}
?>