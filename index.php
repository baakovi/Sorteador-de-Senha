<?php

// Função para gerar um número pseudoaleatório entre $min e $max
function meu_rand($min, $max) {
    return mt_rand($min, $max);
}

// Sorteia um número entre 1 e 100
$numeroSorteado = meu_rand(1, 100);

?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Sorteio</title>

        <link rel="stylesheet" href="styles.css">

        <!-- Fontes personalizáveis -->
        <!-- Poppins -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Maria -->
        <link href="https://fonts.cdnfonts.com/css/maria-2" rel="stylesheet">
        
    <script>

        // Função para mostrar o texto gradualmente
        function mostrarTextoGradualmente(texto, index, tempo) {
            if (index < texto.length) {
                document.getElementById("texto-suspense").innerHTML += texto.charAt(index);
                index++;
                setTimeout(function() { mostrarTextoGradualmente(texto, index, tempo); }, tempo);
            } else {
                setTimeout(function() { window.location.href = "resultado.php?numero=<?php echo $numeroSorteado; ?>"; }, 1200); // Redireciona para resultado.php após 1.5 segundos
            }
        }

        // Chama a função ao carregar a página
        window.onload = function() {
        // document.getElementById("button-sorteio").onclick = function() {
        let textoSuspense = "O número sorteado é: <?php echo $numeroSorteado; ?>";
        mostrarTextoGradualmente(textoSuspense, 0, 100); // Mostra um caractere a cada 100ms
        };

    </script>

    </head>

    <body>
    
        <!-- <button id="button-sorteio">Começar sorteio</button> -->

        <p id="texto-suspense"></p>

    </body>
</html>
