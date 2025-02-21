<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IMC</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Resultado do IMC</h1>
        <?php
        function calculoImc($peso, $altura) {
            $altura = $altura / 100;  // Converter altura para metros
            return $peso / ($altura * $altura);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];

            $massa = calculoImc($peso, $altura);
            $massa = number_format($massa, 2, '.', '');

            $medida = [
                ['max' => 18.5, 'msg' => 'Magreza'],
                ['min' => 18.51, 'max' => 24.9, 'msg' => 'Saudável'],
                ['min' => 25.0, 'max' => 29.9, 'msg' => 'Sobrepeso'],
                ['min' => 30.0, 'max' => 34.9, 'msg' => 'Obesidade Grau I'],
                ['min' => 35.0, 'max' => 39.9, 'msg' => 'Obesidade Grau II'],
                ['max' => 39.9, 'msg' => 'Obesidade Grau III'],
            ];

            for ($i = 0; $i < sizeof($medida); $i++) {
                if ($massa >= $medida[$i]['max']) {
                    $msg = $medida[$i]['msg'];
                } elseif ($massa >= $medida[$i]['min'] && $massa <= $medida[$i]['max']) {
                    $msg = $medida[$i]['msg'];
                    break;
                } elseif ($massa <= $medida[$i]['max']) {
                    $msg = $medida[$i]['msg'];
                    break;
                }
            }

            echo "<p>Atenção, seu IMC é $massa e está classificado como <strong>$msg</strong></p>";
        }
        ?>
        <!-- Botão para voltar -->
        <form action="index.html" method="get">
            <button type="submit" class="btn">Voltar</button>
        </form>
    </div>
</body>

</html>
