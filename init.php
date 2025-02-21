<?php
// Dados de conexão com o banco de dados
$host = 'localhost';
$dbname = 'cadastro_usuarios';
$user = 'seu_usuario';
$password = 'sua_senha';

try {
    // Conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Função para executar consultas SQL
    function executeQuery($sql, $params = [])
    {
        global $pdo;
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
} catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
    exit;
}
