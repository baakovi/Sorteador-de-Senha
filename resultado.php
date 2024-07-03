<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>

        <link rel="stylesheet" href="styles.css">

        <!-- Fontes personalizáveis -->
        <!-- Poppins -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Maria -->
        <link href="https://fonts.cdnfonts.com/css/maria-2" rel="stylesheet">
    </head>
<body>
<?php
// Verifica se há um número passado por parâmetro
if (isset($_GET['numero'])) {
    $sort = htmlspecialchars($_GET['numero']);
} else {
    $sort = "<h1>Número não especificado.</h1>";
}
?>

    <div class="container">
        <div>
            <h2 class="result">E o resultado é...</h2>
        </div>

        <div>
            <h1 class="maria">Número sorteado: <?= $sort; ?></h1>
        </div>

        <div>
            <button class="button-sorteio"><a href="sorteio.php">Novo sorteio</a></button>
        </div>
    </div>
</body>
</html>