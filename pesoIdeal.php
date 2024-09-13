<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Peso Ideal</title>
</head>
<body>
<form action="" method="POST">

<label for="altura">Altura (em metros): </label>
<input type="number" id="altura" name="altura" step="0.01" required><br><br>

<label for="sexo">Sexo:</label>
<select id="sexo" name="sexo" required>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
</select><br><br>

<button type="submit">Calcular</button>
<button type="reset">Limpar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = $_POST['altura'];
    $sexo = $_POST['sexo'];

    function calcular_peso_ideal($sexo, $altura) {
        if ($sexo == 'Masculino') {
            // Fórmula para homens
            $pesoIdeal = (72.2 * $altura) - 58;
        } elseif ($sexo == 'Feminino') {
            // Fórmula para mulheres
            $pesoIdeal = (62.1 * $altura) - 44.7;
        } else {
            return "Sexo inválido.";
        }
        return $pesoIdeal;
    }

    $pesoIdeal = calcular_peso_ideal($sexo, $altura);
    echo "O peso ideal é: " . $pesoIdeal . " kg";
}
?>

</body>
</html>