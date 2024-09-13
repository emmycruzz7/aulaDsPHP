HTML

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Moedas</title>
</head>
<body>

<form action="" method="POST">

<label for="C">Conversão de dólar para real: </label>
<input type="number" id="C" name="C" step="0.01" required><br><br>

<button type="submit">Converter</button>
<button type="reset">Limpar</button>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor_dolar = $_POST['C'];

    function converter_dolar_para_real($valor_dolar) {
        $cotacao = 1.81;
        $valor_real = $valor_dolar * $cotacao;
        return round($valor_real, 2);
    }

    $valor_convertido = converter_dolar_para_real($valor_dolar);
    echo "$valor_dolar dólares é igual a R$ $valor_convertido reais.";
}
?>

</body>
</html>