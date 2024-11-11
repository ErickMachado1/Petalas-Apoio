<?php
$servidor = "sql108.infinityfree.com"; // Nome do servidor

$usuario = "if0_37678981"; // Nome do usuário

$senha = "pf0g155Ou3Ni8Wz"; // Senha de entrada

$banco = "if0_37678981_petalas_apoio"; // Nome do banco que será acessado para realizar as operações

try {
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    // Configura o modo de erro do PD6O para exceções
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}
