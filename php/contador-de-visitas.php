<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
    <style>
        /* Estilo CSS para centralizar o conteúdo e definir a aparência do contador */
        div {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-family: verdana;
        }

        h2 {
            font-size: 8rem;
            margin: 0;
        }
    </style>
</head>
<body>
    <?php
        // Inicia a sessão para armazenar o contador
        session_start();

        // Verifica se a sessão 'contador' está definida
        if (!isset($_SESSION['contador'])) {
            $_SESSION['contador'] = 1; // Caso o contador não exista, inicializa com 1

            $wordQuantity = "vez"; // Define a palavra "vez" no singular
        } else {
            $_SESSION['contador']++; // Caso o contador já exista, incrementa

            $wordQuantity = "vezes"; // Define a palavra "vezes" no plural
        }

        // Exibe o contador e a mensagem formatada
        echo "<div><h1>Contador de Visitas</h1><p>Esta página foi visitada:</p>" . "<h2>" . $_SESSION['contador'] . "</h2>" . "<p>... $wordQuantity.</p></div>";
    ?>
</body>
</html>
