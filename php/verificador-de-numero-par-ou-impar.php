<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Número Par ou Ímpar</title>
    <style>
        /* Estilização geral da página */
        body {
            background-color: #e3f4ff;
        }

        div {
            background-color: #94d2ff;
            padding: 50px;
            width: fit-content;
            margin: auto;
            font-family: verdana;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        h1 {
            margin: 0;
        }

        input {
            border: 0;
            padding: 10px;
            margin-top: 20px;
        }

        input:focus {
            outline: 2px solid #0072c4;
        }

        button {
            background-color: #0085e4;
            border: 0;
            padding: 10px;
            color: #ffffff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0072c4;
        }
    </style>
</head>
<body>
<?php
    $numero = $_GET["number"] ?? 0; // Inicializa o número com um valor padrão de 0 se o parâmetro "number" não estiver definido
?>
<div>
    <h1>Verificador de Número<br>Par ou Ímpar</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
        <input type="text" name="number" value="<?= htmlspecialchars($numero) ?>" placeholder="Digite um número:"><button type="submit">Analisar</button>
    </form>
</div>

<?php
    // Verifica se a requisição é do tipo GET
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        // Verifica se o parâmetro "number" está definido e não é vazio
        if (isset($_GET["number"]) && $_GET["number"] !== "") {
            $numero = $_GET["number"];
            
            // Valida se a entrada é numérica
            if (is_numeric($numero)) {
                // Verifica se o número é par ou ímpar
                if ($numero % 2 == 0) {
                    echo "<script>alert('$numero É PAR!');</script>";
                } else {
                    echo "<script>alert('$numero é ÍMPAR!');</script>";
                }
            } else {
                // Mensagem de erro para entrada inválida
                echo "<script>alert('Por favor, insira um número válido.');</script>";
            }
        }
    }
?>
</body>
</html>
