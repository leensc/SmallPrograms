<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        /* Estilização simples para os elementos que compõe a tabuada */
        h1 {
            width: 100%;
            text-align: center;
        }

        body {
            display: flex;
            flex-wrap: wrap;
            font-family: verdana;
            justify-content: center;
            background-color: #ffeeca;
        }

        div {
            width: 200px;
            margin: 20px;
            padding: 20px 10px;
            border-radius: 20px;
            color: #ffffff;
            position: relative;
        }

        div > p {
            width: fit-content;
            margin: 15px auto 0 auto;
        }

        div > p:last-child {
            margin-bottom: 15px;
        }

        h2 {
            position: absolute;
            left: -2%;
            top: -2%;
            margin: 0;
            background-color: #ffeeca;
            color: #000000;
            padding: 10px;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            text-align: center;
            font-size: 0.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <?php 
        // Define o número inicial e final para a geração da tabuada
        $numeroInicial = 0; // Início da tabuada
        $numeroFinal = 10; // Fim da tabuada
    ?>
    <h1>Tabuada do <em><?= $numeroInicial ?></em> a <em><?= $numeroFinal ?></em></h1>
    <?php
        // Define um array com cores para estilizar as divisões
        $cores = ['#40aa03', '#03aa83', '#a5aa03', '#00cbf4', '#0346aa', '#6d03aa', '#aa03aa', '#aa0375', '#aa0317', '#cf6b07', '#464545', '#080649'];

        // Loop principal que percorre os números da tabuada
        for ($numero = $numeroInicial; $numero <= $numeroFinal; $numero++) {
            $cor = $cores[$numero % count($cores)]; // Escolhe a cor correspondente para o número atual
            
            echo "<div style='background-color: $cor;'>";
            echo "<h2>$numero</h2>";

            // Loop secundário que percorre os multiplicadores de 0 a 10
            for ($i = 0; $i <= 10; $i++) {
                // Calcula o resultado da multiplicação e exibe no formato "n × i = resultado"
                echo "<p>$numero × $i = " . ($numero * $i) . "</p>";
            }
            
            echo "</div>";
        }
    ?>
</body>
</html>
