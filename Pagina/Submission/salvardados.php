<?php
$emoção = $_POST["emoção"];
$mensagem = $_POST["Mensagem"];


$servidor = "localhost"; // Nome do servidor

$usuario = "root"; // Nome do usuário

$senha = ""; // Senha de entrada

$banco = "petalas_apoio"; // Nome do banco que será acessado para realizar as operações

try {
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    // Configura o modo de erro do PD6O para exceções
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}

$sql = "INSERT INTO mensagens (emoção, mensagem)
    VALUES (?, ?)";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(1, $emoção);
$stmt->bindParam(2, $mensagem);
$stmt->execute();

header("Location: ../Submission/Obrigado.html");
exit();