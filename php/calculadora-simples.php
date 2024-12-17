<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <style>
        /* Estilização para a tabela, cabeçalhos (th) e células (td) */
        table, th, td {
            border: 1px solid #000;
            border-collapse: collapse;
            font-family: verdana;
            text-align: center;
        }
        
        caption {
            margin-bottom: 5px;
        }

        th {
            background-color: #f5f5f5;
            padding: 15px;
        }

        td {
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php 
        // Definindo os números para os cálculos
        $num1 = 10;
        $num2 = 5;
    ?>
    <!-- Início da tabela para exibir resultados -->
    <table>
        <caption>Calculadora Simples</caption>
        <!-- Cabeçalho da tabela -->
        <tr>
            <th>Operador</th>
            <th>1º operando</th>
            <th>2º operando</th>
            <th>Cálculo</th>
            <th>Resultado</th>
        </tr>
        <!-- Linha para Adição -->
        <tr>
            <td>Adição</td>
            <td rowspan="8"><?= $num1 ?></td>
            <td rowspan="8"><?= $num2 ?></td>
            <td><?= $num1 . " + " . $num2 ?></td>
            <td><?= $num1 + $num2 ?></td>
        </tr>
        <!-- Linha para Subtração -->
        <tr>
            <td>Subtração</td>
            <td><?= $num1 . " - " . $num2 ?></td>
            <td><?= $num1 - $num2 ?></td>
        </tr>
        <!-- Linha para Multiplicação -->
        <tr>
            <td>Multiplicação</td>
            <td><?= $num1 . " × " . $num2 ?></td>
            <td><?= $num1 * $num2 ?></td>
        </tr>
        <!-- Linha para Divisão -->
        <tr>
            <td>Divisão</td>
            <td><?= $num1 . " ÷ " . $num2 ?></td>
            <td><?= $num1 / $num2 ?></td>
        </tr>
        <!-- Linha para Resto da Divisão -->
        <tr>
            <td>Resto da Divisão</td>
            <td><?= $num1 . " % " . $num2 ?></td>
            <td><?= $num1 % $num2 ?></td> <!-- Alternativa manual: $num1 - floor($num1 / $num2) * $num2 -->
        </tr>
        <!-- Linha para Exponenciação -->
        <tr>
            <td>Exponenciação</td>
            <td><?= $num1 . " ^ " . $num2 ?></td>
            <td><?= $num1 ** $num2 ?></td> <!-- Função alternativa: pow($num1, $num2); -->
        </tr>
        <!-- Linhas para Raiz Quadrada -->
        <tr>
            <td rowspan="2">Raiz Quadrada</td>
            <td><?= "√" . $num1 ?></td>
            <td><?= sqrt($num1) ?></td>
        </tr>
        <tr>
            <td><?= "√" . $num2 ?></td>
            <td><?= sqrt($num2) ?></td>
        </tr>
    </table>
</body>
</html>
