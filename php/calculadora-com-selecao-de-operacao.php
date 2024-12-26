<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora com Seleção de Operação</title>
    <style>
        /* Estilos para os elementos em geral da página */
        body {
            background-color: #ffae00;
        }

        form {
            width: 400px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            background-color: #ffffff;
            box-shadow: 0 0 20px #bc8001;
            padding: 30px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        input, select {
            width: 100%;
            padding: 10px;
        }

        input[type="submit"] {
            margin-top: 20px;
        }

        hr {
            width: 50%;
            height: 1px;
            background-color: #bc8101;  
            margin: 20px auto;
        }

        div {
            width: 100%;
            background-color: #ffae00;
            color: #ffffff;
            padding: 20px;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $num1 = $_GET['num1'] ??= 0; /* Inicializa num1 com 0 se não for enviado */
            $num2 = $_GET['num2'] ??= 0; /* Inicializa num2 com 0 se não for enviado */
            $operation = $_GET['operation'] ??= "add"; /* Define operação padrão como adição */

            /* Escolhe a operação com base no valor selecionado */
            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    $result = $num1 / $num2;
                    break;
                default:
                    $result = "Operação inválida!"; /* Mensagem caso a operação seja desconhecida */
            }
        }
    ?>
    <form method="GET">
        <h1>Calculadora com Seleção de Operação</h1>
        <!-- Campo para o primeiro número -->
        <input type="number" name="num1" value="<?= $num1 ?>" placeholder="Número 1 (Padrão: 0)" required>
        <!-- Campo para o segundo número -->
        <input type="number" name="num2" value="<?= $num2 ?>" placeholder="Número 2 (Padrão: 0)" required>
        <!-- Menu suspenso para selecionar a operação -->
        <select name="operation">
            <option value="add">Operação de Adição (+)</option>
            <option value="subtract">Operação de Subtração (-)</option>
            <option value="multiply">Operação de Multiplicação (×)</option>
            <option value="divide">Operação de Divisão (÷)</option>
        </select>
        <input type="submit" value="Calcular">
        <hr>
        <!-- Exibe o resultado se estiver definido -->
        <?php if (isset($result)) { echo "<div>Resultado: $result</div>"; } ?>
    </form>
</body>
</html>
