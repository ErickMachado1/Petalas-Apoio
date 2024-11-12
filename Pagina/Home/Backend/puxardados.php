<?php
include_once("connect.php");

try {

    $emotion = isset($_GET['emotion']) ? $_GET['emotion'] : null;

    if ($emotion) {

        $sql = "SELECT * FROM mensagens WHERE emocao = :emotion ORDER BY RAND() LIMIT 1";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':emotion', $emotion, PDO::PARAM_STR);
        $stmt->execute();


        $mensagem = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($mensagem) {

            echo "<p id='mensagem'>" . htmlspecialchars($mensagem['mensagem']) . "</p><br>";
        } else {
            echo "<p id='mensagem'> Nenhuma mensagem com esta emoção </p><br>";
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitor - Petalas de Apoio</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" href="../../Img/favicon.ico" type="image/x-icon">
    <script src="script1.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="fundo">
        <a id="Voltar" href="http://petalasdeapoio24.infinityfreeapp.com">Retornar ao inicio</a>
    </div>
</body>

</html>